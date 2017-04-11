<?php /* Smarty version 2.6.28, created on 2017-02-03 02:02:02
         compiled from page/tags/tags.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'page/tags/tags.tpl', 2, false),array('function', 'oxmultilang', 'page/tags/tags.tpl', 4, false),array('insert', 'oxid_tracker', 'page/tags/tags.tpl', 25, false),)), $this); ?>
<?php ob_start(); ?>
    <?php $this->assign('template_title', ((is_array($_tmp='TAGS')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp))); ?>
    <?php if ($this->_tpl_vars['oView']->getTagCloudManager()): ?>
        <h1 class="page-header" id="tags"><?php echo smarty_function_oxmultilang(array('ident' => 'TAGS'), $this);?>
</h1>
        <div >
            <p id="tagsCloud">
                <?php $this->assign('oTagsManager', $this->_tpl_vars['oView']->getTagCloudManager()); ?>
                <?php $_from = $this->_tpl_vars['oTagsManager']->getCloudArray(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sTagTitle'] => $this->_tpl_vars['oTag']):
?>
                    <?php $this->assign('iTagSize', $this->_tpl_vars['oTagsManager']->getTagSize($this->_tpl_vars['sTagTitle'])); ?>
                    <?php $this->assign('sTagPriority', "label-default"); ?>
                    <?php if ($this->_tpl_vars['iTagSize'] < 100): ?>
                        <?php $this->assign('sTagPriority', "label-primary"); ?>
                    <?php elseif ($this->_tpl_vars['iTagSize'] < 200): ?>
                        <?php $this->assign('sTagPriority', "label-info"); ?>
                    <?php elseif ($this->_tpl_vars['iTagSize'] < 300): ?>
                        <?php $this->assign('sTagPriority', "label-warning"); ?>
                    <?php elseif ($this->_tpl_vars['iTagSize'] < 400): ?>
                        <?php $this->assign('sTagPriority', "label-danger"); ?>
                    <?php endif; ?>
                    <a class="label <?php echo $this->_tpl_vars['sTagPriority']; ?>
 tagitem_<?php echo $this->_tpl_vars['oTagsManager']->getTagSize($this->_tpl_vars['oTag']->getTitle()); ?>
" href="<?php echo $this->_tpl_vars['oTag']->getLink(); ?>
"><?php echo $this->_tpl_vars['oTag']->getTitle(); ?>
</a>
                <?php endforeach; endif; unset($_from); ?>
            </p>
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