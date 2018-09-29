<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acme</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <?php echo $__env->make('inc/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                        <?php echo $__env->yieldContent('content'); ?>
                </div>
                <div class="col-lg-4 col-md-4">
                        <?php echo $__env->make('inc/sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
    </div>
    
</body>
</html>