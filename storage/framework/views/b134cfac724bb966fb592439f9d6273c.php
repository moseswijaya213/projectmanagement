<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kantong Parkir</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="title">Invoice PO R</div>
    
    <div class="header">
        <div class="left-section">
            <div class="checkbox-item">
                <input type="checkbox" class="checkbox" id="new-location">
                <label for="new-location">New Location Set Up</label>
            </div>
            <div class="checkbox-item">
                <input type="checkbox" class="checkbox" id="existing-location">
                <label for="existing-location">Existing Location Set Up (Mandatory Approval BD)</label>
            </div>
            <div class="checkbox-item">
                <input type="checkbox" class="checkbox" id="repair">
                <label for="repair">Repair / Replacement Existing Location (BA Attachment)</label>
            </div>
            <div class="location-input">
                <label>Location: <?php echo e($project->project_code); ?></label>
            </div>
        </div>
        
        <div class="right-section">
            <div>Submission Date: <?php echo e(date('D-m-y')); ?></div>
            <div>Expected Date IR:</div>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Item</th>
                <th>Specification</th>
                <th>Quantity</th>
                <th>Unit</th>
                <th>Notes</th>
            </tr>
        </thead>
        <tbody>
            <?php $counter = 1; ?>
            
            <?php $__currentLoopData = $kantongList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kantong): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- Entry Items -->
                <?php $__currentLoopData = $accessData[$kantong->nama_kantong]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $access): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $nama_item_entry[$loop->parent->index]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($counter++); ?></td>
                            <td><?php echo e($item); ?></td>
                            <td>Entry Control System</td>
                            <td><?php echo e($quantity_entry[$loop->parent->index][$key]); ?></td>
                            <td>Unit</td>
                            <td><?php echo e($kantong->nama_kantong); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <!-- Exit Items -->
                    <?php $__currentLoopData = $nama_item_exit[$loop->parent->index]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($counter++); ?></td>
                            <td><?php echo e($item); ?></td>
                            <td>Exit Control System</td>
                            <td><?php echo e($quantity_exit[$loop->parent->index][$key]); ?></td>
                            <td>Unit</td>
                            <td><?php echo e($kantong->nama_kantong); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <!-- Admin Items -->
                    <?php $__currentLoopData = $nama_item_admin[$loop->parent->index]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($counter++); ?></td>
                            <td><?php echo e($item); ?></td>
                            <td>Administration System</td>
                            <td><?php echo e($quantity_admin[$loop->parent->index][$key]); ?></td>
                            <td>Unit</td>
                            <td><?php echo e($kantong->nama_kantong); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <!-- Rambu Items -->
            <?php $__currentLoopData = $nama_item_rambu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($counter++); ?></td>
                    <td><?php echo e($item); ?></td>
                    <td>Rambu & Signage</td>
                    <td><?php echo e($quantity_rambu[$key]); ?></td>
                    <td>Unit</td>
                    <td>Traffic Sign</td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <button class="download-btn" onclick="window.print()">Download PDF</button>
</body>
</html><?php /**PATH C:\Documents\PT Centrepark Citra Corpora\ProjectManagement\tesproject\resources\views/generatePDF.blade.php ENDPATH**/ ?>