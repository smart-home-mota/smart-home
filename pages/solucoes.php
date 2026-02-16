<?php
$pageTitle = 'Soluções - Engemota';
$activePage = 'solucoes';
$rootPrefix = '../';
include __DIR__ . '/../partials/header.php';
?>

<section class="section light">
  <div class="section-inner">
    <div class="section-title">
      <div>
        <span>soluções</span>
        <h2>Automação que acompanha o seu ritmo</h2>
      </div>
      <a class="cta" href="<?php echo $rootPrefix; ?>pages/fale-conosco.php">Agendar visita</a>
    </div>
    <div class="grid-3">
      <article class="card fade-up">
        <img src="<?php echo $rootPrefix; ?>assets/images/controle_total.jpg" alt="Controle total">
        <div class="card-body">
          <h3>Controle total</h3>
          <p>Centralize luzes, cortinas e clima com cenas personalizadas.</p>
        </div>
      </article>
      <article class="card fade-up delay-1">
        <img src="<?php echo $rootPrefix; ?>assets/images/controle_onde_desejar.jpg" alt="Controle onde desejar">
        <div class="card-body">
          <h3>Controle onde desejar</h3>
          <p>Acesse seus ambientes via app, voz ou painel dedicado.</p>
        </div>
      </article>
      <article class="card fade-up delay-2">
        <img src="<?php echo $rootPrefix; ?>assets/images/todas_as_partes.jpg" alt="Todos os ambientes">
        <div class="card-body">
          <h3>Em todos os ambientes</h3>
          <p>Automação integrada do hall à área gourmet, sem complicação.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../partials/footer.php'; ?>
