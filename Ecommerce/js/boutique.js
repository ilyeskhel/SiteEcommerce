0
// Permet de récupérer un paramètre dans l'url
function findGetParameter(parameterName) {
  let result = null;
  let tmp = [];
  let items = location.search.substr(1).split("&");
  for (let index = 0; index < items.length; index++) {
    tmp = items[index].split("=");
    if (tmp[0] === parameterName) {
      result = decodeURIComponent(tmp[1])
    };
  }
  return result;
}


function fillMangas(genre) {
  // Mettre en gras l'element dans la navbar a gauche qui correspond à la page actuelle
  const linkMenu = document.getElementById(genre);
  if (linkMenu) {
    linkMenu.style.fontWeight = "bold";
  }

  // Remplissage de la page
  const parent = document.getElementById('parent');
  const currentData = mangas.filter(manga => manga.category === genre);

  // Construction des elements à afficher
  currentData.forEach((manga, index) => {
    const newDiv = document.createElement('div');
    newDiv.setAttribute('class', index % 5 == 0 ? 'manga large' : 'manga');

    // Construction de la div pour la date
    const newDateDiv = document.createElement('div');
    newDateDiv.setAttribute('class', 'date');
    newDateDiv.innerHTML = `<span>${manga.category.substring(0, 1).toUpperCase() + manga.category.substring(1)}</span>`;

    // Construction de la div pour le titre
    const newTitreDiv = document.createElement('div');
    newTitreDiv.setAttribute('class', 'titre');
    // Construction de la sous-div pour le titre
    const newParentTitreDiv = document.createElement('div');
    newParentTitreDiv.setAttribute('class', 'parent-titre');
    newParentTitreDiv.innerHTML = `<span>${manga.title}</span>`;
    newTitreDiv.appendChild(newParentTitreDiv);

    // Construction de la div pour l'image
    const newImageDiv = document.createElement('div');
    newImageDiv.setAttribute('class', 'image');
    newImageDiv.innerHTML = `<img src="${manga.path_image}" />`;

    // Construction de la div pour la description
    const newDescriptionDiv = document.createElement('div');
    newDescriptionDiv.setAttribute('class', 'description');
    newDescriptionDiv.innerHTML = `<span>${manga.description}</span>`;

    // Ajout des 3 div dans la div principale
    newDiv.appendChild(newDateDiv);
    newDiv.appendChild(newTitreDiv);
    newDiv.appendChild(newImageDiv);
    newDiv.appendChild(newDescriptionDiv);

    // Ajout de la fonction sur la div lor du click
    newDiv.onclick = () => {
      let searchParams = document.location.search;
      const titleFormatted = manga.title;
      if (searchParams.includes('manga')) {
        const search = searchParams.split('&')[0];
        document.location.search = search + `&manga=${titleFormatted}`;
      } else {
        document.location.search += `&manga=${titleFormatted}`;
      }
    }

    // Ajout de la div principal au parent
    parent.appendChild(newDiv);
  })
}

function fillItems(manga, genre) {
  // Mettre en gras l'element dans la navbar a gauche qui correspond à la page actuelle
  const linkMenu = document.getElementById(genre);
  if (linkMenu) {
    linkMenu.style.fontWeight = "bold";
  }

  // Remplissage de la page
  const parent = document.getElementById('parent');
  const currentData = items.filter(item => item.category === genre && item.manga == manga);

  // Construction des elements à afficher
  currentData.forEach((item, index) => {
    const newDiv = document.createElement('div');
    newDiv.setAttribute('class', 'item');

    // Construction de la div pour la date
    const newDateDiv = document.createElement('div');
    newDateDiv.setAttribute('class', 'date');
    newDateDiv.innerHTML = `<span>${item.manga}</span>`;

    // Construction de la div pour l'image
    const newImageDiv = document.createElement('div');
    newImageDiv.setAttribute('class', 'image');
    newImageDiv.innerHTML = `<img src="${item.path_image}" />`;

    // Construction de la div pour la description
    const newDescriptionDiv = document.createElement('div');
    newDescriptionDiv.setAttribute('class', 'description');
    newDescriptionDiv.innerHTML = `<span>${item.description}</span>`;

    // Construction de la div pour les actions (ajouter ou retirer)
    const newActionsDiv = document.createElement('div');
    newActionsDiv.setAttribute('class', 'action');
    // Construction de la sous-div des actions
    const newParentActionsDiv = document.createElement('div');
    newParentActionsDiv.setAttribute('class', 'parent-action');
    newParentActionsDiv.innerHTML = '<img class="minus" src="./images/minus.svg" /><span class="amount">0</span><img class="plus" src="./images/plus.svg" />';
    newActionsDiv.appendChild(newParentActionsDiv)

    // Ajout des 3 div dans la div principale
    newDiv.appendChild(newDateDiv);
    newDiv.appendChild(newImageDiv);
    newDiv.appendChild(newDescriptionDiv);
    newDiv.appendChild(newActionsDiv);

    // Ajout de la div principal au parent
    parent.appendChild(newDiv);
  })
}: