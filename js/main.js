
window.addEventListener('DOMContentLoaded', async () => {

    let response = await fetch('./getMenu.php', {
        method: 'GET',
        // headers: {
        //   'Content-Type': 'application/json;charset=utf-8'
        // },
    });

    response = await response.json();

    let classes = document.getElementsByClassName('menu__elem');

    for (let elem of response) {

        console.log(elem)

        let template = `<div class="elem__meal meal" data-id="${elem.id}"><div class="meal__name">${elem.name}</div><div class="meal__anim"></div><div class="meal__desc">${elem.description}</div><div class="meal__weight"><span class="meal__weight_value">${elem.weight}</span>г</div><div class="meal__price"><span class="meal__price_value">${elem.price}</span>₽</div></div>`;

        classes[elem.type].getElementsByClassName('elem__content')[0].innerHTML += template;
    }

});
