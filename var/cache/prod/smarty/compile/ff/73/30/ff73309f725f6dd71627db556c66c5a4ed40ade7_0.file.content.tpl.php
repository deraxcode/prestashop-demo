<?php
/* Smarty version 3.1.32, created on 2018-08-13 22:19:57
  from 'C:\Users\Jorge\Proyectos\travelxite\xampp-php7\htdocs\default\prestashop\modules\welcome\views\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b722e3d14e662_71851486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff73309f725f6dd71627db556c66c5a4ed40ade7' => 
    array (
      0 => 'C:\\Users\\Jorge\\Proyectos\\travelxite\\xampp-php7\\htdocs\\default\\prestashop\\modules\\welcome\\views\\content.tpl',
      1 => 1534208618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b722e3d14e662_71851486 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\Jorge\\Proyectos\\travelxite\\xampp-php7\\htdocs\\default\\prestashop\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
?>
<div class="onboarding-advancement" style="display: none">
  <div class="advancement-groups">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['steps']->value['groups'], 'group', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['group']->value) {
?>
      <div class="group group-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" style="width: <?php echo smarty_function_math(array('equation'=>"(x / y) * 100",'x'=>count($_smarty_tpl->tpl_vars['group']->value['steps']),'y'=>$_smarty_tpl->tpl_vars['totalSteps']->value),$_smarty_tpl);?>
%;">
        <div class="advancement" style="width: <?php echo $_smarty_tpl->tpl_vars['percent_real']->value;?>
%;"></div>
        <div class="id"><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</div>
      </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
  <div class="col-md-8">
    <h4 class="group-title"></h4>
    <div class="step-title step-title-1"></div>
    <div class="step-title step-title-2"></div>
  </div>
  <button class="btn btn-primary onboarding-button-next"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</button>
  <a class="onboarding-button-shut-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Skip this tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</a>
</div>

<?php echo '<script'; ?>
 type="text/javascript">

  var onBoarding;

  $(function(){
    onBoarding = new OnBoarding(<?php echo $_smarty_tpl->tpl_vars['currentStep']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['jsonSteps']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['isShutDown']->value;?>
, "<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
", baseAdminDir);

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['templates']->value, 'template');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
?>
      onBoarding.addTemplate('<?php echo $_smarty_tpl->tpl_vars['template']->value['name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['template']->value['content'];?>
');
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    onBoarding.showCurrentStep();

    var body = $("body");

    body.delegate(".onboarding-button-next", "click", function(){
      if ($(this).is('.with-spinner')) {
        if (!$(this).is('.animated')) {
          $(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(".onboarding-button-shut-down", "click", function(){
      onBoarding.setShutDown(true);
    }).delegate(".onboarding-button-resume", "click", function(){
      onBoarding.setShutDown(false);
    }).delegate(".onboarding-button-goto-current", "click", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(".onboarding-button-stop", "click", function(){
      onBoarding.stop();
    });

  });

<?php echo '</script'; ?>
>
<?php }
}