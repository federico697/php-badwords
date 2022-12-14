<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // 1
        $paragrafo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor voluptas 
        veniam omnis assumenda quam asperiores animi sapiente dolorem ab rem dolore odit ad, optio vero voluptates. 
        Reprehenderit aliquid eos dolores?'
    ?>

    <!-- 2 -->
    <p> <?php echo $paragrafo ?> </p>

    <!-- 3 -->
    <div>Il paragrafo è lungo: <?php echo strlen($paragrafo) ?> caratteri</div>

    <?php 
    // 4
        if( empty($_GET['censura']) ){
            echo "non hai una parola da censurare";
        } else {
            $paragrafoModificato = str_replace($_GET['censura'], '***', $paragrafo);
            echo $paragrafoModificato;
        }
    ?>
</body>
</html>