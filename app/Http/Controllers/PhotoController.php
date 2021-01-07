<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Http\Resources\Photo as PhotoResource;
use App\Http\Resources\PhotoCollection;
use Illuminate\Http\Request;

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
        return new PhotoCollection($photos);
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
            Photo::ALBUM_ID=>$request->get(Photo::ALBUM_ID),
            Photo::TITLE=>$request->get(Photo::TITLE),
            Photo::URL=>$request->get(Photo::URL),
            Photo::THUMBNAIL_URL=>$request->get(Photo::THUMBNAIL_URL),
        ]);
        $photo->save();
        return new PhotoResource($photo);
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
        return new PhotoResource($photo);
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
        return new PhotoResource($photo);
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
        return new PhotoResource($photo);
    }
}
