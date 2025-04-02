<?php
/* Smarty version 5.4.2, created on 2025-03-24 20:43:29
  from 'file:C:\xampp\htdocs\php_paw_4sem\szablony_smarty\app\../templates/main.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67e1b5e1e14214_17335129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a265bf42854309fa9358fda604c7a8f9e613c14a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_paw_4sem\\szablony_smarty\\app\\../templates/main.html',
      1 => 1742654826,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e1b5e1e14214_17335129 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_paw_4sem\\szablony_smarty\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo (($tmp = $_smarty_tpl->getValue('page_description') ?? null)===null||$tmp==='' ? 'Opis domyślny' ?? null : $tmp);?>
">
    <title><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? "Kalkulator kredytowy" ?? null : $tmp);?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/css/main.css" />
</head>

<body class="is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <div id="header">
            <!-- Nav -->
            <nav id="nav">
            <ul>
                <li class="current"><a href="#"><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? "Kalkulator kredytowy" ?? null : $tmp);?>
</a>
                </li>
                <li>
                    <a href="#">Inna strona</a>
                </li>
            </ul>
            </nav>
        </div>

        <!-- Gigantic Heading -->
      <section class="wrapper style2">
        <div class="container">
          <header class="major">
            <h2><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? "Kalkulator kredytowy" ?? null : $tmp);?>
</h2>
            <p><?php echo (($tmp = $_smarty_tpl->getValue('page_description') ?? null)===null||$tmp==='' ? "Oblicz swoją ratę kredytu już dzisiaj!" ?? null : $tmp);?>
</p>
          </header>
        </div>
      </section>

      <!-- Calculator content -->
      <section class="wrapper style1">
        <div class="container">
            <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_181521983667e1b5e1e12351_21902114', 'content');
?>

        </div>
      </section>

      <div id="footer">
        <div class="container">
            <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_7858396267e1b5e1e13474_28481462', 'footer');
?>

        </div>
      </div>

    </div>

    <!-- Scripts -->
    <?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block 'content'} */
class Block_181521983667e1b5e1e12351_21902114 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_paw_4sem\\szablony_smarty\\templates';
?>
 Kalkulator kredytowy ... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_7858396267e1b5e1e13474_28481462 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_paw_4sem\\szablony_smarty\\templates';
?>
 Kalkulator stworzony przez ... <?php
}
}
/* {/block 'footer'} */
}
