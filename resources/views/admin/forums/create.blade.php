<h1>Nova dúvida</h1>

<x-alert/>

<form action="{{ route('forums.store')}}" method="POST">
  @include('admin.forums.partials.form')
</form>

  <a href="{{route('forums.index')}}">Voltar</a>
