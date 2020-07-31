<?php

    class DbHandler {

        private $host = "eddierowmz681.mysql.db:3306";
        private $usr = "eddierowmz681";
        private $pwd = "DxvhB449ZHgtmSX";
        private $dbName = "eddierowmz681";

        protected function connect() {
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
            $pdo = new PDO($dsn, $this->usr, $this->pwd);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        }
    }
?>
