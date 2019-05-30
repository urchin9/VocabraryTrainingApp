@if (count($errors) > 0)
  <ul class="flash-messages">
    @foreach ($errors->all() as $error)
      <li class="error-msg">{{ $error }}</li>
    @endforeach
  </ul>

@endif
