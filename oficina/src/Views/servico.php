<?=$this->fetch('commons/header.php', $data)?>
<?=$this->fetch('commons/caminho.php', $data)?>

<section class="servico">
    <div class="container">
        <div class="conteudo">
            <img src="<?=URL_BASE?>resources/imagens/servico.png">
            <h2 class="titulo">Ar condicionado</h2>
            <div class="descricao">
                <p>Lorem ipsum dolor sit amet. Aut nihil dolorum vel officia dignissimos ut distinctio vero aut facilis possimus ea odio quod est error tenetur. 
                Sit molestias distinctio et sapiente ducimus qui fuga sunt ea labore atque id omnis earum.</p>
                <p>Lorem ipsum dolor sit amet. Aut nihil dolorum vel officia dignissimos ut distinctio vero aut facilis possimus ea odio quod est error tenetur. 
                Sit molestias distinctio et sapiente ducimus qui fuga sunt ea labore atque id omnis earum.</p>
                <p>Lorem ipsum dolor sit amet. Aut nihil dolorum vel officia dignissimos ut distinctio vero aut facilis possimus ea odio quod est error tenetur. 
                Sit molestias distinctio et sapiente ducimus qui fuga sunt ea labore atque id omnis earum.</p>
                <p>Lorem ipsum dolor sit amet. Aut nihil dolorum vel officia dignissimos ut distinctio vero aut facilis possimus ea odio quod est error tenetur. 
                Sit molestias distinctio et sapiente ducimus qui fuga sunt ea labore atque id omnis earum.</p>
                <p>Lorem ipsum dolor sit amet. Aut nihil dolorum vel officia dignissimos ut distinctio vero aut facilis possimus ea odio quod est error tenetur. 
                Sit molestias distinctio et sapiente ducimus qui fuga sunt ea labore atque id omnis earum.</p>
            </div>
        </div>
    </div>
</section>

<section class="galeria_fotos">
    <div class="container">
        <div class="conteudo">
            <div class="texto">
                <h2 class="titulo center">Galerai de fotos</h2>
                <div class="descricao center">
                    <p>Lorem ipsum dolor sit amet. Aut nihil dolorum vel officia dignissimos ut distinctio vero aut facilis possimus ea odio quod est error tenetur. 
                    Sit molestias distinctio et sapiente ducimus qui fuga sunt ea labore atque id omnis earum.</p>
                </div>
            </div>   
            <div class="itens">
                <div class="item">
                    <a href="<?=URL_BASE?>resources/imagens/servico.png" class="swipebox" title="Imagem do serviço">
                        <div class="img">
                            <img src="<?=URL_BASE?>resources/imagens/servico.png"/>
                            <div class="hover">
                                <i class="fas fa-image"></i>
                            </div>
                        </div>                         
                    </a>
                </div>
                <div class="item">
                    <a href="<?=URL_BASE?>resources/imagens/servico.png" class="swipebox" title="Imagem do serviço">
                        <div class="img">
                            <img src="<?=URL_BASE?>resources/imagens/servico.png"/>
                            <div class="hover">
                                <i class="fas fa-image"></i>
                            </div>
                        </div>                         
                    </a>
                </div> 
                <div class="item">
                    <a href="<?=URL_BASE?>resources/imagens/servico.png" class="swipebox" title="Imagem do serviço">
                        <div class="img">
                            <img src="<?=URL_BASE?>resources/imagens/servico.png"/>
                            <div class="hover">
                                <i class="fas fa-image"></i>
                            </div>
                        </div>                         
                    </a>
                </div> 
                <div class="item">
                    <a href="<?=URL_BASE?>resources/imagens/servico.png" class="swipebox" title="Imagem do serviço">
                        <div class="img">
                            <img src="<?=URL_BASE?>resources/imagens/servico.png"/>
                            <div class="hover">
                                <i class="fas fa-image"></i>
                            </div>
                        </div>                         
                    </a>
                </div> 
                <div class="item">
                    <a href="<?=URL_BASE?>resources/imagens/servico.png" class="swipebox" title="Imagem do serviço">
                        <div class="img">
                            <img src="<?=URL_BASE?>resources/imagens/servico.png"/>
                            <div class="hover">
                                <i class="fas fa-image"></i>
                            </div>
                        </div>                         
                    </a>
                </div> 
                <div class="item">
                    <a href="<?=URL_BASE?>resources/imagens/servico.png" class="swipebox" title="Imagem do serviço">
                        <div class="img">
                            <img src="<?=URL_BASE?>resources/imagens/servico.png"/>
                            <div class="hover">
                                <i class="fas fa-image"></i>
                            </div>
                        </div>                         
                    </a>
                </div>                
            </div>         
        </div>
    </div>
</section>

<section class="formulario_orcamento">
    <div class="container">
        <div class="conteudo">
            <div class="img">
                <img src="<?=URL_BASE?>resources/imagens/avaliacoes.png"/>
            </div>
            <div class="form">
                <h2>Fazer orçamento</h2>
                <p>Lorem ipsum dolor sit amet. Aut nihil dolorum vel officia dignissimos ut distinctio vero.</p>
                <form action="" methodo="POST" enctype="multtpart/form-data">
                    <div class="campo nome">
                        <input type="text" name="nome" placeholder="Nome" required>
                    </div>
                    <div class="campo telefone">
                        <input type="text" name="telefone" placeholder="Telefone" required>
                    </div>
                    <div class="campo email">
                        <input type="email" name="email" placeholder="E-mail" required>
                    </div>
                    <div class="campo servicos">
                        <label>Selecione os serviços desejados:</label>
                        <div class="itens">
                            <div class="item">
                                <label>
                                    <input type="checkbox" name="servico[]" value="Ar Condicionado">
                                    Ar Condicionado
                                </label>
                            </div>
                            <div class="item">
                                <label>
                                    <input type="checkbox" name="servico[]" value="Diagnostico de motor">
                                    Diagnostico de motor
                                </label>
                            </div>
                            <div class="item">
                                <label>
                                    <input type="checkbox" name="servico[]" value="Manutenção de freios">
                                    Manutenção de freios
                                </label>
                            </div>
                            <div class="item">
                                <label>
                                    <input type="checkbox" name="servico[]" value="Ar Condicionado">
                                    Ar Condicionado
                                </label>
                            </div>
                            <div class="item">
                                <label>
                                    <input type="checkbox" name="servico[]" value="Diagnostico de motor">
                                    Diagnostico de motor
                                </label>
                            </div>
                            <div class="item">
                                <label>
                                    <input type="checkbox" name="servico[]" value="Manutenção de freios">
                                    Manutenção de freios
                                </label>
                            </div>
                            <div class="item">
                                <label>
                                    <input type="checkbox" name="servico[]" value="Ar Condicionado">
                                    Ar Condicionado
                                </label>
                            </div>
                            <div class="item">
                                <label>
                                    <input type="checkbox" name="servico[]" value="Diagnostico de motor">
                                    Diagnostico de motor
                                </label>
                            </div>
                            <div class="item">
                                <label>
                                    <input type="checkbox" name="servico[]" value="Manutenção de freios">
                                    Manutenção de freios
                                </label>
                            </div>
                            <div class="item">
                                <label>
                                    <input type="checkbox" name="servico[]" value="Ar Condicionado">
                                    Ar Condicionado
                                </label>
                            </div>
                            <div class="item">
                                <label>
                                    <input type="checkbox" name="servico[]" value="Diagnostico de motor">
                                    Diagnostico de motor
                                </label>
                            </div>
                            <div class="item">
                                <label>
                                    <input type="checkbox" name="servico[]" value="Manutenção de freios">
                                    Manutenção de freios
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="campo mensagem">
                        <p>Nos de mais informações no campo a baixo, como ano e modelo do carro, 
                            problema que vem observando
                            a algum tempo e tudo o que achar relevante para nos contar:
                        </p>
                        <textarea placeholder="Mensagem" required>

                        </textarea>
                    </div>
                    <div class="campo botao">
                        <button type="submit" class="btn">Fazer orçamento</button>
                    </div>                    
                </form>
            </div>
        </div>
    </div>
</section>

<?=$this->fetch('commons/footer.php', $data)?>