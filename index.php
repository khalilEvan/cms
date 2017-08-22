<?php require 'app/start.php'; ?>

<?php include VIEWS . 'template/header.php'; ?>

<?php include VIEWS . 'home.php'; ?>

<div class="content">
    <ul>
        <?php foreach ($items as $item): ?>
        <li><a href="<?= BASE_URL . '/page.php/?page-slug='.$item['slug'].'&post_type='.$item['post_type'] ?>"><?= $item['title'] ?></a>|<?= $item['post_type'] ?></li>
        <?php endforeach; ?>
    </ul>
</div>


<?php include VIEWS . '/template/footer.php'; ?>




