cargarProvincias();
function cargarProvincias() {
	var departamento= document.getElementById('departamento');
	var provincia=document.getElementById('provincia');
	
	fetch('opciones_provincia.php?iddepartamento='+departamento.value)
		.then(response => response.text())
		.then(data => provincia.innerHTML=data);
}