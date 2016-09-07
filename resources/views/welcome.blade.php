<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link href="{{asset('css/simple-sidebar.css')}}" rel="stylesheet">
        
    </head>
    <body>
        <div id="wrapper">
        <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="#">
                            Pokédex
                        </a>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#tipos" aria-expanded="false" aria-controls="collapseExample">
                            Tipos de Pokémon
                        </a>
                        <!-- Ésta parte se debe de hacer con la base de datos-->
                        <div id="tipos" class="collapse">
                            <ul>
                                <li><a href="#!">Agua</a></li>
                                <li><a href="#!">Fuego</a></li>
                                <li><a href="#!">Planta</a></li>
                                <li><a href="#!">Roca</a></li>
                                <li><a href="#!">Eléctrico</a></li>
                                <li><a href="#!">Lucha</a></li>
                                <li><a href="#!">Fantasma</a></li>
                                <li><a href="#!">Bicho</a></li>
                                <li><a href="#!">Psíquico/a></li>
                                <li><a href="#!">Roca</a></li>
                                <li><a href="#!">Veneno</a></li>
                                <li><a href="#!">Normal</a></li>
                            </ul>
                        </div>
                        
                    </li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Pokédex</h1>
                            <ul>
                                <li>Audelo Alarcón Carlos Alberto</li>
                                <li>Félix Madrid Martín</li>
                                <li>Imperial Rojo Rafael</li>
                                <li>Valdez Bonilla Francisco José</li>
                            </ul>
                            <p>Pokédex con todos los tipos de Pokémon de la 1a Generación.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <script src="{{asset('js/jquery.js')}}"></script>
    <!-- /#wrapper -->
        <script src="{{asset('js/bootstrap.js')}}"></script>

    </body>
</html>
