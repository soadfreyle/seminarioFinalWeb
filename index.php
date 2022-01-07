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
        <form action="controladores/ControlComputer.php">
            <fieldset style="width: 35%">
                <legend>LOGIN</legend>
                <table>
                    <tr>
                        <th>ID:</th>
                        <td><input type="text" name="id" placeholder="Ingrese su ID" required></td>
                    </tr>
                    <tr>
                        <th>PASSWORD:</th>
                        <td><input type="password" name="clave" placeholder="Ingrese su Clave" required></td>
                    </tr>
                    <tr>
                        <th colspan="2" style="text-align: right">
                            <input type="reset" value="LIMPIAR">&nbsp;&nbsp;&nbsp;
                            <input type="submit" name="accion" value="LOGIN">
                        </th>
                    </tr>

                </table>

            </fieldset>  
        </form>
        <span style="color: red"><?= @$msj ?></span>
    </center>

</body>
</html>