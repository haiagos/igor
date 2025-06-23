<?php
/**
 * Página de Contato - Igor Soglia Arquitetura
 */

$page_title = "Contato";
$page_description = "Entre em contato com Igor Soglia para seu projeto de arquitetura e design de interiores. Atendimento em Atibaia-SP e região.";
include 'partials/header.php';
?>

<main>
<section class="section" style="margin-top: 2rem;">
    <div class="container">
        <div class="section-title">
            <h2>Entre em Contato</h2>
            <p>Vamos transformar seus sonhos em realidade. Fale conosco e inicie seu projeto</p>
        </div>
        
        <div class="contact-grid">            <!-- Formulário de Contato -->
            <div class="contact-form-container">
                <h3 class="section-heading">Envie sua Mensagem</h3>
                
                <form id="contact-form" onsubmit="submitContactForm(event)" class="contact-form">
                    <div class="form-group">
                        <label for="name">Nome Completo *</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">E-mail *</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Telefone</label>
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="(11) 99999-9999">
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Assunto *</label>
                        <select id="subject" name="subject" class="form-control" required>
                            <option value="">Selecione o assunto</option>
                            <option value="arquitetura">Projeto de Arquitetura</option>
                            <option value="interiores">Design de Interiores</option>
                            <option value="bim">Consultoria BIM</option>
                            <option value="reforma">Reforma/Ampliação</option>
                            <option value="orcamento">Solicitação de Orçamento</option>
                            <option value="outros">Outros</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Mensagem *</label>
                        <textarea id="message" name="message" class="form-control" rows="5" placeholder="Conte-nos sobre seu projeto, suas necessidades e expectativas..." required></textarea>
                    </div>
                    
                    <button type="submit" class="btn" style="width: 100%;">
                        <i class="fas fa-paper-plane" style="margin-right: 0.5rem;"></i>
                        Enviar Mensagem
                    </button>
                </form>
            </div>
              <!-- Informações de Contato -->
            <div class="contact-info-container">
                <h3 class="section-heading">Informações de Contato</h3>
                
                <div class="contact-info-card">
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-info-text">
                            <h5 class="contact-info-title">Telefone</h5>
                            <a href="tel:+5511995478832" class="contact-info-link">(11) 99547-8832</a>
                        </div>
                    </div>
                      <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-info-text">
                            <h5 class="contact-info-title">E-mail</h5>
                            <a href="mailto:contato@igorsoglia.com" class="contact-info-link">contato@igorsoglia.com</a>
                        </div>
                    </div>
                    
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-info-text">
                            <h5 class="contact-info-title">Localização</h5>
                            <p class="contact-info-text">Atibaia-SP e região</p>
                        </div>
                    </div>
                    
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <div class="contact-info-text">
                            <h5 class="contact-info-title">Instagram</h5>
                            <a href="https://instagram.com/igorsoglia.engenharia" target="_blank" class="contact-info-link">@igorsoglia.engenharia</a>
                        </div>
                    </div>
                </div>
                  <!-- Horário de Atendimento -->
                <div class="hours-card">
                    <h4 class="hours-title">
                        <i class="fas fa-clock hours-icon"></i>
                        Horário de Atendimento
                    </h4>
                    <div class="hours-content">
                        <p class="hours-item"><strong>Segunda a Sexta:</strong> 8h às 18h</p>
                        <p class="hours-item"><strong>Sábado:</strong> 8h às 12h</p>
                        <p class="hours-item"><strong>Domingo:</strong> Fechado</p>
                    </div>
                    <p class="hours-note">
                        * Atendimentos fora do horário comercial podem ser agendados previamente
                    </p>
                </div>
                  <!-- Área de Atuação -->
                <div class="service-area-card">
                    <h4 class="service-area-title">
                        <i class="fas fa-map service-area-icon"></i>
                        Área de Atuação
                    </h4>
                    <div class="service-area-content">
                        <p class="service-area-item"><strong>Base:</strong> Atibaia-SP</p>
                        <p class="service-area-item"><strong>Atendemos:</strong></p>
                        <ul class="service-area-list">
                            <li>Atibaia e região</li>
                            <li>Bragança Paulista</li>
                            <li>Itatiba</li>
                            <li>Jundiaí</li>
                            <li>Campinas</li>
                            <li>Grande São Paulo</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section bg-light">
    <div class="container">
        <div class="section-title">
            <h2>Por que Escolher Nossos Serviços?</h2>
            <p>Diferenciais que fazem a diferença no seu projeto</p>
        </div>
        
        <div class="cards-grid">
            <div class="card">
                <div class="card-icon">
                    <i class="fas fa-award"></i>
                </div>
                <h3>Experiência Comprovada</h3>
                <p>
                    Mais de 5 anos de experiência em Atibaia-SP e região, com dezenas de projetos 
                    realizados e clientes satisfeitos.
                </p>
            </div>
            
            <div class="card">
                <div class="card-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3>Compromisso Total</h3>
                <p>
                    Trabalhamos com responsabilidade, respeito, dedicação e pontualidade em todos 
                    os projetos, do início ao fim.
                </p>
            </div>
            
            <div class="card">
                <div class="card-icon">
                    <i class="fas fa-laptop"></i>
                </div>
                <h3>Tecnologia BIM</h3>
                <p>
                    Utilizamos as mais modernas tecnologias de projeto, incluindo plataforma BIM 
                    para maior precisão e eficiência.
                </p>
            </div>
            
            <div class="card">
                <div class="card-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <h3>Atendimento Personalizado</h3>
                <p>
                    Cada cliente é único e recebe atenção exclusiva. Desenvolvemos projetos 
                    personalizados para cada necessidade.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Processo de Atendimento</h2>
            <p>Como funciona nosso atendimento do primeiro contato à entrega do projeto</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-top: 3rem;">
            <div style="text-align: center; padding: 2rem;">
                <div style="width: 80px; height: 80px; background: var(--accent-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: white; font-size: 1.5rem; font-weight: bold;">1</div>
                <h4 style="margin-bottom: 1rem; color: var(--primary-color);">Primeiro Contato</h4>
                <p style="color: var(--text-light);">
                    Entre em contato conosco por telefone, e-mail ou formulário. Resposta garantida em até 24h.
                </p>
            </div>
            
            <div style="text-align: center; padding: 2rem;">
                <div style="width: 80px; height: 80px; background: var(--accent-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: white; font-size: 1.5rem; font-weight: bold;">2</div>
                <h4 style="margin-bottom: 1rem; color: var(--primary-color);">Reunião Inicial</h4>
                <p style="color: var(--text-light);">
                    Agendamos uma reunião para entender suas necessidades, desejos e orçamento disponível.
                </p>
            </div>
            
            <div style="text-align: center; padding: 2rem;">
                <div style="width: 80px; height: 80px; background: var(--accent-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: white; font-size: 1.5rem; font-weight: bold;">3</div>
                <h4 style="margin-bottom: 1rem; color: var(--primary-color);">Proposta</h4>
                <p style="color: var(--text-light);">
                    Elaboramos uma proposta detalhada com escopo, cronograma e investimento necessário.
                </p>
            </div>
            
            <div style="text-align: center; padding: 2rem;">
                <div style="width: 80px; height: 80px; background: var(--accent-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: white; font-size: 1.5rem; font-weight: bold;">4</div>
                <h4 style="margin-bottom: 1rem; color: var(--primary-color);">Desenvolvimento</h4>
                <p style="color: var(--text-light);">
                    Iniciamos o desenvolvimento do projeto com acompanhamento constante e apresentações periódicas.
                </p>
            </div>
        </div>
    </div>
</section>
    </main>
<?php include 'partials/footer.php'; ?>
''