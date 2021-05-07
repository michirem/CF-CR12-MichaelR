<?php
    if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $msg = filter_var($_POST["message"], FILTER_SANITIZE_STRING); 
    $headers = "FROM : ". $email . "\r\n";
    $myEmail = "blablabla9173@hotmail.com";
        if(mail($myEmail, "message coming from the contact form", $msg, $headers)){
            echo "<div class='alert alert-success my-2'>Sent successfully</div>";
        }else {
            echo "<div class=alert alert-danger my-2'>Error, please try again later</div>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 CSS bundle  -->
    <?php include_once 'components/bootcss.php';?>
   <title>Contact us</title>
</head>
<body>
    <header>
        <?php
        include_once 'components/navigation.php';
        ?>
    </header>
    <div class="d-flex justify-content-center align-items-center" style="background-image: url(https://images.unsplash.com/uploads/141103282695035fa1380/95cdfeef?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1874&q=80); height: 50vh; background-size: cover; background-repeat: no-repeat; background-position: 50% 30%;">
        <h1 class="text-center text-dark">Help us<br>make our service better</h1>
    </div>
    <main>
    <div class="container">
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="" method="post">
          <fieldset>
               
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label mt-3" for="name">Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label mt-3" for="email">Your E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label mt-3" for="message">Your message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right mt-3">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
      <div class="d-flex flex-column justify-content-center align-items-center col-md-6">
          <p>
              Feel free to reach out to us for Feedback! Every customer feedback is taken seriously and will help us improve our service quality. We strive to give you the easies possible experience!
          </p>
    </div>
	</div>
</div>
    </main>
    <footer>
        <?php
        include_once 'components/footer.php';
        ?>
    </footer>  
    <!-- Bootstrap 5 JS bundle  -->
    <?php include_once 'components/bootjs.php';?>
    <script src="js/jokes.js"></script>
    </body>
</html>