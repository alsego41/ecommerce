<?php
    function checkLogin(){
        include('database.php');
        if (isset($_POST['btnLogin'])){
            $username = $_POST['username'];
            $sql = "SELECT * FROM admins WHERE BINARY userName='$username'";
            $conn = connect();
            $result = $conn->query($sql);
            $data = mysqli_fetch_assoc($result);
            if ($data && $data != NULL){
                // $data = $result->fetch_assoc();
                // echo var_dump($data);
                $isPswValid = password_verify($_POST['password'], $data['userPassword']);
                if ($isPswValid){
                    // echo "Acceso permitido";
                    return 1;
                } else {
                    // echo "Acceso denegado";
                    return 0;
                }
            } else {
                // echo "Acceso denegado";
                return 0;
            }
            
            // $stmt->bind_param("s",$username);
            // $stmt->execute();
            // return $stmt;
            // $stmt = $conn->query()
        }
    }
?>