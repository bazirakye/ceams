@extends('hr.layouts.app')

@section('title')
Home
@endsection

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="list-group shadow">
          <a href="index.html" class="list-group-item active main-color-bg">
            <span class="fa fa-gears" aria-hidden="true"></span> Manage Staffs
          </a>
          <a href="{{ route('hr.staffs') }}" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Staffs List </a>
          <a href="posts.html" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Pending Staffs </a>
          <a href="{{ route('hr.staffs.create') }}" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> New Staff </a>
          <a href="posts.html" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Staff Roles </a>
        </div>
      </div>
      <div class="col-md-8">
          <!-- Latest Users -->
        <div class="card shadow">
          <div class="card-header border-custom pt-1 pb-1">
            <h3 class="card-title text-custom">Staffs List</h3>
          </div>
          <div class="card-body border-custom">
            <table class="table table-striped table-hover">
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Title</th>
                  <th>Department</th>
                  <th>Action</th>
                </tr>
                @foreach ($staffs as $key => $staff)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $staff->name }}</td>
                    <td>{{ $staff->job_title }}</td>
                    <td>{{ $staff->department }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="#"><button title="View Profile" class="btn btn-light"><span class="fa fa-eye text-dark"></span></button></a>
                            <a href="#modal{{$staff->staff_id}}" title="Edit" class="btn btn-light" data-toggle="modal" data-target="#modal{{$staff->zstaff_id}}"><span class="fa fa-edit text-primary"></span></a>

                            {!! Form::open(['route' => ['courses.destroy', $staff->staff_id], 'method' => 'delete', 'style' => 'display:inline']) !!}
                              <button title="Delete" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-light"><span class="fa fa-trash text-danger"></span></button>
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
                @endforeach

              </table>
              {{ $staffs->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
