<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Efeito de Profundidade</title>
    <style>
        body {
            margin: 0;
            overflow: hidden;
            background-color: #ffffff;
        }
        .layer {
            position: absolute;
        }
        img {
            position: absolute;
            width: 100px;
            height: 100px;
            transition: transform 0.8s ease-out; /* Adiciona transição suave */
        }
    </style>
</head>
<body>
    <div id="background">
        <!-- Adicione suas imagens aqui com posições iniciais diferentes -->
        <div class="layer" data-speed="1" style="top: 20%; left: 30%;"><img src="img/js.png" alt="Imagem 1"></div>
        <div class="layer" data-speed="1.5" style="top: 30%; left: 40%;"><img src="img/c++.png" alt="Imagem 2"></div>
        <div class="layer" data-speed="1" style="top: 50%; left: 50%;"><img src="img/json.png" alt="Imagem 3"></div>
        <!-- Continue adicionando até mais de 20 imagens com posições iniciais diferentes -->
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            let layers = document.querySelectorAll('.layer');
            let mouseX = 0;
            let mouseY = 0;
            let margin = 500; // Margem adicional em pixels

            document.addEventListener('mousemove', function(e) {
                mouseX = e.pageX - window.innerWidth / 2;
                mouseY = e.pageY - window.innerHeight / 2;
            });

            function animateLayers() {
                layers.forEach(function(layer) {
                    let speed = layer.getAttribute('data-speed');
                    let initialTop = parseFloat(layer.style.top);
                    let initialLeft = parseFloat(layer.style.left);
                    let img = layer.querySelector('img');

                    let margin = 800; // Aumentando a margem para 200 pixels
                    let targetX = (mouseX + margin) / (window.innerWidth + margin * 2) * (speed * 6);
                    let targetY = (mouseY + margin) / (window.innerHeight + margin * 2) * (speed * 6);


                    let currentTransform = img.style.transform.match(/translate\(([^px]+)px, ([^px]+)px\)/);
                    let currentX = currentTransform ? parseFloat(currentTransform[1]) : 0;
                    let currentY = currentTransform ? parseFloat(currentTransform[2]) : 0;

                    let newX = currentX + (targetX - currentX) * 0.3;
                    let newY = currentY + (targetY - currentY) * 0.3;

                    img.style.transform = `translate(${newX}px, ${newY}px)`;
                    layer.style.top = `calc(${initialTop}% + ${newY}px)`;
                    layer.style.left = `calc(${initialLeft}% + ${newX}px)`;
                });

                requestAnimationFrame(animateLayers);
            }

            animateLayers();
        });
    </script>
</body>
</html>
