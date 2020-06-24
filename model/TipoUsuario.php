<?php
    class TipoUsuario{
        
        private $pdo;
        public $idtipousuario;
        public $nombre;
        public $descripcion;

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
    }
?>