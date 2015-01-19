<?php

class Conferences extends Controller {
	
	function index()
	{
		$template = $this->loadView('conferences');
		$template->render();
	}
    
}

?>
