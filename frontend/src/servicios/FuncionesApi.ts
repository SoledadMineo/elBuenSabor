import type ArticuloManufacturado from "../entidades/ArticuloManufacturado";

export async function getArticuloManufacturadoJSONFetch(){
	const urlServer = 'http://localhost:3000/api/articulos-manufacturados';
	const response = await fetch(urlServer, {
		method: 'GET',
        headers: {
			'Content-type': 'application/json',
			'Access-Control-Allow-Origin':'*'
		},
        mode: 'cors'
	});
	console.log(response);
	return await response.json();
}

export async function getArticuloManufacturadoXIdFecth(id:number){
	const urlServer = `http://localhost:3000/api/articulos-manufacturados/${id}`;
    console.log(urlServer);
	const response = await fetch(urlServer, {
		method: 'GET',
        headers: {
			'Content-type': 'application/json',
			'Access-Control-Allow-Origin':'*'
		},
        mode: 'cors'
	});

	return await response.json() as ArticuloManufacturado;
    
}
