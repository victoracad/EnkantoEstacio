<div class="sidebar">
    <div class="logo_content">
        <div class="logo">
            <i class="bx bxs-parking"></i>
            <div class="logo_name">Painel ADM</div>
        </div>
        <i class="bx bx-menu" id="btn"></i>
    </div>
    <ul class="nav_list">
        <li>
            <a href="./">
                <i class="material-symbols-outlined">home</i>
                <span class="links_name">Home</span>
            </a>
            <span class="tooltip">Home</span>
        </li>

        <li>
            <a href="../admin/managers.php">
                <i class="material-symbols-outlined">person</i>
                <span class="links_name">Gerentes</span>
            </a>
            <span class="tooltip">Gerentes</span>
        </li>

        <li>
            <a href="../admin/comandas.php">
                <i class="material-symbols-outlined">article</i>
                <span class="links_name">Comandas/Pedidos</span>
            </a>
            <span class="tooltip">Comandas/Pedidos</span>
        </li>
        <li>
            <a href="../admin/cardapio.php">
                <i class="material-symbols-outlined"> menu_book</i>
                <span class="links_name">Cardápio</span>
            </a>
            <span class="tooltip">Cardápio</span>
        </li>
        <li>
            <a href="../admin/clientes.php">
                <i class="material-symbols-outlined">
                    group
                </i>
                <span class="links_name">Clientes</span>
            </a>
            <span class="tooltip">Clientes</span>
        </li>
    </ul>

    <div class="profile_content">
        <a href="./methods/logout.php">
            <div class="profile">
                <div class="profile_details">
                    <span id="userImg" class="material-symbols-outlined">
                        person
                    </span>
                    <div class="name_job">
                        <div class="name"><?php echo $_SESSION['userName'];?></div>
                        <div class="job">Gerente</div>
                    </div>
                </div>
                <i class="material-symbols-outlined" id="log_out">logout</i>
            </div>
        </a>
    </div>
</div>