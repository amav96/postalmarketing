<?php
	define('TIT', ' | Express');
	define('DIRACT', 'ACTIONVQ/');
	define('DIRMOR', 'MORENOKU/');
	define('DIRIMG', ''.$_SERVER['DOCUMENT_ROOT'].'/dist/img/');
	define('URL', 'http://localhost/postalmarketing/');
	define('IMG', URL.'dist/img/');
	define('ACTI', URL.'ACTIONVQ/');
	define('XCEL', URL.'excel/');
	define('NAME', 'Express');

	if (isset($_REQUEST['p'])) { $pid=base64_decode($_REQUEST['p']); }
	if (isset($_REQUEST['v'])) { $vid=base64_decode($_REQUEST['v']); }
	if (isset($_REQUEST['val'])) { $val=base64_decode($_REQUEST['val']); }
?>