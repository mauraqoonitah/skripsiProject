<p>Seseorang meminta penyetelan ulang sandi di alamat email Anda untuk <?= site_url() ?>.</p>

<p>Untuk menyetel ulang sandi, gunakan token berikut.</p>
<p> Token Anda: <b><?= $hash ?></b></p>

<p>atau klik tautan berikut <b><a href="<?= site_url('reset-password') . '?token=' . $hash ?>">Formulir Reset</a></b> dan ikuti petunjuknya.</p>

<br>

<p><i>Jika Anda tidak meminta penyetelan ulang sandi, Anda dapat mengabaikan email ini.</i></p>