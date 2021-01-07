<?php

use App\Models\Photo;
use App\Models\Album;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class PhotoAlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->truncate();
        DB::table('photos')->truncate();

        $photosFromSource = Http::get('https://jsonplaceholder.typicode.com/photos')->json();
        $albumsFromSource = Http::get('https://jsonplaceholder.typicode.com/albums')->json();

        for($i = 0; $i < 500; $i++) {
            Photo::insert([
                '_id'=>$photosFromSource[$i]["id"],
                'album_id'=>$photosFromSource[$i]["albumId"],
                'title'=>$photosFromSource[$i]["title"],
                'url'=>$photosFromSource[$i]["url"],
                'thumbnail_url'=>$photosFromSource[$i]['thumbnailUrl'],
            ]);
        }

        for($j = 0; $j < 10; $j++) {
            Album::insert([
                '_id'=>$albumsFromSource[$j]["id"],
                'user_id'=>$albumsFromSource[$j]["userId"],
                'title'=>$albumsFromSource[$j]["title"]
            ]);
        }

    }
}
