<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nerd extends Model
{
	protected $table = 'nerds';
	protected $fillable = ['name','email','nerd_level'];
	public $timestamps = true;
}