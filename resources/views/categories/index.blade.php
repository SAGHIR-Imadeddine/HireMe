      @extends('layout')
      @section('content')
      <!----------------------------- this is home ------------------------>
      <section class="w-full h-[30vh] p-12 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-gray-200 via-gray-400 to-gray-600">
        <h1 class="text-6xl text-gray-900 tracking-wider font-extrabold text-center mt-4 py-12 animate-bounce">Hire-Me</h1>
        <!-- <p class="text-2xl text-center w-1/2 ml-[24%]">une plateforme d'emploi permettant aux utilisateurs de proposer leurs services tels que plomberie, peinture, jardinage, etc. </p>
        <div class="text-center mt-10 lg:hidden">
          <button class="w-[100px] bg-slate-800 text-gray-50 border border-white rounded-md hover:bg-slate-100 hover:text-gray-800 py-1 ease-in delay-300">login</button>
          <button class="w-[100px] bg-sky-800 text-gray-50 border border-white rounded-md hover:bg-slate-100 hover:text-gray-800 py-1 ease-in delay-300">register</button>
        </div> -->
      </section>

                            <!--------- home categs ----->
        <section>
          <h3 class="text-4xl text-center text-gray-500 font-bold mt-10">Our Categories</h3>
          <div class="w-4/5 ml-[9%] flex justify-around flex-wrap mt-6 p-8">
            @foreach ($categories as $category)
            <a href="" class="min-w-52 max-w-60 p-2 bg-slate-400 rounded-lg my-4">
              <h4 class="text-center text-xl text-gray-800 font-semibold">{{$category->name}}</h4>
              <div class="mt-4">
                <p class="text-gray-50 text-center">{{$category->description}}.</p>
              </div>
            </a>
            @endforeach
          </div>
        </section>

        
        @endsection

 