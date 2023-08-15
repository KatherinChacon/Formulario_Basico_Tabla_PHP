<html>

<body>

    <head>
        <title>Formulario HTML</title>
        <meta charset="utf8">
        <link href="apariencia.css" rel="stylesheet">
    </head>

    <!--Formulario-->
    <div class="formulario">
        <form action="formulario.php" method="post">
            <p>Nombre Completo:</p>
            <input type="text" name="nombre" class="nombre"><br />

            <p>Valor prestamo: </p>
            <input type="text" name="valorPrestamo" class="valorPrestamo"><br />

            <p><label>Numero Cuotas: </label></p>
            <select name="NoCuotas" id="" class="NoCuotas">
                <<option value="cero">
                    </option>
                    <option value="seis">6 meses</option>
                    <option value="doce">12 meses</option>
                    <option value="dieciOcho">18 meses</option>
                    <option value="veintiCuatro">24 meses</option>
                    <option value="treintaSeis">36 meses</option>
                    <option value="cuarentaOcho">48 meses</option>
                    <option value="Sesenta">60 meses</option>
            </select>

            <p>NOTA: El Valor prestamo debe ser diligenciado sin caracteres de pesos ni puntuación. Ejemplo: 120000</p>

            <p class="center-content"><input type="submit" value="Enviar" name="Enviar" class="btn btn-green"></p>
            <!--Botón Submit desencadena la accion del formulario-->

        </form>
    </div>

    <?php

    //Crear tabla
    echo "<div id=\"Tabla1\">";

    echo "<table id=\"Tabla\">";

    //Se crean encabezados  
    echo "<tr>";
    echo "<th> No. Cuotas</th>";
    echo "<th> Fecha de pago</th>";
    echo "<th> Valor Cuota</th>";
    echo "<th> Subtotal pagado </th>";
    echo "</tr>";


    /*Se declaran variables*/
    $nombre = $_POST['nombre'];
    $valorPrestamo = $_POST['valorPrestamo'];
    $NoCuotas = $_POST['NoCuotas'];
    $CuotaInicial = 0;
    $SaldoPrestamo = 0;
    $ValorCuota = 0;
    $totalCuotas = 0;
    $fechaPago = '5 de cada mes';
    $numeracion = 1;

    /*Operaciones*/

    if (isset($_POST['Enviar'])) { //Se configura boton de envio de informaciòn



        $CuotaInicial = ($valorPrestamo * 0.3);
        $SaldoPrestamo = (($valorPrestamo * 0.7) + (0.112));

        if ($NoCuotas == "cero") {
        } else if ($NoCuotas == "seis") {
            $NoCuotas = ($valorPrestamo / 6);
            
            echo '<br><center><b>Nombre completo =</b> ' . $nombre ;
            echo '<br><center><b>Valor del Prestamo =</b> ' . $valorPrestamo;

            do {
                $totalCuotas = ($NoCuotas + (0.112));

                echo "<tr>";
                echo "<td> $numeracion </td>";
                echo "<td> $fechaPago </td>";
                echo "<td> $totalCuotas </td>";
                echo "<td> $totalCuotas </td>";
                echo "</tr>";

                $numeracion++;
            } while ($numeracion <= 6);
        } else if ($NoCuotas == "doce") {
            $NoCuotas = ($valorPrestamo / 12);

            echo '<br><center><b>Nombre completo =</b> ' . $nombre ;
            echo '<br><center><b>Valor del Prestamo =</b> ' . $valorPrestamo;

            do {
                $totalCuotas = ($NoCuotas + (0.112));
                echo "<tr>";
                echo "<td> $numeracion </td>";
                echo "<td> $fechaPago </td>";
                echo "<td> $totalCuotas </td>";
                echo "<td> $totalCuotas </td>";
                echo "</tr>";

                $numeracion++;
            } while ($numeracion <= 12);
        } else if ($NoCuotas == "dieciOcho") {
            $NoCuotas = ($valorPrestamo / 18);

            echo '<br><center><b>Nombre completo =</b> ' . $nombre ;
            echo '<br><center><b>Valor del Prestamo =</b> ' . $valorPrestamo;

            do {
                $totalCuotas = ($NoCuotas + (0.112));
                echo "<tr>";
                echo "<td> $numeracion </td>";
                echo "<td> $fechaPago </td>";
                echo "<td> $totalCuotas </td>";
                echo "<td> $totalCuotas </td>";
                echo "</tr>";

                $numeracion++;
            } while ($numeracion <= 18);
        } else if ($NoCuotas == "veintiCuatro") {
            $NoCuotas = ($valorPrestamo / 24);

            echo '<br><center><b>Nombre completo =</b> ' . $nombre ;
            echo '<br><center><b>Valor del Prestamo =</b> ' . $valorPrestamo;

            do {
                $totalCuotas = ($NoCuotas + (0.112));
                echo "<tr>";
                echo "<td> $numeracion </td>";
                echo "<td> $fechaPago </td>";
                echo "<td> $totalCuotas </td>";
                echo "<td> $totalCuotas </td>";
                echo "</tr>";

                $numeracion++;
            } while ($numeracion <= 24);
        } else if ($NoCuotas == "treintaSeis") {
            $NoCuotas = ($valorPrestamo / 36);

            echo '<br><center><b>Nombre completo =</b> ' . $nombre ;
            echo '<br><center><b>Valor del Prestamo =</b> ' . $valorPrestamo;

            do {
                $totalCuotas = ($NoCuotas + (0.112));
                echo "<tr>";
                echo "<td> $numeracion </td>";
                echo "<td> $fechaPago </td>";
                echo "<td> $totalCuotas </td>";
                echo "<td> $totalCuotas </td>";
                echo "</tr>";

                $numeracion++;
            } while ($numeracion <= 36);
        } else if ($NoCuotas == "cuarentaOcho") {
            $NoCuotas = ($valorPrestamo / 48);

            echo '<br><center><b>Nombre completo =</b> ' . $nombre ;
            echo '<br><center><b>Valor del Prestamo =</b> ' . $valorPrestamo;

            do {
                $totalCuotas = ($NoCuotas + (0.112));
                echo "<tr>";
                echo "<td> $numeracion </td>";
                echo "<td> $fechaPago </td>";
                echo "<td> $totalCuotas </td>";
                echo "<td> $totalCuotas </td>";
                echo "</tr>";

                $numeracion++;
            } while ($numeracion <= 48);
        } else if ($NoCuotas == "Sesenta") {
            $NoCuotas = ($valorPrestamo / 60);

            echo '<br><center><b>Nombre completo =</b> ' . $nombre ;
            echo '<br><center><b>Valor del Prestamo =</b> ' . $valorPrestamo;

            do {
                $totalCuotas = ($NoCuotas + (0.112));
                echo "<tr>";
                echo "<td> $numeracion </td>";
                echo "<td> $fechaPago </td>";
                echo "<td> $totalCuotas </td>";
                echo "<td> $totalCuotas </td>";
                echo "</tr>";

                $numeracion++;
            } while ($numeracion <= 60);
        }
        echo "</table>";
        echo "</div>";
    }

    ?>

</body>

</html>