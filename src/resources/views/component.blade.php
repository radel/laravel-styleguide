
@extends('StyleGuide::layouts.main')

@section ('content')
  {!! $readme !!}
	@include('components.'.$componentName.'.'.$componentName, $data)
@endsection
