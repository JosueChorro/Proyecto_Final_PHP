<?php
    class ColorFavorito{
        private $pdo;
        public $idcolorfavorito;
        public $idcliente;
        public $idcolor;

        public function __construct()
        {
            try {
                $this->pdo = Conexion::Conectar();
            } catch (\Throwable $ex) {
                die($ex->getMessage());
            }
        }

        public function RegistrarColorFavorito($data){
            try {
                $sql = "INSERT INTO colorfavorito (idcolor, idcliente) VALUES(?, ?)";
                $this->pdo->prepare($sql)->execute(array($data->idcolor, $data->idcliente));
            } catch (\Throwable $ex) {
                die($ex->getMessage());
            }
        }

        public function ListarColoresFavoritosActivos(){
            try {
                $stm = $this->pdo->prepare("SELECT idcolorfavorito, nombre FROM talla  WHERE estado = 1");
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_OBJ);
            } catch (\Throwable $ex) {
                die($ex->getMessage());
            }
        }

        public function ObtenerColorFavorito($id){
            try {
                $stm = $this->pdo->prepare("SELECT cf.idcolorfavorito as idcolorfavorito, c.nombre as color,  
                FROM colorfavorito as cf INNER JOIN color as c ON cf.idcolor = c.idcolor WHERE cf.idcliente = ?");
                $stm->execute(array($id));
                return $stm->fetch(PDO::FETCH_OBJ);
            } catch (\Throwable $ex) {
                die($ex->getMessage());
            }
        }

        public function EliminarColorFavorito($id){
            try {
                $sql = "DELETE FROM colorfavorito  WHERE idcolorfavorito = ?";
                $this->pdo->prepare($sql)->execute(array($id));
            } catch (\Throwable $ex) {
                die($ex->getMessage());
            }
        }
    }
?>