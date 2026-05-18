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
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                🚢 Papan Jadwal Kapal Kepri
            </h2>
            <span class="text-xs text-slate-500 bg-slate-100 px-3 py-1 rounded-full font-medium hidden sm:inline-block">
                Update Otomatis
            </span>
        </div>
     <?php $__env->endSlot(); ?>

    <div class="py-8 bg-slate-50 min-h-[calc(100vh-65px)]">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 mb-8 mx-4 sm:mx-0">
                <h3 class="text-sm font-bold text-slate-400 uppercase tracking-wider mb-4">Cari Rute Penyeberangan</h3>
                <form action="<?php echo e(route('schedules.index')); ?>" method="GET" class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-600 mb-1">Dari Pulau</label>
                        <select name="origin" class="w-full rounded-xl border-slate-200 bg-slate-50 text-slate-700 focus:border-blue-500 focus:ring-blue-500 transition-all text-sm shadow-sm">
                            <option value="">⚓ Semua Pulau Asal</option>
                            <?php $__currentLoopData = $islands ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $island): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($island->id); ?>" <?php echo e(request('origin') == $island->id ? 'selected' : ''); ?>><?php echo e($island->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-600 mb-1">Ke Pulau</label>
                        <select name="destination" class="w-full rounded-xl border-slate-200 bg-slate-50 text-slate-700 focus:border-blue-500 focus:ring-blue-500 transition-all text-sm shadow-sm">
                            <option value="">🎯 Semua Pulau Tujuan</option>
                            <?php $__currentLoopData = $islands ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $island): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($island->id); ?>" <?php echo e(request('destination') == $island->id ? 'selected' : ''); ?>><?php echo e($island->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="flex items-end">
                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2.5 px-4 rounded-xl shadow-md shadow-blue-200 hover:shadow-lg transition-all duration-200">
                            Saring Jadwal
                        </button>
                    </div>
                </form>
            </div>

            <div class="space-y-4 mx-4 sm:mx-0">
                <?php $__empty_1 = true; $__currentLoopData = $schedules ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 hover:border-blue-200 p-5 transition-all duration-200 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                        
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl flex items-center justify-center text-xl shrink-0
                                <?php echo e($schedule->ship_type == 'Speedboat' ? 'bg-cyan-50 text-cyan-600' : ''); ?>

                                <?php echo e($schedule->ship_type == 'Roro' ? 'bg-indigo-50 text-indigo-600' : ''); ?>

                                <?php echo e($schedule->ship_type == 'Pompong Besar' ? 'bg-amber-50 text-amber-600' : ''); ?>

                                <?php echo e($schedule->ship_type == 'Kapal Pelni' ? 'bg-emerald-50 text-emerald-600' : ''); ?>">
                                <?php echo e($schedule->ship_type == 'Speedboat' ? '⚡' : ''); ?>

                                <?php echo e($schedule->ship_type == 'Roro' ? '🚢' : ''); ?>

                                <?php echo e($schedule->ship_type == 'Pompong Besar' ? '🛶' : ''); ?>

                                <?php echo e($schedule->ship_type == 'Kapal Pelni' ? '🏢' : ''); ?>

                            </div>
                            <div>
                                <div class="flex items-center gap-2 flex-wrap">
                                    <h4 class="font-bold text-lg text-slate-800"><?php echo e($schedule->ship_name); ?></h4>
                                    <span class="text-[10px] font-extrabold tracking-wide uppercase px-2 py-0.5 rounded-md bg-slate-100 text-slate-600">
                                        <?php echo e($schedule->ship_type); ?>

                                    </span>
                                </div>
                                <div class="text-slate-600 font-medium text-sm mt-1 flex items-center gap-2">
                                    <span><?php echo e($schedule->origin->name); ?></span>
                                    <span class="text-slate-400">➔</span>
                                    <span><?php echo e($schedule->destination->name); ?></span>
                                </div>
                                <?php if($schedule->notes): ?>
                                    <p class="text-xs text-amber-600 mt-2 bg-amber-50/60 px-3 py-1 rounded-lg inline-block">💡 <?php echo e($schedule->notes); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="flex sm:flex-col justify-between sm:items-end border-t sm:border-t-0 pt-3 sm:pt-0 border-slate-100">
                            <div class="text-right">
                                <span class="text-xs text-slate-400 block sm:mb-0.5">Harga Tiket</span>
                                <span class="text-lg font-black text-slate-900">Rp <?php echo e(number_format($schedule->price, 0, ',', '.')); ?></span>
                            </div>
                            
                            <div class="mt-2 flex items-center gap-4 sm:gap-3 text-sm">
                                <div class="bg-slate-100 font-bold text-slate-700 px-2.5 py-1 rounded-lg text-xs">
                                    🕒 <?php echo e(date('H:i', strtotime($schedule->departure_time))); ?> WIB
                                </div>
                                <span class="font-bold text-xs uppercase px-2.5 py-1 rounded-lg
                                    <?php echo e($schedule->status == 'Aman' ? 'bg-emerald-50 text-emerald-700' : ''); ?>

                                    <?php echo e($schedule->status == 'Tunda' ? 'bg-amber-50 text-amber-700' : ''); ?>

                                    <?php echo e($schedule->status == 'Batal' ? 'bg-red-50 text-red-700' : ''); ?>">
                                    ● <?php echo e($schedule->status); ?>

                                </span>
                            </div>
                        </div>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="bg-white p-12 rounded-2xl shadow-sm border border-slate-100 text-center text-slate-400 mx-4 sm:mx-0">
                        <span class="text-4xl block mb-2">🔍</span>
                        Tidak ada jadwal kapal untuk rute penyeberangan yang Anda pilih.
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\startuptech\resources\views/schedules/index.blade.php ENDPATH**/ ?>