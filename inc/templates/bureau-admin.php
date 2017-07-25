<div class="wrap">
<h1>Bureau Theme Options</h1>
<?php settings_errors( ); ?>
<form class="" action="options.php" method="post">
    <?php settings_fields( 'bureau-settings-group' ); ?>
    <?php do_settings_sections( 'bureau_admin_menu_options' ); ?>
    <?php submit_button( ); ?>
</form>
</div>
