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
        src: url('../../assets/fonts/Metropolis-Regular.ttf') format('truetype');
        font-weight: 400;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: 'Metropolis';
        src: url('../../assets/fonts/Metropolis-Medium.ttf') format('truetype');
        font-weight: 500;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: 'Metropolis';
        src: url('../../assets/fonts/Metropolis-Semibold.ttf') format('truetype');
        font-weight: 600;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: 'Figtree';
        src: url('../../assets/fonts/Figtree-Regular.ttf') format('truetype');
        font-weight: 400;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: 'Metropolis';
        src: url('../../assets/fonts/Figtree-Medium.ttf') format('truetype');
        font-weight: 500;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: 'Metropolis';
        src: url('../../assets/fonts/Figtree-SemiBold.ttf') format('truetype');
        font-weight: 600;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: 'CooperMdBTMedium';
        src: url('../../assets/fonts/CooperMdBTMedium.ttf') format('truetype');
        font-weight: 500;
        font-style: normal;
        font-display: swap;
      }
      @theme {
        --font-metropolis: 'Metropolis', sans-serif;
        --font-figtree: 'Figtree', sans-serif;
        --font-coopermdbtmedium: 'CooperMdBTMedium', sans-serif;
      }
        .lets-connect::after {
            content: '';
            position: absolute;
            background: url(https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/08/Vector-7017.svg) no-repeat;
            width: 100%;
            height: 100%;
            top: 28px;
            left: 306px;
        }
        .reasons-swiper{
            --swiper-pagination-bottom:-10px;
            
        }
        .swiper-pagination{
--swiper-pagination-color:#ff9900;
        }
    </style>
</head>

<body>
    <?php require_once('../../templates/global/header.php') ?>
    <!-- SVG Sprite / Definitions (Hidden) -->
    <svg style="display: none;" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <symbol id="icon-check" viewBox="0 0 14 14">
                <path
                    d="M14 7C14 3.134 10.866 0 7 0C3.134 0 0 3.134 0 7C0 10.866 3.134 14 7 14C10.866 14 14 10.866 14 7Z"
                    fill="#F5EFE6" />
                <path
                    d="M4.2002 7.52489C4.2002 7.52489 5.3202 8.16364 5.8802 9.09989C5.8802 9.09989 7.5602 5.42489 9.8002 4.19989"
                    stroke="#DE9F3A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </symbol>
        </defs>
    </svg>

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
                    class="px-[44px] leading-[1em] py-[20px] font-figtree font-semibold text-[20px] bg-[#ff9900] shadow-[0px 0px 0 #00000026] border-solid border border-[#00000000] rounded-[4px] hover:border-[#ff9900] hover:text-[#fff] hover:bg-transparent flex w-fit gap-[8px] items-center transition-all duration-300 ease-in-out">Explore
                    Our Services
                    <span class="flex">
                        <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 320 512" aria-hidden="true"
                            focussable="false" class="w-[15px] h-[15px] fill-[currentColor]">
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
        <div class="max-w-[1240px] mx-auto py-11 px-5 flex items-center justify-between flex-nowrap gap-5">
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
        <div class="max-w-[970px] mx-auto">
            <h2 class="text-[34px] leading-[1.3] font-semibold text-center mb-[44px] font-coopermdbtmedium">
                Your Trusted Game Development Experts
            </h2>
            <div class="px-[15%]">
                <p class="mb-[25px] text-base font-figtree leading-[120%] text-center">
                    Our game development experts handle everything your project needs to succeed. From planning and
                    prototyping to coding, design, testing, and ongoing support, we ensure your game delivers both
                    creativity and technical excellence.
                </p>
            </div>
            <div class="flex flex-wrap gap-5">
                <!-- Dual Column Item -->
                <div class="flex gap-5 p-[10px]">
                    <!-- Left -->
                    <div class="flex-1 p-[10px]">
                        <h3 class="font-figtree text-2xl font-medium leading-[1.3] text-[#13285e] mb-3">
                            Custom Game Development
                        </h3>
                        <p class="font-figtree text-base leading-[1.6] mb-6">
                            We specialize in building custom games from the ground up, designed to match your unique
                            vision,
                            target audience, and genre. From concept design to final deployment, our team ensures your
                            game
                            stands out with engaging storylines and innovative mechanics.
                        </p>
                        <p class="font-figtree text-base leading-[1.6] text-[#13285e] mb-6">
                            Why you need our custom game development services:
                        </p>
                        <ul class="list-none p-0 m-0 mb-8 space-y-2">
                            <li class="flex items-center font-figtree text-[14px] leading-[1.5]">
                                <svg class="w-[14px] h-[14px] mr-[13px] shrink-0 fill-none">
                                    <use href="#icon-check" />
                                </svg>
                                List Item One
                            </li>
                            <li class="flex items-center font-figtree text-[14px] leading-[1.5]">
                                <svg class="w-[14px] h-[14px] mr-[13px] shrink-0 fill-none ">
                                    <use href="#icon-check" />
                                </svg>
                                List Item Two
                            </li>
                            <li class="flex items-center font-figtree text-[14px] leading-[1.5]">
                                <svg class="w-[14px] h-[14px] mr-[13px] shrink-0 fill-none">
                                    <use href="#icon-check" />
                                </svg>
                                List Item Three
                            </li>
                        </ul>
                        <p class="font-figtree text-base leading-[1.6] mb-6">
                            Why you need our custom game development services:
                        </p>
                        <a href="#"
                            class="inline-block border border-[#13285e] rounded text-[13px] leading-[14px] font-figtree font-medium py-[14px] px-8 text-[#13285e] transition-all duration-300 hover:bg-[#13285e] hover:text-white">
                            Get Started Now
                        </a>
                    </div>
                    <!-- Right -->
                    <div class="flex-1 p-[10px]">
                        <img src="http://wpexperts-building-blocks.local/wp-content/uploads/2026/07/Excellent-B2B-E-Commerce-Services-4.jpg"
                            alt="" class="w-full h-auto">
                    </div>
                </div>
                <!-- Dual Column Item -->
                <div class="flex gap-5 p-[10px]">
                    <!-- Left -->
                    <div class="flex-1 p-[10px]">
                        <img src="http://wpexperts-building-blocks.local/wp-content/uploads/2026/07/Excellent-B2B-E-Commerce-Services-4.jpg"
                            alt="" class="w-full h-auto">
                    </div>
                    <!-- Right -->
                    <div class="flex-1 p-[10px]">
                        <h3 class="font-figtree text-2xl font-medium leading-[1.3] text-[#13285e] mb-3">
                            Custom Game Development
                        </h3>
                        <p class="font-figtree text-base leading-[1.6] mb-6">
                            We specialize in building custom games from the ground up, designed to match your unique
                            vision,
                            target audience, and genre. From concept design to final deployment, our team ensures your
                            game
                            stands out with engaging storylines and innovative mechanics.
                        </p>
                        <p class="font-figtree text-base leading-[1.6] text-[#13285e] mb-6">
                            Why you need our custom game development services:
                        </p>
                        <ul class="list-none p-0 m-0 mb-8 space-y-2 ">
                            <li class="flex items-center font-figtree text-[14px] leading-[1.5]">
                                <svg class="w-[14px] h-[14px] mr-[13px] shrink-0 fill-none">
                                    <use href="#icon-check" />
                                </svg>
                                List Item One
                            </li>
                            <li class="flex items-center font-figtree text-[14px] leading-[1.5]">
                                <svg class="w-[14px] h-[14px] mr-[13px] shrink-0 fill-none">
                                    <use href="#icon-check" />
                                </svg>
                                List Item Two
                            </li>
                            <li class="flex items-center font-figtree text-[14px] leading-[1.5]">
                                <svg class="w-[14px] h-[14px] mr-[13px] shrink-0 fill-none">
                                    <use href="#icon-check" />
                                </svg>
                                List Item Three
                            </li>
                        </ul>
                        <p class="font-figtree text-base leading-[1.6] mb-6">
                            Why you need our custom game development services:
                        </p>
                        <a href="#"
                            class="inline-block border border-[#13285e] rounded text-[13px] leading-[14px] font-figtree font-medium py-[14px] px-8 text-[#13285e] transition-all duration-300 hover:bg-[#13285e] hover:text-white">
                            Get Started Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-[44px] px-5 bg-[#fffaf3]">
        <div class="max-w-[1240px] mx-auto flex flex-wrap gap-5 p-2.5 justify-center items-center mb-10">
            <h2 class="text-[34px] leading-[1.3] font-semibold text-center font-coopermdbtmedium">
                Our Core Game Development Services
            </h2>
            <p class="mb-[25px] text-lg font-figtree text-center">
                We deliver end-to-end game development services across mobile, PC, console, and emerging platforms. Our
                expert game developers blend creativity and technology to craft games that engage, perform, and inspire.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                <!-- Repeatable Card -->
                <div
                    class="flex flex-wrap gap-5 border border-[#dfdfdf] rounded-[7px] bg-[#13285e] shadow-[0px_0px_0px_#00000070] p-6">
                    <div class="flex items-center">
                        <img src="http://wpexperts-building-blocks.local/wp-content/uploads/2026/07/smartphone-1.svg"
                            alt="" class="w-10 h-10 mr-3">
                        <h4 class="font-figtree text-lg font-medium text-white">
                            Mobile & Tablet Game Development
                        </h4>

                    </div>
                    <p class="font-figtree font-base text-white">
                        Our mobile game developers craft high-performance iOS, Android, and cross-platform games. With
                        optimized visuals, seamless performance, and intuitive controls, we make sure your game offers
                        an immersive experience across all devices.
                    </p>
                </div>
                <!-- Repeatable Card -->
                <div
                    class="flex flex-wrap gap-5 border border-[#dfdfdf] rounded-[7px] bg-[#13285e] shadow-[0px_0px_0px_#00000070] p-6">
                    <div class="flex items-center">
                        <img src="http://wpexperts-building-blocks.local/wp-content/uploads/2026/07/smartphone-1.svg"
                            alt="" class="w-10 h-10 mr-3">
                        <h4 class="font-figtree text-lg font-medium text-white">
                            Mobile & Tablet Game Development
                        </h4>

                    </div>
                    <p class="font-figtree font-base text-white">
                        Our mobile game developers craft high-performance iOS, Android, and cross-platform games. With
                        optimized visuals, seamless performance, and intuitive controls, we make sure your game offers
                        an immersive experience across all devices.
                    </p>
                </div>
                <!-- Repeatable Card -->
                <div
                    class="flex flex-wrap gap-5 border border-[#dfdfdf] rounded-[7px] bg-[#13285e] shadow-[0px_0px_0px_#00000070] p-6">
                    <div class="flex items-center">
                        <img src="http://wpexperts-building-blocks.local/wp-content/uploads/2026/07/smartphone-1.svg"
                            alt="" class="w-10 h-10 mr-3">
                        <h4 class="font-figtree text-lg font-medium text-white">
                            Mobile & Tablet Game Development
                        </h4>

                    </div>
                    <p class="font-figtree font-base text-white">
                        Our mobile game developers craft high-performance iOS, Android, and cross-platform games. With
                        optimized visuals, seamless performance, and intuitive controls, we make sure your game offers
                        an immersive experience across all devices.
                    </p>
                </div>
                <!-- Repeatable Card -->
                <div
                    class="flex flex-wrap gap-5 border border-[#dfdfdf] rounded-[7px] bg-[#13285e] shadow-[0px_0px_0px_#00000070] p-6">
                    <div class="flex items-center">
                        <img src="http://wpexperts-building-blocks.local/wp-content/uploads/2026/07/smartphone-1.svg"
                            alt="" class="w-10 h-10 mr-3">
                        <h4 class="font-figtree text-lg font-medium text-white">
                            Mobile & Tablet Game Development
                        </h4>

                    </div>
                    <p class="font-figtree font-base text-white">
                        Our mobile game developers craft high-performance iOS, Android, and cross-platform games. With
                        optimized visuals, seamless performance, and intuitive controls, we make sure your game offers
                        an immersive experience across all devices.
                    </p>
                </div>
                <!-- Repeatable Card -->
                <div
                    class="flex flex-wrap gap-5 border border-[#dfdfdf] rounded-[7px] bg-[#13285e] shadow-[0px_0px_0px_#00000070] p-6">
                    <div class="flex items-center">
                        <img src="http://wpexperts-building-blocks.local/wp-content/uploads/2026/07/smartphone-1.svg"
                            alt="" class="w-10 h-10 mr-3">
                        <h4 class="font-figtree text-lg font-medium text-white">
                            Mobile & Tablet Game Development
                        </h4>

                    </div>
                    <p class="font-figtree font-base text-white">
                        Our mobile game developers craft high-performance iOS, Android, and cross-platform games. With
                        optimized visuals, seamless performance, and intuitive controls, we make sure your game offers
                        an immersive experience across all devices.
                    </p>
                </div>
                <!-- Repeatable Card -->
                <div
                    class="flex flex-wrap gap-5 border border-[#dfdfdf] rounded-[7px] bg-[#13285e] shadow-[0px_0px_0px_#00000070] p-6">
                    <div class="flex items-center">
                        <img src="http://wpexperts-building-blocks.local/wp-content/uploads/2026/07/smartphone-1.svg"
                            alt="" class="w-10 h-10 mr-3">
                        <h4 class="font-figtree text-lg font-medium text-white">
                            Mobile & Tablet Game Development
                        </h4>

                    </div>
                    <p class="font-figtree font-base text-white">
                        Our mobile game developers craft high-performance iOS, Android, and cross-platform games. With
                        optimized visuals, seamless performance, and intuitive controls, we make sure your game offers
                        an immersive experience across all devices.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-[44px] px-[10px]">
        <div class="max-w-[1240px] mx-auto">
            <h2 class="text-[34px] font-coopermdbtmedium text-center">Our Process</h2>
            <div class="flex flex-wrap justify-between mt-[50px] gap-y-[30px]">
                <div class="w-[32%] text-center lets-connect relative">
                    <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/08/Frame-1321315834.svg"
                        class="mx-auto">
                    <h3 class="text-[24px] font-[700] font-figtree mb-[12px] text-[#13285e]">Let’s Connect</h3>
                    <p class="text-[#13285e] mb-[20px] text-[16px] font-figtree">We’ll start with a friendly chat to
                        fully understand your goals, vision, and specific business needs better.</p>
                </div>
                <div class="w-[32%] text-center lets-connect relative">
                    <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/08/Frame-1321315835.svg"
                        class="mx-auto">
                    <h3 class="text-[24px] font-[700] font-figtree mb-[12px] text-[#13285e]">Planning</h3>
                    <p class="text-[#13285e] mb-[20px] text-[16px] font-figtree">Through quick calls and emails, we’ll
                        identify the big-picture objectives and outline what success looks like.</p>
                </div>
                <div class="w-[32%] text-center">
                    <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/08/Frame-1321315836.svg"
                        class="mx-auto">
                    <h3 class="text-[24px] font-[700] font-figtree mb-[12px] text-[#13285e]">Rough Estimates</h3>
                    <p class="text-[#13285e] mb-[20px] text-[16px] font-figtree">We’ll share a rough estimate and a
                        high-level plan so you know what to expect in terms of budget and direction.</p>
                </div>
                <div class="w-[32%] text-center lets-connect relative">
                    <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/08/Frame-1321315839.svg"
                        class="mx-auto">
                    <h3 class="text-[24px] font-[700] font-figtree mb-[12px] text-[#13285e]">Your Custom Proposal</h3>
                    <p class="text-[#13285e] mb-[20px] text-[16px] font-figtree">Based on everything we’ve discussed,
                        we’ll craft a tailored proposal with clear scope, timelines, and pricing.</p>
                </div>
                <div class="w-[32%] text-center lets-connect relative">
                    <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/08/Frame-1321315838.svg"
                        class="mx-auto">
                    <h3 class="text-[24px] font-[700] font-figtree mb-[12px] text-[#13285e]">Time to Kick Things Off
                    </h3>
                    <p class="text-[#13285e] mb-[20px] text-[16px] font-figtree">Ready to roll? We’ll handle the
                        paperwork and get you fully onboarded—no stress, no surprises!</p>
                </div>
                <div class="w-[32%] text-center">
                    <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/08/Frame-1321315837.svg"
                        class="mx-auto">
                    <h3 class="text-[24px] font-[700] font-figtree mb-[12px] text-[#13285e]">Project Begins</h3>
                    <p class="text-[#13285e] mb-[20px] text-[16px] font-figtree">With everything in place, we hit the
                        ground running. Timelines are locked, goals are clear, and the real work begins!</p>
                </div>
            </div>
            <a href="#"
                class="font-figtree text-[20px] px-[44px] py-[20px] font-[600] bg-[#ff9900] rounded-[6px] flex mx-auto w-fit mt-[40px]">Get
                Started Now!</a>
        </div>
    </section>
    <section class="bg-[#f8faff] py-[44px] px-[10px]">
        <div class="max-w-[1240px] mx-auto">
            <div class="flex gap-10">

                <div class="w-6/12 flex flex-col gap-5">
                    <h3 class="text-[32px] leading-[1.2em] font-[700] font-coopermdbtmedium text-[#13285e]">Reasons to
                        Choose
                        WPExperts.io for Game Development Services</h3>
                    <p class="font-figtree text-lg">
                        When you partner with WPExperts.io, you’re getting more than just game development services —
                        you’re getting an entire team of trusted game developers and experts focused on your success.
                    </p>
                    <ul class="list-none p-0 m-0 flex gap-2">
                        <li class="flex gap-1 items-center font-figtree text-[14px]">
                            <svg class="w-[14px] h-[14px] shrink-0 fill-none">
                                <use href="#icon-check" />
                            </svg>
                            Great Service
                        </li>
                        <li class="flex gap-1 items-center font-figtree text-[14px]">
                            <svg class="w-[14px] h-[14px] shrink-0 fill-none">
                                <use href="#icon-check" />
                            </svg>
                            Accountability & Reporting
                        </li>
                        <li class="flex gap-1 items-center font-figtree text-[14px]">
                            <svg class="w-[14px] h-[14px] shrink-0 fill-none">
                                <use href="#icon-check" />
                            </svg>
                            Competitive Pricing
                        </li>
                    </ul>
                    <a href="#"
                        class="font-figtree text-xl leading-5 px-6 py-3 font-semibold text-white hover:text-black bg-[#ff9900] hover:bg-transparent border border-[#ff9900] hover:border-black rounded-[6px] w-fit">Get
                        Started Now!</a>
                </div>

                <div class="w-6/12 relative ">
                    <div class="swiper reasons-swiper pb-4">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide cursor-pointer">
                                <div class="flex flex-col gap-5 reasons-slide">
                                    <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/02/18144907/Vector-9.svg"
                                        alt="" class="w-11 h-8">
                                    <p class="font-figtree text-lg italic text-[#4B4B4B]">"Many businesses - from
                                        mom-and-pop stores to
                                        corporations ̶
                                        turn to us for
                                        WordPress website maintenance. I always impress upon my WPExperts.io team to
                                        treat the
                                        clients'
                                        businesses like our own. We will provide you high-quality services for a decent
                                        price."
                                    </p>
                                    <div class="p-[10px] flex gap-8">
                                        <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/02/18145113/image-2.svg"
                                            alt="" class="w-12 h-12">
                                        <div>
                                            <p class="font-figtree text-lg font-bold">Saad Iqbal</p>
                                            <p class="font-figtree text-xs text-[#4B4B4B]">
                                                Founder & CEO
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide cursor-pointer">
                                <div class="flex flex-col gap-5 reasons-slide">
                                    <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/02/18144907/Vector-9.svg"
                                        alt="" class="w-11 h-8">
                                    <p class="font-figtree text-lg italic text-[#4B4B4B]">"Many businesses - from
                                        mom-and-pop stores to
                                        corporations ̶
                                        turn to us for
                                        WordPress website maintenance. I always impress upon my WPExperts.io team to
                                        treat the
                                        clients'
                                        businesses like our own. We will provide you high-quality services for a decent
                                        price."
                                    </p>
                                    <div class="p-[10px] flex gap-8">
                                        <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/02/18145113/image-2.svg"
                                            alt="" class="w-12 h-12">
                                        <div>
                                            <p class="font-figtree text-lg font-bold">Saad Iqbal</p>
                                            <p class="font-figtree text-xs text-[#4B4B4B]">
                                                Founder & CEO
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination dots -->
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </div>
    </section>
    <section class="mt-[44px]  relative">
        <h3 class="text-[34px] leading-[1.3] font-medium text-center mt-[44px] mb-[44px] font-coopermdbtmedium">
            Frequently Asked Questions</h3>
        <div class="max-w-[1240px] mx-auto">
            <div class="max-w-[65%] mx-auto mb-[70px]">
                <!-- FAQ Item -->
                <div class="faq-item bg-white border border-[#dfdfdf] rounded-md mb-2">
                    <!-- Question -->
                    <button class="faq-toggle w-full flex items-center justify-between p-6 text-left cursor-pointer">
                        <h5 class="font-[Figtree] font-medium text-[18px] leading-[21px]">
                            What services does WPExperts offer?
                        </h5>
                        <span class="p-2 bg-[#e9efff] rounded-md flex items-center justify-center">
                            <!-- Plus Icon (Closed) -->
                            <svg class="faq-icon-open w-[15px] h-[15px] fill-current" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512">
                                <path
                                    d="M256 80c0-17.67-14.33-32-32-32s-32 14.33-32 32V192H80c-17.67 0-32 14.33-32 32s14.33 32 32 32H192V368c0 17.67 14.33 32 32 32s32-14.33 32-32V256H368c17.67 0 32-14.33 32-32s-14.33-32-32-32H256V80z" />
                            </svg>
                            <!-- Minus Icon (Open) -->
                            <svg class="faq-icon-close hidden w-[15px] h-[15px] fill-current"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                    d="M416 224H32c-17.67 0-32 14.33-32 32s14.33 32 32 32H416c17.67 0 32-14.33 32-32S433.7 224 416 224z" />
                            </svg>
                        </span>
                    </button>
                    <!-- Answer -->
                    <div class="faq-content  max-h-0 overflow-hidden opacity-0 transition-all duration-300 ease-in-out">
                        <div class="pt-0 pb-6 pr-[100px] pl-6">
                            <p class="font-[Figtree] text-[14px] leading-[1.6]">
                                WPExperts provides WordPress development, WooCommerce solutions, AI integrations,
                                website
                                maintenance, performance optimization, and enterprise-level digital services.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- FAQ Item -->
                <div class="faq-item bg-white border border-[#dfdfdf] rounded-md mb-2">
                    <!-- Question -->
                    <button class="faq-toggle w-full flex items-center justify-between p-6 text-left cursor-pointer">
                        <h5 class="font-[Figtree] font-medium text-[18px] leading-[21px]">
                            What services does WPExperts offer?
                        </h5>
                        <span class="p-2 bg-[#e9efff] rounded-md flex items-center justify-center">
                            <!-- Plus Icon (Closed) -->
                            <svg class="faq-icon-open w-[15px] h-[15px] fill-current" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512">
                                <path
                                    d="M256 80c0-17.67-14.33-32-32-32s-32 14.33-32 32V192H80c-17.67 0-32 14.33-32 32s14.33 32 32 32H192V368c0 17.67 14.33 32 32 32s32-14.33 32-32V256H368c17.67 0 32-14.33 32-32s-14.33-32-32-32H256V80z" />
                            </svg>
                            <!-- Minus Icon (Open) -->
                            <svg class="faq-icon-close hidden w-[15px] h-[15px] fill-current"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                    d="M416 224H32c-17.67 0-32 14.33-32 32s14.33 32 32 32H416c17.67 0 32-14.33 32-32S433.7 224 416 224z" />
                            </svg>
                        </span>
                    </button>
                    <!-- Answer -->
                    <div class="faq-content  max-h-0 overflow-hidden opacity-0 transition-all duration-300 ease-in-out">
                        <div class="pt-0 pb-6 pr-[100px] pl-6">
                            <p class="font-[Figtree] text-[14px] leading-[1.6]">
                                WPExperts provides WordPress development, WooCommerce solutions, AI integrations,
                                website
                                maintenance, performance optimization, and enterprise-level digital services.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- FAQ Item -->
                <div class="faq-item bg-white border border-[#dfdfdf] rounded-md mb-2">
                    <!-- Question -->
                    <button class="faq-toggle w-full flex items-center justify-between p-6 text-left cursor-pointer">
                        <h5 class="font-[Figtree] font-medium text-[18px] leading-[21px]">
                            What services does WPExperts offer?
                        </h5>
                        <span class="p-2 bg-[#e9efff] rounded-md flex items-center justify-center">
                            <!-- Plus Icon (Closed) -->
                            <svg class="faq-icon-open w-[15px] h-[15px] fill-current" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512">
                                <path
                                    d="M256 80c0-17.67-14.33-32-32-32s-32 14.33-32 32V192H80c-17.67 0-32 14.33-32 32s14.33 32 32 32H192V368c0 17.67 14.33 32 32 32s32-14.33 32-32V256H368c17.67 0 32-14.33 32-32s-14.33-32-32-32H256V80z" />
                            </svg>
                            <!-- Minus Icon (Open) -->
                            <svg class="faq-icon-close hidden w-[15px] h-[15px] fill-current"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                    d="M416 224H32c-17.67 0-32 14.33-32 32s14.33 32 32 32H416c17.67 0 32-14.33 32-32S433.7 224 416 224z" />
                            </svg>
                        </span>
                    </button>
                    <!-- Answer -->
                    <div class="faq-content  max-h-0 overflow-hidden opacity-0 transition-all duration-300 ease-in-out">
                        <div class="pt-0 pb-6 pr-[100px] pl-6">
                            <p class="font-[Figtree] text-[14px] leading-[1.6]">
                                WPExperts provides WordPress development, WooCommerce solutions, AI integrations,
                                website
                                maintenance, performance optimization, and enterprise-level digital services.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- FAQ Item -->
                <div class="faq-item bg-white border border-[#dfdfdf] rounded-md mb-2">
                    <!-- Question -->
                    <button class="faq-toggle w-full flex items-center justify-between p-6 text-left cursor-pointer">
                        <h5 class="font-[Figtree] font-medium text-[18px] leading-[21px]">
                            What services does WPExperts offer?
                        </h5>
                        <span class="p-2 bg-[#e9efff] rounded-md flex items-center justify-center">
                            <!-- Plus Icon (Closed) -->
                            <svg class="faq-icon-open w-[15px] h-[15px] fill-current" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512">
                                <path
                                    d="M256 80c0-17.67-14.33-32-32-32s-32 14.33-32 32V192H80c-17.67 0-32 14.33-32 32s14.33 32 32 32H192V368c0 17.67 14.33 32 32 32s32-14.33 32-32V256H368c17.67 0 32-14.33 32-32s-14.33-32-32-32H256V80z" />
                            </svg>
                            <!-- Minus Icon (Open) -->
                            <svg class="faq-icon-close hidden w-[15px] h-[15px] fill-current"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                    d="M416 224H32c-17.67 0-32 14.33-32 32s14.33 32 32 32H416c17.67 0 32-14.33 32-32S433.7 224 416 224z" />
                            </svg>
                        </span>
                    </button>
                    <!-- Answer -->
                    <div class="faq-content  max-h-0 overflow-hidden opacity-0 transition-all duration-300 ease-in-out">
                        <div class="pt-0 pb-6 pr-[100px] pl-6">
                            <p class="font-[Figtree] text-[14px] leading-[1.6]">
                                WPExperts provides WordPress development, WooCommerce solutions, AI integrations,
                                website
                                maintenance, performance optimization, and enterprise-level digital services.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- FAQ Item -->
                <div class="faq-item bg-white border border-[#dfdfdf] rounded-md mb-2">
                    <!-- Question -->
                    <button class="faq-toggle w-full flex items-center justify-between p-6 text-left cursor-pointer">
                        <h5 class="font-[Figtree] font-medium text-[18px] leading-[21px] ">
                            What services does WPExperts offer?
                        </h5>
                        <span class="p-2 bg-[#e9efff] rounded-md flex items-center justify-center">
                            <!-- Plus Icon (Closed) -->
                            <svg class="faq-icon-open w-[15px] h-[15px] fill-current" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512">
                                <path
                                    d="M256 80c0-17.67-14.33-32-32-32s-32 14.33-32 32V192H80c-17.67 0-32 14.33-32 32s14.33 32 32 32H192V368c0 17.67 14.33 32 32 32s32-14.33 32-32V256H368c17.67 0 32-14.33 32-32s-14.33-32-32-32H256V80z" />
                            </svg>
                            <!-- Minus Icon (Open) -->
                            <svg class="faq-icon-close hidden w-[15px] h-[15px] fill-current"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                    d="M416 224H32c-17.67 0-32 14.33-32 32s14.33 32 32 32H416c17.67 0 32-14.33 32-32S433.7 224 416 224z" />
                            </svg>
                        </span>
                    </button>
                    <!-- Answer -->
                    <div class="faq-content  max-h-0 overflow-hidden opacity-0 transition-all duration-300 ease-in-out">
                        <div class="pt-0 pb-6 pr-[100px] pl-6">
                            <p class="font-[Figtree] text-[14px] leading-[1.6]">
                                WPExperts provides WordPress development, WooCommerce solutions, AI integrations,
                                website
                                maintenance, performance optimization, and enterprise-level digital services.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Faqs Script  -->
            <script>
                document.querySelectorAll('.faq-toggle').forEach(button => {

                    button.addEventListener('click', () => {

                        const currentItem = button.closest('.faq-item');
                        const currentContent = currentItem.querySelector('.faq-content');
                        const currentPlus = currentItem.querySelector('.faq-icon-open');
                        const currentMinus = currentItem.querySelector('.faq-icon-close');

                        const isOpen = currentContent.style.maxHeight && currentContent.style.maxHeight !== '0px';

                        // Close all
                        document.querySelectorAll('.faq-item').forEach(item => {
                            const content = item.querySelector('.faq-content');

                            content.style.maxHeight = '0px';
                            content.classList.add('opacity-0');

                            item.querySelector('.faq-icon-open').classList.remove('hidden');
                            item.querySelector('.faq-icon-close').classList.add('hidden');
                        });

                        // Open clicked one
                        if (!isOpen) {
                            currentContent.style.maxHeight = currentContent.scrollHeight + 'px';
                            currentContent.classList.remove('opacity-0');

                            currentPlus.classList.add('hidden');
                            currentMinus.classList.remove('hidden');
                        }

                    });

                });
            </script>
        </div>
        <div
            class="flex justify-center relative after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-full after:h-1/2 after:bg-black after:pointer-events-none after:-z-1">
            <div
                class="max-w-[935px] z-[1] left-0 right-0 pl-[74px] pr-[60px] border border-[#13285e] rounded-[20px] bg-white flex flex-row items-center justify-center flex-nowrap gap-5 overflow-hidden relative after:content-[''] after:absolute after:right-[-192px] after:top-[-219px] after:w-[708px] after:h-[708px] after:rounded-[708px] after:bg-[#D4E0FF] after:blur-[247.5px] after:-z-10">

                <!-- Left -->
                <div class="flex-1 p-[10px]">
                    <h4
                        class="font-[Figtree] text-[40px] leading-[1.3] font-medium text-[#13285e] font-coopermdbtmedium mb-5">
                        Professional Services for You!
                    </h4>
                    <a href="#"
                        class="px-[44px] leading-[1em] py-[20px] font-figtree font-semibold text-[20px] bg-[#ff9900] shadow-[0px 0px 0 #00000026] border-solid border border-[#00000000] rounded-[4px] hover:border-[#ff9900] flex w-fit gap-[8px] items-center transition-all duration-300 ease-in-out">Explore
                        Our Services
                        <span class="flex">
                            <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 320 512" aria-hidden="true"
                                focussable="false" class="w-[15px] h-[15px] fill-[currentColor]">
                                <path
                                    d="M9.375 329.4c12.51-12.51 32.76-12.49 45.25 0L128 402.8V32c0-17.69 14.31-32 32-32s32 14.31 32 32v370.8l73.38-73.38c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-128 128c-12.5 12.5-32.75 12.5-45.25 0l-128-128C-3.125 362.1-3.125 341.9 9.375 329.4z">
                                </path>
                            </svg>
                        </span>
                    </a>
                </div>
                <!-- Right -->
                <div class="flex-1 p-[10px]">
                    <img src="http://wpexperts-building-blocks.local/wp-content/uploads/2026/07/pro-services.svg" alt=""
                        class="w-full h-auto">
                </div>

            </div>
        </div>
    </section>
    <?php require_once('../../templates/global/footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new Swiper('.reasons-swiper', {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 30,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        });
    </script>
</body>

</html>