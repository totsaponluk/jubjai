<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User_Welcome extends Controller_Template {
    public $template = "layout/index";
    public function action_index()
	{
            Assets::css('base', 'media/css/base.css');
//            Assets::css('icon-inner', 'media/images/icon/specimen_files/specimen_stylesheet.css');
            Assets::css('item-products', 'media/css/item_products.css');//specimen_files/specimen_stylesheet.css
            Assets::js('jquery', 'media/js/jquery-1.6.4.min.js');
            Assets::js('jquery-left-menu', 'media/js/left-menu.js');
            Assets::js('jquery-advance-search', 'media/js/advance-search.js');
            $view = View::factory("user/index");
		$this->response->body($view);
                
                
	}
        public function action_test(){
            $this->response->body('test');
        }

} // End Welcome
