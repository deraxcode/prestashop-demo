<?php
/* Smarty version 3.1.32, created on 2018-08-13 22:20:31
  from 'C:\Users\Jorge\Proyectos\travelxite\xampp-php7\htdocs\default\prestashop\admin850lssimt\themes\new-theme\template\components\layout\information_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b722e5f5d56d4_30968690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8aa7a36cac994756b9a8c26592b398295e0a4f77' => 
    array (
      0 => 'C:\\Users\\Jorge\\Proyectos\\travelxite\\xampp-php7\\htdocs\\default\\prestashop\\admin850lssimt\\themes\\new-theme\\template\\components\\layout\\information_messages.tpl',
      1 => 1534208746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b722e5f5d56d4_30968690 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['informations']->value) && count($_smarty_tpl->tpl_vars['informations']->value) && $_smarty_tpl->tpl_vars['informations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-info">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <ul id="infos_block" class="list-unstyled">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['informations']->value, 'info');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
?>
          <li><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
  </div>
<?php }
}
}
