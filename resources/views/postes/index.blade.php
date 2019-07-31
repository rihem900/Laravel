@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Posts</div>
                <div class="card-body">
                    @if($all->count() && $postes->count())
                @foreach ($all as $posts)
                    @foreach($postes as $post)
                           
                        @endforeach
                        @if($posts->user_id === $post->user_id or $posts->privacy == "False")
                        <li>
                        <a href='/posts/{{$post->id}}'> {{$post->title}}</a>
                    
                        </li>
                        
                                 @endif
                     @endforeach

                     @elseif()
                     @foreach ($all as $posts)
                        @if($posts->privacy === "False")
                        <li>
                        <a href="/posts/{{$post->id}}"> {{$posts->title}}
                    </a>
                    
                    
                        </li>
                        @endif
                      @endforeach  
                    @endif
                </div>
            </div>
            <ul>
        <a href="/home">Home</a>
    </ul>
        </div>
    </div>
    
</div>
@endsection

