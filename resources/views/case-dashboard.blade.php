@extends('layouts.master')

@section('content')
    <div class='row'>
        <div class='col-1-2'>
            <ul>
                <li>
                    <a href='{{ '/victim/' . $perpetrator->id . '/new' }}'>
                        <i class='fas fa-user-plus'></i></a>
                    Victim
                </li>
                <li>
                    <a href='{{ '/source/' . $perpetrator->id . '/new' }}'>
                        <i class='fas fa-plus'></i></a>
                    Sources
                </li>
                <li>
                    <a href='{{ '/image/' . $perpetrator->id . '/new' }}'>
                        <i class='fas fa-plus'></i></a>
                    Images
                </li>
            </ul>
        </div>
    </div>
    <div class='row'>
        <div class='col-3-3'>
            <ul>
                @foreach($perpetrator->victims as $victim)
                    <li class='nameplate'>
                        <span class='nameplate-contents'>{{ $victim->first_name }} {{ $victim->last_name }}</span>
                        <a class='nameplate-icon' href='{{ '/victim/' . $victim->id . '/edit' }}'>
                            <i class='fas fa-user-edit'></i>
                        </a>
                        <a class='nameplate-contents' href='{{ '/victim/' . $victim->id . '/delete' }}'>
                            <i class='fas fa-trash'></i>
                        </a>
                    </li>
                @endforeach
                @foreach($perpetrator->sources as $source)
                    <li><a href='{{ $source->url }}'>{{ $source->url }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class='image-row'>
        @foreach($perpetrator->images as $image)
            <div class='image-container'>
                <img src='{{ $image->url }}'
                     alt='{{ $image->caption }}'
                     width='150px'
                     height='200px'
                >
                <div>
                    <a href='{{ '/image/' . $image->id . '/delete' }}' class='image-link'>
                        <i class='fas fa-trash'></i>
                    </a>
                </div>
            </div>
        @endforeach
        @foreach($perpetrator->victims as $victim)
            @foreach($victim->images as $image)
                <div class='image-container'>
                    <img src='{{ $image->url }}'
                         alt='{{ $image->caption }}'
                         width='150px'
                         height='200px'
                    >
                    <div>
                        <a href='{{ '/image/' . $image->id . '/delete' }}' class='image-link'>
                            <i class='fas fa-trash'></i>
                        </a>
                    </div>
                </div>
            @endforeach
        @endforeach
    </div>
@endsection
