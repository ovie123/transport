<?php 

include '../../database/messenger.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!-- Custom Styles -->
  <link rel="stylesheet" href="../assets/css/admin.css">

  <!-- Admin Styling -->
  <link rel="stylesheet" href="../assets/css/style.css">

  <title>Admin - Create Post</title>
</head>

<body>

  <!-- header -->
  <header class="clearfix">
    <div class="logo">
      <!-- <img src="images/logo-placeholder.png" alt="Logo"> -->
    </div>
    <div class="fa fa-reorder menu-toggle"></div>
    <nav>
      <ul>
        <li><a href="../../index.php">Home</a></li>
        <li>
          <a href="#" class="userinfo">
            <i class="fa fa-user"></i>
            Awa Melvine
            <i class="fa fa-chevron-down"></i>
          </a>
          <ul class="dropdown">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#" class="logout">logout</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
  <!-- // header -->

  <div class="admin-wrapper clearfix">
    <!-- Left Sidebar -->
    <div class="left-sidebar">
      <ul>
        <li><a href="index.php">Manage Posts</a></li>
       
      </ul>
    </div>
    <!-- // Left Sidebar -->

    <!-- Admin Content -->
    <div class="admin-content clearfix">
      <div class="button-group">
        <a href="create.php" class="btn btn-sm">Add Post</a>
        <a href="index.php" class="btn btn-sm">Manage Posts</a>
      </div>
      <div class="">
        <h2 style="text-align: center;">Create Post</h2>
<?php include '../../database/formErrors.php';?>
        <form action="create.php" method="post">
          <h5 >Sender DETAILS</h5>
          <div class="input-group">
            <label>Fullname</label>
            <input type="text" name="s_full_name" class="text-input" value="<?php echo $s_full_name;?>">
          </div>
          <div class="input-group">
            <label>Email</label>
            <input class="text-input" type="email" name="s_email" id="body" value="<?php echo $s_email;?>"></input>
          </div>
          <div class="input-group">
            <label>Address</label>
            <textarea class="text-input" type="text" name="s_address"><?php echo $s_address;?></textarea>
          </div>


          <h5 >Receiver DETAILS</h5>
          <div class="input-group">
            <label>Fullname</label>
            <input type="text" name="r_full_name" class="text-input" value="<?php echo $r_full_name;?>">
          </div>
          <div class="input-group">
            <label>Email</label>
            <input class="text-input" type="r_email" name="r_email" id="body" value="<?php echo $r_email;?>"></input>
          </div>
          <div class="input-group">
            <label>Address</label>
            <textarea class="text-input" type="text" name="r_address" ><?php echo $r_address;?></textarea>
          </div>

           <h5 >PARCEL DETAILS</h5>
           <div class="input-group">
           <select class="text-input" name="freight_type" id="select1">
          
              <?php if(!empty($freight_type)) :?>
               <option selected value="<?php echo $freight_type;?>"><?php echo $freight_type;?></option>
              <?php endif;?>
                  <option value="">Select Freight Type</option>
              
              <option value="Catagories One">Catagories One</option>
              <option value="Catagories Two">Catagories Two</option>
              <option value="Catagories Three">Catagories Three</option>
              <option value="Catagories Four">Catagories Four</option>
          </select>
            </div>

           <div class="input-group">
            <label>Weight</label>
            <input class="text-input" type="weight" name="weight" id="body" value="<?php echo $weight;?>"></input>
          </div>

           <div class="input-group">
           <select class="text-input" name="payment" id="select1">
             <?php if(!empty($payment)) :?>
               <option selected value="<?php echo $payment;?>"><?php echo $payment;?></option>
              <?php endif;?>
              <option value="">Payment</option>
              <option value="Express Charges">Express Charges</option>
              <option value="Delivery Charges">Delivery Charges</option>
              <option value="Insurance and Delivery Charges">Insurance and Delivery Charges</option>
              <option value="Packaging and Delivery Charges">Packaging and Delivery Charges</option>
          </select>
            </div>

             <div class="input-group">
            <label>Origin</label>
            <input class="text-input" type="text" name="origin" id="body" value="<?php echo $origin;?>"></input>
          </div>

         
           <div class="input-group">
            <label>Destination</label>
            <input class="text-input" type="text" name="destination" id="body"  value="<?php echo $destination;?>"></input>
          </div>


            <div class="input-group">
           <select class="text-input" name="shipment_mode" id="select1">
             <?php if(!empty($shipment_mode)) :?>
               <option selected value="<?php echo $shipment_mode;?>"><?php echo $shipment_mode;?></option>
              <?php endif;?>
              <option value="">Shipment Mode</option>
              <option value="Air">Air</option>
              <option value="Land"> Land </option>
              <option value="Ship">Ship </option>
              
          </select>
            </div>

            
           <div class="input-group">
            <label>Parcel Content</label>
            <input class="text-input" type="text" name="parcel_content" id="body" value="<?php echo $parcel_content;?>"></input>
          </div>

            <div class="input-group">
           <select class="text-input" name="shipment_type" id="select1">
           <?php if(!empty($shipment_type)) :?>
               <option selected value="<?php echo $shipment_type;?>"><?php echo $shipment_type;?></option>
              <?php endif;?>
              <option value="">Shipment Type</option>
              <option value="Express_delivery">Express delivery</option>
              <option value="Package_and_deliver"> Package and deliver</option>
              <option value="Insure_and_deliver">Insure and deliver</option>
              
          </select>
            </div>

              
           <div class="input-group">
            <label>Departure date</label>
            <input class="text-input" type="date" name="departure_date" id="body" value="<?php echo $departure_date;?>"></input>
          </div>

           <div class="input-group">
            <label>Expected delivery date</label>
            <input class="text-input" type="date" name="expected_delivery_date" id="body" value="<?php echo $expected_delivery_date;?>"></input>
          </div>

           <div class="input-group">
            
            <input class="text-input" type="hidden" name="tracking_id" id="body" value="<?php echo $tracking_id;?>"></input>
          </div>
           <div class="input-group">
            
            <input class="text-input" type="hidden" name="status" id="body" value="1"></input>
          </div>

          <div class="input-group">
            <button type="submit" name="send-post" class="btn">Send Post</button>
          </div>
        </form>

      </div>
    </div>
    <!-- // Admin Content -->

  </div>


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- CKEditor 5 -->
 

  <!-- Custome Scripts -->
  <script src="../../scripts.js"></script>

</body>

</html>