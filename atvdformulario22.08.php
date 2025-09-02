<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="processa.php" method="post">
        <p>
            <strong>O que você achou do site??</strong>
        <dl>
            <dd>
                <input type="radio" name="avaliacao" value="muitobom" checked> Muito bom
                <input type="radio" name="avaliacao" value="bom"> Bom
                <input type="radio" name="avaliacao" value="regular"> Regular
                <input type="radio" name="avaliacao" value="umlixo"> Um Lixo
            </dd>
        </dl>
        </p>

        <p>
            <strong>Qual a seção que você mais gostou??</strong>
        <dl>
            <dd>
                <select name="secao" size="1">
                    <option value="emcartaz">Em cartaz</option>
                    <option value="trilhasonora">Trilha Sonora</option>
                    <option value="fotos">Galeria de Fotos</option>
                    <option value="bilheteria">Bilheteria</option>
                    <option value="outra">Outra</option>
                </select>
                Outra: <input type="text" size="26" maxlength="256" name="outra">
            </dd>
        </dl>
        </p>

        <p>
            <strong>Digite seus comentários no campo abaixo:</strong>
        <dl>
            <dd>
                <textarea name="comentarios" rows="5" cols="42"></textarea>
            </dd>
        </dl>
        </p>

        <p>
            <strong>Diga-nos como entrar em contato com você:</strong>
        <dl>
            <dd>
                <pre>
Nome  <input type="text" size="35" maxlength="256" name="nome">
E-mail <input type="text" size="35" maxlength="256" name="email">
Fone   <input type="text" size="35" maxlength="256" name="telefone">
            </pre>
            </dd>
        </dl>

        <dl>
            <dd>
                <input type="checkbox" name="novidades" value="novidades"> Quero receber as novidades do site por e-mail
            </dd>
        </dl>
        </p>

        <p>
            <input type="submit" name="submit" value="Enviar Dados">
            <input type="reset" value="Limpar Formulário">
        </p>
    </form>

</body>

</html>