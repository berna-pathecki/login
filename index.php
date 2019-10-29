<!doctype html>
<html lang="en">
<!-- 
    Para acessar o PROJETO 
    http://localhost/login/
-->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
    <title>Sistema de Login</title>
    <style>
        #alerta,
        #caixaSenha,
        #caixaRegistro,
        #novoForm {
            display: none;
        }
    </style>
</head>

<body class="bg-dark">
    <main class="container mt-4">
        <section class="row">
            <div class="col-lg-4 offset-lg-4" id="alerta">
                <div class="alert alert-success text-center">
                    <strong class="resultado">
                        AOOOOOOBAAAAAAAA
                    </strong>
                </div>
            </div>
        </section>
        <!-- Formulário de Login -->
        <section class="row">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="caixaLogin">
                <h2 class="text-center mt-2">
                    Entrar no Sistema
                </h2>
                <form action="#" method="post" class="p-2" id="formLogin">
                    <div class="form-group">
                        <input type="text" name="nomeUsuario" id="nomeUsuario" placeholder="Nome de Usuario" class="form-control" required minlength="5" value="<?= isset($_COOKIE['nomeDoUsuario']) ? $_COOKIE['nomeDoUsuario'] : "" ?>">
                    </div>
                    <div class="form-group">
                        <input type="password" name="senhaUsuario" id="senhaUsuario" placeholder="Insira sua Senha" class="form-control" required minlength="8" value="<?= isset($_COOKIE['senhaDoUsuario']) ? $_COOKIE['senhaDoUsuario'] : "" ?>">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox mt-5">
                            <input type="checkbox" name="lembrar" id="lembrar" class="custom-control-input" <?= isset($_COOKIE['nomeDoUsuario']) ? " checked" : "" ?>>
                            <label for="lembrar" class="custom-control-label">
                                Lembrar Usuário
                            </label>
                            <a href="#" class="float-right" id="btnEsqueci">
                                Esqueceu sua senha!
                            </a>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="||Entrar||" name="btnEntrar" id="btnEntrar" class="btn btn-primary btn-block">
                    </div>
                    <div class="form-group">
                        <p class="text-center">
                            Novo Usuário ?
                            <a href="#" id="btnRegistrarNovo">
                                Registre-se Aqui!
                            </a>
                        </p>
                    </div>

                    <div class="form-group">
                        <p class="text-center">
                            <a href="#" id="btnMostrarNovo">
                                Mostrar
                            </a>
                        </p>
                    </div>

                </form>
            </div>
        </section>
        <!-- Final da Seção do Formulário de Login -->
        <!-- Formulário de Recuperação de Senha-->
        <section class="row mt-3">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="caixaSenha">
                <h2 class="text-center mt-2">
                    Gerar Nova Senha
                </h2>
                <form action="#" method="post" id="formSenha" class="p-2">
                    <div class="form-group">
                        <small class="text-muted">
                            Para gerar uma nova senha, digite o seu e-mail.
                            Clique no link gerado.
                        </small>
                    </div>
                    <div class="form-group">
                        <input type="email" name="emailGerarSenha" id="emailGerarSenha" class="form-control" placeholder="E-mail de recuperação de senha" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="||Gerar||" name="btnGerar" id="btnGerar" class="btn btn-primary btn-block">
                    </div>
                    <div class="form-group">
                        <p class="text-center">
                            Já Registrado?
                            <a href="#" id="btnJaRegistrado">
                                Entrar por Aqui.
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </section>
        <!-- Fim da Seção de Recuperação de Senha -->
        <!-- Início do formulário de cadastro de novos usuários -->
        <section class="row mt-3 ">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="caixaRegistro">
                <h2 class="text-center mt-2">Registra-se aqui!</h2>
                <form action="#" method="post" class="p-2" id="formRegistro">
                    <div class="form-group">
                        <input type="text" name="nomeCompleto" id="nomeCompleto" class="form-control" placeholder="Nome Completo" required minlength="7">
                    </div>
                    <div class="form-group">
                        <input type="text" name="nomeDoUsuario" id="nomeDoUsuario" class="form-control" placeholder="Nome do Usuário" required minlength="5">
                    </div>
                    <div class="form-group">
                        <input type="email" name="emailUsuario" id="emailUsuario" class="form-control" placeholder="E-Mail" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="url" name="perfilURL" id="perfilURL" placeholder="Insira a URL de uma imagem">
                    </div>
                    <div class="form-group">
                        <input type="password" name="senhaDoUsuario" id="senhaDoUsuario" class="form-control" placeholder="Sua Senha" required minlength="8">
                    </div>
                    <div class="form-group">
                        <input type="password" name="senhaUsuarioConfirmar" id="senhaUsuarioConfirmar" class="form-control" placeholder="Confimar Senha" required minlength="8">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox mt-4">
                            <input type="checkbox" name="concordar" id="concordar" class="custom-control-input">
                            <label for="concordar" class="custom-control-label">
                                Eu concordo com <a href="#">os termos e condições</a>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="||Registrar||" name="btnRegistrar" id="btnRegistrar" class="btn btn-primary btn-block">
                    </div>
                    <div class="form-group">
                        <p class="text-center">
                            Já Registrado?
                            <a href="#" id="btnJaRegistrado2">
                                Entrar por Aqui.
                            </a>
                        </p>
                    </div>

                </form>
            </div>
        </section>
        <!-- Final do formulário do cadastro de novos usuários -->

        <!-- Inicio da atividade de "NOVO" formulário -->
        <section class="row">
            <div class="col-lg-4 offset-lg-4 bg-light " id="novoForm">
                <h2 class="text-center mt-3">
                    Novo Formulário
                </h2>
                <form action="#" method="post" class="p-2">
                    <div class="form-group">
                        <label for="">Nome Completo</label>
                        <input class="form-control" type="text" name="nNomeCompleto" id="nNomeCompleto" placeholder="Insira o seu Nome Completo">
                    </div>

                    <div class="form-group">
                        <label for="">E-Mail</label>
                        <input class="form-control" type="email" name="nEmailUsuario" id="nEmailUsuario" placeholder="Insira seu e-mail">
                    </div>

                    <div class="form-group">
                        <label for="">Data de Nascimento</label>
                        <input class="form-control" type="date" name="nDataNiver" id="nDataNiver">
                    </div>

                    <div class="form-group">
                        <label for="">Rede Social</label>
                        <input class="form-control" type="url" name="nRedeSocial" id="nRedeSocial" placeholder="Insira o link da sua rede social">
                    </div>

                    <div class="form-group">
                        <label for="">Imagem de Perfil</label>
                        <input class="form-control" type="url" name="nImgPerfil" id="nImgPerfil" placeholder="Insira a URL de uma imagem">
                    </div>

                    <div class="form-group">
                        <label for="">Selecione seu Estado</label>
                        <select class="form-control" name="nSelectEstado" id="nSelectEstado">
                            <option value=""></option>
                            <option value="nPR">Paraná</option>
                            <option value="nSC">Santa Catarina</option>
                            <option value="nRS">Rio Grande do Sul</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Selecione sua cidade</label>
                        <select class="form-control" name="nSelectCidade" id="nSelectCidade">
                            <option value=""></option>
                            <option value="nBrusque">Brusque</option>
                            <option value="nGuabiruna">Guabiruba</option>
                            <option value="nGaspar">Gaspar</option>
                            <option value="nNovaTrento">Nova Trento</option>
                            <option value="nBlumenau">Blumenau</option>
                            <option value="nItajai">Itajaí</option>
                        </select>
                    </div>

                    <input type="submit" value="||Entrar||" name="btnConcluir" id="btnConcluir" class="btn btn-primary btn-block">

                    <div class="form-group">
                        <p class="text-center">
                            Já Registrado?
                            <a href="#" id="btnJaRegistrado3">
                                Entrar por Aqui.
                            </a>
                        </p>
                    </div>

                </form>
            </div>
        </section>
    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script>
        // Código JQuery para mostrar e ocultar os formulários
        // HIDE é pra OCULTAR
        // SHOW é pra MOSTRAR 
        $(function() {
            // Validação de Formulários
            jQuery.validator.setDefaults({
                success: "valid"
            });
            $("#formRegistro").validate({
                rules: {
                    senhaDoUsuario: "required",
                    senhaUsuarioConfimar: {
                        equalTo: "#senhaDoUsuario"
                    }
                }
            });
            $("#formLogin").validate();
            $("#formSenha").validate();
            $("#btnEsqueci").click(function() {
                $("#caixaLogin").hide();
                $("#caixaRegistro").hide();
                $("#caixaSenha").show();
            });
            $("#btnRegistrarNovo").click(function() {
                $("#caixaLogin").hide();
                $("#caixaSenha").hide();
                $("#caixaRegistro").show();
            });
            $("#btnJaRegistrado, #btnJaRegistrado2, #btnJaRegistrado3  ").click(function() {
                $("#caixaLogin").show();
                $("#caixaSenha").hide();
                $("#caixaRegistro").hide();
            });
            $("#btnMostrarNovo").click(function() {
                $("#novoForm").show();
                $("#caixaLogin").hide();
                $("#caixaSenha").hide();
                $("#caixaRegistro").hide();
            })
            $("#btnConcluir").click(function() {
                $("#novoForm").hide();
                $("#caixaLogin").show();
                $("#caixaSenha").hide();
                $("#caixaRegistro").hide();
            })


            //Cadastro de novo usuario #btnRegistrar || #formRegistro
            $("#btnRegistrar").click(function(e) {
                if (document.querySelector("#formRegistro").checkValidity()) {
                    e.preventDefault(); //Não abrir outra página

                    //Envio dos dados via Ajax
                    $.ajax({
                        url: 'recebe_dados.php',
                        method: 'post',
                        data: $("#formRegistro").serialize() + '&action=cadastro',
                        success: function(resposta) {
                            $("#alerta").show();
                            $(".resultado").html(resposta);
                        }
                    });
                }
                return true;
            });
            //Login #btnEntrar || #formLogin
            $("#btnEntrar").click(function(e) {
                if (document.querySelector("#formLogin").checkValidity()) {
                    e.preventDefault(); //Não abrir outra página

                    //Envio dos dados via Ajax
                    $.ajax({
                        url: 'recebe_dados.php',
                        method: 'post',
                        data: $("#formLogin").serialize() + '&action=login',
                        success: function(resposta) {
                            $("#alerta").show();
                            //$(".resultado").html(resposta);
                            if (resposta === "ok") {
                                window.location = "perfil.php";
                            } else {
                                $(".resultado").html(resposta);
                            }
                        }
                    });
                }
                return true;
            });

            //Recuperação de senha #btnGerar || #formSenha
            $("#btnGerar").click(function(e) {
                if (document.querySelector("#formSenha").checkValidity()) {
                    e.preventDefault(); //Não abrir outra página

                    //Envio dos dados via Ajax
                    $.ajax({
                        url: 'recebe_dados.php',
                        method: 'post',
                        data: $("#formSenha").serialize() + '&action=senha',
                        success: function(resposta) {
                            $("#alerta").show();
                            $(".resultado").html(resposta);
                        }
                    });
                }
                return true;
            });
        });
        /*
         * Translated default messages for the jQuery validation plugin.
         * Locale: PT_BR
         */
        jQuery.extend(jQuery.validator.messages, {
            required: "Este campo &eacute; requerido.",
            remote: "Por favor, corrija este campo.",
            email: "Por favor, forne&ccedil;a um endere&ccedil;o eletr&ocirc;nico v&aacute;lido.",
            url: "Por favor, forne&ccedil;a uma URL v&aacute;lida.",
            date: "Por favor, forne&ccedil;a uma data v&aacute;lida.",
            dateISO: "Por favor, forne&ccedil;a uma data v&aacute;lida (ISO).",
            number: "Por favor, forne&ccedil;a um n&uacute;mero v&aacute;lido.",
            digits: "Por favor, forne&ccedil;a somente d&iacute;gitos.",
            creditcard: "Por favor, forne&ccedil;a um cart&atilde;o de cr&eacute;dito v&aacute;lido.",
            equalTo: "Por favor, forne&ccedil;a o mesmo valor novamente.",
            accept: "Por favor, forne&ccedil;a um valor com uma extens&atilde;o v&aacute;lida.",
            maxlength: jQuery.validator.format("Por favor, forne&ccedil;a n&atilde;o mais que {0} caracteres."),
            minlength: jQuery.validator.format("Por favor, forne&ccedil;a ao menos {0} caracteres."),
            rangelength: jQuery.validator.format("Por favor, forne&ccedil;a um valor entre {0} e {1} caracteres de comprimento."),
            range: jQuery.validator.format("Por favor, forne&ccedil;a um valor entre {0} e {1}."),
            max: jQuery.validator.format("Por favor, forne&ccedil;a um valor menor ou igual a {0}."),
            min: jQuery.validator.format("Por favor, forne&ccedil;a um valor maior ou igual a {0}.")
        });
    </script>
</body>

</html>