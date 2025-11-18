<?php $__env->startSection('main-section'); ?>
    <div class="hero-section">
        <div class="hero-text">
            <h1>Find Your Perfect Parts</h1>
            <p>Your one-stop solution for all your automotive needs.</p>
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

                <div class="form-group" id="model-group">
                    <select class="dropdown" id="model" name="car_model_id">
                        <option value="">Select Your Model</option>
                    </select>
                </div>

                <div class="form-group" id="year-group">
                    <select class="dropdown" id="year" name="year_id">
                        <option value="">Select Your Model Year</option>
                        <?php $__currentLoopData = $years; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $year): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($year->id); ?>"><?php echo e($year->year); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="form-group hidden" id="parts-group">
                    <select id="parts-dropdown" class="dropdown" disabled>
                        <option disabled selected value="">Select a part to add</option>
                        <?php $__currentLoopData = $parts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $part): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($part->id); ?>"><?php echo e($part->name); ?></option>
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
                                <input type="radio" id="doesnt-matter" name="condition" value="does_not_matter" />
                                <label for="does_not_matter">Doesn't matter</label>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="find-btn" id="find-btn" disabled>Find My Part</button>
            </form>
        </div>
    </div>

    </main>
    <!-- How It Works -->
    <section class="how-it-works-section">
        <div class="how-text">
            <h2>How It Works</h2>
            <p>
                We partner with the UAE’s top spare parts suppliers to ensure you get the service you deserve.
            </p>
        </div>

        <div class="steps">
            <div class="step">
                <div class="step-icon">
                    <img src="<?php echo e(asset('Frontend/assets/1.png')); ?>" alt="Step 1" />
                </div>
                <div class="step-text">
                    <h3>Enter Your Part Requirement</h3>
                    <p>
                        Select your car and specify the spare parts you need.
                        We will search our suppliers’ inventory to find the best matches for your request.
                    </p>
                </div>
            </div>

            <div class="step">
                <div class="step-icon">
                    <img src="<?php echo e(asset('Frontend/assets/2.png')); ?>" alt="Step 2" />
                </div>
                <div class="step-text">
                    <h3>Receive Price Quotes on WhatsApp</h3>
                    <p>
                        Provide your contact, and we’ll send quotes from trusted and vetted spare parts sellers.
                        Compare prices and select the seller that suits your needs best.
                    </p>
                </div>
            </div>

            <div class="step">
                <div class="step-icon">
                    <img src="<?php echo e(asset('Frontend/assets/3.png')); ?>" alt="Step 3" />
                </div>
                <div class="step-text">
                    <h3>Sit Back and Relax</h3>
                    <p>
                        Check your WhatsApp for received quotes.
                        Confirm your order with the selected supplier and choose whether you want delivery, fitting, or
                        pickup yourself.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="carMakes">
        <div class="section-text">
            <h3>TOP MAKES</h3>
            <h2>Browse By Brands</h2>
        </div>

        <div class="brands">
            <?php $__currentLoopData = $carMakes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $make): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('make.ads', ['slug' => $make->slug, 'id' => $make->id])); ?>" class="make">
                    <?php if($make->logo): ?>
                        <img src="<?php echo e(asset($make->logo)); ?>" alt="<?php echo e($make->name); ?>">
                    <?php endif; ?>
                    <h4><?php echo e(strtoupper($make->name)); ?></h4>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    <section class="ad-cards">
        <div class="section-text">
            <h3>TOP ADS</h3>
            <h2>Find the Best Deals For You</h2>
        </div>
        <div class="filters">
            <a href="#" class="active">All</a>
            <?php $__currentLoopData = $randomParts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $part): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('part.ads', ['partName' => Str::slug($part->name), 'id' => $part->id])); ?>">
                    <?php echo e($part->name); ?>

                </a>
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
                        <a href="<?php echo e(route('view.ad', ['slug' => Str::slug($ad->title), 'id' => $ad->id])); ?>"
                            class="card-title"><?php echo e($ad->title); ?></a>
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
    <section class="spareParts">
        <h2>Popular Car Spare Parts in UAE</h2>
        <div class="popular-part-container">
            <?php $__currentLoopData = $sParts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="part-card">
                    <?php if($p->image): ?>
                        <img src="<?php echo e(asset('storage/' . $p->image)); ?>" alt="<?php echo e($p->name); ?>">
                    <?php else: ?>
                        <img src="<?php echo e(asset('Frontend/assets/quote.png')); ?>" alt="<?php echo e($p->name); ?>" />
                    <?php endif; ?>
                    <a style="text-decoration: none; color: black;"
                        href="<?php echo e(route('part.ads', ['partName' => Str::slug($p->name), 'id' => $p->id])); ?>">
                        <?php echo e($p->name); ?>

                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
    <section class="ad-cards">
        <div class="section-text">
            <h3>TOP CAR ADS</h3>
            <h2>Our Sellers are Currently Breaking These Cars for Spare Parts</h2>
        </div>
        <div class="filters">
            <a href="#" class="active">All</a>
            <?php $__currentLoopData = $randomMakes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $make): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('make.ads', ['slug' => $make->slug, 'id' => $make->id])); ?>"><?php echo e($make->name); ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="grid" id="productGrid2">
            <!-- Example Card -->
            <?php $__currentLoopData = $carAds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card">
                    <?php
                        $images = json_decode($ad->images, true);
                    ?>

                    <?php if(is_array($images) && isset($images[0])): ?>
                        <img src="<?php echo e(asset('storage/' . $images[0])); ?>" alt="Product">
                    <?php endif; ?>
                    <div class="card-body">
                        <a href="<?php echo e(route('view.car.ad', ['slug' => $ad->slug, 'id' => $ad->id])); ?>"
                            class="card-title"><?php echo e($ad->title); ?></a>
                        
                        <div class="meta">
                            Availability: In Stock <br>
                            
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

        <div class="pagination" id="pagination2"></div>
    </section>

    <!-- Map -->
    <section class="map">
        <div class="map-text">
            <ul>
                <li>Save Time, Save Money</li>
                <li>Search 10,000+ Auto Parts in One Go</li>
                <li>Check Prices & Stock of Top Part Suppliers</li>
                <li>Car, Van, and SUV Parts Fitted & Delivered</li>
                <li>Genuine, Aftermarket, Used & New Parts</li>
            </ul>
        </div>
        <div class="map-img">
            <?php if($domain && $domain->map_img): ?>
                <img src="<?php echo e(asset('storage/' . $domain->map_img)); ?>" alt="Map" />
            <?php endif; ?>
        </div>
    </section>
    <!-- Locations -->
    <section class="locations-section">
        <div class="section-text">
            <h2>Auto Parts for Cars, Vans, SUVs Anywhere in the UAE</h2>

        </div>
        <div class="locations-grid">
            <?php if($domain && $domain->cities): ?>
                <?php $__currentLoopData = $domain->cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('city.ads', ['slug' => $city->slug, 'id' => $city->id])); ?>" class="location-card"><i
                            class="fa-solid fa-location-dot"></i> <?php echo e($city->name); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </section>

    <?php echo $__env->make('Frontend.layout.company', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Frontend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\hemo_project\resources\views/Frontend/index.blade.php ENDPATH**/ ?>