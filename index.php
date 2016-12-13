<html>
    <head>
        <title>RENTR</title>
        <meta charset="UTF-8">
        <script
  src="https://code.jquery.com/jquery-3.1.1.js"
  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>
        <script src="main.js"></script>
        <link rel="stylesheet" type="text/css" href="style.less">
        <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>
        
    </head>
    
    <body>
        <!--header-->
        <header>
            <!--centered wrapper -->
            <section class = "centeredWrapper">
                
                <article id="logo">
                    <span class="logo">Rentr</span>
                </article>
                
                <figure class ="menuIcon">
                </figure>
                
                <!-- navigation-->
                <nav id ="navigation">
                    <ul id="mainNav" class="sf-menu">
                        <li><a href="#home"><span>Home</span></a></li>
                        <li><a href="#about"><span>About</span></a></li>
                        <li><a href="#features"><span>Features</span></a></li>
                        <li><a href="#contact"><span>Contact</span></a></li> 
                    </ul>  
                <!--end nav-->
                </nav>
                
               
            <!--end centered wrapper-->
            </section>
                     
         <!--end header-->   
        </header>
        
        
        <!--wrapper-->
        <section id="wrapper">
            
            <!--home-->
            <section id="home">
                
                <section class="centeredWrapper">
                    <h1>In 2017, apartment hunting is simple.</h1>
                    <p>Like keeping a real estate agent in your pocket while you're on the go, RENTR has transformed the experience of finding a new home.</p>
                    <button class="button" id="learnMoreButton">LEARN MORE</button>
                    <button class="button" id="stayInTouchButton">STAY IN TOUCH</button>
            <!--end home-->
                </section>
            </section>
            
            <!-- about -->
            <section id="about">
                <section class="centeredWrapper flex">
                
                    <figure class="halfImage" id="aboutImage">
                        <img src="https://support.apple.com/library/content/dam/edam/applecare/images/en_US/iOS/ios9-iphone6-home-screen-jiggle-app.jpg"/>
                    </figure>
                    <article class="halfContent" id="aboutContent">
                        <h2>About the App</h2>
                        <p>RENTR rethinks the process of finding the perfect new dwelling, or the perfect tenant. The process of finding and securing a new home can be complex process, yet it doesn't have to. RENTR gives search result priority to posts that give the most information, encouraging posters to reveal as much as possible from the get go, so that the potential tenant knows everything they need to before scheduling a viewing. The app is designed for convienience and reliability. With features such as detailed searches, in-app messaging, and landlord/tenant profiles with ratings, RENTR makes looking for a home an effortless task. </p>
                    </article>
                </section>
                
            <!--end about-->    
            </section>
            
            <!--features-->
            <section id="features">
                <section class="centeredWrapper flex">
                     <figure class="halfImage" id="featuresImage">
                           <img src="https://support.apple.com/library/content/dam/edam/applecare/images/en_US/iOS/ios9-iphone6-home-screen-jiggle-app.jpg"/>

                    </figure>
                
                    <article class="halfContent" id="featureContent">
                    <h2>Features</h2>
                        
                        <ul id="featuresList">
                            <li>Easy to use advanced search helps you find listings tailored to your every need. You should know what kind of parking and laundry is available, and whether your pets are welcome, before you contact the landlord</li>
                            <li>We hold on to your last search, see new listings the moment you turn on open RENTR</li>
                            <li>Apartments with more information, photos, and best landlord reputation are priority results. See the best listings first.</li>
                            <li>Get to know your landlord immediately. Landlords and property realtors have profiles in which past tenants can rate and review.</li>
                            <li>Your own profile provides an excellent introduction before you even arrive at the viewing. You to can recieve ratings from tenants, growing a reputation for the next time you rent.</li>
                        </ul>
                        
                        
                    </article>
                </section>
                
            <!--end features-->
            </section>
            
            <!--contact-->
            <footer id ="contact">
                <section class="centeredWrapper">
                
           <?php 
                if (isset($_REQUEST['submitted'])) {
                // Initialize error array.
                  $errors = array();
                  // Check for a proper First name
                  if (!empty($_REQUEST['firstname'])) {
                  $firstname = $_REQUEST['firstname'];
                  $pattern = "/^[a-zA-Z0-9\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
                  if (preg_match($pattern,$firstname)){ $firstname = $_REQUEST['firstname'];}
                  else{ $errors[] = 'Your Name can only contain _, 1-9, A-Z or a-z 2-20 long.';}
                  } else {$errors[] = 'You forgot to enter your First Name.';}

                  // Check for a proper Last name
                  if (!empty($_REQUEST['lastname'])) {
                  $lastname = $_REQUEST['lastname'];
                  $pattern = "/^[a-zA-Z0-9\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
                  if (preg_match($pattern,$lastname)){ $lastname = $_REQUEST['lastname'];}
                  else{ $errors[] = 'Your Name can only contain _, 1-9, A-Z or a-z 2-20 long.';}
                  } else {$errors[] = 'You forgot to enter your Last Name.';}

                  //Check for a valid phone number
                  if (!empty($_REQUEST['phone'])) {
                  $phone = $_REQUEST['phone'];
                  $pattern = "/^[0-9\_]{7,20}/";
                  if (preg_match($pattern,$phone)){ $phone = $_REQUEST['phone'];}
                  else{ $errors[] = 'Your Phone number can only be numbers.';}
                  } else {$errors[] = 'You forgot to enter your Phone number.';}


                  }
                  //End of validation 
                if (isset($_REQUEST['submitted'])) {
                        if (empty($errors)) { 
                        $from = "From: Our Site!"; //Site name
                        // Change this to your email address you want to form sent to
                         $to = "anamerfu@hotmail.com"; 
                         $subject = "Admin - Our Site! Comment from " . $name . "";

                        $message = "Message from " . $firstname . " " . $lastname . " 
                        Phone: " . $phone . " 
                        Red Maple Acer: " . $check1 ."";
                        mail($to,$subject,$message,$from);
                        }
                }
            ?>
                
                <?php 
                      //Print Errors
                      if (isset($_REQUEST['submitted'])) {
                      // Print any error messages. 
                      if (!empty($errors)) { 
                      echo '<hr /><h3>The following occurred:</h3><ul>'; 
                      // Print each error. 
                      foreach ($errors as $msg) { echo '<li>'. $msg . '</li>';}
                      echo '</ul><h3>Your mail could not be sent due to input errors.</h3><hr />';}
                       else{echo '<hr /><h3 align="center">Your mail was sent. Thank you!</h3><hr /><p>Below is the message that you sent.</p>'; 
                      echo "Message from " . $firstname . " " . $lastname . " <br />Phone: ".$phone." <br />";
                    
                      }
                      }
                    //End of errors array
                ?>
                
                  <h2>Contact us</h2>
  <p>Fill out the form below.</p>
  <form action="" method="post">
  <label>First Name: <br />
  <input name="firstname" type="text" value="- Enter First Name -" /><br /></label>
  <label>Last Name: <br />
  <input name="lastname" type="text" value="- Enter Last Name -" /><br /></label>
  <label>Phone Number: <br />
  <input name="phone" type="text" value="- Enter Phone Number -" /><br /></label>
  <input name="" type="reset" value="Reset Form" /><input name="submitted" type="submit" value="Submit" />
  </form>
            
						
                
               </section> 
            <!--end contact-->
            </footer>
            
            
            
            
        <!--end wrapper-->
        </section>
        
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</html>

