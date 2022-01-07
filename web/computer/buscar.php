<?php
session_start();
require_once '../../modelo/Computer.php';  //estoy usando el obj tipo usuario debo import
$msj = @$_REQUEST["msj"];
$u = @$_SESSION["usuario.find"];  //aca recupero el objeto serializado del metodo buscar_usuario
if($u != NULL){
$u = unserialize($u);
}
?>



<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>EJEMPLO DE WEB APP CON MVC</title>
         
    </head>

    <body>
    <center>
         <h2 style="blue">FORMULARIO PARA BUSCAR USUARIOS</h2>
        <hr>
        <form action="../../controladores/ControlComputer.php" onsubmit="confirmar()">
            <fieldset style="width: 35%">
                <legend>CONSULTAR DATOS EN LA BD</legend>
                <table border="1">
                    <tr>
                        <th style="text-align: right">ID:</th>
                        <td><input type="number" name="cc" placeholder="Ingrese su ID" required value="<?= ($u)? $u->id : ""  ?>"></td>
                    </tr>
                    

                    <tr>
                        <th>PASSWORD:</th>
                        <td><input type="password" name="clave" placeholder="Ingrese su Clave" value="<?= ($u)? $u->password : ""  ?>"></td>
                    </tr>
                    
                    
                   
                    
                    
                    
                    <tr>
                        <th>MARCA:</th>
                        <td>
                            <select name="marca" >
                                <?php
                                $marca_1 = "";
                                $marca_2 = "";
                                $marca_3 = "";
                                $marca_4 = "";
                                $marca_5 = "";
                                $marca_6 = "";
                                if($u){
                                    $marca = $u->marca;
                                    
                                    if(strtolower($marca) == "dell"){
                                        $marca_1 = "selected";
                                    }else if(strtolower($marca) == "hp"){
                                        $marca_2 = "selected";
                                    }else if(strtolower($marca) == "asus"){
                                        $marca_3 = "selected";
                                    }else if(strtolower($marca) == "acer"){
                                        $marca_4 = "selected";
                                    }else if(strtolower($marca) == "lenovo"){
                                        $marca_5 = "selected";
                                    }else if(strtolower($marca) == "compaq"){
                                        $marca_6 = "selected";
                                    }
                                    
                                }
                                ?>
                                <option value="">Seleccione un ...</option>
                                <option <?= $marca_1 ?> value="dell">DELL</option>
                                <option <?= $marca_2 ?> value="hp">HP</option>
                                <option <?= $marca_3 ?> value="asus">ASUS</option>
                                <option <?= $marca_4 ?> value="acer">ACER</option>
                                <option <?= $marca_5 ?> value="lenovo">LENOVO</option>
                                <option <?= $marca_6 ?> value="compaq">COMPAQ</option>
                            </select>
                        </td>

                    </tr>
                    
                    
                    
                      <tr>
                        <th>CATEGORIA:</th>
                        <td>
                            <select name="categoria" >
                                <?php
                                $categoria_1 = "";
                                $categoria_2 = "";
                                $categoria_3 = "";
                                $categoria_4 = "";
                               
                             
                                if($u){
                                    $categoria = $u->categoria;
                                    
                                    if(strtolower($categoria) == "computadores incorporados"){
                                        $categoria_1 = "selected";
                                    }else if(strtolower($categoria) == "microcomputadores"){
                                        $categoria_2 = "selected";
                                    }else if(strtolower($categoria) == "servidores"){
                                        $categoria_3 = "selected";
                                    }else if(strtolower($categoria) == "computadores centrales"){
                                        $categoria_4 = "selected";
                                    }
                                    
                                }
                                ?>
                                <option value="">Seleccione un ...</option>
                                <option <?= $categoria_1 ?> value="computadores incorporados">COMPUTADORAS INCORPORADAS</option>
                                <option <?= $categoria_2 ?> value="microcomputadores">MICROCOMPUTADORES</option>
                                <option <?= $categoria_3 ?> value="servidores">SERVIDORES</option>
                                <option <?= $categoria_4 ?> value="computadores centrales">COMPUTADORAS CENTRALES</option>
                                
                            </select>
                        </td>

                    </tr>
                    
                    
     
                    
                    <tr>
                        <td colspan="2">
                            <fieldset>
                                <?php 
                                 $cpu1 = "";
                                 $cpu2 = "";
                            
                                if($u){
                                    $marcacpu = $u->marca_cpu;
                                   
                                if($marcacpu == "intel"){
                                    $cpu1 = "checked";
                                }
                                else if($marcacpu == "amd"){
                                    $cpu2 = "checked";
                                }
                               
                                }
                                
                                ?>
                                
                                <legend>MARCA CPU:</legend>
                                Intel: <input <?=  $cpu1 ?> type="radio" name="marcac" value="intel">&nbsp;&nbsp;&nbsp;
                                AMD: <input <?=  $cpu2 ?>type="radio" name="marcac" value="amd">&nbsp;&nbsp;&nbsp;
                                

                            </fieldset>
                        </td>

                    </tr>
                     <tr>
                        <th>VELOCIDAD CPU:</th>
                        <td>
                            <select name="velcpu" >
                                <?php
                                $velcpu_1 = "";
                                $velcpu_2 = "";
                                $velcpu_3 = "";
                                $velcpu_4 = "";
                                $velcpu_5 = "";
                                
                                if($u){
                                    $velocidadcpu = $u->velocidad_cpu;
                                    
                                    if($velocidadcpu == "3.2 3.46"){
                                        $velcpu_1 = "selected";
                                    }else if($velocidadcpu == "1.6 3.46"){
                                        $velcpu_2 = "selected";
                                    }else if($velocidadcpu == "1.6 3.46"){
                                        $velcpu_3 = "selected";
                                    }else if($velocidadcpu == "2.4 3.46"){
                                        $velcpu_4 = "selected";
                                    }else if($velocidadcpu == "1.6 2.33"){
                                        $velcpu_5 = "selected";
                                    }
                                    
                                }
                                ?>
                                <option value="">Seleccione un ...</option>
                                <option <?= $velcpu_1 ?> value="3.2 3.46">3.2 - 3.46 GHz</option>
                                <option <?= $velcpu_2 ?> value="1.6 3.46">1.6 - 3.46 GHz</option>
                                <option <?= $velcpu_3 ?> value="1.6 3.46">1.6 - 3.46 GHz</option>
                                <option <?= $velcpu_4 ?> value="2.4 3.46">2.4 - 3.46 GHz</option>
                                <option <?= $velcpu_5 ?> value="1.6 2.33">1.6 - 2.33 GHz</option>
                                
                            </select>
                        </td>

                    </tr>
                    
                    
                        <tr>
                        <td colspan="2">
                            <fieldset>
                                <?php 
                                 $ram1 = "";
                                 $ram2 = "";
                                 $ram3 = "";
                                 $ram4 = "";
                                 $ram5 = "";
                                 $ram6 = "";
                            
                                if($u){
                                    $tecram = $u->tecnologia_ram;
                                   
                                if($tecram == "ddr"){
                                    $ram1 = "checked";
                                }
                                else if($tecram == "ddr2"){
                                    $ram2 = "checked";
                                }else if($tecram == "ddr3"){
                                    $ram3 = "checked";
                                }else if($tecram == "ddr4"){
                                    $ram4 = "checked";
                                }else if($tecram == "sdram"){
                                    $ram5 = "checked";
                                }else if($tecram == "rdram"){
                                    $ram6 = "checked";
                                }
                               
                                }
                                
                                ?>
                                
                                <legend>TECNOLOGIA RAM:</legend>
                                DDR: <input <?=  $ram1 ?> type="radio" name="tram" value="ddr">&nbsp;&nbsp;&nbsp;
                                SDRAM: <input <?=  $ram2 ?>type="radio" name="tram" value="ddr2">&nbsp;&nbsp;&nbsp;
                                RDRAM: <input <?=  $ram3 ?> type="radio" name="tram" value="ddr3">&nbsp;&nbsp;&nbsp;
                                DDR2: <input <?=  $ram4 ?>type="radio" name="tram" value="ddr4">&nbsp;&nbsp;&nbsp;
                                DDR3: <input <?=  $ram5 ?> type="radio" name="tram" value="sdram">&nbsp;&nbsp;&nbsp;
                                DDR4: <input <?=  $ram6 ?>type="radio" name="tram" value="edram">&nbsp;&nbsp;&nbsp;
                                

                            </fieldset>
                        </td>

                    </tr>
                    
                    
                    
                    <tr>
                        <td colspan="2">
                            <fieldset>
                                <?php 
                                 $cram1 = "";
                                 $cram2 = "";
                                 $cram3 = "";
                                 $cram4 = "";
                                 $cram5 = "";
                   
                            
                                if($u){
                                    $capram = $u->capacidad_ram;
                                   
                                if($capram == "200"){
                                    $cram1 = "checked";
                                }
                                else if($capram == "533"){
                                    $cram2 = "checked";
                                }else if($capram == "800"){
                                    $cram3 = "checked";
                                }else if($capram == "1600"){
                                    $cram4 = "checked";
                                }else if($capram == "133"){
                                    $cram5 = "checked";
                                }
                               
                                }
                                
                                ?>
                                
                                <legend>CAPACIDAD RAM:</legend>
                                200Mhz: <input <?=  $cram1 ?> type="radio" name="cram" value="200">&nbsp;&nbsp;&nbsp;
                                533Mhz: <input <?=  $cram2 ?>type="radio" name="cram" value="533">&nbsp;&nbsp;&nbsp;
                                800Mhz: <input <?=  $cram3 ?> type="radio" name="cram" value="800">&nbsp;&nbsp;&nbsp;
                                1600Mhz: <input <?=  $cram4 ?>type="radio" name="cram" value="1600">&nbsp;&nbsp;&nbsp;
                                133Mhz: <input <?=  $cram5 ?> type="radio" name="cram" value="133">&nbsp;&nbsp;&nbsp;
                                
                                

                            </fieldset>
                        </td>

                    </tr>
                    
                    
                    
                    <tr>
                        <td colspan="2">
                            <fieldset>
                                <?php 
                                 $disco1 = "";
                                 $disco2 = "";
                                 $disco3 = "";
                                 $disco4 = "";
                                 $disco5 = "";
                   
                            
                                if($u){
                                    $tecdisco = $u->tecnologia_disco;
                                   
                                if($tecdisco == "hdd"){
                                    $disco1 = "checked";
                                }
                                else if($tecdisco == "ssd"){
                                    $disco2 = "checked";
                                }else if($tecdisco == "pata"){
                                    $disco3 = "checked";
                                }else if($tecdisco == "scsi"){
                                    $disco4 = "checked";
                                }else if($tecdisco == "ata"){
                                    $disco5 = "checked";
                                }
                               
                                }
                                
                                ?>
                                
                                <legend>TECNOLOGIA DISCO:</legend>
                                HDD: <input <?=  $disco1 ?> type="radio" name="tdisco" value="hdd">&nbsp;&nbsp;&nbsp;
                                SSD: <input <?=  $disco2 ?>type="radio" name="tdisco" value="ssd">&nbsp;&nbsp;&nbsp;
                                PATA: <input <?=  $disco3 ?> type="radio" name="tdisco" value="pata">&nbsp;&nbsp;&nbsp;
                                SCSI: <input <?=  $disco4 ?>type="radio" name="tdisco" value="scsi">&nbsp;&nbsp;&nbsp;
                                ATA SATA: <input <?=  $disco5 ?> type="radio" name="tdisco" value="ata">&nbsp;&nbsp;&nbsp;
                                
                                

                            </fieldset>
                        </td>

                    </tr>
                    
                    
                    <tr>
                        <td colspan="2">
                            <fieldset>
                                <?php 
                                 $cdisco1 = "";
                                 $cdisco2 = "";
                                 $cdisco3 = "";
                                 $cdisco4 = "";
                                 $cdisco5 = "";
                   
                            
                                if($u){
                                    $capadisco = $u->capacidad_disco;
                                   
                                if($capadisco == "160"){
                                    $disco1 = "checked";
                                }
                                else if($capadisco == "250"){
                                    $disco2 = "checked";
                                }else if($capadisco == "320"){
                                    $disco3 = "checked";
                                }else if($capadisco == "500"){
                                    $disco4 = "checked";
                                }else if($capadisco == "1000"){
                                    $disco5 = "checked";
                                }
                               
                                }
                                
                                ?>
                                
                                <legend>CAPACIDAD DISCO:</legend>
                                160GB: <input <?=  $disco1 ?> type="radio" name="cdisco" value="160">&nbsp;&nbsp;&nbsp;
                                250GB: <input <?=  $disco2 ?>type="radio" name="cdisco" value="250">&nbsp;&nbsp;&nbsp;
                                320GB: <input <?=  $disco3 ?> type="radio" name="cdisco" value="320">&nbsp;&nbsp;&nbsp;
                                500GB: <input <?=  $disco4 ?>type="radio" name="cdisco" value="500">&nbsp;&nbsp;&nbsp;
                                1TB: <input <?=  $disco5 ?> type="radio" name="cdisco" value="1000">&nbsp;&nbsp;&nbsp;
                                
                                

                            </fieldset>
                        </td>

                    </tr>
                    
                    
                    <tr>
                        <th>NUMERO DE PUERTOS:</th>
                        <td>
                            <select name="usb" >
                                <?php
                                $nusb_1 = "";
                                $nusb_2 = "";
                                $nusb_3 = "";
                                
                                if($u){
                                    $usb = $u->num_puertos_usb;
                                    
                                    if(strtolower($usb) == "uno"){
                                        $nusb_1 = "selected";
                                    }else if(strtolower($usb) == "dos"){
                                        $nusb_2 = "selected";
                                    }else if(strtolower($usb) == "tres"){
                                        $nusb_3 = "selected";
                                    }
                                    
                                }
                                ?>
                                <option value="">Seleccione un ...</option>
                                <option <?= $nusb_1 ?> value="uno">UNO</option>
                                <option <?= $nusb_2 ?> value="dos">DOS</option>
                                <option <?= $nusb_3 ?> value="tres">TRES</option>
                                
                            </select>
                        </td>

                    </tr>
                    
                    
                    <tr>
                        <th>NUMERO DE DMI:</th>
                        <td>
                            <select name="hdmi" >
                                <?php
                                $nhdmi_1 = "";
                                $nhdmi_2 = "";
                                $nhdmi_3 = "";
                                
                                if($u){
                                    $hdmi = $u->num_puertos_hdmi;
                                    
                                    if(strtolower($hdmi) == "uno"){
                                        $nhdmi_1 = "selected";
                                    }else if(strtolower($hdmi) == "dos"){
                                        $nhdmi_2 = "selected";
                                    }else if(strtolower($hdmi) == "tres"){
                                        $nhdmi_3 = "selected";
                                    }
                                    
                                }
                                ?>
                                <option value="">Seleccione un ...</option>
                                <option <?= $nhdmi_1 ?> value="uno">UNO</option>
                                <option <?= $nhdmi_2 ?> value="dos">DOS</option>
                                <option <?= $nhdmi_3 ?> value="tres">TRES</option>
                                
                            </select>
                        </td>

                    </tr>
                    
                       <tr>
                        <th>MARCA MONITOR:</th>
                        <td>
                            <select name="monitor" >
                                <?php
                                $monitor_1 = "";
                                $monitor_2 = "";
                                $monitor_3 = "";
                                $monitor_4 = "";
                                $monitor_5 = "";
                                $monitor_6 = "";
                                if($u){
                                    $marcamonitor = $u->marca_monitor;
                                    
                                    if(strtolower($marcamonitor) == "acer"){
                                        $monitor_1 = "selected";
                                    }else if(strtolower($marcamonitor) == "asus"){
                                        $monitor_2 = "selected";
                                    }else if(strtolower($marcamonitor) == "philips"){
                                        $monitor_3 = "selected";
                                    }else if(strtolower($marcamonitor) == "beng"){
                                        $monitor_4 = "selected";
                                    }else if(strtolower($marcamonitor) == "dell"){
                                        $monitor_5 = "selected";
                                    }
                                    
                                }
                                ?>
                                <option value="">Seleccione un ...</option>
                                <option <?= $monitor_1 ?> value="acer">ACER</option>
                                <option <?= $monitor_2 ?> value="asus">ASUS</option>
                                <option <?= $monitor_3 ?> value="philips">PHILIPS</option>
                                <option <?= $monitor_4 ?> value="beng">BENG</option>
                                <option <?= $monitor_5 ?> value="dell">DELL</option>
                                
                            </select>
                        </td>

                    </tr>
                    
                    
                      
                    <tr>
                        <td colspan="2">
                            <fieldset>
                                <?php 
                                 $pul1 = "";
                                 $pul2 = "";
                                 $pul3 = "";
                            
                                if($u){
                                    $pul = $u->pulgadas;
                                   
                                if($pul == "17pul"){
                                    $pul1 = "checked";
                                }
                                else if($pul == "32pul"){
                                    $pul2 = "checked";
                                }else if($pul == "21pul"){
                                    $pul3 = "checked";
                                }
                               
                                }
                                
                                ?>
                                
                                <legend>PULGADAS:</legend>
                                17 PULGADAS: <input <?=  $pul1 ?> type="radio" name="pul" value="17pul">&nbsp;&nbsp;&nbsp;
                                32 PULGADAS: <input <?=  $pul2 ?>type="radio" name="pul" value="32pul">&nbsp;&nbsp;&nbsp;
                                21 PULGADAS: <input <?=  $pul2 ?>type="radio" name="pul" value="21pul">&nbsp;&nbsp;&nbsp;

                            </fieldset>
                        </td>

                    </tr>
                    
                    
                         <tr>
                        <th>PRECIO:</th>
                        <td>
                            <select name="precio" >
                                <?php
                                $precio_1 = "";
                                $precio_2 = "";
                                $precio_3 = "";
                                $precio_4 = "";
                                
                                if($u){
                                    $precio = $u->precio;
                                    
                                    if(strtolower($precio) == "1000000"){
                                        $precio_1 = "selected";
                                    }else if(strtolower($precio) == "2000000"){
                                        $precio_2 = "selected";
                                    }else if(strtolower($precio) == "6500000"){
                                        $precio_3 = "selected";
                                    }else if(strtolower($precio) == "20800000"){
                                        $precio_4 = "selected";
                                    }
                                    
                                }
                                ?>
                                <option value="">Seleccione un ...</option>
                                <option <?= $precio_1 ?> value="1000000">1000000-2000000</option>
                                <option <?= $precio_2 ?> value="2000000">2000000-6500000</option>
                                <option <?= $precio_3 ?> value="6500000">6500000-20800000</option>
                                <option <?= $precio_4 ?> value="20800000">20800000-50000000</option>
                                
                                
                            </select>
                        </td>

                    </tr>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                  








                    <tr>
                        <th colspan="2" style="text-align: right">
                            <input type="reset" value="LIMPIAR">&nbsp;&nbsp;&nbsp;
                            <input type="submit" name="accion" id ="eliminar" onclick="return confirm('Desea eliminar')" value="ELIMINAR">&nbsp;&nbsp;&nbsp;
                            <input type="submit" name="accion" id ="editar" onclick="return confirm('Desea editar')"value="EDITAR">&nbsp;&nbsp;&nbsp;
                            <input type="submit" name="accion" id ="buscar" onclick="return confirm('Desea buscar')"value="BUSCAR">
                        </th>
                    </tr>

                </table>

            </fieldset>  
        </form>
        <span style="color: red"><?= @$msj ?></span>
    </center>

</body>
</html>