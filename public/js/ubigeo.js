(function(){

    console.log('Ok');
    sDep.addEventListener('change', cargar_provincias);
	sPro.addEventListener('change', cargar_distritos);
    
    cargar_provincias();
})();

function cargar_provincias() {
    const cd = document.getElementById('sDep').value;

    fetch(`ubigeo/jsonprovincias/${cd}`)
        .then(resp => resp.json())
        .then(data => {
            document.getElementById('sPro').length = data.length;

            for (let i = 0; i < data.length; i++) {
                const element = data[i];
                sPro.options[i].value = element.id 
                sPro.options[i].text = element.despro
            }

            cargar_distritos();
        });
}

function cargar_distritos() {
    const cp = document.getElementById('sPro').value;

    fetch(`ubigeo/jsondistritos/${cp}`)
        .then(resp => resp.json())
        .then(data => {
            document.getElementById('sDis').length = data.length;

            for (let i = 0; i < data.length; i++) {
                const element = data[i];
                sDis.options[i].value = element.id 
                sDis.options[i].text = element.desdist
            }
        });
}
