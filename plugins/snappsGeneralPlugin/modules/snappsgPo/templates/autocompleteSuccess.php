<?php if (sizeof($options)) : ?>
<ul>
<?php foreach ($options as $opt) : ?>
<li><?php echo $opt; ?></li>
<?php endforeach; ?>
</ul>
<?php else: ?>
<ul>
<li><i>(PO does not exist)</i></li>
</ul>
<?php endif; ?>