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

// var_dump($_POST);
//header("Location: /result");

//check_value = isset($_POST['СИРИУС+-+Д+LIGHT']) ? 1 : 0;

// if(isset($_POST['intense'])){
// check_value = $_POST['intense'];
// echo check_value;
// } else {
//     echo "The post doesn't exists";
// }
//
// exit;

if($_POST && isset($_POST['order'])){

       $first_name = $_POST['first_name'];
       $last_name = $_POST['last_name'];
       $email = $_POST['email'];
       $telephone = $_POST['telephone'];
       $town = $_POST['town'];
       $oblast = $_POST['oblast'];
       $total = (float) $_POST['total'];
       $bank = isset($_POST['bank']) ? 1 : 0;
       $cache = isset($_POST['cache']) ? 1 : 0;

       $arr = [];
       $arrid = [];
       if(isset($_POST['intense'])){
       $intense = $_POST['intense'];
       array_push($arr, $intense);
       $intenseid = 3;
       array_push($arrid, $intenseid);

       }
       if(isset($_POST['clasic'])){
       $clasic = $_POST['clasic'];
       array_push($arr, $clasic);
       $clasicid = 0;
       array_push($arrid, $clasicid);

       }
       if(isset($_POST['sport'])){
       $sport = $_POST['sport'];
       array_push($arr, $sport);
       $sportid = 2;
       array_push($arrid, $sportid);

       }
       if(isset($_POST['light'])){
       $light = $_POST['light'];
       array_push($arr, $light);
       $lightid =1;
       array_push($arrid, $lightid);

       }

        $sql = "INSERT INTO orders ( first_name,last_name,email,telephone,town,oblast,total,bank,cache ) VALUES (?,?,?,?,?,?,?,?,?)";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$first_name, $last_name, $email, $telephone, $town, $oblast, $total, $bank, $cache]);

        $stmtid = $pdo->query("SELECT id FROM orders ORDER BY id DESC LIMIT 1");
        $order_id = $stmtid->fetch(PDO::FETCH_ASSOC);

        $order_id  = reset($order_id);

        // print_r(order_id);
        // exit;


        for($i =0; $i < count($arr); $i++){

            $sql = "INSERT INTO order_sirius ( order_id, sirius_id, quantity ) VALUES (?,?,?)";
            $stmt= $pdo->prepare($sql);
            $stmt->execute([ $order_id, $arrid[i], $arr[i]  ]);
        }
}
