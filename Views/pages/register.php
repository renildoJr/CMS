<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <title>CMS | Cadastro Inicial</title>
</head>
<body>
    <form class="container" action="/validate" method="POST">
        <h1 class="form-title">Cadastro Inicial</h1>

        <!-- Form Section > Database Register -->
        <section class="content-section">
            <h2 class="section-title">Banco de Dados</h2>
            <hr>
            <div class="input-list">
                <input type="text" name="db_host" placeholder="hostname">
                <input type="text" name="db_name" placeholder="DB name">
                <input type="text" name="db_user" placeholder="DB user">
                <input type="password" name="db_pass" placeholder="DB password">
            </div>
        </section>

        <!-- Form Section > ADM Register -->
        <section class="content-section">
            <h2 class="section-title">Informações do Administrador</h2>
            <hr>
            <div class="input-list">
                <input type="text" name="adm_name" placeholder="Nome">
                <input type="text" name="adm_user" placeholder="Username">
                <input type="text" name="adm_email" placeholder="Email">
                <input type="password" name="adm_pass" placeholder="Senha">
                <input type="password" name="adm_passRep" placeholder="Repita a senha">
            </div>
        </section>

        <!-- Form Section > Website Name -->
        <section class="content-section">
            <h2 class="section-title">Website</h2>
            <hr>
            <div class="input-list">
                <input type="text" name="site_title" placeholder="Titulo do site">
                <input type="text" name="site_desc" placeholder="Descrição">
            </div>
        </section>

        <!-- Submit Button -->
        <input class="btn btn_primary" type="submit" value="Cadastrar">

    </form>
</body>
</html>