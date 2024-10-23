<?php 
echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>';
echo '<script>';
echo 'Swal.fire({';
echo '  title: "<strong>HTML <u>example</u></strong>",';
echo '  icon: "info",';
echo '  html: `';
echo '    You can use <b>bold text</b>,';
echo '    <a href="#">links</a>,';
echo '    and other HTML tags';
echo '  `,';
echo '  showCloseButton: true,';
echo '  showCancelButton: true,';
echo '  focusConfirm: false,';
echo '  confirmButtonText: `<a href="http://localhost/PHP-OOP/PROJECT/instructor/dashboard/edit_profile.php" class="btn btn-success"><i class="fa fa-thumbs-up"></i>Complete Profile first</a>`,';
echo '  confirmButtonAriaLabel: "Thumbs up, great!",';
echo '  cancelButtonText: `<a href="http://localhost/PHP-OOP/PROJECT/index.php" class="btn btn-danger"><i class="fa fa-thumbs-down"></i>Back to website</a>`,';
echo '  cancelButtonAriaLabel: "Thumbs down"';
echo '});';
echo '</script>';
?>