<h1><?php echo lang('patient_dashboard_heading');?></h1>
<p><?php echo lang('patient_dashboard_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>
<h1> Welcome <?php echo '<pre>'; print_r($user); ?></h1>
<p><?php echo anchor('auth/logout', lang('logout_link'))?> </p>
