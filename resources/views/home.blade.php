@extends('layouts.app')

@section('content')
<div class="container">
@if($user->role == "руководитель")

<span>Вы зашли за админа</span><br />
<H4>Работа с параметрами системы</H4><br />

     <form method="Post" action="{{ route('home_add_parameter')}}">
     {{ csrf_field() }}
         <span>Название параметра</span><input type="text" name="name">
         <span>Значение параметра</span><input type="text" name="value">
                 <button type="submit">Добавить новый параметр</button><br />
     </form>

     <form method="Post" action="{{route('home_delete_parameter')}}">
     {{ csrf_field() }}
     {{ method_field('delete')}}
         <select name="parameter_id">
         	 <option selected="selected">Выберите параметр</option>
         	 @foreach($params as $parameter)
             <option value="{{$parameter->id}}"><span>{{$parameter->name}} : </span><span>{{$parameter->value}} </span></option>    {{$id_name=$parameter->id}}
 @endforeach
              </select>

             <button type="submit" >Удалить</button>
     </form>   

         <span>или</span><button type="submit">Изменить</button><input type="text" name="name"><input type="text" name="value">
      
      <H4>Работа с должностями системы</H4><br />

     <form method="Post" action="{{ route('home_add_position')}}">
     {{ csrf_field() }}
         <span>Название должности</span><input type="text" name="name">
         <span>Название должности в Р.П.</span><input type="text" name="value">
                 <button type="submit">Добавить новую должность</button><br />
     </form>

     <form method="Post" action="{{route('home_delete_position')}}">
     {{ csrf_field() }}
     {{ method_field('delete')}}
         <select name="position_id">
         	 <option selected="selected">Выберите дожность</option>
         	 @foreach($positions as $position)
             <option value="{{$position->id}}"><span>{{$position->name}} : </span><span>{{$position->name_rp}} </span></option>  
 @endforeach
              </select>

             <button type="submit" >Удалить</button>
     </form>   

         <span>или</span><button type="submit">Изменить</button><input type="text" name="name"><input type="text" name="value">

@else 

<p>Вы зашли за сотрудника</p>









@endif

</div>
@endsection
