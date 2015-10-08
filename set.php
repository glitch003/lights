<?php

	shell_exec('echo "25='.escapeshellarg($_GET['v']).'" > /dev/pi-blaster');
	echo "success";

?>
