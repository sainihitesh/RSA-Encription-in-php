<?php include_once('../RSA.php');
      ?><center>
<h1>RSA Decryption</h1>
      <br><br><form action='<?php $_SERVER['PHP_SELF']; ?>' method='POST'>
        N=<input type='text' name='n'/>
        private key=<input type='text' name='key'/>
        <p>Enter Data</p>
        <textarea name='data' rows="12" cols="45"></textarea>
        <p><input type="submit" value='Decrypt'/></p>
<p> 
        <textarea name='encdata' rows="12" cols="45">
<?php 
    if(!empty($_POST['n'])&&!empty($_POST['key'])&&!empty($_POST['data']))
     {
       
echo RSA_decrypt($_POST['data'],$_POST['n'],$_POST['key']);
     }	
?>
        </textarea>
