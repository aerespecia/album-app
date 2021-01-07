<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\PHP;

class PhotoController extends Controller
{
    /**
     * Display all records of photos.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::all();
        return $photos;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photo = new Photo([
            'album_id'=>$request->get(Photo::ALBUM_ID),
            'title'=>$request->get(Photo::TITLE),
            'url'=>$request->get(Photo::URL),
            'thumbnail_url'=>$request->get(Photo::THUMBNAIL_URL),
        ]);
        $photo->save();
        return $photo;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $photo = Photo::find($id);
        return $photo;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $photo = Photo::find($id);
        $photo->album_id = $request->get(Photo::ALBUM_ID);
        $photo->title = $request->get(Photo::TITLE);
        $photo->url = $request->get(Photo::URL);
        $photo->thumbnail_url = $request->get(Photo::THUMBNAIL_URL);
        $photo->save();
        return $photo;
    }

    /**
     * Soft Deletes the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $photo = Photo::find($id);
        $photo->delete();
        return $photo;
    }
}
