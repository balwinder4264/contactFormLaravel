<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container mt-5">

    <form  method="post" onsubmit="sendApiRequest()">
    @csrf

    <div class="form-group">
        <label>first_name</label>
        <input type="text" class="form-control {{ $errors->has('first_name') ? 'error' : '' }}" name="first_name" id="first_name">

        <!-- Error -->
        @if ($errors->has('first_name'))
        <div class="error">
            {{ $errors->first('first_name') }}
        </div>
        @endif
    </div>
    <div class="form-group">
        <label>last_name</label>
        <input type="text" class="form-control {{ $errors->has('last_name') ? 'error' : '' }}" name="last_name" id="last_name">

        <!-- Error -->
        @if ($errors->has('last_name'))
        <div class="error">
            {{ $errors->first('last_name') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">

        @if ($errors->has('email'))
        <div class="error">
            {{ $errors->first('email') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label>Phone</label>
        <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone">

        @if ($errors->has('phone'))
        <div class="error">
            {{ $errors->first('phone') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label>Need</label>
        <input type="text" class="form-control {{ $errors->has('need') ? 'error' : '' }}" name="need" id="need">

        @if ($errors->has('need'))
        <div class="error">
            {{ $errors->first('need') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label>Message</label>
        <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message"
            rows="4"></textarea>

        @if ($errors->has('message'))
        <div class="error">
            {{ $errors->first('message') }}
        </div>
        @endif
    </div>

    <input type="submit" name="send" value="Submit"  class="btn btn-dark btn-block">
</form>
    </div>
</body>

</html>
<script>
function sendApiRequest (e){
    event.preventDefault();
    console.log("Hello this on eis working");
}
</script>