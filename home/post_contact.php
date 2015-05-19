<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// require "vendor/autoload.php";
// use Mailgun\Mailgun;

//Your credentials
// $mg = new Mailgun("key-5d424be0c125221134ef28fdd39d66b0");
$domain = "app42401434151a4b48bb4312c467ada548.mailgun.org";

// $mg->sendMessage($domain, array(
// 'from' => "pabfaust@gmail.com" //$_POST["mail"],
// 'to' => 'postmaster@app42401434151a4b48bb4312c467ada548.mailgun.org',
// 'subject' => 'TEST',
// 'text' => "hola" //$_POST["message"]
// 	)
// );
 
$key = "key-5d424be0c125221134ef28fdd39d66b0";
$url = "https://api:".$key."@api.mailgun.net/v2/".$domain."/messages";


?>

<form action="<?php echo $url ?>" method="POST">
<input type="hidden" name="to" value="postmaster@app42401434151a4b48bb4312c467ada548.mailgun.org">
<input type="text" name="from" value="mail">
<input type="hidden" name="subject" value="TEST">
<input type="text" name="text" value="texto">
<input type="submit" value="send">
</form>

<?php  


// echo "<script>alert('Merci, votre message nous a bien été envoyé ! On vous répondra au plus vite !')</script>";
// echo "<SCRIPT>history.back(1)</SCRIPT>"; 