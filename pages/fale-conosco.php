<?php
$pageTitle = 'Fale Conosco - Engemota';
$activePage = 'fale-conosco';
$rootPrefix = '../';
include __DIR__ . '/../partials/header.php';
?>

<section class="section light">
  <div class="section-inner">
    <div class="contact-wrap">
      <div>
        <h2 class="contact-title">Dados de contato</h2>
        <div class="contact-block">
          <h4>Endereço</h4>
          <p>
            Rua República do Iraque, n° 40 Sala 905<br>
            Jardim Oswaldo Cruz<br>
            São José dos Campos/SP<br>
            CEP 12216-540
          </p>
        </div>
        <div class="contact-block">
          <h4>Email</h4>
          <p>
            contato@engemota.com.br<br>
            caio@engemota.com.br
          </p>
        </div>
        <div class="contact-block">
          <h4>Telefone</h4>
          <p>
            (12) 99787-6976<br>
            (12) 99193-1367
          </p>
        </div>
      </div>
      <form class="contact-form" action="#" method="post">
        <h2 class="contact-title">Fale conosco</h2>

        <label for="nome">Nome*</label>
        <input id="nome" name="nome" type="text" autocomplete="name" required>

        <label for="email">E-mail*</label>
        <input id="email" name="email" type="email" autocomplete="email" required>

        <label for="endereco">Endereço*</label>
        <input id="endereco" name="endereco" type="text" autocomplete="street-address" required>

        <label for="telefone">Telefone* (+55 DDD número)</label>
        <input id="telefone" name="telefone" type="tel" placeholder="+55 (12) 99999-9999" pattern="\+55\s?\([0-9]{2}\)\s?[0-9]{4,5}-?[0-9]{4}" required>

        <label for="mensagem">Mensagem*</label>
        <textarea id="mensagem" name="mensagem" required></textarea>

        <button class="cta" type="submit">Enviar</button>
      </form>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../partials/footer.php'; ?>
