<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-center mb-5">Grupos</h2>
            <a class="btn btn-success mb-5" href="<?php echo e(url('/formG')); ?>"><i class="fas fa-plus"></i> Agregar Grupo</a>

            <!--Mensaje de Borrar-->

            <?php if(session('grupoEliminado')): ?>
            <div class="alert alert-success text-center">
            <?php echo e(session('grupoEliminado')); ?>

            </div>
            <?php endif; ?>
            
            <table class="table table-bordered table-striped text-center">
                <thead>
                <tr>
                    <th>Id Grupo</th>
                    <th>Semestre</th>
                    <th>Grupo</th>
                    <th>Turno</th>
                </tr>
                </thead>

                <tbody>
                <?php $__currentLoopData = $grupos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $groups): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($groups->id); ?></td>
                        <td><?php echo e($groups->semestre); ?></td>
                        <td><?php echo e($groups->grupo); ?></td>
                        <td><?php echo e($groups->turno); ?></td>
                        <td>

                        <a href="<?php echo e(route('editFormG', $groups->id)); ?>" class="btn btn-primary mb-2">
                        <i class="fas fa-pencil-alt"></i>
                        </a>
                        <form action="<?php echo e(route('deleteG', $groups->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>

                        <button type="submit" onclick="return confirm('¿Seguro que desea borrar al usuario?');" class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                        </form>
                        
                        </td>
                        
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

            <?php echo e($grupos-> links()); ?>


        </div>
    </div>

    <a class="btn btn-success mb-5" href="<?php echo e(url('/')); ?>"><i class="fas fa-arrow-circle-left"></i> Volver</a>
</div>
<?php echo $__env->make('layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jonathan/Escritorio/CrudV2/resources/views/grupos/listarGrupos.blade.php ENDPATH**/ ?>