import { Link } from 'react-router-dom';
//import './Header.css'; // estilos aparte para que quede limpio

// Simulando un usuario logueado
const user = {
  nombre: 'Sole'
};

function Header() {
  return (
    <header className="header">
      <div className="logo">
        <Link to="/">
          <img src="" alt="Logo" />
        </Link>
      </div>

      <nav className="nav-links">
        <Link to="/">Home</Link>
        <Link to="/productos">Productos</Link>
        <Link to="/carrito">Carrito</Link>
        <Link to="/quienes-somos">Quiénes Somos</Link>
      </nav>

      <div className="user-info">
        {user ? (
          <span>Hola, {user.nombre}</span>
        ) : (
          <Link to="/login">Login</Link>
        )}
      </div>
    </header>
  );
}

export default Header;
