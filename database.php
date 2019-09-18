<?php 
	define('DB_HOST','localhost');
	define('DB_USER' ,'root');
	define('DB_NAME' ,'blog');
	define('DM_PASSWORD' ,'');

function  getInstance()
    {		
            $instance = new \mysqli();
            $instance->connect( DB_HOST, DB_USER, DM_PASSWORD, DB_NAME);
            mysqli_set_charset($instance, 'utf8');
        return $instance;
    }

 ?>