<?php //góra strony z szablonu 
include _ROOT_PATH.'/templates/top.php';
?>


<section class="wrapper style1">
    <div class="container">
        <section class="col-6 col-12-narrower">
            <h3>Kalkulator</h3>


            <form action="<?php print(_APP_URL); ?>/app/calc_cred.php" method="post">
                <div class="row gtr-50">
                    <div class="col-12 col-12-mobilep">
                        <label for="id_amount">Kwota: </label>
                        <input type="text" id="id_amount" name="amount" value="<?php if (isset($amount)) print($amount) ?>">
                    </div>
                    <div class="col-12 col-12-mobilep">
                        <label for="length">Ile lat: </label>
                        <input type="text" name="length" id="length" value="<?php if (isset($length)) print($length); ?>">
                    </div>
                    <div class="col-12 col-12-mobilep">
                        <label for="lending_rate">Oprocentowanie</label>
                        <select name="lending_rate" id="lending_rate">
                            <option value="0.01" <?php if (isset($lending_rate) && $lending_rate == 0.01) print("selected"); ?> >1%</option>
                            <option value="0.02" <?php if (isset($lending_rate) && $lending_rate == 0.02) print("selected"); ?> >2%</option>
                            <option value="0.03" <?php if (isset($lending_rate) && $lending_rate == 0.03) print("selected"); ?> >3%</option>
                            <option value="0.04" <?php if (isset($lending_rate) && $lending_rate == 0.04) print("selected"); ?> >4%</option>
                            <option value="0.05" <?php if (isset($lending_rate) && $lending_rate == 0.05) print("selected"); ?> >5%</option>
                            <option value="0.06" <?php if (isset($lending_rate) && $lending_rate == 0.06) print("selected"); ?> >6%</option>
                            <option value="0.07" <?php if (isset($lending_rate) && $lending_rate == 0.07) print("selected"); ?> >7%</option>
                    </select>
                    </div>
                    <div class="col-12">
                    <ul class="actions">
                      <li>
                        <input type="submit" value="Oblicz ratę" class="btn btn-primary mb-2">
                      </li>
                    </ul>
                  </div>
                </div>
            </form>
            <div class="messages">

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
	echo '<h4>Wystąpiły błędy: </h4>';
	echo '<ol class="err">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php
//wyświeltenie listy informacji, jeśli istnieją
if (isset($infos)) {
	if (count ( $infos ) > 0) {
	echo '<h4>Informacje: </h4>';
	echo '<ol class="inf">';
		foreach ( $infos as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
	<h4>Wynik</h4>
	<p class="res">
<?php print($result); ?>
	</p>
<?php } ?>

</div>

        </section>
    </div>
</section>

<?php //dół strony z szablonu 
include _ROOT_PATH.'/templates/bottom.php';
?>
