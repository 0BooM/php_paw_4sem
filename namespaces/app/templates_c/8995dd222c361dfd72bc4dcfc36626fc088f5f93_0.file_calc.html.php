<?php
/* Smarty version 5.4.2, created on 2025-04-01 08:50:44
  from 'file:C:\xampp\htdocs\php_paw_4sem\oop_kalkulator/app/calc/calc.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67eb8cc4683842_49408444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8995dd222c361dfd72bc4dcfc36626fc088f5f93' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_paw_4sem\\oop_kalkulator/app/calc/calc.html',
      1 => 1743490183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67eb8cc4683842_49408444 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_paw_4sem\\oop_kalkulator\\app\\calc';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_106430690867eb8cc4667287_71706595', 'footer');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_196226401067eb8cc466d911_69395460', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ($_smarty_tpl->getValue('conf')->root_path).("/templates/main.html"), $_smarty_current_dir);
}
/* {block 'footer'} */
class Block_106430690867eb8cc4667287_71706595 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_paw_4sem\\oop_kalkulator\\app\\calc';
?>
Coś<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_196226401067eb8cc466d911_69395460 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_paw_4sem\\oop_kalkulator\\app\\calc';
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

<?php if ($_smarty_tpl->getValue('res')->result) {?>
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
