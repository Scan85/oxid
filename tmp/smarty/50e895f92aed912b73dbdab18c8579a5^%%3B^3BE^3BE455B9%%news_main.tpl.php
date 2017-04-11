<?php /* Smarty version 2.6.28, created on 2017-02-02 13:24:26
         compiled from news_main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'news_main.tpl', 1, false),array('modifier', 'oxformdate', 'news_main.tpl', 45, false),array('function', 'oxmultilang', 'news_main.tpl', 33, false),array('function', 'oxinputhelp', 'news_main.tpl', 37, false),)), $this); ?>
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
    <input type="hidden" name="cl" value="news_main">
    <input type="hidden" name="editlanguage" value="<?php echo $this->_tpl_vars['editlanguage']; ?>
">
</form>


<form name="myedit" id="myedit" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
<?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

<input type="hidden" name="cl" value="news_main">
<input type="hidden" name="fnc" value="">
<input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
<input type="hidden" name="voxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
<input type="hidden" name="editval[oxnews__oxid]" value="<?php echo $this->_tpl_vars['oxid']; ?>
">

<table cellspacing="0" cellpadding="0" border="0" width="98%">
<tr>
    <td valign="top" class="edittext">

        <table cellspacing="0" cellpadding="0" border="0">
        
            <tr>
                <td class="edittext" width="90">
                <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_ALWAYS_ACTIVE'), $this);?>

                </td>
                <td class="edittext">
                <input class="edittext" type="checkbox" name="editval[oxnews__oxactive]" value='1' <?php if ($this->_tpl_vars['edit']->oxnews__oxactive->value == 1): ?>checked<?php endif; ?> <?php echo $this->_tpl_vars['readonly']; ?>
>
                <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_GENERAL_ACTIVE'), $this);?>

                </td>
            </tr>
            <tr>
                <td class="edittext">
                <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_ACTIVFROMTILL'), $this);?>

                </td>
                <td class="edittext">
                <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_FROM'), $this);?>
<input type="text" class="editinput" size="30" name="editval[oxnews__oxactivefrom]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['edit']->oxnews__oxactivefrom)) ? $this->_run_mod_handler('oxformdate', true, $_tmp) : smarty_modifier_oxformdate($_tmp)); ?>
" <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "help.tpl", 'smarty_include_vars' => array('helpid' => 'article_vonbis')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> <?php echo $this->_tpl_vars['readonly']; ?>
><br>
                <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_TILL'), $this);?>
 <input type="text" class="editinput" size="30" name="editval[oxnews__oxactiveto]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['edit']->oxnews__oxactiveto)) ? $this->_run_mod_handler('oxformdate', true, $_tmp) : smarty_modifier_oxformdate($_tmp)); ?>
" <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "help.tpl", 'smarty_include_vars' => array('helpid' => 'article_vonbis')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> <?php echo $this->_tpl_vars['readonly']; ?>
>
                <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_GENERAL_ACTIVFROMTILL'), $this);?>

                </td>
            </tr>
            <tr>
                <td class="edittext">
                <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_DATE'), $this);?>

                </td>
                <td class="edittext">
                <input type="text" class="editinput" size="15" maxlength="<?php echo $this->_tpl_vars['edit']->oxnews__oxdate->fldmax_length; ?>
" name="editval[oxnews__oxdate]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['edit']->oxnews__oxdate)) ? $this->_run_mod_handler('oxformdate', true, $_tmp) : smarty_modifier_oxformdate($_tmp)); ?>
" <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "help.tpl", 'smarty_include_vars' => array('helpid' => 'article_delivery')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> <?php echo $this->_tpl_vars['readonly']; ?>
>
                <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_GENERAL_DATE'), $this);?>

                </td>
            </tr>
            <tr>
                <td class="edittext">
                <?php echo smarty_function_oxmultilang(array('ident' => 'NEWS_MAIN_SHORTDESC'), $this);?>

                </td>
                <td class="edittext">
                <input type="text" class="editinput" size="40" maxlength="<?php echo $this->_tpl_vars['edit']->oxnews__oxshortdesc->fldmax_length; ?>
" name="editval[oxnews__oxshortdesc]" value="<?php echo $this->_tpl_vars['edit']->oxnews__oxshortdesc->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
                <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_NEWS_MAIN_SHORTDESC'), $this);?>

                </td>
            </tr>
        
        <tr>
            <td class="edittext">
            </td>
            <td class="edittext"><br>
                 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "language_edit.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </td>
        </tr>

        <tr>
            <td class="edittext">
            </td>
            <td class="edittext"><br>
            <input type="submit" class="edittext" name="save" value="<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_SAVE'), $this);?>
" onClick="Javascript:document.myedit.fnc.value='save'" <?php echo $this->_tpl_vars['readonly']; ?>
>
            </td>
        </tr>
        </table>
    </td>
    <!-- Anfang rechte Seite -->
    <td valign="top" class="edittext vr" align="left" width="50%">
    <?php if ($this->_tpl_vars['oxid'] != "-1"): ?>

       <input <?php echo $this->_tpl_vars['readonly']; ?>
 type="button" value="<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_ASSIGNGROUPS'), $this);?>
" class="edittext" onclick="JavaScript:showDialog('&cl=news_main&aoc=1&oxid=<?php echo $this->_tpl_vars['oxid']; ?>
');">

    <?php endif; ?>
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