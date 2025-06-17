<?php
// Processamento do formulário de contato
$mensagem = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $telefone = htmlspecialchars($_POST['phone'] ?? '');
    $assunto = htmlspecialchars($_POST['subject'] ?? '');
    $mensagem_contato = htmlspecialchars($_POST['message'] ?? '');
    $estrelas = htmlspecialchars($_POST['rating'] ?? '');
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
    <style>
        body {
            background: linear-gradient(120deg, #e0e7ff 0%, #f8fafc 100%);
            min-height: 100vh;
        }
        .form-rectangle {
            background: #fff;
            border-radius: 32px;
            box-shadow: 0 8px 32px rgba(80,80,180,0.10);
            padding: 2.7rem 2.2rem;
            max-width: 650px;
            margin: auto;
            border: 1.5px solid #e0e7ff;
        }
        .form-rectangle .form-control, .form-rectangle .form-select {
            border-radius: 12px;
            border: 1.5px solid #e0e7ff;
            background: #f6f8fc;
            font-size: 1.08rem;
        }
        .form-rectangle .form-control:focus, .form-rectangle .form-select:focus {
            border-color: #6366f1;
            box-shadow: 0 0 0 2px #6366f133;
        }
        .star-rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: flex-start;
        }
        .star-rating input[type="radio"] {
            display: none;
        }
        .star-rating label {
            font-size: 2.1rem;
            color: #d1d5db;
            cursor: pointer;
            transition: color 0.2s;
        }
        .star-rating input[type="radio"]:checked ~ label,
        .star-rating label:hover,
        .star-rating label:hover ~ label {
            color: #fbbf24;
        }
        .form-rectangle h2 {
            color: #3730a3;
            font-weight: 700;
            letter-spacing: 1px;
        }
        .form-rectangle hr {
            border-top: 2.5px solid #6366f1;
            width: 70px;
            margin-left: 0;
        }
        .btn-main {
            background: linear-gradient(90deg, #6366f1 60%, #818cf8 100%);
            color: #fff;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1.13rem;
            letter-spacing: 1px;
            box-shadow: 0 2px 8px #6366f122;
            border: none;
            transition: background 0.2s, transform 0.2s;
        }
        .btn-main:hover {
            background: linear-gradient(90deg, #818cf8 60%, #6366f1 100%);
            transform: translateY(-2px) scale(1.04);
        }
        .contact-social-area {
            background: linear-gradient(90deg, #f1f3f4 60%, #e0e7ff 100%);
            border-radius: 40px;
            box-shadow: 0 4px 24px rgba(80,80,180,0.10);
        }
        .contact-social-area .social-btn {
            font-weight: 600;
            font-size: 1.15rem;
            border-radius: 40px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.07);
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .contact-social-area .social-btn:hover {
            transform: scale(1.09) translateY(-2px);
            filter: brightness(1.09);
            box-shadow: 0 6px 18px rgba(0,0,0,0.13);
        }
        .contact-social-area .btn-success {
            background: linear-gradient(90deg, #25d366 60%, #128c7e 100%);
            border: none;
        }
        .contact-social-area .btn-success:hover {
            background: linear-gradient(90deg, #128c7e 60%, #25d366 100%);
        }
        .contact-social-area .btn-instagram {
            background: linear-gradient(90deg, #E1306C 60%, #F77737 100%);
            border: none;
            color: #fff;
        }
        .contact-social-area .btn-instagram:hover {
            background: linear-gradient(90deg, #F77737 60%, #E1306C 100%);
        }
        @media (max-width: 700px) {
            .form-rectangle {
                padding: 1.2rem 0.5rem;
            }
            .contact-social-area {
                flex-direction: column !important;
                border-radius: 24px;
            }
        }
    </style>
</head>
<body>
    <?php include 'partials/header.php'; ?>
    <main>
        <div class="container py-5 d-flex justify-content-center align-items-center" style="min-height: 80vh;">
            <div class="form-rectangle w-100">
                <div class="mb-4">
                    <h2>Contato</h2>
                    <hr>
                </div>
                <?php if ($mensagem): ?>
                    <div class="alert alert-success"> <?= $mensagem ?> </div>
                <?php endif; ?>
                <form method="post" action="">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nome" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
                        </div>
                        <div class="col-md-6">
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Telefone" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Assunto" required>
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" id="message" name="message" rows="3" placeholder="Mensagem" required></textarea>
                        </div>
                        <div class="col-12 d-flex align-items-center gap-2">
                            <span class="me-2">Avaliação:</span>
                            <div class="star-rating">
                                <input type="radio" id="star5" name="rating" value="5"><label for="star5" title="5 estrelas"><i class="fas fa-star"></i></label>
                                <input type="radio" id="star4" name="rating" value="4"><label for="star4" title="4 estrelas"><i class="fas fa-star"></i></label>
                                <input type="radio" id="star3" name="rating" value="3"><label for="star3" title="3 estrelas"><i class="fas fa-star"></i></label>
                                <input type="radio" id="star2" name="rating" value="2"><label for="star2" title="2 estrelas"><i class="fas fa-star"></i></label>
                                <input type="radio" id="star1" name="rating" value="1"><label for="star1" title="1 estrela"><i class="fas fa-star"></i></label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-main w-100">Enviar</button>
                        </div>
                    </div>
                </form>
                <div class="mt-4 d-flex flex-column flex-md-row gap-3 justify-content-center align-items-center rounded-pill p-3 shadow-lg contact-social-area">
                    <a href="https://wa.me/SEUNUMEROAQUI" target="_blank" class="btn btn-success d-flex align-items-center gap-2 rounded-pill px-4 py-2 shadow-sm social-btn" style="font-weight: 600; font-size: 1.15rem;">
                        <i class="fab fa-whatsapp fa-lg"></i> WhatsApp
                    </a>
                    <a href="https://instagram.com/SEUUSUARIOAQUI" target="_blank" class="btn btn-instagram d-flex align-items-center gap-2 rounded-pill px-4 py-2 shadow-sm social-btn" style="font-weight: 600; font-size: 1.15rem;">
                        <i class="fab fa-instagram fa-lg"></i> Instagram
                    </a>
                </div>
            </div>
        </div>
    </main>
    <?php include 'partials/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
