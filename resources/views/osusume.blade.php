<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<x-app-layout>
<section class="text-gray-600 body-font">
@if (count($jansos) > 0)
@foreach ($jansos as $janso)
<div class="container px-5 py-20 mx-auto">
    <div class="flex flex-wrap -m-4 mb-3">
        <div class="p-4 md:w-1/3">
            <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{ asset('uploads/'.$janso->jansougazou)}}" alt="blog">
                <div class="p-6">
                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{$janso->name}}</h1>
                    <p class="leading-relaxed mb-3 mt-5">{{$janso->tokutyo}}</p>
                </div>
            </div>
        </div>
        <div class="p-4 md:w-1/3">
            <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                <canvas id="{{ $janso->id }}" class="lg:h-48 md:h-36 w-full object-cover object-center"> </canvas>
            </div>
        </div>
        <div class="p-4 md:w-1/3">
            <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                <div class="p-6">
                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">雀荘の場所</h1>
                    <p class="leading-relaxed mb-3 mt-5">{{$janso->location}}</p>
                </div>
                <div class="p-6">
                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3 ">URL</h1>
                    <p class="text-blue-400"><a href="{{$janso->url}}">{{$janso->url}}</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
let labels_{{ $janso->id }} = [
    '清潔さ',
    '雰囲気',
    '安さ',
    'また行く',
    ];
    let data_{{$janso->id}}= {
    labels: labels_{{ $janso->id }},
    datasets: [{
        label: '雀荘評価',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132,0.5)',
        borderCapStyle:'butt',
        fill:false,
        data: [{{ $janso->seiketsusa }}, {{ $janso->huniki }},  {{ $janso->yasusa }},  {{ $janso->mataikitai }}],
    }]
    };
    let config_{{ $janso->id }}= {
    type: 'radar',
    data: data_{{ $janso->id }},
    options: {
        responsive: true,
        r: {
            //グラフの最小値・最大値
            min: 0,
            max: 10,
        },
        scale: {
            ticks: {
                min: 0,
                max: 10,
                stepSize: 2, // ← 一番目の間隔を0.5ほどにしたい。他は１のままで
                display: false                              
            },
        },
    },
    };
    let myChart_{{$janso->id }} = new Chart(
        document.getElementById('{{ $janso->id }}'),
        config_{{ $janso->id }}
    );
</script>

@endforeach
@endif

<a href="dashboard" class="text-indigo-500 inline-flex items-center mt-3">TOPに戻る
    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
    </svg>
</a>

</section>
</x-app-layout>











