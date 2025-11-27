<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VibeWalls 
– Free Aesthetic HD Wallpapers for Desktop & Mobile
</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <meta name="google-site-verification" content="YtLfpIkScdrObuPUscSmklz6fLKYVeKBy9P6j1iMvlI" />
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-EP65CT591V"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-EP65CT591V');
  </script>
  
<meta name="keywords" content="free wallpapers, HD wallpapers, desktop wallpapers, mobile wallpapers, aesthetic backgrounds, nature wallpapers, abstract wallpapers, anime wallpapers, VibeWalls, minimal wallpapers, 4K wallpapers">
<meta name="description" content="Discover stunning HD wallpapers for desktop and mobile. Download free aesthetic backgrounds in nature, anime, abstract, minimal, and more — updated daily on VibeWalls.">

  
  <style>
    :root{
      --red1: #410808;
      --gradient1: linear-gradient(180deg, rgba(80, 6, 6, 0.925), rgba(105, 78, 2, 0.7));
    }

    .bg-deep-red{
      background: var(--red1);
    }

    .text-deep-red{
      color: var(--red1);
    }

    .bg-gradient1{
      background: var(--gradient1);
    }

    html{
      scroll-behavior: smooth;
    }

    .montserrat{
      font-family: "Montserrat", sans-serif;
      font-optical-sizing: auto;
    }

  </style>
</head>
<body class="bg-white font-sans">
  <header class="bg-green-100 p-4 flex items-center justify-between md:px-20" style="position:fixed;z-index:10;top:0;left:0;width:100%;">
    <div class="flex items-center">
      <!-- <a href="http://localhost/vibewalls_v2index">
        <img src="<?= URL_ROOT; ?>assets/images/logo-1.png" alt="Firstcare Financial Services Logo" class="object-cover w-auto md:h-[30px] h-6">
      </a> -->
      <h1 class="ml-2 text-xl font-semibold montserrat"><a href="http://localhost/vibewalls_v2index">Vibewalls</a></h1>
    </div>
    <nav class="space-x-4 hidden md:flex md:gap-3 montserrat text-sm">
      <a href="http://localhost/vibewalls_v2wallpapers/list" class="hover:text-green-500">Wallpapers</a>
      <!--
      <a href="{% url what_we_do %}" class="hover:text-green-500">Devices</a>
      <a href="{% url who_we_are %}" class="hover:text-green-500">Popular</a>
      <a href="" class="hover:text-red-800">Contact</a> -->
    </nav>
    <!-- <div class="flex gap-5 justify-right hidden md:flex">
      <a href="#" class="bg-transparent border border-red-600 text-red-600 font-semibold py-3 px-6 rounded-md hover:bg-red-600 hover:text-white text-sm">Sign up</a>
      <a href="#" class="bg-transparent border border-red-600 text-red-600 font-semibold py-3 px-6 rounded-md hover:bg-red-600 hover:text-white text-sm">Sign in</a>
    </div> -->
    <span class="fas fa-bars text-4xl text-green-600 md:hidden" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation"></span>
  </header>

  
<section 
  style="height:100vh; background: linear-gradient(88deg,rgba(0,0,0,1), rgba(0,0,0,0.4)), url('<?= URL_ROOT; ?><?= $hero_bg->image_link; ?>') ;display:flex;background-repeat:no-repeat;background-size:cover;" 
  class="montserrat bg-gray-100 relative text-black py-16 px-5 md:px-20 flex gap-10 items-center justify-center flex-col md:flex-row">
    <div class="md:w-3/4 text-white text-center">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">Discover Beautiful Wallpapers</h1>
      <p class="text-lg mb-6 mx-auto" style="max-width:80%;">Free wallpapers for desktop, mobile, and tablet. Transform your screens with stunning visuals from our curated collection.</p>

      <!-- Search Bar -->
    <!-- <div class="bg-gray-50 p-5 rounded-lg flex flex-col sm:flex-row items-center justify-center gap-2 max-w-3xl mx-auto mt-10 text-black text-sm">
      <input type="text" placeholder="Search wallpaper"
             class="w-full sm:flex-1 px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"/>

      <select class="px-4 pr-7 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary">
        <option>Device type</option>
        <option>Desktop</option>
        <option>Mobile</option>
        <option>Tablet</option>
      </select>

      <select class="px-4 pr-7 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary">
        <option>Resolution</option>
        <option>4K</option>
        <option>1080p</option>
        <option>720p</option>
      </select>

      <select class="px-4 pr-7 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary">
        <option>Category</option>
        <option>Nature</option>
        <option>Abstract</option>
        <option>City</option>
      </select>
      <a href="#" class="bg-green-600 text-white font-semibold py-3 px-6 rounded-md hover:bg-green-500 text-sm flex justify-center gap-3">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
        <span>Search</span>
      </a>
    </div> -->
    </div>
</section>

<section class="py-16 px-5 md:px-20">
    <div class="mx-auto">
      <div class="max-w-4xl montserrat" style="margin:0 auto;">
        <div class="text-center">
          <span class="text-center inline-block bg-green-100 text-green-400 text-sm font-semibold px-3 py-1 rounded-lg mb-4">Top Pick</span>
        </div>
        <h2 class="text-center text-4xl md:text-5xl font-bold text-gray-800 mb-5">Editor's Choice</h2>
        <!-- <p class="text-lg text-gray-600 mb-12">At FIRSTCARE Financial, we’re redefining what it means to be an accounting firm in Toronto. Our team of certified professionals blends deep financial expertise with modern cloud-based technology to help businesses make smarter, faster decisions.
          We go beyond bookkeeping — we deliver clarity, strategy, and confidence for your financial future.
        </p> -->
        <!-- <div class="relative mt-8 md:mt-0 w-full">
          <img src="<?= URL_ROOT; ?>assets/images/img-2.jpg" alt="Church Interior" class="rounded-lg shadow-lg object-cover w-full h-64 md:h-[400px]">
        </div> -->
        <div class="group relative mx-auto max-w-3xl overflow-hidden rounded-3xl bg-white shadow-xl transition-all hover:shadow-2xl">
    <!-- Image -->
    <div class="relative">
      <img 
        src="<?= $editor_choice->image_link; ?>"
        alt="<?= $editor_choice->alt_text; ?>"
        class="w-full h-96 object-cover transition-transform duration-500 group-hover:scale-105"
      />
      <!-- Dark overlay for text readability -->
      <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
    </div>

    <!-- Content (pinned to bottom) -->
    <div class="absolute bottom-0 left-0 right-0 p-6 text-white" style="background: linear-gradient(180deg, rgba(0,0,0,0), rgba(0,0,0,0.7))">
      <h2 class="text-2xl font-bold mb-2 pl-3"><a href="http://localhost/vibewalls_v2wallpapers/s/<?= $editor_choice->id; ?>"><?= $editor_choice->image_name; ?></a></h2>

      
      <!-- <div class="flex items-center gap-4 text-sm opacity-90 mb-5">
        <span class="flex items-center gap-1">
          👁 12.5K views
        </span>
        <span class="flex items-center gap-1">
          ↓ 3.2K downloads
        </span>
        <span class="flex items-center gap-1 text-emerald-400">
          ❤️ 62
        </span>
      </div> -->

      <!-- Action buttons -->
      <div class="flex items-center gap-3">
        
        <!-- <button class="p-3 rounded-full bg-white/20 backdrop-blur-sm hover:bg-white/30 transition">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
          </svg>
        </button>

        
        <button class="p-3 rounded-full bg-white/20 backdrop-blur-sm hover:bg-white/30 transition">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m.684 2.684C9.114 13.938 9 14.394 9 15c0 .482.114.938.316 1.342m-1.632-5.026A5.972 5.972 0 017 12c0-1.657.672-3.16 1.768-4.242m8.448 8.484A5.972 5.972 0 0117 12c0-1.657-.672-3.16-1.768-4.242"/>
          </svg>
        </button> -->

        <!-- Download -->
        <a href="<?= $editor_choice->image_link; ?>" download class="flex items-center gap-2 bg-emerald-500 hover:bg-emerald-600 text-white font-medium px-6 py-3 rounded-full transition shadow-lg">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
          </svg>
          <span>Download</span>
        </a>
      </div>
    </div>
  </div>
      </div>
    </div>
  </section>

<!-- BROWSE BY DEVICE SECTION -->
  <section class="py-16 mx-auto px-5 md:px-20 text-center bg-green-100 md:py-20">
    <!-- Heading -->
    <h2 class="montserrat text-3xl font-bold text-gray-900 mb-2">Browse by Device</h2>
    <p class="montserrat text-gray-600 mb-10">
      Optimized wallpapers for every screen size
    </p>

    <!-- Wallpaper Cards -->
    <div class="md:flex items-center justify-center gap-10">
      <!-- Card 1 -->
      <div class="w-full md:w-1/4 mb-10 md:mb-0">
        <div class="group relative rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow">
          <img 
            src="<?= URL_ROOT; ?>assets/images/mobile_category.jpg"
            alt="Mobile Wallpapers"
            class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300"
          />
          <!--
          <div class="absolute top-3 left-3 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full">
            #1
          </div>
          
          <div class="absolute top-3 right-3 bg-emerald-500 text-white text-xs font-medium px-2 py-1 rounded-full flex items-center gap-1">
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
            </svg>
            5K
          </div> 
          -->
        </div>
        <div class="mt-3">
          <h3 class="font-semibold text-gray-900">Mobile Wallpapers</h3>
          <!-- <p class="text-xs text-gray-500">1.2K views • 5K downloads</p> -->
        </div>
      </div>

      <div class="w-full md:w-1/4">
        <div class="group relative rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow">
          <img 
            src="<?= URL_ROOT; ?>assets/images/desktop_category.jpg"
            alt="Desktop Wallpapers"
            class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300"
          />
          
          <!-- <div class="absolute top-3 left-3 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full">
            #1
          </div>
          
          <div class="absolute top-3 right-3 bg-emerald-500 text-white text-xs font-medium px-2 py-1 rounded-full flex items-center gap-1">
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
            </svg>
            5K
          </div> 
          -->
        </div>
        <div class="mt-3">
          <h3 class="font-semibold text-gray-900">Desktop Wallpapers</h3>
          <!-- <p class="text-xs text-gray-500">1.2K views • 5K downloads</p> -->
        </div>
      </div>

    </div>
  </section>


<!-- TRENDING WALLPAPERS SECTION -->
  <section class="py-16 mx-auto px-5 md:px-20 md:py-20">
    <!-- Header -->
    <div class="flex items-center justify-between mb-6">
      <div>
        <h2 class="text-2xl md:text-3xl font-bold text-gray-900 montserrat">Trending Wallpapers</h2>
        <p class="text-sm text-gray-600 montserrat">Most downloaded this week</p>
      </div>
      <!-- a -->
    </div>

    <!-- Horizontal Scrollable Cards -->
    <div class="md:flex gap-10">
      <?php  foreach($trending as $wallpaper):  ?>
      <a href="http://localhost/vibewalls_v2wallpapers/s/<?= $wallpaper->id; ?>" class="md:w-1/4 mb-5 md:mb-0">
      <div class="">
        <div class="group relative rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow">
          <img 
            src="<?= $wallpaper->image_link; ?>"
            alt="<?= $wallpaper->alt_text; ?>"
            class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300"
          />
          <!-- Rank Badge -->
          <div class="absolute top-3 left-3 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full">
            #1
          </div>
          <!-- Downloads Badge -->
          <div class="absolute top-3 right-3 bg-emerald-500 text-white text-xs font-medium px-2 py-1 rounded-full flex items-center gap-1">
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
            </svg>
            5K
          </div>
        </div>
        <div class="mt-3 mb-5 md:mb-0">
          <h3 class="font-semibold text-gray-900"><?= $wallpaper->image_name; ?></h3>
          <p class="text-xs text-gray-500">1.2K views • 5K downloads</p>
        </div>
      </div>
      </a>
      <?php  endforeach;  ?>
      
      <!-- Add more cards as needed -->
    </div>
    <!-- <div class="mt-5">
      <a href="#" class="md:w-2/12 bg-green-600 text-white font-semibold py-3 px-6 rounded-md hover:bg-green-500 text-sm flex justify-center gap-3">
        <span>More wallpapers</span>
      </a>
    </div> -->
  </section>

  <!-- LATEST WALLPAPERS SECTION -->
  <section class="py-16 mx-auto px-5 md:px-20 md:py-20">
    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-8">
      <div>
        <h2 class="text-2xl md:text-3xl font-bold text-gray-900 montserrat">Latest Wallpapers</h2>
        <p class="text-sm text-gray-600 montserrat">Fresh uploads from our community</p>
      </div>
    </div>

    <!-- Grid of Wallpapers -->
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
      <!-- Wallpaper Card 1 -->
       <?php  foreach($latest as $wallpaper):  ?>
      <div class="group relative rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow mb-5 md:mb-0">
        <a href="http://localhost/vibewalls_v2wallpapers/s/<?= $wallpaper->id; ?>">
        <img 
          src="<?= $wallpaper->image_link; ?>"
          alt="<?= $wallpaper->alt_text; ?>"
          class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300"
        />
        <div class="absolute top-2 right-2 bg-emerald-500 text-white text-xs font-medium px-2 py-1 rounded-full flex items-center gap-1">
          <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
          </svg>
          5K
        </div>
        <div class="mt-3 p-2">
          <h3 class="font-medium text-gray-900 text-sm"><a href="http://localhost/vibewalls_v2wallpapers/s/<?= $wallpaper->id; ?>"><?= $wallpaper->image_name; ?></a></h3>
          <p class="text-xs text-gray-500">1.2K views • 5K downloads</p>
        </div>
        </a>
      </div>
      <?php  endforeach;  ?>
    </div>

    <!-- Load More Button -->
    <div class="flex justify-center mt-12">
      <div class="">
      <a href="http://localhost/vibewalls_v2wallpapers/list" class="bg-green-600 text-white font-semibold py-3 px-6 rounded-md hover:bg-green-500 text-sm flex justify-center gap-3">
        <span>More wallpapers</span>
      </a>
      </div>
    </div>
  </section>


  <footer class="bg-green-50 py-8 px-4 md:px-20">
    <div class="md:flex w-full gap-10 justify-between items-center">
      <div class="md:w-1/3">
        <div class="mb-5">
          <!-- <div class="flex justify-center md:justify-start">
            <img src="<?= URL_ROOT; ?>assets/images/logo-1.png" alt="Firstcare Financial Services Logo" class="object-cover w-auto md:h-12 h-12">
          </div> -->
          <div class="text-center md:text-left mt-5">
            <h3 class="mb-3 text-2xl font-semibold montserrat">Vibewalls</h3>
            <p class="text-sm mb-4 md:text-left">Free wallpapers for desktop, mobile, and tablet. Transform your screens with stunning visuals from our curated collection.</p>
          </div>
        </div>
        <div class="flex justify-center md:justify-start gap-5">
          
          <!-- <a href="">
          <div class="py-3 px-4 bg-green-600 rounded-lg h-16 w-16 flex items-center justify-center">
              <span class="fab fa-facebook text-2xl text-white"></span>
          </div>
          </a>

          <a href="">
          <div class="py-3 px-4 bg-green-600 rounded-lg h-16 w-16 flex items-center justify-center">
            <span class="fab fa-instagram text-2xl text-white"></span>
          </div>
          </a>

          <a href="">
          <div class="py-3 px-4 bg-green-600 rounded-lg h-16 w-16 flex items-center justify-center">
            <span class="fas fa-envelope text-xl text-white"></span>
          </div>
          </a> -->

          <!-- <a href="">
            <div class="py-3 px-4 bg-green-600 rounded-lg h-16 w-16 flex items-center justify-center">
            <span class="fas fa-phone-alt text-xl text-white"></span>
          </div>
          </a> -->

        </div>
      </div>
      
      <div class="flex justify-center gap-10 mt-5 md:mt-1 montserrat">
        <div class="">
          <h4 class="text-sm font-semibold mb-4 text-green-500">Quick Links</h4>
          <ul class="text-sm space-y-2">
            <li><a href="http://localhost/vibewalls_v2index">Home</a></li>
            <li><a href="http://localhost/vibewalls_v2wallpapers/list">Wallpapers</a></li>
            <!--
            <li><a href="">Desktop Wallpapers</a></li>
            <li><a href="">Categories</a></li> -->
          </ul>
        </div>
        <!-- <div class="">
          <h4 class="text-sm font-semibold mb-4 text-red-400">Other Links</h4>
          <ul class="text-sm space-y-2">
            <li><a href="">Resources</a></li>
            <li><a href="">Staff Directory</a></li>
          </ul>
        </div>
        <div class="">
          <h4 class="text-sm font-semibold mb-4 text-red-400">Client Portal</h4>
          <ul class="text-sm space-y-2">
            <li><a href="">Sign up</a></li>
            <li><a href="">Login</a></li>
          </ul>
        </div> -->
      </div>
    </div>
    <div class="mt-8 text-center text-xs border-t border-green-500 pt-4">
      <p>© 2025 Vibewalls. All rights reserved.</p>
      <!-- <div class="mt-2 space-x-4">
        <a href="#" class="text-yellow-400 hover:text-yellow-300">Privacy Policy</a>
        <a href="#" class="text-yellow-400 hover:text-yellow-300">Terms of Service</a>
        <a href="#" class="text-yellow-400 hover:text-yellow-300">Accessibility</a>
      </div> -->
    </div>
  </footer>


<!-- drawer component -->
<div id="drawer-navigation" class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-64 dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-navigation-label">
    <h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">Menu</h5>
    <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white" >
      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
      </svg>
      <span class="sr-only">Close menu</span>
   </button>
  <div class="py-4 overflow-y-auto">
      <ul class="space-y-2 font-medium">
        <li>
            <a href="http://localhost/vibewalls_v2index" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <span class="flex-1 ms-3 whitespace-nowrap">Home</span>
            </a>
         </li>
         <li>
            <a href="http://localhost/vibewalls_v2wallpapers/list" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <span class="flex-1 ms-3 whitespace-nowrap">Wallpapers</span>
            </a>
         </li>
         <!--
         <li>
            <a href="{% url what_we_do %}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <span class="flex-1 ms-3 whitespace-nowrap">What We Do</span>
            </a>
         </li>
         <li>
            <a href="" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <span class="flex-1 ms-3 whitespace-nowrap">Resources</span>
            </a>
         </li>
         <li>
            <a href="" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <span class="flex-1 ms-3 whitespace-nowrap">Staff Directory</span>
            </a>
         </li>
         <li>
            <a href="" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <span class="flex-1 ms-3 whitespace-nowrap">Contact</span>
            </a>
         </li>
         <li>
            <a href="" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <span class="flex-1 ms-3 whitespace-nowrap">Client Portal</span>
            </a>
         </li> -->
      </ul>
      <!-- <div class="" style="margin-top:120px;opacity:0.2">
        <img src="<?= URL_ROOT; ?>assets/images/logo-1.png" alt="All Souls Anglican Calgary Logo" class="rounded-lg shadow-lg object-cover w-auto md:h-[64px] h-12">
      </div> -->
   </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
  

</body>
</html>