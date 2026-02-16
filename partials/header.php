<?php
$pageTitle = $pageTitle ?? 'Engemota - Casa Inteligente';
$activePage = $activePage ?? '';
$rootPrefix = $rootPrefix ?? '';
?><!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
  <link rel="stylesheet" href="<?php echo $rootPrefix; ?>assets/css/site.css">
</head>
<body>
  <header class="topbar">
    <div class="topbar-inner">
      <a class="brand" href="<?php echo $rootPrefix; ?>index.php">
        <img src="<?php echo $rootPrefix; ?>assets/images/Logo_engemota.jpg" alt="Logo Engemota">
        <span>Engemota</span>
      </a>
      <nav class="menu">
        <a class="<?php echo $activePage === 'solucoes' ? 'active' : ''; ?>" href="<?php echo $rootPrefix; ?>pages/solucoes.php">Soluções</a>
        <a class="<?php echo $activePage === 'ambientes' ? 'active' : ''; ?>" href="<?php echo $rootPrefix; ?>pages/ambientes.php">Ambientes</a>
        <a class="<?php echo $activePage === 'como-funciona' ? 'active' : ''; ?>" href="<?php echo $rootPrefix; ?>pages/como-funciona.php">Como funciona</a>
        <a class="<?php echo $activePage === 'quem-somos' ? 'active' : ''; ?>" href="<?php echo $rootPrefix; ?>pages/quem-somos.php">Quem somos</a>
        <a class="<?php echo $activePage === 'fale-conosco' ? 'active' : ''; ?>" href="<?php echo $rootPrefix; ?>pages/fale-conosco.php">Fale conosco</a>
      </nav>
      <a class="cta" href="<?php echo $rootPrefix; ?>pages/fale-conosco.php">Fale conosco</a>
    </div>
  </header>
