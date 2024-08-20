<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header("HTTP/1.1 403 Forbidden"); 
    header("Location: http://192.168.56.103/treinamento"); 
    exit();
}

$erro = null;
require_once("inc/db.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$qry = "INSERT INTO leads (nome, email) VALUES (:nome, :email)";

$stmt = $PDO->prepare($qry);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":email", $email);

$resultado = $stmt->execute();

if(! $resultado) {
    $erro = "Tivemos um erro gravando no Banco de dados! Você poderia tentar novamente?";
}

$PDO = null;

include "inc/header.php";
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
                    <?php
                    if($erro == null) {
                    ?>
                    <div class="col-md-6 offset-md-3 text-center">
                        <h1 class="pb-4">Parabéns pela <em>excelente</em> decisão!</h1>
                        <h4 class="pb-3">Nosso grupo Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro quasi sed odit alias!.</h4>
                    </div>
                    <div class="col-md-4 offset-md-4 mt-5 text-center">
                        <a href="https://chat.whatsapp.com/DM0qQUEJ6loJT89N4u5l2R" target="_blank" class="zap">
                            <img src="/img/whatsapp.svg" alt="WhatsApp"/>
                            Entre no grupo
                        </a>
                    </div>
                    <?php 
                    } else {
                    ?>
                        <div class="col-md-6 offset-md-3">
                            <h1 class="pb-4">Aquele <em>chatinho</em> momento constrangedor!</h1>
                            <h4 class="pb-3"><?=$erro?></h4>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php
include "inc/footer.php";
?>
    