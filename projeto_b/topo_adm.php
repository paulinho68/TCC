<style>
    #topoADM{
        border: 2px solid;
        border-radius: 0 0 15px 15px;
    }
</style>

<!-- Topo  -->
<header class="justify-content-between">
    <nav class="navbar navbar-expand-md" style="background-color:#000" id="topoADM">
        <!-- <img id="logo" class="navbar-brand" src="imagens/logo.png"> -->
        <!-- Collapse button -->
        <button class="navbar-toggler text-white close-btn" data-toggle="collapse" data-target="#nav">
            <span class="navbar-toggler-icon"><i class="fas fa-bars fa-1x"></i></span> 
        </button>

        <div class="collapse navbar-collapse justify-content-between align-items-center" id="nav">
            <ul class="navbar-nav ml-auto text-center">
                <li class="nav-item  d-inline">
                    <a class="nav-link active text-light" href="index.php">Início</a>
                </li>
                <li class="nav-item  d-inline">
                    <a class="nav-link text-light" href="galeria.php">Galeria</a>
                </li>
                <li class="nav-item d-inline">
                    <a class="nav-link text-light" href="pre_encomenda.php">Peça o Seu</a>
                </li>
            </ul>


            <ul class="navbar-nav ml-auto justify-content-end" style="text-align: center;">
                <?php if(!isset($_SESSION['perfil'])){ ?>
                <li class="nav-item">
                    <a id="cadastrese" class="nav-link btn btn-outline border border-white text-light" style="font-weight:bold" href="adm.php">Intranet</a>
                </li>
                <?php }else{ ?>
                <li class="nav-item">
                    <a class="text-warning" href="logoff.php" style="font-weight:bold;"><i class="mr-1 text-warning fas fa-sign-out-alt"></i>Sair</a>
                </li>
                <?php } ?>
            </ul>

        </div>
    </nav>
</header>
<!-- Fim Topo  -->
