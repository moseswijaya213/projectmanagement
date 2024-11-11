<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo e(asset('css\styles.css')); ?>">
</head>

<body class="loginregister">
    <div class="loginform">
        <form class="form" action="<?php echo e(url('login')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <img class="logoimg" src="Logocp.png" alt="" width="150px" height="50px">
            <div class="input-block">
                <input class="inputloginregister" type="text" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-block">
                <input class="inputloginregister" type="password" id="password" name="password" placeholder="Password" required>
            </div>

            <?php if($errors->any()): ?>
                <div class="error-message">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($error); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>

            <button class="submitbutton" type="submit">Login</button>
        </form>
    </div>

</body>

</html><?php /**PATH D:\CP\apps\tesproject\resources\views/login.blade.php ENDPATH**/ ?>