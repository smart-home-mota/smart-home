<?php
$pageTitle = 'Engemota - Casa Inteligente';
$activePage = '';
$rootPrefix = '';
include __DIR__ . '/partials/header.php';
?>

<section class="hero">
  <div class="hero-inner">
    <div class="fade-up">
      <span class="hero-badge">Casa inteligente Engemota</span>
      <h1>Controle total, conforto diário e energia inteligente.</h1>
      <p>
        Crie ambientes conectados para viver melhor. Automatize luzes, som, clima e
        segurança com projetos sob medida.
      </p>
      <div class="hero-actions">
        <a class="cta" href="pages/fale-conosco.php">Quero um projeto</a>
        <a class="cta outline" href="pages/ambientes.php">Ver ambientes</a>
      </div>
    </div>
    <div class="hero-card fade-up delay-2">
      <h3>Experiência conectada</h3>
      <ul class="hero-list">
        <li><span>App e voz</span><strong>24/7</strong></li>
        <li><span>Projetos sob medida</span><strong>100%</strong></li>
        <li><span>Suporte técnico</span><strong>Engemota</strong></li>
      </ul>
    </div>
  </div>
</section>

<section class="section light">
  <div class="section-inner">
    <div class="section-title">
      <div>
        <span>navegação</span>
        <h2>Acesse cada área separadamente</h2>
      </div>
      <a class="cta" href="pages/fale-conosco.php">Falar com a equipe</a>
    </div>
    <div class="grid-3">
      <article class="card fade-up">
        <img src="assets/images/controle_total.jpg" alt="Soluções de automação">
        <div class="card-body">
          <h3><a href="pages/solucoes.php">Soluções</a></h3>
          <p>Catálogo de soluções de automação residencial.</p>
        </div>
      </article>
      <article class="card fade-up delay-1">
        <img src="assets/images/casa_inteligente.jpg" alt="Ambientes inteligentes">
        <div class="card-body">
          <h3><a href="pages/ambientes.php">Ambientes</a></h3>
          <p>Exemplos de espaços com tecnologia integrada.</p>
        </div>
      </article>
      <article class="card fade-up delay-2">
        <img src="assets/images/Logo_engemota.jpg" alt="Sobre a Engemota">
        <div class="card-body">
          <h3><a href="pages/quem-somos.php">Quem somos</a></h3>
          <p>História, foco técnico e experiência da equipe.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
