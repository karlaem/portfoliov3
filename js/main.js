// change background color
function myFunction() {
    var element = document.body;
    element.classList.toggle("dark-mode");
}

function myFunction2() {
    var elements2 = document.getElementsByClassName("bodyDark");
    for (i = 0; i < elements2.length; i++) {
        elements2[i].classList.toggle('light-mode');
    }
}
