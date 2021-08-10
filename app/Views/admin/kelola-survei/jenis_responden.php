<h1>jenis responden</h1>
<?php foreach ($responden as $resp) : ?>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="<?= $resp['responden']; ?>" id="peruntukkanCategory" name="peruntukkanCategory" checked>
        <label class="form-check-label" for="peruntukkanCategory">
            <?= $resp['responden']; ?>
        </label>
    </div>
<?php endforeach; ?>