	<?php

	session_start();
 	echo "login successfull Welcome " . $_SESSION['user_name'];
 	echo "<br> <a href='logout.php'>logout </a>";

?>