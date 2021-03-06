<?php
	
	$email_required = get_option('booked_require_guest_email_address',false);
	$name_requirements = get_option('booked_registration_name_requirements',array('require_name'));
	$name_requirements = ( isset($name_requirements[0]) ? $name_requirements[0] : false );
	
?>

<div class="field">
	<label class="field-label"><?php esc_html_e("Your Information:",'wyzi-business-finder'); ?><i class="required-asterisk booked-icon booked-icon-required"></i></label>
	<p class="field-small-p"><?php
		echo ( $email_required ? ( $name_requirements == 'require_surname' ? esc_html__('Please enter your first name, last name and email address:','wyzi-business-finder') : esc_html__('Please enter your name and email address:','wyzi-business-finder') ) : ( isset($name_requirements[0]) && $name_requirements[0] == 'require_surname' ? esc_html__('Please enter your first and last name:','wyzi-business-finder') : esc_html__('Please enter your name:','wyzi-business-finder') ) );
	?></p>
</div>

<?php if ( $name_requirements == 'require_surname' ): ?>
	<div class="field">
		<input value="" placeholder="<?php esc_html_e('First Name','wyzi-business-finder'); ?>..." type="text" class="textfield" name="guest_name" />
		<input value="" placeholder="<?php esc_html_e('Last Name','wyzi-business-finder'); ?>..." type="text" class="textfield" name="guest_surname" />
	</div>
<?php else: ?>
	<div class="field">
		<?php if ( $email_required ): ?>
			<input value="" placeholder="<?php esc_html_e('Name','wyzi-business-finder'); ?>..." type="text" class="textfield" name="guest_name" />
			<input value="" placeholder="<?php esc_html_e('Email Address','wyzi-business-finder'); ?>..." type="email" class="textfield" name="guest_email" />
		<?php else: ?>
			<input value="" placeholder="<?php esc_html_e('Name','wyzi-business-finder'); ?>..." type="text" class="large textfield" name="guest_name" />
		<?php endif; ?>
	</div>
<?php endif; ?>

<?php if ( $email_required && $name_requirements == 'require_surname' ): ?>
	<div class="field">
		<input value="" placeholder="<?php esc_html_e('Email Address','wyzi-business-finder'); ?>..." type="email" class="large textfield" name="guest_email" />
	</div>
<?php endif; ?>