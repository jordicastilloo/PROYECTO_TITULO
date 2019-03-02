$("registro").click(function(){
	var rut = $("#rut").val();
	var nombre = $("#nombre").val();
	var ap_pat = $("#ap_pat").val();
	var ap_mat = $("#ap_mat").val();
	var telefono = $("#telefono").val();
	var email = $("#email").val();
	var huella = "null";
	var contraseña = $("#contraseña").val();
	var nacionalidad = $("#nacionalidad").val();
	var fecha = $("#fecha").val();
	var sexo = $("#sexo").val();
	var alergia = $("#alergia").val();
	var patologia = $("#patologia").val();
	var fotografia = "null";
	var estado = 1;
	var route = "http://localhost:8000/clientes";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data:{
			rut_cl: rut,
			nombre_cliente: nombre,
			ap_pat_cliente: ap_pat,
			ap_mat_cliente: ap_mat,
			telefono_cliente: telefono,
			email_cliente: email,
			huella_cliente: huella,
			contrasena_cliente: contraseña,
			nacionalidad_cliente: nacionalidad,
			fecha_nac_cliente: fecha,
			sexo_cliente: sexo,
			alergia_cliente: alergia,
			patologia_cliente: patologia,
			fotografia_cliente: fotografia,
			estado: estado},
		success:function(){
			$("#msj-sucess").fadeIn();
		}
	});
});