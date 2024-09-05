<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo = $_POST['tipo'];
    $nome = $_POST['name'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $endereco = $_POST['address'];
    $empresa = $_POST['company'];
    $cnpj = $_POST['cnpj'];
    $telefone = $_POST['phone'];
    $email = $_POST['email'];
    $titulo_eleitor = $_POST['voter_id'];

    // Exemplo de processamento: Envio de email
    $to = "seuemail@example.com";
    $subject = "Nova Mensagem do Formulário de: $nome";
    $body = "Tipo: $tipo\nNome: $nome\nCPF: $cpf\nRG: $rg\nEndereço: $endereco\nEmpresa: $empresa\nCNPJ: $cnpj\nTelefone: $telefone\nEmail: $email\nTítulo de Eleitor: $titulo_eleitor";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar mensagem.";
    }
    header("Location: index.php");
exit(); // Certifique-se de usar exit() após o redirecionamento
}


?>