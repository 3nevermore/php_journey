
<!-- Navigation -->
<?php require_once 'includes/header.php' ;?>

<!-- Content -->
<?php require_once 'includes/content_outro.php' ;?>

        <?php

            echo '<h2> Olá '. htmlspecialchars($_POST['nome']) . '</h2> <h3>Sua Mensagem foi Enviada com Sucesso!</h3>
             <strong> Nome: &nbsp; </strong>' . htmlspecialchars($_POST['nome']) . '<br>
             <strong> Email: &nbsp; </strong>' . htmlspecialchars($_POST['email']) . '<br>
             <strong> Assunto: &nbsp; </strong>' . htmlspecialchars($_POST['assunto']) . '<br>
             <strong> Mensagem: &nbsp; </strong>' . htmlspecialchars($_POST['textarea']) . '
                ';

        ?>

<!-- Footer -->
<?php require_once 'includes/footer.php' ;?>

