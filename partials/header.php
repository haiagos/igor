<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/portfolio.css" rel="stylesheet">
    <link href="css/custom-banner.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Igorjean</title>
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
        
        .fade-in-delay-1 {
            transition-delay: 0.2s;
        }
        
        .fade-in-delay-2 {
            transition-delay: 0.4s;
        }
        
        .fade-in-delay-3 {
            transition-delay: 0.6s;
        }
    </style>
    <!-- Bootstrap Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</head>
<body>
    <script>
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
<header>
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container-fluid container">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <img src="img/logo2.png" alt="Logo" class="navbar-logo">
                <span class="ms-2">Igorjean</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link<?php if(basename($_SERVER['PHP_SELF']) == 'index.php') echo ' active'; ?>" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php if(basename($_SERVER['PHP_SELF']) == 'projetos.php') echo ' active'; ?>" href="projetos.php">Projetos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php if(basename($_SERVER['PHP_SELF']) == 'sobre.php') echo ' active'; ?>" href="sobre.php">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php if(basename($_SERVER['PHP_SELF']) == 'contato.php') echo ' active'; ?>" href="contato.php">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
