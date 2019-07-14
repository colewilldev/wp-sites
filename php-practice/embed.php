<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>php-Practice</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>




<?php

  Class Car {
      function Car(){
          $this->model = 'VW';
          $this->year = 1969;
      }
  }

  $herbie = New Car;
  $model = $herbie -> model;

  echo '<h1>Model :' . $model.'</h1>';

  echo strlen('bananas');
?> 

<h1> 
    <?php

        function br(){
            echo '<br><br>';
        }

        $cars = array('BMW', 'Toyota', 'Porsche');
        $arrLen = count($cars);
        
        for($x = 0; $x < $arrLen ; $x++ ){
            echo $cars[$x];
            br();
        }

        $age = array("cole" => 31, "Jenna" => 29, "sophie" => 6);
        foreach($age as $x => $x_value){
            echo "Key = $x , Age= $x_value";
            br();
        }

        $a = 15;
        $b = 23;

        function addition(){
            $GLOBALS['z'] = $GLOBALS['a'] + $GLOBALS['b'];
            echo "<h1>$z</h1>";
        }
        addition();
    ?>
</h1>

</body>
</html>