<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Active Projects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
</head>

<body class="locationpage">
    

    <?php $__env->startSection('content'); ?>
    <h1 class="bolder">Location Page - <?php echo e($project_name); ?></h1>
    <div class="flex-container">
        <div class="main-data">
            <div class="main-data-template">
                <label for="">Nama project</label><br>
                <label for="">Project Code</label><br>
                <label for="">Perusahaan</label><br>
                <label for="">PIC</label><br>
                <label for="">Bidang Usaha</label><br>
                <label for="">Alamat</label><br>
                <label for="">Target Live Project</label><br>
                <label for="">Sistem Operasional</label><br>
                <label for="">Cashflow</label><br>
                <label for="">Jenis Pekerjaan</label><br>
                <label for="">Status Asset</label><br>
                <label for="">Project Category</label><br>
            </div>
            <div class="vl"></div>
            <div>
                <?php echo e($project_name); ?><br>
                <?php echo e($project_code); ?><br>
                <?php echo e($perusahaan); ?><br>
                <?php echo e($pic); ?><br>
                <?php echo e($bidang_usaha); ?><br>
                <?php echo e($alamat); ?><br>
                <?php echo e($target_live_project); ?><br>
                <?php echo e($sistem_operasional); ?><br>
                <?php echo e($cashflow); ?><br>
                <?php echo e($jenis_kerjasama); ?><br>
                <?php echo e($status_asset); ?><br>
                <?php echo e($project_category); ?>

            </div>
        </div>
        <div class="card">
            <p style="font-weight: bold;">List Kantong parkir dan Access</p>
            <hr>
            <?php $__currentLoopData = $kantongs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kantong): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($kantong->nama_kantong); ?>

                        <?php
                            $Access = $accessData->where('nama_kantong', $kantong->nama_kantong)->where('project_code', $project_code);
                        ?>
                        <?php $__currentLoopData = $Access; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $access): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div>
                                Access <?php echo e($access->jenis_kendaraan); ?> Entry [<?php echo e($access->entry_access); ?>] Exit
                                [<?php echo e($access->exit_access); ?>]
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <br>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <br>
    <div class="kantongdisplaybase">
        <h1>Item List Table</h1>
        <table id="myDataTable" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Qty</th>
                    <th>Kategori</th>
                    <th>Kantong Parkir</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $kantongs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kantong): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $itemEntry = $itemEntries->where('nama_kantong', $kantong->nama_kantong)->where('project_code', $project_code);
                                    $itemExit = $itemExits->where('nama_kantong', $kantong->nama_kantong)->where('project_code', $project_code);
                                    $itemAdmin = $itemAdmins->where('nama_kantong', $kantong->nama_kantong)->where('project_code', $project_code);
                                ?>

                                <?php $__currentLoopData = $itemEntry; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($entry->nama_item); ?></td>
                                        <td><?php echo e($entry->quantity); ?></td>
                                        <td>Entry</td>
                                        <td><?php echo e($kantong->nama_kantong); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $itemExit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($exit->nama_item); ?></td>
                                        <td><?php echo e($exit->quantity); ?></td>
                                        <td>Exit</td>
                                        <td><?php echo e($kantong->nama_kantong); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $itemAdmin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($admin->nama_item); ?></td>
                                        <td><?php echo e($admin->quantity); ?></td>
                                        <td>Admin</td>
                                        <td><?php echo e($kantong->nama_kantong); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $itemRambu = $itemRambus->where('project_code', $project_code);
                ?>
                <?php $__currentLoopData = $itemRambu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rambu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($rambu->nama_item); ?></td>
                        <td><?php echo e($rambu->quantity); ?></td>
                        <td>Rambu</td>
                        <td>-</td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <?php $__env->stopSection(); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#myDataTable').DataTable({
                paging: true,
                searching: true,
                ordering: true,
                info: true,
                responsive: true,
                "pageLength": 10
            });
        });
    </script>
</body>

</html>
<?php echo $__env->make('Layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Documents\PT Centrepark Citra Corpora\ProjectManagement\tesproject\resources\views/locationpage.blade.php ENDPATH**/ ?>