<?=$this->fetch('commons/header.php', $data)?>

<main>
    <section class="dashboard">
        <div class="container">
            <div class="conteudo">
                <h2 class="titulo">
                    <i class="fas fa-chart-area"></i> Dashboard
                </h2>
                <p>Seja muito bem-vindo de volta Leonardo!</p>
                <p>Esse é o painel administrativo do seu Site. Aqui você poderá cadastrar novos Serviços, 
                Vídeos, Notícias no Blog e novos comentários de clientes satisfeitos com seus serviços.</p>
                <p>Todos esses itens são exibidos no site por ordem de data, então sempre que cadastrar um 
                novo item precisará informar a data para que ele seja listado no site da forma correta. 
                Por exemplo: se você cadastrou uma notícia com a data de ontem, mais esqueceu de cadastrar 
                a notícia do dia anterior, pode cadastrar normal, é só colocar a notícia anterior com uma 
                data mais antiga. Sendo assim a listagem é definida como sempre exibindo primeiro as mais 
                recentes. Isso funciona para todos os itens que são cadastrados.</p>
                <p>Tenha um excelente dia, e estamos aqui para te ajudar se necessário Rosário Dev. </p>                              
            </div>
        </div>
    </section>
</main>

<?=$this->fetch('commons/footer.php', $data)?>