;

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">
        <!--Mensaje Flash-->
        <?php if(session('grupoModificado')): ?>
        <div class="alert alert-success text-center">
            <?php echo e(session ('grupoModificado')); ?>

        </div>
        <?php endif; ?>

         <!--Validación de Errores-->
         <?php if($errors->any()): ?>
            <div class="alert alert-danger text-center">
            <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            </div>
            <?php endif; ?>
            <div class="card">
                <form action="<?php echo e(route('editG',$grupo->id)); ?>" method="POST">
                <?php echo csrf_field(); ?> <?php echo method_field('PATCH'); ?>
                    <div class="card-header text-center">MODIFICAR GRUPO</div>
                    
                    <div class="card-body"> 
                    <div class="row form-group">
                         <label for="" class="col-2">Semestre</label>
                         <input type="text" name="semestre" class="form-control col-md-9" value="<?php echo e($grupo->semestre); ?>">
                        </div>
                        <div class="row form-group">
                         <label for="" class="col-2">Grupo</label>
                         <input type="text" name="grupo" class="form-control col-md-9" value="<?php echo e($grupo->grupo); ?>">
                        </div>
                        <div class="row form-group">
                         <label for="" class="col-2">Turno</label>
                         <input type="text" name="turno" class="form-control col-md-9" value="<?php echo e($grupo->turno); ?>">
                        </div>
                        <div class="row form-group">
                        <button type="submit" class="btn btn-success col-md-9 offset-2"><i class="fas fa-save"></i> Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <a class="btn btn-success mb-5" href="<?php echo e(url('/grupos')); ?>"><i class="fas fa-arrow-circle-left"></i> Volver</a>
</div>
<?php echo $__env->make('layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jonathan/Escritorio/CrudV2/resources/views/grupos/editarGrupos.blade.php ENDPATH**/ ?>