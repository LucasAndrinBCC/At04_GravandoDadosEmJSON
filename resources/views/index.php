<!doctype html>
<html lang="pt-BR">
    <?php
        $contatos = json_decode(file_get_contents('../../data/contatos.json'));
    ?>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Meus Contatos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="../inc/css/style.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container-fluid">

                <a href="./index.php" class="navbar-brand">Meus Contatos</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Meus números</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">(68) 97911-3025</a></li>
                                <li><a class="dropdown-item" href="#">(68) 97911-3025</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Sair</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./salvar-contato.php">Cadastrar Contatos</a>
                        </li>
                    </ul>
                </div>

                <div class="d-flex">
                    <img src="../inc/img/ohno.jpg" class="img-navbar rounded-circle" alt="">
                </div>

            </div>
        </nav>

        <div class="container-md">

            <div class="shadow rounded mt-5 px-4 pb-2">


                <table class="table tabled-dark table-striped table-hover">

                    <thead>
                        <tr>
                            <th colspan="5" class="text-center border-bottom-0 fs-3">
                                Lista de contatos
                            </th>
                        </tr>
                        <tr>
                            <th class="table-dark bg-indigo rounded-top-left" scope="col">#</th>
                            <th class="table-dark bg-indigo text-center" scope="col">Nome</th>
                            <th class="table-dark bg-indigo text-center" scope="col">Idade</th>
                            <th class="table-dark bg-indigo text-center" scope="col">Sexo</th>
                            <th class="table-dark bg-indigo text-center rounded-top-right" scope="col">Telefone</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            if ($contatos) {
                                foreach ($contatos as $key => $contato) {
                                    ?>
                                        <tr>
                                            <th class="table-light"><?php echo $key ?></th>
                                            <td class="table-light text-center"><?php echo $contato->nome ?></td>
                                            <td class="table-light text-center"><?php echo $contato->idade ?></td>
                                            <td class="table-light text-center"><?php echo $contato->sexo ?></td>
                                            <td class="table-light text-center"><?php echo $contato->telefone ?></td>
                                        </tr>
                                    <?php
                                }
                            }
                        ?>
                    </tbody>

                </table>

                <h4>Título</h4>

                <p class="text-left">
                    Mussum Ipsum, cacilds vidis litro abertis. Posuere libero varius. Nullam a nisl ut ante blandit hendrerit. Aenean sit amet nisi. Atirei o pau no gatis, per gatis num morreus. Copo furadis é disculpa de bebadis, arcu quam euismod magna. Si num tem leite então bota uma pinga aí cumpadi! Diuretics paradis num copo é motivis de denguis. Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo! Mais vale um bebadis conhecidiss, que um alcoolatra anonimis. Casamentiss faiz malandris se pirulitá. A ordem dos tratores não altera o pão duris. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio. Per aumento de cachacis, eu reclamis. Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non ipsum felis.
                </p>

            </div>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
</html>