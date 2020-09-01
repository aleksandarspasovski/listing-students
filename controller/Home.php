<?php  

class Home extends BaseController
{
	
	function __construct()
	{
		parent::__construct();
		echo 'home constructor';
	}
	public function index()
	{
		$this->view->render('home');
	}
}