<?php namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;

class Post extends Model 
{

	/**
	 * Save resource to model
	 * @param  Request $request
	 * @return self
	 */
	public function saveResource(Request $request)
	{
	    $this->title   = $request->title;
	    $this->content = $request->content;
	    $this->user_id = $request->user_id;

	    $this->save();

	    return $this;
	}

	/**
	 * Get the related posts
	 * @return hasMany the relation
	 */
	public function user()
	{
	    return $this->belongsTo('App\User');
	}

}
