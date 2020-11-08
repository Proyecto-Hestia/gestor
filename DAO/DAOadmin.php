<?php

class DAOAdmin{

    //CATEGORIA
    public function RegistrarCategoria(Categoria $categoria){ 
        $conexion = new Conexion(); 
        $frmcat_id=$categoria->getfrmcat_id(); 
        $frmcat_desc=$categoria->getfrmcat_desc(); 
        $frmcat_estado=$categoria->getfrmcat_estado(); 

        $error = 1; 
        $exito = 2; 

        if (trim($frmcat_desc) == "" OR trim($frmcat_estado) == "" ) { 
            echo json_encode($error); 
        }else{
            $sql = "INSERT INTO categorias VALUES (null,'$frmcat_desc','$frmcat_estado')"; 
            $conexion->ejecutar_query($sql); 
            echo json_encode($exito);
        } 
    }

    public function EditarCategoria(Categoria $categoria){ 
        $conexion = new Conexion(); 
        $id=$categoria->getfrmcat_id(); 
        $sql = "SELECT * FROM categorias WHERE id_cat = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
        return $result; 
    }

    public function ActualizarCategoria(Categoria $categoria){ 
        $conexion = new Conexion(); 
        $frmcat_id1=$categoria->getfrmcat_id(); 
        $frmcat_desc1=$categoria->getfrmcat_desc(); 
        $frmcat_estado1=$categoria->getfrmcat_estado();
        if (trim($frmcat_desc1) == "" OR trim($frmcat_estado1) == "" ) { 
            echo json_encode($error); 
        }else{
            $sql = "UPDATE categorias SET des_cat = '$frmcat_desc1', est_cat = '$frmcat_estado1' WHERE id_cat = '$frmcat_id1'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->ObtenerFilasAfectadas();
        }
    } 

    public function EliminarCategoria(Categoria $categoria){ 
        $conexion = new Conexion(); 
        $id=$categoria->getfrmcat_id(); 

        $sql = "DELETE FROM categorias WHERE id_cat = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
    }

    //PRODUCTO

    public function buscarCategoria(){
        $conexion = new Conexion();
        $sql = "SELECT * FROM categorias";
	    $conexion->buscar_query($sql);
	    $result2 = $conexion->obtenerResult();
        return $result2;
    }

    public function RegistrarProducto(Producto $producto){ 
        $conexion = new Conexion(); 
        $frmid=$producto->getfrmid();
        $frmnombre=$producto->getfrmnombre(); 
        $frmcategoria_id=$producto->getfrmcategoria_id();
        $frmimg_pro=$producto->getfrmimg_pro(); 
        $frmdes_pro=$producto->getfrmdes_pro(); 
        $frmstock=$producto->getfrmstock();
        $frmstockmin=$producto->getfrmstockmin();
        $frmval_pro=$producto->getfrmval_pro();
        $frmestado=$producto->getfrmestado();
        
        $error = 1; 
        $exito = 2; 
        if (trim($frmcategoria_id) == "" OR
            trim($frmnombre) == "" OR 
            trim($frmdes_pro) == "" OR 
            trim($frmimg_pro) == "" OR 
            trim($frmstock) == "" OR 
            trim($frmstockmin) == "" OR  
            trim($frmval_pro) == "" OR
            trim($frmestado) == "") { 
            echo json_encode($error); 
        }else{
            $sql = "INSERT INTO productos (`id_pro`, `cat_id`, `nom_pro`, `des_pro`, `img_pro`, 
                    `stock_pro`, `stock_min_pro`, `val_pro`, `est_pro`) VALUES (null,'$frmcategoria_id',
                    '$frmnombre','$frmdes_pro','$frmimg_pro','$frmstock','$frmstockmin','$frmval_pro','$frmestado')"; 
            $conexion->ejecutar_query($sql); 
            echo json_encode($exito);
        } 
    }

    public function EditarProducto(Producto $producto){ 
        $conexion = new Conexion(); 
        $id=$producto->getfrmid(); 
        $sql = "SELECT * FROM productos WHERE id_pro = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
        return $result; 
    }

    public function ActualizarProducto(Producto $producto){ 
        $conexion = new Conexion(); 
        $frmid1=$producto->getfrmid(); 
        $frmnombre1=$producto->getfrmnombre(); 
        $frmcategoria_id1=$producto->getfrmcategoria_id(); 
        $frmimg_pro1=$producto->getfrmimg_pro(); 
        $frmdes_pro1=$producto->getfrmdes_pro(); 
        $frmstock1=$producto->getfrmstock();
        $frmstockmin1=$producto->getfrmstockmin();
        $frmval_pro1=$producto->getfrmval_pro(); 
        $frmestado1=$producto->getfrmestado();

        $error=1;

        if (trim($frmnombre1) == "" OR 
            trim($frmcategoria_id1) == "" OR 
            trim($frmimg_pro1) == "" OR 
            trim($frmdes_pro1) == "" OR 
            trim($frmstock1) == ""OR 
            trim($frmstockmin1) == "" OR 
            trim($frmval_pro1) == "" OR 
            trim($frmestado1) == "" ) { 
            echo json_encode($error); 
        }else{
        $sql = "UPDATE productos SET cat_id = '$frmcategoria_id1', nom_pro = '$frmnombre1', des_pro = '$frmdes_pro1', 
                img_pro ='$frmimg_pro1', stock_pro = '$frmstock1', stock_min_pro = '$frmstockmin1', val_pro = '$frmval_pro1', 
                est_pro = '$frmestado1' WHERE id_pro = '$frmid1'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->ObtenerFilasAfectadas();
        }
    } 

    public function EliminarProducto(Producto $producto){ 
        $conexion = new Conexion(); 
        $id = $producto->getfrmid(); 
        $sql = "DELETE FROM productos WHERE id_pro = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
    }

    //PERSONAL

    public function RegistrarPersonal(Personal $persona){ 
        $conexion = new Conexion(); 
        $frmp_id=$persona->getfrmp_id();
        $frmp_nom=$persona->getfrmp_nom();
        $frmp_ape=$persona->getfrmp_ape();
        $frmp_fech=$persona->getfrmp_fech();
        $frmp_genero=$persona->getfrmp_genero();
        $frmp_eps=$persona->getfrmp_eps();
        $frmp_pens=$persona->getfrmp_pens();
        $frmp_arl=$persona->getfrmp_arl();
        $frmp_correo=$persona->getfrmp_correo();
        $frmp_tel=$persona->getfrmp_tel();
        $frmp_dir=$persona->getfrmp_dir();
        
        $error=1;
        $exito=2;

        if (trim($frmp_id) == "" OR trim($frmp_nom) == "" OR trim($frmp_ape) == "" OR trim($frmp_fech) == "" OR trim($frmp_genero) == "" OR trim($frmp_eps) == "" OR trim($frmp_pens) == "" OR trim($frmp_arl) == "" OR trim($frmp_correo) == "" OR trim($frmp_tel) == "" OR trim($frmp_dir) == ""){ 
            echo json_encode($error); 
        }else{
        $sql = "INSERT INTO personal VALUES ($frmp_id,'$frmp_nom','$frmp_ape','$frmp_fech','$frmp_genero','$frmp_eps','$frmp_pens','$frmp_arl','$frmp_correo','$frmp_tel','$frmp_dir')"; 
        $conexion->ejecutar_query($sql); 
        echo json_encode($exito); 
        }
    }

    public function EditarPersonal(Personal $persona){ 
        $conexion = new Conexion(); 
        $id=$persona->getfrmp_id(); 
        $sql = "SELECT * FROM personal WHERE id_per = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
        return $result; 
    }

    public function ActualizarPersonal(Personal $persona){ 
        $conexion = new Conexion(); 
        $frmp_id1=$persona->getfrmp_id();
        $frmp_nom1=$persona->getfrmp_nom();
        $frmp_ape1=$persona->getfrmp_ape();
        $frmp_fech1=$persona->getfrmp_fech();
        $frmp_genero1=$persona->getfrmp_genero();
        $frmp_eps1=$persona->getfrmp_eps();
        $frmp_pens1=$persona->getfrmp_pens();
        $frmp_arl1=$persona->getfrmp_arl();
        $frmp_correo1=$persona->getfrmp_correo();
        $frmp_tel1=$persona->getfrmp_tel();
        $frmp_dir1=$persona->getfrmp_dir();

        $error = 1; 

        if (trim($frmp_nom1) == "" OR trim($frmp_ape1) == "" OR trim($frmp_fech1) == "" OR trim($frmp_genero1) == "" OR trim($frmp_eps1) == "" OR trim($frmp_pens1) == "" OR trim($frmp_arl1) == "" OR trim($frmp_correo1) == "" OR trim($frmp_tel1) == "" OR trim($frmp_dir1) == ""){ 
            echo json_encode($error); 
        }else{
        $sql = "UPDATE personal SET nom_per = '$frmp_nom1', ape_per = '$frmp_ape1', fecnac_per ='$frmp_fech1', gen_per = '$frmp_genero1', eps_per = '$frmp_eps1', pens_per = '$frmp_pens1', arl_per = '$frmp_arl1', mail_per = '$frmp_correo1', cel_per = '$frmp_tel1', dir_per = '$frmp_dir1' WHERE id_per = '$frmp_id1'"; 
        $conexion->buscar_query($sql);
        $result = $conexion->ObtenerFilasAfectadas();
        }
    } 

    public function EliminarPersonal(Personal $persona){ 
        $conexion = new Conexion(); 
        $id=$persona->getfrmp_id(); 
        $sql = "DELETE FROM personal WHERE id_per = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
    }


    //MESAS

    public function RegistrarMesa(Mesa $mesa){ 
        $conexion = new Conexion(); 
        $frmid=$mesa->getfrmtab_id();
        $frmzona_id=$mesa->getfrmtab_zona_id();
        $frmcap_tab=$mesa->getfrmcap_tab(); 
        $frmestado=$mesa->getfrmestado();
        
        $error = 1; 
        $exito = 2; 

        if ($frmzona_id == "" OR $frmcap_tab == "" OR $frmestado == "") { 
            echo json_encode($error); 
        }else{
            $sql = "INSERT INTO mesas VALUES (null,'$frmzona_id','$frmcap_tab','$frmestado')"; 
            $conexion->ejecutar_query($sql); 
            echo json_encode($exito);
        } 
    }

    public function EditarMesa(Mesa $mesa){ 
        $conexion = new Conexion(); 
        $id=$mesa->getfrmtab_id(); 
        $sql = "SELECT * FROM mesas WHERE id_mes = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
        return $result; 
    }

    public function ActualizarMesa(Mesa $mesa){ 
        $conexion = new Conexion(); 
        $frmtab_id1=$mesa->getfrmtab_id();
        $frmzona_id1=$mesa->getfrmtab_zona_id();
        $frmcap_tab1=$mesa->getfrmcap_tab();
        $frmestado1=$mesa->getfrmestado();
        $sql = "UPDATE mesas SET zona_id = '$frmzona_id1', cap_mes = '$frmcap_tab1', est_mes = '$frmestado1' WHERE id_mes = '$frmtab_id1'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->ObtenerFilasAfectadas();
    } 

    public function EliminarMesa(Mesa $mesa){ 
        $conexion = new Conexion(); 
        $id = $mesa->getfrmtab_id(); 
        $sql = "DELETE FROM mesas WHERE id_mes = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
        return $result; 
    }

    // public function QrMesa(Mesa $mesa){ 
    //     $conexion = new Conexion(); 
    //     $id=$mesa->getfrmtab_id(); 
    //     $sql = "SELECT * FROM mesas WHERE id_mes = '$id'"; 
    //     $conexion->buscar_query($sql); 
    //     $result = $conexion->obtenerResult(); 
    //     return $result; 
    // }

    //COCINA

    public function Preparacion(Cocina $cocina){ 
        $conexion = new Conexion(); 
        $id = $cocina->getfrm_id_det_ped(); 
        $sql = "UPDATE detalle_pedido SET est_det_ped = 'Preparacion' WHERE id_det_ped = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
    }

    public function Despachado(Cocina $cocina){ 
        $conexion = new Conexion(); 
        $id = $cocina->getfrm_id_det_ped();
        //ini_set('date.timezone', 'America/Bogota');
        //$fechor = date('Y-m-d H:i:s', time());
        $sql = "UPDATE detalle_pedido SET est_det_ped =  'Despachado' WHERE id_det_ped = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
    }

    public function Cancelado(Cocina $cocina){ 
        $conexion = new Conexion(); 
        $id = $cocina->getfrm_id_det_ped();
        //ini_set('date.timezone', 'America/Bogota');
        //$fechor = date('Y-m-d H:i:s', time());
        $sql = "UPDATE detalle_pedido SET est_det_ped =  'Cancelado' WHERE id_det_ped = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
    }

    //TURNOS

    public function RegistrarTurno(Turno $turno){ 
        $conexion = new Conexion(); 
        $frm_id_tur=$turno->getfrm_id_tur();
        $frm_nom_tur=$turno->getfrm_nom_tur(); 
        $frm_fechor_ini_tur=$turno->getfrm_fechor_ini_tur(); 
        $frm_fechor_fin_tur=$turno->getfrm_fechor_fin_tur(); 
        
        $error = 1; 
        $exito = 2; 

        if ($frm_nom_tur == "" OR $frm_fechor_ini_tur == "" OR $frm_fechor_fin_tur == "") { 
            echo json_encode($error); 
        }else{
            $sql = "INSERT INTO turnos VALUES (null,'$frm_nom_tur','$frm_fechor_ini_tur','$frm_fechor_fin_tur')"; 
            $conexion->ejecutar_query($sql); 
            echo json_encode($exito);
        } 
    }

    public function EditarTurno(Turno $turno){ 
        $conexion = new Conexion(); 
        $id=$turno->getfrm_id_tur(); 
        $sql = "SELECT * FROM turnos WHERE id_tur = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
        return $result; 
    }

    public function ActualizarTurno(Turno $turno){ 
        $conexion = new Conexion(); 
        $frm_id_tur1=$turno->getfrm_id_tur();
        $frm_nom_tur1=$turno->getfrm_nom_tur(); 
        $frm_fechor_ini_tur1=$turno->getfrm_fechor_ini_tur(); 
        $frm_fechor_fin_tur1=$turno->getfrm_fechor_fin_tur();
        $sql = "UPDATE turnos SET nom_tur = '$frm_nom_tur1', hor_ini_tur = '$frm_fechor_ini_tur1', hor_fin_tur = '$frm_fechor_fin_tur1' WHERE id_tur = '$frm_id_tur1'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->ObtenerFilasAfectadas();
    } 

    public function EliminarTurno(Turno $turno){ 
        $conexion = new Conexion(); 
        $id = $turno->getfrm_id_tur(); 
        $sql = "DELETE FROM turnos WHERE id_tur = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
    }


    //MESERO

    public function RegistrarDetallePedido(PedidoDetalle $detalle){ 
        $conexion = new Conexion(); 
        $frmid_ped=$detalle->getfrmped_id();
        $frmpro_id=$detalle->getfrmpro_id(); 
        $frmcom_det_ped=$detalle->getfrmcom_det_ped(); 
        $frmsin_ing=$detalle->getfrmsin_ing(); 
        $frmcant=$detalle->getfrmcant(); 
        
        $error = 1; 
        $exito = 2; 

        if ($frmid_ped == "" OR $frmpro_id == "" OR $frmcom_det_ped == "" OR $frmsin_ing == "" OR $frmcant == "") { 
            echo json_encode($error); 
        }else{
            $sql = "INSERT INTO detalle_pedido VALUES (null,'$frmid_ped','$frmpro_id','$frmcom_det_ped','$frmsin_ing','$frmcant','Pendiente',0)"; 
            $conexion->ejecutar_query($sql); 
            echo json_encode($exito);
        } 
    }

    public function EditarDetallePedido(PedidoDetalle $detalle){ 
        $conexion = new Conexion(); 
        $id = $detalle->getfrmid_det_ped(); 
        $sql = "SELECT * FROM detalle_pedido WHERE id_det_ped = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
        return $result; 
    }

    public function ActualizarDetallePedido(PedidoDetalle $detalle){ 
        $conexion = new Conexion(); 
        $frmid_det_ped1=$detalle->getfrmid_det_ped();
        $frmcom_ped1=$detalle->getfrmcom_det_ped(); 
        $frmsin_ing_ped1=$detalle->getfrmsin_ing(); 
        $frmcant_ped1=$detalle->getfrmcant();
        $sql = "UPDATE detalle_pedido SET com_det_ped = '$frmcom_ped1', sin_ing = '$frmsin_ing_ped1', cant = '$frmcant_ped1' WHERE id_det_ped = '$frmid_det_ped1'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->ObtenerFilasAfectadas();
    } 

    //PROGRAMACION MESAS

    public function buscarZona(){
        $conexion = new Conexion();
        $sql = "SELECT * FROM zona WHERE est_zona = 'ACTIVO'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
        return $result; 
    }

    public function buscarMesero(){
        $conexion = new Conexion();
        $sql = "SELECT * FROM personal JOIN usuarios WHERE rol_id = '2' AND est_usu = 'Activo'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
        return $result; 
    }

    public function buscarTurno(){
        $conexion = new Conexion();
        $sql = "SELECT * FROM turnos"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
        return $result; 
    }

    public function RegistrarProgramacionMesa(Programacion $programacion){ 
        $conexion = new Conexion(); 
        $frm_id_prog_mes=$programacion->getfrm_id_prog_mes();
        $frm_mesa_id=$programacion->getfrm_mesa_id(); 
        $frm_mese_id=$programacion->getfrm_mese_id(); 
        $frm_tur_id=$programacion->getfrm_tur_id();
        $frm_fecha_ini=$programacion->getfrm_fecha_ini();
        $frm_fecha_fin=$programacion->getfrm_fecha_fin();
        $frm_est=$programacion->getfrm_est();

        $error = 1; 
        $exito = 2; 

        if ($frm_mesa_id == "" OR $frm_mese_id == "" OR $frm_tur_id == "" OR $frm_fecha_ini == "" OR $frm_fecha_fin == "" OR $frm_est == "") { 
            echo json_encode($error); 
        }else{
            $sql = "INSERT INTO programacion_mesas VALUES (null,'$frm_mesa_id','$frm_mese_id','$frm_tur_id','$frm_fecha_ini','$frm_fecha_fin','$frm_est')"; 
            $conexion->ejecutar_query($sql); 
            echo json_encode($exito);
        } 
    }

    public function EditarProgramacionMesa(Programacion $programacion){ 
        $conexion = new Conexion(); 
        $id=$programacion->getfrm_id_prog_mes(); 
        $sql = "SELECT * FROM programacion_mesas WHERE id_prog_mes = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
        return $result; 
    }

    public function ActualizarProgramacionMesa(Programacion $programacion){ 
        $conexion = new Conexion(); 
        $frm_id_prog_mes1=$programacion->getfrm_id_prog_mes();
        $frm_mesa_id1=$programacion->getfrm_mesa_id(); 
        $frm_mese_id1=$programacion->getfrm_mese_id(); 
        $frm_tur_id1=$programacion->getfrm_tur_id();
        $frm_fecha_ini1=$programacion->getfrm_fecha_ini();
        $frm_fecha_fin1=$programacion->getfrm_fecha_fin();
        $frm_est1=$programacion->getfrm_est();
        $sql = "UPDATE programacion_mesas SET zona_id = '$frm_mesa_id1', mese_id = '$frm_mese_id1', tur_id = '$frm_tur_id1', fecha_ini = '$frm_fecha_ini1', fecha_fin = '$frm_fecha_fin1', est_prog_mes = '$frm_est1' WHERE id_prog_mes = '$frm_id_prog_mes1'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->ObtenerFilasAfectadas();
    } 

    public function EliminarProgramacionMesa(Programacion $programacion){ 
        $conexion = new Conexion(); 
        $id = $programacion->getfrm_id_prog_mes(); 
        $sql = "DELETE FROM programacion_mesas WHERE id_prog_mes = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
    }
    
     //INGREDIENTES
     public function RegistrarIngredientes(Ingredientes $ingrediente){
        $conexion = new Conexion(); 
        $frming_id1=$ingrediente->getfrming_id();
        $frming_nom1=$ingrediente->getfrming_nom();
        $frming_estado1=$ingrediente->getfrming_estado();
        $frming_stock1=$ingrediente->getfrming_stock();
        $frming_val1=$ingrediente->getfrming_val();

        $error = 1; 

        if (trim($frming_nom1) == "" OR trim($frming_estado1) == "" OR trim($frming_stock1) == "" OR trim($frming_val1) == "" ){ 
            echo json_encode($error); 
        }else{
            $sql = "INSERT INTO ingredientes VALUES (null,'$frming_nom1','$frming_estado1','$frming_stock1','$frming_val1')"; 
        $conexion->buscar_query($sql);
        }
    }
    public function EditarIngrediente(Ingredientes $ingrediente){ 
        $conexion = new Conexion(); 
        $id=$ingrediente->getfrming_id(); 
        $sql = "SELECT * FROM ingredientes WHERE id_ing = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
        return $result; 
    }

    public function ActualizarIngrediente(Ingredientes $ingrediente){ 
        $conexion = new Conexion(); 
        $frming_id1=$ingrediente->getfrming_id(); 
        $frming_nom1=$ingrediente->getfrming_nom(); 
        $frming_estado1=$ingrediente->getfrming_estado();
        $frming_stock1=$ingrediente->getfrming_stock();
        $frming_val1=$ingrediente->getfrming_val();
        $error=1;
        if (trim($frming_nom1) == "" OR trim($frming_estado1) == "" OR trim($frming_stock1) == "" OR trim($frming_val1) == "") { 
            echo json_encode($error); 
        }else{
            $sql = "UPDATE ingredientes SET nom_ing = '$frming_nom1', est_ing = '$frming_estado1', stock_ing = '$frming_stock1', val_ing = '$frming_val1' WHERE id_ing = '$frming_id1'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->ObtenerFilasAfectadas();
        }
    } 
    public function EliminarIngrediente(Ingredientes $ingrediente){
        $conexion = new Conexion(); 
        $id = $ingrediente->getfrming_id(); 
        $sql = "DELETE FROM ingredientes WHERE id_ing = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
    }

    //INGREDIENTES X PRODUCTO
    public function BuscarIngredientes(){ 
        $conexion = new Conexion();
        $sql = "SELECT * FROM ingredientes";
	    $conexion->buscar_query($sql);
	    $result = $conexion->obtenerResult();
        return $result;
    }
    public function BuscarProducto(){ 
        $conexion = new Conexion();
        $sql = "SELECT * FROM productos";
	    $conexion->buscar_query($sql);
	    $result2 = $conexion->obtenerResult();
        return $result2;
    }

    public function RegistrarIngrexpro(IngrexPro $ingrexpro){
        $conexion = new Conexion(); 
        $frmip_id1=$ingrexpro->getfrmip_id();
        $frmip_idpro1=$ingrexpro->getfrmip_idpro();
        $frmip_iding1=$ingrexpro->getfrmip_iding();
        $frmip_cant1=$ingrexpro->getfrmip_cant();
        $frmip_med1=$ingrexpro->getfrmip_med();

        $error = 1; 
        if (trim($frmip_idpro1) == "" OR trim($frmip_iding1) == "" OR trim($frmip_cant1) == "" OR trim($frmip_med1) == ""){ 
            echo json_encode($error); 
        }else{
            $sql = "INSERT INTO detalle_ingredientesxproducto VALUES (null,'$frmip_idpro1','$frmip_iding1','$frmip_cant1','$frmip_med1')"; 
        $conexion->buscar_query($sql);
        }
    }
    public function EditarIngrexpro(IngrexPro $ingrexpro){ 
        $conexion = new Conexion(); 
        $id=$ingrexpro->getfrmip_id(); 
        $sql = "SELECT * FROM detalle_ingredientesxproducto WHERE id_det_ingxpro = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
        return $result; 
    }

    public function ActualizarIngrexpro(IngrexPro $ingrexpro){ 
        $conexion = new Conexion(); 
        $frmip_id1=$ingrexpro->getfrmip_id(); 
        $frmip_idpro1=$ingrexpro->getfrmip_idpro(); 
        $frmip_iding1=$ingrexpro->getfrmip_iding();
        $frmip_stock1=$ingrexpro->getfrmip_cant();
        $frmip_med1=$ingrexpro->getfrmip_med();
        $error=1;
        if (trim($frmip_idpro1) == "" OR trim($frmip_iding1) == "" OR trim($frmip_stock1) == "" OR trim($frmip_med1) =="") { 
            echo json_encode($error); 
        }else{
            $sql = "UPDATE detalle_ingredientesxproducto SET pro_id = '$frmip_idpro1', ing_id = '$frmip_iding1', cant_ingxpro = '$frmip_stock1', uni_medida = '$frmip_med1' WHERE id_det_ingxpro = '$frmip_id1'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->ObtenerFilasAfectadas();
        }
    } 
    public function EliminarIngrexpro(IngrexPro $ingrexpro){
        $conexion = new Conexion(); 
        $id = $ingrexpro->getfrmip_id();
        $sql = "DELETE FROM detalle_ingredientesxproducto WHERE id_det_ingxpro = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
    }

    //USUARIO
    public function buscarUsuario(){
        $conexion = new Conexion();
        $sql = "SELECT * FROM usuarios";
	    $conexion->buscar_query($sql);
	    $result2 = $conexion->obtenerResult();
        return $result2;
    }

     public function RegistrarUsuario(Usuario $usuario){ 
        $conexion = new Conexion(); 
        $frmusu_id=$usuario->get_id();
        $frmusu_rol=$usuario->get_rol(); 
        $frmusu_idper=$usuario->get_id_per();
        $frmusu_cla=$usuario->get_cla(); 
        $frmusu_estado=$usuario->get_est(); 
        
        $error = 1; 
        $exito = 2; 
        if (trim($frmusu_id) == "" OR
            trim($frmusu_rol) == "" OR 
            trim($frmusu_idper) == "" OR 
            trim($frmusu_cla) == "" OR 
            trim($frmusu_estado) == "") { 
                echo json_encode($error); 
        }else{
             $sql = "INSERT INTO usuarios (`id_usu`, `rol_id`, `id_per_usu`, `cla_usu`, `est_usu` ) VALUES ($frmusu_id,'$frmusu_rol',
                     '$frmusu_idper','$frmusu_cla','$frmusu_estado')"; 
             $conexion->ejecutar_query($sql); 
            
        } 
    }

     public function EditarUsuario(Usuario $usuario){ 
         $conexion = new Conexion(); 
         $id=$usuario->get_id();
         $sql = "SELECT * FROM usuarios WHERE id_usu = '$id'"; 
         $conexion->buscar_query($sql); 
         $result = $conexion->obtenerResult(); 
         return $result; 
     }

     public function ActualizarUsuario(Usuario $usuario){ 
         $conexion = new Conexion(); 
        
        $frmusu_id=$usuario->get_id();
        $frmusu_rol=$usuario->get_rol(); 
        $frmusu_idper=$usuario->get_id_per();
        $frmusu_estado=$usuario->get_est(); 

         $error=1;

         if (
         trim($frmusu_rol) == "" OR 
         trim($frmusu_idper) == "" OR 
         trim($frmusu_estado) == "") { 
         echo json_encode($error); 
        }else{
         $sql = "UPDATE usuarios SET rol_id = '$frmusu_rol', id_per_usu = '$frmusu_idper', est_usu = '$frmusu_estado' where id_usu = '$frmusu_id' "; 
         $conexion->buscar_query($sql); 
         $result = $conexion->ObtenerFilasAfectadas();
         }
     } 

    public function EliminarUsuario(Usuario $usuario){ 
        $conexion = new Conexion(); 
        $id = $usuario->get_id(); 
        $sql = "DELETE FROM usuarios WHERE id_usu = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
    }

    //SELECT BUSCAR ROL- MODAL REGISTRAR
    public function buscarRol(){
        $conexion = new Conexion();
        $sql = "SELECT * FROM roles";
	    $conexion->buscar_query($sql);
	    $result2 = $conexion->obtenerResult();
        return $result2;
    }

    //SELECT BUSCAR PERSONAL- MODAL REGISTRAR
    public function buscarPersonal(){
        $conexion = new Conexion();
        $sql = "SELECT id_per,nom_per,ape_per FROM personal";
	    $conexion->buscar_query($sql);
	    $result3 = $conexion->obtenerResult();
        return $result3;
    }

    //CLIENTE
    public function buscarCliente(){
        $conexion = new Conexion();
        $sql = "SELECT * FROM cliente";
        
	    $conexion->buscar_query($sql);
	    $result2 = $conexion->obtenerResult();
        return $result2;
    }

    public function RegistrarCliente(Clientes $cliente){ 
        $conexion = new Conexion(); 
        $id=$cliente->get_id();
        $nom=$cliente->get_nom(); 
        $ape=$cliente->get_ape();
        $tel=$cliente->get_tel(); 
        $cel=$cliente->get_cel(); 
        $mail=$cliente->get_mail(); 
        $dir=$cliente->get_dir(); 
        $est=$cliente->get_est(); 
        
        $error = 1; 
        $exito = 2; 
        if (trim($id) == "" OR
            trim($nom) == "" OR 
            trim($ape) == "" OR 
            trim($tel) == "" OR 
            trim($cel) == "" OR
            trim($mail) == "" OR
            trim($dir) == "" OR
            trim($est) == "") { 
                echo json_encode($error); 
        }else{
             $sql = "INSERT INTO cliente (`id_cli`, `nom_cli`, `ape_cli`, `tel_cli`, `cel_cli`,`mail_cli`,`dir_cli`,`est_cli` ) VALUES ($id,'$nom',
                     '$ape','$tel','$cel','$mail','$dir','$est')"; 
             $conexion->ejecutar_query($sql); 
            
        } 
    }

    public function EditarCliente(Clientes $cliente){ 
        $conexion = new Conexion(); 
        $id=$cliente->get_id();
        $sql = "SELECT * FROM cliente WHERE id_cli = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
        return $result; 
    }

    public function ActualizarCliente(Clientes $cliente){ 
        $conexion = new Conexion(); 
       
       $id=$cliente->get_id();
       $nom=$cliente->get_nom(); 
       $ape=$cliente->get_ape();
       $tel=$cliente->get_tel(); 
       $cel=$cliente->get_cel(); 
       $mail=$cliente->get_mail(); 
       $dir=$cliente->get_dir(); 
       $est=$cliente->get_est(); 

        $error=1;

        if (
        trim($nom) == "" OR 
        trim($ape) == "" OR 
        trim($tel) == "" OR 
        trim($cel) == "" OR
        trim($mail) == "" OR
        trim($dir) == "" OR
        trim($est) == "") { 
        echo json_encode($error); 
       }else{
        $sql = "UPDATE cliente SET nom_cli = '$nom', ape_cli = '$ape', 
                tel_cli ='$tel', cel_cli = '$cel', mail_cli = '$mail', dir_cli = '$dir', est_cli = '$est' where id_cli = '$id' "; 
        $conexion->buscar_query($sql); 
        $result = $conexion->ObtenerFilasAfectadas();
        }
    }
    
    public function EliminarCliente(Clientes $cliente){ 
        $conexion = new Conexion(); 
        $id = $cliente->get_id(); 
        $sql = "DELETE FROM cliente WHERE id_cli = '$id'"; 
        $conexion->buscar_query($sql); 
        $result = $conexion->obtenerResult(); 
    }
}    

?>