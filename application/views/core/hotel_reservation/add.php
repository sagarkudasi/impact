<html>
<head>
<title>Reserve</title>
</head>
<body>
	<h2>Reservation for Hotel</h2>
	<p>Reserving rooms in <?php echo $event_hotel->hotel_name; ?></p><br>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br><br>
	<form action="<?php echo site_url('core/c_hotel_reservation/add/'.$event_registration->eventreg_id.'/'.$event_hotel->eventhotel_id); ?>" method="POST" id="eventreg_add">
		<table class="formtable">
			<tr><td>Room No</td><td>&nbsp;</td><td><input type="text" name="roomno" id="roomno" class="textbox" ></td></tr>
			<tr><td>Check In</td><td>&nbsp;</td><td><input type="datetime" name="checkin" class="textbox"></td></tr>
			<tr><td>Check Out</td><td>&nbsp;</td><td><input type="datetime" name="checkout" class="textbox"></td></tr>
			<tr><td>Comment</td><td>&nbsp;</td><td><input type="textarea" name="comment" class="textarea"></td></tr></table>
			<br><br><br></table>
			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Add" class="submitbutton"></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
			<td><a href="<?php echo site_url('core/c_event/viewall/');?>">skip</a></td></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>