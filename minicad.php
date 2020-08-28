<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Minicad - Insrindo no BD</title>
    </head>
    <body>
        <form action="cadpessoa.php" method="POST">
            <label>Insira o seu nome</label>
            <input type="text" name="nome"/>
            <br/><br/>
            <label>Insira a sua idade</label>
            <input type="text" name="idade"/>
            <br/><br/>
            <button type="submit">Cadastrar</button>
        </form>
        <hr/>
        <a href="ver.php">Ver pessoas cadastradas</a>
    </body>
</html>