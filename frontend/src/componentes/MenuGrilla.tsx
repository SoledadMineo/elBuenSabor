function MenuGrilla(){
    return (
        <>
            <div className="contenedor-tabla">
                <div className="text-end">
                    <button
                        style={{ backgroundColor: "#9c8c5c", color: "white" }}
                        className="btn w-40 mb-3"
                        //onClick={() => navigate("/formulario/0")}
                    >
                        Nuevo
                    </button>
                     <button
                        style={{ backgroundColor: "#9c8c5c", color: "white" }}
                        className="btn w-40 mb-3"
                        // onClick={() => navigate("/formulario/0")}
                        >
                        Excel
                    </button>
                </div>
            </div>
            <div className="text-start">
                <table className="tabla-personalizada">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Instrumento</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Costo Envio</th>
                            <th scope="col">Cantidad Vendida</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Stock Disponible</th>
                            <th scope="col">Categoria</th>
                            {/* {esAdmin && <th scope="col">Modificar</th>} */}
                            <th scope="col">Modificar</th>
                            {/* {esAdmin && <th scope="col">Eliminar</th>} */}
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
            {/* <tbody>
              {instrumentos.map((instrumento: Instrumento) => (
                <tr key={instrumento.id}>
                  <td>{instrumento.id}</td>
                  <td>{instrumento.instrumento}</td>
                  <td>{instrumento.marca}</td>
                  <td>{instrumento.modelo}</td>
                  <td>{instrumento.imagen}</td>
                  <td>{instrumento.precio}</td>
                  <td>{instrumento.costoEnvio}</td>
                  <td>{instrumento.cantidadVendida}</td>
                  <td>{instrumento.descripcion}</td>
                  <td>
                    {Number(instrumento.initialHayStock) === 1 ? "Sí" : "No"}
                  </td>
                  <td>{getNombreCategoria(instrumento.idCategoria)}</td>

                  {esAdmin && (
                    <td>
                      <button
                        style={{ backgroundColor: "#576378", color: "white" }}
                        className="btn w-100"
                        onClick={() =>
                          navigate(`/formulario/${instrumento.id}`)
                        }
                      >
                        Modificar
                      </button>
                    </td>
                  )}
                  {esAdmin && (
                    <td>
                      <button
                        style={{ backgroundColor: "#9c8c5c", color: "white" }}
                        className="btn w-100"
                        onClick={() => deleteInstrumento(instrumento.id)}
                      >
                        Eliminar
                      </button>
                    </td>
                  )}
                </tr>
              ))}
            </tbody> */}
          </table>
          </div>
        </>
);
}

export default MenuGrilla;