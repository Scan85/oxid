<?php /* Smarty version 2.6.28, created on 2017-02-02 18:52:12
         compiled from shop_seo.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'shop_seo.tpl', 1, false),array('function', 'cycle', 'shop_seo.tpl', 10, false),array('function', 'oxmultilang', 'shop_seo.tpl', 31, false),array('function', 'oxinputhelp', 'shop_seo.tpl', 57, false),)), $this); ?>
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

<?php echo smarty_function_cycle(array('assign' => '_clear_','values' => ",2"), $this);?>


<form name="transfer" id="transfer" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

    <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
    <input type="hidden" name="cl" value="shop_seo">
    <input type="hidden" name="fnc" value="">
    <input type="hidden" name="actshop" value="<?php echo $this->_tpl_vars['oViewConf']->getActiveShopId(); ?>
">
    <input type="hidden" name="updatenav" value="">
    <input type="hidden" name="editlanguage" value="<?php echo $this->_tpl_vars['editlanguage']; ?>
">
</form>


<form name="myedit" id="myedit" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
<?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

<input type="hidden" name="cl" value="shop_seo">
<input type="hidden" name="fnc" value="">
<input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
<input type="hidden" name="editval[oxshops__oxid]" value="<?php echo $this->_tpl_vars['oxid']; ?>
">


   <?php echo smarty_function_oxmultilang(array('ident' => 'SHOP_SEO_NEWINSTALL'), $this);?>
<br>
   <br>

    <table border=0 width="98%">
        <tr>
          <td colspan="2">

            <?php if ($this->_tpl_vars['languages']): ?>
            <FIELDSET id=fldLayout>
              <LEGEND id=lgdLayout>
                <select name="editlanguage" id="test_editlanguage" class="saveinnewlanginput" onChange="Javascript:document.myedit.submit();" <?php echo $this->_tpl_vars['readonly']; ?>
>
                <?php $_from = $this->_tpl_vars['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lang'] => $this->_tpl_vars['olang']):
?>
                <option value="<?php echo $this->_tpl_vars['lang']; ?>
"<?php if ($this->_tpl_vars['subjlang'] == $this->_tpl_vars['lang']): ?>SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['olang']->name; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
              </LEGEND>
            <?php endif; ?>

            <table>
                
                    <tr>
                      <td class="edittext" >
                        <?php echo smarty_function_oxmultilang(array('ident' => 'SHOP_SEO_TITLEPREFIX'), $this);?>

                      </td>
                      <td class="edittext">
                        <input type="text" class="editinput" size="35" maxlength="<?php echo $this->_tpl_vars['edit']->oxshops__oxtitleprefix->fldmax_length; ?>
" name="editval[oxshops__oxtitleprefix]" value="<?php echo $this->_tpl_vars['edit']->oxshops__oxtitleprefix->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
                        <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_SHOP_SEO_TITLEPREFIX'), $this);?>

                      </td>
                    </tr>
                    <tr>
                      <td class="edittext" >
                        <?php echo smarty_function_oxmultilang(array('ident' => 'SHOP_SEO_TITLESUFFIX'), $this);?>

                      </td>
                      <td class="edittext">
                        <input type="text" class="editinput" size="35" maxlength="<?php echo $this->_tpl_vars['edit']->oxshops__oxtitlesuffix->fldmax_length; ?>
" name="editval[oxshops__oxtitlesuffix]" value="<?php echo $this->_tpl_vars['edit']->oxshops__oxtitlesuffix->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
                        <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_SHOP_SEO_TITLESUFFIX'), $this);?>

                      </td>
                    </tr>
                    <tr>
                      <td class="edittext" >
                        <?php echo smarty_function_oxmultilang(array('ident' => 'SHOP_SEO_STARTTITLE'), $this);?>

                      </td>
                      <td class="edittext">
                        <input type="text" class="editinput" size="35" maxlength="<?php echo $this->_tpl_vars['edit']->oxshops__oxstarttitle->fldmax_length; ?>
" name="editval[oxshops__oxstarttitle]" value="<?php echo $this->_tpl_vars['edit']->oxshops__oxstarttitle->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
                        <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_SHOP_SEO_STARTTITLE'), $this);?>

                      </td>
                    </tr>
                
            </table>

            <?php if ($this->_tpl_vars['languages']): ?>
            </FIELDSET>
            <?php endif; ?>
            <br>
          </td>
        </tr>

        <tr class="conftext<?php echo smarty_function_cycle(array(), $this);?>
">
         <td valign="top">
           <select class="saveinnewlanginput" name=confstrs[iDefSeoLang] <?php echo $this->_tpl_vars['readonly']; ?>
>
             <?php $_from = $this->_tpl_vars['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lang'] => $this->_tpl_vars['olang']):
?>
             <option value="<?php echo $this->_tpl_vars['lang']; ?>
"<?php if ($this->_tpl_vars['confstrs']['iDefSeoLang'] == $this->_tpl_vars['lang']): ?>SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['olang']->name; ?>
</option>
             <?php endforeach; endif; unset($_from); ?>
           </select>
         </td>
         <td valign="top" width="100%">
           <?php echo smarty_function_oxmultilang(array('ident' => 'SHOP_SEO_DEFSEOLANGUAGE'), $this);?>

         </td>
        </tr>
        
            <tr class="conftext<?php echo smarty_function_cycle(array(), $this);?>
">
             <td valign="top" nowrap>
                <input type=text class="confinput" style="width:270px;" name=confstrs[sSEOSeparator] value="<?php echo $this->_tpl_vars['confstrs']['sSEOSeparator']; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
                <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_SHOP_SEO_IDSSEPARATOR'), $this);?>

             </td>
             <td valign="top" width="100%">
               <?php echo smarty_function_oxmultilang(array('ident' => 'SHOP_SEO_IDSSEPARATOR'), $this);?>

             </td>
            </tr>

            <tr class="conftext<?php echo smarty_function_cycle(array(), $this);?>
">
             <td valign="top">
                <input type=text class="confinput" style="width:270px;" name=confstrs[sSEOuprefix] value="<?php echo $this->_tpl_vars['confstrs']['sSEOuprefix']; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
                <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_SHOP_SEO_SAFESEOPREF'), $this);?>

             </td>
             <td valign="top" width="100%">
               <?php echo smarty_function_oxmultilang(array('ident' => 'SHOP_SEO_SAFESEOPREF'), $this);?>

             </td>
            </tr>

            <tr class="conftext<?php echo smarty_function_cycle(array(), $this);?>
">
             <td valign="top">
                <textarea class="confinput" style="width: 270px; height: 72px;" name=confarrs[aSEOReservedWords] <?php echo $this->_tpl_vars['readonly']; ?>
><?php echo $this->_tpl_vars['confarrs']['aSEOReservedWords']; ?>
</textarea>
                <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_SHOP_SEO_RESERVEDWORDS'), $this);?>

             </td>
             <td valign="top" width="100%">
               <?php echo smarty_function_oxmultilang(array('ident' => 'SHOP_SEO_RESERVEDWORDS'), $this);?>

             </td>
            </tr>

            <tr class="conftext<?php echo smarty_function_cycle(array(), $this);?>
">
             <td valign="top">
                <textarea class="confinput" style="width: 270px; height: 72px;" name=confarrs[aSkipTags] <?php echo $this->_tpl_vars['readonly']; ?>
><?php echo $this->_tpl_vars['confarrs']['aSkipTags']; ?>
</textarea><BR>
                <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_SHOP_SEO_SKIPTAGS'), $this);?>

             </td>
             <td valign="top" width="100%">
               <?php echo smarty_function_oxmultilang(array('ident' => 'SHOP_SEO_SKIPTAGS'), $this);?>

             </td>
            </tr>

            <tr>
             <td valign="top" class="conftext">
               <br><b><?php echo smarty_function_oxmultilang(array('ident' => 'SHOP_SEO_STATICURLS'), $this);?>
</b>
             </td>
            </tr>

            <tr class="conftext<?php echo smarty_function_cycle(array(), $this);?>
">
             <td valign="top" class="nowrap">
               <select class="confinput" style="width:270px;" name=aStaticUrl[oxseo__oxobjectid] <?php echo $this->_tpl_vars['readonly']; ?>
 onchange="document.myedit.submit();">
                 <option value="-1"><?php echo smarty_function_oxmultilang(array('ident' => 'SHOP_SEO_NEWSTATICURL'), $this);?>
</option>
                 <?php $_from = $this->_tpl_vars['aStaticUrls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oItem']):
?>

                   <?php if ($this->_tpl_vars['sActSeoObject'] && $this->_tpl_vars['sActSeoObject'] != '-1' && $this->_tpl_vars['oItem']->oxseo__oxobjectid->value == $this->_tpl_vars['sActSeoObject']): ?>
                     <?php $this->assign('oActItem', $this->_tpl_vars['oItem']); ?>
                   <?php endif; ?>

                 <option value="<?php echo $this->_tpl_vars['oItem']->oxseo__oxobjectid->value; ?>
" <?php if ($this->_tpl_vars['oItem']->oxseo__oxobjectid->value == $this->_tpl_vars['sActSeoObject']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['oItem']->oxseo__oxstdurl->getRawValue(); ?>
</option>
                 <?php endforeach; endif; unset($_from); ?>
               </select>
               <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_SHOP_SEO_STATICURLS'), $this);?>

             </td>
             <td>
              <?php if ($this->_tpl_vars['oActItem']): ?>
              <a href="#" onclick="document.myedit.fnc.value='deleteStaticUrl';document.myedit.submit();" <?php echo $this->_tpl_vars['readonly']; ?>
 class="delete left" <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "help.tpl", 'smarty_include_vars' => array('helpid' => 'item_delete')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>></a>
              <?php endif; ?>
             </td>
            </tr>

            <tr class="conftext<?php echo smarty_function_cycle(array(), $this);?>
">
             <td>
              <input type=text class="confinput" style="width:270px;" name="aStaticUrl[oxseo__oxstdurl]" id="oxseo__oxstdurl" value="<?php if ($this->_tpl_vars['oActItem']->oxseo__oxstdurl): ?><?php echo $this->_tpl_vars['oActItem']->oxseo__oxstdurl->getRawValue(); ?>
<?php endif; ?>" <?php echo $this->_tpl_vars['readonly']; ?>
>
              <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_SHOP_SEO_STDURL'), $this);?>

             </td>
             <td>
               <?php echo smarty_function_oxmultilang(array('ident' => 'SHOP_SEO_STDURL'), $this);?>

             </td>
            </tr>

            <?php $_from = $this->_tpl_vars['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lang'] => $this->_tpl_vars['olang']):
?>
            <tr class="conftext<?php echo smarty_function_cycle(array(), $this);?>
">
             <td>
              <input type=text class="confinput" style="width:270px;" name="aStaticUrl[oxseo__oxseourl][<?php echo $this->_tpl_vars['lang']; ?>
]" value="<?php echo $this->_tpl_vars['aSeoUrls'][$this->_tpl_vars['lang']]['1']; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
             </td>
             <td>
              <?php echo $this->_tpl_vars['olang']->name; ?>

             </td>
            </tr>
            <?php endforeach; endif; unset($_from); ?>
        

    </table>

   <br>
   <input type="submit" class="confinput" name="save" value="<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_SAVE'), $this);?>
" onClick="Javascript:document.myedit.fnc.value='save'" <?php echo $this->_tpl_vars['readonly']; ?>
>
   <input type="submit" class="confinput" name="save" value="<?php echo smarty_function_oxmultilang(array('ident' => 'SHOP_SEO_RESETIDS'), $this);?>
" onClick="Javascript:var agree=confirm('<?php echo smarty_function_oxmultilang(array('ident' => 'SHOP_SEO_QRESETIDS'), $this);?>
');if (!agree) {return false;} else {document.myedit.fnc.value='dropSeoIds';return true;}" <?php echo $this->_tpl_vars['readonly']; ?>
>


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