<?php
    class PreguntaSecreta{
        private $pdo;
        public $idpreguntasecreta;
        public $nombre;

        public function __construct()
        {
            try {
                $this->pdo = Conexion::Conectar();
            } catch (\Throwable $ex) {
                die($ex->getMessage());
            }
        }

        public function ListarPreguntaSecreta(){
            try {
                $stm = $this->pdo->prepare("SELECT * FROM preguntasecreta");
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_OBJ);
            } catch (\Throwable $ex) {
                die($ex->getMessage());
            }
        }

        public function ObtenerPreguntaSecreta($id){
            try {
                $stm = $this->pdo->prepare("SELECT * FROM preguntasecreta  WHERE idpreguntasecreta = ?");
                $stm->execute(array($id));
                return $stm->fetch(PDO::FETCH_OBJ);
            } catch (\Throwable $ex) {
                die($ex->getMessage());
            }
        }
    }

?>