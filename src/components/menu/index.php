<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <!-- <i class='bx bxl-product-hunt icon'></i> -->
            <i class='bx bxs-truck'></i>
            <div class="logo_name">LogTech</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list" id="menu">
            <li>
                <i class='bx bx-search'></i>
                <input type="text" id="txtPesquisarMenu" onkeyup="searchMenu()" placeholder="Pesquisar...">
                <span class="tooltip">Pesquisar</span>
            </li>
            <li id="dash">
                <button>
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </button>
                <span class="tooltip">Dashboard</span>
            </li>
            <li id="users">
                <button>
                    <i class='bx bx-user'></i>
                    <span class="links_name">Usuários</span>
                </button>
                <span class="tooltip">Usuários</span>
            </li>
            <li id="messages">
                <button>
                    <i class='bx bx-chat'></i>
                    <span class="links_name">Mensagens</span>
                </button>
                <span class="tooltip">Mensagens</span>
            </li>
            <li id="analytics">
                <button>
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Análises</span>
                </button>
                <span class="tooltip">Análises</span>
            </li>
            <li id="files">
                <button>
                    <i class='bx bx-folder'></i>
                    <span class="links_name">Arquivos</span>
                </button>
                <span class="tooltip">Arquivos</span>
            </li>
            <li id="orders">
                <button>
                    <i class='bx bx-cart-alt'></i>
                    <span class="links_name">Ordens Serviço</span>
                </button>
                <span class="tooltip">Ordens de Serviço</span>
            </li>
            <li id="saved">
                <button>
                    <i class='bx bx-heart'></i>
                    <span class="links_name">Itens Salvos</span>
                </button>
                <span class="tooltip">Itens Salvos</span>
            </li>
            <li id="settings">
                <button>
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Configurações</span>
                </button>
                <span class="tooltip">Configurações</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                    <img src="img/profile2.jpg" alt="profileImg">
                    <div class="name_job">
                        <div class="name">Bruno Rodigues</div>
                        <div class="job">Web designer</div>
                    </div>
                </div>
                <i class='bx bx-log-out' id="log_out"></i>
            </li>
        </ul>
    </div>
</body>

</html>