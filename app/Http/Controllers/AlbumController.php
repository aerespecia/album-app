<?php

namespace App\Http\Controllers;

use App\Http\Resources\AlbumCollection;
use App\Http\Resources\Album as AlbumResource;
use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
     /**
     * Display all records of photos.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::all();
        return new AlbumCollection($albums);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $album = new Album([
            Album::USER_ID=>$request->get(Album::USER_ID),
            Album::TITLE=>$request->get(Album::TITLE)
        ]);
        $album->save();
        return new AlbumResource($album);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $album = Album::find($id);
        return new AlbumResource($album);
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
        $album = Album::find($id);
        $album->user_id = $request->get(Album::USER_ID);
        $album->title = $request->get(Album::TITLE);
        $album->save();
        return new AlbumResource($album);
    }

    /**
     * Soft Deletes the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $album = Album::find($id);
        $album->delete();
        return new AlbumResource($album);
    }

}
