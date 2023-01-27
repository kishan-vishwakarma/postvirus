@extends('layouts.layout')
@section('title','table')
@section('content')

<div class="main-content horizontal-content">

<!--div-->
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
											<th class="wd-25p border-bottom-0">action</th>


										</tr>
									</thead>
									<tbody>
										<tr>
											@foreach($student as $stu)
											<td>{{ $stu->id }}</td>
											<td>{{ $stu->name }}</td>
											<td>{{ $stu->email }}</td>
											<td>{{ $stu->password }}</td>
											<td>{{ $stu->dob }}</td>
											<td>{{ $stu->gender }}</td>
											<td>{{ $stu->martial_status }}</td>
											<td>{{ $stu->photo }}</td>
											<td>{{ $stu->video }}</td>
											<td><a href="#">Edit</a>|<a href="#">Delete</a></td>
											@endforeach
										</tr>
									</tbody>
								</table>
							</div>
						</div><!-- bd -->
					</div><!-- bd -->
				</div>
				<!--/div-->
</div>


@endsection()