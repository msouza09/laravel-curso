<h1>Dúvida{{ $forum->id }}</h1>

<x-alert/>
<form action="{{ route('forums.update', $forum->id)}}" method="POST">
  @csrf()
  @method('put')
    @include('admin.forums.partials.form', [
      'forum' => $forum
    ])
</form>