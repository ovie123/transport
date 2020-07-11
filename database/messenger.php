<?php
include 'users.php';
include ('validatePost.php');
include ('validateLogin.php');






$table = 'users';
$errors = array();



  $s_full_name = '';
  $s_email = '';
  $s_address = '';
  $r_full_name = '';
  $r_email = '';
  $r_address = '';
  $freight_type = '';
  $weight = '';
  $payment = '';
  $origin = '';
  $destination = '';
  $shipment_mode = '';
  $shipment_type = '';
  $parcel_content = '';
  $departure_date = '';
  $expected_delivery_date = '';
  



//save post
if(isset($_POST['send-post'])){
unset($_POST['send-post']);
$errors = validatePost($_POST);
if(count($errors)===0){
  $post_id = create($table, $_POST);

  
$track = $_POST['tracking_id'];
$r_mail = $_POST['r_email'];
//send mail 


$body="
<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8' />
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <style type='text/css'>
    body {
      Margin: 0 !important;
      padding: 15px;
      background-color: #FFF;
    }

    .wrapper {
      width: 100%;
      table-layout: fixed;
    }

    .wrapper-inner {
      width: 100%;
      background-color: #eee;
      max-width: 670px;
      Margin: 0 auto;
    }

    table {
      border-spacing: 0;
      font-family: sans-serif;
      color: #727f80;
    }

    .outer-table {
      width: 100%;
      max-width: 670px;
      margin: 0 auto;
      background-color: #FFF;
    }

    td {
      padding: 0;
    }

    .header {
      background-color: #C2C1C1;
      border-bottom: 3px solid #81B9C3;
    }

    p {
      Margin: 0;
    }

    .header p {
      text-align: center;
      padding: 1%;
      font-weight: 500;
      font-size: 11px;
      text-transform: uppercase;
    }

    a {
      color: #F1F1F1;
      text-decoration: none;
    }

    /*--- End Outer Table 1 --*/
    .main-table-first {
      width: 100%;
      max-width: 610px;
      Margin: 0 auto;
      background-color: #FFF;
      border-radius: 6px;
      margin-top: 25px;
    }

    /*--- Start Two Column Sections --*/
    .two-column {
      text-align: center;
      font-size: 0;
      padding: 5px 0 10px 0;
    }

    .two-column .section {
      width: 100%;
      max-width: 300px;
      display: inline-block;
      vertical-align: top;
    }

    .two-column .content {
      font-size: 16px;
      line-height: 20px;
      text-align: justify;
    }

    .content {
      width: 100%;
      padding-top: 20px;
    }

    .center {
      display: table;
      Margin: 0 auto;
    }

    img {
      border: 0;
    }

    img.logo {
      float: left;
      Margin-left: 5%;
      max-width: 200px !important;
    }

    #callout {
      float: right;
      Margin: 4% 5% 2% 0;
      height: auto;
      overflow: hidden;
    }

    #callout img {
      max-width: 20px;
    }

    .social {
      list-style-type: none;
      Margin-top: 1%;
      padding: 0;
    }

    .social li {
      display: inline-block;
    }

    .social li img {
      max-width: 15px;
      Margin-bottom: 0;
      padding-bottom: 0;
    }

    /*--- Start Outer Table Banner Image, Text & Button --*/
    .image img {
      width: 100%;
      max-width: 670px;
      height: auto;
    }

    .main-table {
      width: 100%;
      max-width: 610px;
      margin: 0 auto;
      background-color: #FFF;
      border-radius: 6px;
    }

    .one-column .inner-td {
      font-size: 16px;
      line-height: 20px;
      text-align: justify;
    }

    .inner-td {
      padding: 10px;
    }

    .h2 {
      text-align: center;
      font-size: 23px;
      font-weight: 600;
      line-height: 45px;
      Margin: 12px;
      color: #4A4A4A;
    }

    p.center {
      text-align: center;
      max-width: 580px;
      line-height: 24px;
    }

    .button-holder-center {
      text-align: center;
      Margin: 5% 2% 3% 0;
    }

    .button-holder {
      float: right;
      Margin: 5% 0 3% 0;
    }

    .btn {
      font-size: 15px;
      font-weight: 600;
      background: #81BAC6;
      color: #FFF;
      text-decoration: none;
      padding: 9px 16px;
      border-radius: 28px;
    }

    /*--- Start Two Column Image & Text Sections --*/
    .two-column img {
      width: 100%;
      max-width: 280px;
      height: auto;
    }

    .two-column .text {
      padding: 10px 0;
    }

    /*--- Start 3 Column Image & Text Section --*/
    .outer-table-2 {
      width: 100%;
      max-width: 670px;
      margin: 22px auto;
      background-color: #C2C1C1;
      border-bottom: 3px solid #81B9C3;
      border-top: 3px solid #81B9C3;
    }

    .three-column {
      text-align: center;
      font-size: 0;
      padding: 10px 0 30px 0;
    }

    .three-column .section {
      width: 100%;
      max-width: 200px;
      display: inline-block;
      vertical-align: top;
    }

    .three-column .content {
      font-size: 16px;
      line-height: 20px;
    }

    .three-column img {
      width: 100%;
      max-width: 125px;
      height: auto;
    }

    .outer-table-2 p {
      margin-top: 6px;
      color: #FFF;
      font-size: 18px;
      font-weight: 500;
      line-height: 23px;
    }

    /*--- Start Two Column Article Section --*/
    .outer-table-3 {
      width: 100%;
      max-width: 670px;
      margin: 22px auto;
      background-color: #C2C1C1;
      border-top: 3px solid #81B9C3;
    }

    .h3 {
      text-align: center;
      font-size: 21px;
      font-weight: 600;
      Margin-bottom: 8px;
      color: #4A4A4A;
    }

    /*--- Start Bottom One Column Section --*/
    .inner-bottom {
      padding: 22px;
    }

    .h1 {
      text-align: center !important;
      font-size: 25px !important;
      font-weight: 600;
      line-height: 45px;
      Margin: 12px 0 20px 0;
      color: #4A4A4A;
    }

    .inner-bottom p {
      font-size: 16px;
      line-height: 24px;
      text-align: justify;
    }

    /*--- Start Footer Section --*/
    .footer {
      width: 100%;
      background-color: #C2C1C1;
      Margin: 0 auto;
      color: #FFF;
    }

    .footer img {
      max-width: 135px;
      Margin: 0 auto;
      display: block;
      padding: 4% 0 1% 0;
    }

    p.footer {
      text-align: center;
      color: #FFF !important;
      line-height: 30px;
      padding-bottom: 4%;
      text-transform: uppercase;
    }

    /*--- Media Queries --*/
    @media screen and (max-width: 400px) {
      .h1 {
        font-size: 22px;
      }

      .two-column .column,
      .three-column .column {
        max-width: 100% !important;
      }

      .two-column img {
        width: 100% !important;
      }

      .three-column img {
        max-width: 60% !important;
      }
    }

    @media screen and (min-width: 401px) and (max-width: 400px) {

      .two-column .column {
        max-width: 50% !important;
      }

      .three-column .column {
        max-width: 33% !important;
      }
    }

    @media screen and (max-width:768px) {
      img.logo {
        float: none !important;
        margin-left: 0% !important;
        max-width: 200px !important;
      }

      #callout {
        float: none !important;
        margin: 0% 0% 0% 0;
        height: auto;
        text-align: center;
        overflow: hidden;
      }

      #callout img {
        max-width: 26px !important;
      }

      .two-column .section {
        width: 100% !important;
        max-width: 100% !important;
        display: inline-block;
        vertical-align: top;
      }

      .two-column img {
        width: 100% !important;
        height: auto !important;
      }

      img.img-responsive {
        width: 100% !important;
        height: auto !important;
        max-width: 100% !important;
      }

      .content {
        width: 100%;
        padding-top: 0px !important;
      }
    }
  </style>
</head>

<body>
  <div class='wrapper'>
    <div class='wrapper-inner'>
      <table class='outer-table'>
        <tr>
          <td class='header'>

          </td>
        </tr>
        <!--- End Header -->
      </table>
      <!--- End Outer Table -->
      <table class='main-table-first'>
        <tr>
          <td class='two-column'>
            <div class='section'>
              <table width='100%'>
                <tr>
                  <td class='inner-td'>
                    <table class='content'>
                      <tr>
                        <td align='center'>
                          <img src='email/logo.png' class='logo'>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </div>
            <!--- End First Column of Two Columns -->
            <div class='section'>
              <table width='100%'>
                <tr>
                  <td class='inner-td'>
                    <table class='content'>
                      <tr>
                        <td>
                          <div id='callout'>
                            <ul class='social'>
                              <li><a><img src='email/facebook.png'></a></li>
                              <li><a><img src='email/googleplus.png'></a></li>
                              <li><a><img src='email/twitter.png'></a></li>
                              <li><a><img src='email/youtube.png'></a></li>
                              <li><a><img src='email/instagram.png'></a></li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </div>
            <!--- End Second Column of Two Columns -->
          </td>
        </tr>
        <!--- End Two Column Section -->
      </table>
      <!--- End Main Table -->

      <!--- End Outer Table -->
      <table class='main-table'>
        <tr>
          <td class='one-column'>
            <table width='100%'>
              <tr>
                <td class='inner-td'>
                  <p class='h2'></p>
                  <p class='h2 left' style='text-align: left;'>
                    Hi there!
                  </p>
                  <p class='left' style='font-size: 15px;'>
                    You have a package ready to be delivered to you.
                    here's your tracking id <strong>$track</strong>. Visit our website to @www.mywebsite.com to track your parcel.
                  </p>
                  <p class='button-holder-center'>
                    <a class='btn' href='#'>Learn more</a>
                  </p>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <!--- End Heading, Paragraph & Button Section -->
        <tr>
          <td class='two-column'>
            <div class='section'>
              <table width='100%'>
                <tr>
                  <td class='inner-td'>
                    <table class='content'>
                      <tr>
                        <td>
                          <img src='email/blog1.png' class='img-responsive'>
                        </td>
                      </tr>
                      <tr>
                        <td class='text'>
                          <p>Make your emails stand-out in the crowd of other messages in the inbox your readers search
                            through with a compelling design!</p>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </div>
            <!--- End First Column of Two Columns -->
            <div class='section'>
              <table width='100%'>
                <tr>
                  <td class='inner-td'>
                    <table class='content'>
                      <tr>
                        <td>
                          <img src='email/blog01.png' class='img-responsive'>
                        </td>
                      </tr>
                      <tr>
                        <td class='text'>
                          <p>Get the conversation started with your readers and respond to their messages for the better
                            email open-rates when engaging your list.</p>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </div>
            <!--- End Second Column of Two Columns -->
          </td>
        </tr>
        <!--- End Two Column Section -->
      </table>
      <!--- End Main Table -->

      <!--- End First Column of Three Columns -->

      <!--- End Second Column of Three Columns -->

      <!--- End Third Column of Three Columns -->
      </td>
      </tr>
      <!--- End Three Column Section -->
      </table>
      <!--- End Outer Table 2 -->

      <!--- End First Column of Two Columns -->
      <!--[if (gte mso 9)|(IE)]>
                        </td><td width='50%' valign='top'>
                        <![endif]-->

      <!--- End Second Column of Two Columns -->

      <!--- End Heading, Text & Button Section -->
      </table>
      <!--- End Main Table -->
      <table class='outer-table-3'>
        <tr>
          <td class='one-column'>
            <table width='100%'>
              <tr>
                <td class='footer'>
                  <img src='email/logo2_footer.png'>
                  <p class='footer'>1000 Street Road My City, My State 19000<br>&copy; w3newbie, 2017.<br><a
                      href='index.html#'>Unsubscribe</a></p>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      <!--- End Main Table -->
    </div>
    <!--- End Wrapper Inner -->
  </div>
  <!--- End Wrapper -->
  <br>
</body>

</html>
";


require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->SMTPDebug = false;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'ovie4erny@gmail.com';                 // SMTP username
$mail->Password = 'chromium1';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('ovie4erny@gmail.com', 'Mailer');
$mail->addAddress($r_mail);     // Add a recipient
$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('ovie4erny@gmail.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = $body;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    header('location:index.php');
           
  $_SESSION['message'] = 'Post sent successfully';
  $_SESSION['type'] = 'success';
  exit();
}
  

}
else{

  $s_full_name = $_POST['s_full_name'];
  $s_email = $_POST['s_email'];
  $s_address = $_POST['s_address'];
  $r_full_name = $_POST['r_full_name'];
  $r_email = $_POST['r_email'];
  $r_address = $_POST['r_address'];
  $freight_type = $_POST['freight_type'];
  $weight = $_POST['weight'];
  $payment = $_POST['payment'];
  $origin = $_POST['origin'];
  $destination = $_POST['destination'];
  $shipment_mode = $_POST['shipment_mode'];
  $shipment_type = $_POST['shipment_type'];
  $parcel_content = $_POST['parcel_content'];
  $departure_date = $_POST['departure_date'];
  $expected_delivery_date = $_POST['expected_delivery_date'];
  
}
  
}

$username = '';
$password = '';

//update admin login details

if(isset($_POST['login'])){
  $errors = validateLogin($_POST);

  if(count($errors)===0){
    $user = selectOne('admin', ['username' => $_POST['username']]);

    if($user && password_verify($_POST['password'], $user['password'])){
      //login user and redirect user
       $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header('location:posts/index.php');
           
            $_SESSION['message'] = 'You are now Logged in';
            $_SESSION['type'] = 'success';
           
             exit();
      
    } else{
      array_push($errors, 'Wrong Credentials');
    }
  }

  $username = $_POST['username'];
  $password = $_POST['password'];
}



 
  
  


  

//fetch all 

$posts = selectAll($table);

//get id,  select one record and update record 

if(isset($_GET['id'])){
  $edit = selectOne($table, ['id'=>$_GET['id']]);
  
}
//delete post
if(isset($_GET['delete_id'])){
$id=$_GET['delete_id'];
$delete = delete($table,$id);
 header('location:index.php');
           
            $_SESSION['message'] = 'Post deleted successfully';
            $_SESSION['type'] = 'success';
           
             exit();
}

//intransit
if(isset($_GET['intransit_id'])){
$id=$_GET['intransit_id'];
$data = 2;
$intransit = update($table,$id,['status' => $data]);
 header('location:index.php');
           
            $_SESSION['message'] = 'Post Status Changed successfully';
            $_SESSION['type'] = 'success';
           
             exit();
}

//delivered
if(isset($_GET['delivered_id'])){
$id=$_GET['delivered_id'];
$data = 3;
$delivered = update($table,$id,['status' => $data]);
 header('location:index.php');
           
            $_SESSION['message'] = 'Post Status Changed successfully';
            $_SESSION['type'] = 'success';
           
             exit();
}


//update

if(isset($_POST['update-post'])){
  $id = $_POST['id'];
  $track = $_POST['tracking_id'];
  unset($_POST['id'],$_POST['update-post']);
$errors = validatePost($_POST);
if(count($errors)===0){
 $update_post = update($table,$id,$_POST);
 $track = $track;
$r_mail = $_POST['r_email'];
//send mail 


$body="
<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8' />
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <style type='text/css'>
    body {
      Margin: 0 !important;
      padding: 15px;
      background-color: #FFF;
    }

    .wrapper {
      width: 100%;
      table-layout: fixed;
    }

    .wrapper-inner {
      width: 100%;
      background-color: #eee;
      max-width: 670px;
      Margin: 0 auto;
    }

    table {
      border-spacing: 0;
      font-family: sans-serif;
      color: #727f80;
    }

    .outer-table {
      width: 100%;
      max-width: 670px;
      margin: 0 auto;
      background-color: #FFF;
    }

    td {
      padding: 0;
    }

    .header {
      background-color: #C2C1C1;
      border-bottom: 3px solid #81B9C3;
    }

    p {
      Margin: 0;
    }

    .header p {
      text-align: center;
      padding: 1%;
      font-weight: 500;
      font-size: 11px;
      text-transform: uppercase;
    }

    a {
      color: #F1F1F1;
      text-decoration: none;
    }

    /*--- End Outer Table 1 --*/
    .main-table-first {
      width: 100%;
      max-width: 610px;
      Margin: 0 auto;
      background-color: #FFF;
      border-radius: 6px;
      margin-top: 25px;
    }

    /*--- Start Two Column Sections --*/
    .two-column {
      text-align: center;
      font-size: 0;
      padding: 5px 0 10px 0;
    }

    .two-column .section {
      width: 100%;
      max-width: 300px;
      display: inline-block;
      vertical-align: top;
    }

    .two-column .content {
      font-size: 16px;
      line-height: 20px;
      text-align: justify;
    }

    .content {
      width: 100%;
      padding-top: 20px;
    }

    .center {
      display: table;
      Margin: 0 auto;
    }

    img {
      border: 0;
    }

    img.logo {
      float: left;
      Margin-left: 5%;
      max-width: 200px !important;
    }

    #callout {
      float: right;
      Margin: 4% 5% 2% 0;
      height: auto;
      overflow: hidden;
    }

    #callout img {
      max-width: 20px;
    }

    .social {
      list-style-type: none;
      Margin-top: 1%;
      padding: 0;
    }

    .social li {
      display: inline-block;
    }

    .social li img {
      max-width: 15px;
      Margin-bottom: 0;
      padding-bottom: 0;
    }

    /*--- Start Outer Table Banner Image, Text & Button --*/
    .image img {
      width: 100%;
      max-width: 670px;
      height: auto;
    }

    .main-table {
      width: 100%;
      max-width: 610px;
      margin: 0 auto;
      background-color: #FFF;
      border-radius: 6px;
    }

    .one-column .inner-td {
      font-size: 16px;
      line-height: 20px;
      text-align: justify;
    }

    .inner-td {
      padding: 10px;
    }

    .h2 {
      text-align: center;
      font-size: 23px;
      font-weight: 600;
      line-height: 45px;
      Margin: 12px;
      color: #4A4A4A;
    }

    p.center {
      text-align: center;
      max-width: 580px;
      line-height: 24px;
    }

    .button-holder-center {
      text-align: center;
      Margin: 5% 2% 3% 0;
    }

    .button-holder {
      float: right;
      Margin: 5% 0 3% 0;
    }

    .btn {
      font-size: 15px;
      font-weight: 600;
      background: #81BAC6;
      color: #FFF;
      text-decoration: none;
      padding: 9px 16px;
      border-radius: 28px;
    }

    /*--- Start Two Column Image & Text Sections --*/
    .two-column img {
      width: 100%;
      max-width: 280px;
      height: auto;
    }

    .two-column .text {
      padding: 10px 0;
    }

    /*--- Start 3 Column Image & Text Section --*/
    .outer-table-2 {
      width: 100%;
      max-width: 670px;
      margin: 22px auto;
      background-color: #C2C1C1;
      border-bottom: 3px solid #81B9C3;
      border-top: 3px solid #81B9C3;
    }

    .three-column {
      text-align: center;
      font-size: 0;
      padding: 10px 0 30px 0;
    }

    .three-column .section {
      width: 100%;
      max-width: 200px;
      display: inline-block;
      vertical-align: top;
    }

    .three-column .content {
      font-size: 16px;
      line-height: 20px;
    }

    .three-column img {
      width: 100%;
      max-width: 125px;
      height: auto;
    }

    .outer-table-2 p {
      margin-top: 6px;
      color: #FFF;
      font-size: 18px;
      font-weight: 500;
      line-height: 23px;
    }

    /*--- Start Two Column Article Section --*/
    .outer-table-3 {
      width: 100%;
      max-width: 670px;
      margin: 22px auto;
      background-color: #C2C1C1;
      border-top: 3px solid #81B9C3;
    }

    .h3 {
      text-align: center;
      font-size: 21px;
      font-weight: 600;
      Margin-bottom: 8px;
      color: #4A4A4A;
    }

    /*--- Start Bottom One Column Section --*/
    .inner-bottom {
      padding: 22px;
    }

    .h1 {
      text-align: center !important;
      font-size: 25px !important;
      font-weight: 600;
      line-height: 45px;
      Margin: 12px 0 20px 0;
      color: #4A4A4A;
    }

    .inner-bottom p {
      font-size: 16px;
      line-height: 24px;
      text-align: justify;
    }

    /*--- Start Footer Section --*/
    .footer {
      width: 100%;
      background-color: #C2C1C1;
      Margin: 0 auto;
      color: #FFF;
    }

    .footer img {
      max-width: 135px;
      Margin: 0 auto;
      display: block;
      padding: 4% 0 1% 0;
    }

    p.footer {
      text-align: center;
      color: #FFF !important;
      line-height: 30px;
      padding-bottom: 4%;
      text-transform: uppercase;
    }

    /*--- Media Queries --*/
    @media screen and (max-width: 400px) {
      .h1 {
        font-size: 22px;
      }

      .two-column .column,
      .three-column .column {
        max-width: 100% !important;
      }

      .two-column img {
        width: 100% !important;
      }

      .three-column img {
        max-width: 60% !important;
      }
    }

    @media screen and (min-width: 401px) and (max-width: 400px) {

      .two-column .column {
        max-width: 50% !important;
      }

      .three-column .column {
        max-width: 33% !important;
      }
    }

    @media screen and (max-width:768px) {
      img.logo {
        float: none !important;
        margin-left: 0% !important;
        max-width: 200px !important;
      }

      #callout {
        float: none !important;
        margin: 0% 0% 0% 0;
        height: auto;
        text-align: center;
        overflow: hidden;
      }

      #callout img {
        max-width: 26px !important;
      }

      .two-column .section {
        width: 100% !important;
        max-width: 100% !important;
        display: inline-block;
        vertical-align: top;
      }

      .two-column img {
        width: 100% !important;
        height: auto !important;
      }

      img.img-responsive {
        width: 100% !important;
        height: auto !important;
        max-width: 100% !important;
      }

      .content {
        width: 100%;
        padding-top: 0px !important;
      }
    }
  </style>
</head>

<body>
  <div class='wrapper'>
    <div class='wrapper-inner'>
      <table class='outer-table'>
        <tr>
          <td class='header'>

          </td>
        </tr>
        <!--- End Header -->
      </table>
      <!--- End Outer Table -->
      <table class='main-table-first'>
        <tr>
          <td class='two-column'>
            <div class='section'>
              <table width='100%'>
                <tr>
                  <td class='inner-td'>
                    <table class='content'>
                      <tr>
                        <td align='center'>
                          <img src='email/logo.png' class='logo'>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </div>
            <!--- End First Column of Two Columns -->
            <div class='section'>
              <table width='100%'>
                <tr>
                  <td class='inner-td'>
                    <table class='content'>
                      <tr>
                        <td>
                          <div id='callout'>
                            <ul class='social'>
                              <li><a><img src='email/facebook.png'></a></li>
                              <li><a><img src='email/googleplus.png'></a></li>
                              <li><a><img src='email/twitter.png'></a></li>
                              <li><a><img src='email/youtube.png'></a></li>
                              <li><a><img src='email/instagram.png'></a></li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </div>
            <!--- End Second Column of Two Columns -->
          </td>
        </tr>
        <!--- End Two Column Section -->
      </table>
      <!--- End Main Table -->

      <!--- End Outer Table -->
      <table class='main-table'>
        <tr>
          <td class='one-column'>
            <table width='100%'>
              <tr>
                <td class='inner-td'>
                  <p class='h2'></p>
                  <p class='h2 left' style='text-align: left;'>
                    Hi there!
                  </p>
                  <p class='left' style='font-size: 15px;'>
                    You have a package ready to be delivered to you.
                    here's your tracking id <strong>$track</strong>. Visit our website to @www.mywebsite.com to track your parcel.
                  </p>
                  <p class='button-holder-center'>
                    <a class='btn' href='#'>Learn more</a>
                  </p>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <!--- End Heading, Paragraph & Button Section -->
        <tr>
          <td class='two-column'>
            <div class='section'>
              <table width='100%'>
                <tr>
                  <td class='inner-td'>
                    <table class='content'>
                      <tr>
                        <td>
                          <img src='email/blog1.png' class='img-responsive'>
                        </td>
                      </tr>
                      <tr>
                        <td class='text'>
                          <p>Make your emails stand-out in the crowd of other messages in the inbox your readers search
                            through with a compelling design!</p>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </div>
            <!--- End First Column of Two Columns -->
            <div class='section'>
              <table width='100%'>
                <tr>
                  <td class='inner-td'>
                    <table class='content'>
                      <tr>
                        <td>
                          <img src='email/blog01.png' class='img-responsive'>
                        </td>
                      </tr>
                      <tr>
                        <td class='text'>
                          <p>Get the conversation started with your readers and respond to their messages for the better
                            email open-rates when engaging your list.</p>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </div>
            <!--- End Second Column of Two Columns -->
          </td>
        </tr>
        <!--- End Two Column Section -->
      </table>
      <!--- End Main Table -->

      <!--- End First Column of Three Columns -->

      <!--- End Second Column of Three Columns -->

      <!--- End Third Column of Three Columns -->
      </td>
      </tr>
      <!--- End Three Column Section -->
      </table>
      <!--- End Outer Table 2 -->

      <!--- End First Column of Two Columns -->
      <!--[if (gte mso 9)|(IE)]>
                        </td><td width='50%' valign='top'>
                        <![endif]-->

      <!--- End Second Column of Two Columns -->

      <!--- End Heading, Text & Button Section -->
      </table>
      <!--- End Main Table -->
      <table class='outer-table-3'>
        <tr>
          <td class='one-column'>
            <table width='100%'>
              <tr>
                <td class='footer'>
                  <img src='email/logo2_footer.png'>
                  <p class='footer'>1000 Street Road My City, My State 19000<br>&copy; w3newbie, 2017.<br><a
                      href='index.html#'>Unsubscribe</a></p>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      <!--- End Main Table -->
    </div>
    <!--- End Wrapper Inner -->
  </div>
  <!--- End Wrapper -->
  <br>
</body>

</html>
";


require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->SMTPDebug = false;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'ovie4erny@gmail.com';                 // SMTP username
$mail->Password = 'chromium1';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('ovie4erny@gmail.com', 'Mailer');
$mail->addAddress($r_mail);     // Add a recipient
$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('ovie4erny@gmail.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = $body;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    header('location:index.php');
           
  $_SESSION['message'] = 'Post sent successfully';
  $_SESSION['type'] = 'success';
  exit();
}
  header('location:index.php');
           
            $_SESSION['message'] = 'Post updated successfully';
            $_SESSION['type'] = 'success';
           
             exit();
}else{
  $edit['s_full_name'] = $_POST['s_full_name'];
  $edit['s_email'] = $_POST['s_email'];
  $edit['s_address'] = $_POST['s_address'];
  $edit['r_full_name'] = $_POST['r_full_name'];
  $edit['r_email'] = $_POST['r_email'];
  $edit['r_address'] = $_POST['r_address'];
  $edit['freight_type'] = $_POST['freight_type'];
  $edit['weight'] = $_POST['weight'];
  $edit['payment'] = $_POST['payment'];
  $edit['origin'] = $_POST['origin'];
  $edit['destination'] = $_POST['destination'];
  $edit['shipment_mode'] = $_POST['shipment_mode'];
  $edit['shipment_type'] = $_POST['shipment_type'];
  $edit['parcel_content'] = $_POST['parcel_content'];
  $edit['departure_date'] = $_POST['departure_date'];
  $edit['expected_delivery_date'] = $_POST['expected_delivery_date'];
  $edit['id'] = $id;
}

}





