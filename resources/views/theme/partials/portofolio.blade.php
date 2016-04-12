<div class="section secondary-section " id="portfolio">
    <div class="triangle"></div>
    <div class="container">
        <div class=" title">
            <h1>Sudah Pernah Melihat Hasil Kerja Kami?</h1>
            @if (count($words) == 0)
                <p>Duis mollis placerat quam, eget laoreet tellus tempor eu. Quisque dapibus in purus in dignissim.</p>
            @else
                <p>{{ $words[0]['portofolio_words'] }}</p>
            @endif
        </div>
        <ul class="nav nav-pills">
            @if (count($portofolio) == 0)
                <li class="filter" data-filter="all">
                    <a href="#noAction">All</a>
                </li>
                <li class="filter" data-filter="web">
                    <a href="#noAction">Web</a>
                </li>
                <li class="filter" data-filter="photo">
                    <a href="#noAction">Photo</a>
                </li>
                <li class="filter" data-filter="identity">
                    <a href="#noAction">Identity</a>
                </li>
            @else
                <li class="filter" data-filter="all">
                    <a href="#noAction">All</a>
                </li>
                <li class="filter" data-filter="web">
                    <a href="#noAction">Web</a>
                </li>
                <li class="filter" data-filter="logo">
                    <a href="#noAction">Logo</a>
                </li>
                <li class="filter" data-filter="brosur">
                    <a href="#noAction">Brosur</a>
                </li>
                <li class="filter" data-filter="packaging">
                    <a href="#noAction">Packaging</a>
                </li>
            @endif
        </ul>
        <!-- Start details for portfolio project 1 -->
        <div id="single-project">
            @forelse ($portofolio as $data)
                <div id="slidingDiv{{ $data->id }}" class="toggleDiv row-fluid single-project">
                    <div class="span6">
                        <img src="/images/{!! $data->image !!}" alt="project {{ $data->id }}" />
                    </div>
                    <div class="span6">
                        <div class="project-description">
                            <div class="project-title clearfix">
                                <h3>{{ $data->title }}</h3>
                                <span class="show_hide close">
                                    <i class="icon-cancel"></i>
                                </span>
                            </div>
                            <div class="project-info">
                                <div>
                                    <span>Client</span>{{ $data->client }}</div>
                                <div>
                                    <span>Date</span>{{ $data->date }}</div>
                                <div>
                                    <span>Skills</span>{{ $data->skills }}</div>
                                <div>
                                    <span>Link</span>{{ $data->link }}</div>
                            </div>
                            <p>{{ $data->description }}</p>
                        </div>
                    </div>
                </div>
            @empty
                @include('admin.portofolio.single')
            @endforelse
            <!-- End details for portfolio project 9 -->
            <ul id="portfolio-grid" class="thumbnails row">
                @forelse ($portofolio as $data)
                    <li class="span4 mix {{ $data->category }}">
                        <div class="thumbnail">
                            <img src="/images/{!! $data->image !!}" height="400px" width="640px" alt="project {{ $data->id }}">
                            <a href="#single-project" class="more show_hide" rel="#slidingDiv{{ $data->id }}">
                                <i class="icon-plus"></i>
                            </a>
                            <h3>{{ $data->label }}</h3>
                            <p>{{ $data->caption }}...</p>
                            <div class="mask"></div>
                        </div>
                    </li>
                @empty
                    @include('admin.portofolio.thumbnails')
                @endforelse
            </ul>
        </div>
    </div>
</div>