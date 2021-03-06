@extends('layouts.master')

@section('title')
    Delete Case
@endsection

@section('content')
    <section class='confirm-delete'>
        <p>
            Are you sure you want to delete this case and all associated data?
        </p>
        <form method='POST' action='/case/{{ $perpetrator->id }}'>
            {{ method_field('delete') }}
            {{ csrf_field() }}
            <input type='submit' value='Delete'>
        </form>
        <a href='{{ '/admin' }}'>Cancel and Return</a>
    </section>

@endsection