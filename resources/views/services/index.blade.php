      @extends('layout')
      @section('content')

      <!----------------------------- this is home ------------------------>
      <section class="w-full h-[30vh] p-12 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-gray-200 via-gray-400 to-gray-600">
        <h1 class="text-6xl text-gray-900 tracking-wider font-extrabold text-center mt-4 py-12 animate-bounce">Hire-Me</h1>
        {{-- <p class="text-2xl text-center w-1/2 ml-[24%]">une plateforme d'emploi permettant aux utilisateurs de proposer leurs services tels que plomberie, peinture, jardinage, etc. </p>
        <div class="text-center mt-10 lg:hidden">
          <button class="w-[100px] bg-slate-800 text-gray-50 border border-white rounded-md hover:bg-slate-100 hover:text-gray-800 py-1 ease-in delay-300">login</button>
          <button class="w-[100px] bg-sky-800 text-gray-50 border border-white rounded-md hover:bg-slate-100 hover:text-gray-800 py-1 ease-in delay-300">register</button>
        </div> --}}
      </section>
      
                            <!--------- home categs ----->
        <section class="w-full">
            <div class="w-full flex justify-around">
                <h3 class="text-4xl text-gray-500 font-bold mt-10">Services with highest demand</h3>
                <button id="addbtn" class=" py-1 px-2 bg-slate-500 rounded-lg text-slate-50 self-end">Add a Service</button>
            </div>
            <div id="addform" class="w-11/12 ml-[4%] mt-8">
                <form action="/create-service" method="POST" class="w-full">
                  @csrf
                  @method('post')
                    <div class="flex gap-4 w-full flex-wrap">
                      <input type="text" name="provider" placeholder="Enter your name" class="bg-slate-800 rounded-lg py-1 px-2 text-slate-50 w-[28%]">
                      <input type="email" name="email" placeholder="Enter your Email" class="bg-slate-800 rounded-lg py-1 px-2 text-slate-50 w-[28%]">
                      <input type="text" name="phone" placeholder="Enter your phone number" class="bg-slate-800 rounded-lg py-1 px-2 text-slate-50 w-[28%]">
                    </div>
                    <div class="flex gap-4 w-full flex-wrap mt-4">
                      <select type="text" name="category"  class="bg-slate-800 rounded-lg py-1 px-2 text-slate-50 w-[40%]">
                        <option value="" selected disabled>Category</option>
                        @foreach ($categories as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                      </select>
                      <input type="text" name="price" placeholder="0000.00$" class="bg-slate-800 rounded-lg py-1 px-2 text-slate-50 w-[10%]">
                      <input type="text" name="title" placeholder="Title" class="bg-slate-800 rounded-lg py-1 px-2 min-w-[200px] w-[40%] text-slate-50">
                    </div>
                    <div class="w-full">
                      <textarea name="description" placeholder="Description..." class="w-full bg-slate-800 rounded-lg py-1 px-2 mt-4 text-slate-50"></textarea>
                    </div>
                    <button class="py-1 px-6 bg-green-300 border-green-600 border-2 text-green-600 rounded-lg w-[20%]">Submit</button>
                </form>
            </div>
          
            <div class="w-4/5 ml-[9%] flex justify-around flex-wrap mt-6 p-8">
              @foreach ($services as $service)
              <a href="" class="min-w-52 max-w-60 p-2 bg-slate-400 rounded-lg my-4">
                <h4 class="text-center text-xl text-gray-800 font-semibold">{{$service->title}}</h4>
                <div class="mt-4">
                  <p class="text-gray-50 text-center">{{$service->description}}.</p>
                </div>
              </a>
              @endforeach
            </div>
        </section>

      @endsection 


