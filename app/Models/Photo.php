<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Photo extends Model
{
    use SoftDeletes;

    protected $table = 'photos';

    const ALBUM_ID = "album_id";
    const TITLE = "title";
    const URL = "url";
    const THUMBNAIL_URL = "thumbnail_url";

    protected $fillable = [
        '_id',
        'album_id',
        'title',
        'url',
        'thumbnail_url'
    ];

}
