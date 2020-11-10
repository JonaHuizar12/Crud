<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">
        

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
            <!--Mensaje Flash-->
           
            <div class="card">
                <form action="<?php echo e(route('saveG')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                    <div class="card-header text-center">AGREGAR GRUPO</div>
                    
                    <div class="card-body"> 
                        <div class="row form-group">
                         <label for="" class="col-2">Semestre</label>
                         <input type="text" name="semestre" value ="<?php echo e(old('semestre')); ?>" class="form-control col-md-9" autocomplete="off">
                        </div>
                        <div class="row form-group">
                         <label for="" class="col-2">Grupo</label>
                         <input type="text" name="grupo" value ="<?php echo e(old('grupo')); ?>" class="form-control col-md-9" autocomplete="off">
                        </div>
                        <div class="row form-group">
                         <label for="" class="col-2">Turno</label>
                         <input type="text" name="turno" value ="<?php echo e(old('turno')); ?>" class="form-control col-md-9" autocomplete="off">
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jonathan/Escritorio/CrudV2/resources/views/grupos/gruposform.blade.php ENDPATH**/ ?>