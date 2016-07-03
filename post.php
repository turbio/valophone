<?xml version="1.0" encoding="UTF-8"?>
<Response>
	<Sms>
<?php
if(array_key_exists("MediaUrl0", $_POST)){
	file_put_contents(
		'./media/' . time() . '-' . $_POST["MessageSid"],
		fopen($_POST["MediaUrl0"], 'r')
	);
}else{
	echo 'not really sure how to deal with that';
}
?>
	</Sms>
</Response>
