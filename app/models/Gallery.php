<?php

/**
 * @property string image
 * @property string title
 * @property string thumbnail
 */
class Gallery extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'title' => 'required',
		//'image' => 'required',
	];

	// Don't forget to fill this array
	protected $fillable = ['title','image','thumbnail'];
}