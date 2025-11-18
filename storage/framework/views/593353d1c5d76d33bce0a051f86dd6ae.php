<?php $__env->startSection('main-section'); ?>
    <div class="hero-section">
        <div class="hero-text">
            <h1>Showing Results for <?php echo e($part->name); ?>.</h1>
            
        </div>

        <div class="search-card">
            <div class="card-header">
                <div class="free-text">100% FREE</div>
                <div class="search-title">Search Your Part Here</div>
            </div>

            <form action="<?php echo e(route('buyer.inquiry.send')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-group" id="make-group">
                    <select class="dropdown" id="make" name="car_make_id">
                        <option disabled selected value="">Select Your Make</option>
                        <?php $__currentLoopData = $makes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $make): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($make->id); ?>"><?php echo e($make->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="form-group hidden" id="model-group">
                    <select class="dropdown" id="model" name="car_model_id" disabled>
                        <option value="">Select Your Model</option>
                    </select>
                </div>

                <div class="form-group hidden" id="year-group">
                    <select class="dropdown" id="year" name="year_id" disabled>
                        <option value="">Select Your Model Year</option>
                        <?php $__currentLoopData = $years; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $year): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($year->id); ?>"><?php echo e($year->year); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="form-group hidden" id="parts-group">
                    <select id="parts-dropdown" class="dropdown" disabled>
                        <option disabled selected value="">Select a part to add</option>
                        <?php $__currentLoopData = $parts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($p->id); ?>"><?php echo e($p->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>
                    <div id="parts-tags" class="parts-tags"></div>
                </div>

                <div class="form-group hidden" id="condition-group">
                    <div class="condition-section">
                        <div class="condition-title">Condition Required ?</div>
                        <div class="radio-group">
                            <div class="radio-option">
                                <input type="radio" id="used" name="condition" value="used" />
                                <label for="used">Used</label>
                            </div>
                            <div class="radio-option">
                                <input type="radio" id="new" name="condition" value="new" checked />
                                <label for="new">New</label>
                            </div>
                            <div class="radio-option">
                                <input type="radio" id="doesnt-matter" name="condition" value="doesnt-matter" />
                                <label for="doesnt-matter">Doesn't matter</label>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="find-btn" id="find-btn" disabled>Find My Part</button>
            </form>
        </div>
    </div>
    </main>
    

    <section class="ad-cards">
        <div class="section-text">
            <h3><?php echo e($part->name); ?> ADS</h3>
            <h2>Find the Best Deals For You</h2>
        </div>
        <div class="filters">
            <a href="#" class="active">All</a>
            <?php $__currentLoopData = $randomParts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="#"><?php echo e($p->name); ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="grid" id="productGrid1">
            <!-- Example Card -->
            <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card">
                    <?php
                        $images = json_decode($ad->images, true);
                    ?>

                    <?php if(is_array($images) && isset($images[0])): ?>
                        <img src="<?php echo e(asset('' . $images[0])); ?>" alt="Product">
                    <?php endif; ?>
                    <div class="card-body">
                        <a href="" class="card-title"><?php echo e($ad->title); ?></a>
                        <div class="price">AED <?php echo e($ad->price); ?></div>
                        <div class="meta">
                            Availability: In Stock <br>
                            Condition: <?php echo e($ad->condition); ?> <br>
                            Delivery: Ask Supplier <br>
                            Warranty: Ask Supplier
                        </div>
                        <?php
                            $ad->shop->supplier->whatsapp;
                        ?>
                        <div class="buttons">
                            <a href="javascript:void(0)" class="btn whatsapp"
                                onclick="contactSupplier('<?php echo e($ad->shop->supplier->is_active); ?>', '<?php echo e($ad->shop->supplier->whatsapp); ?>', '<?php echo e($ad->title); ?>')">
                                <i class="fa-brands fa-whatsapp"></i> WhatsApp
                            </a>

                            <a href="javascript:void(0)" class="btn call"
                                onclick="callSupplier('<?php echo e($ad->shop->supplier->is_active); ?>', '<?php echo e($ad->shop->supplier->whatsapp); ?>')">
                                <i class="fa-solid fa-phone"></i> Click to Call
                            </a>
                        </div>

                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            

            <!-- Repeat similar cards... -->
        </div>

        <div class="pagination" id="pagination1"></div>
    </section>

    <!-- Locations -->
    <section class="locations-section">
        <div class="section-text">
            <h2><?php echo e($part->name); ?> for Cars, Vans, SUVs Anywhere in the UAE</h2>

        </div>
        <div class="locations-grid">

            <?php $__currentLoopData = $domain->cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('city.ads', ['slug' => $city->slug, 'id' => $city->id])); ?>" class="location-card"><i
                        class="fa-solid fa-location-dot"></i> <?php echo e($city->name); ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    <?php echo $__env->make('Frontend.layout.company', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script>
        function contactSupplier(isActive, number, title) {
            if (isActive == 1) {
                let message = encodeURIComponent("Hello, I'm interested in your ad: " + title);
                let isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);

                let url = isMobile ?
                    `https://wa.me/${number}?text=${message}` :
                    `https://web.whatsapp.com/send?phone=${number}&text=${message}`;

                window.open(url, "_blank");
            } else {
                // Supplier inactive → stay on same page
                window.location.reload();
            }
        }

        function callSupplier(isActive, number) {
            if (isActive == 1) {
                window.location.href = `tel:${number}`;
            } else {
                // Supplier inactive → stay on same page
                window.location.reload();
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Frontend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\hemo_project\resources\views/frontend/PartSearch.blade.php ENDPATH**/ ?>