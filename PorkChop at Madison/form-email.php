<head>
  <title>Latham's | Home</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:800" rel="stylesheet">
  <link rel="icon" type="image/png" sizes="32x32" href="style/favicon-32x32.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
   <link rel="stylesheet" href="css/normalize.css">
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
       <img id="logoex" src="img/Logomakr.png" style="float:left">
        <div class="left">
        <div id="logo_text">
          <h1 >Latham's Meat Company</h1>
          <h2 >Delicious food to make you feel at home.</h2>
          </div>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu" class="menuex">
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="cater.html">Catering</a></li>
          <li><a href="menu.html">Menu</a></li>
          <li><a href="contact.html">Contact Us</a></li>
          <li><a href="bshop.html">Butcher Shop</a></li>
          <li><a href="review.html">Testimonials</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <h3>Testimonials</h3>
        <h4 id="links"> <a href="https://www.yelp.com/biz/lathams-meat-jackson?search_key=83875">Levy B.</a>
        </h4>
        <h5>January 1st, 2010</h5>
        <p>The best dang pulled pork in TN... heck TN and every state west of the Mississippi River.   I go back whenever I'm back in Jackson.  Larger portions with all the fixins'.<br /><a href="review.html">Read more</a></p>
        <p></p>
        <h4>About Us</h4>
        <p>Meet Paul Latham, founder and proprietor of Latham's Meat Company....<br /><a href="about.html">Read more</a></p>
        
        <img src="img/special-rub.jpg" alt="Latham's Special Rub" style="width:200px;height:150px;" class="pic2">
        
      </div>
        <h3>Thank you for having us cater!</h3>
        <h3>We can't wait to see you and your family or friends at your event!</h3> 
        <h3>We will get back with you as soon as possible.</h3>
      
      <img src="img/lathams.jpg" alt="Latham's Meat Counter" style="width:600px; height:325px;" class="firstpic">
      
        
      </div>
    </div>
 
    <div id="content_footer"></div>
    <div id="footer">

			<div class="footer-right">

				<div class="footer-icons">

					<a href="https://www.facebook.com/Paul-Lathams-Meat-and-Bar-B-Que-165261530166798/?ref=page_internal"><i class="fa fa-facebook"></i></a>


				</div>

			</div>
          <a href="index.html">Home</a> |
          <a href="about.html">About</a> |
          <a href="cater.html">Catering</a> |
          <a href="menu.html">Menu</a> |
          <a href="contact.html">Contact Us</a> |
          <a href="bshop.html">Butcher Shop</a> |
          <a href="review.html">Testimonials</a><br>
     | Copyright &copy; Latham's Family Resturant | <a href="https://www.facebook.com/Paul-Lathams-Meat-and-Bar-B-Que-165261530166798/?ref=page_internal">Facebook</a>  | <a href="https://goo.gl/maps/VeWJV82VyP52">3517 US-45, Jackson, TN 38305</a> | <a href="tel:731-664-8605">731-664-8605</a> |
         <br> | Open Monday thru Saturday 6:00 AM-6:00 PM |

  </div>
</body>

<?php
//if "phone" variable is filled out, send email
  if (isset($_REQUEST['phone']))  {
  
  //Email information
  $admin_email = "jigglypuff146@gmail.com";
  $directions = $_REQUEST['directions'];
  $firstname = $_REQUEST['firstname'];
  $lastname = $_REQUEST['lastname'];
  $numberofpeople = $_REQUEST['numberofpeople'];
  $date = $_REQUEST['date'];
  $time = $_REQUEST['time'];
  $phone = $_REQUEST['phone'];
  $email = $_REQUEST['email'];
  $address = $_REQUEST['adress'];
  $sweet = $REQUEST['sweet'];
  $unsweet =  $REQUEST['unsweet'];
  $bag =  $REQUEST['bag'];
  $cooler =  $REQUEST['cooler'];
  $can =  $REQUEST['can'];
  $twoliter =  $REQUEST['twoliter'];
  $water =  $REQUEST['water'];
  $lemonade =  $REQUEST['lemonade'];
  $meat1 =  $REQUEST['meat1'];
  $meat2 =  $REQUEST['meat2'];
  $meat3 =  $REQUEST['meat3'];
  $meat4 =  $REQUEST['meat4'];
  $veggie1 =  $REQUEST['veggie1'];
  $veggie2 =  $REQUEST['veggie2'];
  $veggie3 =  $REQUEST['veggie3'];
  $veggie4 =  $REQUEST['veggie4'];
  $dessert1 =  $REQUEST['dessert1'];
  $dessert2 =  $REQUEST['dessert2'];
  $dessert3 =  $REQUEST['dessert3'];
  $dessert4 =  $REQUEST['dessert4'];
  $rolls =  $REQUEST['rolls'];
  $buns =  $REQUEST['buns'];
  $hotdog =  $REQUEST['hotdog'];
  $bread =  $REQUEST['bread'];
  $bisc =  $REQUEST['bisc'];
  $plastic =  $REQUEST['plastic'];
  $real =  $REQUEST['real'];
  $tong =  $REQUEST['tong'];
  $ladel =  $REQUEST['ladel'];
  $knife =  $REQUEST['knife'];
  $plates =  $REQUEST['plates'];
  $togoplates =  $REQUEST['togoplates'];
  $dessertplates = $_REQUEST['dessertplates'];
  $cups =  $REQUEST['cups'];
  $napkins =  $REQUEST['napkins'];
  $eatuten =  $REQUEST['eatuten'];
  $gloves =  $REQUEST['gloves'];
  $xtrapans =  $REQUEST['xtrapans'];
  $alumfoil =  $REQUEST['alumfoil'];
  $stksauce =  $REQUEST['stksauce'];
  $bbqsauce =  $REQUEST['bbqsauce'];
  $lemon =  $REQUEST['lemon'];
  $swtlow =  $REQUEST['swtlow'];
  $sugar =  $REQUEST['sugar'];
  $salt =  $REQUEST['salt'];
  $pepper =  $REQUEST['pepper'];
  $butter =  $REQUEST['butter'];
  $sc =  $REQUEST['sc'];
  $saladdress =  $REQUEST['saladdress'];
  $syrup =  $REQUEST['syrup'];
  $strawberryjelly =  $REQUEST['strawberryjelly'];
  $grapejelly =  $REQUEST['grapejelly'];
  $relish =  $REQUEST['relish'];
  $mayo =  $REQUEST['mayo'];
  $mustard =  $REQUEST['mustard'];
  $ketchup =  $REQUEST['ketchup'];
  $cheese =  $REQUEST['cheese'];
  $lettuce =  $REQUEST['lettuce'];
  $tomato =  $REQUEST['tomato'];
  $pickle =  $REQUEST['pickle'];
  $onion =  $REQUEST['onion'];
  
  
  //send email
  mail($admin_email, "$subject", $firstname, $lastname, $numberofpeople, $date, $time, $phone, $address, $directions, "From:" . $email);
  
  //Email response
  
  }
  
  //if "phone" variable is not filled out, display the form
  else  {
?>

  <?php
    //Email response
?>

  
<?php
  }
?>