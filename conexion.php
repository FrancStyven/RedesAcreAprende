<?php
class conexion{
	public $servidor="localhost";
	public $usuario="root";
	public $clave="";
	public $db="acreditable";
function conectar(){
	mysql_connect($this->servidor,$this->usuario,$this->clave);
	mysql_select_db($this->db);

	}
}
