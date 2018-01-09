<?php
	require "vendor/autoload.php";

	ActiveRecord\Config::initialize(function($cfg){
   $cfg->set_model_directory('models');
   $cfg->set_connections(array(
       'development' => 'mysql://root@localhost/composer'));
});

	$mhs = mahasiswa::all();
	foreach($mhs as $m){
		echo "NIM : ".$m->nim."<br />";
		echo "NAMA : ".$m->nama."<br />";
		echo "ALAMAT : ".$m->alamat."<Hr />";
	}