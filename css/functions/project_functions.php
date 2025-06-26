<?php

function carregarProjetos() {
    $jsonContent = file_get_contents(__DIR__ . '/../dados/projetos.json');
    return json_decode($jsonContent, true);
}

function imprimirProjetosResidenciais($projetos) {
    foreach ($projetos['residenciais'] as $index => $projeto): ?>
        <div class="col-md-6 fade-in fade-in-delay-<?php echo $index + 1; ?>">
            <div class="project-card">
                <img src="img/<?php echo htmlspecialchars($projeto['imagem']); ?>" 
                     class="img-fluid" 
                     alt="<?php echo htmlspecialchars($projeto['titulo']); ?>">
                <div class="project-info p-4">
                    <h3><?php echo htmlspecialchars($projeto['titulo']); ?></h3>
                    <p><?php echo htmlspecialchars($projeto['descricao']); ?></p>
                </div>
            </div>
        </div>
    <?php endforeach;
}

function imprimirProjetosInteriores($projetos) {
    foreach ($projetos['interiores'] as $index => $projeto): ?>
        <div class="col-md-4 fade-in fade-in-delay-<?php echo $index + 1; ?>">
            <div class="project-card">
                <img src="img/<?php echo htmlspecialchars($projeto['imagem']); ?>" 
                     class="img-fluid" 
                     alt="<?php echo htmlspecialchars($projeto['titulo']); ?>">
                <div class="project-info p-4">
                    <h3><?php echo htmlspecialchars($projeto['titulo']); ?></h3>
                    <p><?php echo htmlspecialchars($projeto['descricao']); ?></p>
                </div>
            </div>
        </div>
    <?php endforeach;
}

function imprimirProjetosMinimalistas($projetos) {
    foreach ($projetos['minimalistas'] as $projeto): ?>
        <div class="row align-items-center">
            <div class="col-md-6 fade-in fade-in-delay-1">
                <img src="img/<?php echo htmlspecialchars($projeto['imagem']); ?>" 
                     class="img-fluid" 
                     alt="<?php echo htmlspecialchars($projeto['titulo']); ?>">
            </div>
            <div class="col-md-6 fade-in fade-in-delay-2">
                <div class="project-box p-4 shadow rounded-0">
                    <h3 style="text-transform: uppercase; letter-spacing: 2px; font-weight: 600;">
                        <?php echo htmlspecialchars($projeto['titulo']); ?>
                    </h3>
                    <p><?php echo htmlspecialchars($projeto['descricao']); ?></p>
                </div>
            </div>
        </div>
    <?php endforeach;
}

function imprimirProjetosModernos($projetos) {
    if (!empty($projetos['modernos'])): ?>
        <div class="col-lg-8 fade-in" style="transition-delay: 0.2s">
            <div class="project-card">
                <img src="img/<?php echo htmlspecialchars($projetos['modernos'][0]['imagem']); ?>" 
                     class="img-fluid" 
                     alt="<?php echo htmlspecialchars($projetos['modernos'][0]['titulo']); ?>">
                <div class="project-info p-4">
                    <h3><?php echo htmlspecialchars($projetos['modernos'][0]['titulo']); ?></h3>
                    <p><?php echo htmlspecialchars($projetos['modernos'][0]['descricao']); ?></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row g-4">
                <?php for ($i = 1; $i < count($projetos['modernos']); $i++): 
                    $delay = ($i + 1) * 0.2; // Atraso progressivo para cada card ?>
                    <div class="col-lg-12 fade-in" style="transition-delay: <?php echo $delay; ?>s">
                        <div class="project-card">
                            <img src="img/<?php echo htmlspecialchars($projetos['modernos'][$i]['imagem']); ?>" 
                                 class="img-fluid" 
                                 alt="<?php echo htmlspecialchars($projetos['modernos'][$i]['titulo']); ?>">
                            <div class="project-info p-4">
                                <h3><?php echo htmlspecialchars($projetos['modernos'][$i]['titulo']); ?></h3>
                                <p><?php echo htmlspecialchars($projetos['modernos'][$i]['descricao']); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    <?php endif;
}

function imprimirGaleria($projetos) {
    foreach ($projetos['galeria'] as $index => $imagem): ?>
        <div class="col">
            <div class="gallery-item fade-in" style="animation-delay: <?php echo $index * 0.1; ?>s">
                <img src="img/<?php echo htmlspecialchars($imagem['src']); ?>" 
                     class="img-fluid gallery-img" 
                     alt="<?php echo htmlspecialchars($imagem['alt']); ?>" 
                     data-bs-toggle="modal" 
                     data-bs-target="#imageModal">
            </div>
        </div>
    <?php endforeach;
}
?>
