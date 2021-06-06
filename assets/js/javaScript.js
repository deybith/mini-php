'use strict'

window.addEventListener('load', function(){
	var formulario=document.querySelector("#formulario");
	formulario.addEventListener('submit', function(e) {
		let re = true;
		var nombres = document.querySelector("#nombres").value;
		var apellidos = document.querySelector("#apellidos").value;
		var cedula= document.querySelector("#cedula").value;
		var telefono = document.querySelector("#numeroTelefono").value;
		var direccionCorreo = document.querySelector("#direccionCorreo").value;
		var fechaNacimiento =document.querySelector("#fechaNacimiento").value;

		const expresionCorreo=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/;
		const expresionfecha=/^([012][1-9]|3[01])(\/)(0[1-9]|1[012])\2(\d{4})$/;

		if(nombres.trim() == '' || !/^[a-zA-Z\ áéíóúñ]{3,25}$/.exec(nombres) ){
			alert('Nombres invalidos');
			re = false;
		}
		if(apellidos.trim() == '' ||  !/^[a-zA-Z\ áéíóúñ]{3,25}$/.exec(apellidos)  ){
			alert('Apellidos invalidos');
			re = false;
		}

		if(cedula.trim() == '' || cedula<=0){
			alert('Cedula invalida');
			re = false;
		}	
		if(telefono.trim() == '' || telefono<=0){
			alert('Taelefono invalido');
			re = false;
		}
		if(direccionCorreo.trim()==''|| !/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/.exec(direccionCorreo)){
			alert('direccionCorreo invalido');
			re = false;
		}
		if(fechaNacimiento.trim()==''|| /^([012][1-9]|3[01])(\/)(0[1-9]|1[012])\2(\d{4})$/.exec(fechaNacimiento)){
			alert('fechaNacimiento invalida');
			re = false;
		}
		if (re == false) {
			e.preventDefault();
		}
});
	
});
