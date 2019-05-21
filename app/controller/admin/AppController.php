<?php 

namespace app\controller\admin;

use \app;
use \core\auth\DBAuth;

class AppController extends \app\controller\AppController{

	protected $template = 'admin_template';

	public function __construct(){
		parent::__construct();
		
		$manager = new \app\model\Manager();
		$db = $manager->getDb();  
		$auth = new \core\Auth\DBAuth($db);
		if(!$auth->logged()){
		    $auth->forbidden();
		}
	}

}