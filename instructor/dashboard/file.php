<?php 
include("../../back.php");
$ins_id = $_GET['ins_id'];
// echo $ins_id;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .swal2-footer a {
            display: inline-block;
            padding: 10px 20px;
            color: #fff;
            background-color: #3085d6;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <script>
        Swal.fire({
            icon: "success",
            title: "Profile Completed",
            html: "<p>Your profile is under review.</p><p>After approval, you can manage your courses and access your dashboard.</p>",
            footer: '<a href="http://localhost/PHP-OOP/PROJECT/instructor/dashboard/profile.php">Preview Profile</a>',
            showConfirmButton: false
        });
    </script>
</body>
</html>
