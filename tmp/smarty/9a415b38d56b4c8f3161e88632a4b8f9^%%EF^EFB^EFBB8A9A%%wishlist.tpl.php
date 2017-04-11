<?php /* Smarty version 2.6.28, created on 2017-02-03 02:00:37
         compiled from page/wishlist/wishlist.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'page/wishlist/wishlist.tpl', 4, false),array('function', 'oxmultilang', 'page/wishlist/wishlist.tpl', 7, false),array('insert', 'oxid_tracker', 'page/wishlist/wishlist.tpl', 22, false),)), $this); ?>
<?php ob_start(); ?>
<?php $this->assign('wishuser', $this->_tpl_vars['oView']->getWishUser()); ?>
    <?php if (! $this->_tpl_vars['oView']->getWishListUsers() && $this->_tpl_vars['oView']->getWishListSearchParam()): ?>
        <?php $this->assign('_statusMessage', ((is_array($_tmp='MESSAGE_SORRY_NO_GIFT_REGISTRY')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp))); ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/error.tpl", 'smarty_include_vars' => array('statusMessage' => $this->_tpl_vars['_statusMessage'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>
    <h1 class="page-header"><?php if ($this->_tpl_vars['wishuser']): ?><?php echo smarty_function_oxmultilang(array('ident' => 'GIFT_REGISTRY_OF'), $this);?>
 <?php echo $this->_tpl_vars['wishuser']->oxuser__oxfname->value; ?>
 <?php echo $this->_tpl_vars['wishuser']->oxuser__oxlname->value; ?>
<?php else: ?><?php echo smarty_function_oxmultilang(array('ident' => 'PUBLIC_GIFT_REGISTRIES'), $this);?>
<?php endif; ?></h1>
    <div class="wishlistView clear bottomRound">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/wishlist_search.tpl", 'smarty_include_vars' => array('searchClass' => 'wishlist')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php if ($this->_tpl_vars['oView']->getWishList()): ?>
            <?php $this->assign('wishuser', $this->_tpl_vars['oView']->getWishUser()); ?>
            <p class="wishlistUser">
            <?php echo smarty_function_oxmultilang(array('ident' => 'PAGE_WISHLIST_PRODUCTS_PRODUCTS1'), $this);?>
 <?php echo $this->_tpl_vars['wishuser']->oxuser__oxfname->value; ?>
 <?php echo $this->_tpl_vars['wishuser']->oxuser__oxlname->value; ?>
<?php echo smarty_function_oxmultilang(array('ident' => 'PAGE_WISHLIST_PRODUCTS_PRODUCTS2'), $this);?>

            </p>
        <?php endif; ?>
    </div>
    <?php if ($this->_tpl_vars['oView']->getWishList()): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/product/list.tpl", 'smarty_include_vars' => array('type' => 'line','title' => "",'listId' => 'wishlistProductList','products' => $this->_tpl_vars['oView']->getWishList(),'owishid' => $this->_tpl_vars['wishuser']->oxuser__oxid->value)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php else: ?>
        <?php echo smarty_function_oxmultilang(array('ident' => 'GIFT_REGISTRY_EMPTY'), $this);?>

    <?php endif; ?>
    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'oxid_tracker')), $this); ?>

<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_content', ob_get_contents());ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/page.tpl", 'smarty_include_vars' => array('sidebar' => 'Left')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>