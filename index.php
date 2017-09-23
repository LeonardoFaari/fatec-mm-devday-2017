<!DOCTYPE html>
<html lang="en">
<?php include('head.php') ?>
<body>
    <?php include('nav.php') ?>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/header.jpeg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Local Commerce Mogi Mirim</h1>
                        <hr class="small">
                        <span class="subheading">Ganhe descontos comprando no comércio local de Mogi Mirim</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <form class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <h3>Busque seu desconto</h3>
                <div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Busque seu desconto</label>
                            <input type="text" class="form-control" placeholder="Busque seu desconto" id="name" required="" data-validation-required-message="Busque seu desconto." aria-invalid="false">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <button class="btn btn-sm">Barbearia</button>
                <button class="btn btn-sm">Cosméticos</button>
                <button class="btn btn-sm">Roupas</button>
                <button class="btn btn-sm">Alimentação</button>

            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <a href="#" data-toggle="modal" data-target="#myModal">
                        <h2 class="post-title">
                            X salada 30% de desconto
                        </h2>
                    </a>
                    <p class="post-meta">Desconto por <a href="#">Ceará Lanches</a> restam 8 items</p>
                </div>
                <div class="post-preview">
                    <a href="#" data-toggle="modal" data-target="#myModal">
                        <h2 class="post-title">
                            30% de desconto em corte de cabelo
                        </h2>
                    </a>
                    <p class="post-meta">Desconto por <a href="#">Barbearia Mogi</a> restam 8 items</p>
                </div>
                <div class="post-preview">
                    <a href="#" data-toggle="modal" data-target="#myModal">
                        <h2 class="post-title">
                            10% de desconto em qualquer suco
                        </h2>
                    </a>
                    <p class="post-meta">Desconto por <a href="#">Amazonas</a> restam 8 items</p>
                </div>
                <div class="post-preview">
                    <a href="#" data-toggle="modal" data-target="#myModal">
                        <h2 class="post-title">
                            30% de desconto em cerveja
                        </h2>
                    </a>
                    <p class="post-meta">Desconto por <a href="#">Bar do Zé</a> restam 8 items</p>
                </div>
                <div class="post-preview">
                    <a href="#" data-toggle="modal" data-target="#myModal">
                        <h2 class="post-title">
                            X salada 30% de desconto
                        </h2>
                    </a>
                    <p class="post-meta">Desconto por <a href="#">Ceará Lanches</a> restam 8 items</p>
                </div>
                <div class="post-preview">
                    <a href="#" data-toggle="modal" data-target="#myModal">
                        <h2 class="post-title">
                            30% de desconto em corte de cabelo
                        </h2>
                    </a>
                    <p class="post-meta">Desconto por <a href="#">Barbearia Mogi</a> restam 8 items</p>
                </div>
                <div class="post-preview">
                    <a href="#" data-toggle="modal" data-target="#myModal">
                        <h2 class="post-title">
                            10% de desconto em qualquer suco
                        </h2>
                    </a>
                    <p class="post-meta">Desconto por <a href="#">Amazonas</a> restam 8 items</p>
                </div>
                <div class="post-preview">
                    <a href="#" data-toggle="modal" data-target="#myModal">
                        <h2 class="post-title">
                            30% de desconto em cerveja
                        </h2>
                    </a>
                    <p class="post-meta">Desconto por <a href="#">Bar do Zé</a> restam 8 items</p>
                </div>
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Veja mais descontos &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Your Website 2016</p>
                </div>
            </div>
        </div>
    </footer>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">X salada 30% de desconto</h4>
                </div>
                <div class="modal-body">
                    <h2>Leve este código até o Ceará Lanches</h2>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="/img/qr-code.jpg" alt="">
                            <a class="btn" href="my.php">Adicionar ao meus descontos</a>
                        </div>
                        <div class="col-md-5 pull-right">
                            <img src="/img/x-salada.jpg" alt="">
                        </div>
                    </div>
                    <hr>
                    <img src="/img/ceara.png" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

    </script>

</body>

</html>