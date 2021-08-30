/*

    Script lié uniquement à l'accueil (affichage des news)

*/

// Même fonctionnement que le remplissage de la boutique (voir dans boutique.js)
function fillNews() {
    const parent = document.getElementById('parent');

    for (let index = 0; index < news.length; index++) {
        const element = news[index];

        const newDiv = document.createElement('div');
        newDiv.setAttribute('class', index % 5 == 0 ? 'news large' : 'news')

        const newDateDiv = document.createElement('div');
        newDateDiv.setAttribute('class', 'date')
        newDateDiv.innerHTML = `<span>${element.date}</span>`

        const newTitreDiv = document.createElement('div');
        newTitreDiv.setAttribute('class', 'titre')
        const newParentTitreDiv = document.createElement('div');
        newParentTitreDiv.setAttribute('class', 'parent-titre')
        newParentTitreDiv.innerHTML = `<span>${element.title}</span>`
        newTitreDiv.appendChild(newParentTitreDiv);

        const newImageDiv = document.createElement('div');
        newImageDiv.setAttribute('class', 'image');
        newImageDiv.innerHTML = `<img src="${element.path_image}" />`;

        const newDescriptionDiv = document.createElement('div');
        newDescriptionDiv.setAttribute('class', 'description');
        newDescriptionDiv.innerHTML = `<span>${element.description}</span>`;

        newDiv.appendChild(newDateDiv);
        newDiv.appendChild(newTitreDiv);
        newDiv.appendChild(newImageDiv);
        newDiv.appendChild(newDescriptionDiv);

        parent.appendChild(newDiv);
    }
}