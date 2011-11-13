<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User_Welcome extends Controller_User {
    
    public function action_index()
	{
            $view = Request::factory('products/form')->execute();
            $this->template->content = $view;
             
                
                
	}
        
        

} // End Welcome
