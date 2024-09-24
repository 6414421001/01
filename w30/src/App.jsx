import { createContext, useState } from 'react';
import { BrowserRouter, Route, Routes } from 'react-router-dom';
import './App.css';
import Home from './component/home';

// สร้าง Context
export const UseContext = createContext();

function App() {
  // ใช้ useState ในการจัดการ token
  const [token, setToken] = useState("");

  return (
    <BrowserRouter>
      {/* ใช้ Provider เพื่อแชร์ค่า token และ setToken ไปยังคอมโพเนนต์อื่น ๆ */}
      <UseContext.Provider value={{ token, setToken }}>
        <Routes>
          <Route path='/' element={<Home />}/>
        
        </Routes>
      </UseContext.Provider>
    </BrowserRouter>
  );
}

export default App;