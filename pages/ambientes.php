<?php
$pageTitle = 'Ambientes - Engemota';
$activePage = 'ambientes';
$rootPrefix = '../';
include __DIR__ . '/../partials/header.php';
?>

<section class="section">
  <div class="section-inner">
    <div class="section-title">
      <div>
        <span>ambientes</span>
        <h2>Espaços com atmosfera e performance</h2>
      </div>
      <a class="cta" href="<?php echo $rootPrefix; ?>pages/fale-conosco.php">Solicitar projeto</a>
    </div>
    <div class="gallery">
      <figure class="fade-up">
        <img src="<?php echo $rootPrefix; ?>assets/images/casa_inteligente.jpg" alt="Casa inteligente">
        <figcaption>Residencial</figcaption>
      </figure>
      <figure class="fade-up delay-1">
        <img src="<?php echo $rootPrefix; ?>assets/images/Sala.jpg" alt="Sala inteligente">
        <figcaption>Sala</figcaption>
      </figure>
      <figure class="fade-up delay-2">
        <img src="<?php echo $rootPrefix; ?>assets/images/Cozinha.jpg" alt="Cozinha inteligente">
        <figcaption>Cozinha</figcaption>
      </figure>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../partials/footer.php'; ?>
