    <!-- Footer Section -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <!-- Company Info -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="footer-logo">
                        <?php if($domain && $domain->logo): ?>
                            <img src="<?php echo e(asset('storage/' . $domain->logo)); ?>" alt="">
                        <?php endif; ?>
                    </div>

                    <p class="footer-description">
                        We are car spare parts price comparison website helping you get the best local deals on spare
                        parts in UAE
                    </p>
                </div>

                <!-- Information Links -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="footer-title">Information</h5>
                    <ul class="footer-links">
                        <li><a href="<?php echo e(route('about.page')); ?>">About Us</a></li>
                        <li><a href="<?php echo e(route('frontend.terms')); ?>">Terms & Condition</a></li>
                        <li><a href="<?php echo e(route('frontend.privacy')); ?>">Privacy Policy</a></li>
                    </ul>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="footer-title">Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="<?php echo e(route('supplier.login')); ?>">Supplier Login</a></li>
                        <li><a href="<?php echo e(route('frontend.signup')); ?>">Become a Supplier</a></li>
                        <li><a href="<?php echo e(route('view.shops')); ?>">Spare Part Shops</a></li>
                        
                        <li><a href="<?php echo e(route('frontend.blogs')); ?>">Blog</a></li>
                    </ul>
                </div>

                <!-- Contact & Social -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5 class="footer-title">Need Help?</h5>
                    <p class="mb-3" style="color: #adb5bd; font-size: 1.1rem; font-weight: 600;">Contact Us</p>

                    <a href="tel:00971557872262" class="contact-phone">
                        <i class="fas fa-phone"></i>
                        00971-55-7872262
                    </a>

                    
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <p class="copyright mb-0">© Copyrights Partfinder UAE All Rights Reserved</p>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        window.getModelsUrl = "<?php echo e(url('get-models')); ?>/";
    </script>

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
    <script src="<?php echo e(asset('Frontend/js/script.js')); ?>"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    </body>

    </html>
<?php /**PATH C:\laragon\www\hemo_project\resources\views/Frontend/layout/footer.blade.php ENDPATH**/ ?>