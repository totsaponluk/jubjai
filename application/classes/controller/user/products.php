<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User_Products extends Controller_Template {
    public $template = "layout/index";
    public function action_index(){
        $this->auto_render = false;
//        echo $this->template->auto_render;
        $view = View::factory('user/product/lastest_product');   
	$this->response->body($view);
                
    }
    public function action_form(){
        $this->auto_render = false;
        echo $this->request->method();
        if($this->request->method() == "POST"){
            $method = 'post';
        }else{
            $method = 'get';
        }
        $view = View::factory('user/product/form');
        $view->bind('method',$method);
        $this->response->body($view);
    }
    public function action_add(){
        $this->auto_render = false;
        $product = ORM::factory('user_product');
        $product->name = $this->request->post('product_name');
        $product->save();
        echo $this->request->post('product_name');
        echo "test add";
    }
       

} // End Welcome
