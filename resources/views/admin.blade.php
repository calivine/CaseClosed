@extends('layouts.master')

@section('content')
    <h1 class='subtitle'>Admin Portal</h1>
    <div class='row'>
        <div class='col-1-4'>
            <a class='run-process' href='{{ '/new' }}'>Create New Case</a>
        </div>
    </div>
    <div class='row'>
        <div class='col-3-4'>
            <ul>
                @foreach($perpetrators as $perpetrator)
                    <li class='nameplate'>
                        <a class='nameplate-contents' href='{{ '/case-dashboard/' . $perpetrator->id }}'>{{ $perpetrator->first_name }} {{ $perpetrator->last_name }}</a>
                        <a class='nameplate-icon' href='#'>
                            <i class='fas fa-user-edit'></i>
                        </a>
                        <a class='nameplate-contents' href='{{ '#' }}'>Delete Case</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
