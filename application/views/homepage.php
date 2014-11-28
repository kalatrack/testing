<?php 
use Netcarver\Textile;
		
		$parser = new Textile\Parser();
		$string = 'h1. welcome '.PHP_EOL.PHP_EOL;
		$string .= '<br>'.PHP_EOL;
		$string .= '* list item '.PHP_EOL;
		$string.='* another list item'.PHP_EOL;
		echo $parser->textileThis($string);
 ?>
<h2>Hello form homepage that is a subview </h2>
