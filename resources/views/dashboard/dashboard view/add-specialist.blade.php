@extends('dashboard.dashboard_master')

@section('home_content')
<div class="container">
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h6>Specialist List</h6>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Specialist Name</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td> Name</td>
                        <td>Image</td>
                        <td>Action</td>
                    </tr>
                    

                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                        </tr>
                    </tbody>
                    
                </table>
            </div>
            <div class="card-footer">
                Thanks for using our system 
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h6>Add Specialist</h6>

            </div>
            <div class="card-body">
            <form action="{{route('store.specialist')}}" method='post' enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Specialist Name</label>
                    <input type="text" class="form-control" name='name' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter specialist name">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Image</label>
                    <input type="file" name='image' class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>

            </div>
            <div class="card-footer">

            </div>
        </div>

    </div>
</div>

</div>









@endsection