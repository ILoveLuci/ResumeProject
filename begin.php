<!DOCTYPE html>
<html lang="en">
  <head>
	  <? include 'header.php'; ?>
  </head>
  <body>
	<? include 'navigation.php'; ?>	
	
	<div class="row">
	  <div class="col-sm-4" id="container_getstarted">
		  <h2>Get Started</h2>
		  <form id="form_begin" method="post" action="initialize.php">
			  <table>
				  <tr>
					  <div class="form-group" id="FNameGroup">
					  	<td><label for="exampleInputEmail1">First Name</label></td>
					  </div>
					  <div class="form-group" id="LNameGroup">
					  	<td><label for="exampleInputEmail1">Last Name</label></td>
					  </div>
				  </tr>
				  <tr>
					  <td><input type="text" class="form-control" id="tbFirstName" name="FirstName"></td>
					  <td><input type="text" class="form-control" id="tbLastName" name="LastName"></td>
				  </tr>
			  </table>
			  <div class="form-group" id="EmailGroup">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" name="Email" placeholder="Enter email" onchange="testing()">
			  </div>
			  <div class="form-group" id="EmailGroup">
			    <label for="exampleInputEmail1">Phone Number</label>
			    <input class="form-control" id="exampleInputPhone1" name="Phone" type="tel" placeholder="Enter phone number" onchange="testing()">
			  </div>
			  <div class="checkbox">
			    <label>
			      <input type="checkbox" name="TermsAgreement"> I agree to the <a href="#">Terms of Use</a>.
			    </label>
			  </div>
			  <input type="submit" name="Submit" Value="Submit" class="btn btn-primary">
		  </form>
		  
	  </div>
	  <div class="col-sm-8">
		<blockquote class="pull-right">
			<p>Insert photo of resume here</p>
		</blockquote></div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>