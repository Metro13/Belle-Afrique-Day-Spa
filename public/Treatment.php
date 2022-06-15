<?php
    session_start();
    require 'client.php';
    require 'classes/config.php';

    try {
        //code...
        $client = new client();
  
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $email = $_POST['email'];
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $message = $_POST['message'];

        $data = [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'message'=> $message
        ];

        $inquiries = $client->addInquiry($data);

        if($inquiries){
            $_SESSION['inquiry-update'] = 'Your inquiry has been sent';
        }
        else{
            $_SESSION['inquiry-update'] = 'Failed to process try again later';
        }
   
    }
    } catch (PDOException $th) {
        //throw $th;
        echo $th->getMessage();
    }


 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/style.css">
    <title>Treatments</title>
</head>
<body>
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
    <!------------------------inquiry section---------------------------->
    <section>
        <div id="toggle" class="bg-white shadow-lg rounded-xl md:mx-52 py-8 font-sans ">
            <div class="text-center w-[200px] mx-auto bg-gray-100 p-2">
                <h1 class="font-medium tracking-tight text-lg"><?php echo $_SESSION['inquiry-update']; ?></h1>
            </div>
            <h2 class="mx-20 pt-16 pb-4 text-2xl text-center font-bold text-gray-700">send us your Inquiry...</h3>
                <form class="mb-0 space-y-6 md:mx-32 mx-10 text-gray-700" action="" method="POST">
                    <div>
                        <label class="block text-sm font-medium " for="firstname">
                            Firstname
                        </label>
                        <div class="mt-1">
                            <input placeholder="enter firstname" type="text" required name="fname" id="fname" class=" font-normal w-full border border-gray-300 px-3 py-3 rounded-lg shadow-sm focus:outline-none focus:border-indigo-600">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium " for="lastname">
                            Lastname
                        </label>
                        <div class="mt-1">
                            <input placeholder="enter lastname" class="w-full border border-gray-300 font-normal px-3 py-3 rounded-lg shadow-sm focus:outline-none focus:border-indigo-600" type="text" required name="lname" id="lname">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium " for="email Address">
                            Email Address
                        </label>
                        <div class="mt-1">
                            <input placeholder="enter email address" class="w-full border font-normal border-gray-300 px-3 py-3 rounded-lg shadow-sm focus:outline-none focus:border-indigo-600" type="email" autocomplete="email" required name="email" id="email">
                        </div>
                    </div>

                    <div>
                        <div>
                            <label class="block text-sm font-medium mt-4 " for="message">
                                Message
                            </label>
                            <div class="mt-1">
                                <textarea placeholder="enter your message here" class="w-full border font-normal border-gray-300 px-3 py-3 rounded-lg shadow-sm focus:outline-none focus:border-indigo-600" type="text" required name="message" id="message"></textarea>
                            </div>
                        </div>

                        <div class="py-6 grid grid-cols-2">
                            <div class="md:row-start-1 md:col-start-2 ">
                                <input type="submit" value="Submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white focus:outline-none 
                focus:border-indigo-600 focus:ring-500 focus:ring-indigo-600 bg-indigo-500 hover:bg-indigo-800">
                            </div>

                        </div>

                </form>
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
</body>

</html>