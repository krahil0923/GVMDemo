@extends('layouts.app-master')

@section('content')

     
<div class="container">
    <!-- <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table> -->
    <div class="card">
        <div class="card-header">
            <button class="btn btn-outline-primary" onclick="createProject()"> 
                Create New User
            </button>
        </div>
        <div class="card-body">
            <div id="alert-div">
              
            </div>
            <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
        </div>
    </div>
</div>

@endsection