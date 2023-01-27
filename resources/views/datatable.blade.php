@extends('layouts.layout')
@section('title','table ne ')
@section('content')

<div class="main-content horizontal-content">

  <!--div-->

  <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
    <div class="card">
      <div class="card-body">
        <div class="main-content-label mg-b-5">
          Valid State Input
        </div>
        <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
        @csrf
          <div class="form-row">
            <div class="col-md-3 mb-3">
              <label for="validationDefault01">name</label>
              <input type="text" class="form-control" id="validationDefault01" placeholder="enter  name" name="name"  required>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationDefault02">email</label>
              <input type="email" class="form-control" id="validationDefault02" placeholder="enter email" name="email"  required>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationDefault02">password</label>
              <input type="password" class="form-control" id="validationDefault02" placeholder="enter email" name="password"  required>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationDefault02">dob</label>
              <input type="date" class="form-control" id="validationDefault02" name="dob" placeholder="enter dob"  required>
            </div>
          </div>

          <div class="form-row">
            <div class="col-md-3 mb-3">
              <label for="validationDefault03">gender</label>
              <select class="custom-select" name="gender">
                <option selected>select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Transgender">Transgender</option>
              </select>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationDefault04">Marital Status</label>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline1">Single</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline2">Married</label>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationDefault05">File</label>
              <input type="file" class="form-control" id="validationDefault05" name=" file" placeholder="select file" required>
            </div>
          </div>

          <div class="text-right">
            <button class="btn btn-primary" type="submit">Submit form</button>

          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="col-xl-12">
  <div class="card">
    <div class="card-header pb-0 pd-t-25">
      <div class="d-flex justify-content-between">
        <h4 class="card-title mg-b-0">STRIPED ROWS</h4>
      </div>
      <p class="tx-12 text-muted mb-0">Example of Dashfox Striped Rows.. <a href="#">Learn more</a></p>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table text-md-nowrap table-striped" id="example2">
          <thead>
            <tr>
              <th class="wd-15p border-bottom-0">id</th>
              <th class="wd-15p border-bottom-0">name</th>
              <th class="wd-20p border-bottom-0">email</th>
              <th class="wd-15p border-bottom-0">password</th>
              <th class="wd-10p border-bottom-0">dob</th>
              <th class="wd-25p border-bottom-0">gender</th>
              <th class="wd-25p border-bottom-0">marital_status</th>
              <th class="wd-25p border-bottom-0">photo</th>
              <th class="wd-25p border-bottom-0">video</th>
              <th class="wd-25p border-bottom-0">edit</th>
              <th class="wd-25p border-bottom-0">delete</th>


            </tr>
          </thead>
          <tbody>
          @foreach($student as $stu)
            <tr>
              <td>{{ $stu->id }}</td>
              <td>{{ $stu->name }}</td>
              <td>{{ $stu->email }}</td>
              <td>{{ $stu->password }}</td>
              <td>{{ $stu->dob }}</td>
              <td>{{ $stu->gender }}</td>
              <td>{{ $stu->martial_status }}</td>
              <!-- <td>{{ $stu->photo }}</td> -->
              <td><img src="{{ asset($stu->photo) }}" height="30px" width="30px" ></td>
              <td>{{ $stu->video }}</td>
              <td><a href="{{ route('edit',$stu->id) }}">Edit</a></td>
              <td><a href="{{ route('delete',$stu->id) }}">Delete</a></td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>
    </div><!-- bd -->
  </div><!-- bd -->
</div>
<!--/div-->
</div>


@endsection()