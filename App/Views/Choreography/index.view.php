<?php
/** @var \App\Models\Choreography[] $choreographies */
/** @var \Framework\Support\LinkGenerator $link */
?>

<div class="page">
    <h1> Správa choreografií</h1>
    <a class="btn btn-primary" href="<?= $link->url('choreography.create') ?>">Pridať choreografiu</a>

    <?php if (empty($choreographies)): ?>
        <p>Zatiaľ tu nie je žiadna choreografia.</p>
    <?php else: ?>
        <table class="data-table">
            <thead>
            <tr>
                <th>Názov</th>
                <th>Autor</th>
                <th>Dĺžka</th>
                <th></th>
                <th></th>

            </tr>
            </thead>
            <tbody>
            <?php foreach ($choreographies as $choreography): ?>
                <tr>
                    <td><?= e($choreography->getName()) ?></td>
                    <td><?= e($choreography->getAuthor()) ?></td>
                    <td><?= $choreography->getDurationMin() ?> min</td>
                    <td><a href="<?= $link->url('choreography.edit', ['id' => $choreography->getId()]) ?>">Upraviť</a></td>
                    <td>
                        <form action="<?= $link->url('choreography.delete', ['id' => $choreography->getId()]) ?>" method="post">
                            <button type="submit">Zmazať</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>