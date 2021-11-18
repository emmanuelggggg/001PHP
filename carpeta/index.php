<!-- 1 ejer -->
<!-- <?php
    echo "<h2>Bienvenido<h2>";
    echo $_REQUEST["name"];
?> -->

<!-- 2 ejer -->
<!-- <?php
    $edad = $_GET["annios"];
   
    function calcular_edad($fecha_nacimiento){// se crea una funcion para calcular la edad
        list($annio,$mes,$dia) = explode("-",$fecha_nacimiento);
        $annio_diferencia  = date("Y") - $annio;
        $mes_diferencia = date("m") - $mes;
        $dia_diferencia   = date("d") - $dia;
        if ($dia_diferencia < 0 || $mes_diferencia < 0)
          $annio_diferencia--;
        
        if($annio_diferencia >=18){
            echo "Eres mayor de edad puedes conducir   ";
        }else{
            echo "tas chiquito   >:c  ";
        }
        return $annio_diferencia;
      }
     echo "Edad :".calcular_edad($edad); 
?> -->

<!-- 3 ejer -->
<!-- <?php
    print_r($_REQUEST);
    $promedio =0;
    foreach($_REQUEST["calificacion"] as $key => $value){
        $promedio += intval($value);
    }
    $promedio = $promedio/10;
    if(promedio < 3){
        echo "Muy deficiente ";
    }elseif(promedio>=3 && promedio < 5 ){
        echo "Insuficiente ";
    }elseif(promedio >= 5 && promedio <6){
        echo "Suficiente  ";
    }elseif(promedio >=6 && promedio <8){
        echo "Bien  ";
    }elseif(promedio >=8 && promedio <9){
        echo "Notable  ";
    }elseif(promedio >=9 && promedio <10){
        echo "Sobresaliente ";
    }
    echo " Su promedio es: $promedio";
?> -->

<!-- 4ejer -->
<!-- <?php
    $promedio =0;
    foreach($_REQUEST["calificacion"] as $key => $value){
        $promedio += intval($value);
    }
    $promedio = $promedio/10;
    echo "Su promedio es: $promedio";
?> -->

<!-- 5 ejer
<!-- <?php
    $variable = $_REQUEST["variable"];
    $variable =intval ($variable);

    $fibonacci  = array(0,1);

	for($i=2;$i<=$variable;$i++){
		echo $fibonacci[] = $fibonacci[$i-1]+$fibonacci[$i-2]."<br/>";
	}
    
?> --> 