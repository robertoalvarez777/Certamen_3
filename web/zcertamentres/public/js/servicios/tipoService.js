const getTipo = async ()=>{
    let resultado = await axios.get("api/tipo/get");
    return resultado.data;
};