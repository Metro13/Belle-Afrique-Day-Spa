<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://npmcdn.com/flickity@2/dist/flickity.pkgd.js"></script>
    <title>Help</title>
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


    <div class="bg-gray-100 ">
        <div class="container mx-auto">
            <div role="article" class="bg-gray-100 py-12 md:px-8">
                <div class="px-4 xl:px-0 py-10">
                    <div class="flex flex-col lg:flex-row flex-wrap">
                        <div class="mt-4 lg:mt-0 lg:w-3/5">
                            <div>
                                <h1 class="text-3xl ml-2 lg:ml-0 lg:text-4xl font-bold text-gray-900 tracking-normal lg:w-11/12">
                                    Frequently asked questions</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-6 xl:px-0">
                    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 pb-6 gap-8">
                        <div role="cell" class="bg-gray-100">
                            <div class="bg-white p-5 rounded-md  h-full w-full">
                                <!-- class="absolute inset-0 object-center object-cover h-full w-full"  -->
                                <span><img class="bg-gray-200 p-2 mb-5 rounded-full" src="https://i.ibb.co/27R6nk5/home-1.png" alt="home-1" /></span>
                                <h1 class="pb-4 text-2xl  font-semibold">Account Overview</h1>
                                <div class="my-5">
                                    <div class="flex items-center pb-4  cursor-pointer w-full space-x-3">
                                        <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-1-svg2.svg" alt="bullet">
                                        <h4 class="text-md text-gray-900 dark:text-gray-100">First time, what do I do
                                            next?</h4>
                                    </div>
                                    <div class="flex items-center pb-4 cursor-pointer w-full space-x-3">
                                        <div>
                                            <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-1-svg2.svg" alt="bullet">
                                        </div>
                                        <h4 class="text-md text-gray-900 ">Changing you profile
                                            picture and other information</h4>
                                    </div>
                                    <div class="flex items-center pb-4 cursor-pointer w-full">
                                        <div>
                                            <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-1-svg2.svg" alt="bullet">
                                        </div>
                                        <h4 class="text-md text-gray-900  pl-4">I didnt get a
                                            confirmation email, what should I do next</h4>
                                    </div>
                                    <div class="flex items-center pb-4 cursor-pointer w-full">
                                        <div>
                                            <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-1-svg2.svg" alt="bullet">
                                        </div>
                                        <h4 class="text-md text-gray-900  pl-4">What is the refund
                                            policy if I have to cancel during the month</h4>
                                    </div>
                                </div>
                                <a class="hover:text-indigo-500 hover:underline bottom-5 text-sm text-indigo-700 font-bold cursor-pointer flex items-center" href="javascript:void(0)">
                                    <p>Show All</p>
                                    <div>
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-1-svg3.svg" alt="arrow">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div role="cell" class="bg-gray-100 ">
                            <div class="bg-white p-5 rounded-md h-full w-full">
                                <!-- class="absolute inset-0 object-center object-cover h-full w-full"  -->
                                <span><img class="bg-gray-200 p-2 mb-5 rounded-full" src="https://i.ibb.co/bdGyLYk/pricetags-1.png" alt="pricetags-1" /></span>
                                <h1 class="pb-4 text-2xl font-semibold">Subscription Plans</h1>
                                <div class="my-5">
                                    <div class="flex items-center pb-4  cursor-pointer w-full">
                                        <div>
                                            <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-1-svg2.svg" alt="bullet">
                                        </div>
                                        <h4 class="text-md text-gray-900  pl-4">First time, what do I
                                            do next?</h4>
                                    </div>
                                    <div class="flex items-center pb-4  cursor-pointer w-full">
                                        <div>
                                            <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-1-svg2.svg" alt="bullet">
                                        </div>
                                        <h4 class="text-md text-gray-900  pl-4">Changing you profile
                                            picture and other information</h4>
                                    </div>
                                    <div class="flex items-center pb-4 dark:border-gray-700 cursor-pointer w-full">
                                        <div>
                                            <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-1-svg2.svg" alt="bullet">
                                        </div>
                                        <h4 class="text-md text-gray-900 pl-4">I didnt get a
                                            confirmation email, what should I do next</h4>
                                    </div>
                                    <div class="flex items-center pb-4  cursor-pointer w-full">
                                        <div>
                                            <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-1-svg2.svg" alt="bullet">
                                        </div>
                                        <h4 class="text-md text-gray-900  pl-4">What is the refund
                                            policy if I have to cancel during the month</h4>
                                    </div>
                                    <div class="flex items-center pb-4  cursor-pointer w-full">
                                        <div>
                                            <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-1-svg2.svg" alt="bullet">
                                        </div>
                                        <h4 class="text-md text-gray-900  pl-4">What is the refund
                                            policy?</h4>
                                    </div>
                                </div>
                                <a class="hover:text-indigo-500 hover:underline bottom-5 text-sm text-indigo-700  font-bold cursor-pointer flex items-center" href="javascript:void(0)">
                                    <p>Show All</p>
                                    <div>
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-1-svg3.svg" alt="arrow">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div role="cell" class="bg-gray-100 ">
                            <div class="bg-white p-5  rounded-md h-full w-full">
                                <!-- class="absolute inset-0 object-center object-cover h-full w-full"  -->
                                <span><img class="bg-gray-200 p-2 mb-5 rounded-full" src="https://i.ibb.co/GT4KHvJ/card-1.png" alt="home-1" /></span>
                                <h1 class="pb-4 text-2xl  font-semibold">Payment Options</h1>
                                <div class="my-5">
                                    <div class="flex items-center pb-4 cursor-pointer w-full">
                                        <div>
                                            <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-1-svg2.svg" alt="bullet">
                                        </div>
                                        <h4 class="text-md text-gray-900  pl-4">First time, what do I
                                            do next?</h4>
                                    </div>
                                    <div class="flex items-center pb-4 cursor-pointer w-full">
                                        <div>
                                            <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-1-svg2.svg" alt="bullet">
                                        </div>
                                        <h4 class="text-md text-gray-900 pl-4">Changing you profile
                                            picture and other information</h4>
                                    </div>
                                    <div class="flex items-center pb-4 cursor-pointer w-full">
                                        <div>
                                            <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-1-svg2.svg" alt="bullet">
                                        </div>
                                        <h4 class="text-md text-gray-900 pl-4">I didnt get a
                                            confirmation email, what should I do next</h4>
                                    </div>
                                    <div class="flex items-center pb-4 cursor-pointer w-full">
                                        <div>
                                            <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-1-svg2.svg" alt="bullet">
                                        </div>
                                        <h4 class="text-md text-gray-900 pl-4">What is the refund
                                            policy if I have to cancel during the month</h4>
                                    </div>
                                </div>
                                <a class="hover:text-indigo-500 hover:underline bottom-5 text-sm text-indigo-700 font-bold cursor-pointer flex items-center" href="javascript:void(0)">
                                    <p>Show All</p>
                                    <div>
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-1-svg3.svg" alt="arrow">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div role="cell" class="bg-gray-100 d ">
                            <div class="bg-white p-5 roun  ded-md h-full w-full">
                                <!-- class="absolute inset-0 object-center object-cover h-full w-full"  -->
                                <span><img class="bg-gray-200 p-2 mb-5 rounded-full" src="https://i.ibb.co/rG4r6NJ/notifications-1.png" alt="home-1" /></span>
                                <h1 class="pb-4 text-2xl  font-semibold">Notification Settings</h1>
                                <div class="my-5">
                                    <div class="flex items-center pb-4 cursor-pointer w-full">
                                        <div>
                                            <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-1-svg2.svg" alt="bullet">
                                        </div>
                                        <h4 class="text-md text-gray-900 pl-4">First time, what do I
                                            do next?</h4>
                                    </div>
                                    <div class="flex items-center pb-4 cursor-pointer w-full">
                                        <div>
                                            <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-1-svg2.svg" alt="bullet">
                                        </div>
                                        <h4 class="text-md text-gray-900 pl-4">Changing you profile
                                            picture and other information</h4>
                                    </div>
                                    <div class="flex items-center pb-4 cursor-pointer w-full">
                                        <div>
                                            <img class="d" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-1-svg2.svg" alt="bullet">
                                        </div>
                                        <h4 class="text-md text-gray-900  pl-4">I didnt get a
                                            confirmation email, what should I do next</h4>
                                    </div>
                                    <div class="flex items-center pb-4 cursor-pointer w-full">
                                        <div>
                                            <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-1-svg2.svg" alt="bullet">
                                        </div>
                                        <h4 class="text-md text-gray-900 pl-4">What is the refund
                                            policy if I have to cancel during the month</h4>
                                    </div>
                                </div>
                                <a class="hover:text-indigo-500 hover:underline bottom-5 text-sm text-indigo-700 font-bold cursor-pointer flex items-center" href="javascript:void(0)">
                                    <p>Show All</p>
                                    <div>
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-1-svg3.svg" alt="arrow">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div role="cell" class="bg-gray-100  ">
                            <div class="bg-white  p-5 rounded-md h-full w-full">
                                <!-- class="absolute inset-0 object-center object-cover h-full w-full"  -->
                                <span><img class="bg-gray-200 p-2 mb-5 rounded-full" src="https://i.ibb.co/HFC1hqn/people-1.png" alt="home-1" /></span>
                                <h1 class="pb-4 text-2xl font-semibold">Profile Preferences</h1>
                                <div class="my-5">
                                    <div class="flex items-center pb-4 cursor-pointer w-full">
                                        <div>
                                            <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-1-svg2.svg" alt="bullet">
                                        </div>
                                        <h4 class="text-md text-gray-900 0 pl-4">First time, what do I
                                            do next?</h4>
                                    </div>
                                    <div class="flex items-center pb-4 cursor-pointer w-full">
                                        <div>
                                            <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-1-svg2.svg" alt="bullet">
                                        </div>
                                        <h4 class="text-md text-gray-900  pl-4">Changing you profile
                                            picture and other information</h4>
                                    </div>
                                    <div class="flex items-center pb-4 cursor-pointer w-full">
                                        <div>
                                            <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-1-svg2.svg" alt="bullet">
                                        </div>
                                        <h4 class="text-md text-gray-900 d pl-4">I didnt get a
                                            confirmation email, what should I do next</h4>
                                    </div>
                                </div>
                                <a class="hover:text-indigo-500 hover:underline bottom-5 text-sm text-indigo-700  font-bold cursor-pointer flex items-center" href="javascript:void(0)">
                                    <p>Show All</p>
                                    <div>
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-1-svg3.svg" alt="arrow">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div role="cell" class="bg-gray-100  ">
                            <div class=" bg-white p-5 rounded-md h-full w-full">
                                <!-- class="absolute inset-0 object-center object-cover h-full w-full"  -->
                                <span><img class="bg-gray-200 p-2 mb-5 rounded-full" src="https://i.ibb.co/QX80fYm/lock-closed-1.png" alt="home-1" /></span>
                                <h1 class="pb-4 text-2xl  font-semibold">Privacy and Cookies</h1>
                                <div class="my-5">
                                    <div class="flex items-center pb-4 cursor-pointer w-full">
                                        <div>
                                            <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-1-svg2.svg" alt="bullet">
                                        </div>
                                        <h4 class="text-md text-gray-900 pl-4">First time, what do I
                                            do next?</h4>
                                    </div>
                                    <div class="flex items-center pb-4 d cursor-pointer w-full">
                                        <div>
                                            <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-1-svg2.svg" alt="bullet">
                                        </div>
                                        <h4 class="text-md text-gray-900  pl-4">Changing you profile
                                            picture and other information</h4>
                                    </div>
                                    <div class="flex items-center pb-4 cursor-pointer w-full">
                                        <div>
                                            <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-1-svg2.svg" alt="bullet">
                                        </div>
                                        <h4 class="text-md text-gray-900  pl-4">I didnt get a
                                            confirmation email, what should I do next</h4>
                                    </div>
                                    <div class="flex items-center pb-4 cursor-pointer w-full">
                                        <div>
                                            <img class="" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-1-svg2.svg" alt="bullet">
                                        </div>
                                        <h4 class="text-md text-gray-900  pl-4">What is the refund
                                            policy if I have to cancel during the month</h4>
                                    </div>
                                </div>
                                <a class="hover:text-indigo-500 hover:underline bottom-5 text-sm text-indigo-700  font-bold cursor-pointer flex items-center" href="javascript:void(0)">
                                    <p>Show All</p>
                                    <div>
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-1-svg3.svg" alt="arrow">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
                            <li class="md:mr-6 cursor-pointer pt-4 lg:py-0"><a href="javascript:void(0)" class="focus:outline-none   focus:underline hover:text-gray-500">Appointment</a>
                            </li>
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