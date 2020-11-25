<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->



    
    @if(session()->has('message'))

<div class="alert alert-success">
{{session()->get('message')}}
</div>
<!-- <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
  <div class="toast" style="position: absolute; top: 0; right: 0;">
    <div class="toast-header">
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
     {{session()->get('message')}}
    </div>
  </div>
</div> -->
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