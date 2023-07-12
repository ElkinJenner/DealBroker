<?php
/**
* @author Elkin Jenner
* @website https://dealbroker.ga/
**/

/* ---Registrar -- */

function registrarChat(){
	require_once "conexion.php";

	$data= array();
	$con = Db::connect();

	$IdStaff  = $_POST["IdStaff"];
	$FechaChat = $_POST["FechaChat"];
	$MensajeStaff = $_POST["MensajeStaff"];

	$insertar = "INSERT INTO ChatStaff(IdStaff, FechaChat, MensajeStaff) VALUES('$IdStaff', '$FechaChat', '$MensajeStaff')";
	$resultadoChat = mysqli_query($con, $insertar);
	if($resultadoChat){
		$data[]=$resultadoChat;
		echo"<script>window.location.href = '../dashboard/mensajes.php'</script>";
	}
	else{
		echo "No se logro conectar";
	}

	return $data;
}

function cuenta(){
	$data= array();
	$con = Db::connect();
	$query = $con->query("select * from CarreraCurso where CategoriaCurso is NULL ");
	if($query->num_rows>0){
		while ($r=$query->fetch_array()) {
			$data[]=$r;
		}
	}
	return $data;
}

function g_cursos($IdCarreraC){
	$data= array();
	$con = Db::connect();
	$query = $con->query("select * from CarreraCurso where CategoriaCurso = $IdCarreraC ORDER BY NomCurso ASC");
	if($query->num_rows>0){
		while ($r=$query->fetch_array()) {
			$data[]=$r;
		}
	}
	return $data;
}

//SubMenu Vista
function select_menu($IdCarreraC,$level){
	$subs = g_cursos($IdCarreraC);
	if(count($subs)>0){
		foreach($subs as $s){
			echo utf8_encode ("<li><a href='curso.php?id=$s[IdCarreraC]'> $s[CarreraC] </a></li>");
		}
	}
}
?>