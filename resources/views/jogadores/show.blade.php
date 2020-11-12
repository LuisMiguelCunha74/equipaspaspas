@if(isset($matarratos->id_jogador))
<h1>Jogadores</h1>
{{$matarratos->nome}}<br>
{{$matarratos->nacionalidade}}<br>
{{$matarratos->data_nascimento}}
@else
<h1 STYLE="color:#0000ff">Nao tem nenhum jogador</h1>
@endif