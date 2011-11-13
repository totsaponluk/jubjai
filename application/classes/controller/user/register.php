<?php
class Controller_User_Register extends Controller{
    public function action_index(){
        $form = View::factory('user/register/form');
        $this->response->body($form);
        if($_POST){
          $post = $_POST;
          $model = ORM::factory('user');
          $model->values($post);
          $model->save();
// remember to add the login role AND the admin role
// add a role; add() executes the query immediately
//        $model->add('roles', ORM::factory('role')->where('name', '=', 'login')->find());
//        $model->add('roles', ORM::factory('role')->where('name', '=', 'admin')->find());

//         if($user->validation($post, TRUE)){
//             $this->auth->login($user, $post->password);
//             url::redirect();
//          }else{
//             url::redirect('register');
//          }
       }
    }
    public function create_user(){
       
    }
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
