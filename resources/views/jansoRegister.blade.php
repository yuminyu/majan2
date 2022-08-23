<x-app-layout>
<section class="text-gray-600 body-font relative">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">管理者による雀荘登録フォーム</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">オススメの雀荘を登録しよう</p>
    </div>
    <form  action="{{ url('jansotoroku') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="lg:w-1/2 md:w-2/3 mx-auto">
            <div class="flex flex-wrap -m-2">   
                <div class="p-2 w-full">
                <div class="relative">
                    <label for="name" class="leading-7 text-sm text-gray-600">雀荘の名前</label>
                    <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                </div>
                <div class="p-2 w-full">
                <div class="relative">
                    <label for="tokutyo" class="leading-7 text-sm text-gray-600">雀荘の特徴</label>
                    <textarea id="tokutyo" name="tokutyo" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
                </div>
                <div class="p-2 w-1/4">
                <div class="relative">
                    <label for="seiketsusa" class="leading-7 text-sm text-gray-600">清潔さ</label>
                    <input type="number" min="0" max="100" id="seiketsusa" name="seiketsusa" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                </div>
                <div class="p-2 w-1/4">
                <div class="relative">
                    <label for="huniki" class="leading-7 text-sm text-gray-600">雰囲気</label>
                    <input type="number" min="0" max="100" id="huniki" name="huniki" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                </div>
                <div class="p-2 w-1/4">
                <div class="relative">
                    <label for="yasusa" class="leading-7 text-sm text-gray-600">ゲーム代の安さ</label>
                    <input type="number" min="0" max="100" id="yasusa" name="yasusa" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                </div>
                <div class="p-2 w-1/4">
                <div class="relative">
                    <label for="mataikitai" class="leading-7 text-sm text-gray-600">また行きたい度</label>
                    <input type="number" min="0" max="100" id="mataikitai" name="mataikitai" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                </div>
                <div class="p-2 w-full">
                <div class="relative">
                    <label for="location" class="leading-7 text-sm text-gray-600">location</label>
                    <input type="text" id="location" name="location" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                </div>
                <div class="p-2 w-full">
                <div class="relative">
                    <label for="jansougazou" class="leading-7 text-sm text-gray-600">雀荘の画像</label>
                    <input type="file" id="jansougazou" name="jansougazou" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" accept='image/'  enctype="multipart/form-data" multiple="multiple" required autofocus>
                </div>
                </div>
                <div class="p-2 w-full">
                <button type = "submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">登録ボタン</button>
                </div>
            </div>
        </div>
    </form>
  </div>
</section>
</x-app-layout>

