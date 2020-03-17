<?php
    $host = getenv ('DB_HOST');
    $db   = getenv ('DB_NAME');
    $user = getenv ('DB_USER');
    $pass = getenv ('DB_PASSWORD');
    $charset = getenv ('DB_CHARSET');

  $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
  $options = [
     PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
     PDO::ATTR_EMULATE_PREPARES   => false,
  ];
  try {
      $pdo = new PDO($dsn, $user, $pass, $options);
  } catch (\PDOException $e) {
      throw new \PDOException($e->getMessage(), (int)$e->getCode());
  }

//   if (isset($_SERVER['HTTP_COOKIE'])) {
//    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
//    foreach($cookies as $cookie) {
//        $parts = explode('=', $cookie);
//        $name = trim($parts[0]);
//        setcookie($name, '', time()-1000);
//        setcookie($name, '', time()-1000, '/');
//    }
// }

  if(isset($_POST['atr']) && !empty($_POST['atr'])){

      $atr = $_POST['atr'];

      $sth = $pdo->prepare("SELECT * FROM products WHERE image=?");

      $sth->execute([$atr]);


      $result = $sth->fetch();

      $id = $result['id'];
      $name = $result['name'];
      $price = $result['price'];
      $image = $result['image'];
      $short_description = $result['short_description'];
      $description = $result['description'];

      $return_arr = [
          'id' => $id,
          'name' => $name,
          'price' => $price,
          'image' => $image,
          'short_description' => $short_description,
          'description' => $description,
      ];
      header ('Content-Type: application/json');
      $json = json_encode($return_arr) ?? '{}';


      echo $json ?? '{}'; exit;
  }


  if($_POST && $_POST['firstid']){

      $firstid = $_POST['firstid'];

      $sth = $pdo->prepare("SELECT * FROM products WHERE id=?");


      $sth->execute([$firstid]);



      $result = $sth->fetch();



      $id = $result['id'];
      $name = $result['name'];
      $price = $result['price'];
      $image = $result['image'];
      $short_description = $result['short_description'];
      $description = $result['description'];

      $return_arr = [
          'id' => $id,
          'name' => $name,
          'price' => $price,
          'image' => $image,
          'short_description' => $short_description,
          'description' => $description,
      ];
    //  header ('Content-Type: application/json');
      // $json = json_encode($return_arr) ?? '{}';
      //
      // echo $json ?? '{}';

      // var_dump($return_arr);
      // exit;

      //  echo json_encode($return_arr);

      header ('Content-Type: application/json');
      $json = json_encode($return_arr) ?? '{}';


      echo $json ?? '{}'; exit;



  }




      // code...


 ?>
