<option value=""></option>
@foreach($visitantes as $visitante)
	<option value="{{$visitante->id}}">{{ $visitante->nombre }}</option>
@endforeach