import React from 'react'
import ReactDOM from 'react-dom/client'
import App from './App'
import TelaLogin from './Login'

import { useEffect } from 'react';

function Example() {
  useEffect(() => {
    document.title = 'Início';
  }, []);
}


ReactDOM.createRoot(document.getElementById('root') as HTMLElement).render(
  <React.StrictMode>
    <Example></Example>
    <App></App>
  </React.StrictMode>,
)
