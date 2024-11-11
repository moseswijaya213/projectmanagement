<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item Project</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    

    <?php $__env->startSection('content'); ?>
    <h1 class="bolder">Item Project Data</h1>
    <hr>
    <form class="itemform" method="post" action="">
        <?php echo csrf_field(); ?>
        <div class="topproject">
            <p class="title-project">Project Code : <?php echo e($project->project_code); ?></p>
            <input type="hidden" name="project_code" value="<?php echo e($project->project_code); ?>" readonly>
        </div>
        <div class="item-form-content">
            <?php $__currentLoopData = $kantongList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kantong): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="itemkantongform">
                        <div class="itemheader">
                            <label class="judulkantongitem">Access Requirements <?php echo e($kantong->nama_kantong); ?></label>
                            <input type="hidden" name="nama_kantong[]" value="<?php echo e($kantong->nama_kantong); ?>">
                        </div>

                        <div class="displayaccess">
                            <?php if($accessData->has($kantong->nama_kantong)): ?>
                                            <?php $__currentLoopData = $accessData[$kantong->nama_kantong]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $access): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="entryexitdisplay">
                                                    <div class="templateaccess">Entry access</div>
                                                    <div class="templatekendaraan">- <?php echo e($access->jenis_kendaraan); ?></div>
                                                    <div class="templateunit">: <?php echo e($access->entry_access); ?> unit</div>
                                                    <div class="templateaccess">Exit access -</div>
                                                    <div class="templatekendaraan"><?php echo e($access->jenis_kendaraan); ?></div>
                                                    <div>: <?php echo e($access->exit_access); ?> unit</div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <div class="total-access-display">
                                                <div class="totalaccess">
                                                    <?php
                                                        $totalEntry = 0;
                                                        $totalExit = 0;
                                                        if ($accessData->has($kantong->nama_kantong)) {
                                                            foreach ($accessData[$kantong->nama_kantong] as $access) {
                                                                $totalEntry += $access->entry_access;
                                                                $totalExit += $access->exit_access;
                                                            }
                                                        }
                                                    ?>
                                                    <div class="access-totals">
                                                        <div>Total Entry <?php echo e($totalEntry); ?> unit, Total Exit <?php echo e($totalExit); ?> unit</div>
                                                    </div>
                                                </div>
                                            </div>
                            <?php else: ?>
                                <p>Tidak ada Access Line</p>
                            <?php endif; ?>
                        </div>

                        <div class="kantong-item">
                            <div class="entry-access">
                                <Label class="bolder">ENTRY CONTROL SYSTEM & HARDWARE</Label>
                                <div class="item-block">
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" name="nama_item_entry[<?php echo e($loop->index); ?>][]" type="text"
                                        value="Barrier Gate GS001 Including Loop Detector" required>
                                    <input class="iteminput" name="quantity_entry[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="<?php echo e($totalEntry); ?>" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" name="nama_item_entry[<?php echo e($loop->index); ?>][]" type="text"
                                        value="Dispenser Cashless with LCD Monitor" required>
                                    <input class="iteminput" name="quantity_entry[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="<?php echo e($totalEntry); ?>" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" name="nama_item_entry[<?php echo e($loop->index); ?>][]" type="text"
                                        value="Cpu Cashless / Industrial Mini PC + PCIO 4 Port" required>
                                    <input class="iteminput" name="quantity_entry[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="<?php echo e($totalEntry); ?>" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" name="nama_item_entry[<?php echo e($loop->index); ?>][]" type="text"
                                        value="Thermal Printer EP-802 (Include Adaptor + Kabel Data)" required>
                                    <input class="iteminput" name="quantity_entry[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="<?php echo e($totalEntry); ?>" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" name="nama_item_entry[<?php echo e($loop->index); ?>][]" type="text"
                                        value="UPS Manless 1200 va" required>
                                    <input class="iteminput" name="quantity_entry[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="<?php echo e($totalEntry); ?>" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" name="nama_item_entry[<?php echo e($loop->index); ?>][]" type="text"
                                        value="Card Reader MSI Entry + Sam Brizzi (SAM disediakan oleh Smartpay)" required>
                                    <input class="iteminput" name="quantity_entry[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="<?php echo e($totalEntry); ?>" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" name="nama_item_entry[<?php echo e($loop->index); ?>][]" type="text"
                                        value="IP Camera + Tiang PK + Housing for Face" required>
                                    <input class="iteminput" name="quantity_entry[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="<?php echo e($totalEntry); ?>" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" name="nama_item_entry[<?php echo e($loop->index); ?>][]" type="text"
                                        value="IP Camera + Tiang PM + Housing for CCTV hardware Surveillance" required>
                                    <input class="iteminput" name="quantity_entry[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="<?php echo e($totalEntry); ?>" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" name="nama_item_entry[<?php echo e($loop->index); ?>][]" type="text"
                                        value="Booster" required>
                                    <input class="iteminput" name="quantity_entry[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="<?php echo e($totalEntry); ?>" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" name="nama_item_entry[<?php echo e($loop->index); ?>][]" type="text"
                                        value="Speaker + Amply" required>
                                    <input class="iteminput" name="quantity_entry[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="<?php echo e($totalEntry); ?>" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" name="nama_item_entry[<?php echo e($loop->index); ?>][]" type="text"
                                        value="Intercom PA 2 Kit + Adaptor" required>
                                    <input class="iteminput" name="quantity_entry[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="<?php echo e($totalEntry); ?>" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" name="nama_item_entry[<?php echo e($loop->index); ?>][]" type="text"
                                        value="VLD Loop Detector for Double Loop (Optional Double Loop)" required>
                                    <input class="iteminput" name="quantity_entry[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="<?php echo e($totalEntry); ?>" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" name="nama_item_entry[<?php echo e($loop->index); ?>][]" type="text" value="Canopy"
                                        required>
                                    <input class="iteminput" name="quantity_entry[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="<?php echo e($totalEntry); ?>" required>
                                </div>
                                <button class="itembutton">+ New Item</button>
                            </div>
                            <div class="exit-access">
                                <Label class="bolder">EXIT CONTROL SYSTEM & HARDWARE</Label>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" name="nama_item_exit[<?php echo e($loop->index); ?>][]" type="text"
                                        value="Barrier Gate GS001 Including Loop Detector" required>
                                    <input class="iteminput" name="quantity_exit[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="<?php echo e($totalExit); ?>" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" name="nama_item_exit[<?php echo e($loop->index); ?>][]" type="text"
                                        value="Dispenser Cashless with LCD Monitor" required>
                                    <input class="iteminput" name="quantity_exit[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="<?php echo e($totalExit); ?>" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" name="nama_item_exit[<?php echo e($loop->index); ?>][]" type="text"
                                        value="Cpu Cashless / Industrial Mini PC + PCIO 4 Port" required>
                                    <input class="iteminput" name="quantity_exit[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="<?php echo e($totalExit); ?>" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" name="nama_item_exit[<?php echo e($loop->index); ?>][]" type="text"
                                        value="Thermal Printer EP-802 (Include Adaptor + Kabel Data)" required>
                                    <input class="iteminput" name="quantity_exit[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="<?php echo e($totalExit); ?>" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" name="nama_item_exit[<?php echo e($loop->index); ?>][]" type="text"
                                        value="QR Barcode Scanner Honeywell" required>
                                    <input class="iteminput" name="quantity_exit[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="<?php echo e($totalExit); ?>" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" name="nama_item_exit[<?php echo e($loop->index); ?>][]" type="text"
                                        value="UPS Manless 1200 va" required>
                                    <input class="iteminput" name="quantity_exit[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="<?php echo e($totalExit); ?>" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" name="nama_item_exit[<?php echo e($loop->index); ?>][]" type="text"
                                        value="Card Reader STI Out" required>
                                    <input class="iteminput" name="quantity_exit[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="<?php echo e($totalExit); ?>" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" name="nama_item_exit[<?php echo e($loop->index); ?>][]" type="text"
                                        value="IP Camera + Tiang PK + Housing for Face" required>
                                    <input class="iteminput" name="quantity_exit[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="<?php echo e($totalExit); ?>" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" name="nama_item_exit[<?php echo e($loop->index); ?>][]" type="text"
                                        value="IP Camera + Tiang PM + Housing for CCTV hardware Surveillance" required>
                                    <input class="iteminput" name="quantity_exit[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="<?php echo e($totalExit); ?>" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" name="nama_item_exit[<?php echo e($loop->index); ?>][]" type="text"
                                        value="VLD Loop Detector for Double Loop (Optional Double Loop)" required>
                                    <input class="iteminput" name="quantity_exit[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="<?php echo e($totalExit); ?>" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" name="nama_item_exit[<?php echo e($loop->index); ?>][]" type="text" value="Booster"
                                        required>
                                    <input class="iteminput" name="quantity_exit[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="<?php echo e($totalExit); ?>" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" name="nama_item_exit[<?php echo e($loop->index); ?>][]" type="text"
                                        value="Speaker + Amply">
                                    <input class="iteminput" name="quantity_exit[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="<?php echo e($totalExit); ?>">
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" name="nama_item_exit[<?php echo e($loop->index); ?>][]" type="text"
                                        value="Intercom PA 2 Kit + Adaptor" required>
                                    <input class="iteminput" name="quantity_exit[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="<?php echo e($totalExit); ?>" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" name="nama_item_exit[<?php echo e($loop->index); ?>][]" type="text" value="Canopy"
                                        required>
                                    <input class="iteminput" name="quantity_exit[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="<?php echo e($totalExit); ?>" required>
                                </div>
                                <button class="itembutton">+ New Item</button>
                            </div>
                            <div class="admin">
                                <Label class="bolder">ADMINISTRATION & SERVER UNTUK CONTROL ROOM</Label>
                                <button type="button" class="delete-admin-form">Delete Admin</button>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" name="nama_item_admin[<?php echo e($loop->index); ?>][]" type="text"
                                        value="PC Server" required>
                                    <input class="iteminput" name="quantity_admin[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="1" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" type="text" name="nama_item_admin[<?php echo e($loop->index); ?>][]" class=""
                                        value="PC Admin" required>
                                    <input class="iteminput" name="quantity_admin[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="1" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" type="text" name="nama_item_admin[<?php echo e($loop->index); ?>][]" class=""
                                        value="CPU Workstation for Remote Server" required>
                                    <input class="iteminput" name="quantity_admin[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="1" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" type="text" name="nama_item_admin[<?php echo e($loop->index); ?>][]" class=""
                                        value="Printer Admin Epson LX - 310" required>
                                    <input class="iteminput" name="quantity_admin[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="1" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" type="text" name="nama_item_admin[<?php echo e($loop->index); ?>][]" class=""
                                        value="QR Barcode Scanner Honeywell" required>
                                    <input class="iteminput" name="quantity_admin[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="1" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" type="text" name="nama_item_admin[<?php echo e($loop->index); ?>][]" class=""
                                        value="Card Reader MSI Entry" required>
                                    <input class="iteminput" name="quantity_admin[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="1" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" type="text" name="nama_item_admin[<?php echo e($loop->index); ?>][]" class=""
                                        value="UPS 2000 VA for Server" required>
                                    <input class="iteminput" name="quantity_admin[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="1" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" type="text" name="nama_item_admin[<?php echo e($loop->index); ?>][]" class=""
                                        value="UPS 1200 VA for Admin" required>
                                    <input class="iteminput" name="quantity_admin[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="1" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" type="text" name="nama_item_admin[<?php echo e($loop->index); ?>][]" class=""
                                        value="UPS 1200 VA for PC Remote Server" required>
                                    <input class="iteminput" name="quantity_admin[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="1" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" type="text" name="nama_item_admin[<?php echo e($loop->index); ?>][]" class=""
                                        value="IP Camera Indoor for Hardware Surveillance" required>
                                    <input class="iteminput" name="quantity_admin[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="1" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" type="text" name="nama_item_admin[<?php echo e($loop->index); ?>][]" class=""
                                        value="NVR 9 Channel" required>
                                    <input class="iteminput" name="quantity_admin[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="1" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" type="text" name="nama_item_admin[<?php echo e($loop->index); ?>][]" class=""
                                        value="Harddisk 4 TB" required>
                                    <input class="iteminput" name="quantity_admin[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="1" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" type="text" name="nama_item_admin[<?php echo e($loop->index); ?>][]" class=""
                                        value='LCD TV 32" + Bracket' required>
                                    <input class="iteminput" name="quantity_admin[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="1" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" type="text" name="nama_item_admin[<?php echo e($loop->index); ?>][]" class=""
                                        value="Mouse Wireless for NVR" required>
                                    <input class="iteminput" name="quantity_admin[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="1" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" type="text" name="nama_item_admin[<?php echo e($loop->index); ?>][]" class=""
                                        value="Kabel HDMI 15 M" required>
                                    <input class="iteminput" name="quantity_admin[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="1" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" type="text" name="nama_item_admin[<?php echo e($loop->index); ?>][]" class=""
                                        value="Keyboard + Mouse Wireless for Remote Server" required>
                                    <input class="iteminput" name="quantity_admin[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="1" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" type="text" name="nama_item_admin[<?php echo e($loop->index); ?>][]" class=""
                                        value="Converter HFMI to VGA Male" required>
                                    <input class="iteminput" name="quantity_admin[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="1" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" type="text" name="nama_item_admin[<?php echo e($loop->index); ?>][]" class=""
                                        value="Fanvil X1 IP Phone" required>
                                    <input class="iteminput" name="quantity_admin[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="1" required>
                                </div>
                                <div>
                                    <button type="button" class="remove-item" onclick="">-</button>
                                    <input class="item1" type="text" name="nama_item_admin[<?php echo e($loop->index); ?>][]" class=""
                                        value="Yeaster S20 IP PBX" required>
                                    <input class="iteminput" name="quantity_admin[<?php echo e($loop->index); ?>][]" type="number" min="0"
                                        value="1" required>
                                </div>
                                <button class="itembutton">+ New Item</button>
                            </div>

                        </div>
                    </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <br>

        <div class="formrambu">
            <div class="rambuheader">
                <label class="bolder" for="">Rambu Parkir(*) + Lalu-Lintas + Estetika</label>
            </div>
            <div class="rambu">
                <div>
                    <button type="button" class="remove-item" onclick="">-</button>
                    <input class="item1" name="nama_item_rambu[]" type="text" value="RAMBU TARIF IN/OUT (60x120) PLAT"
                        required>
                    <input class="iteminput" name="quantity_rambu[]" type="number" min="0" value="" required>
                </div>

                <div>
                    <button type="button" class="remove-item" onclick="">-</button>
                    <input class="item1" name="nama_item_rambu[]" type="text"
                        value="RAMBU PARKIR PLAT (50x70) 1 MUKA + TIANG" required>
                    <input class="iteminput" name="quantity_rambu[]" type="number" min="0" value="" required>
                </div>

                <div>
                    <button type="button" class="remove-item" onclick="">-</button>
                    <input class="item1" name="nama_item_rambu[]" type="text"
                        value="RAMBU PARKIR PLAT (50x70) 2 MUKA + TIANG" required>
                    <input class="iteminput" name="quantity_rambu[]" type="number" min="0" value="" required>
                </div>

                <div>
                    <button type="button" class="remove-item" onclick="">-</button>
                    <input class="item1" name="nama_item_rambu[]" type="text"
                        value="RAMBU PARKIR GANTUNG PLAT (160x30) 1 MUKA RANTAI" required>
                    <input class="iteminput" name="quantity_rambu[]" type="number" min="0" value="" required>
                </div>

                <div>
                    <button type="button" class="remove-item" onclick="">-</button>
                    <input class="item1" name="nama_item_rambu[]" type="text"
                        value="RAMBU PARKIR GANTUNG PLAT (80x30) 1 MUKA RANTAI" required>
                    <input class="iteminput" name="quantity_rambu[]" type="number" min="0" value="" required>
                </div>

                <div>
                    <button type="button" class="remove-item" onclick="">-</button>
                    <input class="item1" name="nama_item_rambu[]" type="text"
                        value="RAMBU PARKIR GANTUNG PLAT (80x30) 2 MUKA RANTAI" required>
                    <input class="iteminput" name="quantity_rambu[]" type="number" min="0" value="" required>
                </div>

                <div>
                    <button type="button" class="remove-item" onclick="">-</button>
                    <input class="item1" name="nama_item_rambu[]" type="text" value="RAMBU DISCLAIMER (60x65) PLAT"
                        required>
                    <input class="iteminput" name="quantity_rambu[]" type="number" min="0" value="" required>
                </div>

                <div>
                    <button type="button" class="remove-item" onclick="">-</button>
                    <input class="item1" name="nama_item_rambu[]" type="text"
                        value="RAMBU BATAS KETINGGIAN (200x30) PLAT" required>
                    <input class="iteminput" name="quantity_rambu[]" type="number" min="0" value="" required>
                </div>

                <div>
                    <button type="button" class="remove-item" onclick="">-</button>
                    <input class="item1" name="nama_item_rambu[]" type="text" value="SAFETY POLE TAPAK COR" required>
                    <input class="iteminput" name="quantity_rambu[]" type="number" min="0" value="" required>
                </div>

                <div>
                    <button type="button" class="remove-item" onclick="">-</button>
                    <input class="item1" name="nama_item_rambu[]" type="text" value="TRAFFIC CONE + STIKER" required>
                    <input class="iteminput" name="quantity_rambu[]" type="number" min="0" value="" required>
                </div>

                <div>
                    <button type="button" class="remove-item" onclick="">-</button>
                    <input class="item1" name="nama_item_rambu[]" type="text" value="TALI TAMBANG (1 ROL = 200 Meter)"
                        required>
                    <input class="iteminput" name="quantity_rambu[]" type="number" min="0" value="" required>
                </div>
                <button class="itembutton">+ New Item</button>
            </div>
        </div>

        <br>
        <button type="submit" class="submitbutton">Submit</button>
    </form>
    <?php $__env->stopSection(); ?>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.remove-item').forEach(button => {
                button.addEventListener('click', function () {
                    const itemDiv = this.closest('div');
                    if (itemDiv) {
                        itemDiv.remove();
                    }
                });
            });

            document.querySelectorAll('.delete-admin-form').forEach(button => {
                button.addEventListener('click', function () {
                    const adminDiv = this.closest('.admin');
                    if (adminDiv && confirm('Are you sure you want to delete this admin form?')) {
                        adminDiv.innerHTML = '<p class="text-center mt-3">Admin form has been deleted</p>';
                    }
                });
            });

            document.querySelectorAll('.entry-access .itembutton, .exit-access .itembutton, .admin .itembutton').forEach(button => {
                button.addEventListener('click', function (e) {
                    e.preventDefault();
                    const lastItem = this.previousElementSibling;
                    const newItem = lastItem.cloneNode(true);

                    newItem.querySelectorAll('input').forEach(input => {
                        input.value = '';
                    });

                    const removeButton = newItem.querySelector('.remove-item');
                    removeButton.addEventListener('click', function () {
                        this.closest('div').remove();
                    });

                    this.parentNode.insertBefore(newItem, this);
                });
            });

            const rambuButton = document.querySelector('.rambu .itembutton');
            if (rambuButton) {
                rambuButton.addEventListener('click', function (e) {
                    e.preventDefault();
                    const lastItem = this.previousElementSibling;
                    const newItem = lastItem.cloneNode(true);

                    newItem.querySelectorAll('input').forEach(input => {
                        input.value = '';
                    });

                    const removeButton = newItem.querySelector('.remove-item');
                    removeButton.addEventListener('click', function () {
                        this.closest('div').remove();
                    });

                    this.parentNode.insertBefore(newItem, this);
                });
            }
        });
    </script>
</body>

</html>
<?php echo $__env->make('Layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Documents\PT Centrepark Citra Corpora\ProjectManagement\tesproject\resources\views/additem.blade.php ENDPATH**/ ?>