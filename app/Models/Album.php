<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Album extends Model
{
    use SoftDeletes;

    protected $table = 'albums';

    const USER_ID = "user_id";
    const TITLE = "title";

    protected $fillable = [
        '_id',
        'user_id',
        'title'
    ];

    public function photos()
    {
        return $this->hasMany('App\Models\Photo');
    }
}
