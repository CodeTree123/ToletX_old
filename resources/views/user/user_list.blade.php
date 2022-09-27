
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>toletx</title>

	@include('Dashboard.css.css')

	@include('Dashboard.preloader.preloader')

	@include('Dashboard.header.header')
	@include('Dashboard.menubar.menubar')

	@include('Dashboard.menubar.leftsidemenu')


	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>User Details</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">List user</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<!-- basic table  Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue h4">List Table</h4>

						</div>

					</div>
					<table id="tblStocks" class="table">
						<thead>
							<tr>
                <th scope="col">Id</th>
                <th scope="col">User Name</th>
								<th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">nationality</th>
                <th scope="col">Date of birth</th>
                <th scope="col">Father name</th>
                <th scope="col">Mother name</th>
                <th scope="col">Gender</th>
                <th scope="col">Profile Pic</th>
                <th scope="col">Action</th>


							</tr>
						</thead>
						<tbody>
              @foreach($users as $list)
              <tr>
                <th scope="row">{{$list->id}}</th>
                <th scope="row">{{$list->name}}</th>
								<td>{{$list->email}}</td>
                <td>{{$list->address}}</td>
                <td>{{$list->nationality}}</td>
                <td>{{$list->date_of_birth}}</td>
                <td>{{$list->father_name}}</td>
                <td>{{$list->mother_name}}</td>
                <td>{{$list->gender}}</td>
                <td>
                <img src="{{ asset('uploads/auth') }}/{{ $list->n_photo }}" alt="">
                </td>
                <td>
                  <a href="{{ url('/user/edit') }}/{{ $list->id }}" class=" btn-sm btn-primary">Edit</a>
                </td>
              </tr>
          @endforeach

						</tbody>
					</table>

      	</div>
				<!-- basic table  End -->


				</div>
				<!-- Contextual classes End -->
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				toletx By <a href="https://codetreebd.com" target="_blank">codetree</a>
			</div>
		</div>
	</div>
	<!-- js -->
    @include('Dashboard.js.js')
</body>
</html>
