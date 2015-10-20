<?php /* Smarty version Smarty-3.1.19, created on 2015-10-13 02:36:56
         compiled from "E:\wwwroot\projects\web\Arnaud_Lachaume\Prestashop\Source\prestashop\admin\themes\default\template\controllers\groups\helpers\tree\tree_node_folder_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15742561cd0b8dea5c3-08839509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afa3e6f07f424482d9018d9f2e9088dc16d2309b' => 
    array (
      0 => 'E:\\wwwroot\\projects\\web\\Arnaud_Lachaume\\Prestashop\\Source\\prestashop\\admin\\themes\\default\\template\\controllers\\groups\\helpers\\tree\\tree_node_folder_radio.tpl',
      1 => 1440044012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15742561cd0b8dea5c3-08839509',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_561cd0b8e5c1c4_95629827',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561cd0b8e5c1c4_95629827')) {function content_561cd0b8e5c1c4_95629827($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'E:\\wwwroot\\projects\\web\\Arnaud_Lachaume\\Prestashop\\Source\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-folder-name-disable<?php }?>">
		<input type="radio" name="id_category" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li><?php }} ?>
