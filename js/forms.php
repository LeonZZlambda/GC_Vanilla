<?php
// Verifica se os dados do formulário foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $nome = $_POST['idNome'];
    $email = $_POST['Email'];
    $comentario = $_POST['comment'];
    
    // Envia um email com os dados do formulário
    $para = "gatecloud@gmail.com"; // Substitua pelo seu endereço de email
    $assunto = "Novo formulário de contato";
    $mensagem = "Nome: $nome\n";
    $mensagem .= "Email: $email\n";
    $mensagem .= "Comentário: $comentario\n";
    
    // Envia o email
    if (mail($para, $assunto, $mensagem)) {
        // Exibe uma mensagem de sucesso se o email foi enviado com sucesso
        echo "<p>Obrigado por entrar em contato conosco! Seus dados foram enviados com sucesso.</p>";
    } else {
        // Define a mensagem de erro
        $error_message = "Ocorreu um erro ao tentar enviar o email. Por favor, tente novamente mais tarde.";
    }
}

// Se houver uma mensagem de erro, exibe-a
if (!empty($error_message)) {
    echo "<p>$error_message</p>";
}