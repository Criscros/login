<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

   	public $connection = 'mysql';
	public $collection = 'productos';
}
