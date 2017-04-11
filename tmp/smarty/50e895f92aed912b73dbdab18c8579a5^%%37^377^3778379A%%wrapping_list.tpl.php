<?php /* Smarty version 2.6.28, created on 2017-02-02 13:25:14
         compiled from wrapping_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'wrapping_list.tpl', 1, false),array('modifier', 'oxaddslashes', 'wrapping_list.tpl', 115, false),array('function', 'oxmultilang', 'wrapping_list.tpl', 56, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headitem.tpl", 'smarty_include_vars' => array('title' => ((is_array($_tmp='WRAPPING_LIST_TITLE')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)),'box' => 'list')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $this->assign('where', $this->_tpl_vars['oView']->getListFilter()); ?>

<?php if ($this->_tpl_vars['readonly']): ?>
    <?php $this->assign('readonly', 'readonly disabled'); ?>
<?php else: ?>
    <?php $this->assign('readonly', ""); ?>
<?php endif; ?>

<script type="text/javascript">
<!--
window.onload = function ()
{
    top.reloadEditFrame();
    <?php if ($this->_tpl_vars['updatelist'] == 1): ?>
        top.oxid.admin.updateList('<?php echo $this->_tpl_vars['oxid']; ?>
');
    <?php endif; ?>
}
//-->
</script>

<div id="liste">
<form name="search" id="search" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_formparams.tpl", 'smarty_include_vars' => array('cl' => 'wrapping_list','lstrt' => $this->_tpl_vars['lstrt'],'actedit' => $this->_tpl_vars['actedit'],'oxid' => $this->_tpl_vars['oxid'],'fnc' => "",'language' => $this->_tpl_vars['actlang'],'editlanguage' => $this->_tpl_vars['actlang'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellspacing="0" cellpadding="0" border="0" width="100%">
<colgroup>
    
    	<col width="3%">
        <col width="27%">
        <col width="29%">
        <col width="29%">
        <col width="2%">
    
</colgroup>
<tr class="listfilter">
    
    	 <td valign="top" class="listfilter first" align="right">
        	<div class="r1"><div class="b1">&nbsp;</div></div>
        </td>
        <td valign="top" class="listfilter" height="20">
            <div class="r1"><div class="b1">&nbsp;</div></div>
        </td>
        <td valign="top" class="listfilter" height="20">
            <div class="r1"><div class="b1">
            <input class="listedit" type="text" size="20" maxlength="128" name="where[oxwrapping][oxname]" value="<?php echo $this->_tpl_vars['where']['oxwrapping']['oxname']; ?>
">
            </div></div>
        </td>
        <td valign="top" class="listfilter" colspan="2">
            <div class="r1"><div class="b1">
            <div class="find">
                <select name="changelang" class="editinput" onChange="Javascript:top.oxid.admin.changeLanguage();">
                <?php $_from = $this->_tpl_vars['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lang']):
?>
                <option value="<?php echo $this->_tpl_vars['lang']->id; ?>
" <?php if ($this->_tpl_vars['lang']->selected): ?>SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['lang']->name; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
                <input class="listedit" type="submit" name="submitit" value="<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_SEARCH'), $this);?>
">
            </div>
            <input class="listedit" type="text" size="20" maxlength="128" name="where[oxwrapping][oxpic]" value="<?php echo $this->_tpl_vars['where']['oxwrapping']['oxpic']; ?>
">
            </div></div>
        </td>
    
</tr>
<tr>
    
    	<td class="listheader first" height="15" width="30" align="center"><a href="Javascript:top.oxid.admin.setSorting( document.search, 'oxwrapping', 'oxactive', 'asc');document.search.submit();" class="listheader"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_ACTIVTITLE'), $this);?>
</a></td>
        <td class="listheader" height="15">&nbsp;<a href="Javascript:top.oxid.admin.setSorting( document.search, 'oxwrapping', 'oxtype', 'asc');document.search.submit();" class="listheader"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_TYPE'), $this);?>
</a></td>
        <td class="listheader"><a href="Javascript:top.oxid.admin.setSorting( document.search, 'oxwrapping', 'oxname', 'asc');document.search.submit();" class="listheader"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_NAME'), $this);?>
</a></td>
        <td class="listheader" colspan="2"><a href="Javascript:top.oxid.admin.setSorting( document.search, 'oxwrapping', 'oxpic', 'asc');document.search.submit();" class="listheader"><?php echo smarty_function_oxmultilang(array('ident' => 'WRAPPING_LIST_PICTURE'), $this);?>
</a></td>
    
</tr>

<?php $this->assign('blWhite', ""); ?>
<?php $this->assign('_cnt', 0); ?>
<?php $_from = $this->_tpl_vars['mylist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['listitem']):
?>
    <?php $this->assign('_cnt', $this->_tpl_vars['_cnt']+1); ?>
    <tr id="row.<?php echo $this->_tpl_vars['_cnt']; ?>
">
    
        <?php if ($this->_tpl_vars['listitem']->blacklist == 1): ?>
            <?php $this->assign('listclass', 'listitem3'); ?>
        <?php else: ?>
            <?php $this->assign('listclass', "listitem".($this->_tpl_vars['blWhite'])); ?>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['listitem']->getId() == $this->_tpl_vars['oxid']): ?>
            <?php $this->assign('listclass', 'listitem4'); ?>
        <?php endif; ?>
        <td valign="top" class="<?php echo $this->_tpl_vars['listclass']; ?>
<?php if ($this->_tpl_vars['listitem']->oxwrapping__oxactive->value == 1): ?> active<?php endif; ?>" height="15"><div class="listitemfloating">&nbsp</a></div></td>
        <td valign="top" class="<?php echo $this->_tpl_vars['listclass']; ?>
" height="15"><div class="listitemfloating">&nbsp;<a href="Javascript:top.oxid.admin.editThis('<?php echo $this->_tpl_vars['listitem']->oxwrapping__oxid->value; ?>
');" class="<?php echo $this->_tpl_vars['listclass']; ?>
"><?php if ($this->_tpl_vars['listitem']->oxwrapping__oxtype->value == 'WRAP'): ?><?php echo smarty_function_oxmultilang(array('ident' => 'WRAPPING_LIST_PRESENTPACKUNG'), $this);?>
<?php elseif ($this->_tpl_vars['listitem']->oxwrapping__oxtype->value == 'CARD'): ?><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_CARD'), $this);?>
<?php endif; ?></a></div></td>
        <td valign="top" class="<?php echo $this->_tpl_vars['listclass']; ?>
"><div class="listitemfloating"><a href="Javascript:top.oxid.admin.editThis('<?php echo $this->_tpl_vars['listitem']->oxwrapping__oxid->value; ?>
');" class="<?php echo $this->_tpl_vars['listclass']; ?>
"><?php if (! $this->_tpl_vars['listitem']->oxwrapping__oxname->value): ?>-<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_NONAME'), $this);?>
-<?php else: ?><?php echo $this->_tpl_vars['listitem']->oxwrapping__oxname->value; ?>
<?php endif; ?></a></div></td>
        <td valign="top" class="<?php echo $this->_tpl_vars['listclass']; ?>
"><div class="listitemfloating"><a href="Javascript:top.oxid.admin.editThis('<?php echo $this->_tpl_vars['listitem']->oxwrapping__oxid->value; ?>
');" class="<?php echo $this->_tpl_vars['listclass']; ?>
"><?php echo $this->_tpl_vars['listitem']->oxwrapping__oxpic->value; ?>
</a></div></td>

        <td class="<?php echo $this->_tpl_vars['listclass']; ?>
">
            <?php if (! $this->_tpl_vars['readonly']): ?>
                <?php if (! $this->_tpl_vars['listitem']->isOx()): ?>
                <a href="Javascript:top.oxid.admin.deleteThis('<?php echo $this->_tpl_vars['listitem']->oxwrapping__oxid->value; ?>
');" class="delete" id="del.<?php echo $this->_tpl_vars['_cnt']; ?>
" title="" <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "help.tpl", 'smarty_include_vars' => array('helpid' => 'item_delete')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>></a>
                <?php endif; ?>
            <?php endif; ?>
        </td>
    
</tr>
<?php if ($this->_tpl_vars['blWhite'] == '2'): ?>
<?php $this->assign('blWhite', ""); ?>
<?php else: ?>
<?php $this->assign('blWhite', '2'); ?>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "pagenavisnippet.tpl", 'smarty_include_vars' => array('colspan' => '5')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</table>
</form>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "pagetabsnippet.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
if (parent.parent)
{   parent.parent.sShopTitle   = "<?php echo ((is_array($_tmp=$this->_tpl_vars['actshopobj']->oxshops__oxname->getRawValue())) ? $this->_run_mod_handler('oxaddslashes', true, $_tmp) : smarty_modifier_oxaddslashes($_tmp)); ?>
";
    parent.parent.sMenuItem    = "<?php echo smarty_function_oxmultilang(array('ident' => 'WRAPPING_LIST_MENUITEM'), $this);?>
";
    parent.parent.sMenuSubItem = "<?php echo smarty_function_oxmultilang(array('ident' => 'WRAPPING_LIST_MENUSUBITEM'), $this);?>
";
    parent.parent.sWorkArea    = "<?php echo $this->_tpl_vars['_act']; ?>
";
    parent.parent.setTitle();
}
</script>
</body>
</html>