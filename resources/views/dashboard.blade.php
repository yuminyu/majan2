<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-5 mx-auto">
                        <div class="flex flex-col">
                        <div class="h-1 bg-gray-200 rounded overflow-hidden">
                            <div class="w-24 h-full bg-indigo-500"></div>
                        </div>
                        <div class="flex flex-wrap sm:flex-row flex-col py-3 mb-8">
                            <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">麻雀アテンダント</h1>
                            <p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0">アテンダントに雀荘へ連れて行ってもらおう！管理人オススメの雀荘だから安心！<br>ああああああああああああああ</p>
                        </div>
                        </div>
                        <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                        <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                            <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="content" class="object-cover object-center h-full w-full" src="{{asset("images/logo.png")}}">
                            </div>
                            <h2 class="text-xl font-medium title-font text-gray-900 mt-5">管理人オススメの雀荘</h2>
                            <p class="text-base leading-relaxed mt-2">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
                            <a href="osusume" class="text-indigo-500 inline-flex items-center mt-3">見てみる
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                            </a>
                        </div>
                        <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                            <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="content" class="object-cover object-center h-full w-full" src="{{asset("images/logo.png")}}">
                            </div>
                            <h2 class="text-xl font-medium title-font text-gray-900 mt-5">アテンド可能なイベント一覧</h2>
                            <p class="text-base leading-relaxed mt-2">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
                            <a href="{{route('events.index')}}" :active="request()->routels('events.index')" class="text-indigo-500 inline-flex items-center mt-3">見てみる
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                            </a>
                        </div>
                        @can('attendant-higher')
                        <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                            <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="content" class="object-cover object-center h-full w-full" src="{{asset("images/logo.png")}}">
                            </div>
                            <h2 class="text-xl font-medium title-font text-gray-900 mt-5">アテンドイベントを登録する</h2>
                            <p class="text-base leading-relaxed mt-2">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
                            <a href="{{route('events.create')}}" class="text-indigo-500 inline-flex items-center mt-3">登録フォームにGO
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                            </a>
                        </div>
                        @endcan
                        @can('user-only')
                        <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                            <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="content" class="object-cover object-center h-full w-full" src="{{asset("images/logo.png")}}">
                            </div>
                            <h2 class="text-xl font-medium title-font text-gray-900 mt-5">アテンドになる</h2>
                            <p class="text-base leading-relaxed mt-2">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
                            <a class="text-indigo-500 inline-flex items-center mt-3">なってみる！
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                            </a>
                        </div>
                        @endcan
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
