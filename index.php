<?php


	require __DIR__.'/vendor/autoload.php';

	use phpish\app;
	use phpish\mysql;
	use phpish\template;

	require __DIR__.'/conf/'.app\ENV.'.conf.php';


	app\get('.*', function (){
		return 'Hello World';
	});

?>