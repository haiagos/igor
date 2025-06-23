<?php include 'partials/header.php'; ?>
<main>
 
    <!-- Conteúdo da página de projetos -->
    <section class="projects-tab-section py-5">
        <div class="container">
            <h2 class="text-center mb-4">Meus Projetos</h2>
            <ul class="nav nav-tabs justify-content-center mb-4" id="projectsTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="grid-tab" data-bs-toggle="tab" data-bs-target="#grid" type="button" role="tab">Grade</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="carousel-tab" data-bs-toggle="tab" data-bs-target="#carousel" type="button" role="tab">Carrossel</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="list-tab" data-bs-toggle="tab" data-bs-target="#list" type="button" role="tab">Lista</button>
                </li>
            </ul>
            <div class="tab-content" id="projectsTabContent">
                <div class="tab-pane fade show active" id="grid" role="tabpanel">
                    <div class="row">
                        <!-- Grid View -->
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <img src="img/primeira apresentação.jpeg" class="card-img-top" alt="Projeto 1">
                                <div class="card-body">
                                    <h5 class="card-title">Projeto 1</h5>
                                    <p class="card-text">Descrição do produto ou projeto 1.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <img src="img/WhatsApp Image 2025-06-12 at 09.37.11.jpeg" class="card-img-top" alt="Projeto 2">
                                <div class="card-body">
                                    <h5 class="card-title">Projeto 2</h5>
                                    <p class="card-text">Descrição do produto ou projeto 2.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <img src="img/WhatsApp Image 2025-06-12 at 09.37.12.jpeg" class="card-img-top" alt="Projeto 3">
                                <div class="card-body">
                                    <h5 class="card-title">Projeto 3</h5>
                                    <p class="card-text">Descrição do produto ou projeto 3.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="carousel" role="tabpanel">
                    <!-- Carousel View -->
                    <div id="projectsCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/primeira apresentação.jpeg" class="d-block w-100" alt="Projeto 1">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Projeto 1</h5>
                                    <p>Descrição do produto ou projeto 1.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/WhatsApp Image 2025-06-12 at 09.37.11.jpeg" class="d-block w-100" alt="Projeto 2">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Projeto 2</h5>
                                    <p>Descrição do produto ou projeto 2.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/WhatsApp Image 2025-06-12 at 09.37.12.jpeg" class="d-block w-100" alt="Projeto 3">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Projeto 3</h5>
                                    <p>Descrição do produto ou projeto 3.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#projectsCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#projectsCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Próximo</span>
                        </button>
                    </div>
                </div>
                <div class="tab-pane fade" id="list" role="tabpanel">
                    <!-- List View -->
                    <div class="list-group">
                        <div class="list-group-item d-flex align-items-center">
                            <img src="img/primeira apresentação.jpeg" alt="Projeto 1" class="me-3" style="width:100px; height:auto;">
                            <div>
                                <h5 class="mb-1">Projeto 1</h5>
                                <p class="mb-1">Descrição do produto ou projeto 1.</p>
                            </div>
                        </div>
                        <div class="list-group-item d-flex align-items-center">
                            <img src="img/WhatsApp Image 2025-06-12 at 09.37.11.jpeg" alt="Projeto 2" class="me-3" style="width:100px; height:auto;">
                            <div>
                                <h5 class="mb-1">Projeto 2</h5>
                                <p class="mb-1">Descrição do produto ou projeto 2.</p>
                            </div>
                        </div>
                        <div class="list-group-item d-flex align-items-center">
                            <img src="img/WhatsApp Image 2025-06-12 at 09.37.12.jpeg" alt="Projeto 3" class="me-3" style="width:100px; height:auto;">
                            <div>
                                <h5 class="mb-1">Projeto 3</h5>
                                <p class="mb-1">Descrição do produto ou projeto 3.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="project-detail-section py-5">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-md-6">
                    <h3>Projeto Detalhado 1</h3>
                    <p>Descrição detalhada do projeto 1. Aqui você pode destacar tecnologias usadas, funcionalidades e resultados alcançados.</p>
                </div>
                <div class="col-md-6">
                    <img src="img/primeira apresentação.jpeg" class="img-fluid rounded" alt="Projeto Detalhado 1">
                </div>
            </div>
            <div class="row align-items-center mb-5">
                <div class="col-md-6 order-md-2">
                    <h3>Projeto Detalhado 2</h3>
                    <p>Descrição detalhada do projeto 2. Destaque características, desafios superados e benefícios para o cliente.</p>
                </div>
                <div class="col-md-6 order-md-1">
                    <img src="img/WhatsApp Image 2025-06-12 at 09.37.11.jpeg" class="img-fluid rounded" alt="Projeto Detalhado 2">
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h3>Projeto Detalhado 3</h3>
                    <p>Descrição detalhada do projeto 3. Fale sobre design, usabilidade e resultados obtidos.</p>
                </div>
                <div class="col-md-6">
                    <img src="img/WhatsApp Image 2025-06-12 at 09.37.12.jpeg" class="img-fluid rounded" alt="Projeto Detalhado 3">
                </div>
            </div>
        </div>
    </section>

    <section class="gallery-section py-5">
        <div class="container">
            <h2 class="text-center mb-4">Galeria de Fotos</h2>
            <div class="row row-cols-2 row-cols-sm-4 row-cols-md-6 row-cols-lg-8 g-2">
                <div class="col"><img src="img/banner.jpeg" class="gallery-thumb-square" data-src="img/banner.jpeg" alt="Foto 1"></div>
                <div class="col"><img src="img/logo.png" class="gallery-thumb-square" data-src="img/logo.png" alt="Foto 2"></div>
                <div class="col"><img src="img/primeira apresentação.jpeg" class="gallery-thumb-square" data-src="img/primeira apresentação.jpeg" alt="Foto 3"></div>
                <div class="col"><img src="img/WhatsApp Image 2025-06-04 at 19.29.41.jpeg" class="gallery-thumb-square" data-src="img/WhatsApp Image 2025-06-04 at 19.29.41.jpeg" alt="Foto 4"></div>
                <div class="col"><img src="img/WhatsApp Image 2025-06-12 at 09.37.11.jpeg" class="gallery-thumb-square" data-src="img/WhatsApp Image 2025-06-12 at 09.37.11.jpeg" alt="Foto 5"></div>
                <div class="col"><img src="img/WhatsApp Image 2025-06-12 at 09.37.12.jpeg" class="gallery-thumb-square" data-src="img/WhatsApp Image 2025-06-12 at 09.37.12.jpeg" alt="Foto 6"></div>
                <div class="col"><img src="img/WhatsApp Image 2025-06-04 at 19.29.32.jpeg" class="gallery-thumb-square" data-src="img/WhatsApp Image 2025-06-04 at 19.29.32.jpeg" alt="Foto 7"></div>
                <div class="col"><img src="img/WhatsApp Image 2025-06-04 at 19.27.42 (2).jpeg" class="gallery-thumb-square" data-src="img/WhatsApp Image 2025-06-04 at 19.27.42 (2).jpeg" alt="Foto 8"></div>
                <div class="col"><img src="img/WhatsApp Image 2025-06-12 at 09.37.11 (1).jpeg" class="gallery-thumb-square" data-src="img/WhatsApp Image 2025-06-12 at 09.37.11 (1).jpeg" alt="Foto 9"></div>
                <div class="col"><img src="img/WhatsApp Image 2025-06-12 at 09.37.12 (2).jpeg" class="gallery-thumb-square" data-src="img/WhatsApp Image 2025-06-12 at 09.37.12 (2).jpeg" alt="Foto 10"></div>
                <div class="col"><img src="img/WhatsApp Image 2025-06-04 at 19.29.32 (3).jpeg" class="gallery-thumb-square" data-src="img/WhatsApp Image 2025-06-04 at 19.29.32 (3).jpeg" alt="Foto 11"></div>
                <div class="col"><img src="img/WhatsApp Image 2025-06-12 at 09.37.12 (3).jpeg" class="gallery-thumb-square" data-src="img/WhatsApp Image 2025-06-12 at 09.37.12 (3).jpeg" alt="Foto 12"></div>
            </div>
        </div>
        <!-- Lightbox Modal -->
        <div class="modal fade" id="lightboxModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content bg-transparent border-0 d-flex justify-content-center align-items-center position-relative p-0">
                    <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    <img src="" id="lightboxImage" class="modal-img rounded" alt="">
                </div>
            </div>
        </div>
    </section>
</main>
<?php include 'partials/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<script>
    // Script para abrir a imagem em tamanho grande no modal
    document.querySelectorAll('.gallery-thumb-square').forEach(item => {
        item.addEventListener('click', event => {
            const src = item.getAttribute('data-src');
            document.getElementById('lightboxImage').setAttribute('src', src);
            const myModal = new bootstrap.Modal(document.getElementById('lightboxModal'));
            myModal.show();
        });
    });
</script>
