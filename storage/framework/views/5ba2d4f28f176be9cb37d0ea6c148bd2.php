


<?php $__env->startSection('title', 'Detail Wisata'); ?>

<?php $__env->startSection('content'); ?>

<div class="container">

    <section class="hero">
        <h1><?php echo e($wisata['nama']); ?></h1>

        <p>
            Informasi lengkap destinasi wisata Indonesia.
        </p>
    </section>

    <div class="card" style="margin-top: 35px;">

        <img
            src="<?php echo e($wisata['gambar']); ?>"
            alt="<?php echo e($wisata['nama']); ?>"
            style="width: 100%; height: 350px; object-fit: cover;"
        >

        <div class="card-content">

            <h2><?php echo e($wisata['nama']); ?></h2>

            <p style="margin-top: 15px;">
                <strong>Lokasi:</strong>
                <?php echo e($wisata['lokasi']); ?>

            </p>

            <p style="margin-top: 10px;">
                <strong>Kategori:</strong>
                <?php echo e($wisata['kategori']); ?>

            </p>

            <h3 style="margin-top: 20px;">
                Deskripsi Wisata
            </h3>

            <p style="margin-top: 10px; text-align: justify;">
                <?php echo e($wisata['deskripsi']); ?>

            </p>

            <a
                href="<?php echo e(route('wisata.index')); ?>"
                class="btn"
                style="margin-top: 20px;"
            >
                Kembali ke Destinasi
            </a>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\wisata-indonesia\resources\views/wisata/detail.blade.php ENDPATH**/ ?>