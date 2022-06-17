<?php
class dbMySQL {
	private $host = "localhost";
	private $usuario = "root";
	private $clave = "mysql";
	private $db = "albumes";
	private $conn;
	
	public function __construct(){
		$this->conn = mysqli_connect($this->host, $this->usuario, $this->clave, $this->db);
		if(mysqli_connect_error()){
			printf("Error en la conexion: %d",mysqli_connect_error());
			exit;
		} else {
			//print "Conexion exitosa<br>";	
		}
	}
	
	public function query($q, $tipo=true){
		$data = array();
		if($q!=""){
			if($r=mysqli_query($this->conn, $q)){
				//print $q;
				if($tipo) $data = mysqli_fetch_array($r);	
			}
		}
		return $data;
	}
	
	public function close(){
		mysqli_close($this->conn);	
		//print "Cerrar la conexion en forma exitosa<br>";
		
	}
}

class Albumes{
	private $id;
	private $nombre;
	private $estampas;
	
	function __construct(){}
	
	static function numAlbumes(){
		$db = new dbMySQL();
		$data = $db->query("SELECT COUNT(*) FROM albumes");
		$db->close();
		unset($db);
		return $data[0];
	}
}

class Usuarios{
	private $id;
	private $correo;
	
	function __construct(){}
	
	function numUsuarios(){
		$db = new dbMySQL();
		$data = $db->query("SELECT COUNT(*) FROM usuario");
		$db->close();
		unset($db);
		return $data[0];
	}
	
	public static function buscaUsuario($usuario){
		$db = new dbMySQL();
		$data = $db->query("SELECT * FROM usuario WHERE correo='".$usuario."'");
		$db->close();
		unset($db);
		return isset($data[0]);
	}
}
class Estampas{
	private $id;
	private $album;
	private $usuario;
	private $numero;
	private $estado;
	private $edo;
	
	function __construct(){}
	
	static function numEstampas(){
		$db = new dbMySQL();
		$data = $db->query("SELECT COUNT(*) FROM estampas");
		$db->close();
		unset($db);
		return $data[0];
	}
}

class Sesion{
	private $login=false;
	private $usuario;
	
	function __construct(){
		session_start();
		$this->verificaLogin();
		if($login){
			//codigo si esta logueado
		} else {
			//no esta logueado
		}
	}
	
	private function verificaLogin(){
		if(isset($_SESSION["usuario"])){
			$this->usuario = $_SESSION["usuario"];
			$this->login = true;
		} else {
			unset($this->usuario);
			$this->login = false;
		}
	}
	
	public function inicioLogin($usuario){
		if($usuario){
			$this->usuario = $_SESSION["usuario"] = $usuario;
			$this->login = true;	
		}
	}
	
	public function finLogin($usuario){
		unset($_SESSION["usuario"]);
		unset($this->usuario);
		$this->login = false;
	}
	
	public function estadoLogin(){
		return $this->login;
	}
	
	public function getUsuario(){
		return $this->usuario;
	}
	
}
?>
