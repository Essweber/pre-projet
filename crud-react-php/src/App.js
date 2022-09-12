import { useState } from 'react';
import {BrowserRouter, Routes, Route, Link} from 'react-router-dom';
import './App.css';



function App() { 

  return (
    <div className="App">
      <h5>React crud and php</h5>

    <BrowserRouter>
    <nav>
      <ul>
        <li><Link to='/'>List users</Link></li>
        <li><Link to='user/create'>user</Link></li>
      </ul>
    </nav>
    </BrowserRouter>
   
    </div>
  );
}

export default App;
