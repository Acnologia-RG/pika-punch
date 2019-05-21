<?php 

spl_autoload_register(function($class){
	require "{$class}.php";
});

$harry = new pikachu("harry", 60);
$jack = new charmeleon("jack", 60);

echo "Jack's current HP ". $harry->attack($jack,1).'<br>'."Harry's current HP ".$jack->attack($harry,0);
