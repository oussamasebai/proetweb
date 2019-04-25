
<?php
try
{
    $bdd = new PDO("mysql:host=localhost;dbname=projet", "root", "");
    $bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
    die("Une érreur a été trouvé : " . $e->getMessage());
}
$bdd->query("SET NAMES UTF8");
if (isset($_GET["s"]) AND $_GET["s"] == "")
{
    $_GET["terme"] = htmlspecialchars($_GET["terme"]); //pour sécuriser le formulaire contre les intrusions html
    $terme = $_GET['terme'];
    $terme = trim($terme); //pour supprimer les espaces dans la requête de l'internaute
    $terme = strip_tags($terme); //pour supprimer les balises html dans la requête

    if (isset($terme))
    {
        $terme = strtolower($terme);
        $select_terme = $bdd->prepare("SELECT id, nom,prix,img,categories  FROM produit WHERE nom LIKE ? ");
        $select_terme->execute(array("%".$terme."%"));
    }
    else
    {
        $message = "Vous devez entrer votre requete dans la barre de recherche";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="wid_promoth=device-wid_promoth, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- Graph CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
    <script src="js/simpleCart.min.js"> </script>
    <script src="js/amcharts.js"></script>
    <script src="js/serial.js"></script>
    <script src="js/light.js"></script>
    <!-- //lined-icons -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <!--pie-chart--->
    <script src="js/pie-chart.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });


        });
    </script>

</head>
<style>
    .element {
        width: 250px;
        height: 350px;
        margin:0px;
        position:relative;
        display:inline-block;
        vertical-align:top;
    }
    div#columns figure {
        display: inline-block;
        background: #FEFEFE;
        border: 2px solid #FAFAFA;
        box-shadow: 0 1px 2px rgba(34, 25, 25, 0.4);
        margin: 0 0px 15px;
        -webkit-column-break-inside: avoid;
        -moz-column-break-inside: avoid;
        column-break-inside: avoid;
        padding: 15px;
        padding-bottom: 5px;
        background: -webkit-linear-gradient(45deg, #FFF, #F9F9F9);
        opacity: 1;
        -webkit-transition: all .3s ease;
        -moz-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease;
    }

    #columns figure:hover{
        -webkit-transform: scale(1.1);
        -moz-transform:scale(1.1);
        transform: scale(1.1);

    }
    #columns:hover figure:not(:hover) {
        opacity: 0.4;
    }

</style>
<body>
<div class="page-container">
    <!--/content-inner-->
    <div class="left-content">
        <div class="inner-content">
            <!-- header-starts -->
            <div class="header-section">
                <!-- top_bg -->
                <div class="top_bg">


                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- /top_bg -->
        </div>
        <div class="header_bg">
            <div class="header">
                <div class="head-t">
                    <div class="logo">

                    </div>
                    <!-- start header_right -->


                    <div class="clearfix"> </div>
                </div>


                <div class="clearfix"> </div>
            </div>








            <!-- //header-ends -->
            <!--content-->

            <!-- start content -->

            <!--//content-inner-->
            <!--/sidebar-menu-->
            <div class="sidebar-menu">
                <header class="logo1">
                    <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a>
                </header>
                <div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                <div class="menu">
                    <ul id="menu" >
                        <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Ajouter</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                            <ul id="menu-academico-sub" >
                                <li id="menu-academico-avaliacoes" ><a href="icons.html">Produit</a></li>
                                <li id="menu-academico-avaliacoes" ><a href="typography.html">Categories</a></li>
                            </ul>
                        </li>
                        <li id="menu-academico" ><a href="#"><i class="glyphicon glyphicon-eye-open" aria-hidden="true"></i><span> affichage</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                            <ul id="menu-academico-sub" >
                                <li id="menu-academico-avaliacoes" ><a href="Index.php">Produit</a></li>
                                <li id="menu-academico-avaliacoes" ><a href="grid.php">categories</a></li>
                            </ul>
                        </li>
                    </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <script>
            var toggle = true;

            $(".sidebar-icon").click(function() {
                if (toggle)
                {
                    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                    $("#menu span").css({"position":"absolute"});
                }
                else
                {
                    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                    setTimeout(function() {
                        $("#menu span").css({"position":"relative"});
                    }, 400);
                }

                toggle = !toggle;
            });
        </script>
        <!--js -->
        <script src="js/jquery.nicescroll.js"></script>
        <script src="js/scripts.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <!-- /Bootstrap Core JavaScript -->
        <!-- real-time -->
        <script language="javascript" type="text/javascript" src="js/jquery.flot.js"></script>
        <script type="text/javascript">
            $(function() {

                // We use an inline data source in the example, usually data would
                // be fetched from a server

                var data = [],
                    totalPoints = 300;

                function getRandomData() {

                    if (data.length > 0)
                        data = data.slice(1);

                    // Do a random walk

                    while (data.length < totalPoints) {

                        var prev = data.length > 0 ? data[data.length - 1] : 50,
                            y = prev + Math.random() * 10 - 5;

                        if (y < 0) {
                            y = 0;
                        } else if (y > 100) {
                            y = 100;
                        }

                        data.push(y);
                    }

                    // Zip the generated y values with the x values

                    var res = [];
                    for (var i = 0; i < data.length; ++i) {
                        res.push([i, data[i]])
                    }

                    return res;
                }

                // Set up the control widget

                var updateInterval = 30;
                $("#updateInterval").val(updateInterval).change(function () {
                    var v = $(this).val();
                    if (v && !isNaN(+v)) {
                        updateInterval = +v;
                        if (updateInterval < 1) {
                            updateInterval = 1;
                        } else if (updateInterval > 2000) {
                            updateInterval = 2000;
                        }
                        $(this).val("" + updateInterval);
                    }
                });

                var plot = $.plot("#placeholder", [ getRandomData() ], {
                    series: {
                        shadowSize: 0 // Drawing is faster without shadows
                    },
                    yaxis: {
                        min: 0,
                        max: 100
                    },
                    xaxis: {
                        show: false
                    }
                });

                function update() {

                    plot.setData([getRandomData()]);

                    // Since the axes don't change, we don't need to call plot.setupGrid()

                    plot.draw();
                    setTimeout(update, updateInterval);
                }

                update();

                // Add the Flot version string to the footer

                $("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
            });



        </script>
        <?php
        while($terme_trouve=$select_terme->fetch())
        {
            ?>
            <div class="element" id="columns" >


            <figure>
                <h4><?php echo $terme_trouve['id']; ?></h4>
                <div><?php echo $terme_trouve['nom']; ?></div>
                <div><?php echo $terme_trouve['prix']; ?></div>
                <div> <img src="images/<?php echo $terme_trouve['img']; ?>" alt="" height="50%" width="50%" ></div>
                <div><?php echo $terme_trouve['categories']; ?></div>


            </figure>
            <br>

            </div>
        </div>
    </div>







            <?php

        }
        $select_terme->closeCursor();
        ?>
</body>
</html>