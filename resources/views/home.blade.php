@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('Projects') }}
                    <span class="pr-5">
                        امروز
                    {{jdate();}}
                    </span>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    
                                </div>
                            </div>
                        </div>
                    @foreach(\App\Models\Project::all() as $proj)

                    <div class="row">

                       <div class="col-4 border-3 bg-info m-4">
                           <div>{{$proj->title}}</div>
                           <div><span>شروع </span>{{$proj->start_project_at}}</div>
                           <div><span>پایان</span>{{$proj->end_project_at}}</div>
                       </div>

                    </div>
                    @endforeach
                    <!-- {{ __('You are logged in!') }} -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
