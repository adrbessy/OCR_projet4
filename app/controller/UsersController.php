<?php

namespace app\controller;

class UsersController extends AppController{

	public function login(){
		$error = false;
		if(!empty($_POST)){
			$db = $this->manager->getDb(); 
			$auth = new \core\Auth\DBAuth($db);
			if($auth->login($_POST['username'],$_POST['password'])){
				header('Location: admin.php');
			} else{
				$error = true;
			}
		}
		$this->render('users.login',compact('error'));

	}

	public function accessToAdmin(){
        $db = $this->manager->getDb(); 
        $auth = new \core\Auth\DBAuth($db);
        if(!$auth->logged()){
        	$this->login();
        }else{
            header('Location: admin.php');
        }
	}
}