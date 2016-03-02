<?php

class Slider extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'title' => 'required',
		//'image' => 'required',
	];

	// Don't forget to fill this array
	protected $fillable = ['title', 'image'];

}