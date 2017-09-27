<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap 101 Template</title>
        <!-- Bootstrap -->
        <link href="bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    </head>
    <body style="margin-left: 100px">
        <h1>H&aacute; vida em Marte??</h1>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span2">
                    <!--conteúdo da lateral-->
                </div>
                <div class="span10" style="margin-left: 100px;">
                    <p class="muted"><b>Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</b></p>
                    <p class="text-warning"><b>Etiam porta sem malesuada magna mollis euismod.</b></p>
                    <p class="text-error"><b>Donec ullamcorper nulla non metus auctor fringilla.</b></p>
                    <p class="text-info"><b>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.</b></p>
                    <p class="text-success"><b>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</b></p>
                </div>
            </div>
        </div>


        <div class="control-group warning" style="margin-left: 115px;">
            <label class="control-label" for="inputWarning">Input com aviso</label>
            <div class="controls">
                <input type="text" id="inputWarning">
                <span class="help-inline">Alguma coisa deu errado</span>
            </div>
        </div>
        <div class="control-group error" style="margin-left: 115px;">
            <label class="control-label" for="inputError">Input com erro</label>
            <div class="controls">
                <input type="text" id="inputError">
                <span class="help-inline">Por favor, corrija o erro</span>
            </div>
        </div>
        <div class="control-group success" style="margin-left: 115px;">
            <label class="control-label" for="inputSuccess">Input com sucesso</label>
            <div class="controls">
                <input type="text" id="inputSuccess">
                <span class="help-inline">wowww</span>
            </div>
        </div>

        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">

                    <!-- .btn-navbar é usado como alternador para conteúdo de barra de navegação colapsável -->
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <!-- Tenha certeza de deixar a marca se você quer que ela seja mostrada -->
                    <a class="brand" href="#">Nome do projeto</a>

                    <!-- Tudo que você queira escondido em 940px ou menos, coloque aqui -->
                    <div class="nav-collapse collapse">
                        <!-- .nav, .navbar-search, .navbar-form, etc -->
                    </div>

                </div>
            </div>
        </div>

        <a><button class="btn">Teste</button></a>
        <a><button class="btn btn-primary">Teste</button></a>
        <a><button class="btn btn-info">Teste</button></a>
        <a><button class="btn btn-success">Teste</button></a>
        <a><button class="btn btn-warning">Teste</button></a>
        <a><button class="btn btn-danger">Teste</button></a>
        <a><button class="btn btn-inverse">Teste</button></a>
        <a><button class="btn btn-link">Teste</button></a>


        <div class="progress progress-info progress-striped">
            <div class="bar" style="width: 20%"></div>
        </div>
        <div class="progress progress-success progress-striped">
            <div class="bar" style="width: 40%"></div>
        </div>
        <div class="progress progress-warning progress-striped">
            <div class="bar" style="width: 60%"></div>
        </div>
        <div class="progress progress-danger progress-striped">
            <div class="bar" style="width: 80%"></div>
        </div>
    </body>
</html>