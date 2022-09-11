let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
let searchBtn = document.querySelector(".bx-search");

closeBtn.addEventListener("click", () => {
    sidebar.classList.toggle("open");
    menuBtnChange();// Chamando a função
});

searchBtn.addEventListener("click", () => { // Menu abre quando clica no botão de pesquisa 
    sidebar.classList.toggle("open");
    menuBtnChange(); // Chamando a função
});

// Função para mudar o icone do botão do menu 
function menuBtnChange() {
    if (sidebar.classList.contains("open")) {
        closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
    } else {
        closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");//replacing the iocns class
    }
}


// Navegar entre as divs
function tableShowSide(a, b, c) {
    let menu = document.getElementById("menu")
    let len = menu.childElementCount;

    console.log(len)
    closeall();

    for (i = 1; i < len; i++) {
        menu.children[i].onclick = function () {
            closeall();
            all.children[this.id].style.display = "block";
        }
    }

    function closeall() {
        for (i = 0; i < all.childElementCount; i++) {
            all.children[i].style.display = "none";
        }
    }

    menu.children[c].click();
}

tableShowSide("menu", "all", "dash");

// Função para pesquisar as opções do menu
function searchMenu() {
    let input, filter, ul, li, a, i;
    input = document.getElementById("txtPesquisarMenu");
    filter = input.value.toUpperCase();
    ul = document.getElementById("menu");
    li = ul.getElementsByTagName("li");

    // Loop que percorre todos os itens da lista e esconde os que não correspondem com a opção pesquisada
    for (i = 1; i < li.length; i++) {
        span = li[i].getElementsByTagName("span")[0];
        if (span.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}