

<?php $__env->startSection('title','Inicio'); ?>

<?php $__env->startSection('mis_estilos'); ?>
    <link href="<?= URL . 'css/cover.css'?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="content">
    <h1>Página de Inicio</h1>
    <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
    <p class="lead">
        <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Learn more</a>
    </p>
    <p><?php echo e($name); ?></p>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('mis_scripts'); ?>
    <script src="<?= URL . 'js/pruebas.js'?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\miBodegaWeb\app\views/home/index.blade.php ENDPATH**/ ?>