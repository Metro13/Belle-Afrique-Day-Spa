<?php
session_start();
require 'classes/config.php';
require 'client.php';

try {
  //code...
  if (!empty($_SESSION['auth_id'])) {
    $userID = $_SESSION['auth_id'];
  } else {
    header('location:signin.php');
  }
} catch (PDOException $th) {
  //throw $th;
  echo $th->getMessage();
}


?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../dist/style.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://npmcdn.com/flickity@2/dist/flickity.pkgd.js"></script>
  <title>Home</title>
</head>

<body>

  <script>
    AOS.init();
  </script>
  <!------Navigation bar---->
  <header class="sticky bg-gray-50 top-0 flex-1 w-full">
    <!----Navigation-->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <div class=" bg-gray-50 p-4">
      <div class="">
        <div class="w-full text-gray-800  dark-mode:text-gray-200 dark-mode:bg-gray-800">
          <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
            <div class="flex flex-row items-center justify-between p-4">
              <h3 class=" text-2xl font-bold">BelleAfrique.</h3>
              <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                  <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                  <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>

              </button>
            </div>
            <nav :class="{'flex': open, 'hidden': !open}" class="flex-col md:space-x-8 flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
            <a class="px-4 py-2 mt-2 text-sm font-medium bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-white focus:text-gray-900 hover:shadow-sm hover:shadow-pink-300/60 hover:bg-indigo-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="index.php">Home</a>
              <a class="px-4 py-2 mt-2 text-sm font-medium bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-white focus:text-gray-900 hover:shadow-sm hover:shadow-pink-300/60 hover:bg-indigo-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="appointment.php">Appointment</a>
              <a class="px-4 py-2 mt-2 text-sm font-medium bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-white focus:text-gray-900 hover:shadow-sm hover:shadow-pink-300/60 hover:bg-indigo-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="Treatment.php">Treatment</a>
              <a class="px-4 py-2 mt-2 text-sm font-medium bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-white focus:text-gray-900 hover:shadow-sm hover:shadow-pink-300/60 hover:bg-indigo-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="products.php">Products</a>
              <a class="px-4 py-2 mt-2 text-sm font-medium bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-white focus:text-gray-900 hover:shadow-sm hover:shadow-pink-300/60 hover:bg-indigo-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="Help.php">Help</a>
              <a class="px-4 py-2 mt-2 text-sm bg-indigo-600 text-white font-medium bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:shadow-sm hover:shadow-teal-300/60 hover:text-white focus:text-white hover:bg-indigo-800 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="signup.php">Sign up</a>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!------Main section------>

  <section id="hero-section" class="mt-10 mx-auto max-w-7xl lg:flex md:flex px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
    <div class="sm:text-center lg:text-left">
      <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
        <span class="block xl:inline">Welcome to BelleAfrique</span>
        <span class="block text-indigo-600 xl:inline">Beauty Spa</span>
      </h1>
      <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
        At Belle Afrique Spa we work on enhancing your beauty and go the extra mile of ensuring
        every treatment you receive at our Spa puts a smile on your face.
        Your happiness gives us the satisfaction of a good job done

      </p>
      <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
        <div class="rounded-md shadow">
          <a href="appointment.php" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
            Book Appointment </a>
        </div>
        <div class="mt-3 sm:mt-0 sm:ml-3">
          <a href="products.php" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
            Check Products </a>
        </div>
      </div>
    </div>
    <div>
      <img class="" src="./images/relaxat.jpg" alt="">
    </div>
  </section>
  <div>

  </div>
  </div>
  </div>

  <!---------services section-------------->
  <section id="services" class="inset-0 bg-fixed py-12 mt-12">
    <div class="overlay">
      <div tabindex="0" aria-label="group of cards" class="focus:outline-none px-4 lg:px-0">
        <div class="mx-auto container flex flex-wrap px-2 lg:px-24">
          <div tabindex="0" aria-label="card 1" class="focus:outline-none flex sm:w-full md:w-1/2 lg:border-r md:border-r sm:border-r-0 border-indigo-400 pb-10 lg:pt-10">
            <div class=" flex flex-shrink-0 mr-5 text-white">
            </div>
            <div class="md:w-9/12 lg:w-9/12">
              <h2 tabindex="0" class="focus:outline-none text-lg font-semibold leading-5 text-white">Massage Therapy</h2>
              <p tabindex="0" class="focus:outline-none text-base text-white leading-normal xl:w-10/12 pt-2"> Bring back the balance. Schedule a massage session. Let usetouch your your body, heal your mind and calm your spirit.
                .</p>
            </div>
          </div>
          <div tabindex="0" aria-label="card 2" class="focus:outline-none flex sm:w-full md:w-1/2 lg:pb-10 lg:pt-10">
            <div class=" flex flex-shrink-0 sm:ml-0 md:ml-10 lg:ml-10 mr-5 text-white">
            </div>
            <div class="md:w-9/12 lg:w-9/12 ">
              <h2 tabindex="0" class="focus:outline-none text-lg font-semibold leading-5 text-white">Pedicure & Manicure
              </h2>
              <p tabindex="0" class="focus:outline-none text-base text-white leading-normal xl:w-10/12 pt-2"> Nothing improves your mood like a new manicure and pedicure. .</p>
            </div>
          </div>
          <div tabindex="0" aria-label="card 3" class="focus:outline-none flex sm:w-full md:w-1/2 lg:border-t md:border-t sm:border-t-0 lg:border-r md:border-r sm:border-r-0 border-indigo-400 pt-10 lg:pb-20">
            <div class=" flex flex-shrink-0 mr-5 text-white">
            </div>
            <div class="md:w-9/12 lg:w-9/12 ">
              <h2 tabindex="0" class="focus:outline-none text-lg font-semibold leading-5 text-white">Hair Treatment</h2>
              <p tabindex="0" class="focus:outline-none text-base text-white leading-normal xl:w-10/12 pt-2"> Lets talk About
                your Hair! your hair beauty is our duty and so we'll style, you will smile. Bad hair days are over  </p>
            </div>
          </div>
          <div tabindex="0" aria-label="card 4" class="focus:outline-none flex sm:w-full md:w-1/2 lg:border-t md:border-t sm:border-t-0 border-indigo-400 pt-10 lg:pb-20">
            <div class=" flex flex-shrink-0 sm:ml-0 md:ml-10 lg:ml-10 mr-5 text-white">
            </div>
            <div class="md:w-9/12 lg:w-9/12 ">
              <h2 tabindex="0" class="focus:outline-none text-lg font-semibold leading-5 text-white">Skin Care products
              </h2>
              <p tabindex="0" class="focus:outline-none text-base text-white leading-normal xl:w-10/12 pt-2">The road to clearskin is here!
                at Belle Afrique we have all Skin care products for smooth and flawless skin. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-----------------company stats------------------------>

  <div class="dark:bg-gray-900">
    <div class="pb-20">
      <div class="mx-auto bg-gradient-to-l bg-slate-50 h-96">
        <div class="mx-auto container w-full flex flex-col justify-center items-center">
          <div class="flex justify-center items-center flex-col">
            <div class="mt-20">
              <h2 class="lg:text-3xl md:text-5xl text-4xl font-black leading-10 text-gray-700">Our stats</h2>
            </div>
            <div class="mt-6 mx-2 md:mx-0 text-center">
              <p class="lg:text-lg md:text-base leading-6 text-sm text-gray-700">
                With more than 12 year experience in the beauty industry Belle Afrique is tranquility,
                rejuvenation, serenity, peace of body and mind… just a few words to describe
                the ultimate spa experience you will find.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="mx-auto container md:-mt-28 -mt-20 flex justify-center items-center">
        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-2 gap-x-2 gap-y-2 lg:gap-x-6 md:gap-x-6 md:gap-y-6">
          <div class="flex justify-center flex-col items-center w-36 h-36 md:w-44 md:h-48 lg:w-56 lg:h-56 bg-white shadow rounded-2xl">
            <h2 class="lg:text-5xl md:text-4xl text-2xl font-extrabold leading-10 text-center text-gray-800">3000+</h2>
            <p class="mt-4 text-sm md:text-base lg:text-lg leading-none text-center text-gray-600">Happy Clients</p>
          </div>
          <div class="flex justify-center flex-col items-center w-36 h-36 md:w-44 md:h-48 lg:w-56 lg:h-56 bg-white shadow rounded-2xl">
            <h2 class="lg:text-5xl md:text-4xl text-2xl font-extrabold leading-10 text-center text-gray-800">5</h2>
            <p class="mt-4 text-sm md:text-base lg:text-lg leading-none text-center text-gray-600">Therapists
            </p>
          </div>
          <div class="flex justify-center flex-col items-center w-36 h-36 md:w-44 md:h-48 lg:w-56 lg:h-56 bg-white shadow rounded-2xl">
            <h2 class="lg:text-5xl md:text-4xl text-2xl font-extrabold leading-10 text-center text-gray-800">405</h2>
            <p class="mt-4 text-sm md:text-base lg:text-lg leading-none text-center text-gray-600">Procedures
            </p>
          </div>
          <div class="flex justify-center flex-col items-center w-36 h-36 md:w-44 md:h-48 lg:w-56 lg:h-56 bg-white shadow rounded-2xl">
            <h2 class="lg:text-5xl md:text-4xl text-2xl font-extrabold leading-10 text-center text-gray-800">21000+</h2>
            <p class="mt-4 text-sm md:text-base lg:text-lg leading-none text-center text-gray-600">Treatments</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!------------------------Treatments section---------------------------->
  <section>
        <div class="bg-white lg:grid mt-1 lg:p-10 p-4 text-center text-gray-800 lg:grid-cols-3">
            <div class="col-start-1 lg:rounded-md mx-4 bg-white shadow-lg p-10 row-start-1">
                <img class="m-auto bg-gray-100 p-2 rounded-lg" src="./images/relaxat.jpg" alt="relaxation treatment">
                <h1 class="text-xl font-semibold p-2">Facial Relaxation</h1>
                <h1 class="text-xl font-semibold p-2">Mk60,000</h1>
                <p class="p-2">Appetizing facial:
                    Cleansing. Skin Analysis. Steam.Exfoliation using a mechanical or chemical exfoliant. Facial massage..</p>
            </div>
            <div class="col-start-2 lg:rounded-md mx-4 bg-white shadow-lg p-10 row-start-1">
                <img class="m-auto bg-gray-100 p-2 rounded-lg" src="./images/nailcare.jpg" alt="pedicure image">
                <h1 class="text-xl font-semibold p-2">Pedicure & Manicure</h1>
                <h1 class="text-xl font-semibold p-2">Mk50,000</h1>
                <p class="p-2">Our Elim manicure & Pedicure consists of filing and shaping the free edge of nails, pushing and clipping treatments with Elim Manicure products, massage of the hand, and the application of fingernail polish</p>

            </div>
            <div class="col-start-3 lg:rounded-md mx-4 bg-white shadow-lg p-10 row-start-1">
                <img class="m-auto  bg-gray-100 p-2 rounded-lg" src="./images//full bodymassage.jpg" alt="massage image">
                <h1 class="text-xl font-semibold  p-2">Full Body Massage</h1>
                <h1 class="text-xl font-semibold p-2">Mk70,000</h1>
                <p class="p-2">Swedish massage is designed to relax the entire body by rubbing the muscles in long, gliding strokes in the direction of blood returning to the heart.</p>
            </div>
        </div>
    </section>

  <!--------------pricing section-------------------->
  <section>

    <div role="contentinfo" class="pt-16">
      <div class="w-full py-12">
        <div class="container mx-auto">
          <div class="w-4/5 mx-auto mb-12">
            <h1 tabindex="0" class="focus:outline-none xl:text-4xl text-3xl text-center text-gray-800 mb-4 font-extrabold">Our Membership Pricing</h1>
            <p tabindex="0" class="focus:outline-none text-xl text-center text-gray-600  font-normal">Focus on your business goals and we take care of the rest. From ready-made components to perfect templates to highly customizable design. All you need to do is choose your plan according to your next project.</p>
          </div>
          <div class="w-11/12 mx-auto">
            <div tabindex="0" class="focus:outline-none xl:flex lg:flex items-end">

              <div class="xl:flex lg:flex md:flex sm:flex shadow">
                <div tabindex="0" class="focus:outline-none bg-white pt-8 pb-8 lg:mb-0 xl:mb-0 md:mb-0 sm:mb-0 mb-2 pl-6 pr-6 flex flex-col xl:w-1/3 lg:w-1/3 justify-center items-center border-r border-l border-gray-200">
                  <div class="mb-6">
                    <img tabindex="0" class="focus:outline-none" role="img" aria-label="message logo" src="https://cdn.tuk.dev/assets/paper-plane.png" alt="message logo" />
                  </div>
                  <p tabindex="0" class="focus:outline-none text-center text-2xl font-bold text-gray-800  mb-3">Experience paradise</p>
                  <p tabindex="0" class="focus:outline-none text-center text-sm text-gray-600  mb-6 font-normal w-full">Enjoy pure luxury and experience the joy of being pampered and then return to everyday life.</p>
                  <form action="membership.php" method="post">
                    <input type="hidden" name="membership_type" value="Experience paradise">
                    <input type="hidden" name="price" value="10000">
                    <button type="submit" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none bg-white transition duration-150 ease-in-out hover:bg-gray-200 rounded border border-indigo-600 text-indigo-600 px-6 py-2 text-sm">Subscribe</button>
                  </form>
                </div>
                <div tabindex="0" class="focus:outline-none bg-white  pt-8 pb-8 lg:mb-0 xl:mb-0 md:mb-0 sm:mb-0 mb-2 pl-6 pr-6 flex flex-col xl:w-1/3 lg:w-1/3 justify-center items-center border-r border-l border-gray-200">
                  <div class="mb-5">
                    <img tabindex="0" class="focus:outline-none" role="img" aria-label="airplane logo" src="https://cdn.tuk.dev/assets/plane.png" alt="airplane" />
                  </div>
                  <p tabindex="0" class="focus:outline-none text-center text-2xl font-bold text-gray-800  mb-3">Eden on Earth</p>
                  <p tabindex="0" class="focus:outline-none text-center text-sm text-gray-600 mb-6 font-normal w-full">Enjoy a massage treatment like no other that feels like a test of Eden on earth.</p>
                  <form action="membership.php" method="post">
                    <input type="hidden" name="membership_type" value="Eden on Earth">
                    <input type="hidden" name="price" value="15000">
                    <button type="submit" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-6 py-2 text-sm border">Subscribe</button>
                  </form>
                </div>
                <div tabindex="0" class="focus:outline-none bg-white  pt-8 pb-8 lg:mb-0 xl:mb-0 md:mb-0 sm:mb-0 mb-2 pl-6 pr-6 flex flex-col xl:w-1/3 lg:w-1/3 justify-center items-center border-r border-l border-gray-200">
                  <div class="mb-6">
                    <img tabindex="0" class="focus:outline-none" role="img" aria-label="space rocket logo" src="https://cdn.tuk.dev/assets/start-button.png" alt="space rocket" />
                  </div>
                  <p tabindex="0" class="focus:outline-none text-center text-2xl font-bold text-gray-800  mb-3">Ultimate Temptation</p>
                  <p tabindex="0" class="focus:outline-none text-center text-sm text-gray-600 d mb-6 font-normal w-full">Be home away from home in a wonderful & relaxed atmosphere as you enjoy a 5 star experience.</p>
                  <form action="membership.php" method="post">
                    <input type="hidden" name="membership_type" value="Ultimate Temptation">
                    <input type="hidden" name="price" value="20000">
                    <button type="submit" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none bg-white  transition duration-150 ease-in-out hover:bg-gray-200 rounded border border-indigo-600 text-indigo-600 px-6 py-2 text-sm">Subscribe</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="shadow">
              <div>
                <div class="flex items-center w-full">
                  <p tabindex="0" class="focus:outline-none pl-4 pt-3 pb-3 font-bold text-sm text-gray-600 w-3/12">Pricing</p>
                  <p class="focus:outline-none w-3/12 text-sm text-center text-gray-800  font-bold lg:hidden">Experience paradise</p>
                  <p class="focus:outline-none w-3/12 text-sm text-center text-gray-800  font-bold lg:hidden">Eden on Earth</p>
                  <p class="focus:outline-none w-3/12 text-sm text-center text-gray-800  font-bold lg:hidden">Ultimate Temptation</p>
                </div>
                <table class="sm:table-fixed table-auto w-full bg-white">
                  <tbody tabindex="0" class="focus:outline-none" role="presentation">
                    <tr tabindex="0" class="focus:outline-none" role="row" aria-label="first row">
                      <td tabindex="0" role="rowheader " class="focus:outline-none w-3/12 border border-gray-200 p-2 sm:p-4 text-xs sm:text-sm text-gray-800 break-words">Membership Cost</td>
                      <td tabindex="0" role="cell" class="focus:outline-none w-3/12 border border-gray-200 p-2 sm:p-4 text-center text-xs sm:text-sm text-gray-800">$100 per month</td>
                      <td tabindex="0" role="cell" class="focus:outline-none w-3/12 border border-gray-200 p-2 sm:p-4 text-center text-xs sm:text-sm text-gray-800">$150 per month</td>
                      <td tabindex="0" role="cell" class="focus:outline-none w-3/12 border border-gray-200 p-2 sm:p-4 text-center text-xs sm:text-sm text-gray-800">$200 per month</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div>
                <p tabindex="0" class="focus:outline-none pl-4 pt-3 pb-3 font-bold text-sm text-gray-600">Features</p>
                <table class="sm:table-fixed table-auto w-full bg-white">
                  <tbody tabindex="0" class="focus:outline-none" role="presentation">
                    <tr tabindex="0" class="focus:outline-none" role="row" aria-label="first row">
                      <td tabindex="0" role="rowheader " class="focus:outline-none w-3/12 border border-gray-200 p-2 sm:p-4 text-xs sm:text-sm text-gray-800  break-words">Shower</td>
                      <td tabindex="0" role="cell " aria-label="checked" class="focus:outline-none w-3/12 border border-gray-200 p-2 sm:p-4 text-center text-xs sm:text-sm text-gray-800 ">
                        <div class="h-2 w-2 rounded-full bg-indigo-700 mx-auto"></div>
                      </td>
                      <td tabindex="0" role="cell " aria-label="checked" class="focus:outline-none w-3/12 border border-gray-200 p-2 sm:p-4 text-center text-xs sm:text-sm text-gray-800">
                        <div class="h-2 w-2 rounded-full bg-indigo-700 mx-auto"></div>
                      </td>
                      <td tabindex="0" role="cell " aria-label="checked" class="focus:outline-none w-3/12 border border-gray-200 p-2 sm:p-4 text-center text-xs sm:text-sm text-gray-800">
                        <div class="h-2 w-2 rounded-full bg-indigo-700 mx-auto"></div>
                      </td>
                    </tr>
                    <tr>
                      <td tabindex="0" role="rowheader " class="focus:outline-none w-3/12 border border-gray-200 p-2 sm:p-4 text-xs sm:text-sm text-gray-800 break-words">Full Body Massage</td>
                      <td tabindex="0" role="cell " aria-label="checked" class="focus:outline-none w-3/12 border border-gray-200 p-2 sm:p-4 text-center text-xs sm:text-sm text-gray-800">
                        <div class="h-2 w-2 rounded-full bg-indigo-700 mx-auto"></div>
                      </td>
                      <td tabindex="0" role="cell " aria-label="checked" class="focus:outline-none w-3/12 border border-gray-200 p-2 sm:p-4 text-center text-xs sm:text-sm text-gray-800">
                        <div class="h-2 w-2 rounded-full bg-indigo-700 mx-auto"></div>
                      </td>
                      <td tabindex="0" role="cell " aria-label="checked" class="focus:outline-none w-3/12 border border-gray-200 p-2 sm:p-4 text-center text-xs sm:text-sm text-gray-800">
                        <div class="h-2 w-2 rounded-full bg-indigo-700 mx-auto"></div>
                      </td>
                    </tr>
                    <tr>
                      <td tabindex="0" role="rowheader " class="focus:outline-none w-3/12 border border-gray-200 p-2 sm:p-4 text-xs sm:text-sm text-gray-800 break-words">Appetizing Pedi+Manicure</td>
                      <td tabindex="0" role="cell " aria-label="checked" class="focus:outline-none w-3/12 border border-gray-200 p-2 sm:p-4 text-center text-xs sm:text-sm text-gray-800 ">

                      </td>
                      <td tabindex="0" role="cell " aria-label="checked" class="focus:outline-none w-3/12 border border-gray-200 p-2 sm:p-4 text-center text-xs sm:text-sm text-gray-800">
                        <div class="h-2 w-2 rounded-full bg-indigo-700 mx-auto"></div>
                      </td>
                      <td tabindex="0" role="cell " aria-label="checked" class="focus:outline-none w-3/12 border border-gray-200 p-2 sm:p-4 text-center text-xs sm:text-sm text-gray-800 ">
                        <div class="h-2 w-2 rounded-full bg-indigo-700 mx-auto"></div>
                      </td>
                    </tr>
                    <tr>
                      <td tabindex="0" role="rowheader " class="focus:outline-none w-3/12 border border-gray-200 p-2 sm:p-4 text-xs sm:text-sm text-gray-800 break-words">Reflexology Pedi+Manicure</td>
                      <td tabindex="0" role="cell " class="focus:outline-none w-3/12 border border-gray-200 p-2 sm:p-4 text-center text-xs sm:text-sm text-gray-800 dark:text-white"></td>
                      <td tabindex="0" role="cell " aria-label="checked" class="focus:outline-none w-3/12 border border-gray-200 p-2 sm:p-4 text-center text-xs sm:text-sm text-gray-800">
                      </td>
                      <td tabindex="0" role="cell " aria-label="checked" class="focus:outline-none w-3/12 border border-gray-200 p-2 sm:p-4 text-center text-xs sm:text-sm text-gray-800 ">
                        <div class="h-2 w-2 rounded-full bg-indigo-700 mx-auto"></div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!---Team section-->
  <section data-aos="fade-up" class="cards bg-white mx-4 text-gray-700 rounded-xl md:p-10">
        <h1 class="text-center text-gray-500 lg:text-2xl text-xl font-black p-4 ">Our Team</h1>
        <div class="lg:flex lg:flex-row card justify-center bg-white">

            <div class="lg:w-3/12 lg:p-10 p-5 pb-0">
                <img src="https://www.belleafriquemw.com/wp-content/uploads/2020/09/Linda-1.jpg" class=" m-auto h-56 w-56 rounded-2xl" alt="agents">
                <h1 class="text-xl font-bold text-center px-4 pt-1">Linda kaponda</h1>
                <p class="font-normal text-center p-4">Receptionist</p>
            </div>
            <div class="lg:w-3/12 lg:p-10 p-5 pb-0">
                <img src="https://www.belleafriquemw.com/wp-content/uploads/2020/09/LeeDm.jpg" class=" h-56 w-56 m-auto rounded-2xl shadow-md" alt="agents">
                <h1 class="text-xl font-bold text-center px-4 pt-2">Lee Chisale</h1>
                <p class="font-normal text-center p-4">Managing Director</p>
            </div>
            <div class="lg:w-3/12 lg:p-10 p-5 pb-0">
                <img src="https://www.belleafriquemw.com/wp-content/uploads/2020/09/verocia-therapist.jpg" class="object-cover m-auto h-56 w-56 rounded-2xl shadow-md" alt="agents">
                <h1 class="text-xl text-center font-bold px-4 pt-2">Luna Libilly</h1>
                <p class="font-normal text-center p-4">Massage Therapist</p>
            </div>
            <div class="lg:w-3/12 lg:p-10 p-5 pb-0">
                <img src="https://www.belleafriquemw.com/wp-content/uploads/2020/09/Irene.jpg" class="h-56 w-56 object-cover m-auto rounded-2xl shadow-md" alt="agents">
                <h1 class="text-xl text-center font-bold px-4 pt-2">Irene Mangulenje</h1>
                <p class="font-normal text-center p-4">Massage Therapist</p>
            </div>

        </div>
    </section>


  <footer>
    <div class="bg-linear-pink-invert py-12 px-4">
      <div tabindex="0" aria-label="footer" class="focus:outline-none mx-auto text-gray-700 container flex flex-col items-center justify-center">
        <div class="text-black flex flex-col md:items-center f-f-l pt-3">
          <h1 tabindex="0" class="focus:outline-none text-2xl font-black">Body. Soul. Mind.</h1>
          <div class="md:flex items-center mt-5 md:mt-10 text-base text-color f-f-l">
            <h2 class=" md:mr-6 pb-4 md:py-0 cursor-pointer"><a class="focus:outline-none focus:underline hover:text-gray-700" href="javascript:void(0)">Gift Cards</a>
            </h2>
            <h2 class="cursor-pointer"><a class="focus:outline-none focus:underline hover:text-gray-700" href="javascript:void(0)">Community</a> </h2>
          </div>
          <div class="my-6 text-base text-color f-f-l">
            <ul class="md:flex items-center">
              <li class="md:mr-6 cursor-pointer pt-4 lg:py-0"><a href="javascript:void(0)" class="focus:outline-none  focus:underline hover:text-gray-500">Products </a></li>
              <li class="md:mr-6 cursor-pointer pt-4 lg:py-0"><a href="javascript:void(0)" class="focus:outline-none   focus:underline hover:text-gray-500">Appointment</a></li>
              <li class="md:mr-6 cursor-pointer pt-4 lg:py-0"><a href="javascript:void(0)" class="focus:outline-none  focus:underline hover:text-gray-500">Membership</a></li>
              <li class="md:mr-6 cursor-pointer pt-4 lg:py-0"><a href="javascript:void(0)" class="focus:outline-none   focus:underline hover:text-gray-500">About </a></li>
              <li class="md:mr-6 cursor-pointer pt-4 lg:py-0"><a href="javascript:void(0)" class="focus:outline-none focus:underline hover:text-gray-500">Help </a></li>
              <li class="cursor-pointer pt-4 lg:py-0"><a href="javascript:void(0)" class="focus:outline-none focus:underline hover:text-gray-500">Privacy Policy </a>
              </li>
            </ul>
          </div>
          <div class="text-sm text-color mb-10 f-f-l">
            <p tabindex="0" class=" focus:outline-none">© 2022 BelleAfrique. All rights reserved</p>
          </div>
        </div>
        <div class="w-9/12 h-0.5 bg-gray-100 dark:bg-gray-700 rounded-full"></div>
        <div class="flex justify-between items-center pt-12">
          <a href="javascript:void(0)" class="hover:shadow-lg mr-4 focus:outline-none rounded-md focus:ring-2 focus:ring-offset-2 focus:ring-gray-600" aria-label="download on the app store">
            <div class="">
              <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_center_aligned_with_logo-svg2.svg" alt="download on the app store">
            </div>
          </a>
          <button class="hover:shadow-lg focus:outline-none rounded-md focus:ring-2 focus:ring-offset-2 focus:ring-gray-600" aria-label="get it on google play"></a>
            <div>
              <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_center_aligned_with_logo-svg3.svg" alt="get it on google play">
            </div>
          </button>
        </div>
      </div>
    </div>


  </footer>
</body>

</html>