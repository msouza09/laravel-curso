<h1>Detalhes da dúvida {{ $forum->id}}</h1>

<ul>
  <li>Assunto: {{$forum->subject}}</li>
  <li>Status: {{$forum->subject}}</li>
  <li>Descrição: {{$forum->body}}</li>
</ul>

<form action="{{ route('forums.destroy', $forum->id) }}" method="post">
  @csrf()
  @method('DELETE')
  <button type="submit">Excluir</button>
</form>