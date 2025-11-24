<?php include __DIR__ . '/includes/header.php'; ?>

<!-- Breadcrumbs -->
<section class="bg-gray-50 dark:bg-gray-800"> 
<div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 text-gray-900">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="mb-4 text-4xl font-bold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                    Services
                </h1>
            </div>    
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                    <a href="/index.php" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
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
                        <a href="/services.php" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Services</a>
                    </div>
                    </li>
                </ol>
                </nav>
            </div>
</section>

<!-- Who we are -->
<section class="bg-white dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7 pl-10">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Who we are</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">"We are a business driven by a strong commitment to excellence, accountability, and long-term partnerships that help our clients succeed in their operations."</p>
        </div>
        <div class="lg:mt-0 lg:col-span-5 lg:flex">
            <ol class="relative border-s border-default">
                <li class="mb-10 ms-4">
                    <h1 class="mb-4 text-4xl tracking-tight font-extrabold text-primary-900 dark:text-white">Corporate Position<h1></h1>
                    <div class="absolute w-3 h-3 bg-neutral-quaternary rounded-full mt-1.5 -start-1.5 border border-buffer"></div>
                    <time class="text-sm font-normal leading-none text-body">Our Vision</time>
                    <h3 class="text-lg font-semibold text-heading my-2">To be Malawi's most trusted and versatile general services provider, known for reliability, efficiency, and value.</h3>
                </li>
                <li class="mb-10 ms-4">
                    <div class="absolute w-3 h-3 bg-neutral-quaternary rounded-full mt-1.5 -start-1.5 border border-buffer"></div>
                    <time class="text-sm font-normal leading-none text-body">Our Mission</time>
                    <h3 class="text-lg font-semibold text-heading my-2">To provide dependable goods and services that meet client expectations through innovation, professionalism, and consistent quality.</h3>
                </li>
            </ol>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
