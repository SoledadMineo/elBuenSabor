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
        </>
    );
}

export default MenuGrilla;