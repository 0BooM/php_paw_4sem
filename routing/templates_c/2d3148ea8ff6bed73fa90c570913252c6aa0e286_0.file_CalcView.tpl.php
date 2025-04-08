<?php
/* Smarty version 5.4.2, created on 2025-04-08 21:40:26
  from 'file:CalcView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67f57baab994b3_24151079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d3148ea8ff6bed73fa90c570913252c6aa0e286' => 
    array (
      0 => 'CalcView.tpl',
      1 => 1744141190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
))) {
function content_67f57baab994b3_24151079 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_paw_4sem\\routing\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_178613201667f57baab894b9_48876590', 'footer');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_195812164467f57baab8d5b2_59542062', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'footer'} */
class Block_178613201667f57baab894b9_48876590 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_paw_4sem\\routing\\app\\views';
?>
Przykładowa stopka<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_195812164467f57baab8d5b2_59542062 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_paw_4sem\\routing\\app\\views';
?>

    <div class="pure-menu pure-menu-horizontal bottom-margin">
        <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
        <span style="float:right;">użytkownik: <?php echo $_smarty_tpl->getValue('user')->login;?>
, rola: <?php echo $_smarty_tpl->getValue('user')->role;?>
</span>
    </div>

    
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

<?php $_smarty_tpl->renderSubTemplate('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

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
