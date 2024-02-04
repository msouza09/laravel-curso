<div class="alert alert-dange">
   @if ($errors->any())
    @foreach($errors->all() as $error)
      {{ $error }}
    @endforeach
@endif
</div>