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

        public function ListarTipoUsuario(){
            try {
                $stm = $this->pdo->prepare("SELECT * FROM tipousuario");
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_OBJ);
            } catch (\Throwable $ex) {
                die($ex->getMessage());
            }
        }

        public function ObtenerTipoUsuario($id){
            try {
                $stm = $this->pdo->prepare("SELECT * FROM tipousuario  WHERE idtipousuario = ?");
                $stm->execute(array($id));
                return $stm->fetch(PDO::FETCH_OBJ);
            } catch (\Throwable $ex) {
                die($ex->getMessage());
            }
        }

        public function Entrar(){

        }

        public function GenerarSesion(){

        }
    }
?>