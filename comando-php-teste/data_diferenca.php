<?php
// DATA DE HOJE
$hoje = new DateTime(date('d-m-Y'));

// DATA DE NASCIMENTO
$nascimento = new DateTime('24-12-1991');

// DIFERENCA ENTRE AS DATAS
$idade = $hoje->diff($nascimento);

// EXIBE A IDADE
echo $idade->y;