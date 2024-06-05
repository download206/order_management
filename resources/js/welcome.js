document.addEventListener("DOMContentLoaded", function() {
    const image = document.querySelector('.movable-image');
    const container = document.querySelector('.container');

    let mouseX = 0;
    let mouseY = 0;
    let posX = 0;
    let posY = 0;

    container.addEventListener('mousemove', function(e) {
        mouseX = e.clientX;
        mouseY = e.clientY;
    });

    function updatePosition() {
        const centerX = container.offsetWidth / 2;
        const centerY = container.offsetHeight / 2;

        const moveX = (mouseX - centerX) / 10;
        const moveY = (mouseY - centerY) / 10;

        posX += (moveX - posX) * 0.1;
        posY += (moveY - posY) * 0.1;

        image.style.transform = `translate(-50%, -50%) translate(${posX}px, ${posY}px)`;

        requestAnimationFrame(updatePosition);
    }

    updatePosition();
});
