
function validar(){
		var numero, nombre, apellidop, apellidom, carrera, correo, telefono ,expresion, expresionletra;
		numero = document.getElementById("No_solicitud").value;
		nombre = document.getElementById("nombres").value;
		apellidop = document.getElementById("apellidoP").value;
		apellidom =	document.getElementById("apellidoM").value;
		carrera = document.getElementById("carrera").value;
		correo	= document.getElementById("correo").value;
		telefono = document.getElementById("telefono").value;

		expresion = /\w+@\w+\.+[a-z]/;
		expresionletra = /^[a-zA-Z]*$/;

			if(numero === ""){
				alert("el campo numero de solicitud no puede estar vacio");
				document.getElementById("No_solicitud").style.border = "1px solid red";
				return false;
			}else if ( nombre === ""){
				alert("el campo nombre no puede estar vacio");
				document.getElementById("nombres").style.border = "1px solid red";
				return false;
			}else if ( apellidop === ""){
				alert("el campo numero apellido paterno no puede esta vacio");
				document.getElementById("apellidop").style.border = "1px solid red";
				return false;
			}else if ( apellidom === ""){
				alert("el campo apellido materno no puede estar vacio");
				document.getElementById("apellidoM").style.border = "1px solid red";
				return false;
			}else if (carrera ===""){
				alert("el campo carrera no puede estar vacio");
				document.getElementById("carrera").style.border = "1px solid red";
				return false;
			}else if(correo ===""){
				alert("el campo correo no puede estar vacio");
				document.getElementById("correo").style.border = "1px solid red";
				return false;
			}else if(telefono ===""){
				alert("el campo telefono no puede estar vacio");
				document.getElementById("telefono").style.border = "1px solid red";
				return false;
			}else if (numero.length>30){
				alert("el numero de solicitud es muy largo");
				return false;
			}else if(nombre.length>30){
				alert("el nombre es muy largo");
				return false;
			}else if (apellidop.length>30){
				alert("el apellido paterno es muy largo");
				return false;
			}else if (apellidom.length>30){
				alert("el apellido materno es muy largo");
				return false;
			}else if (carrera.length>80){
				alert("la carrera es muy largo");
				return false;
			}else if(correo.length>80){
				alert("el correo es muy largo");
				return false;

			}else if(telefono.length>30){
				alert("el telefono es muy largo");
				return false;
			}else if(isNaN(telefono)){
				alert(" el telefono ingresado no es un numero");
				return false;
			}else if (!expresion.test(correo)){
				alert("el correo no es valido");
				return false;
			} else if (!expresionletra.test(nombre || apellidop || apellidom || carrera )){
				alert("Algunos de los campos son incorrectos");
				return false;

			}



		}
		
		
