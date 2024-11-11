<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Access Kantong</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="addprojectpage">
    

    <?php $__env->startSection('content'); ?>
    <h1 class="bolder">Data Access Kantong</h1>
    <hr>
    <div class="accform">
        <form class="accformm" method="post" action="<?php echo e(route('addacc')); ?>">
            <?php echo csrf_field(); ?>
            <div class="acc-top">
                <h3>Form Access Kantong : <?php echo e($project_code); ?></h3>
                <input type="hidden" name="project_code" value="<?php echo e($project_code); ?>">
            </div>
            <?php $__currentLoopData = $kantongNames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $nama_kantong): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class>
                    <hr>
                    <h4>Kantong Parkir: <?php echo e($nama_kantong); ?></h4>
                    <input type="hidden" name="kantong[<?php echo e($index); ?>][nama]" value="<?php echo e($nama_kantong); ?>">
                    <div class="access-list" id="access-list-<?php echo e($index); ?>">
                        <div class="access-item">
                            <select name="kantong[<?php echo e($index); ?>][access][0][jenis]" required>
                                <option value="Car">Car</option>
                                <option value="Motorbike">Motorbike</option>
                                <option value="Box Truck">Box Truck</option>
                                <option value="Combo">Combo</option>
                            </select>
                            <input type="number" name="kantong[<?php echo e($index); ?>][access][0][entry]" placeholder="Entry" min="1"
                                required>
                            <input type="number" name="kantong[<?php echo e($index); ?>][access][0][exit]" placeholder="Exit" min="1"
                                required>
                            <button type="button" class="remove-access" onclick="removeAccess(this)">-</button>
                        </div>
                    </div>
                    <button type="button" class="add-access" onclick="addAccess(<?php echo e($index); ?>)">+ Add Access</button>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php if(session('success')): ?>
                <?php echo e(session('success')); ?>

            <?php endif; ?>
            <button type="submit" class="submitbutton">Submit</button>
        </form>
    </div>

    <script>
        function addAccess(kantongIndex) {
            const accessList = document.getElementById(`access-list-${kantongIndex}`);
            const newAccessItem = document.createElement('div');
            newAccessItem.className = 'access-item';
            const accessCount = accessList.children.length;

            newAccessItem.innerHTML = `
        <select name="kantong[${kantongIndex}][access][${accessCount}][jenis]" required>
            <option value="Car">Car</option>
            <option value="Motorbike">Motorbike</option>
            <option value="Box Truck">Box Truck</option>
            <option value="Combo">Combo</option>
        </select>
        <input type="number" name="kantong[${kantongIndex}][access][${accessCount}][entry]" placeholder="Entry" min="1" required>
        <input type="number" name="kantong[${kantongIndex}][access][${accessCount}][exit]" placeholder="Exit" min="1" required>
        <button type="button" class="remove-access" onclick="removeAccess(this)">-</button>
    `;

            accessList.appendChild(newAccessItem);
        }

        function removeAccess(button) {
            button.closest('.access-item').remove();
        }
    </script>
    <?php $__env->stopSection(); ?>
</body>

</html>
<?php echo $__env->make('Layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Documents\PT Centrepark Citra Corpora\ProjectManagement\tesproject\resources\views/addacc.blade.php ENDPATH**/ ?>