<?=$this->fetch('commons/header.php', $data)?>
<?=$this->fetch('commons/caminho.php', $data)?>

<section class="blog">
    <div class="container">
        <div class="conteudo">
            <div class="noticia">
                <h2 class="titulo">Como trocar um pneu</h2>
                <p class="data">01/01/2024 - Por:Leonardo Rosário</p>
                <img src="<?=URL_BASE?>resources/imagens/servico.png"/>
                <div class="descricao">
                    <p>Lorem ipsum dolor sit amet. Non dolorum voluptatem qui quod quae ut doloremque laudantium 
                        ut nihil eaque qui necessitatibus ipsam hic vitae atque ut velit nostrum.</p> 
                    <p>Lorem ipsum dolor sit amet. Non dolorum voluptatem qui quod quae ut doloremque laudantium 
                    ut nihil eaque qui necessitatibus ipsam hic vitae atque ut velit nostrum.</p> 
                    <p>Lorem ipsum dolor sit amet. Non dolorum voluptatem qui quod quae ut doloremque laudantium 
                    ut nihil eaque qui necessitatibus ipsam hic vitae atque ut velit nostrum.</p>                     
                    <ul>
                        <li>ut nihil eaque qui necessitatibus ipsam hic vitae.</li>
                        <li>ut nihil eaque qui necessitatibus ipsam hic vitae.</li>
                        <li>ut nihil eaque qui necessitatibus ipsam hic vitae.</li>
                        <li>ut nihil eaque qui necessitatibus ipsam hic vitae.</li>
                        <li>ut nihil eaque qui necessitatibus ipsam hic vitae.</li>
                        <li>ut nihil eaque qui necessitatibus ipsam hic vitae.</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet. Non dolorum voluptatem qui quod quae ut doloremque laudantium 
                    ut nihil eaque qui necessitatibus ipsam hic vitae atque ut velit nostrum.</p> 
                    <p>Lorem ipsum dolor sit amet. Non dolorum voluptatem qui quod quae ut doloremque laudantium 
                    ut nihil eaque qui necessitatibus ipsam hic vitae atque ut velit nostrum.</p> 
                    <p>Lorem ipsum dolor sit amet. Non dolorum voluptatem qui quod quae ut doloremque laudantium 
                    ut nihil eaque qui necessitatibus ipsam hic vitae atque ut velit nostrum.</p> 
                     

                </div>
            </div>
            <div class="listagem">
                <h2 class="titulo">Últimas Notícias</h2>
                <div class="itens">
                    <div class="item">
                        <a href="#">
                            <div class="img">
                                <img src="<?=URL_BASE?>resources/imagens/servico.png"/>
                            </div> 
                            <div class="informacoes">
                                <p class="data">20/08/2021</p>
                                <h3 class="titulo">Aqui vem o titulo da noticia em até no máximo duas linhas</h3>                          
                                <p class="btn">Ver notícia</p>
                            </div> 
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="img">
                                <img src="<?=URL_BASE?>resources/imagens/servico.png"/>
                            </div> 
                            <div class="informacoes">
                                <p class="data">20/08/2021</p>
                                <h3 class="titulo">Aqui vem o titulo da noticia em até no máximo duas linhas</h3>                          
                                <p class="btn">Ver notícia</p>
                            </div> 
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="img">
                                <img src="<?=URL_BASE?>resources/imagens/servico.png"/>
                            </div> 
                            <div class="informacoes">
                                <p class="data">20/08/2021</p>
                                <h3 class="titulo">Aqui vem o titulo da noticia em até no máximo duas linhas</h3>                          
                                <p class="btn">Ver notícia</p>
                            </div> 
                        </a>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</section>

<?=$this->fetch('commons/footer.php', $data)?>