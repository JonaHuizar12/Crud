<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-center mb-5">Estudiantes</h2>
            <a class="btn btn-success mb-5" href="<?php echo e(url('/form')); ?>"><i class="fas fa-plus"></i> Agregar Estudiante</a>
            <a class="btn btn-success mb-5" href="<?php echo e(url('/grupos')); ?>"><i class="fas fa-list"></i> Lista de Grupos</a>

            <!--Mensaje Flash-->
            <?php if(session('success')): ?>
            <div class="alert alert-success text-center">
            <?php echo e(session ('success')); ?>

            </div>
            <?php endif; ?>

            <table class="table table-bordered table-striped text-center">
                <thead>
                <tr>
                    <th>Matricula</th>
                    <th>Grupo Id</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Edad</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
                </thead>

                <tbody>
                <?php $__currentLoopData = $estudiantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $students): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($students->id); ?></td>
                        <td><?php echo e($students->grupo_id); ?></td>
                        <td><?php echo e($students->nombre); ?></td>
                        <td><?php echo e($students->apellidos); ?></td>
                        <td><?php echo e($students->edad); ?></td>
                        <td><?php echo e($students->email); ?></td>
                        <td><?php echo e($students->telefono); ?></td>

                        <td>

                        <a href="<?php echo e(route('editForm', $students->id)); ?>" class="btn btn-primary mb-2">
                        <i class="fas fa-pencil-alt"></i>
                        </a>
                        <form action="<?php echo e(route('delete', $students->id)); ?>" method="POST">
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

            <?php echo e($estudiantes-> links()); ?>


        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jonathan/Escritorio/CrudV2/resources/views/estudiantes/listar.blade.php ENDPATH**/ ?>