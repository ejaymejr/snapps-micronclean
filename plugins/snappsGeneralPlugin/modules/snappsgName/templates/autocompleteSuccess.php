<?php if (sizeof($options)) : ?>
<ul>
<?php foreach ($options as $opt) : ?>
<li><?php echo $opt; ?></li>
<?php endforeach; ?>
</ul>
<?php else: ?>
<ul>
<li><i>(New Recipient)</i></li>
</ul>
<?php endif; ?>