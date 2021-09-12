<!doctype html>
<html lang = es>
    <head>
        <title>Colanta sabe mas</title>
    </head>
    <body>
    <h1>Esta es la pagina de Colanta en codigo php </h1>
    <?php
        $Juan = 'Productos deliciosos en colanta, ¡PRUEBALOS!'; 
        $Rojas = 'Encontraras diversos los alimentos adecuados para tu salud';
    ?>
     </br>
     </br>
    <?php
    $int1 = 42; 
    $int2 = -42; 
    ?>
     </br>
     </br>
    <?php 
    $a = 'hello';
    $hello = 'Bienvenido a la pagina de colanta!';
    echo $$a;   
    ?>
     </br>
     </br>
    <p></p>
    <?php 
    $a = 7; $b = 3; 
    $a += $b;
    echo $a;
    ?>
    <? php
    $num1=8;
    $num1=6;
    echo $num1 + $num2;
    echo $num1 - $num2;
    echo $num1 * $num2;
    ?>
     </br> 
     </br>
    <?php
    for ($i = 0; $i < 10; $i++){
        $product = 10 * $i;
        echo "10 * $i es igual $product <br/>";
    }?>
     </br>
     </br>
    <?php 
    $people = array(
        'online'=>array('Leche', 'Yogurt'),
        'offline'=>array('John', 'Rob','Jack'),
        'away'=>array('Arthur', 'Queso')
     );

     echo $people ['online'] [0];
     echo $people ['away'][1];
    ?>
     </br> 
     </br>
    <?php 
    session_start();
    ?>
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
     </br>
     </br>
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
     </br>
     </br>
    <?php
    $myfile = fopen("names.txt", "w");
    $txt = "John\n";
    fwrite($myfile, $txt);  
    $txt = "Juan\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    ?>
    </br>
    </br>
    <?php 
    $myfile = fopen ("nombres.txt", "w");
    $txt = "Juan \ n";
    fwrite ($myfile, $txt);
    $txt = "David \ n";
    fwrite ($myfile, $txt);
    fclose ($myfile);
    ?>
    </br>
    </br>
    <?php
    $value = "Juan";
    setcookie("usuario", $value, time() + (86400 * 30), '/'); 
    if(isset($_COOKIE['usuario'])) {
    echo "el usuario es: ". $_COOKIE['usuario'];
    }
    ?>
    </br>
    </br>
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
     </br>
     </br>
    <?php 
    interface Animalinterface {
        public function makeSound();
    }
    ?>
     </br>
     </br>
    <form action="first.php" method="post"> 
    <p>Name: <input type="text" name="name" /></p>
    <p>Age: <input type="text" name="age" /></p>
    <p><input type="submit" name="submit" value="Submit" /></p>
    </br>
    </br>
    </form>
    <h2><?php echo $Rojas; ?></h2>
    </br>
    <p><?php echo $Juan; ?></p>

    </body>
</html>