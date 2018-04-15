










@extends('layouts.app')
@section('content')

<div class="jumbotron m-0 pt-4 pb-4 tabulation" id="tabulation">
    <center><h3>Female Category</h3></center>
    <div class="white-bk">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">#</th>
                    @foreach($passcode->event->category as $category)  
                    <th scope="col">{{ $category->category_name }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($passcode->event->contestant as $contestant)
                    @if($contestant->mister == 0)
                    <tr>
                    <td>{{ $contestant->contestant_name }}</td>
                    <th scope="row">{{ $contestant->contestant_no }}</th>
                        @foreach($passcode->event->category as $category)
                        @forelse($passcode->score as $score)
                            @if($score->contestant_id == $contestant->id and $score->category_id == $category->id)
                            <td>{{ $score->score }}</td>
                            @endif
                        @empty
                            <td></td>
                        @endforelse
                        @endforeach
                    </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
    <hr>
    <center><h3>Male Category</h3></center>
    <div class="white-bk">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">#</th>
                    @foreach($passcode->event->category as $category)  
                    <th scope="col">{{ $category->category_name }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($passcode->event->contestant as $contestant)
                    @if($contestant->mister == 1)
                    <tr>
                    <td>{{ $contestant->contestant_name }}</td>
                    <th scope="row">{{ $contestant->contestant_no }}</th>
                        @foreach($passcode->event->category as $category)
                        @forelse($passcode->score as $score)
                            @if($score->contestant_id == $contestant->id and $score->category_id == $category->id)
                            <td>{{ $score->score }}</td>
                            @endif
                        @empty
                            <td></td>
                        @endforelse
                        @endforeach
                    </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

@section('script')
@endsection