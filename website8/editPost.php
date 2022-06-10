<?php
	require('config/config.php');
	require('config/DB.php');

	//Check For Submit
	if (isset($_POST['submit'])) {
		//Get form data
		$update_id=mysqli_real_escape_string($conn, $_POST['update_id']);
		$title= mysqli_real_escape_string($conn, $_POST['title']);
		$body= mysqli_real_escape_string($conn, $_POST['body']);
		$author= mysqli_real_escape_string($conn,$_POST['author']);

		$query= "UPDATE post SET
					title='$title',
					author='$author',
					body='$body'
						WHERE Id={$update_id}";

		if (mysqli_query($conn, $query)) {
			header('Location: '.ROOT_URL.'');
		}else{
			echo 'ERROR: '.mysqli_error($conn);
		}
		
	}


	//get ID
	$id=mysqli_real_escape_string($conn, $_GET['Id']);

	#Create Query
	$query= 'SELECT * FROM post WHERE Id= '.$id;

	//Get Result
	$result= mysqli_query($conn, $query);


	#Fetch data
	$post=mysqli_fetch_assoc($result);
	//var_dump($posts);
	

	#Free Result
	mysqli_free_result($result);

	#close Connection
	mysqli_close($conn);
?>


	<?php include('inc/header.php');?>
		<div class="container">
			<h1>Edit Post</h1>
			<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
				<div class="form-group">
					<label>Title</label>
					<input type="text" name="title" class="form-control" value="<?php echo $post['title'];?>">	
				</div>

				<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
				<div class="form-group">
					<label>Author</label>
					<input type="text" name="author" class="form-control" value="<?php echo $post['author'];?>">	
				</div>
				<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
				<div class="form-group">
					<label>Body</label>
					<textarea name="body" class="form-control"><?php echo $post['body'];?></textarea>	
				</div>
				<input type="hidden" name="update_id" value="<?php echo $post['Id'];?>">
				<input type="submit" name="submit" value="Submit" class="btn btn-primary">
			</form> 
		</div>
	<?php include('inc/footer.php'); 
 