<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->



    
    @if(session()->has('message'))

<div class="alert alert-success">
{{session()->get('message')}}
</div>
@endif

 @if(session()->has('error'))

<div class="alert alert-danger">
{{session()->get('error')}}
</div>
@endif


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>


@endif

</div>