<?php
	session_start();
	require "Controlador/Controlador.php";
	require "VO/Conexion.php";
	require "VO/Categoria.php";
	require "VO/Cocina.php";
	require "DAO/DAOadmin.php";
	require "VO/Productos.php";
	require "VO/PedidoDetalle.php";
	require "VO/Personal.php";
	require "VO/Mesas.php";
	require "VO/Usuarios.php";
	require "VO/Ingredientes.php";
	require "VO/IngrexPro.php";
	require "VO/Clientes.php";
	require "DAO/DAOloginEmpleado.php";
	require "VO/Turno.php";
	require "VO/ProgramacionMesas.php";
	require 'Vista/phpqrcode/qrlib.php'; 

	$controlador = new Controlador();

	if (isset($_SESSION['usuario'])) {	
		if (isset($_GET['accion'])) { 
			switch ($_GET['accion']) {
				//LOGIN EMPLEADO
				case 'panel': 
					$controlador->abrir_pagina("Vista/html/plantilla.php");
					break;

				//CATEGORIA
				case 'categorias': $controlador->abrir_pagina("Vista/html/panel_categoria.php");
					break; 
				case 'RegistrarCategoria' : $controlador->RegistrarCategoria($_POST['frmcat_desc'],$_POST['frmcat_estado']);
					break;
				case 'EditarCategoria': $controlador->EditarCategoria($_POST['id']); 
					break; 
				case 'ActualizarCategoria': $controlador->ActualizarCategoria($_POST['frmcat_id1'],$_POST['frmcat_desc1'],$_POST['frmcat_estado1']);
					break; 
				case 'EliminarCategoria': $controlador->EliminarCategoria($_POST['id']);
					break;
					
				//PRODUCTO
				case 'productos': $controlador->buscarCategoria();
					break;
				case 'RegistrarProductos': $controlador->RegistrarProducto(
					$_POST['frmnombre'],
					$_POST['frmcategoria_id'],
					$_POST['frmimg_pro'],
					$_POST['frmdes_pro'],
					$_POST['frmstock'],
					$_POST['frmstockmin'],
					$_POST['frmval_pro'],
					$_POST['frmestado']);
					break;
				case 'EditarProducto': $controlador->EditarProducto($_POST['id']); 
					break; 
				case 'ActualizarProducto': $controlador->ActualizarProducto(
					$_POST['frmid1'],
					$_POST['frmnombre1'],
					$_POST['frmcategoria_id1'],
					$_POST['frmimg_pro1'],
					$_POST['frmdes_pro1'],
					$_POST['frmstock1'],
					$_POST['frmstockmin1'],
					$_POST['frmval_pro1'],
					$_POST['frmestado1']
				);
					break; 
				case 'EliminarProducto': $controlador->EliminarProducto($_POST['id']);
					break;
				//PERSONAL
				case 'personal': $controlador->abrir_pagina("Vista/html/panel_personal.php");
					break;
				case 'RegistrarPersonal': $controlador->RegistrarPersonal(
					$_POST['frmp_id'],
					$_POST['frmp_nom'],
					$_POST['frmp_ape'],
					$_POST['frmp_fech'],
					$_POST['frmp_genero'],
					$_POST['frmp_eps'],
					$_POST['frmp_pens'],
					$_POST['frmp_arl'],
					$_POST['frmp_correo'],
					$_POST['frmp_tel'],
					$_POST['frmp_dir']);
					break;
				case 'EditarPersonal': $controlador->EditarPersonal($_POST['id']); 
					break; 
				case 'ActualizarPersonal': $controlador->ActualizarPersonal(
					$_POST['frmp_id1'],
					$_POST['frmp_nom1'],
					$_POST['frmp_ape1'],
					$_POST['frmp_fech1'],
					$_POST['frmp_genero1'],
					$_POST['frmp_eps1'],
					$_POST['frmp_pens1'],
					$_POST['frmp_arl1'],
					$_POST['frmp_correo1'],
					$_POST['frmp_tel1'],
					$_POST['frmp_dir1']);
					break; 
				case 'EliminarPersonal': $controlador->EliminarPersonal($_POST['id']);
					break;

				//MESAS
				case 'mesas': $controlador->buscarZona();
					 break; 
				case 'RegistrarMesa' : $controlador->RegistrarMesa($_POST['frmzona_id'],$_POST['frmcap_tab'],$_POST['frmestado']);
					break;
				case 'EditarMesa': $controlador->EditarMesa($_POST['id']); 
					break; 
				case 'ActualizarMesa': $controlador->ActualizarMesa(
					$_POST['frmtab_id1'],
					$_POST['frmzona_id1'],
					$_POST['frmcap_tab1'],
					$_POST['frmestado1']);
					break; 
				case 'EliminarMesa': $controlador->EliminarMesa($_POST['id']);
					break;
				case 'Qr': $controlador->Qr($_POST['id']);
					break;
					
				//LOGIN
				case 'login': $controlador->abrir_pagina('Vista/html/login.php');
					break;
				case 'cliente': $controlador->abrir_pagina('Vista/html/cliente.html');
					break;
				
				//CERRAR LOGINEMPLEADO
				case 'cerrarSesion': 
					$controlador->cerrarSession();
				break;	

				//COCINA
				case 'cocina': $controlador->abrir_pagina('Vista/html/panel_cocina.php');
					break;
				case 'bitacoraCocina': $controlador->abrir_pagina('Vista/html/panelAdminPed.php');
					break;
				case 'preparacion': $controlador->Preparacion($_POST['id']);
					break;
				case 'despachado': $controlador->Despachado($_POST['id']);
					break;
				case 'cancelado': $controlador->Cancelado($_POST['id']);
					break;
				case 'dashboard': $controlador->abrir_pagina('Vista/html/plantilla.php');
					break;

				//TURNOS
				case 'turnos': $controlador->abrir_pagina('Vista/html/panel_turnos.php');
					break;
				case 'RegistrarTurno': $controlador->RegistrarTurno($_POST['frm_nom_tur'],$_POST['frm_fechor_ini_tur'],$_POST['frm_fechor_fin_tur']);
					break;
				case 'EditarTurno': $controlador->EditarTurno($_POST['id']);
					break;
				case 'ActualizarTurno': $controlador->ActualizarTurno(
					$_POST['frm_id_tur1'],
					$_POST['frm_nom_tur1'],
					$_POST['frm_fechor_ini_tur1'],
					$_POST['frm_fechor_fin_tur1']);
					break;
				case 'EliminarTurno': $controlador->EliminarTurno($_POST['id']);
					break;

				//MESERO
				case 'mesero': $controlador->abrir_pagina('Vista/html/panel_mesero.php');
					break;
				case 'RegistrarDetallePedido' : $controlador->RegistrarDetallePedido(
					$_POST['frmid_ped'],
					$_POST['frmpro_id'],
					$_POST['frmcom_det_ped'],
					$_POST['frmsin_ing'],
					$_POST['frmcant']);
					break;
				case 'EditarDetallePedido': $controlador->EditarDetallePedido($_POST['id']); 
					break; 
				case 'ActualizarDetallePedido': $controlador->ActualizarDetallePedido(
					$_POST['frmid_det_ped1'],
					$_POST['frmcom_ped1'],
					$_POST['frmsin_ing_ped1'],
					$_POST['frmcant_ped1']);
					break; 

				//PROGRAMACION MESAS
				case 'programacionMesas': $controlador->buscarDatos();
					break;
				case 'RegistrarProgramacionMesa': $controlador->RegistrarProgramacionMesa($_POST['frm_mesa_id'],$_POST['frm_mese_id'],$_POST['frm_tur_id'],$_POST['frm_fecha_ini'],$_POST['frm_fecha_fin'],$_POST['frm_est']);
					break;
				case 'EditarProgramacionMesa': $controlador->EditarProgramacionMesa($_POST['id']);
					break;
				case 'ActualizarProgramacionMesa': $controlador->ActualizarProgramacionMesa(
					$_POST['frm_id_prog_mes1'],
					$_POST['frm_mesa_id1'],
					$_POST['frm_mese_id1'],
					$_POST['frm_tur_id1'],
					$_POST['frm_fecha_ini1'],
					$_POST['frm_fecha_fin1'],
					$_POST['frm_est1']);
					break;
				case 'EliminarProgramacionMesa': $controlador->EliminarProgramacionMesa($_POST['id']);
					break;
				// INGREDIENTES
				case 'ingredientes': $controlador->abrir_pagina("Vista/html/panel_ingredientes.php");
					break; 
				case 'RegistrarIngredientes' : $controlador->RegistrarIngredientes($_POST['frming_nom'],$_POST['frming_estado'],$_POST['frming_stock'],$_POST['frming_val']);
					break;
				case 'EditarIngrediente': $controlador->EditarIngrediente($_POST['id']); 
					break; 
				case 'ActualizarIngrediente': $controlador->ActualizarIngrediente(
					$_POST['frming_id1'],
					$_POST['frming_nom1'],
					$_POST['frming_estado1'],
					$_POST['frming_stock1'],
					$_POST['frming_val1']);
					break; 
				case 'EliminarIngrediente': $controlador->EliminarIngrediente($_POST['id']);

				// INGREDIENTES x PRODUCTO
				case 'ingrexpro': $controlador->Panel_ingrexpro();
					break; 
				case 'RegistrarIngrexpro' : $controlador->RegistrarIngrexpro(
					$_POST['frmip_idpro'],
					$_POST['frmip_iding'],
					$_POST['frmip_cant'],
					$_POST['frmip_med']);
					break;
				case 'EditarIngrexpro': $controlador->EditarIngrexpro($_POST['id']); 
					break; 
				case 'ActualizarIngrexpro': $controlador->ActualizarIngrexpro(
					$_POST['frmip_id1'],
					$_POST['frmip_idpro1'],
					$_POST['frmip_iding1'],
					$_POST['frmip_stock1'],
					$_POST['frmip_med1']);
					break; 
				case 'EliminarIngrexpro': $controlador->EliminarIngrexpro($_POST['id']);
				//USUARIO
				case 'usuarios': $controlador->buscarUsuario();
					break;
				case 'RegistrarUsuario': $controlador->RegistrarUsuario(
				 	$_POST['frmusu_id'],
				 	$_POST['frmusu_rol'],
				 	$_POST['frmusu_idper'],
				 	$_POST['frmusu_cla'],
					$_POST['frmusu_estado']);
					break;
				case 'EditarUsuario': $controlador->EditarUsuario($_POST['id']); 
				 	break; 
				 case 'ActualizarUsuario': $controlador->ActualizarUsuario(
					$_POST['frmusu_id1'],
					$_POST['frmusu_rol1'],
					$_POST['frmusu_idper1'],
				    $_POST['frmusu_estado1']);
					break; 
				 case 'EliminarUsuario': $controlador->EliminarUsuario($_POST['id']);
					 break;
					 
				//CLIENTE
				case 'clientes': $controlador->buscarCliente();
					break;
				case 'RegistrarCliente': $controlador->RegistrarCliente(
						$_POST['frmcli_id'],
						$_POST['frmcli_nom'],
						$_POST['frmcli_ape'],
						$_POST['frmcli_tel'],
						$_POST['frmcli_cel'],
						$_POST['frmcli_mail'],
						$_POST['frmcli_dir'],
						$_POST['frmcli_est']);
					break;
				case 'EditarCliente': $controlador->EditarCliente($_POST['id']); 
					break; 
				case 'ActualizarCliente': $controlador->ActualizarCliente(
					$_POST['frmcli_id1'],
					$_POST['frmcli_nom1'],
					$_POST['frmcli_ape1'],
					$_POST['frmcli_tel1'],
					$_POST['frmcli_cel1'],
					$_POST['frmcli_mail1'],
					$_POST['frmcli_dir1'],
					$_POST['frmcli_est1']);
					break; 
				case 'EliminarCliente': $controlador->EliminarCliente($_POST['id']);
					break;
				}
		}else{ 
			$controlador->abrir_pagina("Vista/html/inicio.html"); 
		}
	}else {
		if (isset($_GET['accion'])) {
			switch ($_GET['accion']) {
				case 'Login':
					$controlador->consultarEmpleado($_POST['IDE'],$_POST['passwordE']);   
					break;
				//RECORDAR CLAVE
				case 'RecordarClave': $controlador->abrir_pagina('Vista/html/RecordarClave.php');
					break;
				case 'RecordarClave2': $controlador->RecordarClave($_POST['IDE']);
					break;
				case 'error': $controlador->error();
					break;
				default:
					$controlador->abrir_pagina("Vista/html/plantilla.php");
					break;
			}
		}else{
			$controlador->abrir_pagina("Vista/html/loginEmpleado.php");
		}
	}
?>
