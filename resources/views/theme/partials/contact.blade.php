<div id="contact" class="contact">
    <div class="section secondary-section">
        <div class="container">
            <div class="title">
                <h1>Hubungi Kami</h1>
                @if (count($words) == 0)
                    <p>Duis mollis placerat quam, eget laoreet tellus tempor eu. Quisque dapibus in purus in dignissim.</p>
                @else
                    <p>{{ $words[0]['contact_words'] }}</p>
                @endif
            </div>
        </div>
        <div class="map-wrapper">
            <!-- @include('theme.partials.maps') -->
            <div class="map-canvas" id="map-canvas">Loading map...</div>
            @include('theme.partials.message')
        </div>
        <div class="container">
            <div class="span9 center contact-info">
                @if (count($contact) == 0)
                <p>123 Fifth Avenue, 12th,Belgrade,SRB 11000</p>
                <p class="info-mail">ourstudio@somemail.com</p>
                <p>+11 234 567 890</p>
                <p>+11 286 543 850</p>
                @else
                <p>{{ $contact[0]['addres'] }}</p>
                <p class="info-mail">{{ $contact[0]['email'] }}</p>
                <p>{{ $contact[0]['phone1'] }}</p>
                <p>{{ $contact[0]['phone2'] }}</p>
                <p>{{ $contact[0]['phone3'] }}</p>
                <p>{{ $contact[0]['phone4'] }}</p>
                @endif
                <div class="title">
                    <h3>Sosial Media</h3>
                </div>
            </div>
            <div class="row-fluid centered">
                <ul class="social">
                    @if (count($social) >= 0)
                        @forelse ($social as $data)
                            <li><a href="{{ $data->url }}" target="blank"><span class="social-icon fa {{ $data->icon }}"></span></a></li>
                        @empty 
                        <li><a href=""><span class="icon-facebook-circled"></span></a></li>
                        <li><a href=""><span class="icon-twitter-circled"></span></a></li>
                        <li><a href=""><span class="icon-linkedin-circled"></span></a></li>
                        <li><a href=""><span class="icon-pinterest-circled"></span></a></li>
                        <li><a href=""><span class="icon-dribbble-circled"></span></a></li>
                        <li><a href=""><span class="icon-gplus-circled"></span></a></li>
                        @endforelse
                    @endif
                </ul>
            </div>
            <div class="center">
                <!-- Histats.com  START  (standard)-->
                <script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
                <a href="http://www.histats.com" target="_blank" title="" ><script  type="text/javascript" >
                try {Histats.start(1,3359247,4,7,200,30,"00011111");
                Histats.track_hits();} catch(err){};
                </script></a>
                <noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?3359247&101" alt="" border="0"></a></noscript>
                <!-- Histats.com  END  -->
            </div>
        </div>
    </div>
</div>