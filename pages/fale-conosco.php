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
            contato@engemotasmart.com.br<br>
            caio@engemotasmart.com.br
          </p>
        </div>
        <div class="contact-block">
          <h4>Telefone</h4>
          <p>
            +55 (12) 99787-6976<br>
            +55 (12) 99193-1367
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

<a class="whatsapp-float" href="https://wa.me/5512997876976" target="_blank" rel="noopener" aria-label="Conversar no WhatsApp" title="Conversar no WhatsApp">
  <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
    <path d="M20.5 3.5A11.7 11.7 0 0 0 12.1.2C5.6.2.4 5.4.4 11.8c0 2 .5 3.9 1.4 5.6L.2 23.8l6.6-1.7a11.7 11.7 0 0 0 5.3 1.3h.1c6.5 0 11.7-5.2 11.7-11.7A11.7 11.7 0 0 0 20.5 3.5Zm-8.4 17.9h-.1a9.8 9.8 0 0 1-5-1.4l-.4-.2-3.9 1 1-3.8-.3-.4a9.9 9.9 0 0 1-1.5-5.2c0-5.4 4.4-9.8 9.8-9.8 2.6 0 5.1 1 6.9 2.9a9.7 9.7 0 0 1 2.9 6.9c0 5.4-4.4 9.9-9.8 9.9Zm5.4-7.3c-.3-.2-1.8-.9-2.1-1-.3-.1-.5-.2-.7.2s-.8 1-1 1.1c-.2.2-.4.2-.7 0-.3-.2-1.3-.5-2.4-1.5-.9-.8-1.5-1.8-1.7-2.1-.2-.3 0-.5.1-.7.1-.1.3-.3.4-.5.2-.2.2-.3.3-.5s0-.4 0-.5c0-.2-.7-1.7-1-2.3-.2-.5-.5-.5-.7-.5h-.6c-.2 0-.5 0-.8.3-.3.3-1 1-1 2.3s1 2.5 1.2 2.7c.1.2 2 3.2 4.9 4.4.7.3 1.2.5 1.7.6.7.2 1.3.2 1.8.1.5-.1 1.8-.7 2.1-1.4.3-.6.3-1.2.2-1.4-.2-.1-.4-.2-.7-.4Z"/>
  </svg>
</a>

<?php include __DIR__ . '/../partials/footer.php'; ?>
