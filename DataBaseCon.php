<?php
    class DataBAseCon
    {
        static private $_instance = null;
        public $db;

        private function __construct()
        {
        }

        private function __clone()
        {
        }

        function myfunc($a)
        {

        }
}
$link = mysql_connect('localhost', 'admin', '111');
if (!$link)
{
    die('Ошибка соединения: ' . mysql_error());
}

else{
    echo "Соединение установлено!=)";
}