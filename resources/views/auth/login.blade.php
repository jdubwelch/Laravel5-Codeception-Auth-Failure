<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    {!! Form::open(['class' => 'form-login']) !!}
        
        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'required','autofocus']) !!}
        
        {!! Form::password('password',['class' => 'form-control', 'placeholder' => 'Password'], 'required') !!}
        
        <label class="form-remember" for="remember">
            {!! Form::checkbox('remember', 'y', ['class' => 'checkbox']) !!}
            Remember Me
        </label>
        
        <div class="control-group">
            {!! Form::submit('Log In', ['class' => 'btn btn-lg btn-primary btn-block']) !!}
        </div>

    {!! Form::close() !!}

</body>
</html>