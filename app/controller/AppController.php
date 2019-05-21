<?php 

namespace app\controller;

use core\controller\Controller;
use app\model\PostManager;
use app\model\CommentManager;
use app\model\admin\AdminManager;
use app\model\Manager;

class AppController extends Controller{

	public $postManager;
	public $commentManager;
	public $adminManager;
	protected $template = 'template';

	public function __construct(){
		$this->viewPath = ROOT . '/app/views/';
		$this->postManager = new PostManager();
		$this->commentManager = new CommentManager();
		$this->adminManager = new AdminManager();
		$this->manager = new Manager();
	}

}