<?php include "config.php";
include "session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post" action="paytm/PaytmKit/pgRedirect.php">
        <input id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo  "ORDS" . rand(10000, 99999999) ?>">

        <input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?= $_SESSION['user_id']; ?>">

        <input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
        <input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
        <label>Transcation Amount</label>
        <input title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT" value="<?= $_GET['amount']; ?>">
        <input value="checkout" type="submit" onclick="">
        <!-- * - Mandatory Fields -->
    </form>
</body>

</html>