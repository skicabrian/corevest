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

<section class="bg-gray-50 dark:bg-gray-800">
  <div class="max-w-screen-xl px-4 py-16 mx-auto">
    
    <div class="max-w-3xl mx-auto text-center mb-12">
      <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl text-gray-900 dark:text-white">
        Our Services
      </h1>
      <p class="mt-3 text-base text-gray-600 dark:text-gray-300">
        We offer reliable solutions across every link of your supply chain, from sourcing to delivery, we combine strong partner networks with disciplined execution to keep your operations moving.
      </p>
    </div>

    <div class="grid gap-8 md:grid-cols-2">
      <!-- Card 1 -->
        <article class="p-6 bg-white border border-gray-100 rounded-2xl shadow-sm dark:bg-gray-900 dark:border-gray-700">
            <div class="flex items-center gap-3 mb-4">
            <span class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-blue-50 text-blue-600 dark:bg-blue-900/40">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M3 7h18M3 12h18M3 17h18"/></svg>
            </span>
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">General Supplies</h3>
            </div>

            <ul class="space-y-4 text-left text-gray-600 dark:text-gray-300 pl-[3.5rem]">
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="w-4 h-4 text-green-600 dark:text-green-400 shrink-0 me-1.5" aria-hidden="true" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span>Office equipment and stationery</span>
                </li>
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="w-4 h-4 text-green-600 dark:text-green-400 shrink-0 me-1.5" aria-hidden="true" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span>Building materials</span>
                </li>
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="w-4 h-4 text-green-600 dark:text-green-400 shrink-0 me-1.5" aria-hidden="true" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span>Cleaning products</span>
                </li>
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="w-4 h-4 text-green-600 dark:text-green-400 shrink-0 me-1.5" aria-hidden="true" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span>Agricultural inputs</span>
                </li>
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="w-4 h-4 text-green-600 dark:text-green-400 shrink-0 me-1.5" aria-hidden="true" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span>Safety gear and PPE</span>
                </li>
            </ul>    
        </article>

        <!-- Card 2 -->
        <article class="p-6 bg-white border border-gray-100 rounded-2xl shadow-sm dark:bg-gray-900 dark:border-gray-700">
            <div class="flex items-center gap-3 mb-4">
            <span class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-blue-50 text-blue-600 dark:bg-blue-900/40">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M3 7h18M3 12h18M3 17h18"/></svg>
            </span>
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Procurement & Sourcing</h3>
            </div>

            <ul class="space-y-4 text-left text-gray-600 dark:text-gray-300 pl-[3.5rem]">
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="w-4 h-4 text-green-600 dark:text-green-400 shrink-0 me-1.5" aria-hidden="true" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span>Sourcing of local and international goods</span>
                </li>
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="w-4 h-4 text-green-600 dark:text-green-400 shrink-0 me-1.5" aria-hidden="true" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span>Vendor management</span>
                </li>
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="w-4 h-4 text-green-600 dark:text-green-400 shrink-0 me-1.5" aria-hidden="true" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span>Competitive pricing solutions</span>
                </li>
            </ul>    
        </article>

      <!-- Card 3 -->
      <article class="p-6 bg-white border border-gray-100 rounded-2xl shadow-sm dark:bg-gray-900 dark:border-gray-700">
            <div class="flex items-center gap-3 mb-4">
            <span class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-blue-50 text-blue-600 dark:bg-blue-900/40">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M3 7h18M3 12h18M3 17h18"/></svg>
            </span>
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Logistics & Delivery</h3>
            </div>

            <ul class="space-y-4 text-left text-gray-600 dark:text-gray-300 pl-[3.5rem]">
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="w-4 h-4 text-green-600 dark:text-green-400 shrink-0 me-1.5" aria-hidden="true" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span>Local and cross-border goods transport</span>
                </li>
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="w-4 h-4 text-green-600 dark:text-green-400 shrink-0 me-1.5" aria-hidden="true" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span>Warehousing and distribution</span>
                </li>
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="w-4 h-4 text-green-600 dark:text-green-400 shrink-0 me-1.5" aria-hidden="true" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span>Last-mile delivery support</span>
                </li>               
            </ul>    
        </article>

        <!-- Card 4 -->
        <article class="p-6 bg-white border border-gray-100 rounded-2xl shadow-sm dark:bg-gray-900 dark:border-gray-700">
            <div class="flex items-center gap-3 mb-4">
            <span class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-blue-50 text-blue-600 dark:bg-blue-900/40">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M3 7h18M3 12h18M3 17h18"/></svg>
            </span>
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Consultancy & Support Services</h3>
            </div>

            <ul class="space-y-4 text-left text-gray-600 dark:text-gray-300 pl-[3.5rem]">
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="w-4 h-4 text-green-600 dark:text-green-400 shrink-0 me-1.5" aria-hidden="true" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span>Business advisory</span>
                </li>
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="w-4 h-4 text-green-600 dark:text-green-400 shrink-0 me-1.5" aria-hidden="true" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span>Proposal and tender support</span>
                </li>
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="w-4 h-4 text-green-600 dark:text-green-400 shrink-0 me-1.5" aria-hidden="true" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span>Training facilitation</span>
                </li>               
            </ul>    
        </article>    
    </div>
  </div>
</section>

<!--Contact Us-->
<section class="bg-white dark:bg-gray-900">
  <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Let's talk about our upcoming engagement</h2>
    <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">
      We’d love to hear from you. Whether it’s a question about our services, a partnership inquiry, or feedback,
      our team is ready to help. Fill out the form below, and we’ll get back to you as soon as possible.
    </p>
      <form action="#" class="space-y-8">
          <div>
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
              <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@youremail.com" required>
          </div>
          <div>
              <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
              <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let us know how we can help you" required>
          </div>
          <div class="sm:col-span-2">
              <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
              <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..."></textarea>
          </div>
          <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send message</button>
      </form>
  </div>
</section>
<!-- End Contact Us -->

<?php include __DIR__ . '/includes/footer.php'; ?>