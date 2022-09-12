<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../../config/Database.php';
  include_once '../../models/Post.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $post = new Post($db);

  // Get raw posted data
  $data = json_decode(file_get_contents("php://input"));
var_dump($data);
  $post->user_fname = $data->user_fname;
  $post->user_lname = $data->user_lname;
  $post->user_email = $data->user_email;
  $post->user_password = $data->user_password;
  $post->user_type_id = $data->user_type_id;
  $post->user_tel = $data->user_tel;
  $post->user_created_at = $data->user_created_at;
  $post->user_updated_at = $data->user_updated_at;

  // Create post
  if($post->create()) {
    
    echo json_encode(
      array('message' => 'Post Created')
    );
  } else {echo "sorry";
    echo json_encode(
      array('message' => 'Post Not Created')
    );
  }

