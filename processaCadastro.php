<?php

// Recebe o nome completo enviado pelo formulário através do método POST
$nome1 = $_POST["nome1"];

// Recebe a idade informada pelo usuário
$idade2 = $_POST["idade2"];

// Recebe a profissão informada no formulário
$profissao3 = $_POST["profissao3"];

// Recebe o salário pretendido pelo colaborador
$salario4 = $_POST["salario4"];

// Recebe as informações sobre a experiência profissional anterior
$experiencia5 = $_POST["experiencia5"];

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Define o título apresentado na aba do navegador -->
    <title>Cadastro Confirmado</title>

    <!-- Faz a ligação com o arquivo CSS responsável pela aparência da página -->
    <link rel="stylesheet" href="estilo.css">

</head>

<body>

    <!-- Cria a área principal onde serão apresentados os dados do cadastro -->
    <div class="container">

        <!-- Informa ao usuário que o cadastro foi realizado corretamente -->
        <h1>Cadastro realizado com sucesso!</h1>

        <!-- Apresenta o título da seção com os dados cadastrados -->
        <h2>Dados do colaborador</h2>

        <!-- Apresenta o nome recebido do formulário -->
        <p>
            <strong>Nome completo:</strong>
            <?php echo $nome1; ?>
        </p>

        <!-- Apresenta a idade recebida do formulário -->
        <p>
            <strong>Idade:</strong>
            <?php echo $idade2; ?> anos
        </p>

        <!-- Apresenta a profissão informada pelo usuário -->
        <p>
            <strong>Profissão:</strong>
            <?php echo $profissao3; ?>
        </p>

        <!-- Apresenta o salário pretendido formatado como valor monetário -->
        <p>
            <strong>Salário pretendido:</strong>
            R$ <?php echo number_format($salario4, 2, ',', '.'); ?>
        </p>

        <!-- Apresenta a experiência profissional informada no cadastro -->
        <p>
            <strong>Experiência anterior:</strong>
            <?php echo $experiencia5; ?>
        </p>

        <!-- Cria uma nova seção para apresentar uma mensagem ao colaborador -->
        <h2>Mensagem</h2>

        <p>
            <!-- Exibe o nome do colaborador dentro da mensagem -->
            Olá, <strong><?php echo $nome1; ?></strong>!

            <!-- Apresenta a profissão informada no cadastro -->
            Recebemos seu cadastro para a profissão de
            <strong><?php echo $profissao3; ?></strong>.

            <!-- Apresenta a experiência profissional informada -->
            A experiência informada foi:
            <strong><?php echo $experiencia5; ?></strong>.

            <!-- Mensagem final de agradecimento ao candidato -->
            Agradecemos seu interesse em fazer parte das
            Lojas Brincos e Companhia.
        </p>

        <!-- Cria um link para retornar à página do formulário -->
        <a href="cadastro.html">

            <!-- Botão utilizado para voltar ao formulário de cadastro -->
            <button type="button">Voltar ao formulário</button>

        </a>

    </div>

</body>

</html>
