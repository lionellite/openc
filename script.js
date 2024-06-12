var contenu = document.getElementById("contenu");
var entite = document.getElementById("entite");
var cm = document.getElementsByClassName("cm");
var hist = document.getElementById("hist");
var mhist = {};

function ch(url) {
  fetch(url)
    .then(response => response.text())
    .then(data => {
      // Met à jour le contenu de l'élément HTML
      contenu.innerHTML = data;
    })
    .catch(error => {
      console.error('Erreur :', error);
    });
}


const bouton = document.getElementById('bouton');
bouton.addEventListener('click', function(event) {
  event.preventDefault(); // Empêche le comportement par défaut du lien
  url = this.getAttribute("href"); // Récupère l'URL du fichier texte
  ch(url); // Charge le contenu depuis le fichier texte

})



function c (obj) {
  event.preventDefault(); // Empêche le comportement par défaut du lien
  hist.innerHTML += obj.innerHTML + '>' ;
  url = obj.getAttribute("href"); // Récupère l'URL du fichier texte
  if (url == "filiere.php") {mhist.entite = obj.innerHTML} else if (url == "matieres.php") {mhist.filiere = obj.innerHTML} else if (url == "epreuves.php") {mhist.matiere = obj.innerHTML}

  ch(url); // Charge le contenu depuis le fichier texte

}



function toggleMenu() {
    var menu = document.getElementById("menu");
    menu.style.display = (menu.style.display === "flex" || menu.style.display === "") ? "none" : "flex";
    document.getElementById("hamburger").innerHTML= (menu.style.display === "flex") ? "×" : "☰";
}


