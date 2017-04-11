<?php /* Smarty version 2.6.28, created on 2017-02-03 02:00:37
         compiled from form/wishlist_search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'form/wishlist_search.tpl', 9, false),array('function', 'oxgetseourl', 'form/wishlist_search.tpl', 28, false),array('modifier', 'cat', 'form/wishlist_search.tpl', 28, false),)), $this); ?>
<form name="wishlist_searchbox" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfActionLink(); ?>
" method="post" class="form-horizontal">
    <div class="hidden">
        <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

        <input type="hidden" name="cl" value="<?php echo $this->_tpl_vars['searchClass']; ?>
">
        <input type="hidden" name="fnc" value="searchforwishlist">
    </div>

    <div class="form-group">
        <label class="control-label col-lg-3" for="input_<?php echo $this->_tpl_vars['searchClass']; ?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'SEARCH_GIFT_REGISTRY'), $this);?>
</label>
        <div class="col-lg-9">
            <div class="input-group">
                <input type="text" name="search" id="input_<?php echo $this->_tpl_vars['searchClass']; ?>
" value="<?php echo $this->_tpl_vars['oView']->getWishListSearchParam(); ?>
" class="form-control" placeholder="<?php echo smarty_function_oxmultilang(array('ident' => 'ENTER_EMAIL_OR_NAME'), $this);?>
">
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit"><?php echo smarty_function_oxmultilang(array('ident' => 'SEARCH'), $this);?>
</button>
                </span>
            </div>
        </div>
    </div>
</form>

<?php if ($this->_tpl_vars['oView']->getWishListUsers()): ?>
    <hr>

    <p class="lead"><?php echo smarty_function_oxmultilang(array('ident' => 'GIFT_REGISTRY_SEARCH_RESULTS'), $this);?>
</p>
    <ul class="wishlistResults">
        <?php $_from = $this->_tpl_vars['oView']->getWishListUsers(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['wishres']):
?>
            <li>
                <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=wishlist") : smarty_modifier_cat($_tmp, "cl=wishlist")),'params' => "wishid=".($this->_tpl_vars['wishres']->oxuser__oxid->value)), $this);?>
">
                    <?php echo smarty_function_oxmultilang(array('ident' => 'GIFT_REGISTRY_OF'), $this);?>
 <?php echo $this->_tpl_vars['wishres']->oxuser__oxfname->value; ?>
&nbsp;<?php echo $this->_tpl_vars['wishres']->oxuser__oxlname->value; ?>

                </a>
            </li>
        <?php endforeach; endif; unset($_from); ?>
    </ul>
<?php endif; ?>