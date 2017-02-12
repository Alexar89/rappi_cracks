

<!DOCTYPE html>
<html>
<head>

<script type="text/javascript">
  $(document).ready(function() {
    $('.carousel').carousel({interval: 3000});
  });
</script>
     

    <title>Rappi Cracks - Cube Summation</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Cube summation - Rappi Cracks</a>
        </div>


    </div><!-- /.container-fluid -->
</nav>

 <header>

        <div class="container">
        <div id="mycarousel" class="carousel container slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#mycarousel" data-slide-to="1"></li>
                        <li data-target="#mycarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                    <div class="item active">
                    <font color="Orange" size="4">
                           Por favor inserte los comandos de acuerdo a los casos de prueba definidos en el formulario anterior..
                    </font>  
                        </div>
                  
                        <div class="item">
                        <font color="Orange" size="4">
                            1. Para insertar el comando tenga en cuenta que son dos posibles comandos:

                        </font>
                        </div>
                        <div class="item">
                        <font color="Orange" size="4">
                            2. UPDATE x y z W
                        </font>
                            
                        </div>
                        <div class="item">
                        <font color="Orange" size="4">
                           3. QUERY  x1 y1 z1 x2 y2 z2
                        </font>
                            
                        </div>

                        <div class="item">
                        <font color="Orange" size="4">
                           4. Por Ejempo: UPDATE 2 2 2 5
                                          
                        </font>
                        </div>

                        <div class="item">
                        <font color="Orange" size="4">
                           5. QUERY 1 1 1 1 1 1
                              
                        </font>
                        </div>
                    </div>

                     
                    </div>
                    <div class="intro-text">
<br><br><br><br><br>

            </div>
                </div>
            
        
    </header>

<div class="container" id="main">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @yield('content')
        </div>
    </div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.14/vue.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>
