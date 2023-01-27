@extends('layouts.layout')
@section('title','edit table')
@section('content')
<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
    <div class="card">
      <div class="card-body">
        <div class="main-content-label mg-b-5">
          Valid State Input
        </div>
        <form action="{{ route('update',$student->id )}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
          <div class="form-row">
            <div class="col-md-3 mb-3">
              <label for="validationDefault01">name</label>
              <input type="text" class="form-control" id="validationDefault01" placeholder="enter  name" name="name" value="{{ $student->name }}" required>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationDefault02">email</label>
              <input type="email" class="form-control" id="validationDefault02" placeholder="enter email" name="email" value="{{ $student->email }}" required>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationDefault02">password</label>
              <input type="password" class="form-control" id="validationDefault02" placeholder="enter email" name="password" value="{{ $student->password }}" required>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationDefault02">dob</label>
              <input type="date" class="form-control" id="validationDefault02" name="dob" placeholder="enter dob" value="{{ $student->dob }}" required>
            </div>
          </div>

          <div class="form-row">
            <div class="col-md-3 mb-3">
              <label for="validationDefault03">gender</label>
              <select class="custom-select" name="gender" value="{{ $student->gender }}">
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
            <button class="btn btn-primary" type="submit">update form</button>

          </div>
        </form>
      </div>
    </div>
  </div>
  @endsection