<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="currencyExchange.php" method="get">
        <p>Amount:</p>
        <input type="number" name="number">
        <p>Select currency:</p>
        <select name="response" id="">
            <option value="usd">USD</option>
            <option value="aud">AUD</option>
            <option value="eur">EUR</option>
            <option value="jpy">JPY</option>
        </select>
        <input type="submit" placeholder="Convert">
    </form>
    <?php
        if (isset($_GET["number"])) 
        {

            $number = $_GET["number"];
            if ($_GET["response"] == "usd")
            {
                echo  $number . " USD is equal " . $number*23000 . "VND";
            }
            if ($_GET["response"] == "aud")
            {
                echo  $number . " AUD is equal " . $number*17000 . "VND";
            }
            if ($_GET["response"] == "eur")
            {
                echo  $number . " EUR is equal " . $number*27000 . "VND";
            }
            if ($_GET["response"] == "jpy")
            {
                echo  $number . " JPY is equal " . $number*200 . "VND";
            }
        }
    ?>
</body>
</html>