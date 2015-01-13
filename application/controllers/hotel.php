<?php

class Hotel extends Controller {
	
	function index()
	{
		$template = $this->loadView('hotel');
		$template->render();
	}
    
}

?>
