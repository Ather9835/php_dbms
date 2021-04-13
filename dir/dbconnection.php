<?php
		$conn = oci_connect('raj', 'raj', 'localhost/labexp');
		if (!$conn) {
			$e = oci_error();
			trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		}
		//Else echo "connection successful";



	?>