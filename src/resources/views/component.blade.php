
@extends('StyleGuide::layouts.main')

@section ('content')
	@include('components.'.$componentName.'.'.$componentName, $data)
@endsection