<?php  

class Students extends BaseController
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function student($id)
	{
		$this->view->user = $this->model->showUser($id);
		$this->view->render('students');
	}
	public function count($id)
	{
		$count_val = new Students_model();
		$count_res = $count_val->gradesCount($id);
		if ($count_res) {
			header('Location: ' . $_SERVER['HTTP_REFERER'] . '?uspesno');
		}
	}
}