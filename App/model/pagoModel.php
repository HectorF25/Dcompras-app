<?php
    class tipoPago{

        private $pdo;

        private $idTipoPago;
        private $nombreTipoPago;

        public function __CONSTRUCT()
        {
            try {
                $this->pdo = Conexion::Conectar();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        public function __TIPOPAGO($idTipoPago,$nombreTipoPago)
        {
            $this->idTipoPago = $idTipoPago;
            $this->nombreTipoPago = $nombreTipoPago;
        }

        /**
         * Get the value of idTipoPago
         */
        public function getIdTipoPago()
        {
            return $this->idTipoPago;
        }

        /**
         * Set the value of idTipoPago
         *
         * @return  self
         */ 
        public function setIdTipoPago($idTipoPago)
        {
            $this->idTipoPago = $idTipoPago;

            return $this;
        }
        
        /**
         * Get the value of nombreTipoPago
         */
        public function getNombreTipoPago()
        {
            return $this->nombreTipoPago;
        }

        /**
         * Set the value of nombreTipoPago
         *
         * @return  self
         */
        public function setNombreTipoPago($nombreTipoPago)
        {
            $this->nombreTipoPago = $nombreTipoPago;

            return $this;
        }

        public function Listar()
        {
                try {
                    $sql = $this->pdo->prepare("SELECT * FROM tipopago ");
                    $sql->execute();
                    return $sql->fetchAll(PDO::FETCH_OBJ);
                } catch (Exception $e) {
                    die($e->getMessage());
                }
        }

        public function Obtener($id)
        {
            try {
                $sql = $this->pdo->prepare("SELECT * FROM tipopago WHERE idTipoPago = ?");
                $sql->execute(array($id));
                return $sql->fetch(PDO::FETCH_OBJ);
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        public function Eliminar($id)
        {
            try {
                $sql = $this->pdo
                    ->prepare("DELETE FROM tipopago WHERE idTipoPago = ?");

                $sql->execute(array($id));
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        public function Actualizar($data)
        {
            try {
                $sql = "UPDATE tipopago SET 
                        nombreTipoPago = ?
                        WHERE idTipoPago = ?";
                $this->pdo->prepare($sql)
                    ->execute(
                        array(
                            $data->nombreTipoPago,
                            $data->idTipoPago
                        )
                    );
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        public function Registrar(tipoPago $data)
        {
            try {
                $sql = "INSERT INTO tipopago (nombreTipoPago) 
                        VALUES (?)";

                $this->pdo->prepare($sql)
                    ->execute(
                        array(
                            $data->nombreTipoPago
                        )
                    );
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        function contarRegistros()
        {   
            try {
                $sql = $this->pdo->prepare("SELECT COUNT(*) total FROM tipopago");
                $sql->execute();
                return $sql->fetchColumn();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
    }
