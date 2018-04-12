








<form action="#" method="get">
    <input type="hidden" v-for="judge in judges" :value="judge.item">
    <input type="hidden" v-for="cont in contMs" :value="cont.item">
    <input type="hidden" v-for="cont in contMr" :value="cont.item">
    <button type="submit" class="btn btn-danger mt-5 float-right">Save&nbsp;&nbsp;<i class="far fa-save"></i></button>
</form>
<h1 class="text-center"><span id="type_display">@{{ eventType }}</span><span id="event_display">&nbsp;@{{ eventName }}</span></h1>
<h4 class="text-center" id="date_display">@{{ eventDate }}</h4>
<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Categories
                </div>
            </div>
            <div class="card-body">
                <button class="btn btn-outline-danger col-md-6 offset-md-6 w-100" data-toggle="modal" data-target="#addCategoryModal">Edit&nbsp;&nbsp;<i class="far fa-edit"></i></button>
                <ol class="rectangle-list">
                    <li><span>List item</span></li>
                    <li><span>List item</span></li>
                    <li><span>List item</span>
                        <ol>
                            <li><span>List sub item</span></li>
                            <li><span>List sub item</span></li>
                            <li><span>List sub item</span></li>
                        </ol>
                    </li>
                    <li><span>List item</span></li>
                    <li><span>List item</span></li>                       
                </ol>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Contestants (Miss)
                </div>
            </div>
            <div class="card-body">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Contestant Name" v-model="newContMs" v-on:keyup.enter="addContMs">
                    <div class="input-group-append">
                        <button class="btn btn-outline-danger" type="button" @click.prevent="addContMs">Add</button>
                    </div>
                </div>
                <ol class="rounded-list red-list">
                    <li v-for="cont in contMs" v-bind:key="cont.id"><span>@{{ cont.item }}</span></li>                      
                </ol>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Contestants (Mister)
                </div>
            </div>
            <div class="card-body">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Contestant Name" v-model="newContMr" v-on:keyup.enter="addContMr">
                    <div class="input-group-append">
                        <button class="btn btn-outline-danger" type="button" @click.prevent="addContMr">Add</button>
                    </div>
                </div>
                <ol class="rounded-list">
                    <li v-for="cont in contMr" v-bind:key="cont.id"><span>@{{ cont.item }}</span></li>                      
                </ol>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
