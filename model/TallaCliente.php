<?php
    class TallaCliente{
        private $pdo;
        public $idtallacliente;
        public $idtalla;
        public $idcliente;
        public $detalle;

        public function __construct()
        {
            try {
                $this->pdo = Conexion::Conectar();
            } catch (\Throwable $ex) {
                die($ex->getMessage());
            }
        }

        public function RegistrarTallaCliente($data){
            try {
                $sql = "INSERT INTO tallacliente (idtalla, idcliente, detalle) VALUES(?, ?, ?)";
                $this->pdo->prepare($sql)->execute(array($data->idtalla, $data->idcliente, $data->detalle));
            } catch (\Throwable $ex) {
                die($ex->getMessage());
            }
        }

        public function ObtenerTallaCliente($id){
            try {
                $stm = $this->pdo->prepare("SELECT tc.idtallacliente as idtallacliente, t.nombre as talla,  tc.detalle as detalle
                FROM tallacliente as tc INNER JOIN talla as t ON tc.idtalla = t.idtalla WHERE tc.idcliente = ?");
                $stm->execute(array($id));
                return $stm->fetch(PDO::FETCH_OBJ);
            } catch (\Throwable $ex) {
                die($ex->getMessage());
            }
        }

        public function EliminarTallaCliente($id){
            try {
                $sql = "DELETE FROM tallacliente  WHERE idtallacliente = ?";
                $this->pdo->prepare($sql)->execute(array($id));
            } catch (\Throwable $ex) {
                die($ex->getMessage());
            }
        }
    }
?>