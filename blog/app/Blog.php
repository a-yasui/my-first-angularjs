<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Blog
 *
 * @package App
 * @mixin \Eloquent
 */
class Blog extends Model
{
    protected $table = "blog";

    protected $fillable = [
        'title',
        'slag',
        'header',
        'description'
    ];
}
