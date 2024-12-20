<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Active Projects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    

    <?php $__env->startSection('content'); ?>
    <h1 class="bolder">Database Active Projects</h1>
    <hr>
    <table class="table table-hover table-bordered">
        <thead class="">
            <tr>
                <th>Project Name</th>
                <th>Project Code</th>
                <th>Project Category</th>
                <th>Company Name</th>
                <th>PIC</th>
                <th>Target Live Project</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody class="table-group-divider table-hover">
            <?php $__currentLoopData = $allproject; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <a href="<?php echo e(route('locationpage', ['project_name' => $p->project_name])); ?>">
                            <?php echo e($p->project_name); ?>

                        </a>
                    </td>
                    <td><?php echo e($p->project_code); ?></td>
                    <td><?php echo e($p->project_category); ?></td>
                    <td><?php echo e($p->perusahaan); ?></td>
                    <td><?php echo e($p->pic); ?></td>
                    <td><?php echo e($p->target_live_project); ?></td>
                    <td>Status</td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php $__env->stopSection(); ?>

</body>

</html>

<?php echo $__env->make('Layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Documents\PT Centrepark Citra Corpora\ProjectManagement\tesproject\resources\views/projects.blade.php ENDPATH**/ ?>