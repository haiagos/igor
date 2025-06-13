<?php
// Array de objetos (associativos) com imagem e descrição
$imagens = [
    [
        'imagem' => 'banner.jpeg',
        'descricao' => 'Banner principal do site'
    ],
    [
        'imagem' => 'logo.png',
        'descricao' => 'Logo principal'
    ],
    [
        'imagem' => 'logo2.png',
        'descricao' => 'Logo alternativa'
    ],
    [
        'imagem' => 'primeira apresentação.jpeg',
        'descricao' => 'Primeira apresentação do projeto'
    ],
    [
        'imagem' => 'WhatsApp Image 2025-06-04 at 19.27.41 (1).jpeg',
        'descricao' => 'Imagem do WhatsApp 1'
    ],
    [
        'imagem' => 'WhatsApp Image 2025-06-04 at 19.27.41 (2).jpeg',
        'descricao' => 'Imagem do WhatsApp 2'
    ],
    [
        'imagem' => 'WhatsApp Image 2025-06-04 at 19.27.41.jpeg',
        'descricao' => 'Imagem do WhatsApp'
    ],
    [
        'imagem' => 'WhatsApp Image 2025-06-04 at 19.27.42 (1).jpeg',
        'descricao' => 'Imagem do WhatsApp 3'
    ],
    [
        'imagem' => 'WhatsApp Image 2025-06-04 at 19.27.42 (2).jpeg',
        'descricao' => 'Imagem do WhatsApp 4'
    ],
    [
        'imagem' => 'WhatsApp Image 2025-06-04 at 19.27.42 (3).jpeg',
        'descricao' => 'Imagem do WhatsApp 5'
    ],
    [
        'imagem' => 'WhatsApp Image 2025-06-04 at 19.29.32 (1).jpeg',
        'descricao' => 'Imagem do WhatsApp 6'
    ],
    [
        'imagem' => 'WhatsApp Image 2025-06-04 at 19.29.32 (2).jpeg',
        'descricao' => 'Imagem do WhatsApp 7'
    ],
    [
        'imagem' => 'WhatsApp Image 2025-06-04 at 19.29.32 (3).jpeg',
        'descricao' => 'Imagem do WhatsApp 8'
    ],
    [
        'imagem' => 'WhatsApp Image 2025-06-04 at 19.29.32 (4).jpeg',
        'descricao' => 'Imagem do WhatsApp 9'
    ],
    [
        'imagem' => 'WhatsApp Image 2025-06-04 at 19.29.32 (5).jpeg',
        'descricao' => 'Imagem do WhatsApp 10'
    ],
    [
        'imagem' => 'WhatsApp Image 2025-06-04 at 19.29.32.jpeg',
        'descricao' => 'Imagem do WhatsApp 11'
    ],
    [
        'imagem' => 'WhatsApp Image 2025-06-04 at 19.29.41 (1).jpeg',
        'descricao' => 'Imagem do WhatsApp 12'
    ],
    [
        'imagem' => 'WhatsApp Image 2025-06-04 at 19.29.41.jpeg',
        'descricao' => 'Imagem do WhatsApp 13'
    ],
    [
        'imagem' => 'WhatsApp Image 2025-06-12 at 09.37.11 (1).jpeg',
        'descricao' => 'Imagem do WhatsApp 14'
    ],
    [
        'imagem' => 'WhatsApp Image 2025-06-12 at 09.37.11 (2).jpeg',
        'descricao' => 'Imagem do WhatsApp 15'
    ],
    [
        'imagem' => 'WhatsApp Image 2025-06-12 at 09.37.11 (3).jpeg',
        'descricao' => 'Imagem do WhatsApp 16'
    ],
    [
        'imagem' => 'WhatsApp Image 2025-06-12 at 09.37.11 (4).jpeg',
        'descricao' => 'Imagem do WhatsApp 17'
    ],
    [
        'imagem' => 'WhatsApp Image 2025-06-12 at 09.37.11.jpeg',
        'descricao' => 'Imagem do WhatsApp 18'
    ],
    [
        'imagem' => 'WhatsApp Image 2025-06-12 at 09.37.12 (1).jpeg',
        'descricao' => 'Imagem do WhatsApp 19'
    ],
    [
        'imagem' => 'WhatsApp Image 2025-06-12 at 09.37.12 (2).jpeg',
        'descricao' => 'Imagem do WhatsApp 20'
    ],
    [
        'imagem' => 'WhatsApp Image 2025-06-12 at 09.37.12 (3).jpeg',
        'descricao' => 'Imagem do WhatsApp 21'
    ],
    [
        'imagem' => 'WhatsApp Image 2025-06-12 at 09.37.12 (4).jpeg',
        'descricao' => 'Imagem do WhatsApp 22'
    ],
    [
        'imagem' => 'WhatsApp Image 2025-06-12 at 09.37.12.jpeg',
        'descricao' => 'Imagem do WhatsApp 23'
    ],
];

// Exemplo de uso: percorrer e exibir imagem e descrição
foreach ($imagens as $item) {
    echo 'img/' . $item['imagem'] . ' - ' . $item['descricao'] . '<br>';
}
?>
