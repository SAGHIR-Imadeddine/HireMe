<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100">
    <nav class="bg-slate-500">
        <div class="container mx-auto py-4 flex justify-between items-center">
          <a href="#" class="text-2xl font-bold text-gray-50 hover:text-3xl ease-in-out delay-300">HireMe</a>
          <div class="flex space-x-10">
            <a href="#" class="flex items-center space-x-2 hover:border-b-2 hover:border-white">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                </svg>
              </span>
              <span class="text-gray-50">Home</span>
            </a>
            <a href="#" class="flex items-center space-x-2 hover:border-b-2 hover:border-white">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
              </span>
              <span class="text-gray-50">Categories</span>
            </a>
            <a href="#" class="flex items-center space-x-2 hover:border-b-2 hover:border-white">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
              </span>
              <span class="text-gray-50">Services</span>
            </a>
          </div>
          <div class="lg:flex hidden items-center space-x-2  py-1 px-2 ">
            <button class="w-[100px] bg-slate-800 text-gray-50 border border-white rounded-md hover:bg-slate-100 hover:text-gray-800 py-1 ease-in delay-300">login</button>
            <button class="w-[100px] bg-sky-800 text-gray-50 border border-white rounded-md hover:bg-slate-100 hover:text-gray-800 py-1 ease-in delay-300">register</button>
          </div>
        </div>
      </nav>

      <!----------------------------- this is home ------------------------>
      <section class="w-full h-[90vh] p-12 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-gray-200 via-gray-400 to-gray-600">
        <h1 class="text-6xl text-gray-900 tracking-wider font-extrabold text-center mt-4 py-12 animate-bounce">Hire-Me</h1>
        <p class="text-2xl text-center w-1/2 ml-[24%]">une plateforme d'emploi permettant aux utilisateurs de proposer leurs services tels que plomberie, peinture, jardinage, etc. </p>
        <div class="text-center mt-10 lg:hidden">
          <button class="w-[100px] bg-slate-800 text-gray-50 border border-white rounded-md hover:bg-slate-100 hover:text-gray-800 py-1 ease-in delay-300">login</button>
          <button class="w-[100px] bg-sky-800 text-gray-50 border border-white rounded-md hover:bg-slate-100 hover:text-gray-800 py-1 ease-in delay-300">register</button>
        </div>
      </section>
      
                            <!--------- home categs ----->
        <section>
          <h3 class="text-4xl text-center text-gray-500 font-bold mt-10">Latest Categories</h3>
          <div class="w-4/5 ml-[9%] flex justify-around flex-wrap mt-6 p-8">
            <a href="" class="min-w-52 max-w-60 p-2 bg-slate-400 rounded-lg my-4">
              <!-- <img src="./plumber-fixing-a-pipe.jpg" alt="plumber" class="rounded-md"> -->
              <h3 class="text-xl text-center text-gray-800">plumbing</h3>
              <div class="mt-4">
                <p class="text-gray-50 text-center">installing and maintaining systems used for potable (drinking) water, hot-water production, sewage and drainage in plumbing systems.</p>
              </div>
            </a>
          </div>
        </section>

        <section class="">
          
        </section>



        <footer class="bg-white ">
          <div class="max-w-screen-xl px-4 pt-6 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
              <nav class="flex flex-wrap justify-center -mx-5 -my-2">
                  
                  <div class="px-5 py-2">
                      <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                          Categories
                      </a>
                  </div>
                  <div class="px-5 py-2">
                      <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                          Services
                      </a>
                  </div>
                  <div class="px-5 py-2">
                      <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                          Best sellers
                      </a>
                  </div>
                  <div class="px-5 py-2">
                      <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                          Contact
                      </a>
                  </div>
                  <div class="px-5 py-2">
                      <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                          Terms
                      </a>
                  </div>
              </nav>

              <p class=" text-base leading-6 text-center text-gray-400">
                  © HireMe, Inc. All rights reserved.
              </p>
          </div>
      </footer>

</body>
</html>