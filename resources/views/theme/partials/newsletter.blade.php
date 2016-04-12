<div class="section third-section">
    <div class="container newsletter">
        <div class="sub-section">
            <div class="title clearfix">
                <div class="pull-left">
                    <h3>Kabar Berita</h3>
                </div>
            </div>
        </div>
        <div id="success-subscribe" class="alert alert-success invisible">
            <strong>Well done!</strong>You successfully subscribet to our newsletter.
        </div>
        <div class="row-fluid">
            <div class="span5">
                @if (count($words) == 0)
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                @else
                    <p>{{ $words[0]['newsletter_words'] }}</p>
                @endif
            </div>
            <div class="span7">
                {!! Form::open(['route' => 'newsletter', 'class' => 'inline-form']) !!}
                    <input type="email" name="email" id="nlmail" class="span8" placeholder="Enter your email" required />
                    <button type="submit" class="button button-sp">Dapatkan</button>
                {!! Form::close() !!}
                <div id="err-subscribe" class="error centered">Please provide valid email address.</div>
            </div>
        </div>
    </div>
</div>