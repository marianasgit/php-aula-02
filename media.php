<?php
//Declaração de variaveis
//nomeVar = (tipoDados) valorInicial
$nota1 = (float) 0;
$nota2 = (float) 0;
$nota3 = (float) 0;
$nota4 = (float) 0;
$media = (float) 0;


if (isset($_POST['btncalc'])) {
    //recebedndo dados utilizado o metedo POST do formulario
    $nota1 = $_POST['txtn1'];
    $nota2 = $_POST['txtn2'];
    $nota3 = $_POST['txtn3'];
    $nota4 = $_POST['txtn4'];

    //Operadores lógicos
    //OU -> or , ||
    //E -> and , &&
    //NEGAÇÂO -> !

    /*is_numeric() -> permite validar se o conteudo é um número
      is_string() -> permite validar se o conteúdo é uma letra
      is_integer() -> permite validar se o conteúdo é um inteiro
      is_double() ou is_float()-> permite validar se o conteúdo é um valor real
      is_array() -> permite validar se o conteúdo é um vetor
      is_bool() -> permite validar se o conteúdo é um booleano
        ...
    */

    //Tratamento de caixa vazia
    if ($_POST['txtn1'] == "" || $_POST['txtn2'] == "" || $_POST['txtn3'] == "" || $_POST['txtn4'] == "") {
        echo ('verificar se todas as notas foram preenchidas');
    } else {
        //Tratamento de erro para validação de caracteres não nunéricos
        if(!is_numeric($nota1) || !is_numeric($nota2) || !is_numeric($nota3) || !is_numeric($nota4)) {
            echo(' <p class="msgErro"> Todos os valores digitados devem ser números válidos! </p>');
        }else {
            $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        }
    }
}


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Média</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset="utf-8">
</head>

<body>

    <div id="conteudo">
        <header id="titulo">
            Calculo de Médias
        </header>

        <div id="form">
            <form name="frmMedia" method="post" action="media.php">
                <div>
                    <label>Nota 1:</label>
                    <input type="text" name="txtn1" value="<?php echo ($nota1); ?>">
                </div>

                <div>
                    <label>Nota 2:</label>
                    <input type="text" name="txtn2" value="<?php echo ($nota2); ?>">
                </div>

                <div>
                    <label>Nota 3:</label>
                    <input type="text" name="txtn3" value="<?php echo ($nota3); ?>">
                </div>

                <div>
                    <label>Nota 4:</label>
                    <input type="text" name="txtn4" value="<?php echo ($nota4); ?>">
                </div>
                <div>
                    <input type="submit" name="btncalc" value="Calcular">
                    <div id="botaoReset">
                        <a href="media.php">
                            Novo Cálculo
                        </a>
                    </div>
                </div>
            </form>

        </div>
        <footer id="resultado">
            A média é: <?php echo ($media); ?>
        </footer>
    </div>


</body>

</html>