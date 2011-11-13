<?php
class Controller_User extends Controller_Template{
    public $template = "user/layout/main";
    public function before() {
        parent::before();
        Assets::css('base', 'media/css/base.css');
//            Assets::css('icon-inner', 'media/images/icon/specimen_files/specimen_stylesheet.css');
        Assets::css('item-products', 'media/css/item_products.css');//specimen_files/specimen_stylesheet.css
        Assets::js('jquery', 'media/js/jquery-1.6.4.min.js');
//        Assets::js('jquery-left-menu', 'media/js/left-menu.js');
//        Assets::js('jquery-advance-search', 'media/js/advance-search.js');
    }
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
