@extends('layout')

@section('title', 'Contact')

@section('content')
<h1> {{ __('Contact') }} </h1>


{{-- FORM VALIDATE --}}
<form method="POST" action=" {{ route('contact') }} ">
    @csrf
    <input name="name" placeholder="Nom..." value="{{ old ('name') }}"><br>
    {{ $errors->first('name') }}<br>

    <input type="email" placeholder="E-mail..." value="{{ old ('email') }}"><br>
    {{ $errors->first('email') }}<br>

    <input name="subject" placeholder="Sujet..." value="{{ old('subject') }}"><br>
    {{ $errors->first('subject') }}<br>

    <textarea name="content" placeholder="Message  ..."
        value="{{ old ('content') }}"></textarea><br>
    {{ $errors->first('content') }}<br>

    <button>@lang('Send')</button><br>
</form>

@endsection
