<!doctype html>
<html lang = es>
    <head>
        <title>Colanta sabe mas</title>
    </head>
    <body>
    <?php
        $Juan = 'Productos deliciosos en colanta, ¡PRUEBALOS!'; 
        $Rojas = 'Pagina desarrollada por php';
    ?>
    <?php
    for ($i = 0; $i < 10; $i++){
        $product = 10 * $i;
        echo "10 * $i es igual $product <br/>";
    }?>
    <div>
       <?php echo $product; ?>
       <p>Sea bienvenido a la pagina de Colanta </p>
    </div>
    <?php 
    $names = array("Lo que buscas podras encontrarlo con nosostros:","Leche", "Diversos yogures", "Diferentes tipos de queso", "");
    foreach ($names as $name) {
        echo $name. '<br/>';
    }
    ?>
    <?php 
    $x = 5;
    switch ($x) {
        case 1:
            echo "Uno";
            case 2:
                break;
            echo "Dos";
            break;
        default:
    }
    ?>
    <?php 
    $myfile = fopen ("nombres.txt", "w");
    $txt = "Juan \ n";
    fwrite ($myfile, $txt);
    $txt = "David \ n";
    fwrite ($myfile, $txt);
    fclose ($myfile);
    ?>
    <?php 
    class Animal {
        public $name;
        public function hi(){
            echo "Hi from animal";
        }
    }
    class Dog extends Animal {
    }
    ?>
    <form action="first.php" method="post"> 
    <p>Name: <input type="text" name="name" /></p>
    <p>Age: <input type="text" name="age" /></p>
    <p><input type="submit" name="submit" value="Submit" /></p>
    </form>
    <h2><?php echo $Rojas; ?></h2>
    <p><?php echo $Juan; ?></p>
    </body>
</html>