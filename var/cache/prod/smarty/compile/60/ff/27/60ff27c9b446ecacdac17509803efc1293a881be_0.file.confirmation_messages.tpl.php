<?php
/* Smarty version 3.1.32, created on 2018-08-13 22:20:31
  from 'C:\Users\Jorge\Proyectos\travelxite\xampp-php7\htdocs\default\prestashop\admin850lssimt\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b722e5f63d1f2_52331294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60ff27c9b446ecacdac17509803efc1293a881be' => 
    array (
      0 => 'C:\\Users\\Jorge\\Proyectos\\travelxite\\xampp-php7\\htdocs\\default\\prestashop\\admin850lssimt\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1534208746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b722e5f63d1f2_52331294 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
