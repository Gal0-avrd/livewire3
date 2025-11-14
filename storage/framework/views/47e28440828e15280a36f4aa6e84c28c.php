<div wire:poll.3s>
    <div class="d-flex">
        <select wire:model.live='numberRows' class="form-control"
            style="width: 3rem; margin-right: 1rem;">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
        </select>
        <input wire:model.live='search' type="text" class="form-control" placeholder="Buscar">
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($user->id); ?></td>
                <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td>
                    <img src="<?php echo e(Storage::url('public/'.$user->image)); ?>" width="75">
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </tbody>

    </table>
    <?php echo e($users->links()); ?>

</div><?php /**PATH C:\laragon\www\curso-livewire3\resources\views/livewire/list-users.blade.php ENDPATH**/ ?>