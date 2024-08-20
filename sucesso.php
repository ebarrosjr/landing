<?php
require("inc/header.php");
?>
    <section id="chamada">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <img src="https://agenciam2u.com.br/img/logo_treinamento.svg" alt="Logo do Treinamento" class="img-fluid" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6 offset-md-3">
                    <h1 class="mb-4">Sua comunidade dedicada a explorar o mundo real do marketing.</h1>
                    <h4>Queremos ajudá-lo a entender as estratégias de marketing que realmente funcionam, desde as táticas tradicionais até as abordagens inovadoras que estão moldando o futuro.</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <form action="/sucesso" method="post">
                    <input type="text" name="nome" class="form-control my-3" placeholder="Seu nome">
                    <input type="email" name="email" class="form-control mb-3" placeholder="Seu melhor e-mail">
                    <button type="submit"> Quero fazer o treinamento </button>
                </form>
            </div>
        </div>
    </section>
<?php
require("inc/footer.php");
?>
 