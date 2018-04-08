










@extends('layouts.app')
@section('content')

<div id="app-5">
  <p>@{{ message }}</p>
  <button v-on:click="reverseMessage">Reverse Message</button>
</div>

{{ $passcode->code }} <br>
{{ $passcode->event->event_name }}

@foreach($passcode->event->category as $category)
<br>
{{ $category->category_name }}
@endforeach

@foreach($passcode->event->contestant as $contestant)
<br>
{{ $contestant->contestant_name }}
@endforeach

<a href="/judgeLogout">Logout</a>

@endsection

@section('script')
<script>
   var app5 = new Vue({
  el: '#app-5',
  data: {
    message: 'Hello Vue.js diputa ka!'
  },
  methods: {
    reverseMessage: function () {
      this.message = this.message.split('').reverse().join('')
    }
  }
})
</script>
@endsection