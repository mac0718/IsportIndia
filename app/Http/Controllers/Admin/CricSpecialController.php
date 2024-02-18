<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use DOMDocument;
use Illuminate\Support\Facades\File;
use App\Models\CricSpecial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CricSpecialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $res = CricSpecial::with('user')
            ->when(isset($request->search), function ($q) use ($request) {
                $q->where('title', 'like', "%{$request->search}%");
                $q->Orwhere('short_description', 'like', "%{$request->search}%");
                $q->Orwhere('description', 'like', "%{$request->search}%");
            })
            ->orderBy('id', 'desc')
            ->paginate(perPage());

        return view('admin.cricspecial.list', compact('res'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cricspecial.create');
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
            'title' => 'required|max:255|unique:cric_specials',
            'short_description' => 'required',
            'description' => 'required',
            'status' => 'required',
            'img' => 'required|image',
            'min' => 'required|numeric',
            'tag' => 'required'
        ]);

        $input['created_by'] = auth()->id();
        $input['slug'] = Str::slug($input['title']);
        $input['img'] = uploadImage($input['img'], 'cricspecial');

        CricSpecial::create($input);

        return redirect()
            ->route('cricspecial')
            ->with('cricspecial.success', 'CricSpecial Created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CricSpecial  $cricspecial
     * @return \Illuminate\Http\Response
     */
    public function edit(CricSpecial $cricspecial)
    {
        $res = $cricspecial;
        
        return view('admin.cricspecial.edit', compact('res'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CricSpecial  $cricspecial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CricSpecial $cricspecial)
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
            'title' => 'required|max:255|unique:cric_specials,title,' . $cricspecial->id,
            'short_description' => 'required',
            'description' => 'required',
            'status' => 'required',
            'img' => 'nullable|image',
            'min' => 'required|numeric',
            'tag' => 'required'
        ]);

        $input['slug'] = Str::slug($input['title']);

        if (isset($input['img'])) {

            $input['img'] = uploadImage($input['img'], 'cricspecial');

            deleteImage($cricspecial->img);
        }

        $cricspecial->update($input);

        return redirect()
            ->route('cricspecial')
            ->with('cricspecial.success', 'CricSpecial Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CricSpecial  $cricspecial
     * @return \Illuminate\Http\Response
     */
    public function destroy(CricSpecial $cricspecial)
    {
        $cricspecial->delete();

        return redirect()
            ->route('cricspecial')
            ->with('cricspecial.warning', 'CricSpecial Deleted successfully!');
    }
}
