<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-bold text-2xl text-slate-800 leading-tight flex items-center gap-2">
            👋 Selamat Datang, <?php echo e(Auth::user()->name); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12 bg-slate-50 min-h-[calc(100vh-65px)]">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-gradient-to-r from-blue-600 to-sky-500 rounded-2xl shadow-lg p-6 md:p-10 text-white mb-8 mx-4 sm:mx-0 relative overflow-hidden">
                <div class="relative z-10 max-w-xl">
                    <h1 class="text-2xl md:text-4xl font-extrabold mb-2">Jelajahi Kepulauan Riau Tanpa Hambatan</h1>
                    <p class="text-blue-100 text-sm md:text-base">Pantau jadwal kapal, info logistik, dan kondisi penyeberangan terkini dalam satu genggaman.</p>
                </div>
                <div class="absolute right-0 bottom-0 text-9xl opacity-10 font-bold pointer-events-none select-none">🚢</div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mx-4 sm:mx-0">
                
                <a href="<?php echo e(route('schedules.index')); ?>" class="group bg-white p-6 rounded-2xl shadow-sm hover:shadow-md border border-slate-100 transition-all duration-200 hover:-translate-y-1">
                    <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center text-2xl mb-4 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        ⚓
                    </div>
                    <h3 class="text-lg font-bold text-slate-800 mb-1 group-hover:text-blue-600 transition-colors">Papan Jadwal Kapal</h3>
                    <p class="text-slate-500 text-sm">Cek jadwal Speedboat, Roro, dan Pompong antarpulau secara real-time.</p>
                    <div class="mt-4 text-xs font-semibold text-blue-600 flex items-center gap-1">
                        Buka Jadwal <span class="group-hover:translate-x-1 transition-transform">➔</span>
                    </div>
                </a>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\startuptech\resources\views/dashboard.blade.php ENDPATH**/ ?>