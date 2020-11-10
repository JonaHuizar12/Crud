<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">

          <!--Mensaje Flash-->
          <?php if(session('success')): ?>
            <div class="alert alert-success text-center">
            <?php echo e(session('success')); ?>

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
                <form action="<?php echo e(route('save')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                    <div class="card-header text-center">AGREGAR ESTUDIANTE</div>
                    
                    <div class="card-body"> 
                        <div class="row form-group">
                         <label for="" class="col-2">Grupo</label>
                         <select name="grupo"  class="form-control col-md-9">
                         <option value="">Seleccione un grupo</option>
                         <?php $__currentLoopData = $grupos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grupo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <option value="<?php echo e($grupo['id']); ?>" <?php echo e(old('grupo') == $grupo['id'] ? 'selected' : ''); ?>><?php echo e($grupo['grupo']); ?></option>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         </select>
                        </div>
                        <div class="row form-group">
                         <label for="" class="col-2">Nombre</label>
                         <input type="text" name="nombre" value ="<?php echo e(old('nombre')); ?>" class="form-control col-md-9" autocomplete="off">
                        </div>
                        <div class="row form-group">
                         <label for="" class="col-2">Apellidos</label>
                         <input type="text" name="apellidos" value ="<?php echo e(old('apellidos')); ?>" class="form-control col-md-9" autocomplete="off">
                        </div>
                        <div class="row form-group">
                         <label for="" class="col-2">Edad</label>
                         <input type="text" name="edad" value ="<?php echo e(old('edad')); ?>" class="form-control col-md-9" autocomplete="off">
                        </div>
                        <div class="row form-group">
                         <label for="" class="col-2">Email</label>
                         <input type="text" name="email" value ="<?php echo e(old('email')); ?>" class="form-control col-md-9" autocomplete="off">
                        </div>
                        <div class="row form-group">
                         <label for="" class="col-2">Teléfono</label>
                         <input type="text" name="telefono" value ="<?php echo e(old('telefono')); ?>" class="form-control col-md-9" autocomplete="off">
                        </div>
                        <div class="row form-group">
                        <button type="submit" class="btn btn-success col-md-9 offset-2"><i class="fas fa-save"></i> Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <a class="btn btn-success mb-5" href="<?php echo e(url('/')); ?>"><i class="fas fa-arrow-circle-left"></i> Volver</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jonathan/Escritorio/CrudV2/resources/views/estudiantes/studentform.blade.php ENDPATH**/ ?>