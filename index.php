<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    
    <title>WP Experts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
    <style type="text/tailwindcss">
      @font-face {
        font-family: 'Metropolis';
        src: url('assets/fonts/Metropolis-Regular.ttf') format('truetype');
        font-weight: 400;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: 'Metropolis';
        src: url('assets/fonts/Metropolis-Medium.ttf') format('truetype');
        font-weight: 500;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: 'Metropolis';
        src: url('assets/fonts/Metropolis-Semibold.ttf') format('truetype');
        font-weight: 600;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: 'Figtree';
        src: url('assets/fonts/Figtree-Regular.ttf') format('truetype');
        font-weight: 400;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: 'Metropolis';
        src: url('assets/fonts/Figtree-Medium.ttf') format('truetype');
        font-weight: 500;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: 'Metropolis';
        src: url('assets/fonts/Figtree-SemiBold.ttf') format('truetype');
        font-weight: 600;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: 'CooperMdBTMedium';
        src: url('assets/fonts/CooperMdBTMedium.ttf') format('truetype');
        font-weight: 500;
        font-style: normal;
        font-display: swap;
      }
      @theme {
        --font-metropolis: 'Metropolis', sans-serif;
        --font-figtree: 'Figtree', sans-serif;
        --font-coopermdbtmedium: 'CooperMdBTMedium', sans-serif;
      }
      .swiper-pagination-bullet{
        background:#333333 !important;
        border-radius:10px !important;
        width:12px !important;
      }
      span.swiper-pagination-bullet.swiper-pagination-bullet-active{
        width:19px !important;
      }
    </style>
  </head>
  <body>
    <?php require_once('templates/global/header.php') ?>

    <section class="p-[10px] bg-[url(https://wpexperts.s3.amazonaws.com/wp-content/uploads/2026/02/hero-backround.svg)] gap-[20px] bg-cover bg-position-[71% 35%] mt-[68px]">
      <div class="mt-[66px] px-[10px] mx-auto max-w-[1240px]">
        <div class="flex gap-[20px] mt-[21px]">
          <div class="w-[65%]">
            <h1 class="text-[50px] font-coopermdbtmedium leading-[1.4] mb-[16px]"><span class="text-[#13285E]">Enterprise Level</span> Development Agency For WordPress</h1>
            <p class="mb-[40px] pr-[16%] font-figtree text-[16px] leading-[21px]">We are committed to serving enterprise and large-scale WordPress clients with a unique WordPress development approach and solution-oriented strategy. Our WordPress experts and developers are eager to create amazing websites in no time.</p>
            <div class="logosimgs gap-[24px] flex mb-[44px]">
              <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2026/02/woo-partner.svg" class="w-auto h-[40px]">
              <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2026/02/Rating-container.svg" class="w-auto h-[40px]">
              <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2026/02/Projects-container.svg" class="w-auto h-[40px]">
            </div>
            <a href="#" class="px-[24px] py-[10px] font-figtree font-medium text-[20px] bg-[#ff9900] shadow-[0px 0px 0 #00000026] border-solid border border-[#00000000] rounded-[4px] hover:border-[#ff9900] hover:bg-transparent flex w-fit gap-[15px]">Let's Work Together <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/11/link-square-02-2.svg"></a>
          </div>
          <div class="w-[35%]">
            <div class="swiper bg-[linear-gradient(180deg,_rgb(234,_235,_240)_0%,_rgba(255,_255,_255,_0)_98%)] border-t-[4px] border-[#13285e] border-solid shadow-[0px 0px 0 #00000070]">
              <div class="swiper-pagination absolute! left-[15px]! top-[15px]! w-fit! bottom-[unset]! z-[999]!"></div>
              <div class="swiper-wrapper pt-[50px]!">
                <div class="swiper-slide p-[15px]!">
                  <p class="font-figtree text-[19px]">I had a problem with a WordPress plugin supported by WPExperts and I opened a ticket asking for directions. The support was fast and objective, and in some days we could fix the problem. Great support</p>
                  <div class="profileinfo text-[#000] flex items-center gap-[14px] text-[19px] leading-[22px] font-medium mt-[15px]">
                    <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/07/73x73.png" class="w-[50px] h-[50px] object-cover  rounded-[50%]"> Edras Pacola
                  </div>
                </div>

                <div class="swiper-slide p-[15px]!">
                  <p class="font-figtree text-[19px]">Awesome service – we are informing about a problem and immediately they are checking and considering it. This type of service is making the app very solid with great features! I recommend this app and this company for their customer support.</p>
                  <div class="profileinfo text-[#000] flex items-center gap-[14px] text-[19px] leading-[22px] font-medium mt-[15px]">
                    <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/07/user.svg" class="w-[50px] h-[50px] object-cover  rounded-[50%]"> Cargo Insure Online
                  </div>
                </div>

                <div class="swiper-slide p-[15px]!">
                  <p class="font-figtree text-[19px]">Expert knowledge and very quick at implementing. I couldn’t get our mail to configure correctly and not all emails were being delivered to customers. Upon contacting the support they were quick to act and all is working well now</p>
                  <div class="profileinfo text-[#000] flex items-center gap-[14px] text-[19px] leading-[22px] font-medium mt-[15px]">
                    <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/07/user.svg" class="w-[50px] h-[50px] object-cover  rounded-[50%]"> Nathan Thomson
                  </div>
                </div>

                <div class="swiper-slide p-[15px]!">
                  <p class="font-figtree text-[19px]">Excellent WordPress plugins, both efficient and useful, with amazing customer support. The team does their best to assist you, and in case of any issues, they work hard to resolve them as quickly as possible</p>
                  <div class="profileinfo text-[#000] flex items-center gap-[14px] text-[19px] leading-[22px] font-medium mt-[15px]">
                    <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/07/user.svg" class="w-[50px] h-[50px] object-cover  rounded-[50%]"> Nicolas
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="my-[64px] mt-[100px] p-[10px] gap-[20px] flex max-w-[1240px] mx-auto justify-between">
        <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/07/WordPress.svg">
        <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/07/Woo.svg">
        <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/07/Stripe.svg">
        <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/07/Square.svg">
        <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/07/Freemius.svg">
        <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/07/Aws.svg">
        <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/07/Paypal.svg">
      </div>

    </section>

    <section class="pb-[44px] pt-[30px]">
      <div class="max-w-[1240px] mx-auto">
        <h2 class="text-center text-[42px] leading-[57px] font-[500] font-coopermdbtmedium">More than <span class="text-[#13285E]">1.5 Million</span> satisfied customers are using our WooCommerce & WordPress Plugins</h2>
      </div>
    </section>

    <section class="py-[80px] border-t border-b border-solid [border-image:linear-gradient(to_right,_transparent_16.46%,_#13285E_50.7%,_transparent_90%)_1]">
      <div class="max-w-[1240px] mx-auto flex items-stretch justify-center gap-[44px] flex-wrap">
        <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/08/PartnerWoo-SizeS-ProOn-Dark-ModeOff-Solid-BGOn-1.jpg" class="h-[102px] w-auto">
        <div class="flex max-w-[620px]">
        <p class="font-figtree font-medium text-[16px] leading-[1.2em]">WPExperts Partners with Automattic to Elevate WordPress Innovation!<br><br>This WordPress development company is now an official Pro Partner in the Automattic Agency Partnership Program! This milestone unlocks new possibilities, exclusive resources, and top-tier support—allowing us to push the boundaries of WordPress excellence.</p></div>
      </div>
    </section>

    <section class="py-[60px]">
      <div class="max-w-[1240px] mx-auto">
        <h2 class="text-black text-[34px] font-coopermdbtmedium text-center mb-[24px] leading-[1.3em]">Certified WordPress Developers</h2>
        <p class="text-center px-[250px] font-figtree text-[18px] leading-[1.4em] text-[#4b4b4b] font-medium">With a team of the best WordPress consultants and experts, we have collaborated with leading brands in the WordPress community to deliver top-notch WordPress development services over the years.</p>
        <div class="certifiedlogos flex mt-[44px] max-w-[1096px] mx-auto items-center justify-center flex-wrap gap-y-[30px]">
          <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/03/14052953/Woo_logo_color-3.svg" class="h-[35px] w-[25%]">
          <img src="https://wpexperts.io/wp-content/uploads/2023/12/api-web-logos_Gravity-Forms.svg" class="h-[35px] w-[25%]">
          <img src="https://wpexperts.io/wp-content/uploads/2023/12/logo-05.svg" class="h-[50px] w-[25%]">
          <img src="https://wpexperts.io/wp-content/uploads/2023/12/logo-03.svg" class="h-[50px] w-[25%]">
          <img src="https://wpexperts.io/wp-content/uploads/2023/12/logo-07.svg" class="h-[50px] w-[25%]">
          <img src="https://wpexperts.io/wp-content/uploads/2023/12/logo-08.svg" class="h-[50px] w-[25%]">
          <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/08/Logo-Container-2.svg" class="h-[50px] w-[25%]">
          <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/08/Logo-Container-3.svg" class="h-[50px] w-[25%]">
        </div>
      </div>
    </section>

    <section class="pb-[60px] gap-y-[20px]">
      <div class="max-w-[1240px] mx-auto">
        <h2 class="text-black text-[34px] font-coopermdbtmedium text-center mb-[24px] leading-[1.3em]">Our WordPress Development Services</h2>
        <p class="text-center font-figtree text-[18px] leading-[1.4em] text-[#4b4b4b] pt-[24px] pb-[44px] font-medium">We are a full-stack WordPress development company with an agile approach. Our WordPress developers, WordPress experts, WordPress consultants, and service-providing agents work around the clock to deliver complex projects on tight deadlines. Here is a list of the best WordPress agency services we offer.</p>
        <div class="home-services-sec max-w-[1170px] flex flex-wrap justify-between gap-y-[25px]">
          <a href="#" class="p-[24px] rounded-[6px] border-[2px] border-solid border-[#f4f4f4] w-[31%] transition hover:border-[#A1BBFF] hover:shadow-md">
            <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2021/04/woocommerce_services.webp">
            <h3 class="text-[#13285E] text-[24px] font-figtree font-medium mt-[24px] mb-[12px]">
              WooCommerce Services
            </h3>
            <p class="text-[16px] leading-[120%] font-figtree mb-[1.6em]">Top-notch WooCommerce development services to build suc...</p>
            <div class="text-[#13285E] font-figtree text-[16px] font-medium flex items-center gap-[5px]">Get Started Now! <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/08/arrow-right-02-1.svg"></div>
          </a>
          <a href="#" class="p-[24px] rounded-[6px] border-[2px] border-solid border-[#f4f4f4] w-[31%] transition hover:border-[#A1BBFF] hover:shadow-md">
            <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2021/04/woocommerce_services.webp">
            <h3 class="text-[#13285E] text-[24px] font-figtree font-medium mt-[24px] mb-[12px]">
              WooCommerce Services
            </h3>
            <p class="text-[16px] leading-[120%] font-figtree mb-[1.6em]">Top-notch WooCommerce development services to build suc...</p>
            <div class="text-[#13285E] font-figtree text-[16px] font-medium flex items-center gap-[5px]">Get Started Now! <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/08/arrow-right-02-1.svg"></div>
          </a>
          <a href="#" class="p-[24px] rounded-[6px] border-[2px] border-solid border-[#f4f4f4] w-[31%] transition hover:border-[#A1BBFF] hover:shadow-md">
            <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2021/04/woocommerce_services.webp">
            <h3 class="text-[#13285E] text-[24px] font-figtree font-medium mt-[24px] mb-[12px]">
              WooCommerce Services
            </h3>
            <p class="text-[16px] leading-[120%] font-figtree mb-[1.6em]">Top-notch WooCommerce development services to build suc...</p>
            <div class="text-[#13285E] font-figtree text-[16px] font-medium flex items-center gap-[5px]">Get Started Now! <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/08/arrow-right-02-1.svg"></div>
          </a>
          <a href="#" class="p-[24px] rounded-[6px] border-[2px] border-solid border-[#f4f4f4] w-[31%] transition hover:border-[#A1BBFF] hover:shadow-md">
            <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2021/04/woocommerce_services.webp">
            <h3 class="text-[#13285E] text-[24px] font-figtree font-medium mt-[24px] mb-[12px]">
              WooCommerce Services
            </h3>
            <p class="text-[16px] leading-[120%] font-figtree mb-[1.6em]">Top-notch WooCommerce development services to build suc...</p>
            <div class="text-[#13285E] font-figtree text-[16px] font-medium flex items-center gap-[5px]">Get Started Now! <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/08/arrow-right-02-1.svg"></div>
          </a>
          <a href="#" class="p-[24px] rounded-[6px] border-[2px] border-solid border-[#f4f4f4] w-[31%] transition hover:border-[#A1BBFF] hover:shadow-md">
            <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2021/04/woocommerce_services.webp">
            <h3 class="text-[#13285E] text-[24px] font-figtree font-medium mt-[24px] mb-[12px]">
              WooCommerce Services
            </h3>
            <p class="text-[16px] leading-[120%] font-figtree mb-[1.6em]">Top-notch WooCommerce development services to build suc...</p>
            <div class="text-[#13285E] font-figtree text-[16px] font-medium flex items-center gap-[5px]">Get Started Now! <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/08/arrow-right-02-1.svg"></div>
          </a>
          <a href="#" class="p-[24px] rounded-[6px] border-[2px] border-solid border-[#f4f4f4] w-[31%] transition hover:border-[#A1BBFF] hover:shadow-md">
            <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2021/04/woocommerce_services.webp">
            <h3 class="text-[#13285E] text-[24px] font-figtree font-medium mt-[24px] mb-[12px]">
              WooCommerce Services
            </h3>
            <p class="text-[16px] leading-[120%] font-figtree mb-[1.6em]">Top-notch WooCommerce development services to build suc...</p>
            <div class="text-[#13285E] font-figtree text-[16px] font-medium flex items-center gap-[5px]">Get Started Now! <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/08/arrow-right-02-1.svg"></div>
          </a>
        </div>
      </div>
    </section>


    <section class="py-[64px] border-t border-b border-solid [border-image:linear-gradient(to_right,_transparent_16.46%,_#13285E_50.7%,_transparent_90%)_1]">
      <div class="max-w-[1240px] px-[10px] mx-auto">
          <h2 class="text-[48px] font-coopermdbtmedium font-medium leading-[47px] text-[#13285e] text-center mb-[24px]">
            Hire WordPress Experts Today!
          </h2>
          <a href="#" class="bg-[#ff9900] font-figtree font-medium text-[20px] py-[10px] px-[24px] rounded-[4px] border border-solid border-[transparent] flex items-center justify-center gap-[8px] w-fit mx-auto transition hover:border-[#333] hover:bg-[transparent]">Get A Proposal <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/11/link-square-02-2.svg" class="w-[19px]"></a>
      </div>
    </section>


    <section class="py-[60px]">
      <div class="max-w-[1240px] mx-auto">
        <h2 class="text-[32px] font-coopermdbtmedium text-center max-w-[600px] mx-auto font-medium mb-[44px]">WPExpert’s Clutch Reviews Speak Volumes Of Our Performance</h2>
        <script src="https://widget.clutch.co/static/js/widget.js" type="text/javascript" data-cfasync="false" data-no-optimize="1" data-no-defer="1" data-no-minify="1"></script>
        <div class="clutch-widget" data-url="https://widget.clutch.co" data-widget-type="12" data-height="375" data-clutchcompany-id="295005"><iframe id="iframe-0.5019569184279631" width="100%" src="https://widget.clutch.co/widgets/get/12?ref_domain=wpexperts.io&amp;uid=295005&amp;ref_path=/" height="375px" style="border-width: medium; border-style: none; border-color: currentcolor; border-image: none; display: block;" title="WPCOM:3PC:blocked12"></iframe></div>
        <div class="badges flex gap-[20px] mt-[44px] items-center justify-center">
          <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/11/clutch-badge.png" class="w-[15%]">
          <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/11/clutch-badge.png" class="w-[15%]">
          <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/11/clutch-badge.png" class="w-[15%]">
          <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/11/clutch-badge.png" class="w-[15%]">
          <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/11/clutch-badge.png" class="w-[15%]">
          <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2025/11/clutch-badge.png" class="w-[15%]">
        </div>
        <a href="#" class="mt-[44px] font-figtree font-medium text-[20px] py-[8px] px-[26px] border border-solid border-black rounded-[4px] flex justify-center items-center mx-auto w-fit transition hover:bg-[#13285e] hover:text-white">View More Badges</a>
      </div>
    </section>

    <section class="py-[60px]">
        <div class="max-w-[1240px] mx-auto">
          <h2 class="text-center text-[34px] font-coopermdbtmedium text-[#000] font-medium mb-[44px]">Discover Our Latest Blogs</h2>
          <div class="blogs-sec flex justify-around gap-[24px]">
            <a href="#" class="blog-post max-w-[33%]">
              <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2026/07/3-Voice-Search-Optimization-for-WordPress-in-2026.svg" class="rounded-[4px]">
              <div class="text-black font-figtree text-[12px] mt-[12px] mb-[8px]">July 8, 2026</div>
              <div class="my-[8px] font-figtree font-semibold text-[16px]">Voice Search Optimization for WordPress in 2026</div>
              <div class="my-[8px] font-figtree text-[14px] text-black">Have you ever asked your smart speaker for a local restaurant, a quick recipe, or the fastest...</div>
              <div class="font-figtree text-[#f90] text-[16px] underline">Read More</div>
            </a>
            <a href="#" class="blog-post max-w-[33%]">
              <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2026/07/3-Voice-Search-Optimization-for-WordPress-in-2026.svg" class="rounded-[4px]">
              <div class="text-black font-figtree text-[12px] mt-[12px] mb-[8px]">July 8, 2026</div>
              <div class="my-[8px] font-figtree font-semibold text-[16px]">Voice Search Optimization for WordPress in 2026</div>
              <div class="my-[8px] font-figtree text-[14px] text-black">Have you ever asked your smart speaker for a local restaurant, a quick recipe, or the fastest...</div>
              <div class="font-figtree text-[#f90] text-[16px] underline">Read More</div>
            </a>
            <a href="#" class="blog-post max-w-[33%]">
              <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2026/07/3-Voice-Search-Optimization-for-WordPress-in-2026.svg" class="rounded-[4px]">
              <div class="text-black font-figtree text-[12px] mt-[12px] mb-[8px]">July 8, 2026</div>
              <div class="my-[8px] font-figtree font-semibold text-[16px]">Voice Search Optimization for WordPress in 2026</div>
              <div class="my-[8px] font-figtree text-[14px] text-black">Have you ever asked your smart speaker for a local restaurant, a quick recipe, or the fastest...</div>
              <div class="font-figtree text-[#f90] text-[16px] underline">Read More</div>
            </a>
          </div>
        </div>
    </section>




    <?php require_once('templates/global/footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script>
      const swiper = new Swiper('.swiper', {
      loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});
    </script>
  </body>
</html>