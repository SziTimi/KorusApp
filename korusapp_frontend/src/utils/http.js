//http.js
import axios from "axios";

// Létrehozunk egy axios példányt a baseURL-lel
const http = axios.create({
    baseURL: "http://localhost:8000/api"
});

http.interceptors.request.use(function (config) {
    const token = localStorage.getItem('token');
    if (token) {
        config.headers.Authorization = `Bearer ${token}`;
    }
    return config;
});

// Autentikációs funkciók
function isLoggedIn() {
  return localStorage.getItem('token') ? true : false;
}

function login(token) {
    localStorage.setItem('token', token);
    localStorage.setItem('loggedIn', true);
}

function logout() {
    localStorage.removeItem('token');
    localStorage.removeItem('loggedIn');
    window.dispatchEvent(new Event('storage')); // Másik tabon is kiváltja a változást
}

// Exportáljuk az http példányt és az autentikációs funkciókat
export { http, isLoggedIn, login, logout };


