

@extends('layouts.app')
@section('content')

<div class="jumbotron m-0 pb-4 tabulation" id="tabulation">
  <div class="row">
    <div class="col-4">
      <div class="card">
        <div class="card-header">Category</div>
        <div class="nav list-group list-group-flush" role="tablist" id="catList">
          @foreach($passcode->event->category as $category)
          <a class="nav-link list-group-item cat" data-toggle="list" role="tab" data-cat="{{$category->category_name}}"
            href="#cat{{ $category->id }}panel" onclick="setCategoryValue('{{$category->category_name}}');return false;">
            {{ $category->category_name }}
          </a>
          @endforeach  
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card">
        <div class="card-header navbar">
          <div class="nav">Contestant</div>
          <ul class="nav nav-tabs card-header-tabs justify-content-end" role="tablist">
            <li class="nav-item">
              <a class="nav-link active genderTab" data-toggle="tab" role="tab" href="#msEvent">Ms</a>
            </li>
            <li class="nav-item">
              <a class="nav-link genderTab" data-toggle="tab" role="tab" href="#mrEvent">Mr</a>
            </li>
          </ul>  
        </div>
        <div class="tab-content">
            <div class="tab-pane fade show active contPanel" role="tab-panel" id="msEvent">
              <div class="list-group list-group-flush contList" role="tablist">
                @foreach($passcode->event->contestant as $contestant)
                  @if($contestant->mister == false)
                    <a class="list-group-item d-flex justify-content-between align-items-center" role="tab"
                      data-toggle="list" href="#" onclick="setContestantValue('{{$contestant->contestant_name}}');return false;"
                      data-cont="{{$contestant->contestant_name}}">
                      {{ $contestant->contestant_name }}
                      <span class="badge badge-danger">&#35;&nbsp;{{ $contestant->contestant_no }}</span>
                    </a>
                  @endif
                @endforeach  
              </div>
            </div>
            <div class="tab-pane fade contPanel" role="tab-panel" id="mrEvent">
              <div class="list-group list-group-flush contList" role="tablist">
                @foreach($passcode->event->contestant as $contestant)
                  @if($contestant->mister == true)
                    <a class="list-group-item d-flex justify-content-between align-items-center" data-toggle="list"
                     role="tab" href="#" onclick="setContestantValue('{{$contestant->contestant_name}}');return false;"
                     data-cont="{{$contestant->contestant_name}}">
                      {{ $contestant->contestant_name }}
                      <span class="badge badge-danger">&#35;&nbsp;{{ $contestant->contestant_no }}</span>
                    </a>
                  @endif
                @endforeach  
              </div>
            </div>
          </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card">
        <div class="card-header">
          Score
        </div>
        <div class="card-body tab-content">
          <h5 class="card-title">@{{ contestant }}</h5>
          <p class="card-text">@{{ category }}</p>
          @foreach($passcode->event->category as $category)
            <div class="tab-pane" role="tabpanel" id="cat{{ $category->id }}panel">
              <form action="#" method="get">
                @forelse($category->criteria as $criteria)
                  <div class="input-group mb-3">
                    <div class="input-group-prepend w-75">
                      <span class="input-group-text w-100">
                        {{ $criteria->criteria_name }}&nbsp;&nbsp;&#40;{{ $criteria->percentage + 0 }}&#37;&#41;
                      </span>
                    </div>
                    <input type="text" class="form-control w-25">
                  </div>
                @empty
                  <div class="input-group mb-3">
                    <div class="input-group-prepend w-75">
                      <span class="input-group-text w-100">Score</span>
                    </div>
                    <input type="text" class="form-control w-25">
                  </div>
                @endforelse
                <button type="submit" class="btn btn-danger float-right">Submit Score</button>
              </form>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <hr class="my-4">
  <center>
    <h3>{{ $passcode->event->event_name }}</h3>
  </center>
</div>

@endsection

@section('script')
<script>

  $(document).ready(function() {
    $('#catList a:first-child').tab('show');
    $('.contList a:first-child').tab('show');
    tabulation.category = $('#catList a:first-child').data('cat');
    tabulation.contestant = $('.contList a:first-child').data('cont');
    $('a.genderTab[data-toggle="tab"]').on('shown.bs.tab', function (e) {
      var target = $(e.target).attr("href")
      setContestantValue(($(target + ' .contList a.active').data('cont')))
    });
  });

  function setCategoryValue(category) {
    tabulation.category = category;
  }

  function setContestantValue(contestant) {
    tabulation.contestant = contestant;
  }

  var tabulation = {
    category: 'category',
    contestant: 'contestant'
  }

  app = new Vue({
    el: '#tabulation',
    data: tabulation
  });

</script>
@endsection