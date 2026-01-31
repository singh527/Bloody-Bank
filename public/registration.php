<?php
session_start();
// if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
//     header('Location: login.php'); // Redirect to login if not authenticated
//     exit;
// }
include 'db.php';
    if($_SERVER['REQUEST_METHOD']=='POST'){

    if(isset($_POST['reg_submit'])){
           $name=$_POST['name'];
            $aadhar=$_POST['aadhar'];
            $mobile=$_POST['mobile'];
            $blood=$_POST['blood'];
            $age=$_POST['age'];
            $gender=$_POST['gender'];
            $category=$_POST['reg_type'];
            $password=$_POST['password'];
            $confirm_password=$_POST['confirm_password'];
            $email=$_POST['email'];
           if(strlen($password)<8){
            echo "<script>
            alert('Password must be atleast 8 character');
            window.location.href = 'login.php#signup-container';
        </script>";
        exit;
        }
        if($age<10){
            echo "<script>
            alert('age must be greater than 10');
            window.location.href = 'login.php#signup-container';
        </script>";
        exit;
        }
        if ($password != $confirm_password) {
            echo "<script>
            alert('password and confirm password didn't match');
            window.location.href = 'login.php#signup-container';
        </script>";
        exit;
        }
        if(strlen($mobile) != 10 ){
            echo "<script>
            alert('invalid mobile number');
            window.location.href = 'login.php#signup-container';
        </script>";
        exit;
        }
        if(strlen($aadhar) != 12 && gettype($mobile) === "integer"){
            echo "<script>
            alert('invalid aadhar number');
            window.location.href = 'login.php#signup-container';
        </script>";
        exit;
        }

         
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
           $registration=" INSERT INTO `registration` (`name`, `aadhar`, `mobile`, `age`, `gender`, `password`, `email`, `blood`, `reg_type`) VALUES ('$name', '$aadhar', '$mobile', '$age', '$gender', '$hashed_password', '$email', '$blood', '$category')";

           if($conn->query($registration)=== True){
            echo "<script>
        alert('Registration successful! now login please');
        window.location.href = 'login.php';
    </script>";
    exit;
           
        }
        else{
            echo "<script>
            alert('Registration unsuccessful! please try again');
            window.location.href = 'login.php#signup-container';
        </script>";
        exit;
           
            
        }
    }
    if(isset($_POST['log_submit'])){
        $mobile=$_POST['mobile'];
        $password=$_POST['password'];
            
        if(strlen($password)<8){
            echo "<script>
            alert('Password must be atleast 8 character');
            window.location.href = 'login.php';
        </script>";
        exit;
        }
        //fetch user given phone number
        $query = "SELECT * FROM registration WHERE mobile = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('s',$mobile);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows > 0){
            $user = $result->fetch_assoc();
        
            if(password_verify($password, $user['password'])){
                //set session
                $_SESSION['user_id'] = $user['mobile'];
                $_SESSION['user_name'] = $user['name'];
                $_SESSION['logged_in'] = true;
                header('Location: index.php');
                exit;
            }
            else{
                echo "<script>
                alert('invalid password! try again');
                window.location.href = 'login.php';
            </script>";
            exit;
               
            }
        }else{
            echo "<script>
            alert('no user found');
            window.location.href = 'login.php';
        </script>";
        exit;
        }
    }
}

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];
$user_query = "SELECT * FROM registration WHERE mobile = $user_id";
$user_result = $conn->query($user_query);
$user = $user_result->fetch_assoc();

?>