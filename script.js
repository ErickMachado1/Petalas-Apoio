function fecharmenu() {
  document.getElementById("menu").style.width = "0px";
  document.getElementById("menu").style.padding = "0px;";
}
function abrirmenu() {
  document.getElementById("menu").style.width = "300px";
  document.getElementById("menu").style.padding = "20px;";
}

function getCookie(name) {
  const value = `; ${document.cookie}`;
  const parts = value.split(`; ${name}=`);
  if (parts.length === 2) return parts.pop().split(";").shift();
}

function setCookie(name, value, days) {
  let expires = "";
  if (days) {
    const date = new Date();
    date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
    expires = `; expires=${date.toUTCString()}`;
  }
  document.cookie = `${name}=${value || ""}${expires}; path=/`;
}

if (!getCookie("siteReloaded")) {
  setCookie("siteReloaded", "true", 1);
  window.location.reload(true);
}

function emoção1() {
  window.location.href = "./Pagina/Home/Backend/puxardados.php?emotion=medo";
}
function emoção2() {
  window.location.href = "./Pagina/Home/Backend/puxardados.php?emotion=solidao";
}
function emoção3() {
  window.location.href = "./Pagina/Home/Backend/puxardados.php?emotion=tristeza";
}
function emoção4() {
  window.location.href = "./Pagina/Home/Backend/puxardados.php?emotion=indiferenca";
}
function emoção5() {
  window.location.href = "./Pagina/Home/Backend/puxardados.php?emotion=desesperanca";
}
function emoção6() {
  window.location.href = "./Pagina/Home/Backend/puxardados.php?emotion=incerteza";
}
function emoção7() {
  window.location.href = "./Pagina/Home/Backend/puxardados.php?emotion=estresse";
}
function emoção8() {
  window.location.href = "./Pagina/Home/Backend/puxardados.php?emotion=cansaco";
}
