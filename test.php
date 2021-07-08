<?php
	
	if(isset($_SESSION['msg']))
	{
	?>
	<div class="alert alert-danger fade in">
	    <a href="#" class="close" data-dismiss="alert">&times;</a>
	    <strong>Error!</strong> <?php echo $_SESSION['msg']; ?>
	</div>
	<?php
	}
	unset($_SESSION['msg']);
?>