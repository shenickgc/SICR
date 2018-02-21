function validar_profesor(){

 var nombrep , appaterno, apmaterno, titulo, departamentoads, curp, edocivil, telefono, celular, correo, calle, numero, colonia, municipio, cp, estado, expresion, expresionletra ;

 		nombrep = document.getElementById("nombrep").value;
		appaterno =  document.getElementById("AP_paterno").value;
		apmaterno = document.getElementById("AP_materno").value;
		titulo = document.getElementById("titulo").value;
		departamentoads = document.getElementById("departamento_de_adscripcion").value;
		curp = document.getElementById("curp").value;
		edocivil = document.getElementById("edo_civil").value;
		telefono = document.getElementById("telefono").value;
		celular = document.getElementById("celular").value;
		correo = document.getElementById("correo").value;
		calle = document.getElementById("calle").value;
		numero = document.getElementById("numero").value;
		colonia = document.getElementById("colonia").value;
		municipio = document.getElementById("municipio").value;
		cp = document.getElementById("cp").value;
		estado =  document.getElementById("estado").value;

		expresion = /\w+@\w+\.+[a-z]/;
		expresionletra = /^[a-zA-Z]*$/;


		if(nombrep === "" ){
				document.getElementById("nombrep").innerHTML = "no se puede dejar vacio";
				return false;
			}else if (!expresionletra.test(nombrep)){
				document.getElementById("nombrep").innerHTML = "no se aceptan numeros";
				return false;
			}else if (nombrep.length>50){
				document.getElementById("nombrep").innerHTML = "excede los caracteres permitidos";
				return false;	
			}

	$('.timepicker').pickatime({
    default: 'now', // Set default time: 'now', '1:30AM', '16:30'
    fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
    twelvehour: false, // Use AM/PM or 24-hour format
    donetext: 'OK', // text for done-button
    cleartext: 'Clear', // text for clear-button
    canceltext: 'Cancel', // Text for cancel-button
    autoclose: false, // automatic close timepicker
    ampmclickable: true, // make AM PM clickable
    aftershow: function(){} //Function for after opening timepicker
  });

}