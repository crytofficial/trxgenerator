<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
<title>TronWalletGenerator @ https://crytrex.com Product</title>
<meta name="title" content="TronWalletGenerator @ https://crytrex.com Product">
<meta name="description" content="Trade the Best Crypto with Fast, Secure and easy how to use trading engine.">
<meta name="keywords" content="crytrex, trade, trading, crypto, bitcoin, litecoin, dogecoin, buy, sell, exchange">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="revisit-after" content="7 days">
<meta name="author" content="CryTrEx.com Service">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
        <link rel="shortcut icon" href="favicon.png">
        <link href="https://crytrex.com/assets/website/css/vendors.bundle.min.css" rel="stylesheet"/>
        <link href="https://crytrex.com/assets/website/fontawesome/css/fontawesome.min.css" rel="stylesheet">
        <link href="https://crytrex.com/assets/website/fontawesome/css/fontawesome-all.min.css" rel="stylesheet">
        <link href="https://crytrex.com/assets/website/css/style.css" rel="stylesheet">
        <link href="https://crytrex.com/assets/js/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
<div align="center">

<h3 align="center"><img src="trxlogo.png" alt="TRON" width="250" height="271"></h3>
<p><strong>Print and Save your Wallet Details on safe place. </strong></p>
<hr>
<?php
$c = curl_init();
curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($c, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
curl_setopt($c, CURLOPT_URL, 'https://api.trongrid.io/wallet/generateaddress');
$data = curl_exec($c);
curl_close($c);
$obj = json_decode($data);
$privkey = print_r($obj->{'privateKey'}, true);
$address = print_r($obj->{'address'}, true);
$addresshex = print_r($obj->{'hexAddress'}, true);
?>
						<p><strong>Your TRON (TRX) Address:</strong><br>
<input type="text" name="address" value="<?php echo $address; ?>" size="25" readonly> </p>
<p><img class="qrcode" height="200" width="200" src="https://www.coinpayments.net/qraddr.php?coin=TRX&addr=<?php echo $address; ?>" /></p>
                       <p><strong>Your TRON Address on HEX Format:</strong><br>
 <input type="text" name="addresshex" value="<?php echo $addresshex; ?>" size="25" readonly> </p>
                         <p><strong>Your Private Key:</strong><br>
<input type="text" name="privkey" value="<?php echo $privkey; ?>" size="25" readonly> </p>
<p><strong>Save the Private Key and the address in a safe place.</strong></p>
<p>You can use the private key to import your wallet into other wallets.</p>
    <h3>&nbsp;</h3>


</div><br><br>
        <footer class="footer">
            <div class="secondary-footer">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-12">
                            <p align="center" class="footer-copyright"><strong>TronWalletGenerator </strong> <em>powered by</em> <a href="https://crytrex.com" target="_blank"><strong>https://crytrex.com</strong></a><br>
and TronGrid.io 
</p>
                      </div>
                    </div>
                </div>
            </div><!-- /.secondary-footer -->
        </footer><!-- /.End of footer -->
    </body>
</html>