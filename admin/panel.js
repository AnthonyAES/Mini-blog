var pageAccueil = document.querySelector('#accueil');
var pageAjout = document.querySelector('#add-article');
var pageArticles = document.querySelector('#articles');
var btnAccueil = document.querySelector('#btn-acc');
var btnAdd = document.querySelector('#btn-add');
var btnArticles = document.querySelector('#btn-articles');
var liAcc = document.querySelector('#li-acc');
var liAdd = document.querySelector('#li-add');

btnAccueil.addEventListener('click', goToAccueil);
btnAdd.addEventListener('click', goToAdd);

function goToAccueil(){
    pageAccueil.classList.remove('dontshow');
    pageAjout.classList.add('dontshow');
    pageArticles.classList.add('dontshow');
    liAcc.classList.add('active');
    liAdd.classList.remove('active');
}

function goToAdd(){
    pageAjout.classList.remove('dontshow');
    pageAccueil.classList.add('dontshow');
    pageArticles.classList.add('dontshow');
    liAcc.classList.remove('active');
    liAdd.classList.add('active');
}