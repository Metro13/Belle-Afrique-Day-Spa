<?php
session_start();
require 'client.php';
require 'classes/config.php';

$client = new client();

try {
  // chacking session data
  $newProducts = $client->FetchAllProducts();
  //code...
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
  <title>Products</title>
</head>

<body>
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

  <section>
    <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
      <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Our products</h2>
      <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        <?php foreach ($newProducts as $product => $value) { ?>
          <div class="group ">
            <div class="w-full min-h-80 bg-gray-200 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
              <img src="./images/<?php echo $value->image; ?>" alt="product-image" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
            </div>
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="#">
                    <span aria-hidden="true" class=" font-medium inset-0"></span>
                    <?php echo $value->product_name; ?>
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500"><?php echo $value->description; ?></p>
              </div>
              <p class="text-sm font-medium text-gray-900">MK<?php echo $value->price; ?></p>

            </div>
            <div>
              <form action="checkout.php" method="post">
                <input type="hidden" name="product-id" value="<?php echo $value->product_id; ?>">
                <button type="submit" class="mt-10 w-full bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Buy</button>
              </form>
            </div>
          </div><?php } ?>
        <!-- More products... -->
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