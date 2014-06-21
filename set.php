<?php

	shell_exec('echo "25='.$_GET['v'].'" > /dev/pi-blaster');
	echo "success";

?>
