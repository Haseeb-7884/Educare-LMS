<?php 
$courses_id = $_GET['courses_id'];
echo $courses_id;
?>

<form action="cart_data.php" style="display:inline-block;" method='post' enctype='multipart/form-data'>
<input type="hidden" name="courses_id" value="<?= $courses_id ?>">
<input type="submit" name="cartCourse" class="btn btn-primary cart_btn btn-lg me-1" value="Add to Cart"> 
</form>	

<?php header("location: show.php?courses_id = $courses_id") ?>