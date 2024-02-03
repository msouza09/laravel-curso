<h1>Lista de Suportes</h1>

<a href="{{ route('forums.create')}}">Criar Dúvida</a>
<table>
  <thead>
    <th>id</th>
    <th>assunto</th>
    <th>status</th>
    <th>descrição</th>
    <th></th>
  </thead>
  <tbody>
    @foreach($forums as $forum)
    <tr>
      <td>{{$forum->id }}</td>
      <td>{{$forum->subject }}</td>
      <td>{{$forum->status }}</td>
      <td>{{$forum->body }}</td>
      <td>
        <a href="{{ route('forums.show', $forum->id) }}">Visualizar</a>
        <a href="{{ route('forums.edit', $forum->id)}}">Editar</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
