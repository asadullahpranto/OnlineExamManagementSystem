
	@extends('student.master')

	@section('content')


		<!-- Navbar End Hare -->
		<hr style="border-color: mediumseagreen;">

		<div class="container">
			<div class="row">
				<div class="col-3 col-sm-5 col-xs-6 col-md-3 rounded-left bg-info">
					<ul class="list-unstyled mt-5">
						<li>
							<a href="{{route('studentDash')}}" class="text-white" style="text-decoration: none;"><i class="fas fa-home"></i> DASHBOARD</a>
						</li><hr style="border-color: white;">
						<li>
							<a href="#" class="text-white dropdown-toggle" data-toggle="dropdown" rule="button" style="text-decoration: none;"><i class="fas fa-graduation-cap"></i> EXAMS</a>
							<ul class="dropdown-menu bg-success">
								<li class="dropdown-item"><a href="{{route('examlist')}}" class="dropdown-link text-white" style="text-decoration: none;">Exam List</a></li>
								<li class="dropdown-item"><a href="{{route('examresult')}}" class="dropdown-link text-white" style="text-decoration: none;">Exam Result</a></li>
							</ul>

						</li><hr style="border-color: white;">
						<li>
							<a href="#" class="text-white dropdown-toggle" data-toggle="dropdown" rule="button" style="text-decoration: none;"><i class="fab fa-accusoft"></i> HOME WORK</a>

							<ul class="dropdown-menu bg-success">
								<li class="dropdown-item"><a href="{{route('homeworklist')}}" class="dropdown-link text-white" style="text-decoration: none;">Homework List</a></li>
								<li class="dropdown-item"><a href="{{route('homeworkresult')}}" class="dropdown-link text-white" style="text-decoration: none;">Homework Result</a></li>
							</ul>
						</li>
					</ul>
				</div>

				<div class="col-9 col-sm-7  col-xs-6 col-md-9 rounded-right" style="background-color: #cfd8dc;">

					<div class="mt-3">
						<h6 class="text-primary">Home / <span class="text-white">Exam result</h6>
						<hr>
					</div>

					<div>
						<h3 class="text-info">Exam Result</h3>
					</div>

					<!--Table -->

					<table class="table table-responsive-sm table-responsive-md table-striped table-bordered table-hover">
						<thead class="table-success">
							<tr>
								<th>No.</th>
								<th>Exam Title</th>
								<th>Date</th>
								<th>Exam Time</th>
								<th>Total Marks</th>
								<th>Rank</th>
							</tr>
						</thead>

						<tbody>
							@php $i=1 @endphp
							@foreach($es as $e)
							<tr>
								<td scope="row">{{$i}}</td>
								<td>{{$e->examtitle}}</td>
								<td>{{$e->examdate}}</td>
								<td>{{$e->examtime}}</td>
								<td>{{$e->marks}}</td>
								<td><a href="/view-rank/{{$e->id}}">View</a> </td>
							</tr>
							@php $i++ @endphp
							@endforeach

						</tbody>
					</table><hr><br><br><br>

				</div>

			</div>
		</div>

	</div>

	@endsection
