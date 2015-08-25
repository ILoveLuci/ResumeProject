<!DOCTYPE html>
<html lang="en">
  <head>
	  <? include 'header.php'; ?>
  </head>
  <body>
	<? include 'navigation.php'; ?>	
	
	<div class="row">
	  <div class="col-sm-4" id="container_getstarted">
		  <h2>#1</h2>
		  <h3>Contact Card</h3>
		  <p>This is what employers will see at the top of your resume</p>
		  <form id="form_begin" method="post" action="exec_contact.php">
			  <div class="form-group">
				  <label for="Address1">Name</label>
				  <input type="text" class="form-control" id="tbName1" name="Name1">
				  <label for="Address1">Address</label>
				  <input type="text" class="form-control" id="tbAddress1" name="Address1">
				  <label for="Address1">Address Line 2</label>
				  <input type="text" class="form-control" id="tbAddress2" name="Address2">
				  <label for="Address1">Phone</label>
				  <input type="tel" class="form-control" id="tbPhone" name="Phone" maxlength="10">
				  <label for="exampleInputEmail1">Email</label>
			      <input type="email" class="form-control" id="exampleInputEmail1" name="Email">
			  </div>
			  <input type="submit" name="Submit" Value="Next" class="btn btn-primary">
		  </form>
	  </div>
	  <div class="col-sm-8">
		<blockquote class="pull-right">
			<p>Resume Preview Here</p>
		</blockquote></div>
	</div>
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>