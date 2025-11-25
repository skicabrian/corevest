<?php include __DIR__ . '/includes/header.php'; ?>

<!-- Breadcrumbs -->
<section class="bg-gray-50 dark:bg-gray-800 reveal"> 
<div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 text-gray-900">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="mb-4 text-4xl font-bold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                    About Us
                </h1>
            </div>    
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                    <a href="/index.php" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-primary-700 dark:text-gray-400 dark:hover:text-primary-300">
                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                        </svg>
                        Home
                    </a>
                    </li>
                    <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <a href="/about.php" class="ms-1 text-sm font-medium text-gray-700 hover:text-primary-700 md:ms-2 dark:text-gray-400 dark:hover:text-primary-300">About Us</a>
                    </div>
                    </li>
                </ol>
                </nav>
            </div>
</section>

<!--Who we are-->
<section class="bg-white dark:bg-gray-900 reveal">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7 pl-10">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl text-gray-900 dark:text-white">Who we are</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-600 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-300">"We are a business driven by a strong commitment to excellence, accountability, and long-term partnerships that help our clients succeed in their operations."</p>
            <p class="mb-6 text-base font-normal text-gray-600 dark:text-gray-300">CoreVest General Services Ltd is a registered Malawian company dedicated to delivering high-quality general goods and professional 
                        services to a wide range of clients. Our operations span across procurement, logistics, consultancy, and support services tailored to meet the dynamic needs of both public and 
                        private sector clients. We pride ourselves on professionalism, timely delivery, and a client-first approach.</p>
            

            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <h1 class="mb-4 text-4xl tracking-tight font-extrabold text-primary-900 dark:text-primary-200">Our Core Values</h1>
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">

                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-base" 
                            id="integrity-tab" 
                            data-tabs-target="#integrity" 
                            type="button" role="tab" aria-controls="integrity" aria-selected="false">
                            Integrity
                        </button>
                    </li>

                    <li role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-base hover:text-fg-brand hover:border-brand" 
                            id="professionalism-tab" 
                            data-tabs-target="#professionalism" 
                            type="button" role="tab" aria-controls="professionalism" aria-selected="false">
                            Professionalism
                        </button>
                    </li>

                    <li role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-base hover:text-fg-brand hover:border-brand" 
                            id="reliability-tab" 
                            data-tabs-target="#reliability" 
                            type="button" role="tab" aria-controls="reliability" aria-selected="false">
                            Reliability
                        </button>
                    </li>

                    <li role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-base hover:text-fg-brand hover:border-brand" 
                            id="focus-tab" 
                            data-tabs-target="#focus" 
                            type="button" role="tab" aria-controls="focus" aria-selected="false">
                            Client Focus
                        </button>
                    </li>

                    <li role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-base hover:text-fg-brand hover:border-brand" 
                            id="efficiency-tab" 
                            data-tabs-target="#efficiency" 
                            type="button" role="tab" aria-controls="efficiency" aria-selected="false">
                            Efficiency
                        </button>
                    </li>

                </ul>
            </div>

            <div id="default-tab-content">

                <div class="hidden p-4 rounded-base bg-gray-50 dark:bg-gray-800" id="integrity" role="tabpanel" aria-labelledby="integrity-tab">
                    <p class="text-sm text-gray-600 dark:text-gray-300">
                       We deliver what we promise.
                    </p>
                </div>

                <div class="hidden p-4 rounded-base bg-gray-50 dark:bg-gray-800" id="professionalism" role="tabpanel" aria-labelledby="professionalism-tab">
                    <p class="text-sm text-gray-600 dark:text-gray-300">
                        We conduct business with high standards.
                    </p>
                </div>

                <div class="hidden p-4 rounded-base bg-gray-50 dark:bg-gray-800" id="reliability" role="tabpanel" aria-labelledby="reliability-tab">
                    <p class="text-sm text-gray-600 dark:text-gray-300">
                        We ensure timely delivery and support.
                    </p>
                </div>

                <div class="hidden p-4 rounded-base bg-gray-50 dark:bg-gray-800" id="focus" role="tabpanel" aria-labelledby="focus-tab">
                    <p class="text-sm text-gray-600 dark:text-gray-300">
                        We tailor solutions to each client’s needs.
                    </p>
                </div>

                <div class="hidden p-4 rounded-base bg-gray-50 dark:bg-gray-800" id="efficiency" role="tabpanel" aria-labelledby="efficiency-tab">
                    <p class="text-sm text-gray-600 dark:text-gray-300">
                        We operate with speed and accuracy.
                    </p>
                </div>

            </div>

        </div>
        <div class="lg:mt-0 lg:col-span-5 lg:flex">
            <ol class="relative border-s border-gray-200 dark:border-gray-700">
                <li class="mb-10 ms-4">
                    <h1 class="mb-4 text-4xl tracking-tight font-extrabold text-primary-900 dark:text-primary-200">Corporate Position<h1></h1>                  
                    <div class="absolute w-3 h-3 bg-gray-200 dark:bg-gray-600 rounded-full mt-1.5 -start-1.5 border border-gray-300 dark:border-gray-500"></div>
                    <time class="text-sm font-normal leading-none text-gray-500 dark:text-gray-400">Our Vision</time>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white my-2">To be Malawi's most trusted and versatile general services provider, known for reliability, efficiency, and value.</h3>
                    
                   <!-- <a href="#" class="inline-flex items-center text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
                        Learn more
                        <svg class="w-4 h-4 ms-1.5 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/></svg>
                    </a>-->
                </li>
                <li class="mb-10 ms-4">
                    <div class="absolute w-3 h-3 bg-gray-200 dark:bg-gray-600 rounded-full mt-1.5 -start-1.5 border border-gray-300 dark:border-gray-500"></div>
                    <time class="text-sm font-normal leading-none text-gray-500 dark:text-gray-400">Our Mission</time>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white my-2">To provide dependable goods and services that meet client expectations through innovation, professionalism, and consistent quality.</h3>
                </li>
            </ol>
        </div>                
    </div>
</section>
<!--End Who we are-->

<!--What We Do-->
    <section class="bg-gray-50 dark:bg-gray-800 reveal">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="max-w-screen-md mb-8 lg:mb-16">
                <h1 class="mb-4 text-4xl tracking-tight font-extrabold text-primary-900 dark:text-white">What we do</h1>
                <p class="text-gray-500 sm:text-xl dark:text-gray-400">We are driven by a strong commitment to excellence, accountability, and 
                    long-term partnerships that help our clients succeed in their operations. We pride ourselves on professionalism, timely delivery, 
                    and a client-first approach.
                </p>
                <p class="text-gray-500 sm:text-xl dark:text-gray-400">Our operations span across various and tailored to meet the dynamic needs of 
                    both public and private sector clients as outlined below. 
                </p>
            </div>
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-4 md:gap-12 md:space-y-0">
                <div class="reveal" data-reveal-delay="60">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312"/>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Procurement</h3>
                    <p class="text-gray-500 dark:text-gray-400">We source and purchase goods, supplies, and equipment with competitive pricing and quality assurance for both public and private sector clients.</p>
                </div>
                <div class="reveal" data-reveal-delay="120">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h6l2 4m-8-4v8m0-8V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v9h2m8 0H9m4 0h2m4 0h2v-4m0 0h-5m3.5 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/>
                        </svg>
                        </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Logistics</h3>
                    <p class="text-gray-500 dark:text-gray-400">We offer comprehensive logistics management including warehousing, transportation, customs clearance, and last-mile distribution.</p>
                </div>
                <div class="reveal" data-reveal-delay="180">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 0 0-2 2v4m5-6h8M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2m0 0h3a2 2 0 0 1 2 2v4m0 0v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-6m18 0s-4 2-9 2-9-2-9-2m9-2h.01"/>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Consultancy</h3>
                    <p class="text-gray-500 dark:text-gray-400">We offer expert advisory services in procurement, supply chain management, and business operations, maximising your efficiency and effectiveness.</p>
                </div>
                <div class="reveal" data-reveal-delay="240">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8.032 12 1.984 1.984 4.96-4.96m4.55 5.272.893-.893a1.984 1.984 0 0 0 0-2.806l-.893-.893a1.984 1.984 0 0 1-.581-1.403V7.04a1.984 1.984 0 0 0-1.984-1.984h-1.262a1.983 1.983 0 0 1-1.403-.581l-.893-.893a1.984 1.984 0 0 0-2.806 0l-.893.893a1.984 1.984 0 0 1-1.403.581H7.04A1.984 1.984 0 0 0 5.055 7.04v1.262c0 .527-.209 1.031-.581 1.403l-.893.893a1.984 1.984 0 0 0 0 2.806l.893.893c.372.372.581.876.581 1.403v1.262a1.984 1.984 0 0 0 1.984 1.984h1.262c.527 0 1.031.209 1.403.581l.893.893a1.984 1.984 0 0 0 2.806 0l.893-.893a1.985 1.985 0 0 1 1.403-.581h1.262a1.984 1.984 0 0 0 1.984-1.984V15.7c0-.527.209-1.031.581-1.403Z"/>
                    </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Support Services</h3>
                    <p class="text-gray-500 dark:text-gray-400">We help organizations maintain smooth operations by offerin facility management, equipment maintenance, and administrative services.</p>
                </div>
            </div>
            <div> 
                <a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 mt-5 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    View All Services
                    <svg class="w-6 h-6 ml-3 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2"/>
                    </svg>
                </a> 
            </div>
        </div>
    </div>
</section>
<!--End What We Do-->

<!--Our Target Clients-->
    <section class="bg-white dark:bg-gray-900 reveal">
        <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
            <h1 class="mb-4 text-4xl font-bold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Our Target Clients</h1>
            <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">We cater to a diverse range of clients across various sectors, including government agencies, non-governmental organizations (NGOs), private corporations, small and medium-sized enterprises (SMEs), and international development partners. Our flexible approach allows us to meet the unique needs of each client effectively.
            </p>
           
            <div class="mx-auto grid max-w-screen-xl grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 items-center gap-8 mt-3 text-gray-500 dark:text-gray-400 px-4">
                <div class="bg-neutral-primary-soft block max-w-sm border border-default rounded-base shadow-xs reveal" data-reveal-delay="40">
                    <a href="#">
                        <img class="rounded-t-base w-full h-48 object-cover" src="assets\img\capital.jpg" alt="photo missing" />
                    </a>
                    <div class="p-6 text-center">
                        
                        <a href="#">
                            <h5 class="mt-3 mb-6 text-2xl font-semibold tracking-tight text-heading">Government Institutions<br/><br/></h5>
                        </a>
                        
                    </div>
                </div>
                <div class="bg-neutral-primary-soft block max-w-sm border border-default rounded-base shadow-xs reveal" data-reveal-delay="100">
                    <a href="#">
                        <img class="rounded-t-base w-full h-48 object-cover" src="assets\img\ngo.jpg" alt="photo missing" />
                    </a>
                    <div class="p-6 text-center">
                        
                        <a href="#">
                            <h5 class="mt-3 mb-6 text-2xl font-semibold tracking-tight text-heading">Non Governmental Orgasations<br/><br/></h5>
                        </a>
                        
                    </div>
                </div>
                <div class="bg-neutral-primary-soft block max-w-sm border border-default rounded-base shadow-xs reveal" data-reveal-delay="160">
                    <a href="#">
                        <img class="rounded-t-base w-full h-48 object-cover" src="assets\img\corporate.jpg" alt="photo missing" />
                    </a>
                    <div class="p-6 text-center">
                        
                        <a href="#">
                            <h5 class="mt-3 mb-6 text-2xl font-semibold tracking-tight text-heading">Private Companies<br/><br/><br/></h5>
                        </a>
                        
                    </div>
                </div>
                <div class="bg-neutral-primary-soft block max-w-sm border border-default rounded-base shadow-xs reveal" data-reveal-delay="220">
                    <a href="#">
                        <img class="rounded-t-base w-full h-48 object-cover" src="assets\img\building.jpg" alt="photo missing" />
                    </a>
                    <div class="p-6 text-center">
                        
                        <a href="#">
                            <h5 class="mt-3 mb-6 text-2xl font-semibold tracking-tight text-heading">Schools, Clinics, and Community Programs</h5>
                        </a>
                        
                    </div>
                </div>        
            </div>

        </div>
    </section>
<!--Why Choose Us-->

<?php include __DIR__ . '/includes/footer.php'; ?>
