<?php 
		function conexion(){
			$servidor="localhost";
			$usuario="linkitmx_lex";
			$password="lex2332*";
			$bd="linkitmx_finanzas";
			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);
			return $conexion;
		}

 ?>