<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>WP Experts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <style type="text/tailwindcss">
        @font-face {
        font-family: 'Metropolis';
        src: url('../assets/fonts/Metropolis-Regular.ttf') format('truetype');
        font-weight: 400;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: 'Metropolis';
        src: url('../assets/fonts/Metropolis-Medium.ttf') format('truetype');
        font-weight: 500;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: 'Metropolis';
        src: url('../assets/fonts/Metropolis-Semibold.ttf') format('truetype');
        font-weight: 600;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: 'Figtree';
        src: url('../assets/fonts/Figtree-Regular.ttf') format('truetype');
        font-weight: 400;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: 'Metropolis';
        src: url('../assets/fonts/Figtree-Medium.ttf') format('truetype');
        font-weight: 500;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: 'Metropolis';
        src: url('../assets/fonts/Figtree-SemiBold.ttf') format('truetype');
        font-weight: 600;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: 'CooperMdBTMedium';
        src: url('../assets/fonts/CooperMdBTMedium.ttf') format('truetype');
        font-weight: 500;
        font-style: normal;
        font-display: swap;
      }
      @theme {
        --font-metropolis: 'Metropolis', sans-serif;
        --font-figtree: 'Figtree', sans-serif;
        --font-coopermdbtmedium: 'CooperMdBTMedium', sans-serif;
      }
    </style>
</head>

<body>
    <?php require_once('../templates/global/header.php') ?>
    <style>
        .row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: nowrap;
            row-gap: 20px;
            column-gap: 20px;
        }
    </style>
    <section class="innerbanner bg-[#13285e] pt-[65px] pb-[10px] px-[10px] gap-[20px] mt-[68px]">
        <div class="max-w-[1240px] mx-auto flex gap-[50px] p-2.5 items-center">
            <div class="flex-1 p-2.5 ">
                <h1 class="text-[50px] text-[#fff] leading-[1.24em] mb-[16px] font-medium font-coopermdbtmedium ">
                    Professional
                    Digital Services
                    From WPExperts
                </h1>
                <p class="text-[22px] text-[#fff] leading-[1.4em] font-medium font-figtree mb-[34px]">We deliver
                    professional digital
                    services and
                    web
                    services that help your business thrive in the digital age.</p>
                <a href="#"
                    class="px-[44px] leading-[1em] py-[20px] font-figtree font-medium text-[20px] bg-[#ff9900] shadow-[0px 0px 0 #00000026] border-solid border border-[#00000000] rounded-[4px] hover:border-[#ff9900] hover:bg-transparent flex w-fit gap-[15px] items-center">Explore
                    Our Services
                    <span class="flex">
                        <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 320 512" aria-hidden="true"
                            focussable="false" class="w-[15px] h-[15px] fill-[#000]">
                            <path
                                d="M9.375 329.4c12.51-12.51 32.76-12.49 45.25 0L128 402.8V32c0-17.69 14.31-32 32-32s32 14.31 32 32v370.8l73.38-73.38c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-128 128c-12.5 12.5-32.75 12.5-45.25 0l-128-128C-3.125 362.1-3.125 341.9 9.375 329.4z">
                            </path>
                        </svg>
                    </span>
                </a>
            </div>
            <div class="flex flex-1 justify-center p-2.5">
                <img src="http://wpexperts-building-blocks.local/wp-content/uploads/2026/07/Image-Container-1.svg"
                    class="w-[560px] h-[288px]">

            </div>
        </div>
        <div class="max-w-[1240px] mx-auto py-11 px-5 row">
            <img src="http://wpexperts-building-blocks.local/wp-content/uploads/2026/07/wordpress-logo.svg" alt="">
            <img src="http://wpexperts-building-blocks.local/wp-content/uploads/2026/07/Woo-logo.svg" alt="">
            <img src="http://wpexperts-building-blocks.local/wp-content/uploads/2026/07/stripe-logo.svg" alt="">
            <img src="http://wpexperts-building-blocks.local/wp-content/uploads/2026/07/square-logo.svg" alt="">
            <img src="http://wpexperts-building-blocks.local/wp-content/uploads/2026/07/freemius-logo-1.svg" alt="">
            <img src="http://wpexperts-building-blocks.local/wp-content/uploads/2026/07/aws-logo.svg" alt="">
            <img src="http://wpexperts-building-blocks.local/wp-content/uploads/2026/07/paypal-logo.svg" alt="">
        </div>
    </section>

    <section class="pt-11 px-2.5 pb-2.5">
        <h2 class="text-[34px] leading-[1.3] font-medium ] text-center mt-[44px] mb-[24px] font-coopermdbtmedium">
            Discover Our Professional WPExperts Services
        </h2>
        <div class="grid grid-cols-3 gap-6 max-w-[1240px] mx-auto">

            <!-- Repeatable Card -->
            <div
                class="p-6 bg-white rounded-md border-2 border-[#F4F4F4] transition-all duration-300 hover:border-[#A1BBFF] hover:shadow-[0_4px_22.6px_0_#FFF9F0]">
                <a href="#" class="block">

                    <img src="http://wpexperts-building-blocks.local/wp-content/uploads/2026/07/woocommerce_services.webp"
                        alt="" class="mb-6">

                    <h3 class="mb-4 font-medium text-2xl leading-[120%] text-[#13285e] font-figtree">
                        WooCommerce Services
                    </h3>

                    <p class="mb-[25px] text-base leading-[120%] text-gray-700">
                        Top-notch WooCommerce development services to build suc...
                    </p>

                    <span class="inline-flex items-center gap-2 text-base font-medium text-[#13285e]">
                        Get Started Now!

                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none"
                            class="w-[17px] h-[17px]">
                            <path d="M13.8334 8.49988H3.16675" stroke="#13285E" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M10.5002 11.8333L13.8335 8.49996L10.5002 5.16663" stroke="#13285E"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>

                </a>
            </div>
            <!-- Repeatable Card -->
            <div
                class="p-6 bg-white rounded-md border-2 border-[#F4F4F4] transition-all duration-300 hover:border-[#A1BBFF] hover:shadow-[0_4px_22.6px_0_#FFF9F0]">
                <a href="#" class="block">

                    <img src="http://wpexperts-building-blocks.local/wp-content/uploads/2026/07/woocommerce_services.webp"
                        alt="" class="mb-6">

                    <h3 class="mb-4 font-medium text-2xl leading-[120%] text-[#13285e] font-figtree">
                        WooCommerce Services
                    </h3>

                    <p class="mb-[25px] text-base leading-[120%] text-gray-700">
                        Top-notch WooCommerce development services to build suc...
                    </p>

                    <span class="inline-flex items-center gap-2 text-base font-medium text-[#13285e]">
                        Get Started Now!

                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none"
                            class="w-[17px] h-[17px]">
                            <path d="M13.8334 8.49988H3.16675" stroke="#13285E" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M10.5002 11.8333L13.8335 8.49996L10.5002 5.16663" stroke="#13285E"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>

                </a>
            </div>
            <!-- Repeatable Card -->
            <div
                class="p-6 bg-white rounded-md border-2 border-[#F4F4F4] transition-all duration-300 hover:border-[#A1BBFF] hover:shadow-[0_4px_22.6px_0_#FFF9F0]">
                <a href="#" class="block">

                    <img src="http://wpexperts-building-blocks.local/wp-content/uploads/2026/07/woocommerce_services.webp"
                        alt="" class="mb-6">

                    <h3 class="mb-4 font-medium text-2xl leading-[120%] text-[#13285e] font-figtree">
                        WooCommerce Services
                    </h3>

                    <p class="mb-[25px] text-base leading-[120%] text-gray-700">
                        Top-notch WooCommerce development services to build suc...
                    </p>

                    <span class="inline-flex items-center gap-2 text-base font-medium text-[#13285e]">
                        Get Started Now!

                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none"
                            class="w-[17px] h-[17px]">
                            <path d="M13.8334 8.49988H3.16675" stroke="#13285E" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M10.5002 11.8333L13.8335 8.49996L10.5002 5.16663" stroke="#13285E"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>

                </a>
            </div>
            <!-- Repeatable Card -->
            <div
                class="p-6 bg-white rounded-md border-2 border-[#F4F4F4] transition-all duration-300 hover:border-[#A1BBFF] hover:shadow-[0_4px_22.6px_0_#FFF9F0]">
                <a href="#" class="block">

                    <img src="http://wpexperts-building-blocks.local/wp-content/uploads/2026/07/woocommerce_services.webp"
                        alt="" class="mb-6">

                    <h3 class="mb-4 font-medium text-2xl leading-[120%] text-[#13285e] font-figtree">
                        WooCommerce Services
                    </h3>

                    <p class="mb-[25px] text-base leading-[120%] text-gray-700">
                        Top-notch WooCommerce development services to build suc...
                    </p>

                    <span class="inline-flex items-center gap-2 text-base font-medium text-[#13285e]">
                        Get Started Now!

                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none"
                            class="w-[17px] h-[17px]">
                            <path d="M13.8334 8.49988H3.16675" stroke="#13285E" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M10.5002 11.8333L13.8335 8.49996L10.5002 5.16663" stroke="#13285E"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>

                </a>
            </div>
            <!-- Repeatable Card -->
            <div
                class="p-6 bg-white rounded-md border-2 border-[#F4F4F4] transition-all duration-300 hover:border-[#A1BBFF] hover:shadow-[0_4px_22.6px_0_#FFF9F0]">
                <a href="#" class="block">

                    <img src="http://wpexperts-building-blocks.local/wp-content/uploads/2026/07/woocommerce_services.webp"
                        alt="" class="mb-6">

                    <h3 class="mb-4 font-medium text-2xl leading-[120%] text-[#13285e] font-figtree">
                        WooCommerce Services
                    </h3>

                    <p class="mb-[25px] text-base leading-[120%] text-gray-700">
                        Top-notch WooCommerce development services to build suc...
                    </p>

                    <span class="inline-flex items-center gap-2 text-base font-medium text-[#13285e]">
                        Get Started Now!

                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none"
                            class="w-[17px] h-[17px]">
                            <path d="M13.8334 8.49988H3.16675" stroke="#13285E" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M10.5002 11.8333L13.8335 8.49996L10.5002 5.16663" stroke="#13285E"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>

                </a>
            </div>
            <!-- Repeatable Card -->
            <div
                class="p-6 bg-white rounded-md border-2 border-[#F4F4F4] transition-all duration-300 hover:border-[#A1BBFF] hover:shadow-[0_4px_22.6px_0_#FFF9F0]">
                <a href="#" class="block">

                    <img src="http://wpexperts-building-blocks.local/wp-content/uploads/2026/07/woocommerce_services.webp"
                        alt="" class="mb-6">

                    <h3 class="mb-4 font-medium text-2xl leading-[120%] text-[#13285e] font-figtree">
                        WooCommerce Services
                    </h3>

                    <p class="mb-[25px] text-base leading-[120%] text-gray-700">
                        Top-notch WooCommerce development services to build suc...
                    </p>

                    <span class="inline-flex items-center gap-2 text-base font-medium text-[#13285e]">
                        Get Started Now!

                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none"
                            class="w-[17px] h-[17px]">
                            <path d="M13.8334 8.49988H3.16675" stroke="#13285E" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M10.5002 11.8333L13.8335 8.49996L10.5002 5.16663" stroke="#13285E"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>

                </a>
            </div>
        </div>
    </section>

    <section class="max-w-[1240px] mx-auto ">

        <h2
            class="text-[34px] leading-[1.3] font-medium text-[#13285e] text-center mt-[44px] mb-[24px] font-coopermdbtmedium">
            Browse All WPExperts Services
        </h2>

        <p class="text-[18px] font-figtree text-center mb-10">
            Find the perfect solution from our WPExperts Digital Services.
        </p>

        <div class="grid grid-cols-[280px_1fr] gap-10">

            <!-- Left Sidebar -->
            <div>

                <h3 class="mt-6 mb-4 text-[26px] font-medium ">
                    Service Categories
                </h3>

                <ul class="p-0 m-0 list-none">

                    <li data-tab="wordpress"
                        class="tab-item py-3 px-[15px] cursor-pointer border-l-[3px] border-l-transparent transition-all duration-300 mb-[5px] rounded text-base bg-[#EEF4FF] border-l-[#A1BBFF] text-[#13285e] font-semibold">
                        WordPress Development
                    </li>

                    <li data-tab="woocommerce"
                        class="tab-item py-3 px-[15px] hover:bg-[#f5f5f5] cursor-pointer border-l-[3px] border-l-transparent transition-all duration-300 mb-[5px] rounded text-base">
                        WooCommerce
                    </li>

                    <li data-tab="maintenance"
                        class="tab-item py-3 px-[15px] hover:bg-[#f5f5f5] cursor-pointer border-l-[3px] border-l-transparent transition-all duration-300 mb-[5px] rounded text-base ">
                        Maintenance
                    </li>

                </ul>

            </div>

            <!-- Right Content -->
            <div class="flex-1">

                <!-- WordPress -->
                <div data-content="wordpress" class="tab-content grid grid-cols-2 gap-5">

                    <div
                        class="border border-[#F4F4F4] p-[15px] rounded-lg bg-white transition-all duration-200 flex flex-col justify-center hover:border-[#A1BBFF]">
                        <a href="#" class="flex items-center gap-4 text-[14px] text-[#13285e]">
                            <img src="http://wpexperts-building-blocks.local/wp-content/uploads/2026/07/Game-Development.svg"
                                alt="" class="w-12 h-12">
                            <h3 class="text-[16px] font-semibold">WordPress Website Development</h3>
                        </a>
                    </div>

                    <div
                        class="border border-[#F4F4F4] p-[15px] rounded-lg bg-white transition-all duration-200 flex flex-col justify-center hover:border-[#A1BBFF]">
                        <a href="#" class="flex items-center gap-4 text-[14px] text-[#13285e]">
                            <img src="http://wpexperts-building-blocks.local/wp-content/uploads/2026/07/Game-Development.svg"
                                alt="" class="w-12 h-12">
                            <h3 class="text-[16px] font-semibold">WordPress Speed Optimization</h3>
                        </a>
                    </div>

                </div>

                <!-- WooCommerce -->
                <div data-content="woocommerce" class="tab-content hidden grid grid-cols-2 gap-5">

                    <div
                        class="border border-[#F4F4F4] p-[15px] rounded-lg bg-white transition-all duration-200 flex flex-col justify-center hover:border-[#A1BBFF]">
                        <a href="#" class="flex items-center gap-4 text-[14px] text-[#13285e]">
                            <img src="http://wpexperts-building-blocks.local/wp-content/uploads/2026/07/Game-Development.svg"
                                alt="" class="w-12 h-12">
                            <h3 class="text-[16px] font-semibold">WooCommerce Development</h3>
                        </a>
                    </div>

                </div>

                <!-- Maintenance -->
                <div data-content="maintenance" class="tab-content hidden grid grid-cols-2 gap-5">

                    <div
                        class="border border-[#F4F4F4] p-[15px] rounded-lg bg-white transition-all duration-200 flex flex-col justify-center hover:border-[#A1BBFF]">
                        <a href="#" class="flex items-center gap-4 text-[14px] text-[#13285e]">
                            <img src="http://wpexperts-building-blocks.local/wp-content/uploads/2026/07/Game-Development.svg"
                                alt="" class="w-12 h-12">
                            <h3 class="text-[16px] font-semibold">Website Maintenance</h3>
                        </a>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="grid grid-cols-1 lg:grid-cols-2">

        <!-- Left -->
        <div
            class="bg-[url('http://wpexperts-building-blocks.local/wp-content/uploads/2026/07/services-bg-1.svg')] bg-cover bg-center min-h-[600px] lg:min-h-0">
        </div>

        <!-- Right -->
        <div class="shadow-[0px_0px_0px_#00000070] bg-[#fffaf3] py-11  pl-24 pr-6">
            <!-- Content -->
            <h3 class="text-[#13285e] font-medium text-[40px] leading-[50px] mb-6 font-coopermdbtmedium">
                Why Choose WPExperts Digital Services
            </h3>

            <p class="text-[#13285e] font-medium text-[22px] leading-[33px] mb-[50px]">
                We’re a trusted enterprise-level digital solutions provider for WordPress & WooCommerce services, AI
                development, and scalable solutions.
            </p>

            <!-- Feature Item (Repeatable) -->
            <div class="flex items-start">

                <img src="http://wpexperts-building-blocks.local/wp-content/uploads/2026/07/star-1.svg" alt=""
                    class="w-12 h-12 shrink-0">

                <div class="pl-6">

                    <h4 class="text-[#13285e] font-semibold text-2xl leading-9 mb-[10px]">
                        Enterprise-Level Expertise
                    </h4>

                    <p class="text-[#13285e] font-medium text-[18px] leading-[31px] mb-5">
                        We deliver scalable WordPress, WooCommerce, and AI-powered solutions tailored to businesses of
                        all sizes.
                    </p>

                </div>

            </div>
            <div class="flex items-start">

                <img src="http://wpexperts-building-blocks.local/wp-content/uploads/2026/07/star-1.svg" alt=""
                    class="w-12 h-12 shrink-0">

                <div class="pl-6">

                    <h4 class="text-[#13285e] font-semibold text-2xl leading-9 mb-[10px]">
                        Enterprise-Level Expertise
                    </h4>

                    <p class="text-[#13285e] font-medium text-[18px] leading-[31px] mb-5">
                        We deliver scalable WordPress, WooCommerce, and AI-powered solutions tailored to businesses of
                        all sizes.
                    </p>

                </div>

            </div>
            <div class="flex items-start">

                <img src="http://wpexperts-building-blocks.local/wp-content/uploads/2026/07/star-1.svg" alt=""
                    class="w-12 h-12 shrink-0">

                <div class="pl-6">

                    <h4 class="text-[#13285e] font-semibold text-2xl leading-9 mb-[10px]">
                        Enterprise-Level Expertise
                    </h4>

                    <p class="text-[#13285e] font-medium text-[18px] leading-[31px] mb-5">
                        We deliver scalable WordPress, WooCommerce, and AI-powered solutions tailored to businesses of
                        all sizes.
                    </p>

                </div>

            </div>
        </div>

    </section>
    <?php require_once('../templates/global/footer.php') ?>
    <!-- tabs section script  -->
    <script>
        const tabs = document.querySelectorAll('.tab-item');
        const contents = document.querySelectorAll('.tab-content');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const target = tab.dataset.tab;

                // Remove active state
                tabs.forEach(item => {
                    item.classList.remove(
                        'bg-[#EEF4FF]',
                        'border-l-[#A1BBFF]',
                        'text-[#13285e]',
                        'font-semibold'
                    );
                    item.classList.add('hover:bg-[#f5f5f5]');
                });

                // Hide all content
                contents.forEach(content => {
                    content.classList.add('hidden');
                });

                // Activate clicked tab
                tab.classList.add(
                    'bg-[#EEF4FF]',
                    'border-l-[#A1BBFF]',
                    'text-[#13285e]',
                    'font-semibold'
                );
                tab.classList.remove('hover:bg-[#f5f5f5]');
                // Show matching content
                document
                    .querySelector(`[data-content="${target}"]`)
                    .classList.remove('hidden');
            });
        });


    </script>
</body>

</html>