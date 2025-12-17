<?php include __DIR__ . '/includes/header.php'; ?>

    <!-- Start header (home page content) -->
    <section class="bg-white dark:bg-gray-900 h-screen reveal">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-bold tracking-normal leading-snug md:text-5xl xl:text-6xl text-gray-900 dark:text-white">

                    Driven by Excellence, Accountability, and long-term Partnerships</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    Our operations span across procurement, logistics, consultancy, and support services tailored to meet the dynamic 
                    needs of both public and private sector clients.</p>
                <a href="assets/Corevest%20General%20Services%20Company%20Profile.pdf" download="Corevest General Services Company Profile.pdf" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    Download Company Profile
                </a>
                <a href="/contact.php" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Speak to Sales
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="assets/img/104047.png" alt="headerimgdark" class="hidden dark:block"/>
                <img src="assets/img/104047.png" alt="headerimglight" class="dark:hidden"/>
            </div>
        </div>
    </section>

    <!--About Company-->
    <section class="bg-gray-50 dark:bg-gray-900 py-20">
        <div class="max-w-screen-xl mx-auto grid lg:grid-cols-2 gap-12 px-4">
            
            <!-- Left Image -->
            <div class="flex items-center">
                <img src="assets\img\pexels-tima-miroshnichenko-6169178.jpg" 
                    class="rounded-2xl shadow-lg w-full object-cover" 
                    alt="About CoreVest">
            </div>

            <!-- Right Text -->
            <div class="flex flex-col justify-center">
                <h2 class="text-4xl font-extrabold text-gray-900 dark:text-white mb-4">
                    We Invest in the World’s Potential
                </h2>
                <p class="text-gray-600 dark:text-gray-300 mb-6">
                    CoreVest General Services Ltd delivers high-quality goods and professional services 
                    across procurement, logistics, consultancy, and operations support.
                </p>

                <!-- Stats with Flowbite -->
                <dl class="grid sm:grid-cols-3 gap-6">
                    <div class="text-center">
                        <dt class="text-3xl font-extrabold text-primary-700">73M+</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Revenue (2024)</dd>
                    </div>

                    <div class="text-center">
                        <dt class="text-3xl font-extrabold text-primary-700">18+</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Projects Completed</dd>
                    </div>

                    <div class="text-center">
                        <dt class="text-3xl font-extrabold text-primary-700">1B+</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Financial Capacity</dd>
                    </div>
                </dl>

                <h3 class="mt-10 text-2xl font-bold text-gray-900 dark:text-white">
                    Trusted by Market Leaders
                </h3>

                <!-- Logos -->
                <div class="flex gap-10 items-center mt-6 grayscale hover:grayscale-0 transition">
                    <img src="assets/img/partners/hazon.png" class="h-12" alt="Hazon">
                    <img src="assets/img/partners/gom.png" class="h-12" alt="GoM">
                    <img src="assets/img/partners/inter.png" class="h-12" alt="Inter">
                </div>
            </div>

        </div>
    </section>
    <!--End About Company-->

    <!--What We Do-->
    <section class="bg-white dark:bg-gray-800 py-20">
        <div class="max-w-screen-xl mx-auto px-4">
            <h2 class="text-4xl font-extrabold text-primary-900 dark:text-white mb-6">What We Do</h2>
            <p class="text-gray-600 dark:text-gray-300 mb-12 max-w-2xl">
                We provide end-to-end solutions that support operations across public and private sectors.
            </p>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <!-- Card -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow hover:shadow-lg transition">
                    <img src="assets/img/procurement.jpg" class="rounded-t-xl w-full h-40 object-cover">
                    <div class="p-5">
                        <h3 class="text-lg font-bold dark:text-white mb-2">Procurement</h3>
                        <p class="text-gray-500 dark:text-gray-300 text-sm">
                            Sourcing goods, supplies & equipment at competitive rates.
                        </p>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-xl shadow hover:shadow-lg transition">
                    <img src="assets/img/logistics.jpg" class="rounded-t-xl w-full h-40 object-cover">
                    <div class="p-5">
                        <h3 class="text-lg font-bold dark:text-white mb-2">Logistics</h3>
                        <p class="text-gray-500 dark:text-gray-300 text-sm">
                            Warehousing, transportation, customs clearance, distribution.
                        </p>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-xl shadow hover:shadow-lg transition">
                    <img src="assets/img/consultancy.jpg" class="rounded-t-xl w-full h-40 object-cover">
                    <div class="p-5">
                        <h3 class="text-lg font-bold dark:text-white mb-2">Consultancy</h3>
                        <p class="text-gray-500 dark:text-gray-300 text-sm">
                            Advisory on procurement, supply chain & business operations.
                        </p>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-xl shadow hover:shadow-lg transition">
                    <img src="assets/img/support.jpg" class="rounded-t-xl w-full h-40 object-cover">
                    <div class="p-5">
                        <h3 class="text-lg font-bold dark:text-white mb-2">Support Services</h3>
                        <p class="text-gray-500 dark:text-gray-300 text-sm">
                            Facility management, equipment servicing & admin services.
                        </p>
                    </div>
                </div>

            </div>

            <div class="mt-10">
                <a href="#" class="inline-flex items-center px-6 py-3 bg-primary-700 text-white rounded-lg hover:bg-primary-800">
                    View All Services
                </a>
            </div>

        </div>
    </section>

<!--End What We Do-->

<!--Why Choose Us-->
    <section class="bg-gray-50 dark:bg-gray-800 reveal">
        <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
            <h1 class="mb-4 text-4xl font-bold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Why Choose Us?</h1>
            <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">CoreVest General Services Ltd is a registered Malawian company dedicated to delivering 
                high-quality general goods and professional services to a wide range of clients. Our operations span across procurement, logistics, consultancy, and support services tailored to meet the 
                dynamic needs of both public and private sector clients. 
            </p>
            
            
            <div class="mx-auto grid max-w-screen-xl grid-cols-1 items-center gap-8 mt-3 text-gray-500 dark:text-gray-400 sm:grid-cols-3 sm:gap-12 lg:grid-cols-3 px-4">
                
                <div tabindex="0" class="max-w-sm p-6 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 reveal" data-reveal-delay="40">   
                    <!-- Icon centered -->
                    <svg class="w-10 h-10 text-primary-700 dark:text-gray-400 mb-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M18 5h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C8.4.842 6.949 0 5.5 0A3.5 3.5 0 0 0 2 3.5c.003.52.123 1.033.351 1.5H2a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2ZM8.058 5H5.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM11 13H9v7h2v-7Zm-4 0H2v5a2 2 0 0 0 2 2h3v-7Zm6 0v7h3a2 2 0 0 0 2-2v-5h-5Z"/>
                    </svg>

                    <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white text-center">Wide Range of Products</h3>
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 text-center">One-stop shop for goods and services</p>
                    
                </div>
                <div tabindex="0" class="max-w-sm p-6 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 reveal" data-reveal-delay="80">   
                    <!-- Icon centered -->
                    <svg class="w-10 h-10 text-primary-700 dark:text-gray-400 mb-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M18 5h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C8.4.842 6.949 0 5.5 0A3.5 3.5 0 0 0 2 3.5c.003.52.123 1.033.351 1.5H2a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2ZM8.058 5H5.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM11 13H9v7h2v-7Zm-4 0H2v5a2 2 0 0 0 2 2h3v-7Zm6 0v7h3a2 2 0 0 0 2-2v-5h-5Z"/>
                    </svg>

                    <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white text-center">Prompt delivery and flexible solutions</h3>
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 text-center">One-stop shop for goods and services</p>
                    
                </div>
                <div tabindex="0" class="max-w-sm p-6 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 reveal" data-reveal-delay="120">   
                    <!-- Icon centered -->
                    <svg class="w-10 h-10 text-primary-700 dark:text-gray-400 mb-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M18 5h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C8.4.842 6.949 0 5.5 0A3.5 3.5 0 0 0 2 3.5c.003.52.123 1.033.351 1.5H2a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2ZM8.058 5H5.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM11 13H9v7h2v-7Zm-4 0H2v5a2 2 0 0 0 2 2h3v-7Zm6 0v7h3a2 2 0 0 0 2-2v-5h-5Z"/>
                    </svg>

                    <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white text-center">Competitive pricing</h3>
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 text-center">One-stop shop for goods and services</p>
                    
                </div>
                <div tabindex="0" class="max-w-sm p-6 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 reveal" data-reveal-delay="160">   
                    <!-- Icon centered -->
                    <svg class="w-10 h-10 text-primary-700 dark:text-gray-400 mb-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M18 5h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C8.4.842 6.949 0 5.5 0A3.5 3.5 0 0 0 2 3.5c.003.52.123 1.033.351 1.5H2a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2ZM8.058 5H5.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM11 13H9v7h2v-7Zm-4 0H2v5a2 2 0 0 0 2 2h3v-7Zm6 0v7h3a2 2 0 0 0 2-2v-5h-5Z"/>
                    </svg>

                    <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white text-center">No compromise on quality</h3>
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 text-center">One-stop shop for goods and services</p>
                    
                </div>
                <div tabindex="0" class="max-w-sm p-6 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 reveal" data-reveal-delay="200">   
                    <!-- Icon centered -->
                    <svg class="w-10 h-10 text-primary-700 dark:text-gray-400 mb-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M18 5h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C8.4.842 6.949 0 5.5 0A3.5 3.5 0 0 0 2 3.5c.003.52.123 1.033.351 1.5H2a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2ZM8.058 5H5.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM11 13H9v7h2v-7Zm-4 0H2v5a2 2 0 0 0 2 2h3v-7Zm6 0v7h3a2 2 0 0 0 2-2v-5h-5Z"/>
                    </svg>

                    <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white text-center">Transparent and accountable operations</h3>
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 text-center">One-stop shop for goods and services</p>
                    
                </div>
                <div tabindex="0" class="max-w-sm p-6 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 reveal" data-reveal-delay="240">   
                    <!-- Icon centered -->
                    <svg class="w-10 h-10 text-primary-700 dark:text-gray-400 mb-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M18 5h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C8.4.842 6.949 0 5.5 0A3.5 3.5 0 0 0 2 3.5c.003.52.123 1.033.351 1.5H2a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2ZM8.058 5H5.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM11 13H9v7h2v-7Zm-4 0H2v5a2 2 0 0 0 2 2h3v-7Zm6 0v7h3a2 2 0 0 0 2-2v-5h-5Z"/>
                    </svg>

                    <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white text-center">Strong understanding of local and regional markets</h3>
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400 text-center">One-stop shop for goods and services</p>
                    
                </div>
                        
                
            </div>

        </div>
    </section>
<!--Why Choose Us-->

<!--Contact Us-->
<section class="bg-white dark:bg-gray-900 reveal">
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

    <?php
    // For brevity reuse the original HTML blocks by including them here inline. In a real migration we would further modularize.
    ?>

<?php include __DIR__ . '/includes/footer.php'; ?>
