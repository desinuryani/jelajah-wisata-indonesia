


<?php $__env->startSection('title', 'Beranda'); ?>

<?php $__env->startSection('content'); ?>

<div class="container">

    <section class="hero">

        <h1>Jelajahi Keindahan Wisata Indonesia</h1>

        <p>
            Temukan berbagai destinasi wisata menarik,
            mulai dari keindahan alam, pantai, pegunungan,
            hingga wisata sejarah di Indonesia.
        </p>

        <a href="<?php echo e(route('wisata.index')); ?>" class="btn">
            Jelajahi Destinasi
        </a>

    </section>

    <section style="margin-top: 45px; text-align: center;">

        <h2>Selamat Datang di Jelajah Wisata</h2>

        <p style="margin-top: 12px;">
            Indonesia memiliki banyak tempat wisata
            yang menakjubkan dan layak untuk dikunjungi.
            Mari mengenal keindahan negeri kita bersama.
        </p>

    </section>

    <section style="margin-top: 40px;">

        <h2 style="text-align: center;">
            Mengapa Memilih Website Kami?
        </h2>

        <div class="grid">

            <div class="card">
                <div class="card-content">
                    <h3>Informasi Wisata</h3>
                    <p>
                        Mendapatkan informasi berbagai
                        destinasi wisata di Indonesia.
                    </p>
                </div>
            </div>

            <div class="card">
                <div class="card-content">
                    <h3>Beragam Kategori</h3>
                    <p>
                        Menjelajahi wisata alam, pantai,
                        pegunungan, dan sejarah.
                    </p>
                </div>
            </div>

            <div class="card">
                <div class="card-content">
                    <h3>Mudah Digunakan</h3>
                    <p>
                        Tampilan sederhana untuk membantu
                        pengunjung menemukan wisata.
                    </p>
                </div>
            </div>

        </div>

    </section>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\wisata-indonesia\resources\views/home.blade.php ENDPATH**/ ?>