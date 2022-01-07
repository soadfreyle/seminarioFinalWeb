<?php
require_once '../../modelo/Computer.php';

?>



<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>EJEMPLO DE WEB APP CON MVC</title>
    </head>

    <body>
    <center>
        <h2 style="color: blue">REPORTE DE USUARIOS EN EL SISTEMA</h2>
        <fieldset style="width: 45%">
            <legend>DATOS DE LOS USUARIOS</legend>
            
<?php
           $lista_de_usuarios = Computer::all(); // select*from usuarios;
           if (count($lista_de_usuarios) < -0) {
               echo "SIN  USUARIOS QUE MOSTRAR";
           } else {
?>
    <table border="1">
        <tr>
            <th>N°</th>
            <th>ID</th>
            <th>PASSWORD</th>
            <th>MARCA</th>
            <th>CATEGORIA</th>
            <th>MARCA_CPU</th>
            <th>VELOCIDAD_CPU</th>
            <th>TECNOLOGIA_RAM</th>
            <th>CAPACIDAD_RAM</th>
            <th>TECNOLOGIA_DISCO</th>
            <th>CAPACIDAD_DISCO</th>
            <th>NUMERO_PUERTOS_USB</th>
            <th>NUMERO_PUERTOS_HDMI</th>
            <th>MARCA_MONITOR</th>
            <th>PULGADAS</th>
            <th>PRECIO</th>
        </tr>
<?php
               $cuenta = 1;
    foreach ($lista_de_usuarios as $u) {
?>
            <tr>
                <td><?= $cuenta ?></td>
                <td><?= $u->id ?></td>
                <td><?= $u->password ?></td>
                <td><?= $u->marca ?></td>
                <td><?= $u->categoria ?></td>
                <td><?= $u->marca_cpu ?></td>
                <td><?= $u->velocidad_cpu ?></td>
                <td><?= $u->tecnologia_ram ?></td>
                <td><?= $u->capacidad_ram ?></td>
                <td><?= $u->tecnologia_disco ?></td>
                <td><?= $u->capacidad_disco ?></td>
                <td><?= $u->num_puertos_usb ?></td>
                <td><?= $u->num_puertos_hdmi ?></td>
                <td><?= $u->marca_monitor ?></td>
                <td><?= $u->pulgadas ?></td>
                <td><?= $u->precio ?></td>
            </tr>

<?php 
                 $cuenta++;
    }
?>
        <tr>
            <td colspan="6" style="text-align: right">TOTAL:</td>
            <td colspan="2" style="text-align: left"><?= count($lista_de_usuarios) ?></td>
        </tr>

    </table>
<?php
}
?>


        </fieldset>       

    </center>

</body>
</html>
