<?php

define('APP_ROOT' , __DIR__);

define('BASE_URL', 'http://localhost/cms_2/');
define('VIEWS' , APP_ROOT.'/views/');



$db = new PDO('mysql:host=localhost;db_name=cms_2;' , 'root' , 'root' ,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);