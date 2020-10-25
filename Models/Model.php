<?php

    /**
    * The example page model
    */
    class Model extends Controller
    {

    	public function class(){

    		return get_class();
            
    	}

        public function table(){

        	return 'models';
        }   

    }