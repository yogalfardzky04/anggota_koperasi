<?php $message_alert = Session::get('message'); if($message_alert['type']==='success'):?>

<div class="alert alert-block alert-success">
	<button type="button" class="close" data-dismiss="alert">
		<i class="ace-icon fa fa-times"></i>
	</button>
	<img src="<?php echo url('/'); ?>/img/ic/success.png" width="32" heigth="32"/>
	<?php echo $message_alert['msg'];?>
</div>

<?php elseif($message_alert['type']==='error'):?>

<div class="alert alert-block alert-danger">
	<button type="button" class="close" data-dismiss="alert">
		<i class="ace-icon fa fa-times"></i>
	</button>
	<img src="<?php echo url('/'); ?>/img/ic/error.png" width="32" heigth="32"/>
	<?php echo $message_alert['msg'];?>
</div>

<?php endif;?>