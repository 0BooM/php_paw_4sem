<?php
/* Smarty version 5.4.2, created on 2025-03-22 15:36:07
  from 'file:C:\xampp\htdocs\php_paw_4sem\szablony_smarty/app/calc.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67decad7b74f54_26828948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '180f26b474fd18e97acaf370b8b394f5322434e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_paw_4sem\\szablony_smarty/app/calc.html',
      1 => 1742654160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67decad7b74f54_26828948 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_paw_4sem\\szablony_smarty\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_171809553467decad796f2d6_47639930', 'footer');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_95101664767decad7976b04_98854309', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.html", $_smarty_current_dir);
}
/* {block 'footer'} */
class Block_171809553467decad796f2d6_47639930 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_paw_4sem\\szablony_smarty\\app';
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_95101664767decad7976b04_98854309 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_paw_4sem\\szablony_smarty\\app';
?>

            <section class="col-6 col-12-narrower">
                <h3>Kalkulator</h3>

                <form action="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/calc_cred.php" method="post">

                    <div class="row gtr-50">
                        <div class="col-12 col-12-mobilep">
                            <label for="id_amount">Kwota: </label>
                            <input type="text" id="id_amount" name="amount" value="<?php echo $_smarty_tpl->getValue('amount');?>
">
                        </div>

                        <div class="col-12 col-12-mobilep">
                            <label for="length">Ile lat: </label>
                            <input type="text" name="length" id="length" value="<?php echo $_smarty_tpl->getValue('length');?>
">
                        </div>

                        <div class="col-12 col-12-mobilep">
                            <label for="lending_rate">Oprocentowanie</label>
                            <select name="lending_rate" id="lending_rate">
                                <option value="0.01" {
                                    if (isset($lending_rate) && $lending_rate == 0.01) print("selected");
                                    }>
                                    1%
                                </option>
                                <option value="0.02" {
                                    if (isset($lending_rate) && $lending_rate == 0.02) print("selected");
                                    } >2%
                                </option>
                                <option value="0.03" {
                                    if (isset($lending_rate) && $lending_rate == 0.03) print("selected");
                                    } >3%
                                </option>
                                <option value="0.04" {
                                    if (isset($lending_rate) && $lending_rate == 0.04) print("selected");
                                    }>4%
                                </option>
                                <option value="0.05" {
                                    if (isset($lending_rate) && $lending_rate == 0.05) print("selected");
                                    } >5%
                                </option>
                                <option value="0.06" {
                                    if (isset($lending_rate) && $lending_rate == 0.06) print("selected");
                                    } >6%
                                </option>
                                <option value="0.07" {
                                    if (isset($lending_rate) && $lending_rate == 0.07) print("selected");
                                    }>7%
                                </option>
                            </select>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="pure-button pure-button-primary">Oblicz</button>
                        </div>
                    </div>
                </form>

                <div class="messages">

<?php if ((null !== ($_smarty_tpl->getValue('messages') ?? null))) {?>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('messages')) > 0) {?>
        <h4>Wystąpiły błędy:</h4>
            <ol class="err">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages'), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
                    <li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ol>
    <?php }
}?>

<?php if ((null !== ($_smarty_tpl->getValue('infos') ?? null))) {?>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('infos')) > 0) {?>
        <h4>Informacje:</h4>
            <ol class="inf">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('infos'), 'msg');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach1DoElse = false;
?>
                    <li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ol>       
    <?php }?>         
<?php }?>

<?php if ((null !== ($_smarty_tpl->getValue('result') ?? null))) {?>
    <h4>Wynik:</h4>
    <p class="res"><?php echo $_smarty_tpl->getValue('result');?>
</p>
<?php }?>

                </div>
            </section>
<?php
}
}
/* {/block 'content'} */
}
