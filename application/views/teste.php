<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Banco de Oportunidades</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="<?= base_url('assets/img/favicon.png') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" type="text/css">
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" type="text/css">
        <link rel="stylesheet" href="<?= base_url('assets/fonts/font-awesome-4.3.0/css/font-awesome.min.css') ?>" type="text/css">
    </head>

    <body>
        <nav class="navbar navbar-default navbar-fixed-top no-radius no-margin" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand">
                        <img src="<?= base_url('assets/img/favicon.png') ?>" alt="logo">
                    </a>
                    <a class="navbar-brand hidden-xs" href="<?= site_url('Home') ?>">Banco de Oportunidades</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Cadastre-se <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="<?= site_url('Academico') ?>"><i class="fa fa-graduation-cap fa-fw"></i> Acadêmico</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="<?= site_url('Empregador') ?>"><i class="fa fa-suitcase fa-fw"></i> Empregador</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <b>Login</b> <span class="caret"></span>
                            </a>
                            <ul id="login-dp" class="dropdown-menu">
                                <li class="hidden" id="i-forgot-form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action="">
                                                <div class="form-group input-group">
                                                    <label for="email-remember" class="input-group-addon">
                                                        <i class="fa fa-envelope fa-fw"></i>
                                                    </label>
                                                    <input type="email" class="form-control" id="email-remember" placeholder="E-mail cadastrado" required>
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-primary" type="submit">Redefinir</button>
                                                    </span>
                                                </div>
                                                <div class="help-block text-center">
                                                    <p class="text-danger danger text-left">
                                                        Será feita a redefinição da sua senha e será enviada para o e-mail cadastrado.
                                                        <span class="text-muted">Lembrou da senha? <a class="pointer" id="i-remember">Login aqui.</a></span>
                                                    </p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li id="login-form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form class="form" role="form" method="post" action="<?= site_url('Login/doLogin') ?>" id="login-nav">

                                                <div class="form-group input-group">
                                                    <label for="email-login" class="input-group-addon">
                                                        <i class="fa fa-envelope fa-fw"></i>
                                                    </label>
                                                    <input type="email" class="form-control" id="email-login" name="email" placeholder="E-mail" required>
                                                </div>
                                                <div class="form-group input-group">
                                                    <label for="senha" class="input-group-addon">
                                                        <i class="fa fa-lock fa-fw"></i>
                                                    </label>
                                                    <input type="password" class="form-control" id="senha-login" name="senha" placeholder="Senha" required>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                                                </div>
                                                <div class="help-block text-center">
                                                    <a class="pointer" id="i-forgot">Esqueceu sua senha?</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="page-content">
            <div class="banner">
                <div class="container">
                    <div class="busca-form row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <?php if ($this->input->get('aviso') == 1) { ?>
                                <div class="alert alert-success alert-dismissible fade in" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <strong>Sucesso !</strong>  Cadastrado com sucesso! Por favor faça login para usar o sistema!
                                </div>
                            <?php } ?>
                            <?php if ($this->input->get('aviso') == 5) { ?>
                                <div class="alert alert-success alert-dismissible fade in" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <strong>Sucesso !</strong>  Mensagem enviada com sucesso!!!
                                </div>
                            <?php } ?>
                            <?php if (isset($login_falhou) && $login_falhou == TRUE) { ?>
                                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <strong>Erro !</strong> Erro ao logar, usuário ou senha invalidos!!!
                                </div>
                            <?php } ?>
                            <?php echo validation_errors(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="intro text-center">
                <h2>Lorem ipsum dolor sit amet</h2>
                <hr>

                <div class="row">
                    <div class="col-lg-4">
                        <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                        <h2>Heading</h2>
                        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus..</p>
                        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                    </div>
                    <div class="col-lg-4">
                        <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                        <h2>Heading</h2>
                        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                    </div>
                    <div class="col-lg-4">
                        <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                        <h2>Heading</h2>
                        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                    </div>
                </div>
            </div>

            <div class="intro text-center">
                <h2>Lorem ipsum dolor sit amet</h2>
                <hr>

                <div class="row">
                    <div class="col-lg-4">
                        <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                        <h2>Heading</h2>
                        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus..</p>
                        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                    </div>
                    <div class="col-lg-4">
                        <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                        <h2>Heading</h2>
                        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                    </div>
                    <div class="col-lg-4">
                        <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                        <h2>Heading</h2>
                        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                    </div>
                </div>
            </div>

            <div class="intro text-center">
                <h2>Lorem ipsum dolor sit amet</h2>
                <hr>

                <div class="row">
                    <div class="col-lg-4">
                        <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                        <h2>Heading</h2>
                        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus..</p>
                        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                    </div>
                    <div class="col-lg-4">
                        <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                        <h2>Heading</h2>
                        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                    </div>
                    <div class="col-lg-4">
                        <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                        <h2>Heading</h2>
                        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <div class="col-md-12">
                    <span class="pull-right">
                        <strong><i class="fa fa-commenting-o" aria-hidden="true"></i>
                            <a href="<?= site_url('Sugestao') ?>" >Dicas e sugestões</a>
                        </strong>
                    </span>
                    <span class="pull-left">
                        <strong>Banco de Oportunidades 2016</strong>
                    </span>
                </div>
            </div>
        </footer>


        <script src="<?= base_url('assets/js/jquery.js') ?>"></script>
        <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/scripts.js') ?>"></script>
    </body>
</html>
