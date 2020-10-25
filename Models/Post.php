<?php
class Post extends Controller
{
	public function class(){
		return get_class();
	}
    public function table(){
    	return 'posts';
    }
}