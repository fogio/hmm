<?= htmlspecialchars($event['title']) ?>
<?= $event['title'] ?>


<?= date($event['start'], 'Y-m-d H:i') ?>
<?= $event['start']->date('Y-m-d H:i') ?>


<?= htmlspecialchars(ucwords(striptags($event['title']))) ?>
<?= $event['title']->striptags()->ucwords() ?>


<?= htmlspecialchars(mplode(', ', $event['tags'])); ?>
<?= $v($event['tags'])->implode(', ') ?>


<? $v()->start()->spaceless() ?>
    This text becomes uppercase
<? $v()->stop() ?>

<? foreach ($v($events) as $event) : ?>
