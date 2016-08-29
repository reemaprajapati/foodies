
<?php
  $section="order";
  $PageTitle="Order your favs";
  include '../inc/header.php';
  include '../admin/includes/connection.php';

  if(!$add=mysql_query("SELECT * FROM `order`")){
    echo mysql_error();
  }



 
  session_start();

  if (!isset($_SESSION['cart']))
    {
    $_SESSION['cart'] = array();
    }


   if (isset($_POST['action']) and $_POST['action'] == 'Add to Tray')
    {
    // Add item to the end of the $_SESSION['cart'] array___

    $_SESSION['cart'][] = $_POST['id'];
    
    header('Location: order.php');
    exit();
    } 
    if (isset($_POST['action']) and $_POST['action'] == 'Empty Tray')
    {
    // Empty the $_SESSION['cart'] array
    unset($_SESSION['cart']);
    header('Location: ?cart');

    exit();
    }

    if (isset($_GET['cart']))
{
$cart = array();
$total = 0;

foreach ($_SESSION['cart'] as $id)
{
             while($ress=mysql_fetch_array($add))
             {
               $ress;

            if ($ress['Id'] == $id)
          {
            $cart[] = $ress;
           $total += $ress['Price'];
            break;
           }
         

        }
}
include 'tray.php';
exit();
}




         
     

  include 'order1.php';

?>
