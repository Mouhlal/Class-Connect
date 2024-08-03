<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Class Connect</title>
  @vite('resources/css/app.css')
  <link rel="shortcut icon" href="{{asset('storage/images/log.png')}}" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

    @include('layouts.header')

  <div class="max-w-screen-xl mt-24 px-8 xl:px-16 mx-auto" id="about">
    <!-- Main Content -->
    <div class="grid grid-flow-row sm:grid-flow-col grid-rows-2 md:grid-rows-1 sm:grid-cols-2 gap-8 py-6 sm:py-16">
      <div class="flex flex-col justify-center items-start row-start-2 sm:row-start-1">
        <h1 class="text-3xl lg:text-4xl xl:text-5xl font-medium text-black-600 leading-normal">
          Want anything to be easy with <strong>LaslesVPN</strong>.
        </h1>
        <p class="text-black-500 mt-4 mb-6">
          Provide a network for all your needs with ease and fun using LaslesVPN discover interesting features from us.
        </p>
        <button class="bg-blue-500 text-white px-4 py-2 rounded">Get Started</button>
      </div>
      <div class="flex w-full">
        <img src="/assets/Illustration1.png" alt="VPN Illustrasi" class="h-full w-full object-contain">
      </div>
    </div>

    <!-- Stats Section -->
    <div class="relative w-full flex">
      <div class="rounded-lg w-full grid grid-flow-row sm:grid-flow-row grid-cols-1 sm:grid-cols-3 py-9 divide-y-2 sm:divide-y-0 sm:divide-x-2 divide-gray-100 bg-white-500 z-10">
        <!-- User Stats -->
        <div class="flex items-center justify-start sm:justify-center py-4 sm:py-6 w-8/12 px-4 sm:w-auto mx-auto sm:mx-0">
          <div class="flex mx-auto w-40 sm:w-auto">
            <div class="flex items-center justify-center bg-orange-100 w-12 h-12 mr-6 rounded-full">
              <img src="/assets/Icon/heroicons_sm-user.svg" class="h-6 w-6" alt="User Icon">
            </div>
            <div class="flex flex-col">
              <p class="text-xl text-black-600 font-bold">390+</p>
              <p class="text-lg text-black-500">Users</p>
            </div>
          </div>
        </div>
        <!-- Location Stats -->
        <div class="flex items-center justify-start sm:justify-center py-4 sm:py-6 w-8/12 px-4 sm:w-auto mx-auto sm:mx-0">
          <div class="flex mx-auto w-40 sm:w-auto">
            <div class="flex items-center justify-center bg-orange-100 w-12 h-12 mr-6 rounded-full">
              <img src="/assets/Icon/gridicons_location.svg" class="h-6 w-6" alt="Location Icon">
            </div>
            <div class="flex flex-col">
              <p class="text-xl text-black-600 font-bold">20+</p>
              <p class="text-lg text-black-500">Locations</p>
            </div>
          </div>
        </div>
        <!-- Server Stats -->
        <div class="flex items-center justify-start sm:justify-center py-4 sm:py-6 w-8/12 px-4 sm:w-auto mx-auto sm:mx-0">
          <div class="flex mx-auto w-40 sm:w-auto">
            <div class="flex items-center justify-center bg-orange-100 w-12 h-12 mr-6 rounded-full">
              <img src="/assets/Icon/bx_bxs-server.svg" class="h-6 w-6" alt="Server Icon">
            </div>
            <div class="flex flex-col">
              <p class="text-xl text-black-600 font-bold">50+</p>
              <p class="text-lg text-black-500">Servers</p>
            </div>
          </div>
        </div>
      </div>
      <div class="absolute bg-black-600 opacity-5 w-11/12 rounded-lg h-64 sm:h-48 top-0 mt-8 mx-auto left-0 right-0" style="filter: blur(114px);"></div>
    </div>
  </div>

  @include('layouts.footer')

</body>
</html>

