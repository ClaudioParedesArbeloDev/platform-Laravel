@extends('layouts.dashLayouts')

@section('title', 'Code & Lens - User Edit')
    
@section('content')

    <link rel="stylesheet" href="{{asset('sass/users/edit/edit.css') }}">
    <div>
    <h2 class="titleCreate">{{__('Edit User')}}</h2>
    <form action="/users/{{$user->id}}" method="POST" class="formCreate">

        @csrf

        @method('PUT')

        <label for="name">{{__('Name')}}:</label>

            <input type="text" id="name" name="name" value="{{$user->name}}">

        <label for="lastname">{{__('Lastname')}}:</label>
            <input type="text"  id="lastname" name="lastname" value="{{$user->lastname}}">

        <label for="address">{{__('Address')}}:</label>
            <input type="text" id="address" name="address" value="{{$user->address}}">

        <label for="phone">{{__('Phone')}}:</label>
            <input type="text" id="phone" name="phone" value="{{$user->phone}}">

        <label for="email">{{__('Email')}}:</label>
            <input type="text" id="email" name="email" value="{{$user->email}}">

        <label for="dni">DNI:</label>
            <input type="text" id="dni" name="dni" value="{{$user->dni}}">

        <label for="date_birth">{{__('Date of Birth')}}:</label>
            <input type="text" id="date_birth" name="date_birth" value="{{$user->date_birth}}">

        <label for="username">{{__('Username')}}:</label>
            <input type="text" id="username" name="username" value="{{$user->username}}">
        
        <label for="role">{{ __('Role') }}:</label>
        <select id="role" name="role">
            @foreach($roles as $role)
            <option value="{{ $role->id }}" 
                {{ $user->roles->pluck('id')->contains($role->id) ? 'selected' : '' }}>
                {{ $role->name }}
            </option>
            @endforeach
        </select>


        <button type="submit">{{__('Update')}}</button>

        <a href="/users/{{$user->id}}" class="btnCancel">{{__('Cancel')}}</a>


    </form>
    </div>

@endsection
