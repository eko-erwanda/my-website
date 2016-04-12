
<div class="section primary-section" id="service">
    <div class="container">
        <!-- Start title section -->
        <div class="title">
            <h1>Apa Yang Kami Kerjakan?</h1>
            <!-- Section's title goes here -->
            @if (count($words) == 0)
                <p>Duis mollis placerat quam, eget laoreet tellus tempor eu. Quisque dapibus in purus in dignissim.</p>
            @else
                <p>{{ $words[0]['service_words'] }}</p>
            @endif
            <!--Simple description for section goes here. -->
        </div>
        <div class="row-fluid">
            @forelse ($service as $data)
                <div class="span4">
                    <div class="centered service">
                        <div class="circle-border zoom-in">
                            <img class="img-circle" src="/images/{!! $data->image !!}" alt="service 1">
                        </div>
                        <h3>{{ $data->title }}</h3>
                        <p>{{ $data->description }}</p>
                    </div>
                </div>
            @empty
                <div class="span4">
                    <div class="centered service">
                        <div class="circle-border zoom-in">
                            <img class="img-circle" src="images/Service1.png" alt="service 1">
                        </div>
                        <h3>Modern Design</h3>
                        <p>We Create Modern And Clean Theme For Your Business Company.</p>
                    </div>
                </div>
                <div class="span4">
                    <div class="centered service">
                        <div class="circle-border zoom-in">
                            <img class="img-circle" src="images/Service2.png" alt="service 2" />
                        </div>
                        <h3>Powerfull Theme</h3>
                        <p>We Create Modern And Powerful Theme With Lots Animation And Features</p>
                    </div>
                </div>
                <div class="span4">
                    <div class="centered service">
                        <div class="circle-border zoom-in">
                            <img class="img-circle" src="images/Service3.png" alt="service 3">
                        </div>
                        <h3>Clean Code</h3>
                        <p>We Create Modern And Powerful Html5 And CSS3 Code Easy For Read And Customize.</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</div>