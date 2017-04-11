<?php /* Smarty version 2.6.28, created on 2017-02-03 02:00:46
         compiled from widget/rss.tpl */ ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="<?php echo $this->_tpl_vars['oView']->getCharSet(); ?>
" <?php echo '?>'; ?>

<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
<channel>
        <?php $this->assign('channel', $this->_tpl_vars['oView']->getChannel()); ?>
        <title><?php echo $this->_tpl_vars['channel']['title']; ?>
</title>
        <link><?php echo $this->_tpl_vars['channel']['link']; ?>
</link>
        <description><?php echo $this->_tpl_vars['channel']['description']; ?>
</description>
        <language><?php echo $this->_tpl_vars['channel']['language']; ?>
</language>
        <copyright><?php echo $this->_tpl_vars['channel']['copyright']; ?>
</copyright>
        <lastBuildDate><?php echo $this->_tpl_vars['channel']['lastBuildDate']; ?>
</lastBuildDate>
        <generator><?php echo $this->_tpl_vars['channel']['generator']; ?>
</generator>
        <?php if ($this->_tpl_vars['channel']['managingEditor']): ?>
            <managingEditor><?php echo $this->_tpl_vars['channel']['managingEditor']; ?>
</managingEditor>
        <?php endif; ?>
                <image>
            <url><?php echo $this->_tpl_vars['channel']['image']['url']; ?>
</url>
            <title><?php echo $this->_tpl_vars['channel']['image']['title']; ?>
</title>
            <link><?php echo $this->_tpl_vars['channel']['image']['link']; ?>
</link>
        </image>
        
        <atom:link href="<?php echo $this->_tpl_vars['channel']['selflink']; ?>
" rel="self" type="application/rss+xml" />
        <?php $_from = $this->_tpl_vars['channel']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
            <item>
                <title><?php echo $this->_tpl_vars['item']->title; ?>
</title>
                <link><?php echo $this->_tpl_vars['item']->link; ?>
</link>
                <pubDate><?php echo $this->_tpl_vars['item']->date; ?>
</pubDate>
                <description><?php echo $this->_tpl_vars['item']->description; ?>
</description>
                <guid isPermaLink="<?php if ($this->_tpl_vars['item']->isGuidPermalink): ?>true<?php else: ?>false<?php endif; ?>"><?php echo $this->_tpl_vars['item']->guid; ?>
</guid>
                            </item>
        <?php endforeach; endif; unset($_from); ?>
</channel>
</rss>