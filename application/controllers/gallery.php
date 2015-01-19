<?php

class Gallery extends Controller {
	
	function index()
	{
		$template = $this->loadView('gallery');
		$template->render();
	}
    
}

?>
