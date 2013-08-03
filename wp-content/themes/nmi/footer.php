		<?php if (!is_front_page()): ?>
		<div class="rCol">
			<?php the_secondary_content(); ?>
		</div>
		<?php endif; ?>
		<div class="row">
			<div class="" id="footer">
				<?php the_secondary_content('Site Footer', 4); ?>
			</div>
		</div>
	</div>
<div id="contactModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
<h3 id="myModalLabel">Contact</h3>
</div>
<div class="modal-body">
<form method="post" id="contactForm" class="contactForm">
<input type="hidden" name="type" value="sales" >
<input type="hidden" id="jsval" name="jsval" />
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
<label class="checkbox"><input type="checkbox" name="marketing" value="yes" /> Send Marketing Materials</label>
<div class="span3">
<p>Project type  </p>
<label class="checkbox"><input type="checkbox" name="ptype[]" value="new" /> new    </label>
<label class="checkbox"><input type="checkbox" name="ptype[]" value="fabrication" /> fabrication    </label>
<label class="checkbox"><input type="checkbox" name="ptype[]" value="installation" /> installation    </label>
<label class="checkbox"><input type="checkbox" name="ptype[]" value="turnkey" /> turnkey </label>
<label class="checkbox"><input type="checkbox" name="ptype[]" value="process improvement"/> process improvement</label>
<label class="checkbox"><input type="checkbox" name="ptype[]" value="relocation"/> relocation</label>
<label class="checkbox"><input type="checkbox" name="ptype[]" value="repair"/> repair</label>
<label class="checkbox"><input type="checkbox" name="ptype[]" value="rebuild"/> rebuild</label>
<label class="checkbox"><input type="checkbox" name="ptype[]" value="other" /> other </label><input type="text" name="other" placeholder="If other, please specify"/>

</div>
<div class="span3">

<p>Urgency</p>
<label><input type="radio" name="urgency" value="now" /> now</label>
<label><input type="radio" name="urgency" value="within 90 days" /> within 90 days</label>
<label><input type="radio" name="urgency" value="within 6 months" /> within 6 months</label>
<label><input type="radio" name="urgency" value="future" /> future</label>

</div>
<div class="span5">
<label>Message</label><textarea name="message"></textarea>
<input type="submit" class="doSubmit hide"/>
</div>
</form>

</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button class="btn btn-primary submit">Send</button>
</div>
</div>


<div id="careerModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
<h3 id="myModalLabel">Careers</h3>
</div>
<div class="modal-body">
<form method="post" id="careerForm" class="contactForm">
<input type="hidden" name="type" value="career" >
<input type="hidden" id="jsval" name="jsval" />
<label class="hide" for="first">*First Name:</label><input type="text" name="first" id="c-first" placeholder="*First Name" required />
<label class="hide" for="last">*Last Name:</label><input type="text" name="last" id="c-last" placeholder="*Last Name" required />
<label class="hide" for="phone">*Phone:</label><input type="text" name="phone" id="c-phone" placeholder="*Phone" required />
<label class="hide" for="address">Address:</label><input type="text" name="address" id="c-address" placeholder="Address" />
<label class="hide" for="address2">Address 2:</label><input type="text" name="address2" id="c-address2" placeholder="Address 2" />
<label class="hide" for="city">City:</label><input type="text" name="city" id="c-city" placeholder="City" />
<label class="hide" for="state">State:</label><input type="text" name="state" id="c-state" placeholder="State" class="input-mini" />
<label class="hide" for="zip">ZIP:</label><input type="text" name="zip" id="c-zip" placeholder="Zip" class="input-mini" />
<label class="hide" for="email">*Email:</label><input type="email" name="email" id="c-email" placeholder="*Email" required />
<div class="span3">
<p>What industries are you interested in?</p>
<label class="checkbox"><input type="checkbox" name="industry[]" value="food+beverage" />food+beverage</label>
<label class="checkbox"><input type="checkbox" name="industry[]" value="wine+brewery+distillery" />winery+brewery+distillery</label>
<label class="checkbox"><input type="checkbox" name="industry[]" value="aggregate+mining" />aggregate+mining</label>
<label class="checkbox"><input type="checkbox" name="industry[]" value="energy+refinery" />energy+refinery</label>
<label class="checkbox"><input type="checkbox" name="industry[]" value="custom fabrication" />custom fabrication</label>
<label class="checkbox"><input type="checkbox" name="industry[]" value="railroad" />railroad</label>

</div>

<div class="span5">
<label>Message</label><textarea name="message"></textarea>
<input type="submit" class="doSubmit hide"/>
</div>
</form>

</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button class="btn btn-primary submit">Send</button>
</div>
</div>


	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script> <?php //reverted to jquery 1.8.0 to work with cycle.all  ?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.prettyPhoto.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cycle.all.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/nmi.js"></script>
</body>
</html>


			
			<?php /*
			<footer role="contentinfo">
			
					<p class="attribution">&copy; <?php bloginfo('name'); ?></p>
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>
*/?>
