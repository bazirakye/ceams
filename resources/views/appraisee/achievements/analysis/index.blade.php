@extends('layouts.app')
@section('content')

	  <div class="container">
        <div class="row">
          @include('ceams.partials.side')
         	<div class="col-md-8">
            <!-- Website Overview -->
            <div class="card card-default">
              <div class="card-header main-color-bg">
                <div class="row justify-content-between">
                  <h3 class="pl-4">Studies Undertaken</h3>
                  <a href="#" class="btn btn-sm btn-secondary pr-4 float-right">Add new</a href="#">
                </div>
              </div>
              <div class="card-body">
                <table class="table table-striped table-hover table-responsive-sm">
                      <tr>
                        <th>Contraint</th>
                        <th>Strategy</th>
                        <th>Action</th>
                      </tr>
                      <tr>
                        <td>Home</td>
                        <td>Information Technology</td>
                        <td>
                          <span class="fa fa-eye"></span>
                          <span class="fa fa-trash"></span>
                        </td>
                      </tr>
                      <tr>
                        <td>Home</td>
                        <td>Information Technology</td>
                        <td>
                          <span class="fa fa-eye"></span>
                          <span class="fa fa-trash"></span>
                        </td>
                      </tr>
                      <tr>
                        <td>Home</td>
                        <td>Information Technology</td>
                        <td>
                          <span class="fa fa-eye"></span>
                          <span class="fa fa-trash"></span>
                        </td>
                      </tr>
                      <tr>
                        <td>Home</td>
                        <td>Information Technology</td>
                        <td>
                          <span class="fa fa-eye"></span>
                          <span class="fa fa-trash"></span>
                        </td>
                      </tr>
                      <tr>
                        <td>Home</td>
                        <td>Information Technology</td>
                        <td>Makerere University</td>
                        <td>Certificate</td>
                        <td>Dec 12, 2016</td>
                        <td>
                          <span class="fa fa-eye"></span>
                          <span class="fa fa-trash"></span>
                        </td>
                      </tr>
                    </table>
              </div>
              </div>

          </div>
        </div>
      </div>
@endsection