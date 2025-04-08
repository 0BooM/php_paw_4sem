<?php
/* Smarty version 5.4.2, created on 2025-04-02 19:51:59
  from 'file:CalcView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67ed793fa2b291_30196307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c253b2072be309e0a87b94b9839041d74b919e7' => 
    array (
      0 => 'CalcView.tpl',
      1 => 1743493255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67ed793fa2b291_30196307 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_paw_4sem\\namespaces\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_90275096067ed793f5b5534_80388955', 'footer');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_173940121667ed793f780e07_59207079', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'footer'} */
class Block_90275096067ed793f5b5534_80388955 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_paw_4sem\\namespaces\\app\\views';
?>
Przykładowa stopka<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_173940121667ed793f780e07_59207079 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_paw_4sem\\namespaces\\app\\views';
?>

            <section class="col-6 col-12-narrower">
                <h3>Kalkulator</h3>

                <form action="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
calcCompute" method="post">

                    <div class="row gtr-50">
                        <div class="col-12 col-12-mobilep">
                            <label for="id_amount">Kwota: </label>
                            <input type="text" id="id_amount" name="amount" value="<?php echo $_smarty_tpl->getValue('form')->amount;?>
">
                        </div>

                        <div class="col-12 col-12-mobilep">
                            <label for="length">Ile lat: </label>
                            <input type="text" name="length" id="length" value="<?php echo $_smarty_tpl->getValue('form')->length;?>
">
                        </div>

                        <div class="col-12 col-12-mobilep">
                            <label for="lending_rate">Oprocentowanie</label>
                            <select name="lending_rate" id="lending_rate">
                                <option value="0.01">
                                    1%
                                </option>
                                <option value="0.02">2%
                                </option>
                                <option value="0.03" >3%
                                </option>
                                <option value="0.04" >4%
                                </option>
                                <option value="0.05" >5%
                                </option>
                                <option value="0.06">6%
                                </option>
                                <option value="0.07">7%
                                </option>
                            </select>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="pure-button pure-button-primary">Oblicz</button>
                        </div>
                    </div>
                </form>

                <div class="messages">

<?php if ($_smarty_tpl->getValue('msgs')->isError()) {?>
        <h4>Wystąpiły błędy:</h4>
            <ol class="err">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getErrors(), 'err');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('err')->value) {
$foreach0DoElse = false;
?>
                    <li><?php echo $_smarty_tpl->getValue('err');?>
</li>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ol>
<?php }?>

<?php if ($_smarty_tpl->getValue('msgs')->isInfo()) {?>
        <h4>Informacje:</h4>
            <ol class="inf">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getInfos(), 'inf');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('inf')->value) {
$foreach1DoElse = false;
?>
                    <li><?php echo $_smarty_tpl->getValue('inf');?>
</li>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ol> 
<?php }?>

<?php if ((null !== ($_smarty_tpl->getValue('res')->result ?? null))) {?>
    <h4>Wynik:</h4>
    <p class="res"><?php echo $_smarty_tpl->getValue('res')->result;?>
</p>
<?php }?>
                </div>
            </section>
<?php
}
}
/* {/block 'content'} */
}
