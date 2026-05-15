<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Cadastro de Usuário</title>
</head>
<body class="cor">
    <header class="topo">
        <nav class="cabecalho">
            <h2>Quem somos</h2>
            <h2>Trabalhe Conosco</h2>
            <h2>Para sua empresa</h2>
            <h2>Contato</h2>
            <button class="botao-login">Login</button>
        </nav>
    </header>

    <main>
        <section class="container-formulario">
            <section class="card-formulario">
                <h1>Cadastro de Usuário</h1>

                <form action="salvarusuario.php" method="POST">
                    <label>Nome</label>
                    <input type="text" name="nome">

                    <label>Email</label>
                    <input type="text" name="email">

                    <label>Celular</label>
                    <input type="text" name="celular">

                    <label>Estado</label>
                    <input type="text" name="estado">

                    <label>Cidade</label>
                    <input type="text" name="cidade">

                    <label>Senha</label>
                    <input type="password" name="senha">

                    <button type="submit">Cadastrar</button>
                </form>
            </section>
        </section>
    </main>

    <footer class="rodape">
        <p>Entrar</p>
        <p>Quem somos</p>
        <p>Para sua empresa</p>
        <p>Contato</p>
        <p>Dúvidas</p>
        <p>Política de privacidade</p>
        <p>Baixe nosso app</p>
    </footer>
</body>
</html>