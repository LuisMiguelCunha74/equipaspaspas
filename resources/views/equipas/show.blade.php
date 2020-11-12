@if(isset($equipa->id_equipa))
<h1>equipas</h1>
{{$equipa->designacao}}<br>
{{$equipa->designacao_curta}}<br>
{{$equipa->localidade}}
@else
<h1 STYLE="color:#ff0000">ERRO ERRO ERRO</h1>
@endif
