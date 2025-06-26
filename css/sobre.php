<?php include 'partials/header.php'; ?>

<style>
    .fade-in {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }
    
    .fade-in.visible {
        opacity: 1;
        transform: translateY(0);
    }
    
    .project-section {
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
    }
    
    .project-section:hover {
        transform: translateY(-5px);
    }
    
    .style-card {
        background: white;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        height: 100%;
    }
    
    .style-card:hover {
        box-shadow: 0 15px 40px rgba(0,0,0,0.2);
    }
    
    .style-image {
        border-radius: 10px;
        transition: all 0.3s ease;
    }
    
    .style-image:hover {
        transform: scale(1.02);
    }
    
    .feature-list li {
        padding: 12px 0;
        border-bottom: 1px solid rgba(0,0,0,0.05);
    }
    
    .section-divider {
        height: 3px;
        width: 60px;
        background: #4a4a4a;
        margin: 20px auto;
    }

    /* Estilo para o botão flutuante do Instagram */
    .instagram-float {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #4a4a4a;
        color: white;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        transition: background-color 0.3s ease;
        z-index: 1000;
    }
    
    .instagram-float:hover {
        background-color: #333;
    }

    .instagram-float i {
        font-size: 24px;
    }
</style>

<main class="py-5">
        <div class="container">
            <div class="text-center mb-5 fade-in">
                <h1 class="display-4" style="text-transform: uppercase; letter-spacing: 2px; font-weight: 600; color: #333;">
                    Nossos Estilos de Projetos
                </h1>
                <div class="section-divider"></div>
                <p class="lead" style="color: #666; max-width: 800px; margin: 0 auto;">
                    Descubra o estilo arquitetônico que melhor representa você e sua personalidade
                </p>
            </div>

            <!-- Estilo Minimalista -->
            <section class="project-section mb-5 fade-in">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="p-3">
                            <img src="img/minimalista1.jpeg" class="img-fluid style-image shadow-lg" alt="Casa Minimalista">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="style-card p-5" style="background-color: var(--taupe); color: white;">
                            <h2 style="text-transform: uppercase; letter-spacing: 2px; font-weight: 600; color: white;">
                                Estilo Minimalista
                            </h2>
                            <div class="section-divider" style="background: white;"></div>
                            <p class="mb-4" style="color: var(--alabaster); line-height: 1.8;">
                                O estilo minimalista é caracterizado por sua simplicidade e elegância. 
                                Cada elemento é cuidadosamente escolhido para criar um ambiente harmonioso 
                                e sofisticado.
                            </p>
                            <ul class="list-unstyled feature-list">
                                <li class="mb-3" style="border-bottom-color: rgba(255,255,255,0.1);"><i class="fas fa-check me-2" style="color: var(--alabaster);"></i>Linhas retas e limpas</li>
                                <li class="mb-3" style="border-bottom-color: rgba(255,255,255,0.1);"><i class="fas fa-check me-2" style="color: var(--alabaster);"></i>Espaços amplos e bem iluminados</li>
                                <li class="mb-3" style="border-bottom-color: rgba(255,255,255,0.1);"><i class="fas fa-check me-2" style="color: var(--alabaster);"></i>Paleta de cores neutras</li>
                                <li class="mb-3" style="border-bottom-color: rgba(255,255,255,0.1);"><i class="fas fa-check me-2" style="color: var(--alabaster);"></i>Materiais nobres e naturais</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Estilo Moderno -->
            <section class="project-section mb-5 fade-in" style="background: linear-gradient(45deg, #f8f9fa, #ffffff);">
                <div class="container py-5">
                    <div class="row align-items-center">
                        <div class="col-md-6 order-md-2">
                            <div class="p-3">
                                <img src="img/moderno1.jpeg" class="img-fluid style-image shadow-lg" alt="Casa Moderna">
                            </div>
                        </div>
                        <div class="col-md-6 order-md-1">
                            <div class="style-card p-5">
                                <h2 style="text-transform: uppercase; letter-spacing: 2px; font-weight: 600; color: #333;">
                                    Estilo Moderno
                                </h2>
                                <div class="section-divider" style="margin: 20px 0;"></div>
                                <p class="mb-4" style="color: #666; line-height: 1.8;">
                                    A arquitetura moderna é a perfeita fusão entre funcionalidade e design contemporâneo,
                                    criando espaços que atendem às demandas do estilo de vida atual.
                                </p>
                                <ul class="list-unstyled feature-list">
                                    <li class="mb-3"><i class="fas fa-check me-2" style="color: #4a4a4a;"></i>Integração entre ambientes</li>
                                    <li class="mb-3"><i class="fas fa-check me-2" style="color: #4a4a4a;"></i>Grandes janelas e pé-direito alto</li>
                                    <li class="mb-3"><i class="fas fa-check me-2" style="color: #4a4a4a;"></i>Tecnologia e sustentabilidade</li>
                                    <li class="mb-3"><i class="fas fa-check me-2" style="color: #4a4a4a;"></i>Mistura de texturas e materiais</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Estilo Residencial Clássico -->
            <section class="project-section mb-5 fade-in" style="background-color: var(--taupe-gray);">
                <div class="container py-5">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="p-3">
                                <img src="img/RESIDENCIA1.jpeg" class="img-fluid style-image shadow-lg" alt="Casa Residencial Clássica">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="style-card p-5" style="background-color: var(--taupe-gray); color: white;">
                            <h2 style="text-transform: uppercase; letter-spacing: 2px; font-weight: 600; color: white;">
                                Residencial Clássico
                            </h2>
                            <div class="section-divider" style="margin: 20px 0; background: white;"></div>
                            <p class="mb-4" style="color: var(--alabaster); line-height: 1.8;">
                                O estilo residencial clássico é a escolha perfeita para quem busca um ambiente
                                sofisticado e atemporal, com elementos que nunca saem de moda.
                            </p>
                            <ul class="list-unstyled feature-list">
                                <li class="mb-3" style="border-bottom-color: rgba(255,255,255,0.1);"><i class="fas fa-check me-2" style="color: var(--alabaster);"></i>Ambientes acolhedores e funcionais</li>
                                <li class="mb-3" style="border-bottom-color: rgba(255,255,255,0.1);"><i class="fas fa-check me-2" style="color: var(--alabaster);"></i>Distribuição tradicional dos espaços</li>
                                <li class="mb-3" style="border-bottom-color: rgba(255,255,255,0.1);"><i class="fas fa-check me-2" style="color: var(--alabaster);"></i>Acabamentos tradicionais e duráveis</li>
                                <li class="mb-3" style="border-bottom-color: rgba(255,255,255,0.1);"><i class="fas fa-check me-2" style="color: var(--alabaster);"></i>Áreas de convivência bem definidas</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Estilo Contemporâneo -->
            <section class="project-section mb-5 fade-in" style="background: linear-gradient(45deg, #f8f9fa, #ffffff);">
                <div class="container py-5">
                    <div class="row align-items-center">
                        <div class="col-md-6 order-md-2">
                            <div class="p-3">
                                <img src="img/moderno4.jpeg" class="img-fluid style-image shadow-lg" alt="Casa Contemporânea">
                            </div>
                        </div>
                        <div class="col-md-6 order-md-1">
                            <div class="style-card p-5">
                                <h2 style="text-transform: uppercase; letter-spacing: 2px; font-weight: 600; color: #333;">
                                    Estilo Contemporâneo
                                </h2>
                                <div class="section-divider" style="margin: 20px 0;"></div>
                                <p class="mb-4" style="color: #666; line-height: 1.8;">
                                    O design contemporâneo é a expressão máxima da modernidade, combinando
                                    diferentes influências e tendências atuais para criar espaços únicos.
                                </p>
                                <ul class="list-unstyled feature-list">
                                    <li class="mb-3"><i class="fas fa-check me-2" style="color: #4a4a4a;"></i>Formas geométricas marcantes</li>
                                    <li class="mb-3"><i class="fas fa-check me-2" style="color: #4a4a4a;"></i>Uso de materiais inovadores</li>
                                    <li class="mb-3"><i class="fas fa-check me-2" style="color: #4a4a4a;"></i>Elementos sustentáveis</li>
                                    <li class="mb-3"><i class="fas fa-check me-2" style="color: #4a4a4a;"></i>Design personalizado e único</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <section class="text-center py-5 fade-in" style="background-color: white;">
                <div class="container">
                    <div class="style-card p-5">
                        <h2 style="text-transform: uppercase; letter-spacing: 2px; font-weight: 600; color: #333;">
                            Vamos Criar Algo Incrível Juntos?
                        </h2>
                        <div class="section-divider"></div>
                        <p class="mb-4" style="color: #666; max-width: 800px; margin: 20px auto;">
                            Cada projeto é uma oportunidade única de transformar sonhos em realidade.
                            Entre em contato conosco e descubra como podemos fazer isso acontecer.
                        </p>
                        <a href="contato.php" class="btn btn-lg mt-3" style="background-color: #4a4a4a; color: white; text-transform: uppercase; letter-spacing: 1px; padding: 15px 40px; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='#333333'" onmouseout="this.style.backgroundColor='#4a4a4a'">
                            Fale Conosco <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Botão flutuante do Instagram -->
    <a href="https://www.instagram.com/igorsoglia.engenharia?igsh=NTd0Y3FieGI3MmFt&utm_source=qr" target="_blank" rel="noopener" aria-label="Siga-nos no Instagram" class="instagram-float">
        <i class="fab fa-instagram"></i>
    </a>

    <script>
        // Adiciona animação de fade-in aos elementos
        document.addEventListener('DOMContentLoaded', function() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, {
                threshold: 0.1
            });

            document.querySelectorAll('.fade-in').forEach((element) => {
                observer.observe(element);
            });
        });
    </script>

<?php include 'partials/footer.php'; ?>
