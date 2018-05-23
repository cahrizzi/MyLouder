<header class="custom-header">
        <a href="#"><img class="logo" src="images/02_home/logo-louder.png" alt=""></a>
        <nav class="nav navbar">
            <ul class="collapse navbar-collapse">     
                <li>
                    <a href="contato.php" class="nav-item">Contato</a>
                </li>
                <li>
                    <a href="#search" class="search">
                        <img src="images/00_header/search_2.png" width="28" alt="busca">
                    </a>
                </li>
                <li class="toogle-navbar" id="btn-menu">
                </li>
            </ul>
        </nav>
    </header>
    <nav class="hidden" id="menu-exp">
        <div class="mensagem">
            <p class="msg-louder">
                Descubra o que o Louder pode fazer por sua marca.
            </p>
        </div>
        <div class="menu-li">
            <ul>
                <li>
                    <a href="" class="btn-close-menu">
                        <img src="images/02_home/close.png" id="btn-close-menu" alt="">
                    </a>
                </li>
                <li><a href="louder.php" class="menu-item">O LOUDER</a></li>
                <li><a href="como-funciona.php" class="menu-item">COMO FUNCIONA</a></li>
                <li><a href="marketing-influencia.php" class="menu-item">MARKETING DE INFLUENCIA</a></li>
                <li><a href="usabilidade-interatividade.php" class="menu-item">USABILIDADE E INTERATIVIDADE</a></li>
                <li><a href="quem-usa.php" class="menu-item">QUEM USA</a></li>
                <li><a href="contato.php" class="menu-item">CONTATO</a></li>
            </ul>
        </div>
    </nav>
    <div id="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="Pesquisar" />
            <button type="submit" class="btn">
                <img src="images/00_header/search_2.png" class="search-img"alt="">
            </button>
        </form>
    </div>
        <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/script-search.js"></script>
    <script>
    $("#page-loader").delay(3000).slideUp(1000);

    $("#btn-menu").on("click", function () {
        $("#menu-exp").addClass("menu-expandido", 1000);
        $("#menu-exp").removeClass("hidden", 1000);
    });

    $("#btn-close-menu").on("click", function () {
        $("#menu-exp").removeClass("menu-expandido", 1000);
        $("#menu-exp").addClass("hidden", 1000);
    });


    //    $("#mobile-home").delay(5000).slideUp(1000);

    $(".call-txt").click(function () {
        $(".txt-conteudo").toggle();
    });
</script>