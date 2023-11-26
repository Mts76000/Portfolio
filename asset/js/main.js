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

let switchToggles = document.querySelectorAll(".switch");
let header = document.querySelector("#header");

switchToggles.forEach(function (switchToggle) {
    switchToggle.addEventListener("change", function () {
        header.classList.toggle("active");
    });
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
document.addEventListener('DOMContentLoaded', function () {
    document.body.focus();
    AOS.init({
        once: true,
        // ... autres options AOS si nécessaire
    });

    var notification = document.getElementById('notification');

    setTimeout(function () {
        notification.classList.add('visible');
    }, 1000);

    setTimeout(function () {
        notification.classList.remove('visible');
    }, 7500);

    // Gestionnaire d'événements pour les touches du clavier
    document.addEventListener('keydown', function (event) {
        // Détermine quelle touche a été pressée
        switch (event.key) {
            case 'ArrowUp':
                // Défilement vers le haut ou autre logique pour la section précédente
                window.location.href = '#header';
                break;
            case 'ArrowDown':
                // Défilement vers le bas ou autre logique pour la section suivante
                window.location.href = '#info';
                break;
            // Ajoutez des cas pour d'autres touches si nécessaire
        }
    });

    // Gestionnaire d'événements pour les changements de section
    document.addEventListener('scroll', function () {
        var currentSection = getCurrentSection();
        if (currentSection === 'header' || currentSection === 'info') {
            notification.classList.remove('visible');
        } else {
            notification.classList.add('visible');
        }
    });

    // Fonction pour obtenir la section actuelle
    function getCurrentSection() {
        var sections = document.querySelectorAll('section');
        var currentSection = 'header';
        var threshold = window.innerHeight / 2;

        sections.forEach(function (section) {
            var rect = section.getBoundingClientRect();
            if (rect.top <= threshold && rect.bottom >= threshold) {
                currentSection = section.id;
            }
        });

        return currentSection;
    }
});


var sidenav = document.getElementById("mySidenav");
var openBtn = document.getElementById("openBtn");
var closeBtn = document.getElementById("closeBtn");

openBtn.onclick = openNav;
closeBtn.onclick = closeNav;

/* Set the width of the side navigation to 250px */
function openNav() {
    sidenav.classList.add("active");
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    sidenav.classList.remove("active");
}
