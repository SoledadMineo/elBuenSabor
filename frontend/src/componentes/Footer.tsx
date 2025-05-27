import '../Footer.css';

function Footer() {
  return (
    <footer className="footer">
      <p className="mb-0">
        © {new Date().getFullYear()} El Buen Sabor | Comidas Rápidas - Mendoza, Argentina
      </p>
    </footer>
  );
}

export default Footer;
