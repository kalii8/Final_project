<h1>This is homepage</h1>
<h2>Wheel simulation - Input</h2>


{!! Form::open(['action' => 'SearchController@store', 'method' => 'post']) !!}
FORM

{{ csrf_field() }}

@foreach ($attributes as $attribute)

<div class="form-group prl-5">
{!! Form::label($attribute->attribute_name, $attribute->attribute_name) !!}
{!! Form::text($attribute->attribute_name, '') !!}
</div>

@endforeach

<div class="form-group prl-5">
{!! Form::submit('Search') !!}
</div>


{!! Form::close() !!}