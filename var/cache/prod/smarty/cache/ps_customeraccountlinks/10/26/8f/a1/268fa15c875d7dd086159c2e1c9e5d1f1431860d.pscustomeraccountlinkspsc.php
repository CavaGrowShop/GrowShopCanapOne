<?php
/* Smarty version 3.1.33, created on 2019-01-15 00:27:36
  from 'module:pscustomeraccountlinkspsc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3d1ae8116496_24213089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:pscustomeraccountlinkspsc',
      1 => 1545054348,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_5c3d1ae8116496_24213089 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://192.168.1.121/index.php?controller=my-account" rel="nofollow">
      Il tuo account
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Il tuo account</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="http://192.168.1.121/index.php?controller=identity" title="Informazioni personali" rel="nofollow">
            Informazioni personali
          </a>
        </li>
            <li>
          <a href="http://192.168.1.121/index.php?controller=history" title="Ordini" rel="nofollow">
            Ordini
          </a>
        </li>
            <li>
          <a href="http://192.168.1.121/index.php?controller=order-slip" title="Note di credito" rel="nofollow">
            Note di credito
          </a>
        </li>
            <li>
          <a href="http://192.168.1.121/index.php?controller=addresses" title="Indirizzi" rel="nofollow">
            Indirizzi
          </a>
        </li>
        
	</ul>
</div>
<?php }
}
