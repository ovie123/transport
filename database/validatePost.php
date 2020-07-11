<?php 

function validatePost($post){


$errors = array();


if(empty($post['s_full_name'])){
  array_push($errors, "Sender's name is required");
}
if(empty($post['s_email'])){
  array_push($errors, 'Sender\'s email cannot be empty');
}
if(empty($post['s_address'])){
  array_push($errors, ' Sender\'s address cannot be empty');
}

if(empty($post['r_full_name'])){
  array_push($errors, "Receiver's name is required");
}
if(empty($post['r_email'])){
  array_push($errors, 'Receiver\'s email cannot be empty');
}
if(empty($post['r_address'])){
  array_push($errors, ' Receiver\'s address cannot be empty');
}


if(empty($post['freight_type'])){
  array_push($errors, "Please select a freight type");
}
if(empty($post['payment'])){
  array_push($errors, 'Please select a payment mode');
}
if(empty($post['origin'])){
  array_push($errors, ' Origin is required');
}

if(empty($post['destination'])){
  array_push($errors, "Destination is required");
}
if(empty($post['shipment_mode'])){
  array_push($errors, 'Please select a shipment mode');
}
if(empty($post['parcel_content'])){
  array_push($errors, ' Parcel Content cannot be empty');
}
if(empty($post['shipment_type'])){
  array_push($errors, "Please select a shipment type");
}
if(empty($post['departure_date'])){
  array_push($errors, 'Please select a departure date');
}
if(empty($post['expected_delivery_date'])){
  array_push($errors, 'Please select an expected delivery date');
}


    return $errors;

    }



