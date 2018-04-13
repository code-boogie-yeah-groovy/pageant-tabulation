









@extends('layouts.app')

@section('content')
<div class="admincontainer" id="admincontainer">
    <div class="adminsidenav">
        <div class="card">
            <div class="card-header">
                My Events 
                <a href="#newEventPanel" class="float-right" data-toggle="collapse" role="button">
                    <i class="fas fa-plus"></i>&nbsp;&nbsp;add new
                </a>
            </div>
            <div id="newEventPanel" class="collapse">
                <div class="card-body">
                    <div class="card-title">Event Name</div>
                    <div class="input-group form-group">
                        <select class="custom-select" name="event_type" id="event_type" v-model="eventType">
                            <option selected>Ms</option>
                            <option>Mr</option>
                            <option>Mr&amp;Ms</option>
                        </select>
                        <div class="input-group-append">
                            <input type="text" class="form-control" name="event_name" id="event_name" v-model="eventName">
                        </div>
                    </div>
                    <div class="card-title">
                        Date
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" name="date" id="date" v-model="eventDate">
                    </div>
                    <div class="card-title">Judges</div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Judge Name" v-model="newJudge" v-on:keyup.enter="addJudge">
                        <div class="input-group-append">
                            <button class="btn btn-outline-danger" type="button" @click.prevent="addJudge">Add</button>
                        </div>
                    </div>
                    <ol class="rectangle-list">
                        <li v-for="judge in judges" v-bind:key="judge.id"><span>@{{ judge.item }}</span></li>
                    </ol>
                </div>
            </div>
            <div class="nav list-group list-group-flush" role="tablist">
                @foreach(Auth::user()->event as $event)
                    <a href="#" class="nav-link list-group-item" data-toggle="list" role="tab">
                        {{ $event->event_name }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="admincontent container">
        @include('admin.newevent')
    </div>
</div>
@endsection

@section('script')
<script>
    var categories = [];

    var newEvent = new Vue({
        el: '#admincontainer',
        data: {
            eventType:'Ms',
            eventName: '',
            eventDate: '',
            judges: [],
            newJudge: '',
            contMs: [],
            newContMs: '',
            contMr: [],
            newContMr: '',
            duplicate: 0,
            catCount: 1,
            categories: categories,
        },
        methods: {
            addJudge:function() {
                let id = this.judges.length + 1
                for(var i=0; i<this.judges.length; i++) {
                    if(this.judges[i].item == this.newJudge) {
                        this.duplicate = 1
                    }
                }
                if(this.newJudge !== '' && this.duplicate == 0) {
                    const newList = {id:id,item:this.newJudge}
                    this.judges.push(newList)
                    this.newJudge = ''
                }
                this.duplicate = 0
            },
            addContMs:function() {
                let id = this.contMs.length + 1
                for(var i=0; i<this.contMs.length; i++) {
                    if(this.contMs[i].item == this.newContMs) {
                        this.duplicate = 1
                    }
                }
                if(this.newContMs !== '' && this.duplicate == 0) {
                    const newList = {id:id,item:this.newContMs}
                    this.contMs.push(newList)
                    this.newContMs = ''
                }
                this.duplicate = 0
            },
            addContMr:function() {
                let id = this.contMr.length + 1
                for(var i=0; i<this.contMr.length; i++) {
                    if(this.contMr[i].item == this.newContMr) {
                        this.duplicate = 1
                    }
                }
                if(this.newContMr !== '' && this.duplicate == 0) {
                    const newList = {id:id,item:this.newContMr}
                    this.contMr.push(newList)
                    this.newContMr = ''
                }
                this.duplicate = 0
            },
        },
    });
    
    $('#submitCategories').click(function() {
        categories.length = 0;
        var n ='', p = null, newCat = {};
        $('.cats').each(function() {
            n = ($(this).find('.catname').val());
            p = ($(this).find('.catper').val());
            if(n!='' && p>0) {
                newCat = {name:n, percentage:p};
                categories.push(newCat);
            }
        })
        console.log(categories);
        $('#addCategoryModal').modal('toggle');
    });    
</script>
@endsection
