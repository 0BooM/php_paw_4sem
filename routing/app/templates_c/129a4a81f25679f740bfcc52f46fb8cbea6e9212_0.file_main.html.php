<?php
/* Smarty version 5.4.2, created on 2025-04-01 08:50:44
  from 'file:C:\xampp\htdocs\php_paw_4sem\oop_kalkulator/templates/main.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67eb8cc4a10a49_64300015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '129a4a81f25679f740bfcc52f46fb8cbea6e9212' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_paw_4sem\\oop_kalkulator/templates/main.html',
      1 => 1743351914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67eb8cc4a10a49_64300015 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_paw_4sem\\oop_kalkulator\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="<?php echo (($tmp = $_smarty_tpl->getValue('page_description') ?? null)===null||$tmp==='' ? 'Opis domyślny' ?? null : $tmp);?>
"
    />
    <title><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? "Kalkulator kredytowy" ?? null : $tmp);?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/css/main.css" />
  </head>

  <body class="is-preload">
    <div id="page-wrapper">
      <!-- Header -->
      <div id="header">
        <!-- Nav -->
        <nav id="nav">
          <ul>
            <li class="current">
              <a href="#"><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? "Kalkulator kredytowy" ?? null : $tmp);?>
</a>
            </li>
            <li>
              <a href="#">Inna strona</a>
            </li>
          </ul>
        </nav>
      </div>

      <!-- Calculator content -->
      <section class="wrapper style1">
        <div class="container">
          <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_174586092867eb8cc4a0f521_05600981', 'content');
?>

        </div>
      </section>

      <div id="footer">
        <div class="container">
          <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_97944493567eb8cc4a101a0_25594506', 'footer');
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
</html>
<?php }
/* {block 'content'} */
class Block_174586092867eb8cc4a0f521_05600981 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_paw_4sem\\oop_kalkulator\\templates';
?>
 Kalkulator kredytowy ... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_97944493567eb8cc4a101a0_25594506 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_paw_4sem\\oop_kalkulator\\templates';
?>
 Kalkulator stworzony przez ... <?php
}
}
/* {/block 'footer'} */
}
