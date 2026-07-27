<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>WPExperts Blogs - Latest WordPress &amp; WooCommerce Tips and News</title>
    <meta name="description" content="Get the latest updates and blogs for WordPress theme &amp; development Stay updated and connected with woocommerce updates" />
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

    <section class="py-[50px] mt-[68px]">
        <div class="max-w-[1240px] mx-auto">
            <h1 class="text-center font-coopermdbtmedium text-[40px] text-black font-bold mb-[40px]">WPExperts Blogs & News</h1>
            <p class="px-[15%] text-center text-[#4b4b4b] font-figtree text-[16px]">Explore expert articles on WordPress and WooCommerce to enhance your website’s performance, functionality, and user experience. Our blog covers the latest tips, tutorials, plugin insights, and industry trends to help you grow your online business efficiently. Stay updated with our latest blogs.</p>
            <form class="blogs-search max-w-[400px] rounded-[50px] mx-auto mt-[40px] p-[10px] bg-[#FAFAFA] border border-solid border-[#dfdede] relative overflow-hidden font-figtree">
                <input type="text" id="blog-search" name="search" placeholder="Search..." class="outline-0 w-full pr-[100px] pl-[10px]">
                <button type="submit" class="h-full absolute bg-black px-[40px] top-0 right-0 hover:bg-[#ff9900] transition cursor-pointer"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 122.879 119.799" enable-background="new 0 0 122.879 119.799" xml:space="preserve" class="fill-white"><g><path d="M49.988,0h0.016v0.007C63.803,0.011,76.298,5.608,85.34,14.652c9.027,9.031,14.619,21.515,14.628,35.303h0.007v0.033v0.04 h-0.007c-0.005,5.557-0.917,10.905-2.594,15.892c-0.281,0.837-0.575,1.641-0.877,2.409v0.007c-1.446,3.66-3.315,7.12-5.547,10.307 l29.082,26.139l0.018,0.016l0.157,0.146l0.011,0.011c1.642,1.563,2.536,3.656,2.649,5.78c0.11,2.1-0.543,4.248-1.979,5.971 l-0.011,0.016l-0.175,0.203l-0.035,0.035l-0.146,0.16l-0.016,0.021c-1.565,1.642-3.654,2.534-5.78,2.646 c-2.097,0.111-4.247-0.54-5.971-1.978l-0.015-0.011l-0.204-0.175l-0.029-0.024L78.761,90.865c-0.88,0.62-1.778,1.209-2.687,1.765 c-1.233,0.755-2.51,1.466-3.813,2.115c-6.699,3.342-14.269,5.222-22.272,5.222v0.007h-0.016v-0.007 c-13.799-0.004-26.296-5.601-35.338-14.645C5.605,76.291,0.016,63.805,0.007,50.021H0v-0.033v-0.016h0.007 c0.004-13.799,5.601-26.296,14.645-35.338C23.683,5.608,36.167,0.016,49.955,0.007V0H49.988L49.988,0z M50.004,11.21v0.007h-0.016 h-0.033V11.21c-10.686,0.007-20.372,4.35-27.384,11.359C15.56,29.578,11.213,39.274,11.21,49.973h0.007v0.016v0.033H11.21 c0.007,10.686,4.347,20.367,11.359,27.381c7.009,7.012,16.705,11.359,27.403,11.361v-0.007h0.016h0.033v0.007 c10.686-0.007,20.368-4.348,27.382-11.359c7.011-7.009,11.358-16.702,11.36-27.4h-0.006v-0.016v-0.033h0.006 c-0.006-10.686-4.35-20.372-11.358-27.384C70.396,15.56,60.703,11.213,50.004,11.21L50.004,11.21z"/></g></svg></button>
            </form>
        </div>
    </section>

    <section class="mt-[50px]">
        <div class="mx-auto max-w-[1240px] p-[10px]">
            <div class="control-btns font-figtree flex flex-wrap gap-[20px] justify-center">
                <button class="active border border-solid border-black rounded-[50px] px-[25px] py-[8px] text-[16px] bg-black text-white cursor-pointer">All</button>
                <button class="active border border-solid border-black rounded-[50px] px-[25px] py-[8px] text-[16px] bg-white text-black cursor-pointer hover:bg-black hover:text-white transition">Plugins</button>
                <button class="active border border-solid border-black rounded-[50px] px-[25px] py-[8px] text-[16px] bg-white text-black cursor-pointer hover:bg-black hover:text-white transition">WooCommerce</button>
                <button class="active border border-solid border-black rounded-[50px] px-[25px] py-[8px] text-[16px] bg-white text-black cursor-pointer hover:bg-black hover:text-white transition">Guides</button>
                <button class="active border border-solid border-black rounded-[50px] px-[25px] py-[8px] text-[16px] bg-white text-black cursor-pointer hover:bg-black hover:text-white transition">Announcements</button>
                <button class="active border border-solid border-black rounded-[50px] px-[25px] py-[8px] text-[16px] bg-white text-black cursor-pointer hover:bg-black hover:text-white transition">WordPress</button>
                <button class="active border border-solid border-black rounded-[50px] px-[25px] py-[8px] text-[16px] bg-white text-black cursor-pointer hover:bg-black hover:text-white transition">Interview</button>
                <button class="active border border-solid border-black rounded-[50px] px-[25px] py-[8px] text-[16px] bg-white text-black cursor-pointer hover:bg-black hover:text-white transition">B2B & Ecommerce</button>
                <button class="active border border-solid border-black rounded-[50px] px-[25px] py-[8px] text-[16px] bg-white text-black cursor-pointer hover:bg-black hover:text-white transition">Features</button>
                <button class="active border border-solid border-black rounded-[50px] px-[25px] py-[8px] text-[16px] bg-white text-black cursor-pointer hover:bg-black hover:text-white transition">Reviews</button>
                <button class="active border border-solid border-black rounded-[50px] px-[25px] py-[8px] text-[16px] bg-white text-black cursor-pointer hover:bg-black hover:text-white transition">Email & Hosting</button>
                <button class="active border border-solid border-black rounded-[50px] px-[25px] py-[8px] text-[16px] bg-white text-black cursor-pointer hover:bg-black hover:text-white transition">Error Fixes</button>
                <button class="active border border-solid border-black rounded-[50px] px-[25px] py-[8px] text-[16px] bg-white text-black cursor-pointer hover:bg-black hover:text-white transition">Sales & Marketing</button>
                <button class="active border border-solid border-black rounded-[50px] px-[25px] py-[8px] text-[16px] bg-white text-black cursor-pointer hover:bg-black hover:text-white transition">HTTP Codes</button>
                <button class="active border border-solid border-black rounded-[50px] px-[25px] py-[8px] text-[16px] bg-white text-black cursor-pointer hover:bg-black hover:text-white transition">Version History</button>
                <button class="active border border-solid border-black rounded-[50px] px-[25px] py-[8px] text-[16px] bg-white text-black cursor-pointer hover:bg-black hover:text-white transition">Releases</button>
                <button class="active border border-solid border-black rounded-[50px] px-[25px] py-[8px] text-[16px] bg-white text-black cursor-pointer hover:bg-black hover:text-white transition">Versus</button>
                <button class="active border border-solid border-black rounded-[50px] px-[25px] py-[8px] text-[16px] bg-white text-black cursor-pointer hover:bg-black hover:text-white transition">Installation</button>
                <button class="active border border-solid border-black rounded-[50px] px-[25px] py-[8px] text-[16px] bg-white text-black cursor-pointer hover:bg-black hover:text-white transition">Artificial Intelligence</button>
                <button class="active border border-solid border-black rounded-[50px] px-[25px] py-[8px] text-[16px] bg-white text-black cursor-pointer hover:bg-black hover:text-white transition">Digital trends</button>
            </div>

            <div class="posts-result mt-[3rem] mb-[3rem] pb-[3rem]">
                <div class="flex px-[5px] py-[20px] gap-[40px] flex-wrap justify-center">
                    <!--Post-->
                    <div class="max-w-[31%] flex border border-solid border-[#dfdede] rounded-[8px] p-[16px] w-full bg-[#fcfcfc] flex-col">
                        <a href="#">
                            <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2026/07/2-WordPress-7.0-Roadmap.svg" alt="WordPress 7.1 – Expected New Features & Improvements">
                        </a>
                        <div class="pt-[10px] px-[5px]">
                            <a href="#" class="text-[#f4476c] font-figtree uppercase text-[12px] font-[500] mb-[20px] mt-[5px] block w-fit">WordPress</a>
                            <a href="#" class="block w-fit mb-[20px]"><h3 class="text-black text-[18px] leading-[27px] font-figtree font-[500]">WordPress 7.1 – Expected New Features & Improvements</h3></a>
                            <p class="text-[#4b4b4b] text-[14px] leading-[21px] mb-[10px] font-figtree">WordPress 7.1 gets an official release date: August 19, 2026, coinciding with the final day of WordCamp US 2026 in Phoenix. It is...</p>
                        </div>
                        <div class="mt-[30px] flex justify-between">
                            <span class="text-[#878787] text-[14px] font-figtree">by <a href="#" class="text-black text-[14px] font-figtree" target="_blank">Abdullah Ashraf</a></span>
                            <span class="text-[#878787] text-[14px] font-figtree">July 23, 2026</span>
                        </div>
                    </div>
                    <!--Postend-->
                    <!--Post-->
                    <div class="max-w-[31%] flex border border-solid border-[#dfdede] rounded-[8px] p-[16px] w-full bg-[#fcfcfc] flex-col">
                        <a href="#">
                            <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2026/07/2-WordPress-7.0-Roadmap.svg" alt="WordPress 7.1 – Expected New Features & Improvements">
                        </a>
                        <div class="pt-[10px] px-[5px]">
                            <a href="#" class="text-[#f4476c] font-figtree uppercase text-[12px] font-[500] mb-[20px] mt-[5px] block w-fit">WordPress</a>
                            <a href="#" class="block w-fit mb-[20px]"><h3 class="text-black text-[18px] leading-[27px] font-figtree font-[500]">WordPress 7.1 – Expected New Features & Improvements</h3></a>
                            <p class="text-[#4b4b4b] text-[14px] leading-[21px] mb-[10px] font-figtree">WordPress 7.1 gets an official release date: August 19, 2026, coinciding with the final day of WordCamp US 2026 in Phoenix. It is...</p>
                        </div>
                        <div class="mt-[30px] flex justify-between">
                            <span class="text-[#878787] text-[14px] font-figtree">by <a href="#" class="text-black text-[14px] font-figtree" target="_blank">Abdullah Ashraf</a></span>
                            <span class="text-[#878787] text-[14px] font-figtree">July 23, 2026</span>
                        </div>
                    </div>
                    <!--Postend-->
                    <!--Post-->
                    <div class="max-w-[31%] flex border border-solid border-[#dfdede] rounded-[8px] p-[16px] w-full bg-[#fcfcfc] flex-col">
                        <a href="#">
                            <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2026/07/2-WordPress-7.0-Roadmap.svg" alt="WordPress 7.1 – Expected New Features & Improvements">
                        </a>
                        <div class="pt-[10px] px-[5px]">
                            <a href="#" class="text-[#f4476c] font-figtree uppercase text-[12px] font-[500] mb-[20px] mt-[5px] block w-fit">WordPress</a>
                            <a href="#" class="block w-fit mb-[20px]"><h3 class="text-black text-[18px] leading-[27px] font-figtree font-[500]">WordPress 7.1 – Expected New Features & Improvements</h3></a>
                            <p class="text-[#4b4b4b] text-[14px] leading-[21px] mb-[10px] font-figtree">WordPress 7.1 gets an official release date: August 19, 2026, coinciding with the final day of WordCamp US 2026 in Phoenix. It is...</p>
                        </div>
                        <div class="mt-[30px] flex justify-between">
                            <span class="text-[#878787] text-[14px] font-figtree">by <a href="#" class="text-black text-[14px] font-figtree" target="_blank">Abdullah Ashraf</a></span>
                            <span class="text-[#878787] text-[14px] font-figtree">July 23, 2026</span>
                        </div>
                    </div>
                    <!--Postend-->
                    <!--Post-->
                    <div class="max-w-[31%] flex border border-solid border-[#dfdede] rounded-[8px] p-[16px] w-full bg-[#fcfcfc] flex-col">
                        <a href="#">
                            <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2026/07/2-WordPress-7.0-Roadmap.svg" alt="WordPress 7.1 – Expected New Features & Improvements">
                        </a>
                        <div class="pt-[10px] px-[5px]">
                            <a href="#" class="text-[#f4476c] font-figtree uppercase text-[12px] font-[500] mb-[20px] mt-[5px] block w-fit">WordPress</a>
                            <a href="#" class="block w-fit mb-[20px]"><h3 class="text-black text-[18px] leading-[27px] font-figtree font-[500]">WordPress 7.1 – Expected New Features & Improvements</h3></a>
                            <p class="text-[#4b4b4b] text-[14px] leading-[21px] mb-[10px] font-figtree">WordPress 7.1 gets an official release date: August 19, 2026, coinciding with the final day of WordCamp US 2026 in Phoenix. It is...</p>
                        </div>
                        <div class="mt-[30px] flex justify-between">
                            <span class="text-[#878787] text-[14px] font-figtree">by <a href="#" class="text-black text-[14px] font-figtree" target="_blank">Abdullah Ashraf</a></span>
                            <span class="text-[#878787] text-[14px] font-figtree">July 23, 2026</span>
                        </div>
                    </div>
                    <!--Postend-->
                    <!--Post-->
                    <div class="max-w-[31%] flex border border-solid border-[#dfdede] rounded-[8px] p-[16px] w-full bg-[#fcfcfc] flex-col">
                        <a href="#">
                            <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2026/07/2-WordPress-7.0-Roadmap.svg" alt="WordPress 7.1 – Expected New Features & Improvements">
                        </a>
                        <div class="pt-[10px] px-[5px]">
                            <a href="#" class="text-[#f4476c] font-figtree uppercase text-[12px] font-[500] mb-[20px] mt-[5px] block w-fit">WordPress</a>
                            <a href="#" class="block w-fit mb-[20px]"><h3 class="text-black text-[18px] leading-[27px] font-figtree font-[500]">WordPress 7.1 – Expected New Features & Improvements</h3></a>
                            <p class="text-[#4b4b4b] text-[14px] leading-[21px] mb-[10px] font-figtree">WordPress 7.1 gets an official release date: August 19, 2026, coinciding with the final day of WordCamp US 2026 in Phoenix. It is...</p>
                        </div>
                        <div class="mt-[30px] flex justify-between">
                            <span class="text-[#878787] text-[14px] font-figtree">by <a href="#" class="text-black text-[14px] font-figtree" target="_blank">Abdullah Ashraf</a></span>
                            <span class="text-[#878787] text-[14px] font-figtree">July 23, 2026</span>
                        </div>
                    </div>
                    <!--Postend-->
                    <!--Post-->
                    <div class="max-w-[31%] flex border border-solid border-[#dfdede] rounded-[8px] p-[16px] w-full bg-[#fcfcfc] flex-col">
                        <a href="#">
                            <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2026/07/2-WordPress-7.0-Roadmap.svg" alt="WordPress 7.1 – Expected New Features & Improvements">
                        </a>
                        <div class="pt-[10px] px-[5px]">
                            <a href="#" class="text-[#f4476c] font-figtree uppercase text-[12px] font-[500] mb-[20px] mt-[5px] block w-fit">WordPress</a>
                            <a href="#" class="block w-fit mb-[20px]"><h3 class="text-black text-[18px] leading-[27px] font-figtree font-[500]">WordPress 7.1 – Expected New Features & Improvements</h3></a>
                            <p class="text-[#4b4b4b] text-[14px] leading-[21px] mb-[10px] font-figtree">WordPress 7.1 gets an official release date: August 19, 2026, coinciding with the final day of WordCamp US 2026 in Phoenix. It is...</p>
                        </div>
                        <div class="mt-[30px] flex justify-between">
                            <span class="text-[#878787] text-[14px] font-figtree">by <a href="#" class="text-black text-[14px] font-figtree" target="_blank">Abdullah Ashraf</a></span>
                            <span class="text-[#878787] text-[14px] font-figtree">July 23, 2026</span>
                        </div>
                    </div>
                    <!--Postend-->
                    <!--Post-->
                    <div class="max-w-[31%] flex border border-solid border-[#dfdede] rounded-[8px] p-[16px] w-full bg-[#fcfcfc] flex-col">
                        <a href="#">
                            <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2026/07/2-WordPress-7.0-Roadmap.svg" alt="WordPress 7.1 – Expected New Features & Improvements">
                        </a>
                        <div class="pt-[10px] px-[5px]">
                            <a href="#" class="text-[#f4476c] font-figtree uppercase text-[12px] font-[500] mb-[20px] mt-[5px] block w-fit">WordPress</a>
                            <a href="#" class="block w-fit mb-[20px]"><h3 class="text-black text-[18px] leading-[27px] font-figtree font-[500]">WordPress 7.1 – Expected New Features & Improvements</h3></a>
                            <p class="text-[#4b4b4b] text-[14px] leading-[21px] mb-[10px] font-figtree">WordPress 7.1 gets an official release date: August 19, 2026, coinciding with the final day of WordCamp US 2026 in Phoenix. It is...</p>
                        </div>
                        <div class="mt-[30px] flex justify-between">
                            <span class="text-[#878787] text-[14px] font-figtree">by <a href="#" class="text-black text-[14px] font-figtree" target="_blank">Abdullah Ashraf</a></span>
                            <span class="text-[#878787] text-[14px] font-figtree">July 23, 2026</span>
                        </div>
                    </div>
                    <!--Postend-->
                    <!--Post-->
                    <div class="max-w-[31%] flex border border-solid border-[#dfdede] rounded-[8px] p-[16px] w-full bg-[#fcfcfc] flex-col">
                        <a href="#">
                            <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2026/07/2-WordPress-7.0-Roadmap.svg" alt="WordPress 7.1 – Expected New Features & Improvements">
                        </a>
                        <div class="pt-[10px] px-[5px]">
                            <a href="#" class="text-[#f4476c] font-figtree uppercase text-[12px] font-[500] mb-[20px] mt-[5px] block w-fit">WordPress</a>
                            <a href="#" class="block w-fit mb-[20px]"><h3 class="text-black text-[18px] leading-[27px] font-figtree font-[500]">WordPress 7.1 – Expected New Features & Improvements</h3></a>
                            <p class="text-[#4b4b4b] text-[14px] leading-[21px] mb-[10px] font-figtree">WordPress 7.1 gets an official release date: August 19, 2026, coinciding with the final day of WordCamp US 2026 in Phoenix. It is...</p>
                        </div>
                        <div class="mt-[30px] flex justify-between">
                            <span class="text-[#878787] text-[14px] font-figtree">by <a href="#" class="text-black text-[14px] font-figtree" target="_blank">Abdullah Ashraf</a></span>
                            <span class="text-[#878787] text-[14px] font-figtree">July 23, 2026</span>
                        </div>
                    </div>
                    <!--Postend-->
                    <!--Post-->
                    <div class="max-w-[31%] flex border border-solid border-[#dfdede] rounded-[8px] p-[16px] w-full bg-[#fcfcfc] flex-col">
                        <a href="#">
                            <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2026/07/2-WordPress-7.0-Roadmap.svg" alt="WordPress 7.1 – Expected New Features & Improvements">
                        </a>
                        <div class="pt-[10px] px-[5px]">
                            <a href="#" class="text-[#f4476c] font-figtree uppercase text-[12px] font-[500] mb-[20px] mt-[5px] block w-fit">WordPress</a>
                            <a href="#" class="block w-fit mb-[20px]"><h3 class="text-black text-[18px] leading-[27px] font-figtree font-[500]">WordPress 7.1 – Expected New Features & Improvements</h3></a>
                            <p class="text-[#4b4b4b] text-[14px] leading-[21px] mb-[10px] font-figtree">WordPress 7.1 gets an official release date: August 19, 2026, coinciding with the final day of WordCamp US 2026 in Phoenix. It is...</p>
                        </div>
                        <div class="mt-[30px] flex justify-between">
                            <span class="text-[#878787] text-[14px] font-figtree">by <a href="#" class="text-black text-[14px] font-figtree" target="_blank">Abdullah Ashraf</a></span>
                            <span class="text-[#878787] text-[14px] font-figtree">July 23, 2026</span>
                        </div>
                    </div>
                    <!--Postend-->
                    <!--Post-->
                    <div class="max-w-[31%] flex border border-solid border-[#dfdede] rounded-[8px] p-[16px] w-full bg-[#fcfcfc] flex-col">
                        <a href="#">
                            <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2026/07/2-WordPress-7.0-Roadmap.svg" alt="WordPress 7.1 – Expected New Features & Improvements">
                        </a>
                        <div class="pt-[10px] px-[5px]">
                            <a href="#" class="text-[#f4476c] font-figtree uppercase text-[12px] font-[500] mb-[20px] mt-[5px] block w-fit">WordPress</a>
                            <a href="#" class="block w-fit mb-[20px]"><h3 class="text-black text-[18px] leading-[27px] font-figtree font-[500]">WordPress 7.1 – Expected New Features & Improvements</h3></a>
                            <p class="text-[#4b4b4b] text-[14px] leading-[21px] mb-[10px] font-figtree">WordPress 7.1 gets an official release date: August 19, 2026, coinciding with the final day of WordCamp US 2026 in Phoenix. It is...</p>
                        </div>
                        <div class="mt-[30px] flex justify-between">
                            <span class="text-[#878787] text-[14px] font-figtree">by <a href="#" class="text-black text-[14px] font-figtree" target="_blank">Abdullah Ashraf</a></span>
                            <span class="text-[#878787] text-[14px] font-figtree">July 23, 2026</span>
                        </div>
                    </div>
                    <!--Postend-->
                    <!--Post-->
                    <div class="max-w-[31%] flex border border-solid border-[#dfdede] rounded-[8px] p-[16px] w-full bg-[#fcfcfc] flex-col">
                        <a href="#">
                            <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2026/07/2-WordPress-7.0-Roadmap.svg" alt="WordPress 7.1 – Expected New Features & Improvements">
                        </a>
                        <div class="pt-[10px] px-[5px]">
                            <a href="#" class="text-[#f4476c] font-figtree uppercase text-[12px] font-[500] mb-[20px] mt-[5px] block w-fit">WordPress</a>
                            <a href="#" class="block w-fit mb-[20px]"><h3 class="text-black text-[18px] leading-[27px] font-figtree font-[500]">WordPress 7.1 – Expected New Features & Improvements</h3></a>
                            <p class="text-[#4b4b4b] text-[14px] leading-[21px] mb-[10px] font-figtree">WordPress 7.1 gets an official release date: August 19, 2026, coinciding with the final day of WordCamp US 2026 in Phoenix. It is...</p>
                        </div>
                        <div class="mt-[30px] flex justify-between">
                            <span class="text-[#878787] text-[14px] font-figtree">by <a href="#" class="text-black text-[14px] font-figtree" target="_blank">Abdullah Ashraf</a></span>
                            <span class="text-[#878787] text-[14px] font-figtree">July 23, 2026</span>
                        </div>
                    </div>
                    <!--Postend-->
                    <!--Post-->
                    <div class="max-w-[31%] flex border border-solid border-[#dfdede] rounded-[8px] p-[16px] w-full bg-[#fcfcfc] flex-col">
                        <a href="#">
                            <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2026/07/2-WordPress-7.0-Roadmap.svg" alt="WordPress 7.1 – Expected New Features & Improvements">
                        </a>
                        <div class="pt-[10px] px-[5px]">
                            <a href="#" class="text-[#f4476c] font-figtree uppercase text-[12px] font-[500] mb-[20px] mt-[5px] block w-fit">WordPress</a>
                            <a href="#" class="block w-fit mb-[20px]"><h3 class="text-black text-[18px] leading-[27px] font-figtree font-[500]">WordPress 7.1 – Expected New Features & Improvements</h3></a>
                            <p class="text-[#4b4b4b] text-[14px] leading-[21px] mb-[10px] font-figtree">WordPress 7.1 gets an official release date: August 19, 2026, coinciding with the final day of WordCamp US 2026 in Phoenix. It is...</p>
                        </div>
                        <div class="mt-[30px] flex justify-between">
                            <span class="text-[#878787] text-[14px] font-figtree">by <a href="#" class="text-black text-[14px] font-figtree" target="_blank">Abdullah Ashraf</a></span>
                            <span class="text-[#878787] text-[14px] font-figtree">July 23, 2026</span>
                        </div>
                    </div>
                    <!--Postend-->
                    <!--Post-->
                    <div class="max-w-[31%] flex border border-solid border-[#dfdede] rounded-[8px] p-[16px] w-full bg-[#fcfcfc] flex-col">
                        <a href="#">
                            <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2026/07/2-WordPress-7.0-Roadmap.svg" alt="WordPress 7.1 – Expected New Features & Improvements">
                        </a>
                        <div class="pt-[10px] px-[5px]">
                            <a href="#" class="text-[#f4476c] font-figtree uppercase text-[12px] font-[500] mb-[20px] mt-[5px] block w-fit">WordPress</a>
                            <a href="#" class="block w-fit mb-[20px]"><h3 class="text-black text-[18px] leading-[27px] font-figtree font-[500]">WordPress 7.1 – Expected New Features & Improvements</h3></a>
                            <p class="text-[#4b4b4b] text-[14px] leading-[21px] mb-[10px] font-figtree">WordPress 7.1 gets an official release date: August 19, 2026, coinciding with the final day of WordCamp US 2026 in Phoenix. It is...</p>
                        </div>
                        <div class="mt-[30px] flex justify-between">
                            <span class="text-[#878787] text-[14px] font-figtree">by <a href="#" class="text-black text-[14px] font-figtree" target="_blank">Abdullah Ashraf</a></span>
                            <span class="text-[#878787] text-[14px] font-figtree">July 23, 2026</span>
                        </div>
                    </div>
                    <!--Postend-->
                    <!--Post-->
                    <div class="max-w-[31%] flex border border-solid border-[#dfdede] rounded-[8px] p-[16px] w-full bg-[#fcfcfc] flex-col">
                        <a href="#">
                            <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2026/07/2-WordPress-7.0-Roadmap.svg" alt="WordPress 7.1 – Expected New Features & Improvements">
                        </a>
                        <div class="pt-[10px] px-[5px]">
                            <a href="#" class="text-[#f4476c] font-figtree uppercase text-[12px] font-[500] mb-[20px] mt-[5px] block w-fit">WordPress</a>
                            <a href="#" class="block w-fit mb-[20px]"><h3 class="text-black text-[18px] leading-[27px] font-figtree font-[500]">WordPress 7.1 – Expected New Features & Improvements</h3></a>
                            <p class="text-[#4b4b4b] text-[14px] leading-[21px] mb-[10px] font-figtree">WordPress 7.1 gets an official release date: August 19, 2026, coinciding with the final day of WordCamp US 2026 in Phoenix. It is...</p>
                        </div>
                        <div class="mt-[30px] flex justify-between">
                            <span class="text-[#878787] text-[14px] font-figtree">by <a href="#" class="text-black text-[14px] font-figtree" target="_blank">Abdullah Ashraf</a></span>
                            <span class="text-[#878787] text-[14px] font-figtree">July 23, 2026</span>
                        </div>
                    </div>
                    <!--Postend-->
                    <!--Post-->
                    <div class="max-w-[31%] flex border border-solid border-[#dfdede] rounded-[8px] p-[16px] w-full bg-[#fcfcfc] flex-col">
                        <a href="#">
                            <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2026/07/2-WordPress-7.0-Roadmap.svg" alt="WordPress 7.1 – Expected New Features & Improvements">
                        </a>
                        <div class="pt-[10px] px-[5px]">
                            <a href="#" class="text-[#f4476c] font-figtree uppercase text-[12px] font-[500] mb-[20px] mt-[5px] block w-fit">WordPress</a>
                            <a href="#" class="block w-fit mb-[20px]"><h3 class="text-black text-[18px] leading-[27px] font-figtree font-[500]">WordPress 7.1 – Expected New Features & Improvements</h3></a>
                            <p class="text-[#4b4b4b] text-[14px] leading-[21px] mb-[10px] font-figtree">WordPress 7.1 gets an official release date: August 19, 2026, coinciding with the final day of WordCamp US 2026 in Phoenix. It is...</p>
                        </div>
                        <div class="mt-[30px] flex justify-between">
                            <span class="text-[#878787] text-[14px] font-figtree">by <a href="#" class="text-black text-[14px] font-figtree" target="_blank">Abdullah Ashraf</a></span>
                            <span class="text-[#878787] text-[14px] font-figtree">July 23, 2026</span>
                        </div>
                    </div>
                    <!--Postend-->
                    <!--Post-->
                    <div class="max-w-[31%] flex border border-solid border-[#dfdede] rounded-[8px] p-[16px] w-full bg-[#fcfcfc] flex-col">
                        <a href="#">
                            <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2026/07/2-WordPress-7.0-Roadmap.svg" alt="WordPress 7.1 – Expected New Features & Improvements">
                        </a>
                        <div class="pt-[10px] px-[5px]">
                            <a href="#" class="text-[#f4476c] font-figtree uppercase text-[12px] font-[500] mb-[20px] mt-[5px] block w-fit">WordPress</a>
                            <a href="#" class="block w-fit mb-[20px]"><h3 class="text-black text-[18px] leading-[27px] font-figtree font-[500]">WordPress 7.1 – Expected New Features & Improvements</h3></a>
                            <p class="text-[#4b4b4b] text-[14px] leading-[21px] mb-[10px] font-figtree">WordPress 7.1 gets an official release date: August 19, 2026, coinciding with the final day of WordCamp US 2026 in Phoenix. It is...</p>
                        </div>
                        <div class="mt-[30px] flex justify-between">
                            <span class="text-[#878787] text-[14px] font-figtree">by <a href="#" class="text-black text-[14px] font-figtree" target="_blank">Abdullah Ashraf</a></span>
                            <span class="text-[#878787] text-[14px] font-figtree">July 23, 2026</span>
                        </div>
                    </div>
                    <!--Postend-->
                    <!--Post-->
                    <div class="max-w-[31%] flex border border-solid border-[#dfdede] rounded-[8px] p-[16px] w-full bg-[#fcfcfc] flex-col">
                        <a href="#">
                            <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2026/07/2-WordPress-7.0-Roadmap.svg" alt="WordPress 7.1 – Expected New Features & Improvements">
                        </a>
                        <div class="pt-[10px] px-[5px]">
                            <a href="#" class="text-[#f4476c] font-figtree uppercase text-[12px] font-[500] mb-[20px] mt-[5px] block w-fit">WordPress</a>
                            <a href="#" class="block w-fit mb-[20px]"><h3 class="text-black text-[18px] leading-[27px] font-figtree font-[500]">WordPress 7.1 – Expected New Features & Improvements</h3></a>
                            <p class="text-[#4b4b4b] text-[14px] leading-[21px] mb-[10px] font-figtree">WordPress 7.1 gets an official release date: August 19, 2026, coinciding with the final day of WordCamp US 2026 in Phoenix. It is...</p>
                        </div>
                        <div class="mt-[30px] flex justify-between">
                            <span class="text-[#878787] text-[14px] font-figtree">by <a href="#" class="text-black text-[14px] font-figtree" target="_blank">Abdullah Ashraf</a></span>
                            <span class="text-[#878787] text-[14px] font-figtree">July 23, 2026</span>
                        </div>
                    </div>
                    <!--Postend-->
                    <!--Post-->
                    <div class="max-w-[31%] flex border border-solid border-[#dfdede] rounded-[8px] p-[16px] w-full bg-[#fcfcfc] flex-col">
                        <a href="#">
                            <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2026/07/2-WordPress-7.0-Roadmap.svg" alt="WordPress 7.1 – Expected New Features & Improvements">
                        </a>
                        <div class="pt-[10px] px-[5px]">
                            <a href="#" class="text-[#f4476c] font-figtree uppercase text-[12px] font-[500] mb-[20px] mt-[5px] block w-fit">WordPress</a>
                            <a href="#" class="block w-fit mb-[20px]"><h3 class="text-black text-[18px] leading-[27px] font-figtree font-[500]">WordPress 7.1 – Expected New Features & Improvements</h3></a>
                            <p class="text-[#4b4b4b] text-[14px] leading-[21px] mb-[10px] font-figtree">WordPress 7.1 gets an official release date: August 19, 2026, coinciding with the final day of WordCamp US 2026 in Phoenix. It is...</p>
                        </div>
                        <div class="mt-[30px] flex justify-between">
                            <span class="text-[#878787] text-[14px] font-figtree">by <a href="#" class="text-black text-[14px] font-figtree" target="_blank">Abdullah Ashraf</a></span>
                            <span class="text-[#878787] text-[14px] font-figtree">July 23, 2026</span>
                        </div>
                    </div>
                    <!--Postend-->
                    <!--Post-->
                    <div class="max-w-[31%] flex border border-solid border-[#dfdede] rounded-[8px] p-[16px] w-full bg-[#fcfcfc] flex-col">
                        <a href="#">
                            <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2026/07/2-WordPress-7.0-Roadmap.svg" alt="WordPress 7.1 – Expected New Features & Improvements">
                        </a>
                        <div class="pt-[10px] px-[5px]">
                            <a href="#" class="text-[#f4476c] font-figtree uppercase text-[12px] font-[500] mb-[20px] mt-[5px] block w-fit">WordPress</a>
                            <a href="#" class="block w-fit mb-[20px]"><h3 class="text-black text-[18px] leading-[27px] font-figtree font-[500]">WordPress 7.1 – Expected New Features & Improvements</h3></a>
                            <p class="text-[#4b4b4b] text-[14px] leading-[21px] mb-[10px] font-figtree">WordPress 7.1 gets an official release date: August 19, 2026, coinciding with the final day of WordCamp US 2026 in Phoenix. It is...</p>
                        </div>
                        <div class="mt-[30px] flex justify-between">
                            <span class="text-[#878787] text-[14px] font-figtree">by <a href="#" class="text-black text-[14px] font-figtree" target="_blank">Abdullah Ashraf</a></span>
                            <span class="text-[#878787] text-[14px] font-figtree">July 23, 2026</span>
                        </div>
                    </div>
                    <!--Postend-->
                    <!--Post-->
                    <div class="max-w-[31%] flex border border-solid border-[#dfdede] rounded-[8px] p-[16px] w-full bg-[#fcfcfc] flex-col">
                        <a href="#">
                            <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2026/07/2-WordPress-7.0-Roadmap.svg" alt="WordPress 7.1 – Expected New Features & Improvements">
                        </a>
                        <div class="pt-[10px] px-[5px]">
                            <a href="#" class="text-[#f4476c] font-figtree uppercase text-[12px] font-[500] mb-[20px] mt-[5px] block w-fit">WordPress</a>
                            <a href="#" class="block w-fit mb-[20px]"><h3 class="text-black text-[18px] leading-[27px] font-figtree font-[500]">WordPress 7.1 – Expected New Features & Improvements</h3></a>
                            <p class="text-[#4b4b4b] text-[14px] leading-[21px] mb-[10px] font-figtree">WordPress 7.1 gets an official release date: August 19, 2026, coinciding with the final day of WordCamp US 2026 in Phoenix. It is...</p>
                        </div>
                        <div class="mt-[30px] flex justify-between">
                            <span class="text-[#878787] text-[14px] font-figtree">by <a href="#" class="text-black text-[14px] font-figtree" target="_blank">Abdullah Ashraf</a></span>
                            <span class="text-[#878787] text-[14px] font-figtree">July 23, 2026</span>
                        </div>
                    </div>
                    <!--Postend-->
                    <!--Post-->
                    <div class="max-w-[31%] flex border border-solid border-[#dfdede] rounded-[8px] p-[16px] w-full bg-[#fcfcfc] flex-col">
                        <a href="#">
                            <img src="https://wpexperts.s3.amazonaws.com/wp-content/uploads/2026/07/2-WordPress-7.0-Roadmap.svg" alt="WordPress 7.1 – Expected New Features & Improvements">
                        </a>
                        <div class="pt-[10px] px-[5px]">
                            <a href="#" class="text-[#f4476c] font-figtree uppercase text-[12px] font-[500] mb-[20px] mt-[5px] block w-fit">WordPress</a>
                            <a href="#" class="block w-fit mb-[20px]"><h3 class="text-black text-[18px] leading-[27px] font-figtree font-[500]">WordPress 7.1 – Expected New Features & Improvements</h3></a>
                            <p class="text-[#4b4b4b] text-[14px] leading-[21px] mb-[10px] font-figtree">WordPress 7.1 gets an official release date: August 19, 2026, coinciding with the final day of WordCamp US 2026 in Phoenix. It is...</p>
                        </div>
                        <div class="mt-[30px] flex justify-between">
                            <span class="text-[#878787] text-[14px] font-figtree">by <a href="#" class="text-black text-[14px] font-figtree" target="_blank">Abdullah Ashraf</a></span>
                            <span class="text-[#878787] text-[14px] font-figtree">July 23, 2026</span>
                        </div>
                    </div>
                    <!--Postend-->
                </div>
                <button id="#loadmore" class="border border-solid border-black py-[11px] leading-[20px] bg-[#fff0] w-[160px] text-center rounded-[30px] font-figtree transition hover:bg-black hover:text-white mx-auto block mt-[15px] cursor-pointer">Load More</button>
            </div>
            
        </div>
    </section>

    <?php require_once('../templates/global/footer.php') ?>

</body>

</html>