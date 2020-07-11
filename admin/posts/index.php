<?php include '../../database/messenger.php'; 

if(!isset($_SESSION['id'])){
  header('location:../login.php');
}

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

  <title>Admin - Manage Posts</title>
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
           Admin
            <i class="fa fa-chevron-down"></i>
          </a>
          <ul class="dropdown">
           
          <?php if(isset($_SESSION['id'])):?>
            <li><a href="../logout.php" class="logout">logout</a></li>
             <li><a href="../update_details.php" class="logout">Change Login details</a></li>
          <?php else:?>
             <li><a href="../login.php" class="logout">login</a></li>
          <?php endif;?>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
  <!-- // header -->

  <div class="admin-wrapper clearfix">
    <!-- Left Sidebar -->
    
    <!-- // Left Sidebar -->

    <!-- Admin Content -->
    <div class="admin-content clearfix" style="width:100%;padding:40px 5px 100px 5px;">
      <div class="button-group">
        <a href="create.php" class="btn btn-sm">Add Post</a>
        <a href="index.php" class="btn btn-sm">Manage Posts</a>
      </div>
     
      <div class="">
        <h2 style="text-align: center;">Manage Posts</h2>
         <?php include '../../database/messages.php' ;?>
        <table>
          <thead>
            <th>N</th>
            <th>Sender Name</th>
            <th>Sender Email</th>
            <th>Sender Address</th>
            <th>Receiver Name</th>
            <th>Receiver Email</th>
            <th>Receiver Address</th>
            <th>Freight Type</th>
            <th>Weight</th>
            <th>Payment</th>
            <th>Origin</th>
            <th>Destination</th>
            <th>Shipment Mode</th>
            <th>Parcel Content</th>
            <th>Shipment Type</th>
            <th>Departure Date</th>
            <th>Expected Delivery Date</th>
            <th>Tracking ID</th>
            <th>Status</th>
            <th colspan="2">Action</th>
            <th colspan="2">Change Status</th>
          </thead>
          <tbody>
        <?php foreach($posts as $key =>$post):?>
         
            <tr class="rec">
              <td><?php echo $key + 1;?></td>
              <td>
                <a href="#"><?php echo $post['s_full_name'];?></a>
              </td>
              <td><?php echo $post['s_email'];?></td>
              <td>
                <?php echo $post['s_address'];?>
              </td>
              <td>
               <?php echo $post['r_full_name'];?>
              </td>
              <td>
                <?php echo $post['r_email'];?>
              </td>
              <td>
               <?php echo $post['r_address'];?>
              </td>
              <td>
               <?php echo $post['freight_type'];?>
              </td>
              <td>
               <?php echo $post['weight'];?>
              </td>
              <td>
                <?php echo $post['payment'];?>
              </td>
              <td>
               <?php echo $post['origin'];?>
              </td>
              <td>
               <?php echo $post['destination'];?>
              </td>
              <td>
               <?php echo $post['shipment_mode'];?>
              </td>
              <td>
               <?php echo $post['parcel_content'];?>
              </td>
              <td>
                <?php echo $post['shipment_type'];?>
              </td>
              <td>
               <?php echo $post['departure_date'];?>
              </td>
              <td>
               <?php echo $post['expected_delivery_date'];?>
              </td>
              <td>
               <?php echo $post['tracking_id'];?>
              </td>
              <?php if($post['status']===1) :?>
              <td>
               <?php echo 'Picked up for delivery'?>
              </td>
              <?php elseif($post['status']===2) :?>
              <td>
               <?php echo 'In transit'?>
              </td>
              <?php elseif($post['status']===3) :?>
              <td>
               <?php echo 'Delivered'?>
              </td>
              <?php endif;?>
              <td>
                <a href="edit.php?id=<?php echo $post['id'];?>" class="edit">
                 edit
                </a>
              </td>
              <td>
                <a href="index.php?delete_id=<?php echo $post['id'];?>" class="delete">
                delete
                </a>
              </td>
              <td>
                <a href="index.php?intransit_id=<?php echo $post['id'];?>" class="unpublished">
                Intransit
                </a>
              </td>
              <td>
                <a href="index.php?delivered_id=<?php echo $post['id'];?>" class="publish">
               delivered
                </a>
              </td>
            </tr>
           
            </tr>
           <?php endforeach;?>
          </tbody>
        </table>

      </div>
    </div>
    <!-- // Admin Content -->

  </div>


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="../../scripts.js"></script>

</body>

</html>