<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>APS 02</title>
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version) -->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap) -->
        <link href="css/bootstrap.css" rel="stylesheet" />
        <link rel="stylesheet" href="./css/styles.css">
        <!-- Scroll-Out -->
        <script src="./node_modules/scroll-out/dist/scroll-out.min.js"></script>
    </head>
    <body id="page-top">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">APS 02</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="https://github.com/KetchupBoost/aps2">GitHub</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead -->
        <header id="" class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="masthead-title text-uppercase text-white font-weight-bold">ATIVIDADE PRÁTICA SUPERVISIONADA</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <form method="POST">
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Nome do Aluno</span>
                                </div>
                                <input type="text" class="form-control" name="student_name" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <div class="row">
                                <div class="input-group input-group-sm mb-3 col-sm-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Curso</span>
                                    </div>
                                    <input type="text" class="form-control" name="student_course" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                                <div class="input-group input-group-sm mb-3 col-sm-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Professor</span>
                                    </div>
                                    <input type="text" class="form-control" name="professor" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Disciplina</label>
                                </div>
                                <select class="custom-select" name="discipline" id="inputGroupSelect01">
                                    <option value="Progamando com PHP" selected>PHP</option>
                                    <option value="Estrutura de Dados">Estrutura de Dados</option>
                                    <option value="Banco de Dados">Banco de Dados</option>
                                </select>
                            </div>
                            <div class="row" style="color: #fff;">
                                <div class="form-group col-sm-3">
                                    <label for="exampleInputPassword1">1º Bi</label>
                                    <input type="number" class="form-control" name="first_B" id="exampleInputPassword1" placeholder="Nota">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="exampleInputPassword1">2º Bi</label>
                                    <input type="number" class="form-control" name="second_B" id="exampleInputPassword1" placeholder="Nota">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="exampleInputPassword1">3º Bi</label>
                                    <input type="number" class="form-control" name="third_B" id="exampleInputPassword1" placeholder="Nota">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="exampleInputPassword1">4º Bi</label>
                                    <input type="number" class="form-control" name="fourth_B" id="exampleInputPassword1" placeholder="Nota">
                                </div>
                            </div>
                            <button class="btn btn-primary btn-xl js-scroll-trigger" type="submit" id="submit" name="submit">Começar</button>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <!-- About -->
        <section class="page-section bg-primary">
            <div class="about">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center">
                            <?php 
                                if(!empty(
                                    $_POST["student_name"] &&
                                    $_POST["student_course"] &&
                                    $_POST["professor"]
                                )){


                                    $name = $_POST["student_name"];
                                    $course = $_POST["student_course"];
                                    $professor = $_POST["professor"];
                                    $discipline = $_POST["discipline"];
                                    $b1 = $_POST["first_B"];
                                    $b2 = $_POST["second_B"];
                                    $b3 = $_POST["third_B"];
                                    $b4 = $_POST["fourth_B"];
                                
                                
                                    $average = ($b1 + $b2 + $b3 + $b4)/4; 
                
                                    if ($average <= 10) {
                                        $result = "Aprovado";
                                    } elseif($average < 7) {
                                        $result = "Recuperação";
                                    } elseif($average < 4) {
                                        $result = "Reprovado";
                                    }
                    
                                    echo '<h2 class="text-white mt-0">'.$name.' está '.$result.'</h2>';
                                    echo '<h2 class="text-white mt-0">Sua Média é: '.$average.'</h2>';
                                    echo '<hr class="divider light my-4" />';
                                    echo '<p class="text-white-50 mb-4"><span class="text-white"> Nome </span>: '.$name.' <span class="text-white"> Professor</span>: '.$professor.'</p>';
                                    echo '<p class="text-white-50 mb-4"><span class="text-white">Disciplina </span>: '.$discipline.'<span class="text-white"> Curso </span>: '.$course.'</p>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container"><div class="small text-center text-muted">Copyright © 2021 - Yago P</div></div>
        </footer>
        <!-- Anime Js -->
        <script src="./js/anime.min.js"></script>
        <!-- Bootstrap core JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS -->
        <script src="js/scripts.js"></script>
        <script>
            $(document).ready(function () {
                
                $("submit").click(function(){
                
                    $("#about").css("display", "block");

                });
                
            });
        </script>
    </body>
</html>
