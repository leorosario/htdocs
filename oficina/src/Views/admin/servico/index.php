<?=$this->fetch('commons/header.php', $data)?>

<main>
    <section class="dashboard">
        <div class="container">
            <div class="conteudo">
                <h2 class="titulo">
                    <i class="fas fa-wrench"></i> Serviços
                </h2>
                <div class="topo">
                    <div class="botoes">
                        <a href="<?=URL_BASE?>admin-servicos-create" class="btn">Cadastrar Novo</a>                        
                    </div>
                    <div class="pesquisa">
                        <form action="#" method="GET">
                            <input type="text" name="search" placeholder="Titulo do item...">
                            <input type="submit" value="Pesquisar" class="btn">
                        </form>
                    </div>
                </div>
                <div class="lista">
                    <table>
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>AÇÕES</td>
                                <td>TITULO</td>
                                <td>DATA DE CADASTRO</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <a href="#"><i class="fas fa-edit"></i></a>
                                    <a href="#"><i class="fas fa-trash-alt"></i></a>
                                </td>
                                <td>Aqui vem o titulo do serviço</td>
                                <td>23/08/2024</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <a href="#"><i class="fas fa-edit"></i></a>
                                    <a href="#"><i class="fas fa-trash-alt"></i></a>
                                </td>
                                <td>Aqui vem o titulo do serviço</td>
                                <td>23/08/2024</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    <a href="#"><i class="fas fa-edit"></i></a>
                                    <a href="#"><i class="fas fa-trash-alt"></i></a>
                                </td>
                                <td>Aqui vem o titulo do serviço</td>
                                <td>23/08/2024</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>
                                    <a href="#"><i class="fas fa-edit"></i></a>
                                    <a href="#"><i class="fas fa-trash-alt"></i></a>
                                </td>
                                <td>Aqui vem o titulo do serviço</td>
                                <td>23/08/2024</td>
                            </tr>
                        </tbory>
                    </table>
                </div>
                <div  class="paginacao">
                    <a href="#"><i class="fas fa-arrow-left"></i></a>
                    <a>1</a>
                    <a href="#"><i class="fas fa-arrow-right"></i></a>
                </div>                               
            </div>
        </div>
    </section>
</main>

<?=$this->fetch('commons/footer.php', $data)?>