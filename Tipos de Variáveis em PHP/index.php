<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $string = "Curso na DIO";
        $numeros = 50;
        $array = array("PHP", "HTML", "CSS", "JAVA");
    ?>
    <h4>
        Essa é uma variável do tipo string, para implementar uma variável do tipo string, utilizamos aspas simples ('') ou duplas ("") : 
        <?php
            echo $string;
        ?>
    </h4>
    <h4>
        Essa é uma variável do tipo numeros/integer, para implementar essa variavel utilizamos somente os números desta forma :
        <?php
            echo $numeros;
        ?>
    </h4>
    <h4>
        Essa é uma variável com um array, para implementar um array em uma variável utilizamos desta forma :
        <?php
            print_r($array);
        ?>
    </h4>
</body>
</html>