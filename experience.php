<!DOCTYPE html>
<html lang="en">
  <head>
	  <? include 'header.php'; ?>
  </head>
  <body>
	<? include 'navigation.php'; ?>	
	
	<div class="row">
	  <div class="col-sm-4" id="container_getstarted">
		  <h2>#3</h2>
		  <h3>Experience</h3>
		  <p>List your jobs and accomplishments</p>
		  <form id="form_begin" method="post" action="skills">
			  <div class="panel panel-primary">
				  <div class="panel-heading">1</div>
				  <div class="panel-body">
				    <div class="form-group">
				    <label for="Name1">Employer Name</label>
				    <input type="text" class="form-control" id="tbName1" name="EmployerName">
				    <label for="Degree1">Location</label>
				    <input type="text" class="form-control" id="tbLocation1" name="Location">
				    <label for="Address1">Job Title</label>
				    <input type="text" class="form-control" id="tbTitle1" name="JobTitle">
			  </div>
				  </div>
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