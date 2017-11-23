<?php
$servidor = "127.0.0.1";
$usuario_db = "root";
$senha_db = "";
$banco = "db_empresa_informatica";

//criar a conexao
$con = new mysqli($servidor,$usuario_db,$senha_db,$banco);
//verificar a conexao
if($con->connect_error) {
    die("Erro de conexão: ".$con->connect_error);
}
$con->set_charset("utf8");

