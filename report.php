<?php
include '/includes/header.php';
?>


<div class="container-fluid">
    			<div class="row">
        			<div class="col-3 mx-auto">
			            <div class="nauk-info-connections text-center">

			<form method="post" action="report.php">
			Name:<input type="text" name="name" required> </br>
			Email:<input type="text" name="email" required> </br>



			<div class="dropdown">
				<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">type of issue
    				<span class="caret"></span></button>

			<div class="dropdown menu">	
			<ul class="dropdown-menu" role="menu">
				<li class="dropdown-item">link not working</li>
				<li class="dropdown-item">Page not found</li>
				<li class="dropdown-item">Incorrect Script</li>
      				</ul>
			</div>
			</div>

			</br>
			Message:<textarea name="message" required></textarea>
		</div>
		</div>
		</div>
			
    			<div class="row">
        			<div class="col-3 mx-auto">
					<div class="nauk-info-connections text-center">
					<button type="submit" class="btn btn-primary">Submit</button>
					<button type="reset" class="btn btn-primary">Reset</button>
					<button type="clear" class="btn btn-primary">Clear</button>
	</div>
</div>
	</div>
</form>
	</div>

<?php
include '/includes/footer.php';
?>
