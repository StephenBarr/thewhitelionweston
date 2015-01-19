<?php

class Contact extends Controller {
	
	function index()
	{
		$template = $this->loadView('contact');
		$template->render();
	}
    
}

?>
