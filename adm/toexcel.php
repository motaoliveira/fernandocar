<?php
// Inclui a conexão
require_once('conect.php'); 


// Nome do Arquivo do Excel que será gerado
$arquivo = 'dados_emails.xls';

// Criamos uma tabela HTML com o formato da planilha para excel
$tabela = '<table border="1">';
$tabela .= '<tr>';
$tabela .= '<td colspan="2">Tabela de E-mails</tr>';
$tabela .= '</tr>';
$tabela .= '<tr>';
$tabela .= '<td><b>Id</b></td>';
$tabela .= '<td><b>Email</b></td>';
$tabela .= '</tr>';

// Puxando dados do Banco de dados
$resultado = mysql_query('SELECT * FROM email');

while($dados = mysql_fetch_array($resultado))
{
$tabela .= '<tr>';
$tabela .= '<td>'.$dados['id'].'</td>';
$tabela .= '<td>'.$dados['email'].'</td>';
$tabela .= '</tr>';
}

$tabela .= '</table>';

// Força o Download do Arquivo Gerado
header ('Cache-Control: no-cache, must-revalidate');
header ('Pragma: no-cache');
header('Content-Type: application/x-msexcel');
header ("Content-Disposition: attachment; filename=\"{$arquivo}\"");
echo $tabela;

?>