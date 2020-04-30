<?php
	$db='database';
	$ru2='../';
    $cl1='orden';
    $cl2='cliente';
    $cl3='recolector';
	$cl4='products_orden';
	$di1='orden/';
	$di2='orden/detalle.php?p=';

	function index($rut){
		global $db, $cl1;
		require($rut.DIRMOR.$db.'.php');
		require($rut.DIRMOR.$cl1.'.php');
		$_db = new $db();
		$_cl1 = new $cl1();

		$inf = $_cl1->listar($_db->conect01());

		return $inf;
	}
    function detalle($rut,$pid){
        global $db, $cl1;
        require($rut.DIRMOR.$db.'.php');
        require($rut.DIRMOR.$cl1.'.php');
        $_db = new $db();
        $_cl1 = new $cl1();

        $inf = $_cl1->listar($_db->conect01(),$_db->conect01(),$pid);

        return $inf;
    }
	function exportar($rut){
		global $db, $cl1;
		require($rut.DIRMOR.$db.'.php');
		require($rut.DIRMOR.$cl1.'.php');
		$_db = new $db();
		$_cl1 = new $cl1();

		$inf = $_cl1->exportar($_db->conect01(),$_db->conect01());

		return $inf;
	}
    if (isset($_POST['addProducto'])) {
        
    }

?>