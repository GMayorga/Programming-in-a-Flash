/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
    if (!e.target.matches('.dropbtn')) {
        var myDropdown = document.getElementById("myDropdown");
        if (myDropdown.classList.contains('show')) {
            myDropdown.classList.remove('show');
        }
    }
}

function showgroup(l) {
    var i;
    var closeit;
    var thebutton;

    var divl = document.getElementById('div' + l);
    thebutton = document.getElementById('toggle' + l);
    if (divl.style.display == 'none') {
        divl.style.display = 'block';
        thebutton.value = 'hide';
    } else {
        divl.style.display = 'none';
        thebutton.value = 'show';
    }
}

function showonlygroup(g) {
    var i;
    var closeit;
    var thebutton;

    for (i = 1; i <= 1; i++) {
        if (i != g) {
            closeit = document.getElementById('divg' + i);
            closeit.style.display = 'none';
            thebutton = document.getElementById('toggleg' + i);
            thebutton.value = '+';
        }
    }

    var divg = document.getElementById('divg' + g);
    thebutton = document.getElementById('toggleg' + g);
    if (divg.style.display == 'none') {
        divg.style.display = 'block';
        thebutton.value = '-';
    } else {
        divg.style.display = 'none';
        thebutton.value = '+';
    }
}