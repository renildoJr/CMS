<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../provisory/templates.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>CMS | Dashboard</title>
</head>
<body>
    <?php include "../includes/header.php" ?>
    <main>
        <?php include "../includes/sidebar.php" ?>
        <div class="page-content">
            <h1 class="page-title">Dashboard</h1>
            <section>
                <h2 class="section-title">Bem Vindo</h2>
                <div class="box">
                    <h3>Para Começar</h3>
                    <a href="#" class="btn btn_primary">Customize Seu Site</a>
                </div>
            </section>
            <section>
                <div class="box">
                    <h3 class="section-title">Atividades Recentes</h3>
                    <ul>
                        <li><a href="#">Novo Post: Noticias | Criado em 14/04/2023</a></li>
                        <li><a href="#">Novo Post: Carros Voadores | Criado em 11/04/2023</a></li>
                        <li><a href="#">Post editado: Sem titulo | Editado em 11/04/2023</a></li>
                    </ul>
                </div>
            </section>
        </div>
    </main>
    <?php include "../includes/footer.php" ?>
</body>
</html>