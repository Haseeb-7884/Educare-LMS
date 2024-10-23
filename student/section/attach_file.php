<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body{
            background-color: #DDE1E3;
            padding-top:15%;
          }
        .warning-container{
          margin: 0 auto;
          height: 85px;
          width: 800px;
          font-family: sans-serif;
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
          color:#C7CE26;
          font-size: 88px;
          width: 12%;
          height:100; 
        }
        .warning-content > div{
          width: 70%;
          height: 100%;
        }
        .warning-content > div > p:nth-child(1){
          font-weight: bold;
          color: #8D7A14;
          font-size: 22px;
          margin:0px;
        }
        .warning-content > div > p:nth-child(2){
          color: black;
          font-size: 16px;
          margin-top: 6px;
        }
        .warning-content > section{
          width: 15;
          height: 100%;
          display: flex;
          justify-content:center;
          align-items:center;
        }
        .login_button{
          background-color:#C7CE26;
          color:white;
          text-decoration:none;
          border-radius: 5px;
          padding: 8px 8px 8px 8px;
        }
        .login_button:hover{
          color: white;
          background-color:#8D7A14;
        }
            </style>
</head>
<body>
    
        <div class="warning-container">
                <div class="warning-content">
                <i class="fa-solid fa-triangle-exclamation"></i>      
                <div>
                <p>Alert</p>
                <p>
                It Seems like you already enrolled in this course. 
                You are not allowed to Enroll in the same course again.
                Plz Visit your Dashboard to Continue Learning
                </p>
                </div>
                <section>
                  <a class="login_button" href="../index.php">
                        Back to Courses
                  </a>
                </section>
        
                </div>
            </div>

</body>
</html>