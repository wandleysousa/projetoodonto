<!DOCTYPE html>
<html lang="pt-br">
<?php 
date_default_timezone_set("America/Sao_Paulo");

$dataatual = date("d/m/y");
$proxman = date("d/m/y", strtotime("+6 months"));

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles\style.css">
    <title>Odonto centro - Unidade 1</title>
</head>
<body>
    <header>
        <div>
            <a href="index.php"><img src="odonto2.png" alt="Logo Odonto Centro" class="logo"></a>
        </div>
        <h1>Unidade 1 - Odonto Centro</h1>
    </header>

    <main>
        <table>
            <tr>
                <th></th>
                <th>Data da Manutenção</th>
                <th>Proxima Manutenção</th>
            </tr>
            <tr>
                <td>Recepção</td>
                <td><?=$dataatual?></td>
                <td><?=$proxman?></td>
            </tr>
        </table>

    </main>

    <footer>
        <p>© 2023 Odonto Centro. Todos os direitos reservados.</p>
        <p id="link">Desenvolvido por <a href="https://www.instagram.com/wandley_79/" target="_blank" id="link">wandley_79</a></p>
    </footer>
</body>

</html>