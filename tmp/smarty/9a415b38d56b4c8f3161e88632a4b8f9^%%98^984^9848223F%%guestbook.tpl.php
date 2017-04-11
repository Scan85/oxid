<?php /* Smarty version 2.6.28, created on 2017-02-03 01:57:45
         compiled from form/guestbook.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxid_include_dynamic', 'form/guestbook.tpl', 7, false),array('function', 'oxmultilang', 'form/guestbook.tpl', 12, false),array('function', 'oxgetseourl', 'form/guestbook.tpl', 30, false),array('modifier', 'cat', 'form/guestbook.tpl', 30, false),)), $this); ?>
<?php if ($this->_tpl_vars['oxcmp_user']): ?>
    <?php if (! $this->_tpl_vars['oView']->floodProtection()): ?>
        <form class="form-horizontal" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfActionLink(); ?>
" method="post" id="guestbook" role="form">
            <div class="hidden">
                <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                <?php echo $this->_tpl_vars['oViewConf']->getNavFormParams(); ?>

                <?php echo smarty_function_oxid_include_dynamic(array('file' => "form/formparams.tpl"), $this);?>

                <input type="hidden" name="fnc" value="saveEntry">
                <input type="hidden" name="cl" value="<?php echo $this->_tpl_vars['oViewConf']->getActiveClassName(); ?>
">
            </div>
            <div class="form-group">
                <label class="control-label col-lg-2"><?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE'), $this);?>
</label>
                <div class="col-lg-6">
                    <textarea rows="10" name="rvw_txt" class="form-control"></textarea>
                </div>
                <div class="col-lg-4"></div>
            </div>

            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-6">
                    <button id="reviewSave" type="submit" class="btn btn-primary"><?php echo smarty_function_oxmultilang(array('ident' => 'CLICK_HERE_TO_WRITE_ENTRY'), $this);?>
</button>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </form>
    <?php endif; ?>
<?php else: ?>
    <div class="alert alert-info">
        <?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_TO_BE_LOGGED_WRITE_GUESTBOOK'), $this);?>

        <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=account") : smarty_modifier_cat($_tmp, "cl=account")),'params' => ((is_array($_tmp=((is_array($_tmp="sourcecl=")) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oViewConf']->getActiveClassName()) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oViewConf']->getActiveClassName())))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oViewConf']->getNavUrlParams()) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oViewConf']->getNavUrlParams()))), $this);?>
" class="pull-right btn btn-default"><?php echo smarty_function_oxmultilang(array('ident' => 'LOGIN'), $this);?>
</a>
        <div class="clearfix"></div>
    </div>
<?php endif; ?>