
function tableShowSide(a, b, c) {

    len = menu.childElementCount;
    console.log(len)

    closeall();

    for (i = 0; i < len; i++) {
        menu.children[i].onclick = function () {
            closeall();
            all.children[this.id].style.display = "block";
        }
    }
    console.log(i)

    function closeall() {
        for (i = 0; i < all.childElementCount; i++) {
            all.children[i].style.display = "none";
        }
    }

    menu.children[c].click();
}

tableShowSide("menu", "all", "user");

