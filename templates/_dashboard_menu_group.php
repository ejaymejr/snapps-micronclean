<?php
// $Source$
// $Id$
?>

<h2><?php echo $group[0]; ?></h2>
<ul class="cpanelmenu">
<?php foreach ($group[1] as $item) : ?>
    <li>
    <?php if ($item[2]) : ?>
    <a href="<?php echo $item[1]; ?>" onclick="hideGlobalDashboard(); showLoader();"><?php echo $item[0]; ?></a>
    <?php else : ?>
    <a href="<?php echo $item[1]; ?>" onclick="alert('maybe not today, may not be tomorrow...'); return false;"><span style="font-weight:normal; color:#000033;"><?php echo $item[0]; ?></span></a>
    <?php endif; ?>
    </li>
<?php endforeach; ?>
</ul>