<?php /* Smarty version 2.6.28, created on 2017-02-02 13:24:29
         compiled from pricealarm_mail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'pricealarm_mail.tpl', 1, false),array('function', 'oxmultilang', 'pricealarm_mail.tpl', 16, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headitem.tpl", 'smarty_include_vars' => array('title' => ((is_array($_tmp='GENERAL_ADMIN_TITLE')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['readonly']): ?>
    <?php $this->assign('readonly', 'readonly disabled'); ?>
<?php else: ?>
    <?php $this->assign('readonly', ""); ?>
<?php endif; ?>

<form name="transfer" id="transfer" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

    <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
    <input type="hidden" name="cl" value="payment_main">
</form>


<b><?php echo smarty_function_oxmultilang(array('ident' => 'PRICEALARM_MAIL_OXIDPRICEALARM'), $this);?>
</b>
<br><br>
<?php echo smarty_function_oxmultilang(array('ident' => 'PRICEALARM_MAIL_OPENEMAILS1'), $this);?>
 <?php echo $this->_tpl_vars['iAllCnt']; ?>
 <?php echo smarty_function_oxmultilang(array('ident' => 'PRICEALARM_MAIL_OPENEMAILS2'), $this);?>

<br><br>
<?php if ($this->_tpl_vars['iAllCnt'] && ! $this->_tpl_vars['readonly']): ?>
<?php echo smarty_function_oxmultilang(array('ident' => 'PRICEALARM_MAIL_SENDPRICEALARMEMAIL1'), $this);?>
 <a href="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
&cl=pricealarm_send" class="edittext" target="list" <?php if ($this->_tpl_vars['readonly']): ?>onclick="JavaScript:return false;"<?php endif; ?>><b><?php echo smarty_function_oxmultilang(array('ident' => 'PRICEALARM_MAIL_SENDPRICEALARMEMAIL2'), $this);?>
</b></a>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bottomnaviitem.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bottomitem.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>