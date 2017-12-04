<?php 

require_once("config.php");


// Exibe todos os usuários
//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);


// Carrega apenas um usuário
//$root = new Usuario();
//$root->loadById(5);
//echo $root;

// Carrega uma lista de usuários:
//$lista = Usuario::getList();
//echo json_encode($lista);

// Carrega uma lista de usuários buscando pelo login:
//$search = Usuario::search("o");
//echo json_encode(($search));

// Seleciona um usuário usando o login e a senha:
//$usuario = new Usuario();
//$usuario->login("TONICO","999999");
//echo $usuario;

// Inserir um registro novo:

//$aluno = new Usuario();

//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@lun0");
//$aluno->insert();
//echo $aluno;

// Outra forma de inserir um registro:
//$aluno = new Usuario("Zulmira","112233");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();

$usuario->loadById(24);
$usuario->update("Claudia","145541");
echo $usuario;

// 

 ?>