function include(template_part) {
    switch(template_part) {
        case 'header':
            document.write(`
            <header>
                <nav class="header-navbar">
                    <ul class="nav-menu">
                        <li><a href="home.html"><img class="logo" src="../images/logo.png" alt="Logo do sistema"></a></li>
                        <li><a href="#"><i class="fa-solid fa-house"></i>Meu Site</a></li>
                        <li><a class="msg_icon" href=""><i class="fa-solid fa-envelope"></i>0</a></li>
                        <li><a href="#"><i class="fa-solid fa-plus"></i>Novo</a></li>
                    </ul>
                    <ul class="nav-menu">
                        <li class="adm-menu" ><img src="../images/New-York_-_Bryant_Park.jpg" alt="adm thumbnail">
                            <a href="#">Joey Campbell</a>
                            <ul>
                                <li><a href="#">Configurações</a></li>
                                <li><a href="#">Sair</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </header>'`);
        break;
        
        case 'sidebar':
            document.write(`
            <aside class="side-bar">
                <ul class="menu">
                    <li><a href="#"><i class="fa-solid fa-clock"></i></a>Dashboard</li>
                    <li><a href="#"><i class="fa-solid fa-pencil"></i></a>Posts
                        <ul class="menu">
                            <li><a href="#">Todos os Posts</a></li>
                            <li><a href="#">Adicionar Novo</a></li>
                            <li><a href="#">Categorias</a></li>
                            <li><a href="#">Tags</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa-sharp fa-solid fa-file"></i></a>Páginas</li>
                    <li><a href="#"><i class="fa-sharp fa-solid fa-palette"></i></a>Aparência</li>
                    <li><a href="#"><i class="fa-solid fa-plug"></i></a>Plugins</li>
                    <li><a href="#"><i class="fa-sharp fa-solid fa-gear"></i></a>Configurações</li>
                </ul>
            </aside>`);
        break;

        case 'footer':
            document.write(`
            <footer>
                <!-- Font Awesome Link -->
                <script src="https://kit.fontawesome.com/5034295430.js" crossorigin="anonymous"></script>
                <script>
                    const navMsgIcon = document.querySelector(".msg_icon");
                    const MsgIcon = document.querySelector(".msg_icon i");
                
                    if(navMsgIcon.textContent > 0){
                        MsgIcon.classList.add("fa-beat");
                    }
                </script>
            </footer>`);
        break;
    }
}