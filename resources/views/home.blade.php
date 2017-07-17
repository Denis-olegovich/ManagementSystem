@extends('layouts.app') @section('content')
<div class="container">
	@if($user->role == "руководитель")
	<span>Вы зашли за админа</span>
	<br />
	<div>
		<H4>Работа с параметрами системы</H4>
		<br />
		<form method="Post" action="{{ route('parameter:add')}}">
			{{ csrf_field() }}
			<span>Название параметра</span>
			<input type="text" name="name">
			<span>Значение параметра</span>
			<input type="text" name="value">
			<button type="submit">Добавить новый параметр</button>
			<br />
		</form>
		<form method="Post" action="{{route('parameter:delete')}}" id="selectIdprm" class="selectIdprm" onchange="change()">
			{{ csrf_field() }} {{ method_field('delete')}}
			<select name="parameter_id">
				<option selected="selected">Выберите параметр</option>
				@foreach($params as $parameter)
				<option value="{{$parameter->id}}" label="{{$parameter->name}}">{{$parameter->value}}</option>
				@endforeach
			</select>
			<button type="submit">Удалить</button>
		</form>
		<form method="post" action="{{route('parameter:update')}}">
			{{ csrf_field() }}
			<input type="text"  id="id_parameter">
			<input type="text" name="name" id="text_name_parameter">
			<input type="text" name="value" id="text_value_parameter">
			<button type="submit">Изменить</button>
		</form>
	</div>
	<div>
		<H4>Работа с должностями системы</H4>
		<br />
		<form method="Post" action="{{ route('position:add')}}">
			{{ csrf_field() }}
			<span>Название должности</span>
			<input type="text" name="name">
			<span>Название должности в Р.П.</span>
			<input type="text" name="name_rp">
			<button type="submit">Добавить новую должность</button>
			<br />
		</form>
		<form method="Post" action="{{route('position:delete')}}">
			{{ csrf_field() }} {{ method_field('delete')}}
			<select name="position_id" id="selectId" onchange="change()">
				<option selected="selected">Выберите дожность</option>
				@foreach($positions as $position)
				<option value="{{$position->id}}" label="{{$position->name}}">{{$position->name_rp}}</option>
				@endforeach
			</select>
			<button type="submit">Удалить</button>
		</form>
		<form method="Post" action="{{route('position:update')}}">
			{{ csrf_field() }}
			<input type="hidden" name="id" id="text_id_position">
			<input type="text" name="name" id="text_name_rp">
			<input type="text" name="name_rp" id="text_name">
			<button type="submit">Изменить</button>
		</form>
	</div>
	
	@else
	<p>Вы зашли за сотрудника</p>
	<div>
	</div>
	@endif
	
</div>
@endsection