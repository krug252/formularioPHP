<?php
// Pega dados do formulário enviado
$idinfos   = 1; // apenas exemplo fixo
$avaliacao = $_POST['avaliacao'] ?? '';
$secao     = $_POST['secao'] ?? '';
$comentarios= $_POST['comentarios'] ?? '';
$nome      = $_POST['nome'] ?? '';
$email     = $_POST['email'] ?? '';
$telefone  = $_POST['telefone'] ?? '';
$novidades = isset($_POST['novidades']) ? 'Sim' : 'Não';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Tabela de Informações</title>
  <style>
    body { font-family: Arial, sans-serif; background: #f5f5f5; padding: 20px; }
    h2 { text-align: center; color: #333; }
    table { width: 100%; border-collapse: collapse; background: #fff; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
    th, td { padding: 12px; border: 1px solid #ddd; text-align: center; }
    th { background: #4CAF50; color: white; }
    tr:nth-child(even) { background: #f9f9f9; }
  </style>
</head>
<body>
  <h2>Lista de Informações</h2>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Avaliação</th>
        <th>Seção</th>
        <th>Comentário</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Novidades</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?= $idinfos ?></td>
        <td><?= htmlspecialchars($avaliacao) ?></td>
        <td><?= htmlspecialchars($secao) ?></td>
        <td><?= htmlspecialchars($comentarios) ?></td>
        <td><?= htmlspecialchars($nome) ?></td>
        <td><?= htmlspecialchars($email) ?></td>
        <td><?= htmlspecialchars($telefone) ?></td>
        <td><?= $novidades ?></td>
      </tr>
    </tbody>
  </table>
</body>
</html>