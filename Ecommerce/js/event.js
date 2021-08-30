/*

    Script des évènements (clique sur les boutons, barre de recherche)

*/


const menu = document.getElementById("menu");


// Menu hamburger en mode mobile (bouton qui affiche le menu)
menu.onclick = () => {
  const menuList = document.getElementById("menu-list");


  // Si le menu est déjà affiché on le retire sinon on ne l'affiche pas
  if (menuList.style.display == "flex") {
    menuList.style.display = "";
  } else {
    menuList.style.display = "flex";
  }
};

// Variable qui détermine si on est en mobile ou pas
const isMobile = window.innerWidth <= 768;

// gestion du bouton du panier en mode mobile/pas mobile
const shopButton = document.getElementById("panier");
const shopButtonMobile = document.getElementById("panier-mobile");

shopButton.onclick = () => {
  const navbarRight = document.getElementById("navbar-right");
  const contentPage = document.getElementById("content");

  // On décalle à -300px pour avoir l'effet de transition. 300 => largeur de la div
  if (
    navbarRight.style.marginRight == "-300px" ||
    !navbarRight.style.marginRight
  ) {
    navbarRight.style.marginRight = "0";

    // Si mobile alors la navbar doit passer par dessus
    if (!isMobile) {
      contentPage.style.marginRight = "300px";
    }
    shopButton.src = "./images/hide.svg";
    shopButtonMobile.src = "./images/hide.svg";
  } else {
    navbarRight.style.marginRight = "-300px";

    // Si mobile alors la navbar doit passer par dessus
    if (!isMobile) {
      contentPage.style.marginRight = "0";
    }
    shopButton.src = "./images/shop.svg";
    shopButtonMobile.src = "./images/shop.svg";
  }
};

// Même chose que juste au dessus pour le bouton en mobile
shopButtonMobile.onclick = () => {
  const navbarRight = document.getElementById("navbar-right");
  const contentPage = document.getElementById("content");

  if (
    navbarRight.style.marginRight == "-300px" ||
    !navbarRight.style.marginRight
  ) {
    navbarRight.style.marginRight = "0";
    if (!isMobile) {
      contentPage.style.marginRight = "300px";
    }
    shopButton.src = "./images/hide.svg";
    shopButtonMobile.src = "./images/hide.svg";
  } else {
    navbarRight.style.marginRight = "-300px";
    if (!isMobile) {
      contentPage.style.marginRight = "0";
    }
    shopButton.src = "./images/shop.svg";
    shopButtonMobile.src = "./images/shop.svg";
  }
};



// Barre de recherche

const searchInput = document.getElementById("search-input");



searchInput.oninput = () => {
  const listResponse = document.getElementById("search-input-responses");
  const searchList = document.getElementById("search-list");
  const value = searchInput.value;

  // On vérifie si l'input est vide, si c'est le cas on fait rien et on n'affiche pas la liste déroulante
  if (!value) {
    listResponse.innerHTML = "";
    searchList.style.display = "none";
    return;
  }

  // Si il y a une valeur dans l'input alors

  // On remet à zéro la liste déroulante
  listResponse.innerHTML = "";


  // Exemple pour le filtre d'un manga
  // manga => naruto
  // input => aru

  // Première liste => mangas
  // Naruto
  // Dragon ball z
  // One piece

  // input => a

  // Après le filter
  // Deuxième liste => manga
  // Naruto
  // Dragon ball z

  // On parcourt tous les mangas et on regarde si un manga correspond à la recherche (par le nom)
  const manga = mangas.filter((manga) => manga.title.includes(value));
  if (manga.length > 0) {
    manga.forEach((manga) => {
      // On remplit la liste avec les résultats des mangas
      listResponse.innerHTML += `<li><a href="boutique.html?genre=${manga.category}">${manga.title} <br /> <span>Manga</span></a></li>`;
    });
  }

  // On parcourt tous les articles et on regarde si un article correspond à la recherche (par le nom)
  const item = items.filter((item) => item.title.includes(value));
  if (item.length > 0) {
    item.forEach((item) => {
      // On remplit la liste avec les résultats des articles
      listResponse.innerHTML += `<li><a href="boutique.html?genre=${item.category}&manga=${item.manga}">${item.title} <br /> <span>Article</span></a></li>`;
    });
  }

  // Si on a des résultats correspondants, on affiche la liste
  if (manga.length > 0 || item.length > 0) {
    searchList.style.display = "block";
  }
};
