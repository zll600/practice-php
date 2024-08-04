<?php require base_path('views/partials/header.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p class="mt-6">
            <a href="/notes" class="text-blue-500 underline">go back...</a>
        </p>

        <p>
            <?= htmlspecialchars($note['body']) ?>
        </p>
    </div>
</main>

<?php require base_path('views/partials/footer.php'); ?>
