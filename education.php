<!DOCTYPE html>
<html lang="en">
  <head>
	  <? include 'header.php'; ?>
  </head>
  <body>
	<? include 'navigation.php'; ?>	
	
	<div class="row">
	  <div class="col-sm-4" id="container_getstarted">
		  <h2>#2</h2>
		  <h3>Education</h3>
		  <p>List your education and academic achievements</p>
		  <form id="form_begin" method="post" action="experience">
			  <div class="panel panel-primary">
				  <div class="panel-heading">1</div>
				  <div class="panel-body">
				    <div class="form-group">
				    <label for="Name1">Institution Name</label>
				    <input type="text" class="form-control" id="tbName1" name="Name1">
				    <label for="Degree1">Location</label>
				    <input type="text" class="form-control" id="tbDegree1" name="Degree1">
				    <label for="Address1">Degree</label>
				    <input type="text" class="form-control" id="tbDegree1" name="Degree1">
			  		</div>
				  </div>
			  </div>
			  <a href="#"><b>+</b> Add New Education</a><br><br>
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