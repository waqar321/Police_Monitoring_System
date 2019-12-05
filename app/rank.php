<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rank extends Model
{
    protected $table = "ranks";    
    protected $primaryKey = "id";
	protected $fillable = ['name', 'grade'];
	// public $timestamps = false;
}
