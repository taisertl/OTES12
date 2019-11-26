<!doctype html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="owl-carousel/assets/owl.carousel.min.css" type="text/css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Backup</title>
</head>

<body>

    <div id="fh5co-hero-carousel" class="carousel slide header" data-ride="carousel">
        <nav class="navbar fixed-top navbar-expand-xl">
            <div class="container">
                <a class="navbar-brand mobile-logo" href="#"><img src="images/logo.png" alt="Vista Pro" /></a>
                <button class="navbar-toggler" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse">
                    <span class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span> </button>

                <div id="my-nav" class="collapse navbar-collapse">

                    <ul class="navbar-nav mx-auto logo-desktop">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><img src="images/logo.png" alt="Vista Pro" /></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div>
            <div class="carousel-item active">

                <img class="d-block w-100 home-bg" alt="home-bg" src="images/home-bg.png">

                <div class="carousel-caption d-md-block">
                    <p class="frst-hrd">SERVIÇO</p>
                    <h5 style=""> BACKUP</h5>

                </div>
            </div>

        </div>
        <div class="scroll-button">
            <p>Role para ver mais...</p>
            <a href="#contact" class="page-scroll">
                <img src="images/arrows-down.png" alt="arrow down" />
            </a>

        </div>
    </div>

    <footer class="container-fluid fh5co-footer">
        <div class="container" id="contact" align="center">
            <div class="col-lg-7">
                <div class="form-box" align="center">
                    <h4>REALIZAR BACKUP</h4>
                    <p>Insira abaixo o Json das informações que deseja armazenar</p>
                    <hr />
                    <form action="realizabkp.php" method="post">
                        <table class="table table-light table-borderless">
                            <tr>
                                <td colspan="2">
                                    <textarea class="form-control" placeholder="{JSON}" id="json_post" name="json_post"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button type="submit">
                                        ENVIAR
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </footer>

    <footer class="container-fluid fh5co-footer">
        <div class="container" id="contact" align="center">
            <div class="col-lg-7">
                <div class="form-box" align="center">
                    <h4>RESTAURAR BACKUP</h4>
                    <p>Insira abaixo o ID do backup que deseja recuperar</p>
                    <hr />
                    <form action="restaurabkp.php" method="post">
                        <table class="table table-light table-borderless">
                            <tr>
                                <td>
                                    <input type="text" id="id" name="id" class="form-control" placeholder="ID...">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button type="submit">
                                        ENVIAR
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </footer>

    <footer class="container-fluid fh5co-footer">
        <div class="container" id="contact" align="center">
            <div class="col-lg-7">
                <div class="form-box" align="center">
                    <h4>ATUALIZAR BACKUP</h4>
                    <p>Insira abaixo o ID e o Json do backup que deseja atualizar</p>
                    <hr />
                    <form action="atualizabkp.php" method="post">
                        <table class="table table-light table-borderless">
                            <tr>
                                <td>
                                    <input type="text" class="form-control" id="id" name="id" placeholder="ID...">
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <textarea class="form-control" id="json_post" name="json_post" placeholder="{JSON}"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button type="submit">
                                        ENVIAR
                                    </button>

                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </footer>

    <footer class="container-fluid fh5co-footer">
        <div class="container" id="contact" align="center">
            <div class="col-lg-7">
                <div class="form-box" align="center">
                    <h4>DESFAZER ÚLTIMA ATUALIZAÇÃO</h4>
                    <p>Insira o ID do último backup atualizado para restaurar</p>
                    <hr />
                    <form action="desfazeratualizarbkp.php" method="post">
                        <table class="table table-light table-borderless">
                            <tr>
                                <td>
                                    <input type="text" id="id" name="id" class="form-control" placeholder="ID...">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button type="submit">
                                        ENVIAR
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </footer>

    <footer class="container-fluid fh5co-footer">
        <div class="container" id="contact" align="center">
            <div class="col-lg-7">
                <div class="form-box" align="center">
                    <h4>DELETAR BACKUP</h4>
                    <p>Insira abaixo o ID do backup que deseja apagar</p>
                    <hr />
                    <form action="deletabkp.php" method="post">
                        <table class="table table-light table-borderless">
                            <tr>
                                <td>
                                    <input type="text" class="form-control" id="id" name="id" placeholder="ID...">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button type="submit">
                                        ENVIAR
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </footer>

    <footer class="container-fluid fh5co-footer">
        <div class="container" id="contact" align="center">
            <div class="col-lg-7">
                <div class="form-box" align="center">
                    <h4>DESFAZER ÚLTIMA EXCLUSÃO</h4>
                    <p>Selecione o ID o último backup excluído para restaurar</p>
                    <hr />
                    <form action="desfazerdeletabkp.php" method="post">
                        <table class="table table-light table-borderless">
                            <tr>
                                <td>
                                    <input type="text" id="id" name="id" class="form-control" placeholder="ID...">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button type="submit">
                                        ENVIAR
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </footer>

    <footer class="container-fluid fh5co-footer">
        <div class="container" id="contact" align="center">
            <div class="col-lg-7">
                <div class="form-box" align="center">
                    <h4>LISTAR BACKUPS</h4>
                    <p>Clique no botão abaixo apara listar todos os backups realizados</p>
                    <hr />
                    <form action="listabkp.php" method="post">
                        <table class="table table-light table-borderless">
                            <tr>
                                <td colspan="2">
                                    <button type="submit">
                                        ENVIAR
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </footer>

    <section class="ftco-section ftco-counter bg-light img" id="section-counter">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-10 text-center heading-section ftco-animate">
                    <h2 class="mb-4" style="margin-top: 5%;">MÉTRICAS DO SERVIÇO</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <strong style="font-size: 32px; color:-webkit-linear-gradient(0deg, #1270e4 0%, #58c0ff 100%) !important;">
                            <?php
                            include "callapi.php";
                            include "globals.php";
                            include "nlistmanager.php";
                            include "urls.php";


                            $lista = callAPI('GET', $tais.'/backups', false);
                            $lista = json_decode($lista, true);

                            $numeros = array();
                            
                            //tamanho de cada bkp
                            foreach ($lista as &$value) {
                                array_push($numeros, $value['tamanhoArquivo']);
                            }

                            $id_med_tamanho = get_id_med_tamanho();

                            gravar_com_nova_lista($id_med_tamanho, $numeros);

                            $id_med_tamanho = get_id_med_tamanho();

                            $get_data = callAPI('GET', $anthony.'/numberlist/average/' . $id_med_tamanho, false);
                            $response = json_decode($get_data, true);
                            echo $response;
                            ?>
                        </strong> <br>
                        <span>Média do tamanhos dos backups</span>
                    </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <strong style="font-size: 32px; color:-webkit-linear-gradient(0deg, #1270e4 0%, #58c0ff 100%) !important;">
                            <?php
                            $id_med_tempo = get_id_med_tempo();

                            if ($id_med_tempo == '?') {
                                echo 0;
                            } else {
                                $data = callAPI('GET', $anthony.'/numberlist/average/' . $id_med_tempo, false);
                                $data = json_decode($data, true);
                                echo $data;
                            }
                            ?>
                        </strong> <br>
                        <span>Média do tempo para fazer backup</span>
                    </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <strong style="font-size: 32px; color:-webkit-linear-gradient(0deg, #1270e4 0%, #58c0ff 100%) !important;">
                            <!--4-->
                            <?php
                            $lista = callAPI('GET', $tais.'/backups', false);
                            $lista = json_decode($lista, true);

                            echo count($lista);
                            ?>
                        </strong> <br>
                        <span>Quantidade de backups</span>
                    </div>
                </div>
                <br> <br> <br> <br> <br>
            </div>
        </div>
    </section>


    <footer class="container-fluid fh5co-footer">
        <div class="container" id="contact" align="center">
            <div class="col-lg-7">
                <div class="form-box" align="center">
                    <h4>FIQUE LIGADOS NAS ATUALIZAÇÕES</h4>
                    <p>Insira abaixo o seu e-mail para ser informado de novos backups</p>
                    <hr />
                    <form action="addemail.php" method="post">
                        <table class="table table-light table-borderless">
                            <tr>
                                <td><input type="text" id="email" name="email" class="form-control" placeholder="Email...">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button type="submit">
                                        ENVIAR
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="owl-carousel/owl.carousel.min.js"></script>
    <script src="js/isotope-docs.min.js?6"></script>
    <script src="js/main.js"></script>
</body>

</html>
