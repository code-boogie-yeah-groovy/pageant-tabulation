

@extends('layouts.app')
@section('content')

<div class="jumbotron m-0 pt-4 pb-4 tabulation" id="tabulation">
  <div class="row">
    <div class="col-12 mb-2 d-flex">
      <a href="scorecard" target="_blank" class="btn btn-danger ml-auto">My Score Card</a>
    </div>
    <div class="col-4">
      <div class="card">
        <div class="card-header">Category</div>
        <div class="nav list-group list-group-flush" role="tablist" id="catList">
          @foreach($passcode->event->category as $category)
          <a class="nav-link list-group-item cat" data-toggle="list" role="tab" data-cat="{{$category->category_name}}"  data-catid="{{ $category->id }}"
            href="#cat{{ $category->id }}panel" onclick="setCategoryValue('{{$category->category_name}}', '{{$category->id}}');return false;">
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
                      data-toggle="list" href="#" onclick="setContestantValue('{{$contestant->contestant_name}}', '{{$contestant->id}}');return false;"
                      data-cont="{{$contestant->contestant_name}}" data-contid="{{ $contestant->id }}">
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
                     role="tab" href="#" onclick="setContestantValue('{{$contestant->contestant_name}}', '{{$contestant->id}}');return false;"
                     data-cont="{{$contestant->contestant_name}}" data-contid="{{ $contestant->id }}">
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
              <form action="/addScore" method="get">
                {{--@forelse($category->criteria as $criteria)
                  <div class="input-group mb-3">
                    <div class="input-group-prepend w-75">
                      <span class="input-group-text w-100">
                        {{ $criteria->criteria_name }}&nbsp;&nbsp;&#40;{{ $criteria->percentage + 0 }}&#37;&#41;
                      </span>
                    </div>
                    <input type="text" class="form-control w-25">
                  </div>
                @empty--}}
                  <div class="input-group mb-3">
                    <div class="input-group-prepend w-50">
                      <span class="input-group-text w-100">Score (1-100)</span>
                    </div>
                    <input type="number" class="form-control w-50" name="score" min="0" max="100" required :disabled="hasScore" :value="points">
                    <input type="hidden" name="passcodeid" value="{{ $passcode->id }}">
                    <input type="hidden" name="eventid" value="{{ $passcode->event->id }}">
                    <input type="hidden" name="contestantid" :value="contestantid">
                    <input type="hidden" name="categoryid" :value="categoryid">
                  </div>
                {{--@endforelse--}}
                <button type="submit" class="btn btn-danger float-right" :hidden="hasScore">Submit Score</button>
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
    @if(session()->has('message'))
    <div class="alert alert-primary bottom-alert text-center" role="alert">
      {{ session('message') }}
    </div>
  @endif
  </center>
</div>

@endsection

@section('script')
<script>

  $(document).ready(function() {
    $('#catList a:first-child').tab('show');
    $('.contList a:first-child').tab('show');
    tabulation.category = $('#catList a:first-child').data('cat');
    tabulation.categoryid = $('#catList a:first-child').data('catid');
    tabulation.contestant = $('.contList a:first-child').data('cont');
    tabulation.contestantid = $('.contList a:first-child').data('contid');
    $('a.genderTab[data-toggle="tab"]').on('shown.bs.tab', function (e) {
      var target = $(e.target).attr("href")
      setContestantValue(($(target + ' .contList a.active').data('cont')), ($(target + ' .contList a.active').data('contid')))
    });

    var scores = JSON.parse('{!! json_encode($passcode->score) !!}');
    tabulation.scores = scores;

    setTimeout(function(){
      $(".bottom-alert").fadeOut(); 
    }, 5000);
  });

  function setCategoryValue(category, categoryid) {
    tabulation.category = category;
    tabulation.categoryid = categoryid;
  }

  function setContestantValue(contestant, contestantid) {
    tabulation.contestant = contestant;
    tabulation.contestantid = contestantid;
  }

  var tabulation = {
    category: 'category',
    categoryid: 'categoryid',
    contestant: 'contestant',
    contestantid: 'contestantid',
    scores: []
  }

  app = new Vue({
    el: '#tabulation',
    data: tabulation,
    computed: {
      hasScore: function() {
        for(i=0; i<this.scores.length;i++){
          if(this.contestantid == this.scores[i].contestant_id && this.categoryid == this.scores[i].category_id) {
            return true;
          }
        }
        return false;
      },
      points: function() {
        for(i=0; i<this.scores.length;i++){
          if(this.contestantid == this.scores[i].contestant_id && this.categoryid == this.scores[i].category_id) {
            return this.scores[i].score;
          }
        }
        return null;
      }
    }
  });

</script>
@endsection