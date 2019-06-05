<!doctype html>
<html lang="pt-br">

<head>
    <title>Gerador de Currículo</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Personal CSS-->
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--Roboto-->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <!--Dropzone CSS-->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">

    <!--FontAwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--JQuery-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!--Dropzone JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>

    <!--Tippy JS-->
    <script src="https://unpkg.com/popper.js@1"></script>
    <script src="https://unpkg.com/tippy.js@4"></script>

</head>

<body>

    <div id="form">
        <div class="container py-5">
            <h2 class="text-center">Preencha o formulário com atenção!</h2>
            <form action="upload.php" class="dropzone needsclick my-5" id="dropzoneImg">
                <div class="dz-message needsclick">
                    Coloque sua foto aqui.
                </div>
            </form>
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="my-2">Primeiro nome</label>
                            <input class="form-control" type="text" placeholder="Primeiro nome">
                            <label class="my-2">E-mail</label>
                            <input class="form-control" type="text" placeholder="email@email.com">
                            <label class="my-2">Linkedin</label>
                            <input class="form-control" type="text" placeholder="email@email.com">
                            <label class="my-2">Cidade</label>
                            <input class="form-control" type="text" placeholder="Cuiabá">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="my-2">Segundo nome</label>
                        <input class="form-control" type="text" placeholder="Segundo nome">
                        <label class="my-2">Celular</label>
                        <input class="form-control" type="text" placeholder="(65) 99999-9999">
                        <label class="my-2">Telefone</label>
                        <input class="form-control" type="text" placeholder="(65) 2222-2222">
                        <label class="my-2">Data de nascimento</label>
                        <input type="date" class="form-control" />
                    </div>
                </div>
                <div class="mt-3">
                    <h2>Objetivo</h2>
                    <textarea id="objetivo" class="form-control" rows="3"></textarea>
                </div>
                <div class="mt-3">
                    <h2>Experiência</h2>
                    <h4 id="ultimos_trabalhos">Últimos trabalhos</h4>
                    <div id="cargo">
                        <div id="cargos_row" class="row">
                            <div class="col-md-8">
                                <input type="text" class="form-control my-2"
                                    placeholder="Empresa – Data Início – Data Final – Contato na empresa (Nome e telefone)">
                            </div>
                            <!-- <div class="col-md-6">
                                <label>Telefone da empresa</label>
                                <input type="text" class="form-control" placeholder="(65) 9999-9999">
                            </div> -->
                        </div>
                        <!-- <div class="row my-2">
                            <div class="col-md-6">
                                <label>Data início</label>
                                <input type="date" class="form-control" />
                            </div>
                            <div class="col-md-6">
                                <label>Data final</label>
                                <input type="date" class="form-control" />
                            </div>
                        </div>
                    </div> -->
                        <div class="text-center my-3">
                            <button id="adicionar_cargo" type="button" class="btn btn-info">Adicionar cargo</button>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <h2 id="idiomas">Idiomas</h2>
                    <div id="idiomas_row" class="row">
                        <div class="col-md-8">
                            <input type="text" class="form-control my-2"
                                placeholder="Curso – Instituição – Data – Nível ou Idioma e Nível" />
                        </div>
                    </div>
                    <div class="text-center my-3">
                        <button id="adicionar_idioma" type="button" class="btn btn-info">Adicionar idioma</button>
                    </div>
                </div>
                <div class="mt-3">
                    <h2 id="capacitacao">Capacitações</h2>
                    <div id="capacitacao_row" class="row">
                        <div class="col-md-8">
                            <input type="text" class="form-control my-2"
                                placeholder="Curso – Instituição – Data de conclusão - Carga horaria" />
                        </div>
                    </div>
                    <div class="text-center my-3">
                        <button id="adicionar_capacitacao" type="button" class="btn btn-info">Adicionar
                            capacitação</button>
                    </div>
                </div>
                <div class="mt-3">
                    <h2 id="observacoes">Observações</h2>
                    <textarea id="observacao" class="form-control" rows="3"></textarea>
                </div>
                <div class="text-center">
                    <button id="submit" class="btn btn-success btn-lg my-5" type="button">Gerar currículo</button>
                </div>
            </form>
        </div>
    </div>

    <!--PDF Preview-->
    <!-- <div id="pdf-preview">
        <div class="container-fluid py-3 px-5">
            <div class="row text-center">
                <div class="col-md-12">
                    <img id="foto" src="upload/ea.png" align="right" class="img-fluid img-thumbnail rounded">
                    <h4 id="pdf-nome">Nome e Sobrenome</h4>
                    <h4 id="pdf-linkedin" class="lead">Linkedin</h4>
                    <h4>Contato</h4>
                    <h4 id="pdf-telefone" class="lead">Telefone: </h4>
                    <h4 id="pdf-email" class="lead">E-mail: </h4>
                    <h4 id="pdf-data-nascimento" class="lead">Data de nascimento: </h4>
                    <h4 id="pdf-estado-civil" class="lead">Estado Civil: </h4>
                </div>
            </div>

            <div class="topic text-center my-3">
                <h2>Objetivo</h2>
            </div>

            <div class="row">
                <div class="col-md-12 text-left">
                    <p id="pdf-objetivo" class="lead">Seu objetivo aqui. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum.</p>
                </div>
            </div>

            <div class="topic text-center">
                <h2>Resumo</h2>
            </div>

            <div class="row">
                <div class="col-md-12 text-left">
                    <p id="pdf-resumo" class="lead">Seu objetivo aqui. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum.</p>
                </div>
            </div>

            <div class="topic text-center">
                <h2>Experiência</h2>
            </div>

            <div class="row">
                <div class="col-md-12 text-left">
                    <ul id="pdf-cargos-list">
                        <li class="lead">Cargo 1</li>
                    </ul>
                </div>
            </div>

            <div class="topic text-center">
                <h2>Idiomas</h2>
            </div>

            <div class="row">
                <div class="col-md-12 text-left">
                    <ul id="pdf-idiomas-list">
                        <li class="lead">Idioma 1</li>
                    </ul>
                </div>
            </div>

            <div class="topic text-center">
                <h2>Capacitações</h2>
            </div>

            <div class="row">
                <div class="col-md-12 text-left">
                    <ul id="pdf-capacitacoes-list">
                        <li class="lead">Capacitações 1</li>
                    </ul>
                </div>
            </div>

            <div class="topic text-center">
                <h2>Observações</h2>
            </div>

            <div class="row">
                <div class="col-md-12 text-left">
                    <p id="pdf-resumo" class="lead">Seu objetivo aqui. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum.</p>
                </div>
            </div>

        </div>
    </div> -->

    <div id="pdf-preview">
        <div id="red-bar"></div>

        <div class="container py-5">
            <div class="row px-5">
                <img id="foto" src="upload/ea.png" align="right" class="img-fluid img-thumbnail rounded-circle">
                <h3 class="font-weight-normal text-uppercase">Nome</h3>
                <h3 class="font-weight-normal text-uppercase" style="color:#C2331A;"><br>Sobrenome</h3>
            </div>
        </div>

        <div id="red-bar"></div>
    </div>

    <script src="main.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
