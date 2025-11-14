<div wire:poll.3s class="container">
    <div class="row">
        <h1 class="text-center mt-4"><?php echo e($title); ?> (<?php echo e($usersCount); ?>)</h1>
        <hr>

        <!--[if BLOCK]><![endif]--><?php if(session('msg')): ?>
        <div class="alert alert-success"><?php echo e(session('msg')); ?></div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

        <div class="col-12 col-md-6">
            <h3>Listado de Usuarios</h3>
            <hr>

            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('list-users',['lazy'=>true]);

$__html = app('livewire')->mount($__name, $__params, 'lw-3633130159-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

        </div>

        <div class="col-12 col-md-6">
            <h3>Crear Usuario</h3>
            <hr>
            <form wire:submit='createUser'>
                <div class="mb-3">
                    <input wire:model='name' class="form-control" type="text" placeholder="Nombre">
                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span style="color:red;"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                </div>

                <div class="mb-3">
                    <input wire:model='email' class="form-control" type="email" placeholder="Email">
                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span style="color:red;"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                </div>

                <div class="mb-3">
                    <input wire:model='password' class="form-control" type="password" placeholder="Contraseña">
                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span style="color:red;"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                </div>

                <div class="mb-3">
                    <input wire:model='image' type="file" accept="image/png, image/jpeg">
                    <div wire:loading wire:target='image' class="spinner-border spinner-border-sm" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p style="color:red;"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->

                    <div class="mt-3 text-center">
                        <!--[if BLOCK]><![endif]--><?php if($image): ?>
                            <img src="<?php echo e($image->temporaryUrl()); ?>" alt="Preview" width="400">
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    </div>
                </div>

                <button wire:loading.attr='disabled' wire:target='createUser' class="btn btn-primary">Crear Usuario</button>

                <div wire:loading wire:target='createUser' class="mt-3">
                    Enviando...
                </div>
            </form>
        </div>

    </div>
</div><?php /**PATH C:\laragon\www\curso-livewire3\resources\views/livewire/users-component.blade.php ENDPATH**/ ?>