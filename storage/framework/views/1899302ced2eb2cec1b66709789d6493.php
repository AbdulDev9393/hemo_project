<section class="about ">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="about-content">
                    <?php if($domain && $domain->companyData && $domain->companyData->about_us): ?>
                        <?php echo $domain->companyData->about_us; ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
</style>
    <!-- FAQs -->
    <section class="faqs">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h1 class="main-title text-center mb-5">Frequently Asked Questions</h1>

                    <!-- General Service Questions -->
                    <div class="mb-5">
                        <h2 class="category-title mb-3">General Service</h2>

                        <div class="accordion" id="generalServiceAccordion">
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#general1" aria-expanded="false" aria-controls="general1">
                                        Is Partsfinder a free service?
                                    </button>
                                </h3>
                                <div id="general1" class="accordion-collapse collapse"
                                    data-bs-parent="#generalServiceAccordion">
                                    <div class="accordion-body">
                                        Yes, Partsfinder is a free service designed to help you find and compare spare
                                        parts
                                        for your vehicle.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#general2" aria-expanded="false" aria-controls="general2">
                                        What kind of parts can I buy through Partsfinder?
                                    </button>
                                </h3>
                                <div id="general2" class="accordion-collapse collapse"
                                    data-bs-parent="#generalServiceAccordion">
                                    <div class="accordion-body">
                                        Partsfinder connects you with sellers offering a wide range of auto parts,
                                        including
                                        OEM, aftermarket, used, and refurbished parts for various makes and models.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#general3" aria-expanded="false" aria-controls="general3">
                                        Do you sell spare parts?
                                    </button>
                                </h3>
                                <div id="general3" class="accordion-collapse collapse"
                                    data-bs-parent="#generalServiceAccordion">
                                    <div class="accordion-body">
                                        No, Partsfinder does not sell spare parts directly. We act as a platform to
                                        connect
                                        you with verified sellers who can provide the parts you need.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#general4" aria-expanded="false" aria-controls="general4">
                                        Do you offer spare parts finding services across the UAE?
                                    </button>
                                </h3>
                                <div id="general4" class="accordion-collapse collapse"
                                    data-bs-parent="#generalServiceAccordion">
                                    <div class="accordion-body">
                                        Yes, Partsfinder operates across all areas of the UAE, helping you locate
                                        sellers
                                        nationwide.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quality & Sourcing -->
                    <div class="mb-5">
                        <h2 class="category-title mb-3">Quality & Sourcing</h2>

                        <div class="accordion" id="qualityAccordion">
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#quality1" aria-expanded="false" aria-controls="quality1">
                                        Do you have all the spare parts for my car?
                                    </button>
                                </h3>
                                <div id="quality1" class="accordion-collapse collapse"
                                    data-bs-parent="#qualityAccordion">
                                    <div class="accordion-body">
                                        Partsfinder works with a network of sellers to provide a wide selection of
                                        parts.
                                        While we aim to cover most needs, availability depends on seller inventory.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#quality2" aria-expanded="false" aria-controls="quality2">
                                        Will I find high-quality auto parts?
                                    </button>
                                </h3>
                                <div id="quality2" class="accordion-collapse collapse"
                                    data-bs-parent="#qualityAccordion">
                                    <div class="accordion-body">
                                        Yes, Partsfinder connects you with reputable sellers offering both OEM and
                                        high-quality aftermarket parts. You can compare options before purchasing.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#quality3" aria-expanded="false" aria-controls="quality3">
                                        Should I buy OEM parts?
                                    </button>
                                </h3>
                                <div id="quality3" class="accordion-collapse collapse"
                                    data-bs-parent="#qualityAccordion">
                                    <div class="accordion-body">
                                        OEM (Original Equipment Manufacturer) parts ensure compatibility and
                                        reliability,
                                        but aftermarket parts may offer cost savings. The choice depends on your
                                        preference
                                        and budget.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#quality4" aria-expanded="false" aria-controls="quality4">
                                        What guarantees are offered?
                                    </button>
                                </h3>
                                <div id="quality4" class="accordion-collapse collapse"
                                    data-bs-parent="#qualityAccordion">
                                    <div class="accordion-body">
                                        Guarantees vary by seller. Partsfinder recommends reviewing warranty or return
                                        policies with the seller before finalizing a purchase.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- User Experience -->
                    <div class="mb-5">
                        <h2 class="category-title mb-3">User Experience</h2>

                        <div class="accordion" id="userExperienceAccordion">
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#user1" aria-expanded="false" aria-controls="user1">
                                        Will my personal details need to be used by auto spare part sellers?
                                    </button>
                                </h3>
                                <div id="user1" class="accordion-collapse collapse"
                                    data-bs-parent="#userExperienceAccordion">
                                    <div class="accordion-body">
                                        Your contact details may be shared with sellers to facilitate quotes, but
                                        Partsfinder prioritizes privacy. Sellers are expected to adhere to data
                                        protection
                                        guidelines.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#user2" aria-expanded="false" aria-controls="user2">
                                        Do I receive quotes by text or email?
                                    </button>
                                </h3>
                                <div id="user2" class="accordion-collapse collapse"
                                    data-bs-parent="#userExperienceAccordion">
                                    <div class="accordion-body">
                                        Quotes are typically sent via email or SMS, depending on your selected
                                        preferences
                                        when submitting a request.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#user3" aria-expanded="false" aria-controls="user3">
                                        Am I obliged to buy spare parts if I make a request?
                                    </button>
                                </h3>
                                <div id="user3" class="accordion-collapse collapse"
                                    data-bs-parent="#userExperienceAccordion">
                                    <div class="accordion-body">
                                        No, requesting quotes does not obligate you to purchase. You can compare offers
                                        and
                                        decide at your convenience.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Services -->
                    <div class="mb-5">
                        <h2 class="category-title mb-3">Additional Services</h2>

                        <div class="accordion" id="additionalServicesAccordion">
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#additional1" aria-expanded="false" aria-controls="additional1">
                                        What is a full engine?
                                    </button>
                                </h3>
                                <div id="additional1" class="accordion-collapse collapse"
                                    data-bs-parent="#additionalServicesAccordion">
                                    <div class="accordion-body">
                                        A full engine refers to a complete engine assembly, including all necessary
                                        components for installation. Sellers may offer new, rebuilt, or used options.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#additional2" aria-expanded="false" aria-controls="additional2">
                                        Do you supply an auto parts interchange?
                                    </button>
                                </h3>
                                <div id="additional2" class="accordion-collapse collapse"
                                    data-bs-parent="#additionalServicesAccordion">
                                    <div class="accordion-body">
                                        Partsfinder helps identify interchangeable parts where applicable, but
                                        compatibility
                                        should always be confirmed with the seller or a mechanic.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#additional3" aria-expanded="false" aria-controls="additional3">
                                        Can I find auto part sellers near me through Partsfinder?
                                    </button>
                                </h3>
                                <div id="additional3" class="accordion-collapse collapse"
                                    data-bs-parent="#additionalServicesAccordion">
                                    <div class="accordion-body">
                                        Yes, Partsfinder allows you to search for sellers based on location, making it
                                        easier to find parts nearby.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#additional4" aria-expanded="false" aria-controls="additional4">
                                        Is Partsfinder UAE a good place to find car parts?
                                    </button>
                                </h3>
                                <div id="additional4" class="accordion-collapse collapse"
                                    data-bs-parent="#additionalServicesAccordion">
                                    <div class="accordion-body">
                                        Absolutely! Partsfinder UAE is a trusted platform that simplifies the process of
                                        sourcing auto parts by connecting you with multiple sellers for competitive
                                        pricing
                                        and variety.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Support Section -->
                    <div class="support-section text-center p-4">
                        <p class="mb-0 text-muted">For further assistance, feel free to contact our support team.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-banner">
        <div class="cta-content">
            <h2>Find Car Spare Parts Online Today</h2>
            <p>Get instant quotes from local spare part sellers and compare prices in just a few clicks.</p>

            <div class="cta-actions">
                <a href="#" class="cta-btn">Find My Part</a>
                <div class="trust-points">
                    <span><i class="fa-solid fa-shield-check"></i> Verified Sellers</span>
                    <span><i class="fa-solid fa-coins"></i> Save Time & Money</span>
                </div>
            </div>
        </div>

        <div class="cta-image">
            <img src="<?php echo e(asset('Frontend/assets/quote.png')); ?>" alt="Mechanics fixing car">
        </div>
    </section>
<?php /**PATH C:\laragon\www\hemo_project\resources\views/Frontend/layout/company.blade.php ENDPATH**/ ?>