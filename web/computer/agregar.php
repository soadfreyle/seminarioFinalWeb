<!DOCTYPE html>
<?php
$msj = @$_REQUEST["msj"];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJEMPLO DE WEB APP CON MVC</title>
        
    </head>

    <body>
    <center>
        <h2 style="blue">FORMULARIO PARA INGRESAR USUARIOS</h2>
        <hr>
        <form action="../../controladores/ControlComputer.php" onsubmit="return confirmar();">
            <fieldset style="width: 35%">
                <legend>AGREGAR</legend>
                <table border="1">
                    <tr>
                        <th>ID:</th>
                        <td><input type="number" name="cc" placeholder="Ingrese su Cedula" required></td>
                    </tr>
                    <tr>
                        <th>PASSWORD:</th>
                        <td><input type="password" name="clave" placeholder="Ingrese su Clave" required></td>
                    </tr>
                    
                    
                    <tr>
                        <th>MARCA:</th>
                        <td>
                            <select name="marca" required aria-required>
                                <option value="">Seleccione un ...</option>
                                <option value="dell">DELL</option>
                                <option value="hp">HP</option>
                                <option value="asus">ASUS</option>
                                <option value="acer">ACER</option>
                                <option value="lenovo">LENOVO</option>
                                <option value="compaq">COMPAQ</option>
                            </select>
                        </td>

                    </tr>
                    <tr>
                        <th>CATEGORIA:</th>
                        <td>
                            <select name="categoria" required aria-required>
                                <option value="">Seleccione un ...</option>
                                <option value="COMPUTADORES INCORPORADOS">COMPUTADORES INCORPARADOS</option>
                                <option value="MICROCOMPUTADORES">MICROCOMPUTADORES</option>
                                <option value="SERVIDORES">SERVIDORES</option>
                                <option value="COMPUTADORES CENTRALES">COMPUTADORAS CENTRALES</option>
                            </select>
                        </td>

                    </tr>
                    <tr>
                        <td colspan="2">
                            <fieldset>
                                <legend>MARCA CPU:</legend>
                                Intel: <input type="radio" name="marcac" value="intel">&nbsp;&nbsp;&nbsp;
                                AMD: <input type="radio" name="marcac" value="amd">&nbsp;&nbsp;&nbsp;
                                

                            </fieldset>
                        </td>

                    </tr>
                    <tr>
                        <th>VELOCIDAD CPU:</th>
                        <td>
                            <select name="velcpu" required aria-required>
                                <option value="">Seleccione un ...</option>
                                <option value="3.2 3.4">3.2 - 3.46 GHz</option>
                                <option value="1.6 3.46">1.6 - 3.46 GHz</option>
                                <option value="1.6 3.46">1.6 - 3.46 GHz</option>
                                <option value="2.4 3.46">2.4 - 3.46 GHz</option>
                                <option value="1.6 2.33">1.6 - 2.33 GHz</option>
                            </select>
                        </td>

                    </tr>
                     <tr>
                        <td colspan="2">
                            <fieldset>
                                <legend>TECNOLOGIA RAM:</legend>
                                DDR: <input type="radio" name="tram" value="ddr">&nbsp;&nbsp;&nbsp;
                                DDR2: <input type="radio" name="tram" value="ddr2">&nbsp;&nbsp;&nbsp;
                                DDR3: <input type="radio" name="tram" value="ddr3">&nbsp;&nbsp;&nbsp;
                                DDR4: <input type="radio" name="tram" value="ddr4">&nbsp;&nbsp;&nbsp;
                                SDRAM: <input type="radio" name="tram" value="sdram">&nbsp;&nbsp;&nbsp;
                                RDRAM: <input type="radio" name="tram" value="rdram">&nbsp;&nbsp;&nbsp;


                            </fieldset>
                        </td>

                    </tr>
                    <tr>
                        <td colspan="2">
                            <fieldset>
                                <legend>CAPACIDAD RAM:</legend>
                                200Mhz: <input type="radio" name="cram" value="200">&nbsp;&nbsp;&nbsp;
                                533Mhz: <input type="radio" name="cram" value="533">&nbsp;&nbsp;&nbsp;
                                800Mhz: <input type="radio" name="cram" value="800">&nbsp;&nbsp;&nbsp;
                                1600Mhz: <input type="radio" name="cram" value="1600">&nbsp;&nbsp;&nbsp;
                                133Mhz: <input type="radio" name="cram" value="133">&nbsp;&nbsp;&nbsp;

                            </fieldset>
                        </td>

                    </tr>
                    <tr>
                        <td colspan="2">
                            <fieldset>
                                <legend>TECNOLOGIA DISCO:</legend>
                                HDD: <input type="radio" name="tdisco" value="hdd">&nbsp;&nbsp;&nbsp;
                                SSD: <input type="radio" name="tdisco" value="ssd">&nbsp;&nbsp;&nbsp;
                                PATA: <input type="radio" name="tdisco" value="pata">&nbsp;&nbsp;&nbsp;
                                ATA SATA: <input type="radio" name="tdisco" value="ata">&nbsp;&nbsp;&nbsp;
                                SCSI: <input type="radio" name="tdisco" value="scsi">&nbsp;&nbsp;&nbsp;

                            </fieldset>
                        </td>

                    </tr>
                    <tr>
                        <td colspan="2">
                            <fieldset>
                                <legend>CAPACIDAD DISCO:</legend>
                                160GB: <input type="radio" name="cdisco" value="160GB">&nbsp;&nbsp;&nbsp;
                                250GB: <input type="radio" name="cdisco" value="250GB">&nbsp;&nbsp;&nbsp;
                                320GB: <input type="radio" name="cdisco" value="320GB">&nbsp;&nbsp;&nbsp;
                                500GB: <input type="radio" name="cdisco" value="500GB">&nbsp;&nbsp;&nbsp;
                                1GB: <input type="radio" name="cdisco" value="1gb">&nbsp;&nbsp;&nbsp;

                            </fieldset>
                        </td>

                    </tr>
                    <tr>
                        <td colspan="2">
                            <fieldset>
                                <legend>NUMERO PUERTO USB:</legend>
                                UNO: <input type="radio" name="usb" value="uno">&nbsp;&nbsp;&nbsp;
                                DOS: <input type="radio" name="usb" value="dos">&nbsp;&nbsp;&nbsp;
                                TRES: <input type="radio" name="usb" value="tres">&nbsp;&nbsp;&nbsp;

                            </fieldset>
                        </td>

                    </tr>
                    <tr>
                        <td colspan="2">
                            <fieldset>
                                <legend>NUMERO PUERTO HDMI:</legend>
                                UNO: <input type="radio" name="hdmi" value="uno">&nbsp;&nbsp;&nbsp;
                                DOS: <input type="radio" name="hdmi" value="dos">&nbsp;&nbsp;&nbsp;
                                TRES: <input type="radio" name="hdmi" value="tres">&nbsp;&nbsp;&nbsp;

                            </fieldset>
                        </td>

                    </tr>
                    <tr>
                        <th>MARCA MONITOR:</th>
                        <td>
                            <select name="monitor" required aria-required>
                                <option value="">Seleccione un ...</option>
                                <option value="ACER">ACER</option>
                                <option value="ASUS">ASUS</option>
                                <option value="PHILIPS">PHILIPS</option>
                                <option value="BENG">BENG</option>
                                 <option value="DELL">DELL</option>
                            </select>
                        </td>

                    </tr>
                    <tr>
                        <td colspan="2">
                            <fieldset>
                                <legend>PULGADAS:</legend>
                                17Pul: <input type="radio" name="pul" value="17pul">&nbsp;&nbsp;&nbsp;
                                32Pul: <input type="radio" name="pul" value="32pul">&nbsp;&nbsp;&nbsp;
                                21Pul: <input type="radio" name="pul" value="21pul">&nbsp;&nbsp;&nbsp;

                            </fieldset>
                        </td>

                    </tr>
                      <tr>
                        <th>PRECIO:</th>
                        <td>
                            <select name="precio" required aria-required>
                                <option value="">Seleccione un ...</option>
                                <option value="1000000">1000000 - 2000000</option>
                                <option value="2000000">2000000 - 6500000</option>
                                <option value="6500000">6500000 - 208000000</option>
                                <option value="20800000">20800000 - 50000000</option>
                            </select>
                        </td>

                    </tr>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                   
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    








                    <tr>
                        <th colspan="2" style="text-align: right">
                            <input type="reset" value="LIMPIAR">&nbsp;&nbsp;&nbsp;
                            <input type="submit" name="accion" value="GUARDAR" onclick="return confirm('Desea Agregar')">
                        </th>
                    </tr>

                </table>

            </fieldset>  
        </form>
        <span style="color: red"><?= @$msj ?></span>
    </center>

</body>
</html>