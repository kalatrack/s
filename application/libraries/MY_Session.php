<?php 

	/**
	* // this used to make session more reliable 
	* //that will update itself if and only if xmlhttprequest is generated.
	*/
	class MY_Session extends CI_Session
	{
		
		function sess_update()
		{
			if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] !== 'XMLHttpRequest') {
				parent::sess_update();
			}
		}
	}

 ?>