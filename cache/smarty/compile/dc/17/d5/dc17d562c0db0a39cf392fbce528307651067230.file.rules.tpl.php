<?php /* Smarty version Smarty-3.1.19, created on 2015-10-13 02:37:05
         compiled from "E:\wwwroot\projects\web\Arnaud_Lachaume\Prestashop\Source\prestashop\themes\default-bootstrap\modules\referralprogram\views\templates\front\rules.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2352561cd0c1b0c9f3-95923576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc17d562c0db0a39cf392fbce528307651067230' => 
    array (
      0 => 'E:\\wwwroot\\projects\\web\\Arnaud_Lachaume\\Prestashop\\Source\\prestashop\\themes\\default-bootstrap\\modules\\referralprogram\\views\\templates\\front\\rules.tpl',
      1 => 1440044012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2352561cd0c1b0c9f3-95923576',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'xml' => 0,
    'paragraph' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_561cd0c1b6fba1_79534802',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561cd0c1b6fba1_79534802')) {function content_561cd0c1b6fba1_79534802($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'E:\\wwwroot\\projects\\web\\Arnaud_Lachaume\\Prestashop\\Source\\prestashop\\tools\\smarty\\plugins\\modifier.replace.php';
?>

<h3><?php echo smartyTranslate(array('s'=>'Referral program rules','mod'=>'referralprogram'),$_smarty_tpl);?>
</h3>

<?php if (isset($_smarty_tpl->tpl_vars['xml']->value)) {?>
<div id="referralprogram_rules">
	<?php if (isset($_smarty_tpl->tpl_vars['xml']->value->body->{$_smarty_tpl->tpl_vars['paragraph']->value})) {?><div class="rte"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['xml']->value->body->{$_smarty_tpl->tpl_vars['paragraph']->value},"\'","'"),'\"','"');?>
</div><?php }?>
</div>
<?php }?>
<?php }} ?>
