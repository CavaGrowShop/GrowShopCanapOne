<?php
/* Smarty version 3.1.33, created on 2019-01-15 01:00:11
  from '/var/www/html/prestashop/admin450irybsp/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3d228b43dfb3_24717293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2107ac4c0ffc36c82c1c8087c9625dc1261d8f48' => 
    array (
      0 => '/var/www/html/prestashop/admin450irybsp/themes/default/template/content.tpl',
      1 => 1545054348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3d228b43dfb3_24717293 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
