<title>Vastaa viestiin</title>
 
 @include('partials/header')

    <div class="row justify-content-center pt-5 mb-5">
        <h2>Vastaa viestiin</h2>
    </div>

    <div class="row justify-content-center">
        <div class="card col-3 p-0">
            <div class="card-header">
                {{ $message->firstname }}
            </div>
            <div class="card-body">
                {{ $message->message }}
            </div>
            <div class="card-footer">
                {{ $message->created_at }}
            </div>  
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="card col-3 p-0">
            {!! Form::open(array('route'=>['post.answer',$message->id],'method'=>'POST')) !!}
                {{Form::textarea('answer', null, ['class'=>'form-control','rows'=>'5', 'placeholder'=>'Kirjoita tähän vastauksesi..'])}}
                {{Form::text('nickname', null,['class'=>"form-control", 'placeholder'=>'nimimerkki'])}}
                {{ Form::submit('Lähetä vastaus', ['class'=>'btn btn-primary']) }}
            {!! Form::close() !!}
        </div>
    </div>
  
</div>