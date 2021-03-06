<?php
/**
 * Child themes template
 */
?>
<div id="child_themes" class="appointment-tab-pane">

	<?php
		$current_theme = wp_get_theme();
	?>
<div class="container-fluid">
		<div class="row">	

	<div class="appointment-pane-center">

		<h1><?php esc_html_e( 'Install & Use Appointment Child Themes', 'appointment' ); ?></h1>

		<p><?php esc_html_e( 'Below you will find a selection of appointment child themes that will totally transform the look of your site.', 'appointment' ); ?></p>

	</div>

	<div class="col-md-4">
	<div class="appointment-tab-pane-half appointment-tab-pane-first-half">
		<!-- appointment Blue -->
		<div class="appointment-child-theme-container">
			<div class="appointment-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/functions/appointment-info/img/appointment-blue.png'; ?>" alt="<?php esc_html_e( 'appointment Blue Child Theme', 'appointment' ); ?>" />
				<div class="appointment-child-theme-description">
					<h2><?php esc_html_e( 'appointment Blue', 'appointment' ); ?></h2>
				</div>
			</div>
			<div class="appointment-child-theme-details">
				<?php if ( 'appointment-blue' != $current_theme['Name'] ) { ?>
					<div class="theme-details">
						<span class="theme-name">Appointment Blue</span>
						<span class="theme-btn">
						<a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-theme&theme=appointment-blue' ), 'install-theme_appointment-blue' ) ); ?>" class="button button-primary"><?php printf( __( 'Install %s now', 'appointment' ), '<span class="screen-reader-text">appointment-blue</span>' ); ?></a>
						<a class="button button-secondary" target="_blank" href="https://wp-themes.com/appointment-blue"><?php esc_html_e( 'Live Preview','appointment'); ?></a>
						</span>
						<div class="appointment-clear"></div>
					</div>
				<?php } else { ?>
					<div class="theme-details active">
						<span class="theme-name"><?php echo esc_html_e( 'appointment Blue - Current theme', 'appointment' ); ?></span>
						<a class="button button-secondary customize right" target="_blank" href="<?php echo get_site_url(). '/wp-admin/customize.php' ?>"><?php esc_html_e('Customize','appointment'); ?></a>
						<div class="appointment-clear"></div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	</div>
	<div class="col-md-4">
	<div class="appointment-tab-pane-half appointment-tab-pane-first-half">
		<!-- appointment Green -->
		<div class="appointment-child-theme-container">
			<div class="appointment-child-theme-image-container">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/functions/appointment-info/img/appointment-green.png'; ?>" alt="<?php esc_html_e( 'appointment Green Child Theme', 'appointment' ); ?>" />
				<div class="appointment-child-theme-description">
					<h2><?php esc_html_e( 'appointment Green', 'appointment' ); ?></h2>
				</div>
			</div>
			<div class="appointment-child-theme-details">
				<?php if ( 'appointment-green' != $current_theme['Name'] ) { ?>
					<div class="theme-details">
						<span class="theme-name">Appointment Green</span>
						<span class="theme-btn">
						<a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-theme&theme=appointment-green' ), 'install-theme_appointment-green' ) ); ?>" class="button button-primary"><?php printf( __( 'Install %s now', 'appointment' ), '<span class="screen-reader-text">appointment green</span>' ); ?></a>
						<a class="button button-secondary" target="_blank" href="https://wp-themes.com/appointment-green"><?php esc_html_e( 'Live Preview','appointment'); ?></a>
						</span>
						<div class="appointment-clear"></div>
					</div>
				<?php } else { ?>
					<div class="theme-details active">
						<span class="theme-name"><?php echo esc_html_e( 'appointment - Current theme', 'appointment' ); ?></span>
						<a class="button button-secondary customize right" target="_blank" href="<?php echo get_site_url(). '/wp-admin/customize.php' ?>"><?php esc_html_e('Customize','appointment'); ?></a>
						<div class="appointment-clear"></div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	</div>
	
	<div class="col-md-4">	
		<div class="appointment-tab-pane-half appointment-tab-pane-first-half">	
			<!-- Zifer Child -->
			<div class="appointment-child-theme-container">
				<div class="appointment-child-theme-image-container">
					<img src="<?php echo esc_url( get_template_directory_uri() ) . '/functions/appointment-info/img/appointment-red.png'; ?>" alt="<?php esc_html_e( 'appointment red Child Theme', 'appointment' ); ?>" />
					<div class="appointment-child-theme-description">
						<h2><?php esc_html_e( 'Appointment Red', 'appointment' ); ?></h2>
					</div>
				</div>
				<div class="appointment-child-theme-details">
					<?php if ( 'appointment red' != $current_theme['Name'] ) { ?>
						<div class="theme-details">
							<span class="theme-name">Appointment Red</span>
							<span class="theme-btn">
							<a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-theme&theme=appointment-red' ), 'install-theme_appointment-red' ) ); ?>" class="button button-primary"><?php printf( __( 'Install %s now', 'appointment' ), '<span class="screen-reader-text">appointment red</span>' ); ?></a>
							<a class="button button-secondary" target="_blank" href="https://wp-themes.com/appointment-red"><?php esc_html_e( 'Live Preview','appointment'); ?></a>
							</span>
							<div class="appointment-clear"></div>
						</div>
					<?php } else { ?>
						<div class="theme-details active">
							<span class="theme-name"><?php echo esc_html_e( 'appointment red - Current theme', 'appointment' ); ?></span>
							<a class="button button-secondary customize right" target="_blank" href="<?php echo get_site_url(). '/wp-admin/customize.php' ?>"><?php esc_html_e( 'Customize','appointment'); ?></a>
							<div class="appointment-clear"></div>
						</div>
					<?php } ?>
				</div>
			</div>
		 </div>
	 </div>
	 
	 <div class="col-md-4">	
		<div class="appointment-tab-pane-half appointment-tab-pane-first-half">	
			<!-- Zifer Child -->
			<div class="appointment-child-theme-container">
				<div class="appointment-child-theme-image-container">
					<img src="<?php echo esc_url( get_template_directory_uri() ) . '/functions/appointment-info/img/appointment-mandy.png'; ?>" alt="<?php esc_html_e( 'appointment red Child Theme', 'appointment' ); ?>" />
					<div class="appointment-child-theme-description">
						<h2><?php esc_html_e( 'Mandy', 'appointment' ); ?></h2>
					</div>
				</div>
				<div class="appointment-child-theme-details">
					<?php if ( 'mandy' != $current_theme['Name'] ) { ?>
						<div class="theme-details">
							<span class="theme-name">Mandy</span>
							<span class="theme-btn">
							<a href="<?php echo esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-theme&theme=mandy' ), 'install-theme_mandy' ) ); ?>" class="button button-primary"><?php printf( __( 'Install %s now', 'appointment' ), '<span class="screen-reader-text">Mandy</span>' ); ?></a>
							<a class="button button-secondary" target="_blank" href="https://wp-themes.com/mandy"><?php esc_html_e( 'Live Preview','appointment'); ?></a>
							</span>
							<div class="appointment-clear"></div>
						</div>
					<?php } else { ?>
						<div class="theme-details active">
							<span class="theme-name"><?php echo esc_html_e( 'appointment red - Current theme', 'appointment' ); ?></span>
							<a class="button button-secondary customize right" target="_blank" href="<?php echo get_site_url(). '/wp-admin/customize.php' ?>"><?php esc_html_e( 'Customize','appointment'); ?></a>
							<div class="appointment-clear"></div>
						</div>
					<?php } ?>
				</div>
			</div>
		 </div>
	 </div>
	 
	 
	 
	 
	</div>
</div>	
	</div>