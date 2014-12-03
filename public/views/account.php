<?php
include "../classes/db_conn.php";
include "../classes/user_functions.php";
include ('includes/header.html');

venderViewPermission();
$cursor = getUserCursor($_SESSION["username"]);
$myInfo=getUserAccountInfo($cursor);
  ?>

	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8 pContent smallForms">
			<h2 class="sectionTitle">Contact Info</h2>
			<form action="." method="POST" class="form-horizontal" role="form" id="accountForm">
				<input type="hidden" name="action" value="editInfo">

				<div class="form-group">
	                <label class="col-xs-3" for="companyName">Company Name</label>
	                <input type="text" class="form-control input-sm" name="companyName"
	                	value="<?php echo $myInfo["company"] ?>">
	            </div>

	            <!--<div class="form-group">
	                <label class="col-xs-3" for="companyAddress">Company Address</label>
	                <input type="text" class="form-control input-sm" name="companyAddress"
	                value="<?//php echo $myInfo["companyAddr"] ?>">
	            </div>-->

	            <div class="form-group">
	                <label class="col-xs-3" for="companyCEO">Company CEO</label>
	                <input type="text" class="form-control" name="companyCEO"
	                value="<?php echo $myInfo["username"] ?>">
	            </div>

	            <div class="form-group">
	                <label class="col-xs-3" for="contactName">Contact Name</label>
	                <input type="text" class="form-control" name="contactName"
	                value="<?php echo $myInfo["contactName"] ?>">
	            </div>

	             <div class="form-group">
	                <label class="col-xs-3" for="contactNumber">Contact Number</label>
	                <input type="text" class="form-control" name="contactNumber"
	                value="<?php echo $myInfo["contactNum"] ?>">
	            </div>

	             <div class="form-group">
	                <label class="col-xs-3" for="contactEmail">Contact Email</label>
	                <input type="text" class="form-control" name="contactEmail"
	                value="<?php echo $myInfo["email"] ?>">
	            </div>


	             <div class="form-group">
	                <input type="submit" class="btn btn-default" id="myButton" value="save">
	            </div>

			</form>
		</div>
		<div class="col-md-2"></div>
	</div><!-- End of row -->
	<script type="text/javascript" src="http://persua.me/tracking.js?a=c4ca4238a0b923820dcc509a6f75849b&e=83dfaf0a5f94b944be961e5f1f881d7d"></script>


<?php include('includes/footer.html'); ?>