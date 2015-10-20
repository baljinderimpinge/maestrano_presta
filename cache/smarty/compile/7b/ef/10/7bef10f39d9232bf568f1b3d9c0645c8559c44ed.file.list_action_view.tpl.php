<?php /* Smarty version Smarty-3.1.19, created on 2015-10-13 10:32:10
         compiled from "E:\wwwroot\projects\web\Arnaud_Lachaume\Prestashop\Source\prestashop\admin040v3tirx\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12413561d15ea388017-31727437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bef10f39d9232bf568f1b3d9c0645c8559c44ed' => 
    array (
      0 => 'E:\\wwwroot\\projects\\web\\Arnaud_Lachaume\\Prestashop\\Source\\prestashop\\admin040v3tirx\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1440044012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12413561d15ea388017-31727437',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_561d15ea3a7453_61295136',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561d15ea3a7453_61295136')) {function content_561d15ea3a7453_61295136($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
