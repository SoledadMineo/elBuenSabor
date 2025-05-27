import { Routes, Route, Link } from "react-router-dom";

import Home from "./componentes/Home";
import Header from "./componentes/Header";
import MenuGrilla from "./componentes/MenuGrilla";
import Menu from "./componentes/Menu";
import Footer from "./componentes/Footer";


function App() {
  return (
    <div className="app-container">
      <Header />
      <div className="content">
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/home" element={<Home />} />
          <Route path="/menu" element={<Menu />} />
          <Route path="/listado" element={<MenuGrilla />} />
          <Route path="*" element={<Home />} />
        </Routes>
      </div>
      <Footer />
    </div>
  );
}
export default App;
