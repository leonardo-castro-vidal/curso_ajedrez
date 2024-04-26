<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de Ajedrez</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" />
    <style>
        .white {
            height: 60px;
            width: 60px;
            background-color: white;
            border: 0px solid white;
            font-size: 25px;
            text-align: center;
        }

        .black {
            height: 60px;
            width: 60px;
            background-color: #D18B47;
            color: white;
            border: 0px solid red;
            font-size: 25px;
            text-align: center;
        }


        td {
            padding: 0px;
        }

        /*
        .borde_superior_tablero{
            border-top: 1px solid black;
        }

        .borde_izquierdo_tablero{
            border-left: 1px solid black;
        }

        .borde_derecho_tablero{
            border-right: 1px solid black;
        }

        .borde_inferior_tablero{
            border-bottom: 1px solid black;
        }

        */
        body {
            min-height: 2000px;
            padding-top: 70px;
        }

        /*Campos de texto*/
        input[type=text] {
            padding: 12px 10px;
            box-sizing: border-box;
            /* border: 1px solid white; */
            outline: none;
        }

        input[type=text]:focus {
            border: 4px solid blue;
        }

        .bordes {
            border: 1px solid red;
        }
    </style>
</head>

<body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Curso de Ajedrez</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../navbar/">Default</a></li>
                    <li><a href="../navbar-static-top/">Static top</a></li>
                    <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-md-3 bordes">
                <img src="images/Chess_rdl45.svg.png" id="img_torre_negra" alt="chess_black_king" height="60" width="60" />
            </div>
            <div class="col-md-6 bordes">
                <table class="">
                    <thead>
                        <tr>
                            <th>
                                <select name="" id="" class="form-control">
                                    <option value="a">a</option>
                                    <option value="b">b</option>
                                    <option value="c">c</option>
                                    <option value="d">d</option>
                                    <option value="e">e</option>
                                    <option value="f">f</option>
                                    <option value="g">g</option>
                                    <option value="h">h</option>
                                </select>
                            </th>
                            <th>
                                <select name="" id="" class="form-control">
                                    <option value="a">a</option>
                                    <option value="b">b</option>
                                    <option value="c">c</option>
                                    <option value="d">d</option>
                                    <option value="e">e</option>
                                    <option value="f">f</option>
                                    <option value="g">g</option>
                                    <option value="h">h</option>
                                </select>
                            </th>
                            <th>
                                <select name="" id="" class="form-control">
                                    <option value="a">a</option>
                                    <option value="b">b</option>
                                    <option value="c">c</option>
                                    <option value="d">d</option>
                                    <option value="e">e</option>
                                    <option value="f">f</option>
                                    <option value="g">g</option>
                                    <option value="h">h</option>
                                </select>
                            </th>
                            <th>
                                <select name="" id="" class="form-control">
                                    <option value="a">a</option>
                                    <option value="b">b</option>
                                    <option value="c">c</option>
                                    <option value="d">d</option>
                                    <option value="e">e</option>
                                    <option value="f">f</option>
                                    <option value="g">g</option>
                                    <option value="h">h</option>
                                </select>
                            </th>
                            <th>
                                <select name="" id="" class="form-control">
                                    <option value="a">a</option>
                                    <option value="b">b</option>
                                    <option value="c">c</option>
                                    <option value="d">d</option>
                                    <option value="e">e</option>
                                    <option value="f">f</option>
                                    <option value="g">g</option>
                                    <option value="h">h</option>
                                </select>
                            </th>
                            <th>
                                <select name="" id="" class="form-control">
                                    <option value="a">a</option>
                                    <option value="b">b</option>
                                    <option value="c">c</option>
                                    <option value="d">d</option>
                                    <option value="e">e</option>
                                    <option value="f">f</option>
                                    <option value="g">g</option>
                                    <option value="h">h</option>
                                </select>
                            </th>
                            <th>
                                <select name="" id="" class="form-control">
                                    <option value="a">a</option>
                                    <option value="b">b</option>
                                    <option value="c">c</option>
                                    <option value="d">d</option>
                                    <option value="e">e</option>
                                    <option value="f">f</option>
                                    <option value="g">g</option>
                                    <option value="h">h</option>
                                </select>
                            </th>
                            <th>
                                <select name="" id="" class="form-control">
                                    <option value="a">a</option>
                                    <option value="b">b</option>
                                    <option value="c">c</option>
                                    <option value="d">d</option>
                                    <option value="e">e</option>
                                    <option value="f">f</option>
                                    <option value="g">g</option>
                                    <option value="h">h</option>
                                </select>
                            </th>
                        </tr>
                    </thead>
                    <tbody style="border: 1px solid black;">
                        <tr>
                            <td><input type="text" maxlength="2" name="nombre" class="white borde_izquierdo_tablero borde_superior_tablero" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="black borde_superior_tablero" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="white borde_superior_tablero" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="black borde_superior_tablero" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="white borde_superior_tablero" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="black borde_superior_tablero" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="white borde_superior_tablero" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="black borde_superior_tablero borde_derecho_tablero" id="id"></td>
                        </tr>
                        <tr>
                            <td><input type="text" maxlength="2" name="nombre" class="black borde_izquierdo_tablero" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="white" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="black" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="white" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="black" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="white" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="black" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="white borde_derecho_tablero" id="id"></td>
                        </tr>
                        <tr>
                            <td><input type="text" maxlength="2" name="nombre" class="white borde_izquierdo_tablero" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="black" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="white" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="black" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="white" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="black" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="white" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="black borde_derecho_tablero" id="id"></td>
                        </tr>
                        <tr>
                            <td><input type="text" maxlength="2" name="nombre" class="black borde_izquierdo_tablero" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="white" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="black" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="white" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="black" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="white" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="black" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="white borde_derecho_tablero" id="id"></td>
                        </tr>
                        <tr>
                            <td><input type="text" maxlength="2" name="nombre" class="white borde_izquierdo_tablero" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="black" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="white" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="black" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="white" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="black" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="white" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="black borde_derecho_tablero" id="id"></td>
                        </tr>
                        <tr>
                            <td><input type="text" maxlength="2" name="nombre" class="black borde_izquierdo_tablero" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="white" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="black" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="white" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="black" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="white" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="black" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="white borde_derecho_tablero" id="id"></td>
                        </tr>
                        <tr>
                            <td><input type="text" maxlength="2" name="nombre" class="white borde_izquierdo_tablero" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="black" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="white" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="black" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="white" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="black" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="white" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="black borde_derecho_tablero" id="id"></td>
                        </tr>
                        <tr>
                            <td><input type="text" maxlength="2" name="nombre" class="black borde_izquierdo_tablero borde_inferior_tablero" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="white borde_inferior_tablero" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="black borde_inferior_tablero" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="white borde_inferior_tablero" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="black borde_inferior_tablero" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="white borde_inferior_tablero" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="black borde_inferior_tablero" id="id"></td>
                            <td><input type="text" maxlength="2" name="nombre" class="white borde_inferior_tablero borde_derecho_tablero" id="id"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-3 bordes">
            </div>
        </div>
    </div>

    <script src="jquery/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="jquery/jquery-ui.js"></script>
    <script src="js/index.js"></script>
</body>

</html>