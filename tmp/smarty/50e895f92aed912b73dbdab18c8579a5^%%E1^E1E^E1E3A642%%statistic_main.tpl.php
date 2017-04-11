<?php /* Smarty version 2.6.28, created on 2017-02-02 13:38:03
         compiled from statistic_main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'statistic_main.tpl', 1, false),array('function', 'oxmultilang', 'statistic_main.tpl', 20, false),array('function', 'oxinputhelp', 'statistic_main.tpl', 22, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headitem.tpl", 'smarty_include_vars' => array('title' => ((is_array($_tmp='GENERAL_ADMIN_TITLE')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form name="transfer" id="transfer" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

    <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
    <input type="hidden" name="cl" value="statistic_main">
</form>

<form name="myedit" id="myedit" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post" target="edit">
<?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

<input type="hidden" name="cl" value="statistic_main">
<input type="hidden" name="fnc" value="save">
<input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
<input type="hidden" name="editval[oxstatistics__oxid]" value="<?php echo $this->_tpl_vars['oxid']; ?>
">

<table cellspacing="0" cellpadding="0" border="0" width="100%">
<tr>
    <td class="edittext" valign="top">
        
            <?php echo smarty_function_oxmultilang(array('ident' => 'STASTISTIC_MAIN_SAVEUNDER'), $this);?>
<br>
            <input type="text" class="editinput" size="32" maxlength="<?php echo $this->_tpl_vars['edit']->oxstatistics__oxtitle->fldmax_length; ?>
" name="editval[oxstatistics__oxtitle]" value="<?php echo $this->_tpl_vars['edit']->oxstatistics__oxtitle->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
            <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_STASTISTIC_MAIN_SAVEUNDER'), $this);?>

            <br>
        
        <br><input type="submit" class="edittext" id="_savereportsbtn" name="save" value="<?php echo smarty_function_oxmultilang(array('ident' => 'STASTISTIC_MAIN_SAVE'), $this);?>
" onClick="Javascript:document.myedit.target='edit';document.myedit.fnc.value='save'"><br>
    </td>
    <td valign="top" class="edittext">
        <?php if ($this->_tpl_vars['oxid'] && $this->_tpl_vars['oxid'] != '-1'): ?>
        <input <?php echo $this->_tpl_vars['readonly']; ?>
 type="button" value="<?php echo smarty_function_oxmultilang(array('ident' => 'STASTISTIC_MAIN_ASSIGNREPORT'), $this);?>
" class="edittext" onclick="JavaScript:showDialog('&cl=statistic_main&aoc=1&oxid=<?php echo $this->_tpl_vars['oxid']; ?>
');">
        <?php endif; ?>
    </td>
    <td valign="top" class="edittext">
        <table cellspacing="0" cellpadding="0" border="0">
        <tr>
          <td class="edittext">
            
                <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_INTIME'), $this);?>

                <select name="timeframe" class="editinput" <?php echo $this->_tpl_vars['readonly']; ?>
>
                <option value="7">1 <?php echo smarty_function_oxmultilang(array('ident' => 'STASTISTIC_MAIN_WEEK'), $this);?>
</option>
                <option value="14">2 <?php echo smarty_function_oxmultilang(array('ident' => 'STASTISTIC_MAIN_WEEKS'), $this);?>
</option>
                <option value="31">1 <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_MONTH'), $this);?>
</option>
                <option value="62">2 <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_MONTHS'), $this);?>
</option>
                <option value="186">6 <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_MONTHS'), $this);?>
</option>
                </select>
                <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_GENERAL_INTIME'), $this);?>

                <br>
                <br>
                <?php echo smarty_function_oxmultilang(array('ident' => 'STASTISTIC_MAIN_ORDERFROM'), $this);?>
 <input type="text" name="time_from" value="" size="12" class="editinput"> <?php echo smarty_function_oxmultilang(array('ident' => 'STASTISTIC_MAIN_TILL'), $this);?>
 <input type="text" name="time_to" value="" size="12" class="editinput"><br>
                <br>
            
            <input type="submit" class="edittext" id="_genreportsbtn" name="save" value="<?php echo smarty_function_oxmultilang(array('ident' => 'STASTISTIC_MAIN_GENERATE'), $this);?>
" onClick="Javascript:document.myedit.target='_new';document.myedit.fnc.value='generate'" <?php if (! $this->_tpl_vars['ireports']): ?>readonly disabled<?php endif; ?>>
            <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_STASTISTIC_MAIN_ORDERFROM'), $this);?>

            <br>
          </td>
        </tr>
        </table>
    </td>
    </tr>

</table>

</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bottomnaviitem.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bottomitem.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>