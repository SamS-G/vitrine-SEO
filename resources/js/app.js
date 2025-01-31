import "bootstrap";

import.meta.glob([
    '../images/**',
    '../fonts/**',
]);

const elements = document.querySelectorAll('.nav-link');

elements.forEach(element => {
    element.addEventListener('mouseover', function () {
        this.classList.add('hovered');
    });

    element.addEventListener('mouseout', function () {
        this.classList.remove('hovered');
    });
});
