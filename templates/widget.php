<?php
	$modid = $this->base_id.'_'.$this->number;
?>

<div class="skype-status-widget">

<?php
	if ($text != '') {
		echo '<div class="text-before">'.nl2br(htmlspecialchars($text)).'</div>';
	}
?>

<a id="skypeStatus_<?php echo $modid ?>" class="skype-status" href="skype:<?php echo $username ?>?<?php echo $command ?>"></a>

<?php
	if ($text_after != '') {
		echo '<div class="text-after">'.nl2br(htmlspecialchars($text_after)).'</div>';
	}
?>

<script type="text/javascript">
var widget_<?php echo $modid ?> = (function widget_<?php echo $modid ?>() {	// widget namespace
	// to wait till ajax call end before querying new status
	var wait = false;
	
	// avoid showing loading animation every page change
	var savedStatus = jQuery.cookie('skype_status_<?php echo $modid ?>');
	showStatus(savedStatus);

	getStatus();
	
	<?php if ($interval > 0) {	// refresh intereval ?>
		setInterval(getStatus, <?php echo $interval * 1000 /* seconds to milliseconds */ ?>);
	<?php } ?>
	
	function getStatus() {
		if (wait) return;	// wait last ajax call
		
		wait = true;
		//console.log("<?php echo $modid ?>: <?php echo $username ?>");
		jQuery.get('<?php echo admin_url('admin-ajax.php') ?>', {action: 'skype_status_ajax', username: '<?php echo $username ?>'}, function(status) {
			showStatus(status);
			// expire in 15 minutes
			/*var date = new Date();
			date.setTime(date.getTime() + (15 * 60 * 1000));*/
			jQuery.cookie('skype_status_<?php echo $modid ?>', status/*, {expires: date}*/);
			// (no expire date: expires when the browser is closed)
		}).always(function () {
			wait = false;
		});
	}
	
	function showStatus(status) {
		var img = '<?php echo $img_loading ?>';
		var alt = '';
		if (status !== null && status !== undefined) {
			switch (status)
			{
				case '0':
				case '1':
					img = '<?php echo $img_offline ?>';
					alt = 'offline';
					break;
				case '2':
					img = '<?php echo $img_online ?>';
					alt = 'online';
					break;
				case '3':
					img = '<?php echo $img_away ?>';
					alt = 'away';
					break;
				case '5':
					img = '<?php echo $img_busy ?>';
					alt = 'busy';
					break;
				default:
					img = '<?php echo $img_offline ?>';
					alt = 'offline';
					break;
			}
		}
		
		jQuery('#skypeStatus_<?php echo $modid ?>').html('<img src="'+img+'" alt="'+alt+'" />');
	}
	
})();	// widget namespace end
</script>

</div>