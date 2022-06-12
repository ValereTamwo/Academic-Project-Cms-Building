/*              Creating function to add abd remove z-index properties from division*/
/*
function present() {
    let present = document.getElementsByClassName('present');
    present.classList.add('index');
    
}
function presentRv() {
    let present = document.getElementsByClassName('present');
    present.classList.remove('index');
    
}
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function Project() {
    let present = document.getElementsByClassName('project');
    present.classList.add('index');
    
}
function ProjectRv() {
    let present = document.getElementsByClassName('project');
    present.classList.remove('index');
    
}
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function activite() {
    let present = document.getElementsByClassName('activ');
    present.classList.add('index');
    
}
function activiteRv() {
    let present = document.getElementsByClassName('activ');
    present.classList.remove('index');
    
}

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function Site() {
    let present = document.getElementsByClassName('site');
    present.classList.add('index');
    
}
function SiteRv() {
    let present = document.getElementsByClassName('site');
    present.classList.remove('index');
    
}

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function annonce() {
    let present = document.getElementsByClassName('annonce');
    present.classList.add('index');
    
}
function annonceRv() {
    let present = document.getElementsByClassName('annonce');
    present.classList.remove('index');
    
}

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function pub() {
    let present = document.getElementsByClassName('pub');
    present.classList.add('index');
    
}
function pubRv() {
    let present = document.getElementsByClassName('pub');
    present.classList.remove('index');
    
}*/

      /*              Creating function to add abd remove z-index properties from division*/

function present() {
    let present = document.getElementById('present');
    present.classList.add('index');
    
}
function presentRv() {
    let present = document.getElementById('present');
    present.classList.remove('index');
    
}
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function Project() {
    let project = document.getElementById('project');
    project.classList.add('index');
    
}
function ProjectRv() {
    let project = document.getElementById('project');
    project.classList.remove('index');
    
}
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function activite() {
    let activ = document.getElementById('activ');
    activ.classList.add('index');
    
}
function activiteRv() {
    let actic = document.getElementById('activ');
    actic.classList.remove('index');
    
}

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function Site() {
    let site = document.getElementById('site');
    site.classList.add('index');
    
}
function SiteRv() {
    let site = document.getElementById('site');
    site.classList.remove('index');
    
}

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function annonce() {
    let annonce = document.getElementById('annonce');
    annonce.classList.add('index');
    
}
function annonceRv() {
    let annonce = document.getElementById('annonce');
    annonce.classList.remove('index');
    
}

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function pub() {
    let pub = document.getElementById('publ');
    pub.classList.add('index');
    
}
function pubRv() {
    let pub = document.getElementById('publ');
    pub.classList.remove('index');
    
}

//+=++++++++++++ Ajax Asynch

function getContent(fichier) {
   // let content = document.getElementById('present');
    let div = document.getElementById('ajax')

    // initialising ajax Request

    let xhr = new XMLHttpRequest();
    xhr.open('GET', `${fichier}`, true);
    xhr.responseType = 'text';
    xhr.onreadystatechange = () => {
        if (xhr.readyState == 4 && xhr.status == 200) {
          //  content.innerHTML = xhr.responseText;
            div.innerHTML = xhr.responseText;
        }
    }
    xhr.send();
}