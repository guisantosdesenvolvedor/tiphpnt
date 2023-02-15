<?php
    include "conn/connect.php";
    $lista_tipos = $conn->query('select * from tbtipos order by rotulo_tipo;');
    $row_tipos = $lista_tipos ->fetch_all();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Menu público</title>
</head>
<body>
<nav class="fixed navbar fixed-top navbar-light navbar-inverse bg-light ajustes">
    <div class="container-fluid">
        <!-- agrupamento mobile -->
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#menupublico" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand">
                <img src="images/logo_faustino_pequena.png" alt="Logotipo Churrascaria">
            </a>
        </div>
        <!-- fecha arupamento mobile -->
        <!-- nav direita -->
        <div class="collapse navbar-collapse" id="menupublico">
            <ul class="nav navbar-nav navbar-right">

            <!-- modal button -->
            
                <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="index.php#destaques">DESTAQUES</a></li>
                <li><a href="index.php#produtos">PRODUTOS</a></li>
                <!-- dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            TIPOS
                            <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <?php foreach($row_tipos as $row){?>
                        <li><a href="produtos_por_tipo.php?id_tipo=<?php echo $row[0] ?>"><?php echo $row[2] ?></a></li>
                        <?php }?>
                    </ul>
                </li>
                <!-- fim dropdown -->
                <li><a href="index.php#contato">CONTATO</a></li>
                <!-- inicio formulário de busca -->
                <form action="produtos_busca.php" method="get" name="form-busca" id="form-busca" class="navbar-form navbar-left" role="search">
                    <div class="input-group">
                            <input type="search" name="buscar" id="buscar" size="11" class="form-control" aria-label="search" placeholder="Buscar Produto" required>
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </div>
                    </div>
                </form>
                <!-- fim do formulário de busca -->
                <li class="active">
                    <a href="admin/index.php">
                        <span class="glyphicon glyphicon-user">&nbsp;ADMIN/CLIENTE</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>  
</body>
</html>