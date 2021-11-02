
<?php

$con=mysql_connect("localhost","root","hanaa12300");

mysql_select_db("newdb");

$q=mysql_query("select * from pbook");

echo $q; 

$counter=1;
echo "<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset= 'utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <meta name='description' content=''>
  <meta name='author' content=''>

  <title>Read Me</title>	
  <!-- Bootstrap Core CSS -->
  <link href='css/bootstrap.min.css' rel='stylesheet' type='text/css'>

  <!-- Fonts -->
  <link href='font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
  <link href='css/animate.css' rel='stylesheet' />
  <!-- Squad theme CSS -->
  <link href='css/style.css' rel='stylesheet'>
  <link href='color/default.css' rel='stylesheet'>
</head>

<body id='page-top' data-spy='scroll' data-target='.navbar-custom'>
  <!-- Preloader -->
  <div id='preloader'>
    <div id='load'></div>
  </div>

  <nav class='navbar navbar-custom navbar-fixed-top' role='navigation'>
    <div class='container'>
      <div class='navbar-header page-scroll'>
        <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-main-collapse'>
                    <i class='fa fa-bars'></i>
                </button>
        <a class='navbar-brand' href='index1.html'>
          <h1>Read Me</h1>
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
	   <div class='collapse navbar-collapse navbar-right navbar-main-collapse'>
        <ul class='nav navbar-nav'>
          
			  
              <li><a href='#Fiction'>Fiction</a></li>
			  <li><a href='#Kids'>Kids</a></li>
			  <li><a href='#History'>History</a></li>
			  <li><a href='#Horror'>Horror</a></li>
			  <li><a href='#Romance'>Romance</a></li>
			  <li><a href='#Arts'>Arts</a></li>
			  <li><a href='#Admin'>Admin</a></li>

		  
        </ul>
      </div>
      <div class='collapse navbar-collapse navbar-right navbar-main-collapse'>
        <ul class='nav navbar-nav'>
          <li class='active'><a href='#intro'>Home</a></li>
        </ul>
      </div>
	  
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>

  <!-- Section: intro -->
  <section id='intro' class='intro'>

    <div class='slogan'>
      <h2>WELCOME TO <span class='text_color'>Read Me</span> </h2>
      <h4>We provide to you a fantastic collection of different types of books</h4>
    </div>
    <div class='page-scroll'>
      <a href='#service' class='btn btn-circle'>
				<i class='fa fa-angle-double-down animated'></i>
			</a>
    </div>
  </section>
  <!-- /Section: intro -->";
echo "<section id='Fiction' class='home-section text-center'>";
echo  " <div class='heading-about'>";
 echo    " <div class='container'>";
 echo       "<div class='row'>";
 echo         "<div class='col-lg-8 col-lg-offset-2' >";
 echo           "<div class='wow bounceInDown' data-wow-delay='0.4s'>";
 echo            "<div class='section-heading'>";
 echo  "                <h2>Fiction Section</h2>
                <i class='fa fa-2x fa-angle-down'></i>
              </div>
			   <!-- photos part --> 
			  <div class='container'>

      <div class='row'>
        <div class='col-lg-2 col-lg-offset-5'>
          <hr class='marginbot-50'>
        </div>
      </div>";
			  
while($row=mysql_fetch_array($q))
{
	echo "<div class='row'>
        <div class='col-md-3'>
          <div class='wow bounceInUp' data-wow-delay='0.2s'>
            <div class='team boxed-grey'>
              <div class='inner'>";
	$id=$row["id"];
	//echo "<td>".$counter."</td>";
	echo "<h5>".$row["name"]."</h5>";
	echo "<td><a href='view.php?id2=$id'>View</a></td>";
	//echo "<td><a href='update.php?id2=$id'>Update</a></td>";
	//echo "<td><a href='delete.php?id2=$id'>Delete</a></td>";
	echo "</tr>";
	$counter++;
	echo "    <div class='avatar'><img src='img/team/1.jpg' alt='' class='img-responsive img-circle /></div>
              </div>
            </div>
          </div>
        </div>";
		
}

echo  "<!-- Core JavaScript Files -->
  <script src='js/jquery.min.js'></script>
  <script src='js/bootstrap.min.js'></script>
  <script src='js/jquery.easing.min.js'></script>
  <script src='js/jquery.scrollTo.js'></script>
  <script src='js/wow.min.js'></script>
  <!-- Custom Theme JavaScript -->
  <script src='js/custom.js'></script>
  <script src='contactform/contactform.js'></script>

</body>

</html>";
//echo"</table>";
mysql_close($con);

?>

