<?php /* Smarty version 2.6.28, created on 2017-02-02 13:24:29
         compiled from pricealarm_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'pricealarm_list.tpl', 1, false),array('modifier', 'oxformdate', 'pricealarm_list.tpl', 108, false),array('modifier', 'oxaddslashes', 'pricealarm_list.tpl', 137, false),array('function', 'oxmultilang', 'pricealarm_list.tpl', 74, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headitem.tpl", 'smarty_include_vars' => array('title' => ((is_array($_tmp='GENERAL_ADMIN_TITLE')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)),'box' => 'list')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $this->assign('where', $this->_tpl_vars['oView']->getListFilter()); ?>


  <?php if ($this->_tpl_vars['shopid'] != 'oxbaseshop'): ?>
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
$this->_smarty_include(array('smarty_include_tpl_file' => "_formparams.tpl", 'smarty_include_vars' => array('cl' => 'pricealarm_list','lstrt' => $this->_tpl_vars['lstrt'],'actedit' => $this->_tpl_vars['actedit'],'oxid' => $this->_tpl_vars['oxid'],'fnc' => "",'language' => $this->_tpl_vars['actlang'],'editlanguage' => $this->_tpl_vars['actlang'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellspacing="0" cellpadding="0" border="0" width="100%">
<colgroup>
    
        <col width="15%">
        <col width="15%">
        <col width="10%">
        <col width="10%">
        <col width="30%">
        <col width="10%">
        <col width="8%">
        <col width="2%">
    
</colgroup>
<tr class="listitem">
    
        <td valign="top" class="listfilter first" height="20">
            <div class="r1"><div class="b1">
            <input class="listedit" type="text" size="20" maxlength="128" name="where[oxpricealarm][oxemail]" value="<?php echo $this->_tpl_vars['where']['oxpricealarm']['oxemail']; ?>
">
            </div></div>
        </td>
        <td valign="top" class="listfilter" height="20">
            <div class="r1"><div class="b1">
            <input class="listedit" type="text" size="20" maxlength="128" name="where[oxuser][oxlname]" value="<?php echo $this->_tpl_vars['where']['oxuser']['oxlname']; ?>
">
            </div></div>
        </td>
        <td valign="top" class="listfilter" height="20">
            <div class="r1"><div class="b1">
            <input class="listedit" type="text" size="20" maxlength="128" name="where[oxpricealarm][oxinsert]" value="<?php echo $this->_tpl_vars['where']['oxpricealarm']['oxinsert']; ?>
">
            </div></div>
        </td>
        <td valign="top" class="listfilter" height="20">
            <div class="r1"><div class="b1">
            <input class="listedit" type="text" size="20" maxlength="128" name="where[oxpricealarm][oxsended]" value="<?php echo $this->_tpl_vars['where']['oxpricealarm']['oxsended']; ?>
">
            </div></div>
        </td>
        <td valign="top" class="listfilter" height="20">
            <div class="r1"><div class="b1">
            <input class="listedit" type="text" size="20" maxlength="128" name="where[oxarticles][oxtitle]" value="<?php echo $this->_tpl_vars['where']['oxarticles']['oxtitle']; ?>
">
            </div></div>
        </td>
        <td valign="top" class="listfilter" height="20">
            <div class="r1"><div class="b1">
            <input class="listedit" type="text" size="5" maxlength="128" name="where[oxpricealarm][oxprice]" value="<?php echo $this->_tpl_vars['where']['oxpricealarm']['oxprice']; ?>
">
            </div></div>
        </td>
        <td valign="top" class="listfilter" height="20" <?php if (count ( $this->_tpl_vars['mylist'] ) > 0): ?>colspan="2"<?php endif; ?>>
            <div class="r1"><div class="b1">
            <div class="find"><input class="listedit" type="submit" name="submitit" value="<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_SEARCH'), $this);?>
"></div>
            <input class="listedit" type="text" size="5" maxlength="128" name="where[oxarticles][oxprice]" value="<?php echo $this->_tpl_vars['where']['oxarticles']['oxprice']; ?>
">
            </div></div>
        </td>
    
</tr>
<tr>
    
        <td class="listheader first" height="15">&nbsp;<a href="Javascript:top.oxid.admin.setSorting( document.search, 'oxpricealarm', 'oxemail', 'asc');document.search.submit();" class="listheader"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_EMAIL'), $this);?>
</a></td>
        <td class="listheader" height="15"><a href="Javascript:top.oxid.admin.setSorting( document.search, 'oxuser', 'oxlname', 'asc');top.oxid.admin.setSorting( document.search, 'oxuser', 'oxfname', 'asc');document.search.submit();" class="listheader"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_NAME'), $this);?>
</a></td>
        <td class="listheader" height="15"><a href="Javascript:top.oxid.admin.setSorting( document.search, 'oxpricealarm', 'oxinsert', 'asc');document.search.submit();" class="listheader"><?php echo smarty_function_oxmultilang(array('ident' => 'PRICEALARM_LIST_CONFIRMDATE'), $this);?>
</a></td>
        <td class="listheader" height="15"><a href="Javascript:top.oxid.admin.setSorting( document.search, 'oxpricealarm', 'oxsended', 'asc');document.search.submit();" class="listheader"><?php echo smarty_function_oxmultilang(array('ident' => 'PRICEALARM_LIST_SENDDATE'), $this);?>
</a></td>
        <td class="listheader" height="15"><a href="Javascript:top.oxid.admin.setSorting( document.search, 'oxarticles', 'oxtitle', 'asc');document.search.submit();" class="listheader"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_ITEM'), $this);?>
</a></td>
        <td class="listheader" height="15"><a href="Javascript:top.oxid.admin.setSorting( document.search, 'oxpricealarm', 'oxprice', 'asc');document.search.submit();" class="listheader"><?php echo smarty_function_oxmultilang(array('ident' => 'PRICEALARM_LIST_CUSTOMERSPRICE'), $this);?>
</a></td>
        <td class="listheader" height="15"  <?php if (count ( $this->_tpl_vars['mylist'] ) > 0): ?>colspan="2"<?php endif; ?>>&nbsp;<a href="Javascript:top.oxid.admin.setSorting( document.search, 'oxarticles', 'oxprice', 'asc');document.search.submit();" class="listheader"><?php echo smarty_function_oxmultilang(array('ident' => 'PRICEALARM_LIST_STANDARTPRICE'), $this);?>
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
" height="15"><div class="listitemfloating"><a href="Javascript:top.oxid.admin.editThis('<?php echo $this->_tpl_vars['listitem']->oxpricealarm__oxid->value; ?>
');" class="<?php if ($this->_tpl_vars['listitem']->getPriceAlarmStatus() == 1): ?>listitemred<?php elseif ($this->_tpl_vars['listitem']->getPriceAlarmStatus() == 2): ?>listitemgreen<?php else: ?><?php echo $this->_tpl_vars['listclass']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['listitem']->oxpricealarm__oxemail->value; ?>
</a></div></td>
        <td valign="top" class="<?php echo $this->_tpl_vars['listclass']; ?>
" height="15"><div class="listitemfloating"><a href="Javascript:top.oxid.admin.editThis('<?php echo $this->_tpl_vars['listitem']->oxpricealarm__oxid->value; ?>
');" class="<?php if ($this->_tpl_vars['listitem']->getPriceAlarmStatus() == 1): ?>listitemred<?php elseif ($this->_tpl_vars['listitem']->getPriceAlarmStatus() == 2): ?>listitemgreen<?php else: ?><?php echo $this->_tpl_vars['listclass']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['listitem']->oxpricealarm__userlname->value; ?>
 <?php echo $this->_tpl_vars['listitem']->oxpricealarm__userfname->value; ?>
</a></div></td>
        <td valign="top" class="<?php echo $this->_tpl_vars['listclass']; ?>
" height="15"><div class="listitemfloating"><a href="Javascript:top.oxid.admin.editThis('<?php echo $this->_tpl_vars['listitem']->oxpricealarm__oxid->value; ?>
');" class="<?php if ($this->_tpl_vars['listitem']->getPriceAlarmStatus() == 1): ?>listitemred<?php elseif ($this->_tpl_vars['listitem']->getPriceAlarmStatus() == 2): ?>listitemgreen<?php else: ?><?php echo $this->_tpl_vars['listclass']; ?>
<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['listitem']->oxpricealarm__oxinsert)) ? $this->_run_mod_handler('oxformdate', true, $_tmp) : smarty_modifier_oxformdate($_tmp)); ?>
</a></div></td>
        <td valign="top" class="<?php echo $this->_tpl_vars['listclass']; ?>
" height="15"><div class="listitemfloating"><a href="Javascript:top.oxid.admin.editThis('<?php echo $this->_tpl_vars['listitem']->oxpricealarm__oxid->value; ?>
');" class="<?php if ($this->_tpl_vars['listitem']->getPriceAlarmStatus() == 1): ?>listitemred<?php elseif ($this->_tpl_vars['listitem']->getPriceAlarmStatus() == 2): ?>listitemgreen<?php else: ?><?php echo $this->_tpl_vars['listclass']; ?>
<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['listitem']->oxpricealarm__oxsended)) ? $this->_run_mod_handler('oxformdate', true, $_tmp) : smarty_modifier_oxformdate($_tmp)); ?>
</a></div></td>
        <td valign="top" class="<?php echo $this->_tpl_vars['listclass']; ?>
" height="15"><div class="listitemfloating"><a href="Javascript:top.oxid.admin.editThis('<?php echo $this->_tpl_vars['listitem']->oxpricealarm__oxid->value; ?>
');" class="<?php if ($this->_tpl_vars['listitem']->getPriceAlarmStatus() == 1): ?>listitemred<?php elseif ($this->_tpl_vars['listitem']->getPriceAlarmStatus() == 2): ?>listitemgreen<?php else: ?><?php echo $this->_tpl_vars['listclass']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['listitem']->getTitle(); ?>
</a></div></td>
        <td valign="top" class="<?php echo $this->_tpl_vars['listclass']; ?>
" height="15"><div class="listitemfloating"><a href="Javascript:top.oxid.admin.editThis('<?php echo $this->_tpl_vars['listitem']->oxpricealarm__oxid->value; ?>
');" class="<?php if ($this->_tpl_vars['listitem']->getPriceAlarmStatus() == 1): ?>listitemred<?php elseif ($this->_tpl_vars['listitem']->getPriceAlarmStatus() == 2): ?>listitemgreen<?php else: ?><?php echo $this->_tpl_vars['listclass']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['listitem']->getFProposedPrice(); ?>
&nbsp;<?php echo $this->_tpl_vars['listitem']->oxpricealarm__oxcurrency->value; ?>
</a></div></td>
        <td valign="top" class="<?php echo $this->_tpl_vars['listclass']; ?>
" height="15"><div class="listitemfloating"><a href="Javascript:top.oxid.admin.editThis('<?php echo $this->_tpl_vars['listitem']->oxpricealarm__oxid->value; ?>
');" class="<?php if ($this->_tpl_vars['listitem']->getPriceAlarmStatus() == 1): ?>listitemred<?php elseif ($this->_tpl_vars['listitem']->getPriceAlarmStatus() == 2): ?>listitemgreen<?php else: ?><?php echo $this->_tpl_vars['listclass']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['listitem']->getFPrice(); ?>
&nbsp;<?php echo $this->_tpl_vars['listitem']->oxpricealarm__oxcurrency->value; ?>
</a></div></td>
        <td class="<?php echo $this->_tpl_vars['listclass']; ?>
">
          <?php if (! $this->_tpl_vars['listitem']->isOx()): ?>
            <?php if ($this->_tpl_vars['readonly'] == ""): ?>
              <a href="Javascript:top.oxid.admin.deleteThis('<?php echo $this->_tpl_vars['listitem']->oxpricealarm__oxid->value; ?>
');" class="delete" id="del.<?php echo $this->_tpl_vars['_cnt']; ?>
" <?php $_smarty_tpl_vars = $this->_tpl_vars;
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
$this->_smarty_include(array('smarty_include_tpl_file' => "pagenavisnippet.tpl", 'smarty_include_vars' => array('colspan' => '8')));
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
    parent.parent.sMenuItem    = "<?php echo smarty_function_oxmultilang(array('ident' => 'PRICEALARM_LIST_MENUITEM'), $this);?>
";
    parent.parent.sMenuSubItem = "<?php echo smarty_function_oxmultilang(array('ident' => 'PRICEALARM_LIST_MENUSUBITEM'), $this);?>
";
    parent.parent.sWorkArea    = "<?php echo $this->_tpl_vars['_act']; ?>
";
    parent.parent.setTitle();
}
</script>
</body>
</html>