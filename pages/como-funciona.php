<?php
$pageTitle = 'Como Funciona - Engemota';
$activePage = 'como-funciona';
$rootPrefix = '../';
include __DIR__ . '/../partials/header.php';
?>

<section class="section light">
  <div class="section-inner">
    <div class="section-title">
      <div>
        <span>processo</span>
        <h2>Do briefing à casa pronta</h2>
      </div>
      <a class="cta" href="<?php echo $rootPrefix; ?>pages/fale-conosco.php">Começar agora</a>
    </div>
    <div class="steps">
      <div class="step fade-up">
        <small>Etapa 01</small>
        <h4>Diagnóstico e projeto</h4>
        <p>Mapeamos rotina, infraestrutura e prioridades do ambiente.</p>
      </div>
      <div class="step fade-up delay-1">
        <small>Etapa 02</small>
        <h4>Instalação e integração</h4>
        <p>Hardware e software configurados para performance e segurança.</p>
      </div>
      <div class="step fade-up delay-2">
        <small>Etapa 03</small>
        <h4>Treinamento e suporte</h4>
        <p>Equipe treinada para operar e ajustar novas cenas.</p>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../partials/footer.php'; ?>
