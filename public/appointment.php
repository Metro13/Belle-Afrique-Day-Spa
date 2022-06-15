<?php
session_start();
require 'classes/config.php';
require 'client.php';

$client = new client();

try {
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $appointment_date = $_POST['ap-date'];
    $gender = $_POST['gender'];
    $service_type = $_POST['service'];
    $message = $_POST['message'];

    if (!empty($fullname) && !empty($email) && !empty($contact) && !empty($appointment_date) && !empty($gender) && !empty($service_type) && !empty($message)) {

      # code...
        $new_Appointment = $client->bookAppointment($fullname, $email, $contact, $appointment_date, $gender, $service_type, $message);
        if ($new_Appointment) {
          # code...
          $_SESSION['booking-success'] = "Your Appointment has been Booked! We will contact you the scheduled time shortly";
        } else {
          $_SESSION['booking-failed'] = "Sorry Failed to book appointment, Check your details or try later";
        }
      } 
  }
} catch (\PDOException $th) {
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
  <script src="../dist/main.js"></script>
  <title>Appointment</title>
</head>

<body>

  <!------Navigation bar---->
  <header class="sticky bg-gray-50 top-0 flex-1 w-full">
    <!----Navigation-->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <div class="-bg-gray-50 p-4">
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

  <section>
    <div class="bg-gradient-to-b from-purple-600 to-indigo-700 h-40 w-full">
    </div>
    <form action="" method="post">
      <div class="w-full flex items-center justify-center my-12">
        <div class=" -top-40 bg-white  shadow rounded py-12 lg:px-28 px-8">
        <div class="bg-gray-100 text-center">
              <p class="text-green-700 p-2 font-semibold tracking-tight">
                <?php
                  if(!empty($_SESSION['booking-success']) || !empty($_SESSION['booking-failed'])){
                    echo $_SESSION['booking-success'];
                    echo $_SESSION['booking-failed'];
                    session_destroy();
                  }
                 ?>
              </p>
            </div>
          <p class="md:text-3xl text-xl font-bold leading-7 text-center text-gray-700 ">Book your appointments!</p>
          <div class="md:flex items-center mt-12">
            <div class="md:w-72 flex flex-col">
              <label class="text-base font-semibold leading-none text-gray-800 ">Name</label>
              <input tabindex="0" arial-label="Please input name" id="name" required name="name" type="text" class="text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-indigo-700 mt-4 bg-gray-100 border rounded border-gray-200 placeholder-gray-400" placeholder="Enter full  name" />
            </div>
            <div class="md:w-72 flex flex-col md:ml-6 md:mt-0 mt-4">
              <label class="text-base font-semibold leading-none text-gray-800 ">Email Address</label>
              <input tabindex="0" arial-label="Please input email address" id="email" required name="email" type="email" class="text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-indigo-700 mt-4 bg-gray-100 border rounded border-gray-200 placeholder-gray-400" placeholder="Enter email address" />
            </div>
          </div>
          <div class="md:flex items-center mt-12">
            <div class="md:w-72 flex flex-col">
              <label class="text-base font-semibold leading-none text-gray-800">Contact number</label>
              <input tabindex="0" arial-label="Please input contact number" id="contact" required name="contact" type="text" class="text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-indigo-700 mt-4 bg-gray-100 border rounded border-gray-200 placeholder-gray-400" placeholder="Enter contact number" />
            </div>
            <div class="md:w-72 flex flex-col md:ml-6 md:mt-0 mt-4">
              <label class="text-base font-semibold leading-none text-gray-800">Apointment date</label>
              <input tabindex="0" arial-label="Please input Appointment date" id="ap-date" required name="ap-date" type="date" class="text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-indigo-700 mt-4 bg-gray-100 border rounded border-gray-200 placeholder-gray-400" placeholder="Enter Appointment date" />
            </div>
          </div>
          <div class="md:flex items-center mt-8">
            <div class="md:w-72 flex flex-col">
              <label class="text-base font-semibold leading-none text-gray-800">Gender</label>
              <select id="gender" required name="gender" class="text-base leading-none text-gray-900 p-3  focus:oultine-none focus:border-indigo-700 mt-4 bg-gray-100 border rounded border-gray-200 placeholder-gray-400" name="gender" id="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
            <div class="md:w-72 flex flex-col md:ml-6 md:mt-0 mt-4">
              <label class="text-base font-semibold leading-none text-gray-800">Select service</label>
              <select id="service" required name="service" class="text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-indigo-700 mt-4 bg-gray-100 border rounded border-gray-200 placeholder-gray-400" name="gender" id="gender">
                <option value="">Select..</option>
                <option value="Skin-care">Skin care</option>
                <option value="Manicure-pedicure">Manicure + perdicure</option>
                <option value="Therapy-massage">Therapy Massage</option>
                <option value="Hair-treatment">Hair Treatment</option>
                <option value="Waxing">Waxing</option>
              </select>
            </div>
          </div>
          <div>
            <div class="w-full flex flex-col mt-8">
              <label class="text-base font-semibold leading-none text-gray-800 ">Message</label>
              <textarea tabindex="0" aria-label="leave a message" id="message" name="message" role="textbox" type="name" class="h-36 text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-indigo-700 mt-4 bg-gray-100 border rounded border-gray-200 placeholder-gray-400 resize-none"></textarea>
            </div>
          </div>
          <p class="text-xs leading-3 text-gray-700 mt-4">By clicking submit you agree to our terms of service, privacy policy and how we use data as stated</p>
          <div class="flex items-center justify-center w-full">
            <button type="submit" class="mt-9 text-base font-semibold leading-none text-white py-4 px-10 bg-indigo-700 rounded hover:bg-indigo-600 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none">Book appointment</button>
          </div>
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

</html>