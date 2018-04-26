<?php
header('Content-type: application/json');
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
	
require_once '../../vendors/limonade.php';

require_once 'user_api.php';

require_once 'product_api.php';


run();