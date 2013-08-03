		<div class="row">
			<div class="" id="footer">
				<p>8503 Weyland Ave., Sacramento, CA 95828 | 916.635.7030 | <a href="mailto:email@email" target="_blank">email</a> <br />
				&copy; Copyright 2013, NMI Industrial Holdings, Inc. All rights reserved.</p>
				
			</div>
		</div>
	</div>
<div id="contactModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
<h3 id="myModalLabel">Contact</h3>
</div>
<div class="modal-body">
<form method="post" id="contactForm">
<input type="hidden" id="jsval" />
<label for="company" class="hide">*Company Name: </label><input type="text" name="company" id="company" placeholder="*Company Name" required style="width:430px" />
<br />
<label class="hide" for="first">*First Name:</label><input type="text" name="first" id="first" placeholder="*First Name" required />
<label class="hide" for="last">*Last Name:</label><input type="text" name="last" id="last" placeholder="*Last Name" required />
<label class="hide" for="job">Job Title:</label><input type="text" name="job" id="job" placeholder="Job Title" />
<label class="hide" for="phone">*Phone:</label><input type="text" name="phone" id="phone" placeholder="*Phone" required />
<label class="hide" for="address">Address:</label><input type="text" name="address" id="address" placeholder="Address" />
<label class="hide" for="address2">Address 2:</label><input type="text" name="address2" id="address2" placeholder="Address 2" />
<label class="hide" for="city">City:</label><input type="text" name="city" id="city" placeholder="City" />
<label class="hide" for="state">State:</label><input type="text" name="state" id="state" placeholder="State" class="input-mini" />
<label class="hide" for="zip">ZIP:</label><input type="text" name="zip" id="zip" placeholder="Zip" class="input-mini" />
<label class="hide" for="email">*Email:</label><input type="email" name="email" id="email" placeholder="*Email" required />
<label class="checkbox"><input type="checkbox" name="marketing" /> Send Marketing Materials</label>
<div class="span3">
<p>Project type  </p>
<label class="checkbox"><input type="checkbox" /> new    </label>
<label class="checkbox"><input type="checkbox" /> fabrication    </label>
<label class="checkbox"><input type="checkbox" /> installation    </label>
<label class="checkbox"><input type="checkbox" /> turnkey </label>
<label class="checkbox"><input type="checkbox" /> process improvement</label>
<label class="checkbox"><input type="checkbox" /> relocation</label>
<label class="checkbox"><input type="checkbox" /> repair</label>
<label class="checkbox"><input type="checkbox" /> rebuild</label>
<label class="checkbox"><input type="checkbox" /> other </label><input type="text" name="other" placeholder="If other, please specify"/>

</div>
<div class="span3">

<p>Urgency</p>
<label><input type="radio" name="urgency" /> now</label>
<label><input type="radio" name="urgency" /> within 90 days</label>
<label><input type="radio" name="urgency" /> within 6 months</label>
<label><input type="radio" name="urgency" /> future</label>

</div>
<div class="span5">
<label>Message</label><textarea name="message"></textarea>
<input type="submit" id="doSubmit" class="hide"/>
</div>
</form>

</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button class="btn btn-primary" id="submit">Send</button>
</div>
</div>


<div id="careerModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
<h3 id="myModalLabel">Careers</h3>
</div>
<div class="modal-body">
<form method="post" id="careerForm">
<input type="hidden" id="jsval" />
<label class="hide" for="first">*First Name:</label><input type="text" name="first" id="first" placeholder="*First Name" required />
<label class="hide" for="last">*Last Name:</label><input type="text" name="last" id="last" placeholder="*Last Name" required />
<label class="hide" for="phone">*Phone:</label><input type="text" name="phone" id="phone" placeholder="*Phone" required />
<label class="hide" for="address">Address:</label><input type="text" name="address" id="address" placeholder="Address" />
<label class="hide" for="address2">Address 2:</label><input type="text" name="address2" id="address2" placeholder="Address 2" />
<label class="hide" for="city">City:</label><input type="text" name="city" id="city" placeholder="City" />
<label class="hide" for="state">State:</label><input type="text" name="state" id="state" placeholder="State" class="input-mini" />
<label class="hide" for="zip">ZIP:</label><input type="text" name="zip" id="zip" placeholder="Zip" class="input-mini" />
<label class="hide" for="email">*Email:</label><input type="email" name="email" id="email" placeholder="*Email" required />
<div class="span3">
<p>What industries are you interested in?</p>
<label class="checkbox"><input type="checkbox" /> food+beverage    </label>
<label class="checkbox"><input type="checkbox" /> winery+brewery+distillery  </label>
<label class="checkbox"><input type="checkbox" /> aggregate+mining    </label>
<label class="checkbox"><input type="checkbox" /> energy+refinery </label>
<label class="checkbox"><input type="checkbox" /> custom fabrication</label>
<label class="checkbox"><input type="checkbox" /> railroad </label>

</div>

<div class="span5">
<label>Message</label><textarea name="message"></textarea>
<input type="submit" id="doSubmit" class="hide"/>
</div>
</form>

</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button class="btn btn-primary" id="submit">Send</button>
</div>
</div>


	<script src="<?php echo $dir?>js/jquery.js"></script> <?php //reverted to jquery 1.8.0 to work with cycle.all  ?>
	<script src="<?php echo $dir?>js/bootstrap.min.js"></script>
	<script src="<?php echo $dir?>js/jquery.prettyPhoto.js"></script>
	<script src="<?php echo $dir?>js/jquery.cycle.all.js"></script>
	<script src="<?php echo $dir?>js/nmi.js"></script>
</body>
</html>


