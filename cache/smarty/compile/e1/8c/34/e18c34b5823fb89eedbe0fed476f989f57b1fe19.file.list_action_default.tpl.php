<?php /* Smarty version Smarty-3.1.19, created on 2015-10-19 12:51:22
         compiled from "E:\wwwroot\projects\web\Arnaud_Lachaume\Prestashop\Source\prestashop\admin040v3tirx\themes\default\template\helpers\list\list_action_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1725256251f8a1af034-60751460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e18c34b5823fb89eedbe0fed476f989f57b1fe19' => 
    array (
      0 => 'E:\\wwwroot\\projects\\web\\Arnaud_Lachaume\\Prestashop\\Source\\prestashop\\admin040v3tirx\\themes\\default\\template\\helpers\\list\\list_action_default.tpl',
      1 => 1440044012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1725256251f8a1af034-60751460',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56251f8a1d7860_75614286',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56251f8a1d7860_75614286')) {function content_56251f8a1d7860_75614286($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['name']->value)) {?> name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="default">
	<i class="icon-asterisk"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
