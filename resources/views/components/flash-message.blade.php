@if(session()->has('success'))
    @props(['redirect'])
<div {{$attributes->merge(['class'=>'toast align-items-center text-white mx-auto mb-4 bg-success border-0 show'])}} role="alert">
  <div class="d-flex">
    <div class="toast-body">
        {{session('success')}}
    </div>
      @php
      echo
      (isset($redirect) ? '<script>setTimeout(()=>window.location.href="'.$redirect.'",3000)</script>' : '');
      @endphp

    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-mdb-dismiss="toast"></button>
  </div>
</div>
@endif
