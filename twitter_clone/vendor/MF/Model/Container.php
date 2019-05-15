<?php

    namespace MF\Model;
    use App\Connection;

    class Container {
        public static function getModel($model){
            //Retornar o modelo solicitado já instanciado, inclusive com a conexão estabelecida.
            $class = "\\App\\models\\".ucfirst($model);
            $conn = Connection::getDb();
            return new $class($conn);
        }
    }

?>