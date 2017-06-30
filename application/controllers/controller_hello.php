<?php 

class Controller_Hello extends Controller
{
	
	function action_index()
	{
		$this->view->generate('hello_view.php', 'template_view.php');
	}
}
