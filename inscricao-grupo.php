<?php include_once("analyticstracking.php") ?>
<?php

$recipient = "fpwebdigital@gmail.com";
$subject = "INSCRIÇÃO GRUPO 3 PESSOAS (Eventos) - Enviado pelo Site";
$texto = '
		<table width="600" border="0" align="center" style="border:1px solid #c2c2c2" bgcolor=" #E5E5E5">
		 <tr>
			<td colspan="4" align="center" bgcolor="#626769"><font size="5" face="Arial, Helvetica, sans-serif" color="#ffffff">INSCRIÇÃO GRUPO DE 3 PESSOAS</td>
		  </tr>
		  <tr>
			<td colspan="4" align="center" bgcolor="#3d1d12"><font size="3" face="Arial, Helvetica, sans-serif" color="#ffffff">Pessoa 1</td>
		  </tr>
		  <tr>
			<td align="right" width="20%"><font size="-1" face="Arial, Helvetica, sans-serif" color="#333333"><strong>Nome:</strong></td>
			<td>'.$_POST['gr1-nome'].'</td>
		  </tr>
		  <tr>
			<td align="right" width="20%"><font size="-1" face="Arial, Helvetica, sans-serif" color="#333333"><strong>Email:</strong></td>
			<td>'.$_POST['gr1-email'].'</td>
		  </tr>
		  <tr>
			<td align="right" width="20%"><font size="-1" face="Arial, Helvetica, sans-serif" color="#333333"><strong>Telefone:</strong></td>
			<td>'.$_POST['gr1-tel'].'</td>
		  </tr>	  
		  <tr>
			<td align="right" width="20%"><font size="-1" face="Arial, Helvetica, sans-serif" color="#333333"><strong>Empresa:</strong></td>
			<td>'.$_POST['gr1-empresa'].'</td>
		  </tr>
		  <tr>
			<td align="right" width="20%"><font size="-1" face="Arial, Helvetica, sans-serif" color="#333333"><strong>Cargo:</strong></td>
			<td>'.$_POST['gr1-cargo'].'</td>
		  </tr>
		  		  <tr>
			<td colspan="4" align="center" bgcolor="#3d1d12"><font size="3" face="Arial, Helvetica, sans-serif" color="#ffffff">Pessoa 2</td>
		  </tr>
		  <tr>
			<td align="right" width="20%"><font size="-1" face="Arial, Helvetica, sans-serif" color="#333333"><strong>Nome:</strong></td>
			<td>'.$_POST['gr2-nome'].'</td>
		  </tr>
		  <tr>
			<td align="right" width="20%"><font size="-1" face="Arial, Helvetica, sans-serif" color="#333333"><strong>Email:</strong></td>
			<td>'.$_POST['gr2-email'].'</td>
		  </tr>
		  <tr>
			<td align="right" width="20%"><font size="-1" face="Arial, Helvetica, sans-serif" color="#333333"><strong>Telefone:</strong></td>
			<td>'.$_POST['gr2-tel'].'</td>
		  </tr>	  
		  <tr>
			<td align="right" width="20%"><font size="-1" face="Arial, Helvetica, sans-serif" color="#333333"><strong>Empresa:</strong></td>
			<td>'.$_POST['gr2-empresa'].'</td>
		  </tr>
		  <tr>
			<td align="right" width="20%"><font size="-1" face="Arial, Helvetica, sans-serif" color="#333333"><strong>Cargo:</strong></td>
			<td>'.$_POST['gr2-cargo'].'</td>
		  </tr>
		  
		  		  		  <tr>
			<td colspan="4" align="center" bgcolor="#3d1d12"><font size="3" face="Arial, Helvetica, sans-serif" color="#ffffff">Pessoa 3</td>
		  </tr>
		  <tr>
			<td align="right" width="20%"><font size="-1" face="Arial, Helvetica, sans-serif" color="#333333"><strong>Nome:</strong></td>
			<td>'.$_POST['gr3-nome'].'</td>
		  </tr>
		  <tr>
			<td align="right" width="20%"><font size="-1" face="Arial, Helvetica, sans-serif" color="#333333"><strong>Email:</strong></td>
			<td>'.$_POST['gr3-email'].'</td>
		  </tr>
		  <tr>
			<td align="right" width="20%"><font size="-1" face="Arial, Helvetica, sans-serif" color="#333333"><strong>Telefone:</strong></td>
			<td>'.$_POST['gr3-tel'].'</td>
		  </tr>	  
		  <tr>
			<td align="right" width="20%"><font size="-1" face="Arial, Helvetica, sans-serif" color="#333333"><strong>Empresa:</strong></td>
			<td>'.$_POST['gr3-empresa'].'</td>
		  </tr>
		  <tr>
			<td align="right" width="20%"><font size="-1" face="Arial, Helvetica, sans-serif" color="#333333"><strong>Cargo:</strong></td>
			<td>'.$_POST['gr3-cargo'].'</td>
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
$mailheaders .= "From: ".$_POST['gr1-nome']." <".$_POST['gr1-email'].">\r\n";
$mailheaders .= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n";
$mailheaders .= "$boundary\n";

mail($recipient, $subject, $mens, $mailheaders);
echo '<script type="text/javascript">alert("Obrigado! Em Breve Retornaremos seu Contato.");location.href="obrigado-inscricao.php";</script>';
;
?>