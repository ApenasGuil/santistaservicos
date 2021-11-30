<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="description" content="A Santista Serviços é uma empresa no ramo de terceirização, buscando a excelência na execução do serviço da mão de obra terceirizada">
    <meta name="keywords" content="terceirização, serviços, mão de obra terceirizada, qualidade, garantia, satisfação">
    <meta name="author" content="Guilherme de Moraes Souza">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!-- <link type="text/css" rel="stylesheet" href="css-mat/materialize.min.css"  media="screen,projection"/> -->
    <link rel="stylesheet" href="css/fontawesome-free-5.8.1-web/css/all.min.css" type="text/css">
    <link rel="shortcut icon" href="img/icon3.png">
    <script src="js/jquery.js"></script>
    <script src="js/jquery.maskedinput.js"></script>
    <script src="js/validacao.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/popper.js"></script>
    <script>
        $(document).ready(function() {
            $('.date').mask('00/00/0000');
            $('.selectonfocus').mask("00/00/0000", {
                selectOnFocus: true
            });
        });
    </script>
    <script type="text/javascript" src="js-mat/materialize.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-202601995-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-202601995-1');
    </script>

    <style>
        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 35px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }

        .rodape {
            background-color: rgba(4, 35, 57, 0.9);
            font-family: 'Raleway';
        }
    </style>

    <link href="css/BubblegumSans-Regular.css" rel="stylesheet">
    <Title>Santista Serviços Terceirizados Eirele</Title>
</head>

<body>
    <div class="container-fluid">

        <div class="row mt-2 mb-2">
            <a href="https://api.whatsapp.com/send?phone=5513974141021" class="float" target="_blank">
                <i class="fab fa-whatsapp my-float"></i>
            </a>
        </div>

        <div class="row mt-2 mb-2">
            <div class="offset-md-1"></div>
            <div class="col-12 col-md-3 mt-5">
                <img src="img/logo.jpg" class="img-fluid bordaAzul">
            </div>
            <div class="col-md-7">
                <h1 class="site-heading text-center text-white d-none d-lg-block">
                    <span class="site-heading-upper text-primary mb-3 titulo">Santista</span>
                    <span class="site-heading-lower text-primary mb-3 titulo">Serviços</span>
                </h1>
            </div>
            <div class="offset-md-1"></div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none text-primary" href="index">Santista Serviços</a>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item px-lg-4">
                                <a class="nav-link text-uppercase text-expanded" href="index">Sobre nós</a>
                            </li>
                            <li class="nav-item px-lg-4">
                                <a class="nav-link text-uppercase text-expanded" href="servicos">Serviços</a>
                            </li>
                            <li class="nav-item active px-lg-4">
                                <a class="nav-link text-uppercase text-expanded" href="agendamento">Faça seu orçamento<span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row mt-3 mb-3">
            <div class="offset-md-3"></div>
            <div class="col-md-6">
                <i class="card-text bgcar px-4">Agende conosco</i>

                <form action="agendamento-email" method="post" name="agendamento" onSubmit="return validar()">
                    <div class="form-group">
                        <i class="fas fa-user textoCinza corperso"></i>
                        <label for="nomeDono" class="text-white">Nome Completo</label>
                        <input type="text" class="form-control times" id="txtNome" name="ntxtNome" required>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-at textoCinza corperso"></i>
                        <label for="email" class="text-white">E-mail pessoal</label>
                        <input type="text" class="form-control times" id="txtEmail" name="ntxtEmail" required>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-phone textoCinza corperso"></i>
                        <label for="telefoneCelular" class="text-white">Telefone</label>
                        <input type="text" class="form-control times txtTelefone" id="txtTelefone" name="ntxtTelefone" maxlength="15" required>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-calendar-alt textoCinza corperso"></i>
                        <label for="" class="text-white col-form-label">Data de interesse</label>
                        <input class="form-control date" maxlength="10" type="text" id="txtData" name="ntxtData" required>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-envelope-open-text textoCinza corperso"></i>
                        <label for="mensagem" class="text-white">Mensagem</label>
                        <textarea class="form-control times" id="txtMensagem" name="ntxtMensagem" required></textarea>
                    </div>

                    <button name="Submit" type="submit" class="btn bgcar mb-2">Enviar</button>
                </form>
            </div>
            <div class="offset-md-3"></div>
        </div>

        <div class="row">
            <div class="offset-md-1"></div>
            <div class="col-md-10">
                <i class="card-text bgcar px-4">Nossas filiais</i>
            </div>
            <div class="offset-md-1"></div>
        </div>

        <div class="row mb-2">
            <div class="offset-md-1"></div>
            <div class="col-md-5">
                <div class="card mb-3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.563173568905!2d-46.66161218502249!3d-23.548208784689354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce58306c763a0f%3A0x2ed17e1e7fdbc64e!2zQXYuIEFuZ8OpbGljYSwgMTgxNCAtIENvbnNvbGHDp8OjbywgU8OjbyBQYXVsbyAtIFNQLCAwMTIyOC0yMDA!5e0!3m2!1spt-PT!2sbr!4v1600276822598!5m2!1spt-PT!2sbr" frameborder="0" style="border:0" allowfullscreen class="embed-responsive" height="500px"></iframe>
                    <div class="card-body">
                        <p><i class="card-text bold"><i class="fas fa-map-marked corperso mr-2"></i>São Paulo</i></p>
                        <p><i class="card-text">Av. Angélica, 1814 - Cj 105</i><br><i class="card-text">Higienópolis, São Paulo</i><br><i class="fas fa-phone corperso mr-2"></i>(11) 9 5292-3085</p>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card mb-3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.9512029164!2d-46.42802014958634!3d-23.9975001843919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce1c3a3e7acef1%3A0xcc9c85979b765723!2sAv.%20Marquesa%20de%20Santos%2C%20936%20-%20S%C3%ADtio%20do%20Campo%2C%20Praia%20Grande%20-%20SP%2C%2011725-050!5e0!3m2!1spt-PT!2sbr!4v1600277060254!5m2!1spt-PT!2sbr" frameborder="0" style="border:0" allowfullscreen class="embed-responsive" height="500px"></iframe>
                    <div class="card-body">
                        <p><i class="card-text bold"><i class="fas fa-map-marked corperso mr-2"></i>Praia Grande</i></p>
                        <p><i class="card-text">Av. Marquesa de Santos, 936</i><br><i class="card-text">Tude Bastos, Praia Grande</i><br><i class="fas fa-phone corperso mr-2"></i>(13) 9 7414-1021</p>
                    </div>
                </div>
            </div>
            <div class="offset-md-1"></div>
        </div>

        <div class="row mb-3">
            <div class="offset-md-3"></div>
            <div class="col-md-6">
                <img class="img-fluid rounded" src="img/messaging.jpg" alt="">
            </div>
            <div class="offset-md-3"></div>
        </div>


    </div>
    <footer class="rodape text-center text-white">
        <div class="text-center p-3">
            <a class="text-white" href="santistaservicosterceirizados@gmail.com">santistaservicosterceirizados@gmail.com</a>
        </div>
    </footer>
    <?php
    if (isset($_GET['status'])) :
        if ($_GET['status'] == "sucesso") :
            echo "<script>M.toast({html: 'E-mail enviado com sucesso!<br>Nossa equipe entrará em contato.', displayLength: 7000});</script>";
        else :
            echo "<script>M.toast({html: 'Erro no envio!<br>Tente novamente mais tarde.'});</script>";
        endif;
    endif;
    ?>
    <script src="js/script.js"></script>
    <script>
        $(document).on('keypress', '#txtNome', function(event) {
            var regex = new RegExp("^[ça-zÇA-Z ]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });
    </script>
    <script>
        $(document).on('keypress', '#txtData', function(event) {
            var regex = new RegExp("^[0-9/]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });
    </script>
</body>

</html>