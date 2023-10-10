<section class="contact">
    <div class="center">
        <div id="map"></div>
        <h2>Entre em contato</h2>
        <form class="contact-form" action="" method="post">
            <input type="text" name="nome" placeholder="Nome" value="<?php if(isset($nome)) echo $nome; ?>" />
            <input type="text" name="email" placeholder="Email" value="<?php if(isset($email)) echo $email; ?>" />
            <input type="text" name="telefone" placeholder="Telefone" value="<?php if(isset($telefone)) echo $telefone; ?>" />
            <textarea name="mensagem" placeholder="Mensagem" value="<?php if(isset($mensagem)) echo $mensagem; ?>"></textarea>
            <input type="hidden" name="form_name" value="contact" />
            <input type="submit" value="Enviar" />
        </form>
    </div>
</section>