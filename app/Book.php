<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $table = 'books';
    protected $fillable = ['title', 'author_id', 'amound',
    					 'cover'];
    protected $visible = ['title', 'author_id', 'amound',
    					 'cover'];
    public $timestamps = true;

    public function author()
    {
    	return $this->belongsTo('App\Author','author_id');
    }
}
