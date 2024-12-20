<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="<?php echo e(asset('css\styles.css')); ?>">
</head>

<body class="loginregister">
    <div class="loginform">
        <form class="formm" action="<?php echo e(url('register')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <img class="logoimg" src="Logocp.png" alt="" width="150px" height="50px">
            <div class="input-block">
                <input class="inputloginregister" type="text" id="name" name="name" placeholder="Name" required>
            </div>
            <div class="input-block">
                <input class="inputloginregister" type="text" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-block">
                <input class="inputloginregister" type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <button class="submitbutton" type="submit">Register</button>
        </form>
    </div>

</body>

</html><?php /**PATH C:\Documents\PT Centrepark Citra Corpora\ProjectManagement\tesproject\resources\views/register.blade.php ENDPATH**/ ?>