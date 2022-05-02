@if(session()->has('success'))
    <p style="z-index: 99999;" class="alert alert-success text-center mb-0 mt-5">{{session()->get('success')}}</p>
@elseif(session()->has('warning'))
    <p style="z-index: 99999;" class="alert alert-warning text-center mb-0 mt-5">{{session()->get('warning')}}</p>
@endif
