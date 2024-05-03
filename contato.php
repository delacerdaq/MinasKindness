<?php
  require("config.php");
  
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = ($_POST['name']);
    $telefone = ($_POST['phone']);
    $email = ($_POST['email']);
    $assunto = ($_POST['subject']);
    $mensagem = ($_POST['message']);
}

function inserirRegistro($pdo, $nome, $telefone, $email, $assunto, $mensagem)
{
    $sql = "INSERT INTO requests (user_name, phone, email, subject, message)
    VALUES (:user_name, :phone, :email, :subject, :message)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':user_name', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':phone', $telefone, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':subject', $assunto, PDO::PARAM_STR);
    $stmt->bindParam(':message', $mensagem, PDO::PARAM_STR);
    return $stmt->execute();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="contato.css">
</head>

<body>
    
<div class="conteiner">
  <div class="contact-box">
    <div class="contact-left">
    <h3 id="contact-box_h3">SEND YOUR REQUEST</h3>
      <form action="contato.php" method="POST">
      <div class="input-row">
        <div class="input-group">
          <label id="contact-box_name">Name</label>
          <input id="input-name" name="name" type="text" placeholder="Maria Smith">
        </div>

        <div class="input-group">
          <label id="contact-box_phone">Phone</label>
          <input name="phone" id="plc_hlr_1" type="text" placeholder="">
        </div>
      </div>

                  <div class="input-row">
                      <div class="input-group">
                          <label>Email</label>
                          <input type="email" name="email" placeholder="maria@gmail.com">
                      </div>

                      <div class="input-group">
                          <label id="contact-box_subj">Subject</label>
                          <input id="plc_hlr_2" type="text" name="subject" placeholder="Product Demo">
                      </div>
                  </div>

                  <label id="contact-box_ms">Message</label>
                  <textarea id="plc_hlr_3" rows="5" name="message" placeholder="Your Message"></textarea>
              
                  <button id="contact-box_btn" type="submit" name="submit">SEND</button>
              </form>
          </div>
          
          <div class="contact-right">
              <h3 id="contact-box_h3_2">REACH ME</h3>
          </div>
      </div>
  </div>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (inserirRegistro($pdo, $nome, $telefone, $email, $assunto, $mensagem)) {
        echo "Obrigado por enviar seu feedback, $nome! <br> <a href='index.php'>Home</a>";
    } else {
        echo "Erro ao inserir registro";
    }
}
?>