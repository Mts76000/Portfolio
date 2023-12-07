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

// Toggle pour les sections
let switchToggles = document.querySelectorAll(".switch");
let sections = document.querySelectorAll(".section"); // Ajoutez la classe .section à toutes les sections que vous souhaitez affecter

switchToggles.forEach(function (switchToggle) {
    switchToggle.addEventListener("change", function () {
        sections.forEach(function (section) {
            section.classList.toggle("active");
        });
        // Retirer la notification lorsqu'on change de section
        var notification = document.getElementById('notification');
        notification.classList.remove('visible');
    });
});

// Fonction pour basculer le mode sombre/clair
function toggleMode() {
    var modeSwitch = document.getElementById('modeSwitch');
    var iconContainer = document.querySelector('.icon-container');

    // Mettez à jour l'icône pour tous les modes
    if (modeSwitch.checked) {
        // Mode sombre, utilisez l'icône de la lune
        iconContainer.innerHTML = '<i class="fas fa-moon"></i>';
    } else {
        // Mode clair, utilisez l'icône du soleil
        iconContainer.innerHTML = '<i class="fas fa-sun"></i>';
    }

    // Mettez à jour l'état de tous les bascules en fonction du mode actuel
    let switchToggles = document.querySelectorAll(".switch");
    switchToggles.forEach(function (switchToggle) {
        switchToggle.checked = modeSwitch.checked;
    });
}

// Ajoutez un gestionnaire d'événements pour le changement de mode
var modeSwitch = document.getElementById('modeSwitch');
modeSwitch.addEventListener('change', toggleMode);


// Initialisation après le chargement du document
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

    // Gestionnaire d'événements pour les changements de section
    document.addEventListener('scroll', function () {
        var currentSection = getCurrentSection();
        if (currentSection === 'header' || currentSection === 'info' || currentSection === 'work' || currentSection === 'contact') {
            notification.classList.remove('visible');
        } else {
            notification.classList.add('visible');
        }
    });

    let currentSectionIndex = 0;
    const numberOfSections = 5;

    document.addEventListener('keydown', function (event) {
        const isFormElement = document.activeElement.tagName.toLowerCase() === 'input' ||
            document.activeElement.tagName.toLowerCase() === 'textarea';

        if (!isFormElement) {
            switch (event.key) {
                case 'ArrowUp':
                    currentSectionIndex = Math.max(0, currentSectionIndex - 1);
                    break;
                case 'ArrowDown':
                    currentSectionIndex = Math.min(currentSectionIndex + 1, numberOfSections - 1);
                    break;
                case 'Enter':
                    window.location.href = '#footer';
                    break;
            }

            const sectionIds = ['#header', '#info', '#work', '#contact', '#footer'];
            window.location.href = sectionIds[currentSectionIndex];
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

document.addEventListener("DOMContentLoaded", function () {
    const openBtns = document.querySelectorAll('.openBtn');
    const closeBtns = document.querySelectorAll('.closeBtn');
    const sidenav = document.querySelector('#mySidenav');
    const body = document.querySelector('body');

    openBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            sidenav.classList.add('active');
            body.classList.add('no-scroll'); // Ajouter la classe pour désactiver le défilement
        });
    });

    closeBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            sidenav.classList.remove('active');
            body.classList.remove('no-scroll'); // Retirer la classe pour réactiver le défilement
        });
    });

    // Fermer le menu lorsqu'un lien est cliqué
    const navLinks = document.querySelectorAll('.sidenav a');
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            sidenav.classList.remove('active');
            body.classList.remove('no-scroll'); // Retirer la classe pour réactiver le défilement
        });
    });
});