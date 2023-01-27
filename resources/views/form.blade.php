@extends('layouts.layout')
@section('titile','valid form')
@section('content')

<div class="main-content horizontal-content">

  <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
    <div class="card">
      <div class="card-body">
        <div class="main-content-label mg-b-5">
          Valid State Input
        </div>
        <p class="mg-b-20 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
        <form class="needs-validation was-validated">
          <div class="row row-sm">
            <div class="col-lg-3">
              <div class="form-group has-success mg-b-0">
                <input class="form-control" placeholder="Input box (success state)" required="" type="text" value="This is input">
                <textarea class="form-control mg-t-20" placeholder="Textarea (success state)" required="" rows="3">This is textarea</textarea>
              </div>
            </div>
            <div class="col-lg-3 mg-t-20 mg-lg-t-0">
              <div class="form-group has-danger mg-b-0">
                <input class="form-control" placeholder="Input box (invalid state)" required="" type="text">
                <textarea class="form-control mg-t-20" placeholder="Textarea (invalid state)" required="" rows="3"></textarea>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection