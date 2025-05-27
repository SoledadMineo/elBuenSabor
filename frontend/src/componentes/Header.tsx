import { Link } from 'react-router-dom';
import '../Header.css'; // asegurate que la ruta sea correcta

const user = {
  nombre: 'Sole'
};

function Header() {
  return (
    <nav className="custom-navbar">
      <div className="navbar-container">
        {/* Logo a la izquierda */}
        <Link className="navbar-logo" to="/app">
          <img src="/images/logo.png" alt="Logo" />
        </Link>

        {/* Navegación y saludo a la derecha */}
        <ul className="navbar-links">
          <li><Link to="/app">Home</Link></li>
          <li><Link to="/donde-estamos">Donde Estamos</Link></li>
          <li><Link to="/Menu">Menú</Link></li>
          <li><Link to="/MenuGrilla">Listado</Link></li>
          <li><Link to="/">Contacto</Link></li>
          {/* <li>Hola {user.nombre} !</li> */}
          <li>
            <button className="iniciarSesion">Iniciar Sesión</button>
          </li>
        </ul>
      </div>
    </nav>
  );
}

export default Header;
