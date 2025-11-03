<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Data Mahasiswa</title>
    </head>
<body>
    <div class="container text-center p-4">
        <h1>Data Mahasiswa</h1>
            <div class="row">
                <div class="m-auto">
                    <ol class="list-group">
                    <?php $__empty_1 = true; $__currentLoopData = $mahasiswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mahasiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <li class="list-group-item">
                    <?php echo e($mahasiswa->nama); ?> ( <?php echo e($mahasiswa->nim); ?> ), Tanggal Lahir: <?php echo e($mahasiswa->tanggal_lahir); ?>,
                    IPK: <?php echo e($mahasiswa->ipk); ?>

                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
                    <?php endif; ?>
                </ol>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\laragon\www\wf20251_orm\resources\views/tampil-mahasiswa.blade.php ENDPATH**/ ?>