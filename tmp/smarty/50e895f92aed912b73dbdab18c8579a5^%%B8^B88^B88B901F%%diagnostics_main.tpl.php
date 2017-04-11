<?php /* Smarty version 2.6.28, created on 2017-02-02 13:26:18
         compiled from diagnostics_main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'diagnostics_main.tpl', 2, false),array('modifier', 'oxmultilangassign', 'diagnostics_main.tpl', 38, false),array('modifier', 'cat', 'diagnostics_main.tpl', 78, false),array('modifier', 'oxupper', 'diagnostics_main.tpl', 78, false),)), $this); ?>

<h1><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_HOME'), $this);?>
</h1>

<?php if ($this->_tpl_vars['runAnalysis']): ?>

<span><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_GOTO'), $this);?>
:</span>
	<ul>
		<li><a href="#shopbasics"><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_BASICS'), $this);?>
</a></li>
		<?php if ($this->_tpl_vars['oxdiag_frm_modules']): ?>
			<li><a href="#modules"><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_MODULES'), $this);?>
</a></li>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['oxdiag_frm_health']): ?>
			<li><a href="#health"><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_HEALTH'), $this);?>
</a></li>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['oxdiag_frm_php']): ?>
			<li><a href="#phpinfo"><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_PHPINFO'), $this);?>
</a>
			<li><a href="#phpext"><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_PHPINFO_EXTENSIONS'), $this);?>
</a></li>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['oxdiag_frm_server']): ?>
			<li><a href="#serverinfo"><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_SERVERINFO'), $this);?>
</a></li>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['oxdiag_frm_chkvers']): ?>
			<li><a href="#chkversion"><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_CHKVERSION'), $this);?>
</a></li>
		<?php endif; ?>
	</ul>
<hr>



<h3><a id="shopbasics"></a><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_BASICS'), $this);?>
</h3>
<table border="0" cellpadding="3">
	<tr class="h">
	    <th><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_SERVERINFO_COMPONENT'), $this);?>
</th>
	    <th><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_PHPINFO_VALUE'), $this);?>
</th>
	</tr>
	<?php $_from = $this->_tpl_vars['aShopDetails']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['param'] => $this->_tpl_vars['value']):
?>
		<?php if ($this->_tpl_vars['value'] == ''): ?>
            <?php $this->assign('value', ((is_array($_tmp='OXDIAG_PHPINFO_OFF')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp))); ?>
		<?php endif; ?>
		<tr>
		<td><?php echo $this->_tpl_vars['param']; ?>
:</td><td><?php echo $this->_tpl_vars['value']; ?>
</td>
		</tr>
	<?php endforeach; endif; unset($_from); ?>
</table>



<?php if ($this->_tpl_vars['oxdiag_frm_modules']): ?>
	<h3><a id="modules"></a><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_MODULES'), $this);?>
</h3>
	<table border="0" cellpadding="3">
		<tr>
		    <th><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_MODULES_STATE'), $this);?>
</th>
		    <th><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_MODULES_NAME'), $this);?>
</th>
		    <th><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_MODULES_ID'), $this);?>
</th>
		    <th><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_MODULES_VERSION'), $this);?>
</th>
		    <th><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_MODULES_VENDOR'), $this);?>
</th>
		</tr>
		
		<?php $_from = $this->_tpl_vars['mylist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['listitem']):
?>
		<tr>
			<td><?php if ($this->_tpl_vars['listitem']->isActive()): ?>A<?php else: ?>x<?php endif; ?></td>
			<td><?php echo $this->_tpl_vars['listitem']->getTitle(); ?>
</td>
			<td><?php echo $this->_tpl_vars['listitem']->getId(); ?>
</td>
			<td><?php echo $this->_tpl_vars['listitem']->getInfo('version'); ?>
</td>
			<td><?php echo $this->_tpl_vars['listitem']->getInfo('author'); ?>
</td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
	</table>
<?php endif; ?>



<?php if ($this->_tpl_vars['oxdiag_frm_health']): ?>
	<h3><a id="health"></a><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_HEALTH'), $this);?>
</h3>
	<table>
	    <?php $_from = $this->_tpl_vars['aInfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sGroupName'] => $this->_tpl_vars['aModules']):
?>
	    <tr>
	    	<th colspan="2"><?php echo smarty_function_oxmultilang(array('ident' => ((is_array($_tmp=((is_array($_tmp='SYSREQ_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['sGroupName']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['sGroupName'])))) ? $this->_run_mod_handler('oxupper', true, $_tmp) : smarty_modifier_oxupper($_tmp))), $this);?>
</th>
	    </tr>
	        <?php $_from = $this->_tpl_vars['aModules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sModule'] => $this->_tpl_vars['iModuleState']):
?>
	            <tr>
	                <td>
						<?php if ($this->_tpl_vars['iModuleState'] == 2): ?>
                            <?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_HEALTH_OK'), $this);?>

						<?php elseif ($this->_tpl_vars['iModuleState'] == 1): ?>
                            <?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_HEALTH_MIN'), $this);?>

						<?php else: ?>
							<?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_HEALTH_FAIL'), $this);?>

						<?php endif; ?>
					</td>
					
					<td>                
		                <?php if ($this->_tpl_vars['sModule'] == 'memory_limit'): ?>
							<?php echo smarty_function_oxmultilang(array('ident' => 'SYSREQ_MEMORY_LIMIT'), $this);?>

		                <?php else: ?>
							<?php echo smarty_function_oxmultilang(array('ident' => ((is_array($_tmp=((is_array($_tmp='SYSREQ_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['sModule']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['sModule'])))) ? $this->_run_mod_handler('oxupper', true, $_tmp) : smarty_modifier_oxupper($_tmp))), $this);?>

		                <?php endif; ?>
					</td>
	            </tr>
	        <?php endforeach; endif; unset($_from); ?>
	    <?php endforeach; endif; unset($_from); ?>
	</table>
<?php endif; ?>



<?php if ($this->_tpl_vars['oxdiag_frm_php']): ?>
	<h3><a id="phpinfo"></a><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_PHPINFO'), $this);?>
</h3>
	<table border="0" cellpadding="3">
		<tr class="h">
		    <th><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_PHPINFO_PARAM'), $this);?>
</th>
		    <th><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_PHPINFO_VALUE'), $this);?>
</th>
		</tr>
		<?php $_from = $this->_tpl_vars['aPhpConfigparams']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['param'] => $this->_tpl_vars['value']):
?>
			<?php if ($this->_tpl_vars['value'] == ''): ?>
                <?php $this->assign('value', ((is_array($_tmp='OXDIAG_PHPINFO_OFF')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp))); ?>
			<?php endif; ?>
			<tr>
			<td><?php echo $this->_tpl_vars['param']; ?>
:</td><td><?php echo $this->_tpl_vars['value']; ?>
</td>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
	</table>
	
	<h3><a id="phpext"></a><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_PHPINFO_EXTENSIONS'), $this);?>
</h3>
	<?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_PHPINFO_ZENDEX'), $this);?>
: <?php echo $this->_tpl_vars['sPhpDecoder']; ?>

<?php endif; ?>



<?php if ($this->_tpl_vars['oxdiag_frm_server']): ?>
	<h3><a id="serverinfo"></a><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_SERVERINFO'), $this);?>
</h3>
        <p><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_SRVINF_NOTE'), $this);?>
</p>
	<?php if (! $this->_tpl_vars['isExecAllowed']): ?>
		<p><span style="border-bottom:1px solid #f00;"><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_SRVINF_NOTALL'), $this);?>
</span></p>
	<?php endif; ?>
	
	<table border="0" cellpadding="3">
		<tr class="h">
		    <th><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_SERVERINFO_COMPONENT'), $this);?>
</th>
		    <th><?php echo smarty_function_oxmultilang(array('ident' => 'OXDIAG_MODULES_VERSION'), $this);?>
</th>
		</tr>
		<?php $_from = $this->_tpl_vars['aServerInfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['param'] => $this->_tpl_vars['value']):
?>
			<?php if ($this->_tpl_vars['value'] == ''): ?>
                <?php $this->assign('value', ((is_array($_tmp='OXDIAG_SERVERINFO_NOT_DETECTED')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp))); ?>
			<?php endif; ?>
			<tr>
			<td><?php echo $this->_tpl_vars['param']; ?>
:</td><td><?php echo $this->_tpl_vars['value']; ?>
</td>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
	</table>
<?php endif; ?>

<?php endif; ?>


