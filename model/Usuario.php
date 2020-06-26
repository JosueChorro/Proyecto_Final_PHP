<?php
    class Usuario{
        
        private $pdo;
        public $idusuario;
        public $nombre;
        public $apellido;
        public $telefono;
        public $email;
        public $clave;
        public $idpreguntasecreta;
        public $respuestasecreta;
        public $idtipousuario;
        public $estado;

        public function __construct()
        {
            try {
                $this->pdo = Conexion::Conectar();
            } catch (\Throwable $ex) {
                die($ex->getMessage());
            }
        }

        public function RegistrarUsuario($data){
            try {
                $sql = "INSERT INTO usuario (nombre, apellido, telefono, email,
                clave, idpreguntasecreta, respuestasecreta, idtipousuario) VALUES (?, ?, ?, ?
                ?, ?, ?, ?";
                $this->pdo->prepare($sql)->execute(array(
                    $data->nombre,
                    $data->apellido,
                    $data->telefono,
                    $data->email,
                    $data->clave,
                    $data->idpreguntasecreta,
                    $data->respuestasecreta,
                    $data->nidtipousuario
                ));
            } catch (\Throwable $ex) {
                die($ex->getMessage());
            }
        }

        public function ListarUsuarioActivo(){
            try {
                $stm = $this->pdo->prepare("SELECT u.idusuario as idusuario, u.nombre as nombre, u.apellido as apellido,
                    u.telefono as telefono, u.email as email, t.nombre as tipo FROM usuario AS u INNER JOIN tipousuario AS t  
                    ON u.idtiposuario = t.idtipousuario WHERE u.estado = 1");
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_OBJ);
            } catch (\Throwable $ex) {
                die($ex->getMessage());
            }
        }

        public function ListarUsuarioInactivos(){
            try {
                $stm = $this->pdo->prepare("SELECT u.idusuario as idusuario, u.nombre as nombre, u.apellido as apellido,
                    u.telefono as telefono, u.email as email, t.nombre as tipo FROM usuario AS u INNER JOIN tipousuario AS t  
                    ON u.idtiposuario = t.idtipousuario WHERE u.estado = 0");
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_OBJ);
            } catch (\Throwable $ex) {
                die($ex->getMessage());
            }
        }

        public function ObtenerUsuario($id){
            try {
                $stm = $this->pdo->prepare("SELECT u.idusuario as idusuario, u.nombre as nombre, u.apellido as apellido,
                    u.telefono as telefono, u.email as email, u.idtipousuario as idtipousuario, t.nombre as tipo
                    u.clave as clave, u.idpreguntasecreta as idpreguntasecreta, u.respuestasecreta as respuestasecreta, p.nombre
                    as pregunta FROM usuario AS u INNER JOIN tipousuario AS t  
                    ON u.idtipousuario = t.idtipousuario INNER JOIN preguntasecreta AS p ON u.idpreguntasecreta = p.idpreguntasecreta
                    WHERE t.idusuario = ?");
                $stm->execute(array($id));
                return $stm->fetch(PDO::FETCH_OBJ);
            } catch (\Throwable $ex) {
                die($ex->getMessage());
            }
        }

        public function ActualizarUsuario($data){
            try {
                $sql = "UPDATE usuario SET 
                    nombre = ?, 
                    apellido = ?, 
                    telefono = ?, 
                    email = ?,
                    idtipousuario = ?
                    WHERE = idusuario = ?";
                $this->pdo->prepare($sql)->execute(array(
                    $data->nombre,
                    $data->apellido,
                    $data->telefono,
                    $data->email,
                    $data->idtipousuario,
                    $data->idusuario
                ));
            } catch (\Throwable $ex) {
                die($ex->getMessage());
            }
        }

        public function CambiarEstadoUsuario($nuevo, $id){
            try {
                $sql = "UPDATE usuario SET 
                    estado = ?, 
                    WHERE = idusuario = ?";
                $this->pdo->prepare($sql)->execute(array(
                    $nuevo,
                    $id
                ));
            } catch (\Throwable $ex) {
                die($ex->getMessage());
            }
        }

        public function ActualizarClave($clave, $id){
            try {
                $sql = "UPDATE usuario SET 
                    clave = ?, 
                    WHERE = idusuario = ?";
                $this->pdo->prepare($sql)->execute(array(
                    $clave,
                    $id
                ));
            } catch (\Throwable $ex) {
                die($ex->getMessage());
            }
        }

        public function ActualizarPregunta($idpreguntasecreta, $respuestasecreta ,$id){
            try {
                $sql = "UPDATE usuario SET 
                    idpreguntasecreta = ?, 
                    respuestasecreta = ?
                    WHERE = idusuario = ?";
                $this->pdo->prepare($sql)->execute(array(
                    $idpreguntasecreta,
                    $respuestasecreta,
                    $id
                ));
            } catch (\Throwable $ex) {
                die($ex->getMessage());
            }
        }

        public function Entrar($email, $clave){
            try {
                $stm = $this->pdo->prepare(
                    "SELECT * FROM usuario WHERE email = ? and clave = ? and estado = 1"
                );
                $stm->execute(array($email, $clave));
                return $stm->fetch(PDO::FETCH_OBJ);
            } catch (\Throwable $ex) {
                die($ex->getMessage());
            }
        }

        public function GenerarSesion($data){
            try {
                if($data != null){
                    $_SESSION["id"] = $data->idusario;
                    $_SESSION["nombre"] = $data->nombre;
                    $_SESSION["apellido"] = $data->apellido;
                    $_SESSION["email"] = $data->email;
                    if($data->idtipousuario == 1){
                        header("Location:  ?c=".base64_encode('Home'));
                    }else{

                    }
                }else{
                    header("Location:  ?c=".base64_encode('Login'));
                }
            } catch (\Throwable $ex) {
                die($ex->getMessage());
            }
        }
    }
?>