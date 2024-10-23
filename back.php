<?php
session_start();
class backend{
    private $server = "localhost";
    private $username = "root";
    private $psw = "";
    private $database = "project";
    private $mysql;
    private $conn = false;
    private $result = [];
    private $connection;

    public function __construct(){
        if(!$this->conn){
            $this->mysql = new mysqli($this->server, $this->username,$this->psw,$this->database);
            $this->conn = true;
            if($this->mysql->connect_error){
                echo "Error in connecting with database". $this->mysql->connect_error;
            }
        }
        else{
           return true;
        }
    }

      function insertion($table, $param=array()){
            $columns = implode(", ", array_keys($param));
            $values = implode("', '", $param);

            $insertQuery = "INSERT INTO $table ($columns) VALUES ('$values')";
            $RunInsertQuery = $this->mysql->query($insertQuery);
            
            if($RunInsertQuery){
                // echo "Inserted Successfully";
                return $RunInsertQuery;
            }else{
                echo $this->mysql->connect_error;
            }

            $last_inserted_id = mysqli_insert_id($this->mysql);
            if($last_inserted_id){
                return $last_inserted_id;
            }
        }

        public function getLastInsertedId() {
            // Get the last inserted ID from the connection
            return mysqli_insert_id($this->mysql);
        }    
        

      function fetching($table, $rows="*", $join = null, $where = null){
        $select = "SELECT $rows FROM $table";
        if(!is_null($join)){
            $select .= " INNER JOIN $join";
        }
        if(!is_null($where)){
            $select .= " WHERE $where";
        }
        $RunSelect = $this->mysql->query($select);

        if($RunSelect){
            $FetchData = $RunSelect->fetch_all(MYSQLI_ASSOC);
            if($FetchData){
                if($FetchData !== null){
                    return $FetchData;
                }
            }
        }else{
            echo "Error Occur in Query".$this->mysql->error;
            return array(); // here will return an empty array
        }
      }


      function update($table, $param = array() ,$where = null , $limit = null){

        $data = array();
        foreach($param as $col => $val){
            $data[] =  "$col = '$val'" ;
        }
    
       $upData =  implode(',' , $data);
        $update = "UPDATE `$table` SET $upData";
    
        if(!is_null($where)){
            $update .= " WHERE $where";
        }
        if(!is_null($limit)){
            $update .= " LIMIT $limit";
        }
        $updateRun = $this->mysql->query($update);
        if($updateRun){
            return $updateRun;
        }else{
            // echo "Not Updated" . $this->mysql->connect_error;
            return false;
        }
    
    }

    function deletion($table, $where = null) {
        $deldata = "DELETE FROM $table ";
    
        if (!is_null($where)) {
            $deldata .= "WHERE $where";
        }
    
        $deldataRun = $this->mysql->query($deldata);
    
        if ($deldataRun) {
            return true; // or return $deldataRun; if you need the result for something
        } else {
            // Instead of echoing, return false or an error message
            return "Error deleting record: " . $this->mysql->error;
        }
    }
    

    } // class end here
    
    

    function imagehandling($img){
        $img_name = $img['name'];
        // $img_name = $_FILES['prd_img']['name'];
        $img_tmp = $img['tmp_name'];
        $uploads = "uploads/";
        $imgPath = $uploads . $img_name ; 
        move_uploaded_file($img_tmp , $imgPath);
        return array(
            'img_tmp' => $img_tmp,
            'imgPath' => $imgPath,
            'img_name' => $img_name
        );
    }

    // function noteshandling($note){
    //     $note_name = $note['name'];
    //     // $img_name = $_FILES['prd_img']['name'];
    //     $note_tmp = $note['tmp_name'];
    //     $uploads = "uploads/notes/";
    //     $notePath = $uploads . $note_name ; 
    //     move_uploaded_file($note_tmp, $notePath);
    //     return array(
    //         'note_tmp' => $note_tmp,
    //         'notePath' => $notePath,
    //         'note_name' => $note_name
    //     );
    // }

    function notesHandling($note) {
        $note_name = $note['name'];
        $note_tmp = $note['tmp_name'];
        $uploads = "uploads/notes/";
        $notePath = $uploads . $note_name;
    
        // Ensure the uploads directory exists
        if (!is_dir($uploads)) {
            if (!mkdir($uploads, 0777, true)) {
                return array(
                    'error' => 'Failed to create directories...'
                );
            }
        }
    
        // Check if the temporary file path is valid
        if (!is_uploaded_file($note_tmp)) {
            return array(
                'error' => 'Invalid temporary file path.'
            );
        }
    
        // Move the uploaded file
        if (move_uploaded_file($note_tmp, $notePath)) {
            return array(
                'note_tmp' => $note_tmp,
                'notePath' => $notePath,
                'note_name' => $note_name
            );
        } else {
            return array(
                'error' => 'Failed to move uploaded file.'
            );
        }
    }
    


    function imagehandlingStudent($img){
        $img_name = $img['name'];
        // $img_name = $_FILES['prd_img']['name'];
        $img_tmp = $img['tmp_name'];
        $uploads = "../uploads/";
        $imgPath = $uploads . $img_name ; 
        move_uploaded_file($img_tmp , $imgPath);
        return array(
            'img_tmp' => $img_tmp,
            'imgPath' => $imgPath,
            'img_name' => $img_name
        );
    }

    function coursehandling($course){
        $course_name = $course['name'];
        // $img_name = $_FILES['prd_img']['name'];
        $course_tmp = $course['tmp_name'];
        $cources = "cources/";
        $courcesPath = $cources . $course_name ; 
        move_uploaded_file($course_tmp , $courcesPath);
        return array(
            'course_tmp' => $course_tmp,
            'courcesPath' => $courcesPath,
            'course_name' => $course_name
        );
    }

    function assingmenthandling($assingment){
        $assingment_name = $assingment['name'];
        // $img_name = $_FILES['prd_img']['name'];
        $assingment_tmp = $assingment['tmp_name'];
        $assingment = "cources/assingment/";
        $assingmentPath = $assingment . $assingment_name ; 
        move_uploaded_file($assingment_tmp , $assingmentPath);
        return array(
            'assingment_tmp' => $assingment_tmp,
            'assingmentPath' => $assingmentPath,
            'assingment_name' => $assingment_name
        );
    }

    $registration = new  backend();

    if(isset($_POST['register_submit'])){
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password']; 

        function validate($Username){
            $usernamePattern = "/^[a-zA-Z][a-zA-Z0-9_]*$/"; 
            return  preg_match($usernamePattern,$Username);
        }

        function Emailvalidate($Email){
            $emailPattern = "/^[a-zA-Z0-9_-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$/"; 
            return  preg_match($emailPattern,$Email);
        }

        function Passwordvalidate($Password){
            $passwordPattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z0-9]{8,}$/";
            return  preg_match($passwordPattern,$Password);
        }

        if(validate($username)){

            $checkUsername = new backend();
            $UserDataUsername = $checkUsername->fetching('registration','registration_id',null,"username = '$username'");
            if(!is_null($UserDataUsername) && count($UserDataUsername) > 0){
                header("location: includes/register.php?ObtainUser=$username&ObtainEmail=$email&ObtainPassword=$password");
            }
            else{    

            if(Emailvalidate($email)){

                if(Passwordvalidate($password)){
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                    $user_register = new backend;
                    $user_exists = $user_register->fetching('registration','registration_id',null,"email = '$email'");
                  
                    if(!is_null($user_exists) && count($user_exists) > 0){
                        // echo "User Already Exists";
?>
<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>SweetAlert2 Example</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.12.0/sweetalert2.min.css" integrity="sha512-uE3H1RGE5HkSD6RqI8zbKiSCevsWKVi/74GXOSiu0+IcHO3pkLG+Ouzmn1sB6Be5Y6f+3fuIkGxsieEIUrgMTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.12.0/sweetalert2.min.js" integrity="sha512-iTSP2McqQzzin4TwBzVD2vGe2cKB9VxC6zouXB3J7enM/dblekPHIsJBMm0YGrZnyq1sTv/dGwo7oLY4nuRPGQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        </head>
        <body>
            <script>
           Swal.fire({
            title: "<strong>Existing User</strong>",
            icon: "info",
            html: `
                Its Seems you already made account using entered gmail. Try a different gmail or login your account
            `,
            showCloseButton: false, // Optionally show a close button
            showConfirmButton: false, // Hide the default "OK" button
            showCancelButton: false, // Hide the default cancel button
            footer: '<a href="includes/register.php">Move Back</a>'
            });
            </script>       
        </body>
        </html>                 
<?php                        
                    }else{
                        $user_register->insertion('registration',array('email'=>$email,'username'=>$username,'password'=>$hashedPassword));
                        // echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
                        // echo '<script>';
                        // echo 'document.addEventListener("DOMContentLoaded", function() {';
                        // echo '  Swal.fire({';
                        // echo '     icon: "success",';
                        // echo '    title: "Submitted Successfully",';
                        // echo '  });';
                        // echo '});';
                        // echo '</script>';
                        $RegisterMessage = "Registration successful! Welcome to our website. You will be redirected to the login page shortly.";

                        echo "<html><head>
    <meta charset='UTF-8'>
    <title>Redirecting...</title>
     <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css' integrity='sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==' crossorigin='anonymous' referrerpolicy='no-referrer' />
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .message-container {
            text-align: center;
            padding: 20px;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .message-container h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .message-container p {
            font-size: 18px;
            margin-bottom: 20px;
        }
       .fa-spinner {
            font-size: 40px;
            color: #007bff;
            animation: spin 2s linear infinite;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
    <script type='text/javascript'>
        function redirect() {
            window.location.href = 'includes/login.php';
        }
        setTimeout(redirect, 3000); // Redirect after 3 seconds
    </script>
  </head>
  <body>
    <div class='message-container'>
        <h1>Welcome!</h1>
        <p>$RegisterMessage</p>
         <i class='fa-solid fa-spinner'></i>
    </div>
  </body>
</html>";
                   exit(); // Ensure no further code is executed

                        // header("location:includes/login.php");
                    }
                    
                }else{
                    // echo "Password must contain atleast one lowercase letter,one uppercase letter and one digit and must by 8 character long";
?>
<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>SweetAlert2 Example</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.12.0/sweetalert2.min.css" integrity="sha512-uE3H1RGE5HkSD6RqI8zbKiSCevsWKVi/74GXOSiu0+IcHO3pkLG+Ouzmn1sB6Be5Y6f+3fuIkGxsieEIUrgMTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.12.0/sweetalert2.min.js" integrity="sha512-iTSP2McqQzzin4TwBzVD2vGe2cKB9VxC6zouXB3J7enM/dblekPHIsJBMm0YGrZnyq1sTv/dGwo7oLY4nuRPGQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        </head>
        <body>
            <script>
            Swal.fire({
            icon: "error",
            title: "Invalid Password",
            text: "Something went wrong with the password. It must contain at least one lowercase letter, one uppercase letter, and one digit, and must be 8 characters long",
            showCloseButton: false, // Optionally show a close button
            showConfirmButton: false, // Hide the default "OK" button
            showCancelButton: false, // Hide the default cancel button
            footer: '<a href="includes/register.php">Move Back</a>'
            });
            </script>       
        </body>
        </html>                 
<?php                     
                }
            } // targeted if ends here 
            else{
                // echo "Email not valid";

?>
<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>SweetAlert2 Example</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.12.0/sweetalert2.min.css" integrity="sha512-uE3H1RGE5HkSD6RqI8zbKiSCevsWKVi/74GXOSiu0+IcHO3pkLG+Ouzmn1sB6Be5Y6f+3fuIkGxsieEIUrgMTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.12.0/sweetalert2.min.js" integrity="sha512-iTSP2McqQzzin4TwBzVD2vGe2cKB9VxC6zouXB3J7enM/dblekPHIsJBMm0YGrZnyq1sTv/dGwo7oLY4nuRPGQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        </head>
        <body>
            <script>
            Swal.fire({
            icon: "error",
            title: "Invalid Email",
            text: "Email You Entered is not valid",
            showCloseButton: false, // Optionally show a close button
            showConfirmButton: false, // Hide the default "OK" button
            showCancelButton: false, // Hide the default cancel button
            footer: '<a href="includes/register.php">Move Back</a>'
            });
            </script>       
        </body>
        </html> 
<?php                 
            } // targeted if's else ends here 
// -----------------------------------------------
// here print the else's div 

}     // username checking bracket ends here 

// -----------------------------------------------

        }else{
            // echo "Username not accroding to the patern";
?>
<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>SweetAlert2 Example</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.12.0/sweetalert2.min.css" integrity="sha512-uE3H1RGE5HkSD6RqI8zbKiSCevsWKVi/74GXOSiu0+IcHO3pkLG+Ouzmn1sB6Be5Y6f+3fuIkGxsieEIUrgMTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.12.0/sweetalert2.min.js" integrity="sha512-iTSP2McqQzzin4TwBzVD2vGe2cKB9VxC6zouXB3J7enM/dblekPHIsJBMm0YGrZnyq1sTv/dGwo7oLY4nuRPGQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        </head>
        <body>
            <script>
            Swal.fire({
            icon: "error",
            title: "Invalid Username",
            text: "Entered Username is not Entered Correctly",
            showCloseButton: false, // Optionally show a close button
            showConfirmButton: false, // Hide the default "OK" button
            showCancelButton: false, // Hide the default cancel button
            footer: '<a href="includes/register.php">Move Back</a>'
            });
            </script>       
        </body>
        </html> 
<?php 
        }
    }

    $_SESSION['auth'] = false;
if(isset($_POST['loginSubmit'])) {
    $user_username = $_POST['username'];
    
    $user_password = $_POST['password'];
    
    $userLogin = new backend();
    $userLoginData = $userLogin->fetching('registration','*',null,"username = '$user_username'");
  
    if(!empty($userLoginData)){

    $userUsername = $userLoginData[0]['username'];
    $userPassword = $userLoginData[0]['password'];

    if(!empty($user_username) || !empty($user_password)){

    if($user_username === $userUsername){

    if(password_verify($user_password , $userPassword)){
        $_SESSION['auth'] = true;
        
        $_SESSION['role'] = $userLoginData[0]['role'];
        $_SESSION['login'] = $userLoginData[0]['username'];
        $_SESSION['id'] = $userLoginData[0]['registration_id'];

        if($_SESSION['role'] == 2){

            header("location: http://localhost/PHP-OOP/PROJECT/admin/index.php");

        }
        elseif($_SESSION['role'] == 1){
            header("location: http://localhost/PHP-OOP/PROJECT/instructor/dashboard/index.php");   
        }
        else{

            $LoginMessage = "Login successful! Welcome to our website. You will be redirected to the Home page shortly.";

            echo "<html><head>
            <meta charset='UTF-8'>
            <title>Redirecting...</title>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC'>
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css' integrity='sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==' crossorigin='anonymous' referrerpolicy='no-referrer' />
            <style>
            body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
            margin: 0;
            font-family: Arial, sans-serif;
            }
            .message-container {
            text-align: center;
            padding: 20px;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }
            .message-container h1 {
            font-size: 24px;
            margin-bottom: 10px;
            }
            .message-container p {
            font-size: 18px;
            margin-bottom: 20px;
            }
            .fa-spinner {
            font-size: 40px;
            color: #007bff;
            animation: spin 2s linear infinite;
            }
            @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
            }
            </style>
            <script type='text/javascript'>
            function redirect() {
            window.location.href = 'index.php';
            }
            setTimeout(redirect, 3000); // Redirect after 3 seconds
            </script>
            </head>
            <body>
            <div class='message-container'>
            <h1>Welcome!</h1>
            <p>$LoginMessage</p>
            <i class='fa-solid fa-spinner'></i>
            </div>
            </body>
            </html>";
       exit(); // Ensure no further code is executed

            // header("location: index.php");   
        }
        // echo "Login successfully";
        // header("location: ../../dashboard/index.php");
    }else{
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
        echo '<script>';
        echo 'document.addEventListener("DOMContentLoaded", function() {';
        echo '  Swal.fire({';
        echo '    icon: "error",';
        echo '    title: "Oops...",';
        echo '    html: "Something went wrong. Entered password is not entered correctly. <a href=\'includes/login.php\' style=\'color: #3085d6;\'>Click here</a> to retry.",'; // Added link
        echo '    showConfirmButton: false'; // Remove the OK button
        echo '  });';
        echo '});';
        echo '</script>';
        // header("location:includes/login.php");
    }
}else{

echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
echo '<script>';
echo 'document.addEventListener("DOMContentLoaded", function() {';
echo '  Swal.fire({';
echo '    icon: "error",';
echo '    title: "Oops...",';
echo '    html: "Something went wrong. Entered Username is not entered correctly. <a href=\'includes/login.php\' style=\'color: #3085d6;\'>Click here</a> to retry.",'; // Added link
echo '    showConfirmButton: false'; // Remove the OK button
echo '  });';
echo '});';
echo '</script>';

}

}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Warning</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
  body{
    background-color: #DDE1E3;
    padding-top:15%; 
  }
.warning-container{
  margin: 0 auto;
  height: 60px;
  width: 800px;
}
.warning-content{
  height:100%;
  width: 100%;
  display:flex;
  justify-content: space-around;
  align-items:center;
  padding: 25px 20px 25px 20px;
  border-radius:5px;
  background-color:white;
  overflow:hidden;
}
.warning-content > i{
  color: red;
  font-size: 88px;
  width: 12%;
  /* background-color:orange; */
  height:100; 
}
.warning-content > div{
  width: 70%;
  height: 100%;
  /* background-color: blue; */
}
.warning-content > div > p:nth-child(1){
  font-weight: bold;
  color: darkred;
  font-size: 22px;
  margin:0px;
}
.warning-content > div > p:nth-child(2){
  color: black;
  font-size: 15px;
}
.warning-content > section{
  width: 15;
  height: 100%;
  display: flex;
  justify-content:center;
  align-items:center;
}
.login_button{
  background-color:red;
  color:white;
  text-decoration:none;
  border-radius: 5px;
  padding: 5px 10px 5px 10px;
}
</style>
<body>
    <div class="warning-container">
        <div class="warning-content">

        <i class="fa-solid fa-triangle-exclamation"></i>
         
        <div>
        <p>Warning</p>
        <p>It Seems You leave the input field empty. Please fill out compelete form to procede</p>
        </div>

        <section>
          <a class="login_button" href="includes/login.php">
                <i class="fas fa-sign-in-alt"></i> Return Back
          </a>
        </section>

        </div>
    </div>
</body>
</html>

<?php     
}

}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Warning</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
  body{
    background-color: #DDE1E3;
    padding-top:15%; 
  }
.warning-container{
  margin: 0 auto;
  height: 60px;
  width: 800px;
}
.warning-content{
  height:100%;
  width: 100%;
  display:flex;
  justify-content: space-around;
  align-items:center;
  padding: 25px 20px 25px 20px;
  border-radius:5px;
  background-color:white;
  overflow:hidden;
}
.warning-content > i{
  color: red;
  font-size: 88px;
  width: 12%;
  /* background-color:orange; */
  height:100; 
}
.warning-content > div{
  width: 70%;
  height: 100%;
  /* background-color: blue; */
}
.warning-content > div > p:nth-child(1){
  font-weight: bold;
  color: darkred;
  font-size: 22px;
  margin:0px;
}
.warning-content > div > p:nth-child(2){
  color: black;
  font-size: 15px;
}
.warning-content > section{
  width: 15;
  height: 100%;
  display: flex;
  justify-content:center;
  align-items:center;
}
.login_button{
  background-color:red;
  color:white;
  text-decoration:none;
  border-radius: 5px;
  padding: 5px 10px 5px 10px;
}
</style>
<body>
    <div class="warning-container">
        <div class="warning-content">

        <i class="fa-solid fa-triangle-exclamation"></i>
         
        <div>
        <p>Warning</p>
        <p>It Seems You leave the input field empty. Please fill out compelete form to procede</p>
        </div>

        <section>
          <a class="login_button" href="includes/login.php">
                <i class="fas fa-sign-in-alt"></i> Return Back
          </a>
        </section>

        </div>
    </div>
</body>
</html>

<?php 
}

}
    

if(isset($_POST['profile_Submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $number = $_POST['number'];
    $website = $_POST['website'];
    $headline = $_POST['headline'];

    //for handling image
    $image = $_FILES['image'];
    $imgArray = imagehandling($image);
  
    $twitter = $_POST['twitter'];
    $facebook = $_POST['facebook'];
    $linkdin = $_POST['linkdin']; 
    $youtube = $_POST['youtube']; 
    $biography = $_POST['biography'];   
    $MoreInfo = $_POST['MoreInfo'];   
    $teachings = $_POST['teachings'];   
    // id that comes form registration table
    $instructor_data = new backend();

    
    if(isset($_SESSION['id'])){
        $new_id = $_SESSION['id'];
        // $mysql;

    $last_inserted_id = $instructor_data->insertion('instructor',array('fname'=>$fname,'lname'=>$lname,'headline'=>$headline,'number'=>$number,
    'instructor_img'=> $imgArray['imgPath'],'website'=>$website,
    'twitter'=>$twitter,'facebook'=>$facebook,'linkdin'=>$linkdin,
    'youtube'=>$youtube,'biography'=>$biography,'MoreInfo'=>$MoreInfo,'teachings'=>$teachings,
    'registration_id'=>$new_id));

    $student_data = $instructor_data->insertion('student',array(
        'sfname'=>$fname,'slname'=>$lname, 'phone'=>$number, 
        'student_img'=>$imgArray['imgPath'],'youtube'=>$youtube,'linkedin'=>$linkdin,
        'registration_id'=>$new_id
    ));

    if($last_inserted_id){
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
        echo '<script>';
        echo 'document.addEventListener("DOMContentLoaded", function() {';
        echo '  Swal.fire({';
        echo '     icon: "success",';
        echo '    title: "Submitted Successfully",';
        echo '  });';
        echo '});';
        echo '</script>';
        // $_SESSION['new_id'] = $collect_data[0]['instructor_id'];
        // $_SESSION['new_id'] = $collect_data[0]['instructor_id'];
        $_SESSION['fname'] = $fname;
        $_SESSION['lname'] = $lname;
        $_SESSION['biography'] = $biography; 
        $_SESSION['twitter'] = $twitter;
        $_SESSION['facebook'] = $facebook;
        $_SESSION['linkdin'] = $linkdin; 
        $_SESSION['youtube'] = $youtube;  
        $_SESSION['headline'] = $headline; 
        $_SESSION['imgPath'] = $imgArray['imgPath'];
        // $_SESSION['new_id'] = $collect_data[0]['instructor_id'];
        $last_inserted_id = $instructor_data->getLastInsertedId();
        $_SESSION['instructor_id'] = $last_inserted_id;
        $last_id = $_SESSION['instructor_id'];

        echo $_SESSION['instructor_id'];

        // $instructor_id = $instructor_data->fetching('instructor');
        // foreach($instructor_id as $id){
        //     $_SESSION['new_id'] = $id['instructor_id'];
        // }

        $message = "Thanks for making a profile. Your profile is under admin revision. After approval, you will be able to access the dashboard.";

        $messageSave = $instructor_data->insertion('notifications_for_admins',array(    
        'message'=>$message
    ));


        header("location: http://localhost/PHP-OOP/PROJECT/instructor/dashboard/file.php?ins_id=$last_id");

        // header("location: instructor/dashboard/profile.php");
        
    }
}
}


?>

