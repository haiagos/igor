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




</section>
    </main>
<?php include 'partials/footer.php'; ?>
''