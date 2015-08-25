<!DOCTYPE html>
<html lang="en">
  <head>
	  <? include 'header.php'; ?>
  </head>
  <body>
	<? include 'navigation.php'; ?>	
	
	<div class="row">
	  <div class="col-sm-4" id="container_getstarted">
		  <h2>Create a Resume</h2>
		  <br>
		  <p>So you need a resume? We're here to help you create an effective, modern resume.
		  <br><br>
		  <input type="button" name="Start" value="Start" onClick="parent.location='begin.php'" class="btn btn-primary">
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