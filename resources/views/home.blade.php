@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
            <ul>
        <a href="/home/{user->id}">View Posts</a>
       
         
        
        
        <a href="/home/{user}/create">Create Posts</a>
</ul>
        </div>
       
    </div>
</div>
@endsection
