
window.addEventListener('DOMContentLoaded', async () => {

    let response = await fetch('./getMenu.php', {
        method: 'GET',
    });

    response = await response.json();

    let classes = document.getElementsByClassName('menu__elem');

    for (let elem of response) {

        let template = `
        <div class="elem__meal elem__meal_admin meal" data-id="${elem.id}">
                    <form action="mealAction.php" method="post">
                        <input class="meal__name input" value="${elem.name}" name="name"></input>
                        <input class="meal__desc input" value="${elem.description}" name="descr"></input>
                        <input class="meal__weight input" value="${elem.weight}" name="weight"></input>
                        <input class="meal__price input" value="${elem.price}" name="price"></input>
                        <input type="hidden" name="id" value="${elem.id}" />
                        <div class="buttonFlexer">
                            <button type="submit" class="button button_update" name="update">Сохранить</button>
                            <button type="submit" class="button button_delete" name="delete">Удалить</button>
                        </div>
                    </form>
                </div>`;

        classes[elem.type].getElementsByClassName('elem__content')[0].innerHTML += template;
    }


    let selects = document.getElementsByClassName('list__elem');
    for (let elem of selects) {
        elem.addEventListener('click', () => {
            document.getElementsByClassName('list__preview')[0].innerHTML = elem.innerHTML;
            document.getElementById('newHiddenInput').value = elem.dataset.type;
        });
    }

});
