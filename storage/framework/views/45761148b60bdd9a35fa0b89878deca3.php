


<?php $__env->startSection('title', 'Destinasi Wisata'); ?>

<?php $__env->startSection('content'); ?>

<div class="container">

    <section class="hero">
        <h1>Destinasi Wisata Indonesia</h1>

        <p>
            Temukan berbagai keindahan tempat wisata
            yang tersebar di seluruh Indonesia.
        </p>
    </section>

    <section style="margin-top: 40px;">

        <h2 style="text-align: center;">
            Jelajahi Destinasi Pilihan
        </h2>

        <div class="grid">

            <?php $__currentLoopData = $wisata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="card">

                    <img
                        src="<?php echo e($item['gambar']); ?>"
                        alt="<?php echo e($item['nama']); ?>"
                    >

                    <div class="card-content">

                        <h3><?php echo e($item['nama']); ?></h3>

                        <p>
                            <strong>Lokasi:</strong>
                            <?php echo e($item['lokasi']); ?>

                        </p>

                        <p>
                            <strong>Kategori:</strong>
                            <?php echo e($item['kategori']); ?>

                        </p>

                        <p>
                            <?php echo e($item['deskripsi']); ?>

                        </p>

                        <a
                            href="<?php echo e(route('wisata.detail', $item['id'])); ?>"
                            class="btn"
                        >
                            Lihat Detail
                        </a>

                    </div>

                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

    </section>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\wisata-indonesia\resources\views/wisata/index.blade.php ENDPATH**/ ?>