<?php
/** @var \App\Models\Choreography $choreography */
/** @var \Framework\Support\LinkGenerator $link */
?>

<div class="page">
    <h1>Úprava choreografie</h1>

    <form action="<?= $link->url('choreography.update') ?>" method="post" class="form">
        <!-- skryté pole: podľa neho update vie, ktorý záznam upravuje -->
        <input type="hidden" name="id" value="<?= $choreography->getId() ?>">

        <label for="name">Názov</label>
        <input type="text" id="name" name="name" required maxlength="100"
               value="<?= e($choreography->getName()) ?>">

        <label for="author">Autor</label>
        <input type="text" id="author" name="author" required maxlength="100"
               value="<?= e($choreography->getAuthor()) ?>">

        <label for="duration_min">Dĺžka (min)</label>
        <input type="number" id="duration_min" name="duration_min" required min="1"
               value="<?= $choreography->getDurationMin() ?>">

        <label for="description">Popis</label>
        <textarea id="description" name="description" rows="4"><?= e($choreography->getDescription()) ?></textarea>

        <button type="submit" class="btn btn-primary">Uložiť zmeny</button>
        <a href="<?= $link->url('choreography.index') ?>">Zrušiť</a>
    </form>
</div>
