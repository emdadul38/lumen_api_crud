<?php 
	
	namespace App\model;

	use Illuminate\Database\Eloquent\Model;

	/**
	* 
	*/
	class Article extends Model
	{
		protected $fillable = ['title', 'content'];
	}
