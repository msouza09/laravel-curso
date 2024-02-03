<h1>Lista de Suportes</h1>

<a href="{{ route('forums.create')}}">Criar Dúvida</a>
<table>
  <thead>
    <th>assunto</th>
    <th>status</th>
    <th>descrição</th>
    <th></th>
  </thead>
  <tbody>
    @foreach($forums as $forum)
    <tr>
      <td>{{$forum->subject }}</td>
      <td>{{$forum->status }}</td>
      <td>{{$forum->body }}</td>
      <td>
        >
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
