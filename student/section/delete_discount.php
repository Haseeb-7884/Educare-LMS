<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.12.3/sweetalert2.min.css" integrity="sha512-WxRv0maH8aN6vNOcgNFlimjOhKp+CUqqNougXbz0E+D24gP5i+7W/gcc5tenxVmr28rH85XHF5eXehpV2TQhRg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

<form id="myForm" method="post" action="submit_form.php">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <button type="button" onclick="showSweetAlert()">Submit</button>
</form>

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
        }
    });
}
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.12.3/sweetalert2.min.js" integrity="sha512-xEhAaMBML+bAt3JgAHMq8PGEENIWZC7CT6dDdtdS8kwqFlkvy6qbKGluBYIBbrzLJHsNgqQKzy6L/l+WgniBag==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>