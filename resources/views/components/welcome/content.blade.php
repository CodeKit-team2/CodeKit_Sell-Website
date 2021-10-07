<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

body{
  font-family: 'Poppins', sans-serif;
  font-weight:400;
}

.card__grid {
  display: grid;
grid-template-columns: 280px;
  place-content:center;
gap:2em;
}

.card--1 {
  align-self: start;
}
.card--2 {
   align-self: start;
}
.card--3 {
  align-self: start;
}
.card--4 {
    align-self: end;
}

@media screen and (min-width:1280px){
.card__grid {
  display: grid;
grid-template-columns: repeat(auto-fit,minmax(3.75em,1fr)); 
  grid-template-rows: 7.375em 12em 7.375em; 
    column-gap:2em;
  row-gap:2.1em;
}

}
</style>

<header class="min-h-screen  py-10 px-5 xl:py-0 xl:px-0">
    <div class="min-h-screen xl:grid place-items-center place-content-center xl:grid-cols-2 xl:max-w-screen-xl mx-auto w-11/12 xl:max-w-screen-2xl gap-14">
      <div class="max-w-xl mx-auto xl:max-w-2xl xl:-mt-8">
        <h1 class="text-3xl xl:text-5xl font-semibold xl:leading-snug text-gray-900 2xl:text-6xl 2xl:leading-snug">Get Amazing <span class="text-purple-500">Fashion</span> for you</h1>
        <p class="xl:leading-9 text-base xl:text-lg mt-3 mb-10">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis bibendum, lectus ut viverra rhoncus, dolor nunc faucibus libero.</p>
  
        <button class="bg-purple-500 text-white rounded-lg py-3.5 px-5 tracking-wider text-sm hover:bg-purple-800 shadow-lg inline-block"><a href="{{url('/shop')}}">Shop now</a></button>
        <button class="capitalize tracking-wider inline-block ml-5 lg:ml-7">learn more</button>
        <div class="flex items-center max-w-sm justify-between mt-16 mx-auto text-center lg:text-left lg:mx-0">
          <div>
            <span class="text-3xl font-semibold text-gray-900">60K+</span>
            <p class="capitalize mt-2">Fashion collection</p>
          </div>
          <div class="w-0.5 h-12 bg-gray-900"></div>
          <div>
            <span class="text-3xl font-semibold text-gray-900">200+</span>
            <p class="capitalize mt-2">different category</p>
          </div>
        </div>
  
      </div>
      <div class="card__grid mt-14 xl:mt-0 sm:justify-items-center">
  
        <div class="card--1 max-w-xs bg-white shadow-xl rounded-3xl pt-4 pb-8 px-5 lg:row-start-1 lg:row-end-3">
          <div class="w-full h-40 lg:h-48 xl:h-56">
            <img class="w-full h-full object-cover rounded-2xl" src="{{ URL::to('/assets/img/eminem.jpg') }}" alt="The GOAT">
          </div>
  
          <div>
            <h2 class="capitalize font-semibold text-lg mt-3 mb-2 text-gray-900 ">Eminem</h2>
            <p class="text-gray-400 text-sm flex justify-between items-center italic">Excellent <span class="flex items-center"><svg class="w-5 h-5 mr-1 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>5.0</span></p>
          </div>
  
        </div>
        <div class="card--2 w-full max-w-xs flex items-center bg-white shadow-xl rounded-3xl w-80 p-5 lg:row-start-1 lg:row-end-2">
          <div class="w-20 h-20">
            <img src="https://images.pexels.com/photos/573299/pexels-photo-573299.jpeg?auto=compress&cs=tinysrgb&crop=faces&fit=crop&h=200&w=200" alt="Elise Doe" class="rounded-2xl object-cover w-full h-full">
          </div>
          <div class="ml-4">
            <h2 class="text-lg text-gray-900 font-semibold capitalize">elise doe</h2>
            <p class="text-gray-400 mt-1 mb-2 text-sm italic">Good</p>
            <ul class="flex">
              <li>
                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
              </li>
              <li><svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg></li>
              <li><svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg></li>
              <li><svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg></li>
              <li><svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg></li>
            </ul>
          </div>
        </div>
  
        <div class="card--3 max-w-xs bg-white shadow-xl rounded-3xl pt-4 pb-8 px-5 lg:row-start-2 lg:row-end-5">
          <div class="w-full h-40 lg:h-48 xl:h-56">
            <img class="w-full h-full object-cover rounded-2xl" src="{{ URL::to('/assets/img/quang.jpg') }}" alt="Quang no">
          </div>
  
          <div>
            <h2 class="capitalize font-semibold text-lg mt-3 mb-2 text-gray-900">Anh Quảng</h2>
            <p class="text-gray-400 flex justify-between items-center text-sm">Thật không thể tin nổi sản phẩm ở đây<span class="flex items-center"><svg class="w-5 h-5 mr-1 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>5.0</span></p>
          </div>
  
        </div>
        <div class="card--4 lg:row-start-3 lg:row-end-4 max-w-xs flex items-center bg-white shadow-xl rounded-3xl w-80 p-5 w-full">
          <div class="w-20 h-20">
            <img src="{{ URL::to('/assets/img/lisa.jpg') }}" alt="Lisa" class="rounded-2xl object-cover w-full h-full">
          </div>
          <div class="ml-4">
            <h2 class="text-lg text-gray-900 font-semibold capitalize">Lisa</h2>
            <p class="text-gray-400 mt-1 mb-2 text-sm italic">Very good</p>
            <ul class="flex">
              <li>
                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
              </li>
              <li><svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg></li>
              <li><svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg></li>
              <li><svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg></li>
              <li><svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  
  </header>
