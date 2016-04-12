<div id="clients">
    <div class="section primary-section">
        <div class="triangle"></div>
        <div class="container">
            <div class="title">
                <h1>Apa Pendapat Klien Kami?</h1>
                @if (count($words) == 0)
                    <p>Duis mollis placerat quam, eget laoreet tellus tempor eu. Quisque dapibus in purus in dignissim.</p>
                @else
                    <p>{{ $words[0]['client_words_1'] }}</p>
                @endif
            </div>
            <div class="row">
            @if (count($client) > 0)
                @forelse ($client as $data)
                    <div class="span4">
                        <div class="testimonial">
                            <p>"{{ $data->description }}"</p>
                            <div class="whopic">
                                <div class="arrow"></div>
                                <img src="/images/{!! $data->client_img !!}" width="200px" height="200px" class="centered" alt="client {{ $data->id }}">
                                <strong>{{ $data->name }}
                                    <small>Client</small>
                                </strong>
                            </div>
                        </div>
                    </div>
                @empty
                <div class="span4">
                    <div class="testimonial">
                        <p>"I've worked too hard and too long to let anything stand in the way of my goals. I will not let my teammates down and I will not let myself down."</p>
                        <div class="whopic">
                            <div class="arrow"></div>
                            <img src="images/Client1.png" class="centered" alt="client 1">
                            <strong>John Doe
                                <small>Client</small>
                            </strong>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="testimonial">
                        <p>"In motivating people, you've got to engage their minds and their hearts. I motivate people, I hope, by example - and perhaps by excitement, by having productive ideas to make others feel involved."</p>
                        <div class="whopic">
                            <div class="arrow"></div>
                            <img src="images/Client2.png" class="centered" alt="client 2">
                            <strong>John Doe
                                <small>Client</small>
                            </strong>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="testimonial">
                        <p>"Determine never to be idle. No person will have occasion to complain of the want of time who never loses any. It is wonderful how much may be done if we are always doing."</p>
                        <div class="whopic">
                            <div class="arrow"></div>
                            <img src="images/Client3.png" class="centered" alt="client 3">
                            <strong>John Doe
                                <small>Client</small>
                            </strong>
                        </div>
                    </div>
                </div>
                @endforelse
            @endif
            </div>
            @if (count($words) == 0)
                <p class="testimonial-text">"Perfection is Achieved Not When There Is Nothing More to Add, But When There Is Nothing Left to Take Away"</p>
            @else
                <p class="testimonial-text">{{ $words[0]['client_words_2'] }}</p>
            @endif
        </div>
    </div>
</div>
<div class="section third-section">
    <div class="container centered">
        <div class="sub-section">
            <div class="title clearfix">
                <div class="pull-left">
                    <h3>Klien-Kami</h3>
                </div>
                <ul class="client-nav pull-right">
                    <li id="client-prev"></li>
                    <li id="client-next"></li>
                </ul>
            </div>
            <ul class="row client-slider" id="clint-slider">
            @if (count($client) >= 0)
                @forelse ($client as $data)
                    <li>
                        <a href="">
                            <img src="/images/{!! $data->company_img !!}" width="400px" height="200px" alt="client logo {!! $data->id !!}">
                        </a>
                    </li>
                @empty
                    <li>
                        <a href="">
                            <img src="images/clients/ClientLogo01.png" alt="client logo 1">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="images/clients/ClientLogo02.png" alt="client logo 2">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="images/clients/ClientLogo03.png" alt="client logo 3">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="images/clients/ClientLogo04.png" alt="client logo 4">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="images/clients/ClientLogo05.png" alt="client logo 5">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="images/clients/ClientLogo02.png" alt="client logo 6">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="images/clients/ClientLogo04.png" alt="client logo 7">
                        </a>
                    </li>
                @endforelse
            @endif
            </ul>
        </div>
    </div>
</div>