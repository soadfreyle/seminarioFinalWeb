<?php

require_once 'modelo/Computer.php';


//$u = new Computer();
//$u->id = "45101020";
//$u->password = "wsx";
//$u->marca = "DELL";
//$u->categoria = "MICROCOMPUTADORAS";
//$u->marca_cpu = "Intel";
//$u->velocidad_cpu = "3.2 - 3.46 Ghz";
//$u->tecnologia_ram = "DDR";
//$u->capacidad_ram = "1600 Mhz";
//$u->tecnologia_disco = "HARD DISK DRIVER(HDD)";
//$u->capacidad_disco = "1000 Gb";
//$u->num_puertos_usb = "DOS";
//$u->num_puertos_hdmi = "DOS";
//$u->marca_monitor = "ASUS";
//$u->pulgadas = "17 PULG";
//$u->precio = "2000000 - 6500000";

//try {
//    $u->save();
//    $total = Computer::count();
//    echo"Total de Usuarios".$total;
//} catch (Exception $error) {
//    echo"Error al insertar<br>".$error->getMessage();
//}


//$u = Computer::find(451010);
//echo "ID: ".$u->id."<br>";
//echo "PASSWORD: ".$u->password."<br>";
//echo "MARCA: ".$u->marca."<br>";
//echo "CATEGORIA: ".$u->categoria."<br>";
//echo "MARCA CPU: ".$u->marca_cpu."<br>";
//echo "VELOCIDAD CPU: ".$u->velocidad_cpu."<br>";
//echo "TECNOLOGIA RAM: ".$u->tecnologia_ram."<br>";
//echo "CAPACIDAD RAM: ".$u->capacidad_ram."<br>";
//echo "TECNOLOGIA DISCO: ".$u->tecnologia_disco."<br>";
//echo "CAPACIDAD DISCO: ".$u->capacidad_disco."<br>";
//echo "NUMERO DE PUERTOS USB: ".$u->num_puertos_usb."<br>";
//echo "NUMERO DE PUERTOS HDMI: ".$u->num_puertos_hdmi."<br>";
//echo "MARCA MONITOR: ".$u->marca_monitor."<br>";
//echo "PULGADAS: ".$u->pulgadas."<br>";
//echo "PRECIO: ".$u->precio."<br>";


//CAMBIAR
//$u = Computer::find(45101020);
//echo "ID: ".$u->id."<br>";
//echo "PASSWORD: ".$u->password."<br>";
//echo "MARCA: ".$u->marca."<br>";
//echo "CATEGORIA: ".$u->categoria."<br>";
//echo "MARCA CPU: ".$u->marca_cpu."<br>";
//echo "VELOCIDAD CPU: ".$u->velocidad_cpu."<br>";
//echo "TECNOLOGIA RAM: ".$u->tecnologia_ram."<br>";
//echo "CAPACIDAD RAM: ".$u->capacidad_ram."<br>";
//echo "TECNOLOGIA DISCO: ".$u->tecnologia_disco."<br>";
//echo "CAPACIDAD DISCO: ".$u->capacidad_disco."<br>";
//echo "NUMERO DE PUERTOS USB: ".$u->num_puertos_usb."<br>";
//echo "NUMERO DE PUERTOS HDMI: ".$u->num_puertos_hdmi."<br>";
//echo "MARCA MONITOR: ".$u->marca_monitor."<br>";
//echo "PULGADAS: ".$u->pulgadas."<br>";
//echo "PRECIO: ".$u->precio."<br>";
//$u->id = "45101020";
//echo"<hr>";
//$u->password = "PERRO";
//
//
//echo"<hr>";
//echo"ACTUALIZANDO.....";
//$u->save();
//echo"<hr>";
//
//
//$u = Computer::find(45101020);
//echo "ID: ".$u->id."<br>";
//echo "PASSWORD: ".$u->password."<br>";
//echo "MARCA: ".$u->marca."<br>";
//echo "CATEGORIA: ".$u->categoria."<br>";
//echo "MARCA CPU: ".$u->marca_cpu."<br>";
//echo "VELOCIDAD CPU: ".$u->velocidad_cpu."<br>";
//echo "TECNOLOGIA RAM: ".$u->tecnologia_ram."<br>";
//echo "CAPACIDAD RAM: ".$u->capacidad_ram."<br>";
//echo "TECNOLOGIA DISCO: ".$u->tecnologia_disco."<br>";
//echo "CAPACIDAD DISCO: ".$u->capacidad_disco."<br>";
//echo "NUMERO DE PUERTOS USB: ".$u->num_puertos_usb."<br>";
//echo "NUMERO DE PUERTOS HDMI: ".$u->num_puertos_hdmi."<br>";
//echo "MARCA MONITOR: ".$u->marca_monitor."<br>";
//echo "PULGADAS: ".$u->pulgadas."<br>";
//echo "PRECIO: ".$u->precio."<br>";

//ELIMINAR
//$u = NULL;
//try {
//    $u = Computer::find(45101020);
//    
//} catch (Exception $ex) {
//    echo"<hr>";
//    echo"NO EXISTE.....";
//    echo"<hr>";
//    
//}
//
//if($u != NULL){
//    echo"<hr>";
//    echo"ELIMINANDO.....";
//    echo"<hr>";
//    $u->delete();
//    
//}else{
//     echo"<hr>";
//    echo"NO EXISTE.....";
//    echo"<hr>";
//    
//    
//    
//}
$lista_de_usuarios = Computer::all(); // select*from usuarios;
if (count($lista_de_usuarios) < -0) {
    echo "SIN  USUARIOS QUE MOSTRAR";
} else {
    ?>
    <table border="1">
        <tr>
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
    foreach ($lista_de_usuarios as $u) {
        ?>
            <tr>
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
