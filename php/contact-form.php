<?php
$ToEmail = 'agudenko@gutman.ai';
$EmailSubject = 'Заявка';
	$mailheader = "From: ".$_POST["email"]."\r\n";
		$mailheader .= "Reply-To: ".$_POST["email"]."\r\n";
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
$MESSAGE_BODY = '<table style=" background:#F4F4F4 ; text-align : center">
	
	<tr>
		<th colspan="2" style="padding:10px;">
			<b>Заявка</b>
		</th>
	</tr>
	<tr>
		<td style="padding:10px;">
			<b>Имя:</b>
		</td>
		<td style="padding:10px;">'.$_POST["name"].'</td>
	</tr>
	<tr>
		<td style="padding:10px;">
			<b>E-mail:</b>
		</td>
		<td style="padding:10px;">'.$_POST["email"].'</td>
	</tr>
	<tr>
		<td style="padding:10px;">
			<b>Телефон:</b>
		</td>
		<td style="padding:10px;">'.$_POST["phone"].'</td>
	</tr>
	<tr>
		<td style="padding:10px;">
			<b>Сообщение:</b>
		</td>
		<td style="padding:10px;">'.$_POST["message"].'</td>
	</tr>
</table>';
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");
?>