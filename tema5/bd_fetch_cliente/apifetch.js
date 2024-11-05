function listar() {
	var contenedor;
	contenedor = document.getElementById('contenido');
	fetch('read.php')
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}

function cargarContenido(abrir) {
	var contenedor;
	contenedor = document.getElementById('contenido');
	fetch(abrir)
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}
function eliminar(id) {
	var contenedor;
	contenedor = document.getElementById('contenido');
	fetch('delete.php?id='+id)
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}
function crear() {
	var contenedor;
	contenedor = document.getElementById('contenido');
	var formulario=document.getElementById('formulario');
	var datos=new FormData(formulario);
	console.log(datos);
	fetch("create.php",
		{method:"POST",
		body:datos})
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
	
}
function actualizar() {
	var contenedor;
	contenedor = document.getElementById('contenido');
	var formulario=document.getElementById('formulario');
	var datos=new FormData(formulario);
	console.log(datos);
	fetch('update.php',{method:"POST",
		body:datos} )
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}
