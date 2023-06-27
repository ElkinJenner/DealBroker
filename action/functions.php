<?php
/**
* @author Elkin Jenner
* @website https://dealbroker.ga/
**/

function curso(){
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