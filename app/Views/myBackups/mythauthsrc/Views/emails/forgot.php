<p>Seseorang meminta penyetelan ulang sandi di alamat email ini untuk <?= site_url() ?>.</p>

<p>Untuk menyetel ulang sandi, gunakan kode atau URL ini dan ikuti petunjuknya.</p>

<p>Kode Anda: <?= $hash ?></p>

<p>Kunjungi <a href="<?= site_url('reset-password') . '?token=' . $hash ?>">Formulir Reset</a>.</p>

<br>

<p>Jika Anda tidak meminta penyetelan ulang sandi, Anda dapat mengabaikan email ini dengan aman.</p>