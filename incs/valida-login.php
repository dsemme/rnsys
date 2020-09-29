<?php 

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM tb_cadastrorn WHERE usuario = '$usuario' AND  senha = '$senha'";

$objDb = new dataBase();
$link = $objDb->conecta_mysql();

$resultado_id = mysqli_query($link, $sql);

if($resultado_id){
    $dados_usuario = mysqli_fetch_array($resultado_id);
    
    if(isset($dados_usuario['usuario'])){
        
    }
}





?>