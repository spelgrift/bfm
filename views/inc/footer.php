<?php
if(Session::get('loggedIn') == true) {
	$loginHtml = "<a href='" . URL . "login/logout/'>Logout</a>";
} else {
	$loginHtml = "<a id='login' href='" . URL . "login'>Login</a>";
}

?>

</div> <!-- End main container div -->

<footer class='text-center'>
	<div class='container'>
		<div class='row'>
			<div class="col-lg-12">
				&copy; Footer | <?php echo $loginHtml; ?>
			</div>
		</div>
	</div>
</footer>