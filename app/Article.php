<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Article extends Model
{
    public $table = 'articles';
    protected $fillable = ['title','content','featured_image'];
}