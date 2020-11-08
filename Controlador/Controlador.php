<?php

class Controlador{
    public function abrir_pagina($url){
        require $url;
    }

    //login Empleado y variable de sesion

    public function consultarEmpleado($user,$pass){
        $dao = new DAOloginEmpleado();
        $result = $dao->consultarEmpleado($user,$pass);
        switch($result){
            case 1:
                $result2 = $dao->user($user);
                $row=$result2->fetch();
                $_SESSION['usuario']=$row['id_usu'];
                $_SESSION['rol']=$row['rol_id'];
                if ($_SESSION['rol']=='1') {
                    header("Location: panel");
                }
            break;
            case 2:
                header("Location: index.php?error=error1");
            break;
            case 3:
                header("Location: index.php?error=error2");
            break;
        }
    }

    public function cerrarSession(){
        if (isset($_SESSION["usuario"])){
            session_unset();
            session_destroy();
            header("Location: Index.php");
        }
    }

    public function cerrarSesion(){
        $session = new UserSession();
        $session->cerrarSesion();
        header("location: index.php");
    }
    
    //RECORDAR CONTRASEÑA
    public function RecordarClave($id){
        $dao = new DAOloginEmpleado(); 
        $result = $dao->RecordarClave($id);
        $result2 = $dao->Recordar($id);
        require 'VO/EnviarMail.php';
    }

    public function error(){
        $error='error1';
        require 'Vista/html/RecordarClave.php';
    }

    //CATEGORIAS
    public function RegistrarCategoria($frmcat_desc,$frmcat_estado){ 
        $dao = new DAOAdmin();
        $categoria = new Categoria();  
        $categoria->setfrmcat_desc($frmcat_desc); 
        $categoria->setfrmcat_estado($frmcat_estado); 
        $result = $dao->RegistrarCategoria($categoria); 
    }

    public function EditarCategoria($id){
        $dao = new DAOAdmin(); 
        $categoria = new Categoria(); 
        $categoria->setfrmcat_id($id); 
        $result = $dao->EditarCategoria($categoria); 
        $row = $result->fetch(); 
        $data = array( 'ID' => $row['id_cat'], 'DES_CAT' => $row['des_cat'], 'ESTADO' => $row['est_cat']); 
        echo json_encode($data); 
    }

    public function ActualizarCategoria($frmcat_id1,$frmcat_desc1,$frmcat_estado1){
        $dao = new DAOAdmin(); 
        $categoria = new Categoria();
        $categoria->setfrmcat_id($frmcat_id1); 
        $categoria->setfrmcat_desc($frmcat_desc1); 
        $categoria->setfrmcat_estado($frmcat_estado1);
        $result = $dao->ActualizarCategoria($categoria); 
    }

    public function EliminarCategoria($id){ 
        $dao = new DAOAdmin(); 	
        $categoria = new Categoria(); 
        $categoria->setfrmcat_id($id); 
        $result = $dao->EliminarCategoria($categoria);
    }

    //PRODUCTOS
    public function buscarCategoria(){
        $dao = new DAOAdmin();
        $result2 = $dao->buscarCategoria();
        require 'Vista/html/panel_productos.php';
    }

    public function RegistrarProducto(
        $frmnombre,
        $frmcategoria_id,
        $frmimg_pro,
        $frmdes_pro,
        $frmstock,
        $frmstockmin,
        $frmval_pro,
        $frmestado){ 
        $dao = new DAOAdmin();
        $producto = new Producto();  
        $producto->setfrmnombre($frmnombre); 
        $producto->setfrmcategoria_id($frmcategoria_id);
        $producto->setfrmimg_pro($frmimg_pro);
        $producto->setfrmdes_pro($frmdes_pro);
        $producto->setfrmstock($frmstock);
        $producto->setfrmstockmin($frmstockmin);
        $producto->setfrmval_pro($frmval_pro);
        $producto->setfrmestado($frmestado);
        $result = $dao->RegistrarProducto($producto);
    }

    public function EditarProducto($id){
        $dao = new DAOAdmin(); 
        $producto = new Producto(); 
        $producto->setfrmid($id); 
        $result = $dao->EditarProducto($producto); 
        $row = $result->fetch(); 
        $data = array( 
            'id_pro' => $row['id_pro'], 
            'nom_pro' => $row['nom_pro'], 
            'cat_id' => $row['cat_id'], 
            'img_pro' => $row['img_pro'], 
            'des_pro' => $row['des_pro'], 
            'stock' => $row['stock_pro'], 
            'stock_min' => $row['stock_min_pro'], 
            'val_pro' => $row['val_pro'], 
            'estado' => $row['est_pro'], 
        ); 
        echo json_encode($data); 
    }

    public function ActualizarProducto($frmid1,$frmnombre1,$frmcategoria_id1,$frmimg_pro1,$frmdes_pro1,$frmstock1,$frmstockmin1,$frmval_pro1,$frmestado1){
        $dao = new DAOAdmin(); 
        $producto = new Producto();
        $producto->setfrmid($frmid1); 
        $producto->setfrmnombre($frmnombre1); 
        $producto->setfrmcategoria_id($frmcategoria_id1);
        $producto->setfrmimg_pro($frmimg_pro1);
        $producto->setfrmdes_pro($frmdes_pro1);
        $producto->setfrmstock($frmstock1);
        $producto->setfrmstockmin($frmstockmin1);
        $producto->setfrmval_pro($frmval_pro1);
        $producto->setfrmestado($frmestado1);
        $result = $dao->ActualizarProducto($producto); 
    }

    public function EliminarProducto($id){ 
        $dao = new DAOAdmin(); 	
        $producto = new Producto(); 
        $producto->setfrmid($id); 
        $result = $dao->EliminarProducto($producto);
    }

    //PERSONAL

    public function Personal(){
        $dao = new DAOAdmin();
        $result = $dao->Personal();
        require "Vista/html/panel_personal.php";
    }

    public function obtenerusuarios(){
		$dao = new DAOAdmin();
		$result = $dao->obtenerusuarios();
		require ("Vista/html/obtenerUsuarios.php"); 
    }
    
    public function RegistrarPersonal($frmp_id,$frmp_nom,$frmp_ape,$frmp_fech,$frmp_genero,$frmp_eps,$frmp_pens,$frmp_arl,$frmp_correo,$frmp_tel,$frmp_dir){ 
        $dao = new DAOAdmin();
        $persona = new Personal();  
        $persona->setfrmp_id($frmp_id);
        $persona->setfrmp_nom($frmp_nom);
        $persona->setfrmp_ape($frmp_ape);
        $persona->setfrmp_fech($frmp_fech);
        $persona->setfrmp_genero($frmp_genero);
        $persona->setfrmp_eps($frmp_eps);
        $persona->setfrmp_pens($frmp_pens);
        $persona->setfrmp_arl($frmp_arl);
        $persona->setfrmp_correo($frmp_correo);
        $persona->setfrmp_tel($frmp_tel);
        $persona->setfrmp_dir($frmp_dir);
        $result = $dao->RegistrarPersonal($persona);
    }

    public function EditarPersonal($id){
        $dao = new DAOAdmin(); 
        $persona = new Personal(); 
        $persona->setfrmp_id($id); 
        $result = $dao->EditarPersonal($persona); 
        $row = $result->fetch(); 
        $data = array( 'ID' => $row['id_per'], 'Nombre' => $row['nom_per'], 'Apellido' => $row['ape_per'], 'Fecha' => $row['fecnac_per'], 'Genero' => $row['gen_per'], 'Eps' => $row['eps_per'], 'Pension' => $row['pens_per'], 'Arl' => $row['arl_per'], 'Correo' => $row['mail_per'], 'Cel' => $row['cel_per'], 'Dir' => $row['dir_per']); 
        echo json_encode($data); 
    }

    public function ActualizarPersonal($frmp_id1,$frmp_nom1,$frmp_ape1,$frmp_fech1,$frmp_genero1,$frmp_eps1,$frmp_pens1,$frmp_arl1,$frmp_correo1,$frmp_tel1,$frmp_dir1){
        $dao = new DAOAdmin(); 
        $persona = new Personal();
        $persona->setfrmp_id($frmp_id1); 
        $persona->setfrmp_nom($frmp_nom1);
        $persona->setfrmp_ape($frmp_ape1);
        $persona->setfrmp_fech($frmp_fech1);
        $persona->setfrmp_genero($frmp_genero1);
        $persona->setfrmp_eps($frmp_eps1);
        $persona->setfrmp_pens($frmp_pens1);
        $persona->setfrmp_arl($frmp_arl1);
        $persona->setfrmp_correo($frmp_correo1);
        $persona->setfrmp_tel($frmp_tel1);
        $persona->setfrmp_dir($frmp_dir1);
        $result = $dao->ActualizarPersonal($persona); 
    }

    public function EliminarPersonal($id){ 
        $dao = new DAOAdmin(); 	
        $persona = new Personal(); 
        $persona->setfrmp_id($id); 
        $result = $dao->EliminarPersonal($persona);
    }

    //MESAS

    public function buscarZona(){
        $dao = new DAOAdmin();
        $result1 = $dao->buscarZona();
        $result2 = $dao->buscarZona();
        require 'Vista/html/panel_mesas.php';
    }

    public function RegistrarMesa($frmzona_id,$frmcap_tab,$frmestado){ 
        $dao = new DAOAdmin();
        $mesa = new Mesa();
        $mesa->setfrmtab_zona_id($frmzona_id);
        $mesa->setfrmcap_tab($frmcap_tab);
        $mesa->setfrmestado($frmestado);
        $result = $dao->RegistrarMesa($mesa); 
    }

    public function EditarMesa($id){
        $dao = new DAOAdmin();
        $mesa = new Mesa(); 
        $mesa->setfrmtab_id($id);
        $result = $dao->EditarMesa($mesa);
        $row = $result->fetch(); 
        $data = array( 
            'ID' => $row['id_mes'],
            'ZONA' => $row['zona_id'],
            'CAPACIDAD' => $row['cap_mes'],
            'ESTADO' => $row['est_mes']); 
        echo json_encode($data);
    }

    public function ActualizarMesa($frmtab_id1,$frmzona_id1,$frmcap_tab1,$frmestado1){
        $dao = new DAOAdmin(); 
        $mesa = new Mesa();
        $mesa->setfrmtab_id($frmtab_id1);
        $mesa->setfrmtab_zona_id($frmzona_id1); 
        $mesa->setfrmcap_tab($frmcap_tab1);
        $mesa->setfrmestado($frmestado1);
        $result = $dao->ActualizarMesa($mesa); 
    }

    public function EliminarMesa($id){ 
        $dao = new DAOAdmin(); 	
        $mesa = new Mesa(); 
        $mesa->setfrmtab_id($id); 
        $result = $dao->EliminarMesa($mesa);
    }

    

    //COCINA

    public function Preparacion($id){ 
        $dao = new DAOAdmin(); 	
        $cocina = new Cocina(); 
        $cocina->setfrm_id_det_ped($id); 
        $result = $dao->Preparacion($cocina);
    }

    public function Despachado($id){ 
        $dao = new DAOAdmin(); 	
        $cocina = new Cocina(); 
        $cocina->setfrm_id_det_ped($id); 
        $result = $dao->Despachado($cocina);
    }

    public function Cancelado($id){ 
        $dao = new DAOAdmin(); 	
        $cocina = new Cocina(); 
        $cocina->setfrm_id_det_ped($id); 
        $result = $dao->Cancelado($cocina);
    }

    //TURNO

    public function RegistrarTurno($frm_nom_tur,$frm_fechor_ini_tur,$frm_fechor_fin_tur){ 
        $dao = new DAOAdmin();
        $turno = new Turno();  
        $turno->setfrm_nom_tur($frm_nom_tur);
        $turno->setfrm_fechor_ini_tur($frm_fechor_ini_tur);
        $turno->setfrm_fechor_fin_tur($frm_fechor_fin_tur);
        $result = $dao->RegistrarTurno($turno); 
    }

    public function EditarTurno($id){
        $dao = new DAOAdmin();
        $turno = new Turno(); 
        $turno->setfrm_id_tur($id);
        $result = $dao->EditarTurno($turno);
        $row = $result->fetch(); 
        $data = array( 
            'ID' => $row['id_tur'],
            'NOMBRE' => $row['nom_tur'],
            'HORA_INICIO' => $row['hor_ini_tur'],
            'HORA_FIN' => $row['hor_fin_tur']); 
        echo json_encode($data);
    }

    public function ActualizarTurno($frm_id_tur1,$frm_nom_tur1,$frm_fechor_ini_tur1,$frm_fechor_fin_tur1){
        $dao = new DAOAdmin(); 
        $turno = new Turno();
        $turno->setfrm_id_tur($frm_id_tur1); 
        $turno->setfrm_nom_tur($frm_nom_tur1);
        $turno->setfrm_fechor_ini_tur($frm_fechor_ini_tur1);
        $turno->setfrm_fechor_fin_tur($frm_fechor_fin_tur1);
        $result = $dao->ActualizarTurno($turno); 
    }

    public function EliminarTurno($id){ 
        $dao = new DAOAdmin(); 	
        $turno = new Turno(); 
        $turno->setfrm_id_tur($id); 
        $result = $dao->EliminarTurno($turno);
    }

    //MESERO

    public function RegistrarDetallePedido($frmid_ped,$frmpro_id,$frmcom_det_ped,$frmsin_ing,$frmcant){ 
        $dao = new DAOAdmin();
        $detalle = new PedidoDetalle();
        $detalle->setfrmped_id($frmid_ped);
        $detalle->setfrmpro_id($frmpro_id);
        $detalle->setfrmcom_det_ped($frmcom_det_ped);
        $detalle->setfrmsin_ing($frmsin_ing);
        $detalle->setfrmcant($frmcant);
        $result = $dao->RegistrarDetallePedido($detalle); 
    }

    public function EditarDetallePedido($id){
        $dao = new DAOAdmin();
        $detalle = new PedidoDetalle(); 
        $detalle->setfrmid_det_ped($id);
        $result = $dao->EditarDetallePedido($detalle);
        $row = $result->fetch(); 
        $data = array( 
            'ID' => $row['id_det_ped'],
            'COMENTARIOS' => $row['com_det_ped'],
            'SININGREDIENTES' => $row['sin_ing'],
            'CANTIDAD' => $row['cant']); 
        echo json_encode($data);
    }

    public function ActualizarDetallePedido($frmid_det_ped1,$frmcom_ped1,$frmsin_ing_ped1,$frmcant_ped1){
        $dao = new DAOAdmin(); 
        $detalle = new PedidoDetalle();
        $detalle->setfrmid_det_ped($frmid_det_ped1);
        $detalle->setfrmcom_det_ped($frmcom_ped1); 
        $detalle->setfrmsin_ing($frmsin_ing_ped1);
        $detalle->setfrmcant($frmcant_ped1);
        $result = $dao->ActualizarDetallePedido($detalle); 
    }

    //PROGRAMACION MESAS

    public function buscarDatos(){
        $dao = new DAOAdmin();
        $result1 = $dao->buscarZona();
        $result2 = $dao->buscarZona();
        $result3 = $dao->buscarMesero();
        $result4 = $dao->buscarMesero();
        $result5 = $dao->buscarTurno();
        $result6 = $dao->buscarTurno();
        require 'Vista/html/panel_programacion_mesas.php';
    }

    public function RegistrarProgramacionMesa($frm_mesa_id,$frm_mese_id,$frm_tur_id,$frm_fecha_ini,$frm_fecha_fin,$frm_est){ 
        $dao = new DAOAdmin();
        $programacion = new Programacion();  
        $programacion->setfrm_mesa_id($frm_mesa_id);
        $programacion->setfrm_mese_id($frm_mese_id);
        $programacion->setfrm_tur_id($frm_tur_id);
        $programacion->setfrm_fecha_ini($frm_fecha_ini);
        $programacion->setfrm_fecha_fin($frm_fecha_fin);
        $programacion->setfrm_est($frm_est);
        $result = $dao->RegistrarProgramacionMesa($programacion); 
    }

    public function EditarProgramacionMesa($id){
        $dao = new DAOAdmin();
        $programacion = new Programacion(); 
        $programacion->setfrm_id_prog_mes($id);
        $result = $dao->EditarProgramacionMesa($programacion);
        $row = $result->fetch(); 
        $data = array( 
            'ID' => $row['id_prog_mes'],
            'MESA' => $row['zona_id'],
            'MESERO' => $row['mese_id'],
            'TURNO' => $row['tur_id'],
            'FECHA_INI' => $row['fecha_ini'],
            'FECHA_FIN' => $row['fecha_fin'],
            'ESTADO' => $row['est_prog_mes']); 
        echo json_encode($data);
    }

    public function ActualizarProgramacionMesa($frm_id_prog_mes1,$frm_mesa_id1,$frm_mese_id1,$frm_tur_id1,$frm_fecha_ini1,$frm_fecha_fin1,$frm_est1){
        $dao = new DAOAdmin(); 
        $programacion = new Programacion();
        $programacion->setfrm_id_prog_mes($frm_id_prog_mes1); 
        $programacion->setfrm_mesa_id($frm_mesa_id1);
        $programacion->setfrm_mese_id($frm_mese_id1);
        $programacion->setfrm_tur_id($frm_tur_id1);
        $programacion->setfrm_fecha_ini($frm_fecha_ini1);
        $programacion->setfrm_fecha_fin($frm_fecha_fin1);
        $programacion->setfrm_est($frm_est1);
        $result = $dao->ActualizarProgramacionMesa($programacion); 
    }

    public function EliminarProgramacionMesa($id){ 
        $dao = new DAOAdmin();
        $programacion = new Programacion(); 
        $programacion->setfrm_id_prog_mes($id);
        $result = $dao->EliminarProgramacionMesa($programacion);
    }

    //INGREDIENTES
    public function RegistrarIngredientes($frming_nom,$frming_estado,$frming_stock,$frming_val){
        $dao = new DAOAdmin();
        $ingrediente = new Ingredientes();
        $ingrediente->setfrming_nom($frming_nom);
        $ingrediente->setfrming_estado($frming_estado);
        $ingrediente->setfrming_stock($frming_stock);
        $ingrediente->setfrming_val($frming_val);
        $result = $dao->RegistrarIngredientes($ingrediente);
    }
    public function EditarIngrediente($id){
        $dao = new DAOAdmin(); 
        $ingrediente = new Ingredientes(); 
        $ingrediente->setfrming_id($id); 
        $result = $dao->EditarIngrediente($ingrediente); 
        $row = $result->fetch(); 
        $data = array( 'ID' => $row['id_ing'], 'Nom' => $row['nom_ing'], 'Estado' => $row['est_ing'], 'Stock' => $row['stock_ing'], 'Val' => $row['val_ing']); 
        echo json_encode($data); 
    }
    public function ActualizarIngrediente($frming_id1,$frming_nom1,$frming_estado1,$frming_stock1,$frming_val1){
        $dao = new DAOAdmin(); 
        $ingrediente = new Ingredientes();
        $ingrediente->setfrming_id($frming_id1); 
        $ingrediente->setfrming_nom($frming_nom1);
        $ingrediente->setfrming_estado($frming_estado1); 
        $ingrediente->setfrming_stock($frming_stock1);
        $ingrediente->setfrming_val($frming_val1); 
        $result = $dao->ActualizarIngrediente($ingrediente); 
    }
    public function EliminarIngrediente($id){
        $dao = new DAOAdmin();
        $ingrediente = new Ingredientes();
        $ingrediente->setfrming_id($id);
        $result = $dao->EliminarIngrediente($ingrediente);
    }

    //INGREDIENTES X PRODUCTO
    public function Panel_ingrexpro(){
        $dao = new DAOAdmin();
        $result = $dao->BuscarIngredientes();
        $result2 = $dao->BuscarProducto();
        $result3 = $dao->BuscarIngredientes();
        $result4 = $dao->BuscarProducto();
        require "Vista/html/panel_ingrexpro.php";
    }
    public function RegistrarIngrexpro($frmip_idpro,$frmip_iding,$frmip_cant,$frmip_med){
        $dao = new DAOAdmin();
        $ingrexpro = new IngrexPro();
        $ingrexpro->setfrmip_idpro($frmip_idpro);
        $ingrexpro->setfrmip_iding($frmip_iding);
        $ingrexpro->setfrmip_cant($frmip_cant);
        $ingrexpro->setfrmip_med($frmip_med);
        $result = $dao->RegistrarIngrexpro($ingrexpro);
    }
    public function EditarIngrexpro($id){
        $dao = new DAOAdmin(); 
        $ingrexpro = new IngrexPro(); 
        $ingrexpro->setfrmip_id($id); 
        $result = $dao->EditarIngrexpro($ingrexpro); 
        $row = $result->fetch(); 
        $data = array( 'ID' => $row['id_det_ingxpro'], 'id_pro' => $row['pro_id'], 'id_ing' => $row['ing_id'], 'Stock' => $row['cant_ingxpro'], 'Medida' => $row['uni_medida']); 
        echo json_encode($data); 
    }
    public function ActualizarIngrexpro($frmip_id1,$frmip_idpro1,$frmip_iding1,$frmip_stock1,$frmip_med1){
        $dao = new DAOAdmin(); 
        $ingrexpro = new IngrexPro();
        $ingrexpro->setfrmip_id($frmip_id1); 
        $ingrexpro->setfrmip_idpro($frmip_idpro1);
        $ingrexpro->setfrmip_iding($frmip_iding1); 
        $ingrexpro->setfrmip_cant($frmip_stock1);
        $ingrexpro->setfrmip_med($frmip_med1);
        $result = $dao->ActualizarIngrexpro($ingrexpro); 
    }
    public function EliminarIngrexpro($id){
        $dao = new DAOAdmin();
        $ingrexpro = new IngrexPro();
        $ingrexpro->setfrmip_id($id);
        $result = $dao->EliminarIngrexpro($ingrexpro);
    }

    //USUARIOS
    public function buscarUsuario(){
        $dao = new DAOAdmin();
        $result = $dao->buscarUsuario();
        $result2 = $dao->buscarRol();
        $result4 = $dao->buscarRol();
        $result3 = $dao->buscarPersonal();
        $result5 = $dao->buscarPersonal();
        require 'Vista/html/panel_usuarios.php';
    }

     public function RegistrarUsuario(
         $frmusu_id,
         $frmusu_rol,
         $frmusu_idper,
         $frmusu_cla,
         $frmusu_estado){ 
         $dao = new DAOAdmin();
         $usuario = new Usuario();  

         $usuario->set_id($frmusu_id); 
         $usuario->set_rol($frmusu_rol);
         $usuario->set_id_per($frmusu_idper);
         $usuario->set_cla($frmusu_cla);
         $usuario->set_est($frmusu_estado);

         $result=$dao->RegistrarUsuario($usuario);
        }

     public function EditarUsuario($id){
         $dao = new DAOAdmin(); 
         $usuario = new Usuario();  
         $usuario->set_id($id);
         $result = $dao->EditarUsuario($usuario); 
         $row = $result->fetch(); 
         $data = array( 
             'Id' => $row['id_usu'], 
             'Rol' => $row['rol_id'], 
            'IdPersona' => $row['id_per_usu'], 
            'Estado' => $row['est_usu'] 
         ); 
         echo json_encode($data); 
     }

     public function ActualizarUsuario( 
     $frmusu_id,
     $frmusu_rol,
     $frmusu_idper,
     $frmusu_estado){
        $dao = new DAOAdmin(); 
        $usuario = new Usuario();
       
        $usuario->set_id($frmusu_id);
        $usuario->set_rol($frmusu_rol);
        $usuario->set_id_per($frmusu_idper);
        $usuario->set_est($frmusu_estado);
        $result = $dao->ActualizarUsuario($usuario); 
    }

    public function EliminarUsuario($id){ 
        $dao = new DAOAdmin(); 	
        $usuario = new Usuario(); 
        $usuario->set_id($id); 
        $result = $dao->EliminarUsuario($usuario);
    }

    //CLIENTE
    public function buscarCliente(){
        $dao = new DAOAdmin();
        $result = $dao->buscarCliente();
        require 'Vista/html/panel_cliente.php';
    }

    public function RegistrarCliente(
        $id,
        $nom,
        $ape,
        $tel,
        $cel,
        $mail,
        $dir,
        $est){ 
       
        $dao = new DAOAdmin();
        $cliente = new Clientes();  
        $cliente->set_id($id); 
        $cliente->set_nom($nom);
        $cliente->set_ape($ape);
        $cliente->set_tel($tel);
        $cliente->set_cel($cel);
        $cliente->set_mail($mail);
        $cliente->set_dir($dir);
        $cliente->set_est($est);
        $result=$dao->RegistrarCliente($cliente);
    }

    public function EditarCliente($id){
        $dao = new DAOAdmin(); 
        $cliente = new Clientes();  
        $cliente->set_id($id);
        $result = $dao->EditarCliente($cliente); 
        $row = $result->fetch(); 
        $data = array( 
            'id' => $row['id_cli'], 
            'nombre' => $row['nom_cli'], 
           'apellido' => $row['ape_cli'], 
            'telefono' => $row['tel_cli'], 
           'celular' => $row['cel_cli'], 
           'correo' => $row['mail_cli'], 
           'direccion' => $row['dir_cli'], 
           'estado' => $row['est_cli'] 
        ); 
        echo json_encode($data); 
    }

    public function ActualizarCliente( 
        $id,
        $nom,
        $ape,
        $tel,
        $cel,
        $mail,
        $dir,
        $est){
           $dao = new DAOAdmin(); 
           $cliente = new Clientes();
          
           $cliente->set_id($id);
           $cliente->set_nom($nom);
           $cliente->set_ape($ape);
           $cliente->set_tel($tel);
           $cliente->set_cel($cel);
           $cliente->set_mail($mail);
           $cliente->set_dir($dir);
           $cliente->set_est($est);
           $result = $dao->ActualizarCliente($cliente); 
       }
    public function EliminarCliente($id){ 
        $dao = new DAOAdmin(); 	
        $cliente = new Clientes(); 
        $cliente->set_id($id); 
        $result = $dao->EliminarCliente($cliente);
    }

    public function Qr($id){
        $dir='Vista/img/qr/';
                                
        if(!file_exists($dir))
            mkdir($dir);
        $filename= $dir."qrproducto{$id}.png";
        $tamano=10;
        $level='M';
        $frameSize=3;
        $contenido=$id;

        QRcode::png($contenido, $filename, $level, $tamano, $frameSize);
        echo $filename;
    }
}

?>