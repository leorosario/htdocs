<?=$this->fetch('commons/header.php', $data)?>
<?=$this->fetch('commons/caminho.php', $data)?>

<section class="fale-conosco">
    <div class="container">
        <div class="conteudo">
            <div class="form">
                <h2 class="titulo">Nos envie uma mensagem</h2>
                <form action="#" class="form-ajax" method="POST" enctype="multpart/form-data">
                    <div class="campo nome">
                        <input type="text" name="nome" placeholder="Nome" required>
                    </div>
                    <div class="campo email">
                        <input type="email" name="email" placeholder="E-mail" required>
                    </div>
                    <div class="campo telefone">
                        <input type="tel" name="telefone" placeholder="Telefone" required>
                    </div>
                    <div class="campo assunto">
                        <input type="text" name="assunto" placeholder="Assunto" required>
                    </div>
                    <div class="campo mensagem">
                        <textarea name="mensagem" placeholder="Mensagem" required></textarea>
                    </div>                    
                    <div class="campo botao">
                        <button type="submit" class="btn">Enviar mensagem</button>
                    </div>                  
                </form>
            </div>
            <div class="contatos">
                <h3 class="titulo">Nossos Contatos</h3>
                <div class="item">
                    <div class="icone">
                        <i class="fas fa-location-dot"></i>
                    </div>
                    <div class="info">
                        <h4>Endereço</h4>
                        <a href="#">Rua Fulano Beltrano de Tal, Sertãozinho - SP</a>
                    </div>
                </div>
                <div class="item">
                    <div class="icone">
                        <i class="far fa-envelope"></i>
                    </div>
                    <div class="info">
                        <h4>E-mail</h4>
                        <a href="#">contato@rlbsmotors.com.br</a>
                    </div>
                </div>
                <div class="item">
                    <div class="icone">
                        <i class="fas fa-mobile-screen"></i>
                    </div>
                    <div class="info">
                        <h4>Telefone</h4>
                        <a href="#">+55 (16) 999999999</a>
                    </div>
                </div>
                <div class="redes-sociais">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>                
            </div>
            <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d400658.1085805719!2d-48.184300447764116!3d-21.097151397511176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b9993a0ad34817%3A0xc1983d66c079d5d3!2sSert%C3%A3ozinho%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1723727978753!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<?=$this->fetch('commons/footer.php', $data)?>