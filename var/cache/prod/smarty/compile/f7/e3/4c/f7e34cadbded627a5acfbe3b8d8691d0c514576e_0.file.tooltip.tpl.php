<?php
/* Smarty version 3.1.32, created on 2018-08-13 22:19:57
  from 'C:\Users\Jorge\Proyectos\travelxite\xampp-php7\htdocs\default\prestashop\modules\welcome\views\templates\tooltip.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b722e3d0c8628_55314974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7e34cadbded627a5acfbe3b8d8691d0c514576e' => 
    array (
      0 => 'C:\\Users\\Jorge\\Proyectos\\travelxite\\xampp-php7\\htdocs\\default\\prestashop\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1534208618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b722e3d0c8628_55314974 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</button>
</div>
<?php }
}
