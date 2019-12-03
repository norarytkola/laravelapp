<title>Messages</title>
 
 @include('partials/header')

 <div class="row justify-content-center pt-5 mb-5">
        <h2>Lue viestejä</h2>
    </div>



    <div class="row justify-content-center">
         <div class="card-deck w-75 justify-content-center">

         @foreach($messages as $message)
            
            <div class="card col-3 p-0">
                <div class="card-header">
                    {{ $message->firstname }}
                </div>
                <div class="card-body">
                    {{ $message->message }}
                </div>
                <div class="card-footer">
                    {{ $message->created_at }}
                    <a class="btn btn-primary mt-2" href="{{ route('answer',[ $message->id])}}">Vastaa tähän viestiin</a>
                </div> 
            </div>

        @endforeach

        </div>
    </div>
</div>
     
 