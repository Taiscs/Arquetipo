
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// o arquivo de autoload da classe PHPMailer
require __DIR__ . '/vendor/phpmailer/phpmailer/src/Exception.php';
require __DIR__ . '/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require __DIR__ . '/vendor/phpmailer/phpmailer/src/SMTP.php';

// Coletar informações do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

// Configurações do servidor SMTP (use suas próprias configurações)
$smtpHost = 'smtp.gmail.com'; // Substitua pelo seu servidor SMTP
$smtpUsername =''; // Substitua pelo seu e-mail
$smtpPassword = ''; // Substitua pela sua senha
$smtpPort = 587; // Porta SMTP (pode variar dependendo das configurações do servidor)

// Crie uma instância do PHPMailer
$mail = new PHPMailer(true);

try {
    // Configurações do servidor SMTP
    
    $mail->isSMTP();
    $mail->Host = $smtpHost;
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUsername;
    $mail->Password = $smtpPassword;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = $smtpPort;

    // Configurações do e-mail
    $mail->setFrom($smtpUsername, 'Resultado do seu teste de Personalidade');
    $mail->addAddress($email, $nome, ''); // Adicione o e-mail e nome do destinatário
     // Adicione mais destinatários aqui
     $mail->addAddress( '');
    $mail->isHTML(true);
    $mail->Subject = 'Resultado do Teste de Personalidade';

    // Conteúdo do e-mail
    $message = "Nome: $nome<br>";
    $message .= "E-mail: $email<br>";
    $message .= "Telefone: $telefone<br>";
    
    // Não é necessário acessar $_POST['label-resultado'], pois o resultado já está no corpo do e-mail
    $message .= "Resultado: " . $_POST['resultado'] . "<br>";

    $mail->Body = $message;

    // Envia o e-mail
    $mail->send();

echo 'E-mail enviado com sucesso';

// Após enviar o email com sucesso, redirecione o usuário para a página "index"
header('Location: index.php');
exit; // Certifique-se de sair do script após o redirecionamento
} catch (Exception $e) {
echo "Erro no envio do e-mail: {$mail->ErrorInfo}";
}


?>

