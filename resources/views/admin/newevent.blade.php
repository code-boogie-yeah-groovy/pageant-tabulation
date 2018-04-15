









<form action="addEvent" method="get">
    @csrf
    <input type="hidden" name="eventname" :value="eventType + ' ' + eventName">
    <input type="hidden" name="date" :value="eventDate">
    <input type="hidden" v-for="category in categories" name="categories[]" :value="category.name">
    <input type="hidden" v-for="category in categories" name="percentage[]" :value="category.percentage">
    <input type="hidden" v-for="judge in judges" name="judges[]" :value="judge.item">
    <input type="hidden" v-for="cont in contMs" name="contMs[]" :value="cont.item">
    <input type="hidden" v-for="cont in contMr" name="contMr[]" :value="cont.item">
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
                    <li v-for="cat in categories"><span>@{{ cat.name }} @{{ cat.percentage }} </span></li>                       
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
                    <div class="row">
                        <div class="col-md-8 text-right">
                            <label for="cat_count">Number of Categories</label>
                        </div>
                        <div class="col-md-4">
                            <input class="form-control" type="number" min="1" max="100" name="cat_count" id="cat_count" v-model.number="catCount">
                        </div>
                    </div>
                    <table class="table table-bordered mt-2">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>&#37;</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="cats" v-for="count in catCount">
                                <td class="p-0"><input type="text" class="m-0 h-100 w-100 catname" required></td>
                                <td class="p-0"><input type="number" class="catper m-0 h-100 w-100" min="1" max="100" required></td>
                                <td class="p-0"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="submitCategories">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
