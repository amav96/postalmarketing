<?php
	/**
	 * 
	 */
	class database
	{
		function conect01(){
	    	$con1 = mysqli_connect("localhost","root","");
			mysqli_select_db($con1,"numeracion");
			$con1->query("SET NAMES 'utf8'");
	    	return($con1);
		}
	}
?>