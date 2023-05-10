<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de alunos</title>
</head>
<body>
<?php
function validar_post($dado_enviado){
    if(isset($dado_enviado) and $dado_enviado <> ""){
        return TRUE;
    }
    return FALSE;
}

if(validar_post($_POST['firstName']) and validar_post($_POST['CPF'])){
    echo '<br><br>';
    echo 'Nome: '.$_POST['firstName'];
    echo '<br><br>';
    echo 'CPF: '.$_POST['CPF'];
    echo '<br><br>';
    echo 'Telefone:'.$_POST['Telefone'];
    echo '<br><br>';
    echo 'Escola Publica'.$POST_['Escolapub'];
    
    /*
    Inserir os dados no banco de dados MySQL
    */
}

?>
</body>
</html>