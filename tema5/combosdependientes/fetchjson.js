cargarProvincias();
function cargarProvincias() {
  var departamento = document.getElementById("departamento");
  var provincia = document.getElementById("provincia");
  provincia.innerHTML="";
  var provincias;
  fetch("opciones_provincia_json.php?iddepartamento=" + departamento.value)
    .then((response) => response.text())
    .then((data) => {console.log(data);
		provincias = JSON.parse(data)
		for (i = 0; i < provincias.length; i++) {
			let elemento = document.createElement("option");
			elemento.value = provincias[i].id;
		
			elemento.innerHTML = provincias[i].nombre;
			if (i == 0) {
			  elemento.selected = true;
			}
			provincia.appendChild(elemento);
		  }


	});

  
}
