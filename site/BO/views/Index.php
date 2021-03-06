<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include "../core/ProduitC.php";
$Produit1C=new ProduitC();
$liste=$Produit1C->afficherProduits();
?>
<!DOCTYPE HTML>

<html>
<title>Pooled Admin Panel Category Flat Bootstrap Responsive Web Template | Buttons :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="js/alert.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/lightbox.css">
    <!-- Graph CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- //jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
    <link rel="stylesheet" type="text/css" href="css/gal">
<!--//tables-->
    <link rel="stylesheet" type="text/css" href="css/table-style.css"/>
    <link rel="stylesheet" type="text/css" href="css/basictable.css"/>
    <script type="text/javascript" src="js/jquery.basictable.min.js"/> </script>
    <script type="text/javascript">
        $(document).ready(function() {
           // $('#table').basictable();

            $('#table-breakpoint').basictable({
                breakpoint: 768
            });

            $('#table-swap-axis').basictable({
                swapAxis: true
            });

            $('#table-force-off').basictable({
                forceResponsive: false
            });

            $('#table-no-resize').basictable({
                noResize: true
            });

            $('#table-two-axis').basictable();

            $('#table-max-height').basictable({
                tableWrapper: true
            });
        });
    </script>
</head>

<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
              <!--header start here-->
				<div class="header-main">
                    <!--search-box-->
                    <div class="w3layouts-left">

                        <!--search-box-->
                        <div class="w3-search-box">
                            <form action="verifform.php" method="get">
                                <input type="Search" name="terme" placeholder="Search..." required="">
                                <input type="submit" value="" name="s">
                            </form>
                        </div><!--//end-search-box-->
                        <div class="clearfix"> </div>
                    </div>




                    <div class="profile_details w3l">
                        <ul>
                            <li class="dropdown profile_details_drop">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <div class="profile_img">
                                        <span class="prfil-img"><img src="images/in4.jpg" alt=""> </span>
                                        <div class="user-name">
                                            <p>Malorum</p>
                                            <span>Administrator</span>
                                        </div>
                                        <i class="fa fa-angle-down"></i>
                                        <i class="fa fa-angle-up"></i>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu drp-mnu">
                                    <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
                                    <li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
                                    <li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="clearfix"> </div>
                </div>
<!--heder end here-->
           <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="Index.php">Home</a><i class="fa fa-angle-right"></i>Afficher  <i class="fa fa-angle-right"></i> Produit</li>
           </ol>
           <form method="post" action="pdf.php">
               <input type="submit" name="pdf" value="pdf">
           </form>
<div  class="agile-tables">

    <div  class="w3l-table-info"></div>
    <form method="post">
        <button type="submit" name="tri" class="fa fa-arrow-circle-o-down"></button>
        <button type="submit" name="tria" class="fa fa-arrow-circle-o-up"></button>
    </form>

	<table id="table">
		<caption>AFFICHER PRODUIT</caption>
		<thead>

        <tr>
            <th>id</th>
            <th>Nom</th>
            <th>Prix</th>
            <th>Images</th>
            <th>Categories</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>

        </thead>
		<?php
                    foreach($liste as $row)
                    {
                    ?>
                        <tbody>
		<tr>
			<td><?PHP echo $row['id']; ?></td>
			<td><?php echo $row['nom']; ?></td>
			<td><?php echo $row['prix']; ?></td>
			<td> <img src="images/<?php echo $row['img']; ?>" alt="" height="50%" width="50%" ></td>
            <td><?php echo $row['categories']; ?></td>
			<td><a href="modifierProduit.php?id=<?PHP echo $row['id']; ?>">
				Modifier</a></td>
			<td><form method="post" action="supprimerProduit.php">
				<input type="submit" name="supprimer" value="supprimer">
				<input type="hidden"value="<?PHP echo $row['id']; ?>" name="id">
			</form>
			</td>
		</tr>
		</tbody>

		<?php
                        $db=config::getconnexion();
                    }if(isset($_POST['tri']))
        {
            $liste=$db->query("SELECT * FROM `produit` ORDER BY `produit`.`prix` ASC");
        }
        else if(isset($_POST['tria']))
        {
            $liste=$db->query("SELECT * FROM `produit` ORDER BY `produit`.`prix` DESC");

        }
        else $liste= $Produit1C->afficherProduits();
                    ?>
	</table>
			</div>
       </div>
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2019 Pooled . All Rights Reserved | Design by  <a href="http://VENOM.com/" target="_blank">V.E.N.O.M</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu">
									 <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Ajouter</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="icons.html">Produit</a></li>
											<li id="menu-academico-avaliacoes" ><a href="typography.html">Categories</a></li>
										  </ul>
										</li>
									  <li id="menu-academico" ><a href="#"><i class="glyphicon glyphicon-eye-open" aria-hidden="true"></i><span> affichage</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="Index.php">Produit</a></li>
											<li id="menu-academico-avaliacoes" ><a href="grid.php">Categories</a></li>
										  </ul>
										</li>
								  </ul>
								</div>
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

</body>
</html>