// Ajuste dynamiquement la hauteur de colonnes d'après le contenu
function heightUniformizer(className) {
    let maxHeight = 0;
    document.querySelectorAll(`.${className}`).forEach(el => {
        el.style.height = "auto"; // Réinitialiser avant de recalculer
        maxHeight = Math.max(maxHeight, el.offsetHeight);
    });
    document.querySelectorAll(`.${className}`).forEach(el => {
        el.style.height = `${maxHeight}px`; // Appliquer la plus grande hauteur
    });
}
// Rendre la fonction accessible globalement
window.heightUniformizer = heightUniformizer;

