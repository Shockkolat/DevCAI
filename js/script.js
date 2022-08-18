'use strict';

//navbar variables
const navbarNav = document.querySelector('.navbar-nav');
const navbarToggleBtn = document.querySelector('.nav-toggle-btn');

//navbar toggle functionality
navbarToggleBtn.addEventListener('click', function(){

    navbarNav.classList.toggle('active');
    this.navbarNav.classList.toggle('active');

});

function Hide(){
    var i = document.getElementById("detail");
    if (i.style.display === "none") {
        i.style.display = "block";
      } else {
        i.style.display = "none";
      }

}

function Hide2(){
    var i = document.getElementById("ask");
    if (i.style.display === "none") {
        i.style.display = "block";
      } else {
        i.style.display = "none";
      }

}

const actualBtn = document.getElementById('actual-btn');

const fileChosen = document.getElementById('file-chosen');

actualBtn.addEventListener('change', function(){
  fileChosen.textContent = this.files[0].name
})
