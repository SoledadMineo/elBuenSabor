import { Routes, Route, Link } from "react-router-dom";
import Menu from "./componentes/Menu";
import Home from "./componentes/Home";
import Header from "./componentes/Header";

function App() {
 
  return (
    <>
      <Header />
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/menu" element={<Menu />} />
        <Route path="*" element={<Home />} />
      </Routes>
    </>
  );
}
export default App;
