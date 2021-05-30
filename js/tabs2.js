var content1 = document.getElementById("content1");
var content2 = document.getElementById("content2");
var content3 = document.getElementById("content3");
var btn1 = document.getElementById("btn1");
var btn2 = document.getElementById("btn2");
var btn3 = document.getElementById("btn3");

function openTab1(){
  content1.style.transform = "translateX(0)";
  content2.style.transform = "translateX(100%)";
  content3.style.transform = "translateX(100%)";
  content1.style.transtitionDelay ="0.3s";
  content2.style.transtitionDelay ="0s";
  content3.style.transtitionDelay ="0s";
}
function openTab2(){
  content1.style.transform = "translateX(100%)";
  content2.style.transform = "translateX(-0%)";
  content3.style.transform = "translateX(100%)";
  content1.style.transtitionDelay ="0s";
  content2.style.transtitionDelay ="0.3s";
  content3.style.transtitionDelay ="0s";
}
function openTab3(){
  content1.style.transform = "translateX(100%)";
  content2.style.transform = "translateX(100%)";
  content3.style.transform = "translateX(0%)";
  content1.style.transtitionDelay ="0s";
  content2.style.transtitionDelay ="0.3s";
  content3.style.transtitionDelay ="0s";
}