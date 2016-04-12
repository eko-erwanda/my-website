<div class="section primary-section" id="about">
    <div class="triangle"></div>
    <div class="container">
        <div class="title">
            <h1>Siapa Kami?</h1>
            @if (count($words) == 0)
                <p>Duis mollis placerat quam, eget laoreet tellus tempor eu. Quisque dapibus in purus in dignissim.</p>
            @else
                <p>{{ $words[0]['about_words_1'] }}</p>
            @endif
        </div>
        <div class="row-fluid team">
            @forelse ($team as $data)
                <div class="span4" id="first-person">
                    <div class="thumbnail">
                        <img src="/images/{!! $data->image !!}" width="400px" height="400px" alt="team {{ $data->id }}">
                        <h3>{{ $data->name }}</h3>
                        <ul class="social">
                            <li><a href=""><span class="icon-facebook-circled"></span></a></li>
                            <li><a href=""><span class="icon-twitter-circled"></span></a></li>
                            <li><a href=""><span class="icon-linkedin-circled"></span></a></li>
                        </ul>
                        <div class="mask">
                            <h2>{{ $data->position }}</h2>
                            <p>{{ $data->caption }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="span4" id="first-person">
                    <div class="thumbnail">
                        <img src="images/Team1.png" alt="team 1">
                        <h3>John Doe</h3>
                        <ul class="social">
                            <li><a href=""><span class="icon-facebook-circled"></span></a></li>
                            <li><a href=""><span class="icon-twitter-circled"></span></a></li>
                            <li><a href=""><span class="icon-linkedin-circled"></span></a></li>
                        </ul>
                        <div class="mask">
                            <h2>Copywriter</h2>
                            <p>When you stop expecting people to be perfect, you can like them for who they are.</p>
                        </div>
                    </div>
                </div>
                <div class="span4" id="second-person">
                    <div class="thumbnail">
                        <img src="images/Team2.png" alt="team 1">
                        <h3>John Doe</h3>
                        <ul class="social">
                            <li><a href=""><span class="icon-facebook-circled"></span></a></li>
                            <li><a href=""><span class="icon-twitter-circled"></span></a></li>
                            <li><a href=""><span class="icon-linkedin-circled"></span></a></li>
                        </ul>
                        <div class="mask">
                            <h2>Designer</h2>
                            <p>When you stop expecting people to be perfect, you can like them for who they are.</p>
                        </div>
                    </div>
                </div>
                <div class="span4" id="third-person">
                    <div class="thumbnail">
                        <img src="images/Team3.png" alt="team 1">
                        <h3>John Doe</h3>
                        <ul class="social">
                            <li><a href=""><span class="icon-facebook-circled"></span></a></li>
                            <li><a href=""><span class="icon-twitter-circled"></span></a></li>
                            <li><a href=""><span class="icon-linkedin-circled"></span></a></li>
                        </ul>
                        <div class="mask">
                            <h2>Photographer</h2>
                            <p>When you stop expecting people to be perfect, you can like them for who they are.</p>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
        <div class="about-text centered">
            <h3>Info Tentang Kami</h3>
            @if (count($words) == 0)
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
            @else
                <p>{{ $words[0]['about_words_2'] }}</p>
            @endif
        </div>
        <h3>Kemampuan</h3>
        @include('theme.partials.skillset')
    </div>
</div>