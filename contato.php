<?php
// Processamento do formulário de contato
$mensagem = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $telefone = htmlspecialchars($_POST['phone'] ?? '');
    $assunto = htmlspecialchars($_POST['subject'] ?? '');
    $mensagem_contato = htmlspecialchars($_POST['message'] ?? '');
    $preferencia = htmlspecialchars($_POST['contactPreference'] ?? '');

    // Aqui você pode enviar o e-mail ou salvar no banco de dados
    // Exemplo: apenas exibir mensagem de sucesso
    $mensagem = 'Mensagem enviada com sucesso!';
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Igorjean</title>
</head>
<body>
    <?php include 'partials/header.php'; ?>
    <main>
        <div class="container py-5 d-flex justify-content-center align-items-center" style="min-height: 80vh;">
            <div class="col-md-6">
                <div class="mb-4">
                    <h2 class="fw-semibold" style="color: #333; text-align: left;">Entre em Contato</h2>
                    <hr style="border-top: 2px solid #e0e0e0; width: 60px; margin-left: 0;">
                </div>
                <?php if ($mensagem): ?>
                    <div class="alert alert-success"> <?= $mensagem ?> </div>
                <?php endif; ?>
                <div class="card border-0 shadow-sm" style="background: #f8f9fa; border-radius: 18px;">
                    <div class="card-body p-4">
                        <form method="post" action="">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="name" class="form-label">Nome</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome" required style="border-radius: 8px;">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required style="border-radius: 8px;">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="phone" class="form-label">Telefone</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="(99) 99999-9999" required style="border-radius: 8px;">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="subject" class="form-label">Assunto</label>
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Assunto da mensagem" required style="border-radius: 8px;">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="message" class="form-label">Mensagem</label>
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Digite sua mensagem" required style="border-radius: 8px;"></textarea>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Preferência de Contato</label>
                                <select class="form-select" id="contactPreference" name="contactPreference" required style="border-radius: 8px;">
                                    <option value="">Selecione...</option>
                                    <option value="email">E-mail</option>
                                    <option value="phone">Telefone</option>
                                    <option value="whatsapp">WhatsApp</option>
                                </select>
                            </div>
                            <button type="submit" class="btn" style="background: #333; color: #fff; border-radius: 8px; width: 100%; font-weight: 500; letter-spacing: 1px;">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include 'partials/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
