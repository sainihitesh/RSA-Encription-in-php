<?php include_once('i.php');
      ?><center>
<h1>RSA Encryption</h1>
<form action='<?php $_SERVER['PHP_SELF']; ?>' method='POST'>
<input name='hs' type="submit" value='Generate N, public key and private key'>
<br><?php  if(isset($_POST['hs']))
        {
          $p=random_primes(); $q=random_primes();
          $n=$q*$p;
          $public_key=public_key($p,$q);
          $private_key=private_key($p,$q,$public_key);
          echo 'N= '.$n.'  public key='.$public_key.'  private key= '.$private_key.'  //please remember these values';

        } 
?>
</form>
      <br><br><form action='<?php $_SERVER['PHP_SELF']; ?>' method='POST'>
        N=<input type='text' name='n'/>
        public key=<input type='text' name='key'/>
        <p>Enter Data</p>
        <textarea name='data' rows="12" cols="45"></textarea>
        <p><input type="submit" value='Encript'/></p>
<p> 
        <textarea name='encdata' rows="12" cols="45">
<?php 
    if(!empty($_POST['n'])&&!empty($_POST['key'])&&!empty($_POST['data']))
     {
       
       echo RSA_Encrypt($_POST['data'],$_POST['n'],$_POST['key']);
     }	
?>
        </textarea>