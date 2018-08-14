<?php
/* Smarty version 3.1.32, created on 2018-08-13 22:20:31
  from 'C:\Users\Jorge\Proyectos\travelxite\xampp-php7\htdocs\default\prestashop\modules\welcome\views\templates\tooltip.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b722e5f3b3463_62969540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44566f4f6885258224c6308c65f92f621ab50fa5' => 
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
function content_5b722e5f3b3463_62969540 (Smarty_Internal_Template $_smarty_tpl) {
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
