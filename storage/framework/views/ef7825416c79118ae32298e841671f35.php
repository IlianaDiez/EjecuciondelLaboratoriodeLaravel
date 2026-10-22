<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <h4>¡Bienvenido(a), <?php echo e(Auth::user()->name); ?>!</h4>
                    <p class="text-muted mb-4">Has iniciado sesión correctamente en el laboratorio de Laravel.</p>

                    <ul class="list-group">
                        <li class="list-group-item"><strong>Correo:</strong> <?php echo e(Auth::user()->email); ?></li>
                        <li class="list-group-item"><strong>Registrado el:</strong> <?php echo e(Auth::user()->created_at->format('d/m/Y H:i')); ?></li>
                        <li class="list-group-item"><strong>Universidad:</strong> Universidad Tecnológica de Panamá</li>
                        <li class="list-group-item"><strong>Curso:</strong> Desarrollo Web</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\wamp64\www\LabLogin\resources\views/home.blade.php ENDPATH**/ ?>