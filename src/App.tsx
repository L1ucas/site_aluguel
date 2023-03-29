/* import { useState } from 'react' */
import './App.css'
import cearaLogo from './assets/logo-ceara.svg'
import placeholder from './assets/placeholder-icon.png'
import hotel from './assets/hotel.jpeg'


function NavBar() {
  return (
    <div className="Navbar">
      <img className="logo-ceara" src={cearaLogo} alt="Logo do Ceará" />
      <div className="navbar-clickable">
        <input className="search-bar" type="text"/>
        <div className="menu-buttons">
          <a href="">
            <button>Vender <img src={ placeholder } alt=""/></button>
          </a>
          <a href="">
            <button>Criar a sua conta <img src={ placeholder } alt="" /></button>
          </a>
          <a href="">
            <button>Entrar <img src={ placeholder } alt="" /></button>
          </a>
          <a href="">
            <button>Comprar <img src={ placeholder } alt="" /></button>
          </a>
        </div>
      </div>

    </div>
  )
}

function SideBar() {
  return (
    <ul className="Sidebar">
      <li><a href="" className="sidebar-link">Apartamentos</a></li>
      <li><a href="" className="sidebar-link">Casas</a></li>
      <li><a href="" className="sidebar-link">Terrenos</a></li>
      <li><a href="" className="sidebar-link">Salas comerciais</a></li>
    </ul>
  )
}

function ItemGrade() {
  return (
    <div className="grade-item">
      <img src={ hotel } alt="" />
      <div className="texto-grade">
        <span>A partir de</span>
        <em>R$ 400 000</em>
        <span className="descricao">300,00 m² construidos</span>
        <span className="descricao">4 quartos </span>
      </div>
    </div>
  )
}

function Grade() {
  return (
    <div className="grade-imoveis">
      <ItemGrade></ItemGrade>
      <ItemGrade></ItemGrade>
      <ItemGrade></ItemGrade>
      <ItemGrade></ItemGrade>
      <ItemGrade></ItemGrade>
      <ItemGrade></ItemGrade>
      <ItemGrade></ItemGrade>
      <ItemGrade></ItemGrade>
    </div>
  )
}

function App() {

  return (
    <div className="App">
      <NavBar/>

      <main>
        <SideBar/>
        <Grade></Grade>
      </main>
    </div>
  )
}

export default App
