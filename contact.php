<?php
include("header.html");
?>
 <div class="container">
      
    	<div class="row my-4">
			<div class="col-sm-6">
				<div class="panel panel-default" style="margin-top:15px;">
					<div class="panel-heading">
						<h2 class="panel-title bold"><span class="glyphicon glyphicon-envelope"></span> Send Us a Message</h2>
					</div>
					<div class="panel-body">
						<form class="contactform" name="contactform"  onsubmit="return validate('contactform');" action="sendcontactus.php" method="post">
							<div class="col-sm-6">
								<label for="name" class="control-label req bold">Your Name</label>
								<input class="form-control input-sm val textval" type="text" name="name" id="name" placeholder="Your Name" required>
							</div>
							<div class="col-sm-6">
								<label for="phone" class="control-label req bold">Contact Number</label>
								<input class="form-control input-sm val pval" type="text" name="phone" id="phone" placeholder="Contact Number" required>
							</div>
							<div class="col-sm-6">
								<label for="email" class="control-label req bold">Your Email</label>
								<input class="form-control input-sm val eval" type="email" name="email" id="email" placeholder="you@example.com" required>
							</div>
							<div class="col-sm-6">
								<label for="subject" class="control-label req bold">Subject</label>
								<input class="form-control input-sm val" type="text" name="subject" id="subject" placeholder="Subject" required>
							</div>
							<div class="col-sm-12">
								<label for="remarks" class="control-label req bold">Remarks</label>
								<textarea class="form-control input-sm val" rows="5" style="resize:vertical;max-height:250px;" name="remarks" id="remarks" placeholder="Your Query/Feedback remarks."></textarea required >
							</div>
							
						
							<div class="col-sm-4">
								<div class='form-group form-group-sm'>
								</div>
							</div>
							
							<div class="col-sm-12">
								<div class='form-group form-group-sm'>
									<span>
											<button class="btn btn-sm btn-success" type="submit">
												Send Now
											</button>
											<button class="btn btn-sm btn-danger" type="reset">
												Clear
											</button> 
									</span>
								</div>
							</div>
							<div style="clear:both;padding:10px;"></div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-6 ">
				<div class="panel panel-default" style="margin-top:15px;">
					
					<div class="panel-body">
					
						
						<p class="text-dark">
							<span class="glyphicon glyphicon-map-marker"></span><b>Maharaja Agrasen Institute of Management and Technology,<br>
Near Agrasen Chowk, Old Saharanpur Road,<br>
(Adjacent to Sector-15, HUDA) <br>
Jagadhri-135003.
						</p>
						
						<p style="font-size:95%;" class="text-dark">
							Director: 	director@maimt.com<br>
HR Department: hr@maimt.com<br>
Placement Cell: placement@maimt.com<br>
MBA Department: hodmgt@maimt.com<br>
MCA Department: hodca@maimt.com<br>
Librarian: library@maimt.com.
							</p>
						
						<p class="text-dark">
							<span class="glyphicon glyphicon-phone" style="margin-right: 7px;"></span><b>HELPLINE </b>
						<p class="text-dark">
							01732-235255<br>
							01732-231362
						</p>
						</p>
									</div>
</div>
			</div>
			</div>
			
				</div>
			
   
    			
    <?php
include("footer.html");
?>
  
