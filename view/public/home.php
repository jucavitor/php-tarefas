<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../CSS/home.css">
    <title>Sidebar</title>
</head>
<body>
    <nav id="sidebar">
        <div id="sidebar_content">
            <div id="user">
                <img src="../imagens/avatar.jpg" id="user_avatar" alt="Avatar">
    
                <p id="user_infos">
                    <span class="item-description">
                        Fulano de Tal
                    </span>
                    <span class="item-description">
                        Lorem Ipsum
                    </span>
                </p>
            </div>
    
            <ul id="side_items">
                <li class="side-item active">
                    <a href="#">
                           <i class="fa-solid fa-clipboard"></i>
                        <span class="item-description">
                            Tarefas
                        </span>
                    </a>
                </li>
    
                <li class="side-item">
                    <a href="#">
                     <i class="fa-solid fa-check"></i>
                        <span class="item-description">
                            Usuários
                        </span>
                    </a>
                </li>
    
                <li class="side-item">
                    <a href="#">
                         <i class="fa-solid fa-trash-can"></i>
                        <span class="item-description">
                            Lixeira
                        </span>
                    </a>
                </li>
    
                <li class="side-item">
                    <a href="#">
                        <i class="fa-solid fa-plus"></i>
                        <span class="item-description">
                            Adicionar
                        </span>
                    </a>
                </li>
    
                <li class="side-item">
                    <a href="#">
                           <i class="fa-solid fa-user"></i>
                        <span class="item-description">
                            Usuário
                        </span>
                    </a>
                </li>
    
                <li class="side-item">
                    <a href="#">
                        <i class="fa-solid fa-gear"></i>
                        <span class="item-description">
                            Configurações
                        </span>
                    </a>
                </li>
            </ul>
    
            <button id="open_btn">
                <i class="fa-solid fa-chevron-right" id="open_btn_icon"></i>
            </button>
        </div>

        <div id="logout">
            <button id="logout_btn">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span class="item-description">
                    Logout
                </span>
            </button>
        </div>
    </nav>

   <main>
    <h1>Minhas tarefas</h1>
    <div class="container-pai">
      
        <form action="" method="POST">
            <input type="text" id="tarefa-input" name="titulo" placeholder="Título da tarefa" required>
            <input type="text" id="descricao-tarefa" name="descricao" placeholder="Descreva sua tarefa" required>
            <input type="date" id="prazo-entrega" name="prazo" placeholder="Prazo de entrega" required>
            <input type="submit" name="submit" value="Criar">
        </form>

        <div class="painel-tarefas">
            <div class="card-tarefa">
                <fieldset>Título da tarefa</fieldset>
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia temporibus, cupiditate voluptate voluptas voluptatem iste consectetur minima.</p>
                </div>
                <div>
                    <p>Prazo: 20/08/2005</p>
                </div>
                <div class="acoes">
                    <button type="submit">Fechar tarefa</button>
                    <button type="submit">Excluir tarefa</button>
                    <button type="submit">Editar</button>
                </div>
            </div>
        </div>
    </div>
</main>
   <script src="../javascript/home.js"></script>
</body>
</html>