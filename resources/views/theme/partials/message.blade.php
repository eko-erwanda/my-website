<div class="container">
    <div class="row-fluid">
        <div class="span5 contact-form centered">
            <h3>Say Hello</h3>
            @if (!isset($message))
            <div id="successSend" class="alert alert-success invisible">
                <strong>Well done!</strong>Your message has been sent.</div>
            @else
            <div id="successSend" class="alert alert-success {{ $message }}">
                <strong>Well done!</strong>Your message has been sent.</div>
            @endif
            <div id="errorSend" class="alert alert-error invisible">There was an error.</div>
            {!! Form::open(['route' => 'message', 'id' => 'contact-form']) !!}
                <div class="control-group">
                    <div class="controls">
                        {!! Form::text('name', null, ['id' => 'name', 'class' => 'span12', 'placeholder' => '* Your name...']) !!}
                        <div class="error left-align" id="err-name">Please enter name.</div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        {!! Form::email('email', null, ['id' => 'email', 'class' => 'span12', 'placeholder' => '* Your email...']) !!}
                        <div class="error left-align" id="err-email">Please enter valid email adress.</div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        {!! Form::textarea('comment', null, ['id' => 'comment', 'class' => 'span12', 'placeholder' => '* Comments...']) !!}
                        <div class="error left-align" id="err-comment">Please enter your comment.</div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="message-btn">Send message</button>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>