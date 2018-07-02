<h1>This is homepage</h1>
<h2>Wheel simulation - Input</h2>


{!! Form::open(['action' => 'SearchController@store', 'method' => 'post']) !!}
FORM

{{ csrf_field() }}
<div class="form-group prl-5">
{!! Form::label('alcohol_level', 'Alcohol level') !!}
{!! Form::text('alcohol_level', '') !!}
</div>


<div class="form-group prl-5">
{!! Form::label('color_level', 'Color level') !!}
{!! Form::text('color_level', '') !!}
</div>

<div class="form-group prl-5">
{!! Form::label('biterness_level', 'Biterness level') !!}
{!! Form::text('biterness_level', '') !!}
</div>

<div class="form-group prl-5">
{!! Form::submit('Search') !!}
</div>


{!! Form::close() !!}