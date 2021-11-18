<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 1 -->
    <!-- <form method=post action="carpeta/index.php">
        <label>Ingrese su nombre :</label>
        <input type="text"  name="name"  placeholder="Nombre" />
        <input type="submit" value="Enviar">
    </form> -->

    <!-- 2 -->
    <!-- <h2>Calcular la edad </h2>
    <form method ="get" action="carpeta/index.php">
        <label >Ingrese su año de nacimiento</label>
        <input type="date" name="annios"/>
        <input type="submit" value="Enviar">
    </form> -->

    <!-- 3 -->
    <!-- <form method="get" action="carpeta/index.php">
        <?php for ($i=1; $i<=10; $i++) { ?>
            <div> 
                <label for="calificacion<?=$i?>">Agregue su calificacion:</label>
                <input type="number" name="calificacion[]" id="calificacion<?=$i?>"/>
            </div>
        <?php }?>
        <input type="submit" value="Enviar"/> 
    </form> -->

    <!-- 4 -->
        <!-- <form method="get" action="carpeta/index.php">
        <?php for ($i=1; $i<=10; $i++) { ?>
            <div> 
                <label for="calificacion<?=$i?>">Agregue su calificacion:</label>
                <input type="number" name="calificacion[]" id="calificacion<?=$i?>"/>
            </div>
        <?php }?>
        <input type="submit" value="Enviar"/> 
    </form> -->

    <!-- 5 -->
    <form method="post" action="carpeta/index.php">
        <label>Ingrese un numero para la figura</label>
        <input type="numer" name="variable"/>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>