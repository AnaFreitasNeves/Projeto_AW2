<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["volunteer-name"];
    $email = $_POST["volunteer-email"];
    $type = $_POST["job-salary"];
    $message = $_POST["volunteer-message"];

    // Aqui você pode fazer o que desejar com os dados do formulário, como enviar um e-mail ou salvar em um banco de dados.

    // Por exemplo, enviar um e-mail de confirmação:
    $to = "seu-email@example.com";
    $subject = "Nova mensagem de $name";
    $headers = "From: $email";
    $message = "Tipo: $type\n\nMensagem:\n$message";
    
    mail($to, $subject, $message, $headers);

    // Redirecionar de volta para a página anterior após o envio do formulário.
    header("Location: " . $_SERVER["HTTP_REFERER"] . "?success=1");
    exit;
}
?>
