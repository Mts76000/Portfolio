var spanElement = document.getElementById('changement');

spanElement.addEventListener('mouseover', function () {
    spanElement.classList.add('hide');
    setTimeout(function () {
        spanElement.innerText = 'student';
        spanElement.classList.remove('hide');
    }, 300); // Ajustez la durée de la transition ici
});

spanElement.addEventListener('mouseout', function () {
    spanElement.classList.add('hide');
    setTimeout(function () {
        spanElement.innerText = 'developer';
        spanElement.classList.remove('hide');
    }, 300); // Ajustez la durée de la transition ici
});

let switchToggle = document.querySelector(".switch");
let header = document.querySelector("#header");

switchToggle.addEventListener("change", function () {
    header.classList.toggle("active");
});

function toggleMode() {
    var modeSwitch = document.getElementById('modeSwitch');
    var iconContainer = document.querySelector('.icon-container');

    if (modeSwitch.checked) {
        // Mode sombre, utilisez l'icône de la lune
        iconContainer.innerHTML = '<i class="fas fa-moon"></i>';
    } else {
        // Mode clair, utilisez l'icône du soleil
        iconContainer.innerHTML = '<i class="fas fa-sun"></i>';
    }
}



