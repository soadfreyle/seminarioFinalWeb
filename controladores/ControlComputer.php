<?php

session_start();
require_once '../modelo/Computer.php';

/**
 * Description of ControlComputer
 *
 * @author ODETH
 */
class ControlComputer {
    //put your code here
     public function ejecutar_accion($accion) {
        switch ($accion) {
            case "LOGIN":
                $this->iniciar_sesion();

                break;
            case "GUARDAR":
                $this->guardar_usuario(NULL);

                break;
            case "BUSCAR":
                $this->buscar_usuario();

                break;
            case "ELIMINAR":
                $this->eliminar_usuario();
                break;
            
             case "EDITAR":
                $u = $_SESSION["usuario.find"];
                $u = unserialize($u);
                $this->guardar_usuario($u);
                
                break;


            default:
                break;
        }
    }

    public function iniciar_sesion() {
        $id = $_REQUEST["id"];
        $pass = $_REQUEST["clave"];
        try {
            $u = Computer::find_by_id($id);
            if ($u != null || isset($u)) {
                if ($u->password == $pass) {
                    header("Location: ../web/index.php");
                    exit;
                } else {
                    header("Location: ../index.php?msj=Clave Incorrecta");
                    exit;
                }
            } else {
                header("Location: ../index.php?msj=Usuario No existe  ");
                exit;
            }
        } catch (Exception $ex) {
            header("Location: ../index.php?msj=Usuario No existe");
            exit;
        }
    }

    public function guardar_usuario($u) {


        $cedula = @$_REQUEST["cc"];
        $clave = @$_REQUEST["clave"];
        $marca = @$_REQUEST["marca"];
        $categoria = @$_REQUEST["categoria"];
        $marcacpu = @$_REQUEST["marcac"];
        $velocidadcpu = @$_REQUEST["velcpu"];
        $tecram = @$_REQUEST["tram"];
        $capram = @$_REQUEST["cram"];
        $tecdisco = @$_REQUEST["tdisco"];
        $capadisco = @$_REQUEST["cdisco"];
        $usb = @$_REQUEST["usb"];
        $hdmi = @$_REQUEST["hdmi"];
        $marcamonitor = @$_REQUEST["monitor"];
        $pul = @$_REQUEST["pul"];
        $precio = @$_REQUEST["precio"];
        
        
        
        
       
        //validar
        $res = $this->validar_campo_vacio($cedula);

        if ($res) {
            header("Location: ../web/computer/agregar.php?msj=La Cedula es necesaria");
            exit;
        }
        
      
        
        
        
        
        
        $pagina = "buscar";
        $msj = "Usuario Actualizado";
        $total = "";
        try{
            if ($u == NULL){
            $u = new Computer();
            $u->id = $cedula;
      
            $pagina = "agregar";
            $total = Computer::count();
            $msj = "Usuario Registrado, Total: " . $total;
            $_SESSION["usuario.find"] = NULL;
            }
            $u->password = $clave;
            $u->marca = $marca;
            $u->categoria = $categoria;
            $u->marca_cpu = $marcacpu;
            $u->velocidad_cpu = $velocidadcpu;
            $u->tecnologia_ram = $tecram;
            $u->capacidad_ram = $capram;
            $u->tecnologia_disco = $tecdisco;
            $u->capacidad_disco = $capadisco;
            $u->num_puertos_usb = $usb;
            $u->num_puertos_hdmi = $hdmi;
            $u->marca_monitor = $marcamonitor;
            $u->pulgadas = $pul;
            $u->precio = $precio;
       
          
            if($pagina == "buscar"){
                $u2 = serialize($u);
                $_SESSION["usuario.find"] = $u2;
            }
                $u->save(); 
            header("Location: ../web/computer/$pagina.php?msj=$msj");
            exit;
        } catch (Exception $error) {
            $msj = $error->getMessage();
            if(strstr($msj, "Duplicate")){
                header("Location: ../web/computer/$pagina.php?msj=USUARIO YA EXISTE");
            exit;
          
            }else{
                 header("Location: ../web/computer/$pagina.php?msj=USUARIO no se REGISTRADO");
            exit;
         
            }
        }
        
        
        
    }
 

    private function validar_campo_vacio($campo) {

        if ($campo == NULL || empty($campo) || !isset($campo)) {
            return true;
        } else {
            return false;
        }
    }

    public function buscar_usuario() {
        $cedula = @$_REQUEST["cc"];
        $res = $this->validar_campo_vacio($cedula);

        if ($res) {
            header("Location: ../web/computer/buscar.php?msj=La Cedula es necesaria");
            exit;
        }
        try {
            $u = Computer:: find($cedula); // select *from computer where cedula = '1045'
            $u = serialize($u);  // este obj se convierte en bit para mandar a buscarphp
            $_SESSION["usuario.find"] = $u;  // aca guardo el usuario serializado
            header("Location: ../web/computer/buscar.php");  // me devuelvo a la pagina de buscar
            exit;
            
        } catch (Exception $exc) {
            
             header("Location: ../web/computer/buscar.php?msj=El Usuario NO EXISTE");
             $_SESSION["usuario.find"] = NULL; //limpia la sesion anterior
            exit;
        }
        
        
    }

    public function eliminar_usuario() {
        $cedula = @$_REQUEST["cc"];
        $res = $this->validar_campo_vacio($cedula);

        if ($res) {
            header("Location: ../web/computer/buscar.php?msj=La Cedula es necesaria");
            exit;
        }
        
        
        $u = $_SESSION["usuario.find"];
        $u = unserialize($u);
        $u->delete();
        $_SESSION["usuario.find"] = NULL;
        $total = Computer:: count();
        $msj = "Usuario Eliminado, Total ".$total;
        header("Location: ../web/computer/buscar.php?msj=".$msj);
        exit;
        
        
        
    }
}





$accion = @$_REQUEST["accion"];
if ($accion != null) {
    $controlador = new ControlComputer();
    $controlador->ejecutar_accion($accion);
} else {
    header("Location: ../index.php?msj=Debe iniciar Sesion soad");
}