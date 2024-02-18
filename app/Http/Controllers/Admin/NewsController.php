<?php

namespace App\Http\Controllers\Admin;
use DOMDocument;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $news = News::with('user')
            ->when(isset($request->search), function ($q) use ($request) {
                $q->where('title', 'like', "%{$request->title}%");
                $q->Orwhere('short_description', 'like', "%{$request->short_description}%");
                $q->Orwhere('description', 'like', "%{$request->description}%");
            })
            ->orderBy('id', 'desc')
            ->paginate(perPage());

        return view('admin.news.list', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $description = $request->description;

        $dom = new DOMDocument();
        $dom->loadHTML($description);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
            $image_name = "/editorImage/" . time(). $key.'.png';
            file_put_contents(public_path().$image_name,$data);

            $img->removeAttribute('src');
            $img->setAttribute('src',$image_name);
        }
        $description = $dom->saveHTML();
        $input = $request->validate([
            'title' => 'required|max:255|unique:news',
            'short_description' => 'required',
            'description' => 'required',
            'status' => 'required',
            'img' => 'required|image',
            'min' => 'required|numeric',
            //'cid' => 'required|integer',
            'type' => 'required',
        ]);

        $input['created_by'] = auth()->id();
        $input['slug'] = Str::slug($input['title']);
        $input['img'] = uploadImage($input['img'], 'news');

        News::create($input);

        return redirect()
            ->route('news')
            ->with('news.success', 'News created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $description = $request->description;

        $dom = new DOMDocument();
        $dom->loadHTML($description);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {

            // Check if the image is a new one
            if (strpos($img->getAttribute('src'),'data:image/') ===0) {
              
                $data = base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
                $image_name = "/editorImage/" . time(). $key.'.png';
                file_put_contents(public_path().$image_name,$data);
                
                $img->removeAttribute('src');
                $img->setAttribute('src',$image_name);
            }

        }
        $description = $dom->saveHTML();
        $input = $request->validate([
            'title' => 'required|max:255|unique:news,title,' . $news->id,
            'short_description' => 'required',
            'description' => 'required',
            'status' => 'required',
            'img' => 'nullable|image',
            'min' => 'required|numeric',
            //'cid' => 'required|integer',
            'type' => 'required',
        ]);

        $input['created_by'] = auth()->id();
        $input['slug'] = Str::slug($input['title']);

        if (isset($input['img'])) {

            $input['img'] = uploadImage($input['img'], 'news');

            deleteImage($news);
        }

        $news->update($input);

        return redirect()
            ->route('news')
            ->with('news.success', 'News updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();

        return redirect()
            ->route('news')
            ->with('news.success', 'News updated successfully');
    }
}
