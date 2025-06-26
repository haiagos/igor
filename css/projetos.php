<?php
require_once 'functions/project_functions.php';
$projetos = carregarProjetos();
include 'partials/header.php'; 
?>

<main>
    <!-- Seção de Introdução -->
    <section class="intro-portfolio py-5 bg-light">
        <div class="container text-center fade-in">
            <h1 class="display-4 mb-4">Nossos Projetos</h1>
            <p class="lead">Explore nossa coleção de projetos arquitetônicos, onde cada design conta uma história única de inovação, funcionalidade e beleza.</p>
        </div>
    </section>

    <!-- Seção Residencial -->
    <section class="featured-section py-5" id="projetos-residenciais">
        <div class="container">
            <h2 class="text-center mb-5 fade-in" style="text-transform: uppercase; letter-spacing: 2px; font-weight: 600;">Projetos Residenciais</h2>
            <div class="row g-4">
                <?php imprimirProjetosResidenciais($projetos); ?>
            </div>
        </div>
    </section>

    <!-- Seção Design de Interiores -->
    <section class="featured-section py-5 bg-light" id="design-interiores">
        <div class="container">
            <h2 class="text-center mb-5" style="text-transform: uppercase; letter-spacing: 2px; font-weight: 600;">Design de Interiores</h2>
            <div class="row g-4">
                <?php imprimirProjetosInteriores($projetos); ?>
            </div>
        </div>
    </section>

    <!-- Seção Projetos Minimalistas -->
    <section class="featured-section py-5" id="projetos-minimalistas">
        <div class="container">
            <h2 class="text-center mb-5 fade-in" style="text-transform: uppercase; letter-spacing: 2px; font-weight: 600;">Projetos Minimalistas</h2>
            <?php imprimirProjetosMinimalistas($projetos); ?>
        </div>
    </section>

    <!-- Seção Projetos Modernos -->
    <section class="featured-section py-5 bg-light" id="projetos-modernos">
        <div class="container">
            <h2 class="text-center mb-5 fade-in" style="text-transform: uppercase; letter-spacing: 2px; font-weight: 600;">Projetos Modernos</h2>
            <div class="row g-4">
                <?php imprimirProjetosModernos($projetos); ?>
            </div>
        </div>
    </section>

    <!-- Galeria Completa -->
    <section class="gallery-section py-5" id="galeria">
        <div class="container">
            <h2 class="text-center mb-5 fade-in" style="text-transform: uppercase; letter-spacing: 2px; font-weight: 600; color: #4b4237ff;">Galeria Completa</h2>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">
                <?php imprimirGaleria($projetos); ?>
            </div>
        </div>
    </section>

    <!-- Modal para visualização das imagens -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-transparent border-0">
                <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
                <img src="" class="img-fluid" id="modalImage" alt="Projeto em destaque">
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <section class="cta-section py-5 bg-light">
        <div class="container text-center">
            <h2 class="mb-4 fade-in" style="transition-delay: 0.2s">Vamos Criar Seu Projeto?</h2>
            <p class="lead mb-4 fade-in" style="transition-delay: 0.4s">Entre em contato conosco e transforme seus sonhos em realidade.</p>
            <a href="contato.php" class="btn btn-lg px-5 cta-button fade-in" style="transition-delay: 0.6s">Fale Conosco</a>
        </div>
    </section>
</main>

<!-- Botão flutuante do Instagram -->
<a href="https://www.instagram.com/igorsoglia.engenharia?igsh=NTd0Y3FieGI3MmFt&utm_source=qr" target="_blank" rel="noopener" aria-label="Siga-nos no Instagram" class="instagram-float">
    <i class="fab fa-instagram"></i>
</a>

<?php include 'partials/footer.php'; ?>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<script src="JS/gallery.js"></script>
<script src="JS/fade-animation.js"></script>
