<?php namespace Conner\Likeable;

class LikeCount extends \Eloquent {

	protected $table = 'liked_count';
	public $timestamps = false;
	protected $fillable = ['likable_id', 'likable_type', 'count'];
	
	public function likable() {
		return $this->morphTo();
	}

}