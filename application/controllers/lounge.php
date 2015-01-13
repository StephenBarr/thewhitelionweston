<?php

class Lounge extends Controller {
	
	function index()
	{
		$template = $this->loadView('lounge');
		$template->render();
	}
    
}

?>
