<style>
table {
 border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #080;
  text-align: left;
  padding: 8px;
}


</style>
<?php 

 $p=$_POST['name'];
 $o=$_POST['email'];
 $a=$_POST['subject'];
 $x=$_POST['message'];
 
  
  
$to = 'sales@biz4u.sg';
$subject = 'Contact';
$from = $p;
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Cc:'.$from. "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<table cellspacing="0" cellpadding="0" border="0" style="width:620px"> 
          <tbody>
       
	    <tr><td style="color:#333; height:35px;background:rgba(0,0,0,0.5);">
       <p style="padding-left:10px;text-align:center"> <img style="width:200px;" src="https://biz4u.sg/images/Logo1.png"> </p></td>
	   </tr>
	   
	  
       <td valign="top" style="border-right:1px solid #ccc;border-bottom:1px solid #3b5998;font-family:Arial,Helvetica,sans-serif;border-left:1px solid #ccc">
       <table style="width:100%;margin-top:15px">
       <tbody>               
       <tr style="border:1x solid #ddd">
         <td width="400" height="29" valign="top" style="font-size:20px;border:1x solid #ddd;padding-left:80px"><strong> Name :</strong></td>
         <td width="456" style="font-size:20px;border:1x solid #ddd">'.$p.'</td>
       </tr>
        <tr style="border:1x solid #ddd">
         <td height="26" valign="top" style="font-size:20px;border:1x solid #ddd;padding-left:80px"><strong>Email :</strong></td>
         <td style="font-size:20px;border:1x solid #ddd">'. $o.'</td>
       </tr>
     
	     <tr style="border:1x solid #ddd">
         <td height="26" valign="top" style="font-size:20px;border:1x solid #ddd;padding-left:80px"><strong>Contact Number :</strong></td>
         <td style="font-size:20px;border:1x solid #ddd">'. $a.'</td>
       </tr>
	   <tr style="border:1x solid #ddd">
         <td  height="28" valign="top" style="font-size:20px;border:1x solid #ddd;padding-left:80px"><strong>Message :</strong></td>
         <td style="font-size:20px;border:1x solid #ddd">'.$x.'</td>
       </tr>
     
	    
	   </tbody>
	   </table>
	    <table style="width:100%;margin-top:15px;">
       <tbody> 
	   
	

	   
       </tbody>
       </table>
       </td>
       </tr>                
      </tbody>
      </table>';
 
// Sending email
if(mail($to, $subject, $message, $headers)){
echo ("<SCRIPT LANGUAGE='JavaScript'>
  window.alert('Your  Request has been received. We Will Contact You via Email Soon.')
  window.location.href='thank-you.html';
  </SCRIPT>");
  
} else{
  
  echo 'Not Sent. Please try again.';
}
 
?>