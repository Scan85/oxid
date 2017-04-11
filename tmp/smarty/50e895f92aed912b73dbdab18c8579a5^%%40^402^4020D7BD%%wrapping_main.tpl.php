<?php /* Smarty version 2.6.28, created on 2017-02-02 13:25:15
         compiled from wrapping_main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'wrapping_main.tpl', 1, false),array('function', 'oxmultilang', 'wrapping_main.tpl', 40, false),array('function', 'oxinputhelp', 'wrapping_main.tpl', 40, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headitem.tpl", 'smarty_include_vars' => array('title' => ((is_array($_tmp='WRAPPING_MAIN_TITLE')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<span class="popUpStyle" id="wrapping_new" style="position: absolute;visibility: hidden;">Neue Geschenkverpackung/Grusskarte</span>

<script type="text/javascript">
<!--
function DeletePic( sField )
{
    var oForm = document.getElementById("myedit");
    document.getElementById(sField).value="";
    oForm.fnc.value='save';
    oForm.submit();
}
//-->
</script>

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
    <input type="hidden" name="cl" value="wrapping_main">
    <input type="hidden" name="editlanguage" value="<?php echo $this->_tpl_vars['editlanguage']; ?>
">
</form>


<form name="myedit" id="myedit" enctype="multipart/form-data" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $this->_tpl_vars['iMaxUploadFileSize']; ?>
">
<?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

<input type="hidden" name="cl" value="wrapping_main">
<input type="hidden" name="fnc" value="">
<input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
<input type="hidden" name="editval[oxwrapping__oxid]" value="<?php echo $this->_tpl_vars['oxid']; ?>
">

<?php if ($this->_tpl_vars['oViewConf']->isAltImageServerConfigured()): ?>
    <div class="warning"><?php echo smarty_function_oxmultilang(array('ident' => 'ALTERNATIVE_IMAGE_SERVER_NOTE'), $this);?>
 <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ALTERNATIVE_IMAGE_SERVER_NOTE'), $this);?>
</div>
<?php endif; ?>

<table cellspacing="0" cellpadding="0" border="0" width="98%">
<tr>
    <td valign="top" class="edittext">

        <table cellspacing="0" cellpadding="0" border="0">
        
            <tr>
                <td class="edittext" width="90">
                <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_ACTIVE'), $this);?>

                </td>
                <td class="edittext" colspan="2">
                <input class="edittext" type="checkbox" name="editval[oxwrapping__oxactive]" value='1' <?php if ($this->_tpl_vars['edit']->oxwrapping__oxactive->value == 1): ?>checked<?php endif; ?> <?php echo $this->_tpl_vars['readonly']; ?>
>
                <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_GENERAL_ACTIVE'), $this);?>

                </td>
            </tr>
            <tr>
                <td class="edittext">
                <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_TYPE'), $this);?>

                </td>
                 <td class="edittext" colspan="2">
                <select name="editval[oxwrapping__oxtype]" class="editinput" <?php echo $this->_tpl_vars['readonly']; ?>
>
                    <option value="WRAP" <?php if ($this->_tpl_vars['edit']->oxwrapping__oxtype->value == 'WRAP'): ?>SELECTED<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'WRAPPING_MAIN_PRESENTPACKUNG'), $this);?>
</option>
                    <option value="CARD" <?php if ($this->_tpl_vars['edit']->oxwrapping__oxtype->value == 'CARD'): ?>SELECTED<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_CARD'), $this);?>
</option>
                </select>
                <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_GENERAL_TYPE'), $this);?>

                </td>
            </tr>
            <tr>
                <td class="edittext">
                <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_NAME'), $this);?>

                </td>
                <td class="edittext" colspan="2">
                <input type="text" class="editinput" size="25" maxlength="<?php echo $this->_tpl_vars['edit']->oxwrapping__oxname->fldmax_length; ?>
" name="editval[oxwrapping__oxname]" value="<?php echo $this->_tpl_vars['edit']->oxwrapping__oxname->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
                <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_GENERAL_NAME'), $this);?>

                </td>
            </tr>
            <tr>
                <td class="edittext">
                <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_PRICE'), $this);?>
 (<?php echo $this->_tpl_vars['oActCur']->sign; ?>
)
                </td>
                <td class="edittext" colspan="2">
                <input type="text" class="editinput" size="10" maxlength="<?php echo $this->_tpl_vars['edit']->oxwrapping__oxprice->fldmax_length; ?>
" name="editval[oxwrapping__oxprice]" value="<?php echo $this->_tpl_vars['edit']->oxwrapping__oxprice->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
                <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_GENERAL_PRICE'), $this);?>

                </td>
            </tr>
            <tr>
                <td class="edittext">
                <?php echo smarty_function_oxmultilang(array('ident' => 'WRAPPING_MAIN_PICTURE'), $this);?>

                </td>
                <td class="edittext">
                <input id="oxpic" type="text" class="editinput" size="42" maxlength="<?php echo $this->_tpl_vars['edit']->oxwrapping__oxpic->fldmax_length; ?>
" name="editval[oxwrapping__oxpic]" value="<?php echo $this->_tpl_vars['edit']->oxwrapping__oxpic->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
                <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_WRAPPING_MAIN_PICTURE'), $this);?>

                <?php if (( ! ( $this->_tpl_vars['edit']->oxwrapping__oxpic->value == "nopic.jpg" || $this->_tpl_vars['edit']->oxwrapping__oxpic->value == "" || $this->_tpl_vars['edit']->oxwrapping__oxpic->value == "nopic_ico.jpg" ) )): ?>
                </td>
                <td class="edittext">
                <a href="Javascript:DeletePic('oxpic');" class="delete left" <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "help.tpl", 'smarty_include_vars' => array('helpid' => 'item_delete')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>></a>
                <?php endif; ?>
                </td>
            </tr>
            <tr>
                <td class="edittext">
                <?php echo smarty_function_oxmultilang(array('ident' => 'WRAPPING_MAIN_PICUPLOAD'), $this);?>
 (<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_MAX_FILE_UPLOAD'), $this);?>
 <?php echo $this->_tpl_vars['sMaxFormattedFileSize']; ?>
, <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_MAX_PICTURE_DIMENSIONS'), $this);?>
)
                </td>
                <td class="edittext" colspan="2">
                <input class="editinput" name="myfile[WP@oxwrapping__oxpic]" size="26" type="file" <?php echo $this->_tpl_vars['readonly']; ?>
>
                <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_WRAPPING_MAIN_PICUPLOAD'), $this);?>

                </td>
            </tr>
        
        <?php if ($this->_tpl_vars['oxid'] != "-1"): ?>
        <tr>
            <td class="edittext">
            </td>
            <td class="edittext" colspan="2"><br>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "language_edit.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </td>
        </tr>
        <?php endif; ?>
        <tr>
            <td class="edittext">
            </td>
            <td class="edittext" colspan="2"><br>
            <input type="submit" class="edittext" name="save" value="<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_SAVE'), $this);?>
" onClick="Javascript:document.myedit.fnc.value='save'" <?php echo $this->_tpl_vars['readonly']; ?>
>
            </td>
        </tr>
        </table>
    </td>
    <td width="35">
    <img src="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl(); ?>
/grayline_vert.gif" width="2" height="270" alt="" border="0">
    </td>
    <!-- Anfang rechte Seite -->
    <td valign="top" class="edittext" align="left" width="50%">
    <?php if ($this->_tpl_vars['oxid'] != "-1"): ?>

            <?php if ($this->_tpl_vars['edit']->oxwrapping__oxpic->value): ?>
            <?php echo smarty_function_oxmultilang(array('ident' => 'WRAPPING_MAIN_PICTURE'), $this);?>
 <br>
            <img src="<?php echo $this->_tpl_vars['edit']->getPictureUrl(); ?>
" border="0" hspace="0" vspace="0">
            <?php endif; ?>

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