    /* VALIDACIONES PARA CRUD CATEGORIAS */
    cat=0;
    function verificarCategoria(){
        var cate=document.getElementById('frmcat_desc').value;
        if (cate.trim()==""){
            document.getElementById('c1').innerHTML='El campo no puede estar vacio';
			cat=0;
        }else{ 
            if (cate.length<=3){
                document.getElementById('c1').innerHTML='El campo no puede tener menos de 4 caracteres!!';
                cat=0;
            }else{
                document.getElementById('c1').innerHTML='';
                cat=1;
            }
        }
    }
    function habilitarcat(){
        if (cat==1){
            document.getElementById('RegistrarCategoria').disabled=false;
            }
        else{
            document.getElementById('RegistrarCategoria').disabled=true;
        }
	}

    /* VALIDACIONES PARA CRUD PRODUCTO */

    pro=0;
    pro2=0;
    pro3=0;
    pro4=0;
    pro5=0;

    function valnom(){
        var prod=document.getElementById('frmnombres').value;
        if (prod.trim()==""){
            document.getElementById('p1').innerHTML='El campo no puede estar vacio';
			pro=0;
        }else{ 
            if (prod.length<=3){
                document.getElementById('p1').innerHTML='El campo no puede tener menos de 4 caracteres!!';
                pro=0;
            }else{
                document.getElementById('p1').innerHTML='';
                pro=1;
            }
        }
    }
    function valdesc(){
        var prod=document.getElementById('frmdes_pro').value;
        if (prod.trim()==""){
            document.getElementById('p2').innerHTML='El campo no puede estar vacio';
			pro2=0;
        }else{ 
            if (prod.length<=3){
                document.getElementById('p2').innerHTML='El campo no puede tener menos de 4 caracteres!!';
                pro2=0;
            }else{
                document.getElementById('p2').innerHTML='';
                pro2=1;
            }
        }
    }
    function valstock(){
        var prod=document.getElementById('frmstock').value;
        if (prod.trim()==""){
            document.getElementById('p3').innerHTML='El campo no puede estar vacio';
            pro3=0;
        }else{
            document.getElementById('p3').innerHTML='';
            pro3=1;
        }
    }
    function valstockmin(){
        var prod=document.getElementById('frmstockmin').value;
        if (prod.trim()==""){
            document.getElementById('p5').innerHTML='El campo no puede estar vacio';
            pro5=0;
        }else{
            document.getElementById('p5').innerHTML='';
            pro5=1;
        }
    }
    function valval(){
        var prod=document.getElementById('frmval_pro').value;
        if (prod.trim()==""){
            document.getElementById('p4').innerHTML='El campo no puede estar vacio';
			pro4=0;
        }else{ 
            if (prod.length<=3){
                document.getElementById('p4').innerHTML='El campo no puede tener menos de 4 caracteres!!';
                pro4=0;
            }else{
                document.getElementById('p4').innerHTML='';
                pro4=1;
            }
        }
    }
    
    function habilitarpro(){
        if (pro==1 && pro2==1 && pro3==1 && pro4==1 && pro5==1){
            document.getElementById('RegistrarProductos').disabled=false;
            }
        else{
            document.getElementById('RegistrarProductos').disabled=true;
        }
	}


    /* VALIDACIONES PARA CRUD PERSONAL */
    val=0;
	val2=0;
    val3=0;
    val4=0;
    val5=0;
    val6=0;
    val7=0;
    val8=0;
    val9=0;
	function validarpens(){
        var cla=document.getElementById('frmp_pens').value;
        if (cla.trim()==""){
            document.getElementById('r4').innerHTML='El campo no puede estar vacio';
			val=0;
        }else{ 
            if (cla.length<=3){
                document.getElementById('r4').innerHTML='El campo no cumple con los caracteres';
                val=0;
            }else{
                document.getElementById('r4').innerHTML='';
                val=1;
            }
        }
	}
    function validardir(){
        var dir=document.getElementById('frmp_dir').value;
        if (dir.trim()==""){
            document.getElementById('r5').innerHTML='El campo no puede estar vacio';
			val2=0;
        }else{ 
            if (dir.length<=7){
                document.getElementById('r5').innerHTML='El campo no cumple con los caracteres';
                val2=0;
            }else{
                document.getElementById('r5').innerHTML='';
                val2=1;
            }
        }
   }
	function validaremail(email) {
		var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return regex.test(email) ? true : false;
	}
	function validarmailr(){
		var email=document.getElementById('frmp_correo').value
		if( validaremail( email ) ){
            document.getElementById('r3').innerHTML="<p style='color:green'>La dirección de email es correcta.";
            val3=1;
		}else {
            document.getElementById('r3').innerHTML="<p style='color:red'>La dirección de email es incorrecta.";
            val3=0;
        }
    }
    function verificarid(){
        var nombre=document.getElementById('frmp_id').value;
        if (nombre.trim() == ""){
            document.getElementById('r1').innerHTML='El campo no puede estar vacio';
            val6=0;
        }else{if(nombre.length<=7){
                document.getElementById('r1').innerHTML='El campo no cumple con los caracteres';
                val6=0;
            }else{ 
            document.getElementById('r1').innerHTML='';
            val6=1;
            }
        }
    }
    function verificarnam(){
        var nombre=document.getElementById('frmp_nom').value;
        if (nombre.trim() == ""){
            document.getElementById('r2').innerHTML='El campo no puede estar vacio';
            val4=0;
        }else{
            if(nombre.length<=3){
                document.getElementById('r2').innerHTML='El campo no cumple con los caracteres';
                val4=0;
            }else{ 
            document.getElementById('r2').innerHTML='';
            val4=1;
            }
        }
    }
    function verificarape(){
        var nombre=document.getElementById('frmp_ape').value;
        if (nombre.trim() == ""){
            document.getElementById('r6').innerHTML='El campo no puede estar vacio';
            val5=0;
        }
        else{
            if(nombre.length<=3){
                document.getElementById('r6').innerHTML='El campo no cumple con los caracteres';
                val5=0;
            }else{ 
            document.getElementById('r6').innerHTML='';
            val5=1;
            }
        }
    }
    function validareps(){
        var nombre=document.getElementById('frmp_eps').value;
        if (nombre.trim() == ""){
            document.getElementById('r7').innerHTML='El campo no puede estar vacio';
            val7=0;
        }
        else{
            if(nombre.length<=3){
                document.getElementById('r7').innerHTML='El campo no cumple con los caracteres';
                val7=0;
            }else{ 
            document.getElementById('r7').innerHTML='';
            val7=1;
            }
        }
    }
    function validartel(){
        var nombre=document.getElementById('frmp_tel').value;
        if (nombre.trim() == ""){
            document.getElementById('r8').innerHTML='El campo no puede estar vacio';
            val8=0;
        }
        else{
            if(nombre.length<=9){
                document.getElementById('r8').innerHTML='El campo no cumple con los caracteres';
                val8=0;
            }else{ 
            document.getElementById('r8').innerHTML='';
            val8=1;
            }
        } 
    }
    function validararl(){
        var arl=document.getElementById('frmp_arl').value;
        if (arl.trim()==""){
            document.getElementById('r9').innerHTML='El campo no puede estar vacio';
			val9=0;
        }else{ 
            if (arl.length<=4){
                document.getElementById('r9').innerHTML='El campo no cumple con los caracteres';
                val9=0;
            }else{
                document.getElementById('r9').innerHTML='';
                val9=1;
            }
        }
	}
    function habilitar(){
        if (val==1 && val2==1 && val3==1 && val4==1 && val5==1 && val6==1 && val7==1 && val8==1 && val9==1){
            document.getElementById('RegistrarPersonal').disabled=false;
            }
        else{
            document.getElementById('RegistrarPersonal').disabled=true;
        }
    }
    
    /* VALIDACIONES PARA CRUD MESAS */

    mes=0;
    function vercat(){
        var mesa=document.getElementById('frmcap_tab').value;
        if (mesa.trim()==""){
            document.getElementById('m1').innerHTML='El campo no puede estar vacio';
			mes=0;
        }else{
            document.getElementById('m1').innerHTML='';
            mes=1;
        }
    }
    function habilitarmesas(){
        if (mes==1){
            document.getElementById('RegistrarMesa').disabled=false;
            }
        else{
            document.getElementById('RegistrarMesa').disabled=true;
        }
    }
    
    /* VALIDACIONES PARA CRUD TURNOS */

    mes = 0;
    function verTurno() {
        var mesa = document.getElementById('frm_nom_tur').value;
        if (mesa.trim() == "") {
            document.getElementById('m1').innerHTML = 'El campo no puede estar vacio';
            mes = 0;
        } else {
            document.getElementById('m1').innerHTML = '';
            mes = 1;
        }
    }
    function habilitarTurno() {
        if (mes == 1) {
            document.getElementById('RegistrarTurno').disabled = false;
        }
        else {
            document.getElementById('RegistrarTurno').disabled = true;
        }
    }

    // VALIDACIONES CRUD USUARIOS

    usu=0;
    usu1=0;
    usu2=0;
    usu3=0;
    usu4=0;

    function verificaridusu(){
        var nombre=document.getElementById('frmusu_id').value;
        if (nombre.trim() == ""){
            document.getElementById('u1').innerHTML='El campo no puede estar vacio';
            usu=0;
        }else{if(nombre.length<=7){
            document.getElementById('u1').innerHTML='El campo no cumple con los caracteres';
                usu=0;
            }else{ 
            document.getElementById('u1').innerHTML='';
            usu=1;
            }
        }
    }
    function verificarclausu(){
        var nombre=document.getElementById('frmusu_cla').value;
        if (nombre.trim() == ""){
            document.getElementById('u2').innerHTML='El campo no puede estar vacio';
            usu1=0;
        }else{if(nombre.length<=5){
                document.getElementById('u2').innerHTML='La clave no puede tener menos de 6 caracteres';
                usu1=0;
            }else{ 
            document.getElementById('u2').innerHTML='';
            usu1=1;
            }
        }
    }
    function verificarclausu2(){
        var cla2=document.getElementById('frmusu_cla2').value;
        var cla1=document.getElementById('frmusu_cla').value;
        if (cla2.trim() == ""){
            document.getElementById('uc2').innerHTML='El campo no puede estar vacio';
            usu4=0;
        }else{if(cla1 != cla2){
                document.getElementById('uc2').innerHTML='La contraseña no es correcta';
                usu4=0;
            }else{ 
            document.getElementById('uc2').innerHTML='';
            usu4=1;
            }
        }
    }
    function verificarrolusu(){
        var nombre=document.getElementById('frmusu_rol').value;
        if (nombre.trim() == ""){
            document.getElementById('u3').innerHTML='Debe seleccionar una opcion diferente';
            usu2=0;
        }else{ 
            document.getElementById('u3').innerHTML='';
            usu2=1;
        }
    }
    function verificarperusu(){
        var nombre=document.getElementById('frmusu_idper').value;
        if (nombre.trim() == ""){
            document.getElementById('u4').innerHTML='Debe seleccionar una opcion diferente';
            usu3=0;
        }else{ 
            document.getElementById('u4').innerHTML='';
            usu3=1;
        }
    }
    function habilitarusu(){
        if (usu==1 && usu1==1 && usu2==1 && usu3==1 && usu4==1){
            document.getElementById('RegistrarUsuario').disabled=false;
            }
        else{
            document.getElementById('RegistrarUsuario').disabled=true;
        }
    }
    /*EDITAR USUARIOS*/

    function verificarclausu1(){
        var nombre=document.getElementById('frmusu_cla1').value;
        if (nombre.trim() == ""){
            document.getElementById('u12').innerHTML='El campo no puede estar vacio';
        }else{if(nombre.length<=5){
                document.getElementById('u12').innerHTML='La clave no puede tener menos de 6 caracteres';
            }else{ 
            document.getElementById('u12').innerHTML='';
            }
        }
    }

    // VALIDACIONES CRUD CLIENTES
    cli=0;
    cli2=0;
    cli3=0;
    cli4=0;
    cli5=0;
    cli6=0;
    cli7=0;

    function verificarclid(){
        var nombre=document.getElementById('frmcli_id').value;
        if (nombre.trim() == ""){
            document.getElementById('cl1').innerHTML='El campo no puede estar vacio';
            cli=0;
        }else{if(nombre.length<=7){
                document.getElementById('cl1').innerHTML='El campo no cumple con los caracteres';
                cli=0;
            }else{ 
            document.getElementById('cl1').innerHTML='';
            cli=1;
            }
        }
    }
    function verificarclinom(){
        var nombre=document.getElementById('frmcli_nom').value;
        if (nombre.trim() == ""){
            document.getElementById('cl2').innerHTML='El campo no puede estar vacio';
            cli2=0;
        }else{if(nombre.length<=2){
                document.getElementById('cl2').innerHTML='El campo no cumple con los caracteres';
                cli2=0;
            }else{ 
            document.getElementById('cl2').innerHTML='';
            cli2=1;
            }
        }
    }
    function verificarcliape(){
        var nombre=document.getElementById('frmcli_ape').value;
        if (nombre.trim() == ""){
            document.getElementById('cl3').innerHTML='El campo no puede estar vacio';
            cli3=0;
        }else{if(nombre.length<=2){
                document.getElementById('cl3').innerHTML='El campo no cumple con los caracteres';
                cli3=0;
            }else{ 
            document.getElementById('cl3').innerHTML='';
            cli3=1;
            }
        }
    }
    function verificarclitel(){
        var nombre=document.getElementById('frmcli_tel').value;
        if (nombre.trim() == ""){
            document.getElementById('cl4').innerHTML='El campo no puede estar vacio';
            cli4=0;
        }else{if(nombre.length<=6){
                document.getElementById('cl4').innerHTML='El campo no cumple con los caracteres';
                cli4=0;
            }else{ 
            document.getElementById('cl4').innerHTML='';
            cli4=1;
            }
        }
    }
    function verificarclicel(){
        var nombre=document.getElementById('frmcli_cel').value;
        if (nombre.trim() == ""){
            document.getElementById('cl5').innerHTML='El campo no puede estar vacio';
            cli5=0;
        }else{if(nombre.length<=9){
                document.getElementById('cl5').innerHTML='El campo no cumple con los caracteres';
                cli5=0;
            }else{ 
            document.getElementById('cl5').innerHTML='';
            cli5=1;
            }
        }
    }
    function validaremail(email) {
		var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return regex.test(email) ? true : false;
	}
	function verificarclicorr(){
		var email=document.getElementById('frmcli_mail').value
		if( validaremail( email ) ){
            document.getElementById('cl6').innerHTML="<p style='color:green'>La dirección de email es correcta.";
            cli6=1;
		}else {
            document.getElementById('cl6').innerHTML="<p style='color:red'>La dirección de email es incorrecta.";
            cli6=0;
        }
    }
    function verificarclidire(){
        var nombre=document.getElementById('frmcli_dir').value;
        if (nombre.trim() == ""){
            document.getElementById('cl7').innerHTML='El campo no puede estar vacio';
            cli7=0;
        }else{if(nombre.length<=6){
                document.getElementById('cl7').innerHTML='El campo no cumple con los caracteres';
                cli7=0;
            }else{ 
            document.getElementById('cl7').innerHTML='';
            cli7=1;
            }
        }
    }
    function habilitarclien(){
        if (cli==1 && cli2==1 && cli3==1 && cli4==1 && cli5==1 && cli5==1 && cli7==1){
            document.getElementById('RegistrarCliente').disabled=false;
            }
        else{
            document.getElementById('RegistrarCliente').disabled=true;
        }
    }