const cargarTipo = async()=>{
    //1. Ir a buscar las marcas a la api
    let tipo = await getTipo();
    //2. Cargar las marcas dentro del select
    let tipoSelect = document.querySelector("#tipo-select");
    tipo.forEach(m=>{
        let option = document.createElement("option");
        option.innerText = m;
        tipoSelect.appendChild(option);
    });
    
};

document.addEventListener("DOMContentLoaded", ()=>{
    cargarTipo();
});

