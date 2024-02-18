<?php

namespace App\Http\Controllers\Admin;

use DOMDocument;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\{
    Article,
    Fantasy,
};

use Illuminate\Support\{
    Str,
};

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $res = Article::with('user')
            ->when(isset($request->search), function ($q) use ($request) {
                $q->where('title', 'like', "%{$request->search}%");
                $q->Orwhere('description', 'like', "%{$request->search}%");
            })
            ->orderBy('id', 'desc')
            ->paginate(perPage());

        return view('admin.article.list', compact('res'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $fantasy = Fantasy::where('status', 1)
            ->pluck('title', 'id');

        $season_match = collect();
        
        if ($request->has('cid')) {

            $season_match = getSeasonsDetails($request->cid);
            

        }

        return view('admin.article.create', compact('fantasy', 'season_match'));
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
        @$dom->loadHTML($description);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
            $image_name = "/editorImage/" . time(). $key.'.png';
            file_put_contents(public_path().$image_name, $data);

            $img->removeAttribute('src');
            $img->setAttribute('src',$image_name);
        }
        $description = $dom->saveHTML();

        $input = $request->validate([
            'title' => 'required|max:250|unique:articles',
            'description' => 'required',
            'short_description' => 'required',
            'img' => 'required|image',
            'status' => 'required',
            'category' => 'required',
            'cid' => 'required_if:category,==,seasons_update',
            'type' => 'required',
            'min' => 'required|numeric',
            'fantasy_id' => 'required_if:category,==,fantasy|integer|exists:fantasies,id',
            'match_id' => 'required_if:fantasy_id,!=,null|integer'
        ]);

        $input['img'] = uploadImage($input['img'], 'article');
        $input['slug'] = Str::slug($input['title']);
        $input['created_by'] = auth()->id();

        Article::create($input);

        return redirect()
            ->route('article')
            ->with('article.success', 'Article created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Article $article)
    {
        $fantasy = Fantasy::where('status', 1)
            ->pluck('title', 'id');
        
        $c_id = $request->has('cid') ? $request->cid : $article->cid;
       
		
        $season_match = getSeasonsDetails($c_id);

        return view('admin.article.edit', compact('article', 'fantasy', 'season_match'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
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
            'title' => 'required|max:250|unique:articles,title,' . $article->id,
            'description' => 'required',
            'short_description' => 'required',
            'img' => 'nullable|image',
            'status' => 'required',
            'category' => 'required',
            'cid' => 'required_if:category,==,seasons_update',
            'type' => 'required',
            'min' => 'required|numeric',
            'fantasy_id' => 'required_if:category,==,fantasy|integer|exists:fantasies,id',
            'match_id' => 'required_if:fantasy_id,!=,null|integer'
        ]);

        if (isset($input['img'])) {

            $input['img'] = uploadImage($input['img'], 'article');

            deleteImage($article->img);
        }

        $input['slug'] = Str::slug($input['title']);

        $article->update($input);

        return redirect()
            ->route('article')
            ->with('article.success', 'Article updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()
            ->back()
            ->with('article.error', 'Article deleted successfully!');
    }
}
