<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
</head>

<body>
    <div class="container">
        <nav>

            <ul class="menu">
                <a href="pagina.html">
                    <li>Cadastro</li>
                </a>
                <a href="cadastro.php">
                    <li>Consultas</li>
                </a>
            </ul>
        </nav>
        <section>
            <h1>Cadastro de usuarios</h1>
            <hr><br><br>

            <form method="post" action="processa.php">
                <input type="submit" value="Salvar" class="btn">
                <input type="reset" value="Apagar" class="btn">
                <br><br>
                Nome<br>
                <input type="text" name="Nome" class="campo" maxlength="40" required autofocus><br><br>
                Tamanho<br>
                <input type="text" name="Tamanho" class="campo" maxlength="50" required><br><br>
                Cor<br>
                <input type="text" name="Cor" class="campo" maxlength="10" required><br><br>
                Rio<br>
                <input type="text" name="Rio" class="campo" maxlength="10" required><br><br>
                Espécie<br>
                <input type="text" name="Espécie" class="campo" maxlength="25" required><br><br>
                Cidade<br>
                <input type="text" name="Cidade" class="campo" maxlength="10" required><br><br>
                
            </form>
        </section>


    </div>

</body>

</html>