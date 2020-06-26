<?php
    class Talla{
        private $pdo;
        public $idtalla;
        public $nombre;
        public $estado;

        public function __construct()
        {
            try {
                $this->pdo = Conexion::Conectar();
            } catch (\Throwable $ex) {
                die($ex->getMessage());
            }
        }

        public function RegistrarTalla($data){
            try {
                $sql = "INSERT INTO talla(nombre) VALUES(?)";
                $this->pdo->prepare($sql)->execute(array($data->nombre));
            } catch (\Throwable $ex) {
                die($ex->getMessage());
            }
        }

        public function ListarTallasActivos(){
            try {
                $stm = $this->pdo->prepare("SELECT idtalla, nombre FROM talla  WHERE estado = 1");
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_OBJ);
            } catch (\Throwable $ex) {
                die($ex->getMessage());
            }
        }

        public function ListarTallasInactivas(){
            try {
                $stm = $this->pdo->prepare("SELECT idtalla, nombre FROM talla  WHERE estado = 0");
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_OBJ);
            } catch (\Throwable $ex) {
                die($ex->getMessage());
            }
        }

        public function ObtenerTalla($id){
            try {
                $stm = $this->pdo->prepare("SELECT * FROM talla WHERE idtalla = ?");
                $stm->execute(array($id));
                return $stm->fetch(PDO::FETCH_OBJ);
            } catch (\Throwable $ex) {
                die($ex->getMessage());
            }
        }

        public function ActualizarTalla($data){
            try {
                $sql = "UPDATE talla SET 
                    nombre = ?,                    
                    WHERE = idtalla = ?";
                $this->pdo->prepare($sql)->execute(array(
                    $data->nombre,
                    $data->idtalla      
                ));
            } catch (\Throwable $ex) {
                die($ex->getMessage());
            }
        }

        public function CambiarEstadoTalla($nuevo, $id){
            try {
                $sql = "UPDATE color SET 
                    estado = ?,                    
                    WHERE = idtalla = ?";
                $this->pdo->prepare($sql)->execute(array(
                    $nuevo,
                    $id
                ));
            } catch (\Throwable $ex) {
                die($ex->getMessage());
            }
        }
    }

?>
    }
?>