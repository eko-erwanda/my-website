<div id="price" class="section secondary-section">
    <div class="container">
        <div class="title">
            <h1>Paket</h1>
            @if (count($words) == 0)
                <p>Duis mollis placerat quam, eget laoreet tellus tempor eu. Quisque dapibus in purus in dignissim.</p>
            @else
                <p>{{ $words[0]['paket_words_1'] }}</p>
            @endif
        </div>
        <div class="price-table row-fluid">
            @forelse ($paket as $data)
                <div class="span4 price-column">
                    <h3>{{ $data->title }}</h3>
                    <ul class="list">
                        <li class="price invisible">$19,99</li>
                        @include('theme.partials.function-paket')
                    </ul>
                    <a href="#contact" class="button button-ps">Rincian Harga</a>
                </div>
            @empty
                <h3 class="text-center">
                    <b>__________________</b></br>
                    <b>| Tidak ada paket |</b></br>
                    <b>|_________________|</b></br>
                </h3>
            @endforelse
        </div>
        <div class="centered">
            @if (count($words) == 0)
                <p class="price-text">We Offer Custom Plans. Contact Us For More Info.</p>
            @else
                <p class="price-text">{{ $words[0]['paket_words_2'] }}</p>
            @endif
            <a href="#contact" class="button">Hubungi Kami</a>
        </div>
    </div>
</div>