

<?php
  

if($_SERVER['REQUEST_METHOD']=="POST")
{

  $name=trim($_POST['name']);
  $email=trim($_POST['email']);
  $message=trim($_POST['message']);
  $phone=trim($_POST['phonenumber']);
  $time=trim($_POST['time']);
      if($name=="" OR $email=="" OR $message==""){
      $error_message= "You must specify name,email,address,phone and time";
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
      
     
         require_once '../inc/phpmailer/class.phpmailer.php';
          $mail= new PHPMailer();
          if(!isset($error_message) AND !$mail->ValidateAddress($email)){
          $error_message= "You must specify a valid email address";
          }
      
       
          if(!isset($error_message)){
                  $email_body="";
                   $email_body=$email_body."Name: " . $name . "<br>";
                   $email_body=$email_body."Email: " . $email . "<br>";
                   $email_body=$email_body."Message: " . $message. "<br>";
                    $email_body=$email_body."Phone: " . $phone. "<br>";
                     $email_body=$email_body."Time: " . $time."<br>";
                    $email_body=$email_body."Time: " . $time."<br>";
                      $email_body=$email_body."Total: " . $total. "<br>";
                       
                   
                   $mail->SetFrom($email, $name);
         
                    $address = "reem.prajapati@gmail.com";
                   $mail->AddAddress($address, "Foodies");
         
                   $mail->Subject    = "Order form submission for Foodies|". $name;
                   $mail->MsgHTML($email_body);
                     if($mail->Send())
                     {
                      
                             echo "<script language='javascript'>alert('THANK YOU FOR ORDERING!');</script>"; 
                        
                     }
                     else{
                         
                           $error_message= "There was an error sending email. " . $mail->ErrorInfo;

                         }
        
                  ?>
                      
                      
                      <?php
                    
                       session_destroy();
                       exit();

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
              echo '<p>'."Order Now! By filling this form quickly!";
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
            <label for="message" class="col-md-4 control-label"><p style=font-size:1em>Address</p></label>
            <div class="col-md-4">
               <textarea class="form-control" rows="3" name="message" placeholder="Address"></textarea>
             </div>
           </div>

            <div class="form-group">
          <label for="phonenumber" class="col-md-4 control-label"><p style=font-size:1em>Phone-Number</p></label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="phonenumber" id="phonenumber" placeholder="Phone-Number">
            </div>
          </div>
           
            <div class="form-group">
          <label for="Delivery-Time" class="col-md-4 control-label"><p style=font-size:1em>Delivery Time</p></label>
            <div class="col-md-6">
              <input type="Text" class="form-control" name="time" id="time" placeholder="Delivery Time">
              <p style=color:orange;font-size:1em>*Delivery within 10am to 6pm only, everyday*</p>
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








    </div>




