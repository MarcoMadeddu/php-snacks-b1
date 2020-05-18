<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP SNACK 2</h1>
    <?php
    $data = $_GET;
    $access =0;
    //verifica presenza dei tre valori
    if(empty($data['name']) || empty($data['mail']) || empty($data['age'])){
        echo "inserire tutti i parametri";
    }
    
    //veirfica che il nome contenga almeno 3 caratteri
    if(strlen($data['name'])< 3){
        echo "inserisci almeno 3 caretteri nel nome. ";
    }else{
        $access++;
    }

    //verifica che la mail abbia una @ ed un .
    if(strpos($data["mail"],"@") === false || strpos($data["mail"], ".") == false) {
        echo"inserisci una @ ed un . (punto). ";  
    }else{
        $access++;
    }

    //verifica che age sia un numero
    if( is_numeric($data["age"])){
        $access++;
    }else{
        echo"age dev'essere un numero";
    }

    //consenti o nega accesso
    if($access==3){
        $esito= "accesso consentito";
    }else{
        $esito= "accesso negato";
    }
    ?>

    <?php if($access == 3){?>

    <h2>Ciao <?php echo "$data[name]"?></h2>

    <?php } ?>
    <h2><?php echo $esito?></h2>
    
</body>
</html>