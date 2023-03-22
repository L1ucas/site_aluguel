/* import { useState } from 'react' */
import './App.css'
import cearaLogo from './assets/logo-ceara.svg'
import placeholder from './assets/placeholder-icon.png'


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

function App() {

  return (
    <div className="App">
      <NavBar/>

      <main>
        <SideBar/>

      </main>
    </div>
  )
}

export default App
