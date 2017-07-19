<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $primaryKey = 'id';
    protected $fillable = ['title','content'];
    protected $guarded = ['_token','_method'];
}
