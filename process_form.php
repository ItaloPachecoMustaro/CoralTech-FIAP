<?php
// Configuração do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coraltech";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_POST['name'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $perfil = $_POST['perfil'];

  // Prepara a instrução SQL
  $sql = "INSERT INTO users (name, email, telefone, perfil) VALUES (?, ?, ?, ?)";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssss", $nome, $email, $telefone, $perfil);

  // Executa a instrução SQL
  if ($stmt->execute()) {
    echo "Novo registro criado com sucesso!";
  } else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
  }

  $stmt->close();
  $conn->close();
}
