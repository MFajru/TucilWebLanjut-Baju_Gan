<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="title-home">SILAHKAN GAN BAJUNYA!</h1>
            <h5>Klik gambarnya untuk deskripsi yang lebih detail ya, gan!</h5>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-2">
        <div class="col mb-4">
            <div class="card">
                <a href="/product-gucci">
                    <img src="/img/gucci.jpg" class="card-img-top" alt="Ini kaos Gucci">
                </a>
                <div class="card-body">
                    <h5 class="card-title">White Cotton T-Shirt with Gucci Blade Print</h5>
                    <p class="card-text">Kaos putih dari katun dengan tulisan Gucci yang diprint model pisau.</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card">
                <a href="/product-supreme">
                    <img src="/img/supremegray.jpg" class="card-img-top" alt="Ini kaos Supreme abu-abu">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Supreme 20th Anniversary Box Logo Tee Gray</h5>
                    <p class="card-text">Kaos abu-abu dengan logo kotak Supreme spesial ulang tahun ke-20.</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card">
                <a href="/product-louisvuitton">
                    <img src="/img/luisvuitton.jpg" class="card-img-top" alt="Ini kaos Louis Vuitton item">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Louis Vuitton LV Stitch Embroidered Black T-Shirt</h5>
                    <p class="card-text">Kaos hitam Louis Vuitton dengan tulisan LV yang dibordir.</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card">
                <a href="/product-deus">
                    <img src="/img/deus.jpg" class="card-img-top" alt="Ini kaos fakboi Deus.">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Deus Ex Machina Fifita Tee</h5>
                    <p class="card-text">Kaos Fifita Deus ex Machina warna hitam.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>