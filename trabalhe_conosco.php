<?php include_once("analyticstracking.php") ?>
<?php
		
	$recipient = "contato@supreme-edu.com.br";
	$subject = "Trabalhe Conosco - Enviado pelo Site";
	$texto = '
		<table width="600" border="0" align="center" style="border:1px solid #c2c2c2" bgcolor=" #E5E5E5">
		 <tr>
			<td colspan="4" align="center" bgcolor="#626769"><font size="5" face="Arial, Helvetica, sans-serif" color="#ffffff">Trabalhe Conosco - Enviado pelo Site</td>
		  </tr>
		  <tr>
			<td align="right" width="20%"><font size="-1" face="Arial, Helvetica, sans-serif" color="#333333"><strong>Nome:</strong></td>
			<td>'.$_POST['nome'].'</td>
		  </tr>
		  <tr>
			<td align="right" width="20%"><font size="-1" face="Arial, Helvetica, sans-serif" color="#333333"><strong>Email:</strong></td>
			<td>'.$_POST['email'].'</td>
		  </tr>
		  <tr>
			<td align="right" width="20%"><font size="-1" face="Arial, Helvetica, sans-serif" color="#333333"><strong>Endereço:</strong></td>
			<td>'.$_POST['end'].'</td>
		  </tr>
		  <tr>
			<td align="right" width="20%"><font size="-1" face="Arial, Helvetica, sans-serif" color="#333333"><strong>Cidade:</strong></td>
			<td>'.$_POST['cidade'].'</td>
		  </tr>
		  <tr>
			<td align="right" width="20%"><font size="-1" face="Arial, Helvetica, sans-serif" color="#333333"><strong>Telefone:</strong></td>
			<td>'.$_POST['telefone'].'</td>
		  </tr>	  
		  <tr>
			<td align="right" width="20%"><font size="-1" face="Arial, Helvetica, sans-serif" color="#333333"><strong>Celular:</strong></td>
			<td>'.$_POST['celular'].'</td>
		  </tr>
		  <tr>
			<td align="right" width="20%"><font size="-1" face="Arial, Helvetica, sans-serif" color="#333333"><strong>Experiência Profissional:</strong></td>
			<td>'.$_POST['mensagem'].'</td>
		  </tr>
		  <tr>
			<td align="right" width="20%"><font size="-1" face="Arial, Helvetica, sans-serif" color="#333333"><strong>Área preferida:</strong></td>
			<td>'.$_POST['gender'].'</td>
		  </tr>
		</table>
	';	
	$boundary = "XYZ-" . date("dmYis") . "-ZYX";
	$mens = "--$boundary\n";
	$mens .= "Content-Transfer-Encoding: 8bits\n";
	$mens .= "Content-Type: text/html; charset=\"UTF-8\"\n\n"; //plain
	$mens .= "$texto\n";
	$mens .= "--$boundary\n";
	$mens .= "--$boundary--\r\n";
	$mailheaders = "MIME-Version: 1.0\n";
	$mailheaders .= "From: ".$_POST['nome']." <".$_POST['email'].">\r\n";
	$mailheaders .= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n";
	$mailheaders .= "$boundary\n";

	mail($recipient, $subject, $mens, $mailheaders);
	echo '<script type="text/javascript">alert("Obrigado! Em Breve Retornaremos seu Contato.");location.href="index.html";</script>';
;
?>