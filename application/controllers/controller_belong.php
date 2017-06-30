<?php 

class Controller_Belong extends Controller
{
	
	function action_index()
	{
		$this->view->generate('belong_view.php', 'template_view.php');
	}
}