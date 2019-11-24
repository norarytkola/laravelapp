
<title>Welcome to my app</title>
    @include('partials/header')
    <body>
        <div class="container-fluid">

        @if(isset($heading))
            <div class="row justify-content-center pt-5 mb-5">
                <div class="alert alert-success">
                    {{ $heading }}
                </div>
            </div>
        @endif

        @if($errors->any())
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
             @endif

            <div class="row justify-content-center pt-5 mb-5">
                <h1 class="text-primary mb-5 font-weight-bold">Hello World</h1>
            </div>
            <div class="row justify-content-between ml-5 mr-5 pl-5 pr-5 mb-5">
                <div class="col-6">
                    <h3 class="mb-4">Lorem</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                     Nunc ac mi nulla. Nulla quis molestie nisi. Aliquam fermentum felis sed ante ultrices, 
                     quis maximus risus auctor. Suspendisse tincidunt eros libero, bibendum sodales ante elementum id. Nam tristique a nisl ac tristique. In velit eros, dapibus vitae velit eu, sodales aliquet enim. Donec et elementum ante. Nunc blandit sem urna, in euismod elit gravida et. Nullam ornare ac nulla non fermentum. 
                    </p>
                </div>
                <div class="col-6 pt-4"> 
                    <ul class="list-group">
                        <li class="list-group-item active font-weight-bold">Ipsum</li>
                        <li class="list-group-item">Lorem ipsum</li>
                        <li class="list-group-item">Nunc ac mi nulla</li>
                        <li class="list-group-item">Donec et elementum ante</li>
                    </ul>
                </div>
            </div>
            <div class="row ml-5 pl-5 pt-4">
                <div class="col">
                    <a class="btn btn-primary btn-lg pl-5 pr-5" href="{{ route('post') }}">Ota Yhteyttä</a>
                </div>
            </div>

    
        </div>
    </body>
</html>
