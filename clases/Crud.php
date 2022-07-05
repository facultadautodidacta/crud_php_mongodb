<?php 
    class Crud {
        public function mostrarDatos() {
            try {
                $conexion = Conexion::conectar();
                $coleccion = $conexion->personas;
                $datos = $coleccion->find();
                return $datos;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }

        public function obtenerDocumento($id) {
            try {
                $conexion = Conexion::conectar();
                $coleccion = $conexion->personas;
                $datos = $coleccion->findOne(
                                        array(
                                            '_id' => new MongoDB\BSON\ObjectId($id)
                                        )
                                    );
                return $datos;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }

        public function insertarDatos($datos) {
            try {
                $conexion = Conexion::conectar();
                $coleccion = $conexion->personas;
                $respuesta = $coleccion->insertOne($datos);
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }

        public function eliminar($id) {
            try {
                $conexion = Conexion::conectar();
                $coleccion = $conexion->personas;
                $respuesta = $coleccion->deleteOne(
                                            array(
                                                "_id" => new MongoDB\BSON\ObjectId($id)
                                            )
                                        );
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }

        public function actualizar($id, $datos) {
            try {
                $conexion = Conexion::conectar();
                $coleccion = $conexion->personas;
                $respuesta = $coleccion->updateOne(
                                            ['_id' => new MongoDB\BSON\ObjectId($id)],
                                            [
                                                '$set' => $datos    
                                            ]
                                        );
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
    }

?>