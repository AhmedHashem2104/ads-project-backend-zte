<?php

    /**
    * The example page model
    */
    class Tech extends Controller
    {

    	public function class(){

    		return get_class();
            
    	}

        public function table(){

        	return 'persons';
        }

    }