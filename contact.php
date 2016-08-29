<?php
$PageTitle="Contact Us";
$section="contact";
include 'inc/header.php';
if($_SERVER['REQUEST_METHOD']=="POST")
{
  $name=trim($_POST['name']);
  $email=trim($_POST['email']);
  $message=trim($_POST['message']);
    if($name=="" OR $email=="" OR $message==""){
      $error_message= "You must specify name,email and message";
      }

      if(!isset($error_message)){
       foreach ($_POST as $value) {
        if(stripos($value, 'Content-Type:')!==FALSE){
          $error_message= "There was a problem with the information you entered";
        }
      } 
      }

      
        if(!isset($error_message) AND !$_POST['address']==''){
        $error_message= "Your form submission has an error";
         }
      
     
         require_once 'inc/phpmailer/class.phpmailer.php';
          $mail= new PHPMailer();
          if(!isset($error_message) AND !$mail->ValidateAddress($email)){
          $error_message= "You must specify a valid email address";
          }
      
       
          if(!$error_message){
                  $email_body="";
                   $email_body=$email_body."Name: " . $name . "<br>";
                   $email_body=$email_body."Email: " . $email . "<br>";
                   $email_body=$email_body."Message: " . $message;
         
                   $mail->SetFrom($email, $name);
         
                    $address = "reem.prajapati@gmail.com";
                   $mail->AddAddress($address, "Foodies");
         
                   $mail->Subject    = "Contact form submission for Foodies|". $name;
                   $mail->MsgHTML($email_body);
                     if($mail->Send()) {
                       header("Location:contact.php?status=thanks");
                     }
                     else{
                         
                           $error_message= "There was an error sending email. " . $mail->ErrorInfo;
                         }
         }
        

}

?>

    <div class="container">

      <form class="form-horizontal"  name="contact" action="" method="post">
        <div class="col-md-offset-4 col-sm-6">
        <?php 
          if(isset($_GET['status']) AND $_GET['status']=="thanks"){
            echo '<p>'."Thanks you for sending us an email";
          }
          else{
            if(!isset($error_message)){
              echo '<p>'."Please leave us a message";
               }
              else{
                echo '<p>'.$error_message;
              }
          }
        ?>
      </div>
        <div class="form-group">
            <label for="name" class="col-md-4 control-label"><p style=font-size:1em>Name</p></label>
            <div class="col-md-4">
              <input type="text" class="form-control" name="name" id="name" placeholder="Name">
            </div>
          </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-md-4 control-label"><p style=font-size:1em>Email</p></label>
            <div class="col-md-6">
              <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email">
            </div>
        </div>
          
           <div class="form-group">
            <label for="message" class="col-md-4 control-label"><p style=font-size:1em>Message</p></label>
            <div class="col-md-4">
               <textarea class="form-control" rows="3" name="message" placeholder="Message"></textarea>
             </div>
           </div>
           
          
          <div class="form-group">
            <div class="col-md-offset-4 col-sm-6">
              <input type="submit" class="btn btn-default" name= "submit" value="Submit"></button>
            </div>
          </div>

          <div style="display :none">
            <input type="address" class="form-control" name="address" id="address" placeholder="Addresss">

          </div>
        </form>





        <?php include('inc/footer.php'); ?>


    </div>




