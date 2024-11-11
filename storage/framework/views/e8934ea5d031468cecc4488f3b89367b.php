<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>
    <link rel="stylesheet" href="<?php echo e(asset('css\styles.css')); ?>">
</head>

<body>
    <div class="sidebar">
        <div class="sidebarhead">
            <img class="logoimg" src="logocpp.jpg" alt="" width="180px" height="90px">
            <div class="welcometxt">
                <?php echo e(Auth::user()->name); ?> - Role
            </div>
        </div>

        <ul>
            <div>Menu</div>
            <hr>
            <li class="topmenu"><a href="home">Dashboard</a></li>
            <li class="dropdown">
                <a href="">Manage Projects
                    <ul class="dropdown-content">
                        <li><a href="addproject">Add New Project</a></li>
                        <li><a href="addkantong">Add Kantong Parkir</a></li>
                        <li><a href="addacc">Add Access Kantong Parkir</a></li>
                        <li><a href="additem">Add Item Project</a></li>
                    </ul>
                </a>
            </li>
            <li><a href="projects">Projects</a></li>
            <li><a href="register">Regist User</a></li>
        </ul>
    </div>

    <div class="content">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>

</html><?php /**PATH C:\Documents\PT Centrepark Citra Corpora\ProjectManagement\tesproject\resources\views/Layouts/app.blade.php ENDPATH**/ ?>