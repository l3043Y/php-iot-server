<?
$servername = "172.20.0.2";
$username = "root";
$password = "superSecr3t";
$method = $_SERVER['REQUEST_METHOD'];
echo "$method::Welcome to iot-server\n";

// Create connection
echo "DATABASE_URL=mysql://$username:$password@$servername:PORT_NUMBER/\r\n";
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully!\r\n";

// get posted data
if( $_SERVER['REQUEST_METHOD'] === 'POST' ){
    $data = json_decode(file_get_contents("php://input"));

    $sql = "INSERT INTO admin_iot.eMeter (identifier, value) VALUES ('$data->identifier', '$data->value')";
    if(mysqli_query($conn, $sql)){
        echo "Records added successfully!!\r\n";
    } else{
        echo "ERROR: Could not able to execute $sql.\r\n" . mysqli_error($conn);
    }
    echo json_encode($data);
}

?>