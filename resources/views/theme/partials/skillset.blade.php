<div class="row-fluid">
    <div class="span6">
        <ul class="skills">
            @forelse ($skill as $data)
                <li>
                    <span class="bar" data-width="{{ $data->progress }}"></span>
                    <h3>{{ $data->title }}</h3>
                </li>
            @empty    
                <li>
                    <span class="bar" data-width="80%"></span>
                    <h3>Graphic Design</h3>
                </li>
                <li>
                    <span class="bar" data-width="95%"></span>
                    <h3>Html & Css</h3>
                </li>
                <li>
                    <span class="bar" data-width="68%"></span>
                    <h3>jQuery</h3>
                </li>
                <li>
                    <span class="bar" data-width="70%"></span>
                    <h3>Wordpress</h3>
                </li>
            @endforelse
        </ul>
    </div>
    @forelse ($recrutment as $data)
        <div class="span6">
            <div class="highlighted-box center">
                <h1>{{ $data->title }}</h1>
                <p>{{ $data->description }}...</p>
                <a href="#contact"><button class="button button-sp">Join Us</button></a>
            </div>
        </div>
    @empty
        <div class="span6 invisible">
            <div class="highlighted-box center">
                <h1>We're Hiring</h1>
                <p>sorry... there is no recrutment available</p>
                <a href="#contact"><button class="button button-sp">Join Us</button></a>
            </div>
        </div>
    @endforelse
</div>
            
