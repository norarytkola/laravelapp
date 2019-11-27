<title>Contact</title>
 
 @include('partials/header')
 
    <div class="row justify-content-center pt-5 mb-5">
        <h2>Ota yhteyttä</h2>
    </div>

    <div class="row justify-content-center mb-4">
        <div class="col-8">
            <p>Viestit ja etunimi julkaistaan <a href="{{route('posts')}}">Viestit</a>-osiossa. Sukunimesi ja 
            sähköpostiosoitteesi eivät päädy muiden vierailioiden käsiin.</p>
        </div>
    </div>

    <div class="row justify-content-center">
     
        <div class="col-8">

        {!! Form::open(array(route('post'), 'method'=>'post')) !!}
            <div class="form-group">
                <label>
                    Etunimi
                </label>
                {{ Form::text('firstname', null, ["class"=>"form-control"] ) }}
            <div class="form-group">
                <label>
                    Sukunimi
                </label>
                {{ Form::text('lastname', null, ["class"=>"form-control"] ) }}
            </div>

            <div class="form-group">
                <label>
                    Sähköpostiosoite
                </label>
                {{ Form::text('email', null, ["class"=>"form-control"] ) }}
                <label>
                    Viesti
                </label>
                {{ Form::textarea('message', null, ["class"=>"form-control", "rows"=>"5"] ) }}
            </div>
            <div class="form-group">
                {{ Form::submit('Lähetä', ['class'=>'btn btn-primary']) }}
            </div>
        {!! Form::close() !!}
        </div>
    </div>