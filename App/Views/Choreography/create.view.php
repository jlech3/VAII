<?php


/** @var \Framework\Support\LinkGenerator $link */
/** @var \Framework\Support\View $view */

$view->setLayout('portal');
?>

<div class="page">
    <h1>Nová choreografia</h1>

    <form action="<?= $link->url('choreography.store') ?>" method="post" class="form">
        <label for="name">Názov</label>
        <input type="text" id="name" name="name" required maxlength="100">

        <label for="author">Autor</label>
        <input type="text" id="author" name="author" required maxlength="100">

        <label for="duration_min">Dĺžka (min)</label>
        <input type="number" id="duration_min" name="duration_min" required min="1">

        <label for="description">Popis</label>
        <textarea id="description" name="description" rows="4"></textarea>

        <button type="submit" class="btn btn-primary">Uložiť</button>
        <a href="<?= $link->url('choreography.index') ?>">Zrušiť</a>
    </form>
</div>