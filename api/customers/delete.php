<?php
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: DELETE');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization,X-Requested-With');

  include_once '../../config/database.php';
  include_once '../../models/customer.php';
  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $customer = new Customer($db);

  // Get raw customer data
  $data = json_decode(file_get_contents("php://input"));

  // Set ID to UPDATE
  $customer->id = $data->id;

  // Delete customer
  if($customer->delete()) {
    echo json_encode(
      array('message' => 'Customer deleted')
    );
  } else {
    echo json_encode(
      array('message' => 'Customer not deleted')
    );
  }
