<?php 

	echo var_dump($user);
	foreach ($user as $us) {
		echo var_dump($us->first_name);
		echo var_dump($us->text);
		echo var_dump($us->subject);

	}
	echo "end foreach loop";
?>