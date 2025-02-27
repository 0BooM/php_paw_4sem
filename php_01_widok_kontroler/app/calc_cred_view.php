<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Kalkulator kredytu</title>
</head>
<body class="pt-3 pl-3">
    <h1>Kalkulator miesięcznej raty kredytu</h1>
    <form action="<?php print(_APP_URL); ?>/app/calc_cred.php" method="post">
        <label for="id_amount">Kwota: </label>
        <input type="text" id="id_amount" name="amount" value="<?php if (isset($amount)) print($amount) ?>">
        <br>
        <label for="length">Ile lat: </label>
        <input type="text" name="length" id="length" value="<?php if (isset($length)) print($length); ?>">
        <br>
        <label for="lending_rate">Oprocentowanie</label>
        <select name="lending_rate" id="lending_rate">
            <option value="0.02" <?php if (isset($lending_rate) && $lending_rate == 0.01) print("selected"); ?> >1%</option>
            <option value="0.02" <?php if (isset($lending_rate) && $lending_rate == 0.02) print("selected"); ?> >2%</option>
            <option value="0.03" <?php if (isset($lending_rate) && $lending_rate == 0.03) print("selected"); ?> >3%</option>
            <option value="0.04" <?php if (isset($lending_rate) && $lending_rate == 0.04) print("selected"); ?> >4%</option>
            <option value="0.05" <?php if (isset($lending_rate) && $lending_rate == 0.05) print("selected"); ?> >5%</option>
            <option value="0.06" <?php if (isset($lending_rate) && $lending_rate == 0.06) print("selected"); ?> >6%</option>
            <option value="0.07" <?php if (isset($lending_rate) && $lending_rate == 0.07) print("selected"); ?> >7%</option>
        </select>
        <br>
        <input type="submit" value="Oblicz ratę" class="btn btn-primary mb-2">
    </form>

<?php 
if(isset($messages)){ ?>
    <ol class="alert alert-danger w-50">
        <?php
            foreach ($messages as $message) {
                print("<li>" . $message . "</li>");
            } 
        ?>
    </ol>
<?php }?>

<?php 
if(isset($result)){ ?>
    <div class="alert alert-success w-50">
        <?php print("Miesięczna rata wynosi: " . $result) ?>
    </div>
<?php }?>

</body>
</html>
