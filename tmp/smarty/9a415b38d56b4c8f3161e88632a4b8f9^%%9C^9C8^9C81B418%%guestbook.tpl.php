<?php /* Smarty version 2.6.28, created on 2017-02-03 01:57:45
         compiled from page/guestbook/guestbook.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'page/guestbook/guestbook.tpl', 2, false),array('modifier', 'nl2br', 'page/guestbook/guestbook.tpl', 33, false),array('modifier', 'date_format', 'page/guestbook/guestbook.tpl', 34, false),array('function', 'oxmultilang', 'page/guestbook/guestbook.tpl', 3, false),array('insert', 'oxid_tracker', 'page/guestbook/guestbook.tpl', 53, false),)), $this); ?>
<?php ob_start(); ?>
    <?php $this->assign('template_title', ((is_array($_tmp='GUESTBOOK')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp))); ?>
    <h1 class="page-header"><?php echo smarty_function_oxmultilang(array('ident' => 'GUESTBOOK'), $this);?>
</h1>

    <div class="row reviews">
        <div class="col-xs-12">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/guestbook.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>
    </div>

    <?php if ($this->_tpl_vars['oView']->getEntries()): ?>
        <div class="row">
            <div class="col-xs-10">
                <h2 class="page-header"><?php echo smarty_function_oxmultilang(array('ident' => 'DD_GUESTBOOK_ENTRIES'), $this);?>
</h2>
            </div>
            <div class="spacer"></div>
            <div class="col-xs-2">
                <div class="pull-right">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/locator/listlocator.tpl", 'smarty_include_vars' => array('sort' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row entries">
        <div class="col-xs-12">
            <?php if ($this->_tpl_vars['oView']->getEntries()): ?>
                <ol class="list-unstyled">
                    <?php $_from = $this->_tpl_vars['oView']->getEntries(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['entry']):
?>
                        <li class="clear item">
                            <blockquote>
                                <p><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']->oxgbentries__oxcontent->value)) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
                                <small><?php echo smarty_function_oxmultilang(array('ident' => 'DD_GUESTBOOK_ENTRY_FROM'), $this);?>
 <?php echo $this->_tpl_vars['entry']->oxuser__oxfname->value; ?>
 <?php echo smarty_function_oxmultilang(array('ident' => 'DD_GUESTBOOK_ENTRY_ON'), $this);?>
  <?php echo ((is_array($_tmp=$this->_tpl_vars['entry']->oxgbentries__oxcreate->value)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y") : smarty_modifier_date_format($_tmp, "%d.%m.%Y")); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['entry']->oxgbentries__oxcreate->value)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
</small>
                            </blockquote>
                        </li>
                    <?php endforeach; endif; unset($_from); ?>
                </ol>
            <?php else: ?>
                <p class="alert alert-info"><?php echo smarty_function_oxmultilang(array('ident' => 'NO_ENTRY_AVAILABLE'), $this);?>
</p>
            <?php endif; ?>
        </div>
    </div>

    <?php if ($this->_tpl_vars['oView']->getEntries()): ?>
        <div class="row listlocator">
            <div class="col-xs-12">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/locator/listlocator.tpl", 'smarty_include_vars' => array('locator' => $this->_tpl_vars['oView']->getPageNavigation(),'place' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>
        </div>
    <?php endif; ?>

    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'oxid_tracker', 'title' => $this->_tpl_vars['template_title'])), $this); ?>

<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_content', ob_get_contents());ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/page.tpl", 'smarty_include_vars' => array('sidebar' => 'Left')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>