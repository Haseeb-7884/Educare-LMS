
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- SweatAlert CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.12.3/sweetalert2.min.css" integrity="sha512-WxRv0maH8aN6vNOcgNFlimjOhKp+CUqqNougXbz0E+D24gP5i+7W/gcc5tenxVmr28rH85XHF5eXehpV2TQhRg=="
   crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- FontAwsome CDN --> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
   crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Hello, world!</title>

  <style>
       .error_main_continer{
        height: 50px;
        width: 1120px;
        border: 2px solid darkred;
        border-radius: 5px;
    }
    .error_container_fluid{
        display: flex;
        justify-content: space-around;
        align-items: center;
        height: 100%;
        width: 100%;
    }
    .error_container_fluid > i{
        width: 6%;
        height: 100%;
        font-size: 35px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: darkred;
        font-weight: bold;
    }
    .error_container_fluid > section{
        width: 93%;
        height: 100%;

        color: darkred;
        font-weight: bold;
        padding: 10px 5px 5px 10px;
        font-size: 16.5px;
    }
  </style>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            // Attach an event handler to the "Generate Coupon" button
            $('#generate_coupon').on('click', function () {
                // Make an AJAX request to generate the coupon code
                $.ajax({
                    type: 'POST',
                    url: 'generate_coupon.php', // Replace with the actual PHP file handling coupon generation
                    success: function (data) {
                        // Update the coupon input field with the generated code
                        $('#coupon').val(data);
                    }
                });
            });
        });
    </script>
</head>

<body>

<?php
if(isset($_GET['sending'])){
  $sending = $_GET['sending'];
?>
 <div class="error_main_continer">
        <div class="error_container_fluid">
            <i class="fa-solid fa-triangle-exclamation"></i>
            <section>
            It seems that you have tried to submit form without entering mendatory entities. 
                    Please fill all the required information to proceed.    
            </section>
        </div>
    </div>
<?php
} else{
  echo null;
}
 
?>

  <div class="container mt-5" style="width:90%;">
    <div class="pe-3 pt-3 pb-3 mb-3">
      
      <form id="myForm" method="post" action="coupon_data.php">
      
      <div class="d-flex  align-items-center">
          <div>
             <label for="coupon" class="form-label fw-bold">Coupon Code <span class="text-danger fw-bold">*</span></label>
             <input type="text" required class="form-control mb-2 bg-light border border-1 border-secondary" style="width:500px" id="coupon" name="coupon"> 
          </div>
          <div class="mt-4 ms-4">
              <button type="button" class="btn btn-primary" id="generate_coupon">Generate Coupon</button>
          </div>
  
      </div>

      <div>
      <label for="exampleFormControlTextarea1" class="form-label fw-bold text-dark mt-3">Enter Discount <span class="text-danger fw-bold">*</span></label>
        <input type="number" required class="form-control mb-2 bg-light border border-1 border-secondary" style="width:500px" placeholder="Enter Coupon Discount Amout e.g 10%" name="coupon_percent"> 
    
      </div>

      <div>
      <label for="exampleFormControlTextarea1" class="form-label fw-bold text-dark mt-3">
        Select Course <span class="text-danger fw-bold">*</span>
      </label>
      <select class="form-select mb-5" id="selected_course" name="selected_course" style="width: 500px;">
      <option value="" required disbaled>Select from the following</option>
      <?php
      $user_id  = $_SESSION['id'];
      $get_courses = new backend();
      $get_data = $get_courses->fetching("instructor","*",null,"registration_id = $user_id");
      if($get_data){

      foreach($get_data as $ins_data){
         $instructor_id = $ins_data['instructor_id'];
        //  echo "Instructor_id".$instructor_id;
         $get_course_data = $get_courses->fetching("cource","*",null,"instructor_id = $instructor_id");
      foreach($get_course_data as $all_data){
         echo $all_data['course_title'];
         $course_type = $all_data['course_type'];
         if($course_type != 'Free'){
          ?>
          <option value="<?= $all_data['courses_id'] ?>"><?= $all_data['course_title'] ?></option>
          <?php    
         } // if condition ends here

      }
    }

            
  }else{
    echo "Nothing";
  }

      ?>

      </select>
    
      </div>
    


    </div>
    <div class="d-flex align-items-start mt-4">
      <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <button class="nav-link active mb-3" id="v-pills-general-tab" data-bs-toggle="pill" data-bs-target="#v-pills-general"
          type="button" role="tab" aria-controls="v-pills-general" aria-selected="true">General</button>
        
        <button class="nav-link  mb-5" id="v-pills-tools-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tools"
          type="button" role="tab" aria-controls="v-pills-tools" aria-selected="false">Usage Limits</button>

      </div>
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-general" role="tabpanel" aria-labelledby="v-pills-home-tab">
        

        <div class="mt-3 ms-4 d-flex justify-content-between align-items-center" style="width:400px">
          <p class="me-4 mt-3">Discount Type <span class="text-danger fw-bold">*</span></p>
          <div>
          <select class="form-select form-select-sm" name="cou_percentage" aria-label=".form-select-sm example">
            <option selected disabled>Select From the Following</option>
            <option required value="%">In Percentage - %</option>
          </select>
          </div>
        </div>
        
        <div class="mt-3 ms-4 d-flex justify-content-between align-items-center" style="width:405px">
          <p class="me-2 mt-3">Coupon Amount <span class="text-danger fw-bold">*</span></p>
          <div>
          <input type="text" class="form-control" required name="coupons_quantity" id="exampleFormControlInput1" placeholder="Enter No Of Coupons">
          </div>
        </div>

        <div class="mt-3 ms-4 d-flex justify-content-between align-items-center" style="width:405px">
          <p class="me-2 mt-3">Coupon Expiry date <span class="text-danger fw-bold">*</span></p>
          <div>
          <input type="date" name="coupon_expiry" required class="form-control" id="exampleFormControlInput1">
          </div>
        </div>

        </div>

        <div class="tab-pane fade" id="v-pills-tools" role="tabpanel" aria-labelledby="v-pills-messages-tab">
        
        <div class="mt-3 ms-4 d-flex justify-content-between align-items-center" style="width: 550px;">
          <p class=" me-4 mt-3">Usage Limit per Coupon</p>
          <div>
          <input type="text" class="form-control" name="coupons_usage_limit" style="width:300px;" id="exampleFormControlInput1" placeholder="Unlimited Usage">
          </div>
        </div>
        
        <div class="mt-3 ms-4 d-flex justify-content-between align-items-center" style="width: 550px;">
          <p class=" me-4 mt-3">Limit Usage to X Coupon</p>
          <div>
          <input type="text" class="form-control" style="width:300px;" readonly id="exampleFormControlInput1" value="1" placeholder="Applying to all qualifying limits in cart">
         <p style="font-size:13px;color:darkred;"> 
           To increase limit pLease contact Website Admin</p>  
        </div>
        </div>

        <div class="mt-3 ms-4 d-flex justify-content-between align-items-center" style="width: 550px;">
          <p class=" me-4 mt-3">Usage Limit per User</p>
          <div>
          <input type="number" class="form-control"  style="width:300px;" readonly id="exampleFormControlInput1" placeholder="Unlimited Usage" value="1">
          <p style="font-size:13px;color:darkred;"> 
           To increase limit pLease contact Website Admin</p>    
        </div>
        </div>

        </div>

      </div>
    </div>

      <!-- Submit button for the form -->
    <button type="button" class="btn btn-primary fw-bold" onclick="showSweetAlert()" name="submit_form">Submit Form</button>

    </form>
  </div>

<script>
function showSweetAlert() {
    Swal.fire({
        title: 'Submit Your Coupon',
        html: `Please note that if your coupon exceeds its expiry date, it will be deleted and you'll have to set it again. <b>Are You Agree?</b>`,
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, submit it!',
        cancelButtonText: 'No, I don’t agree'
    }).then((result) => {
        if (result.isConfirmed) {
            // Submit the form
            document.getElementById('myForm').submit();
        } else {
            console.log("Submission cancelled");
        }
    });
}
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.12.3/sweetalert2.min.js" integrity="sha512-xEhAaMBML+bAt3JgAHMq8PGEENIWZC7CT6dDdtdS8kwqFlkvy6qbKGluBYIBbrzLJHsNgqQKzy6L/l+WgniBag==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
    
</body>

</html>

  
