import Head from 'next/head'
import Image from 'next/image'
import { Inter } from 'next/font/google'
import cearaLogo from './assets/logo-ceara.svg'
import placeholder from './assets/placeholder-icon.png'
import hotel from './assets/hotel.jpeg'
import ondas from './assets/ondas.svg'

function NavBar() {
  return (
    <div className="Navbar">
        <Image className="logo-ceara" src={cearaLogo} alt="Logo do Ceará" />
      <div className="navbar-clickable">
        <input className="search-bar" type="text"/>
        <div className="menu-buttons">
          <a href="">
            <button>Vender <Image src={ placeholder } alt=""/></button>
          </a>
          <a href="">
            <button>Criar a sua conta <Image src={ placeholder } alt="" /></button>
          </a>
          <a href="">
            <button>Entrar <Image src={ placeholder } alt="" /></button>
          </a>
          <a href="">
            <button>Comprar <Image src={ placeholder } alt="" /></button>
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
      <Image src={ hotel } alt="" />
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

function Ondas() {
    return (
        <div className="ondas">
            <Image src={ ondas } alt=""></Image>
        </div>
    )
}

function Home() {

  return (
    <>
      <Head>
        <title>Create Next App</title>
        <meta name="description" content="Generated by create next app" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="/favicon.ico" />
      </Head>
      <div className="App">
        <NavBar/>

        <main>
          <SideBar/>
          <Grade></Grade>
        </main>

        <Ondas></Ondas>
      </div>
    </>
  )
}

export default Home

/* export default function Home() {
 *   return (
 *     <>
 *       <Head>
 *         <title>Create Next App</title>
 *         <meta name="description" content="Generated by create next app" />
 *         <meta name="viewport" content="width=device-width, initial-scale=1" />
 *         <link rel="icon" href="/favicon.ico" />
 *       </Head>
 *       <main className={styles.main}>
 *         <div className={styles.description}>
 *           <p>
 *             Get started by editing&nbsp;
 *             <code className={styles.code}>src/pages/index.tsx</code>
 *           </p>
 *           <div>
 *             <a
 *               href="https://vercel.com?utm_source=create-next-app&utm_medium=default-template&utm_campaign=create-next-app"
 *               target="_blank"
 *               rel="noopener noreferrer"
 *             >
 *               By{' '}
 *               <Image
 *                 src="/vercel.svg"
 *                 alt="Vercel Logo"
 *                 className={styles.vercelLogo}
 *                 width={100}
 *                 height={24}
 *                 priority
 *               />
 *             </a>
 *           </div>
 *         </div>
 *
 *         <div className={styles.center}>
 *           <Image
 *             className={styles.logo}
 *             src="/next.svg"
 *             alt="Next.js Logo"
 *             width={180}
 *             height={37}
 *             priority
 *           />
 *           <div className={styles.thirteen}>
 *             <Image
 *               src="/thirteen.svg"
 *               alt="13"
 *               width={40}
 *               height={31}
 *               priority
 *             />
 *           </div>
 *         </div>
 *
 *         <div className={styles.grid}>
 *           <a
 *             href="https://nextjs.org/docs?utm_source=create-next-app&utm_medium=default-template&utm_campaign=create-next-app"
 *             className={styles.card}
 *             target="_blank"
 *             rel="noopener noreferrer"
 *           >
 *             <h2 className={inter.className}>
 *               Docs <span>-&gt;</span>
 *             </h2>
 *             <p className={inter.className}>
 *               Find in-depth information about Next.js features and&nbsp;API.
 *             </p>
 *           </a>
 *
 *           <a
 *             href="https://nextjs.org/learn?utm_source=create-next-app&utm_medium=default-template&utm_campaign=create-next-app"
 *             className={styles.card}
 *             target="_blank"
 *             rel="noopener noreferrer"
 *           >
 *             <h2 className={inter.className}>
 *               Learn <span>-&gt;</span>
 *             </h2>
 *             <p className={inter.className}>
 *               Learn about Next.js in an interactive course with&nbsp;quizzes!
 *             </p>
 *           </a>
 *
 *           <a
 *             href="https://vercel.com/templates?framework=next.js&utm_source=create-next-app&utm_medium=default-template&utm_campaign=create-next-app"
 *             className={styles.card}
 *             target="_blank"
 *             rel="noopener noreferrer"
 *           >
 *             <h2 className={inter.className}>
 *               Templates <span>-&gt;</span>
 *             </h2>
 *             <p className={inter.className}>
 *               Discover and deploy boilerplate example Next.js&nbsp;projects.
 *             </p>
 *           </a>
 *
 *           <a
 *             href="https://vercel.com/new?utm_source=create-next-app&utm_medium=default-template&utm_campaign=create-next-app"
 *             className={styles.card}
 *             target="_blank"
 *             rel="noopener noreferrer"
 *           >
 *             <h2 className={inter.className}>
 *               Deploy <span>-&gt;</span>
 *             </h2>
 *             <p className={inter.className}>
 *               Instantly deploy your Next.js site to a shareable URL
 *               with&nbsp;Vercel.
 *             </p>
 *           </a>
 *         </div>
 *       </main>
 *     </>
 *   )
 * } */