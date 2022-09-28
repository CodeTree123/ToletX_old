<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>toletx</title>

    @include('Dashboard.css.css')



    @include('Dashboard.header.header')
    @include('Dashboard.menubar.menubar')

    @include('Dashboard.menubar.leftsidemenu')


    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <!-- basic table  Start -->
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix mb-20">
                        <div class="pull-left">
                            <h4 class="text-blue h4">User List Table</h4>
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
                                <th scope="col">verify</th>
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
                                    <img  style="width: 100px;" src="{{ asset('uploads/registers/'.$list->photo ) }}" alt="image">
                                </td>
                                <td>
                                @if($list->admin_verify == "1")
                                    <a class="btn btn-sm btn-primary" href="{{route('admin_verify',[$list->id])}}" role="button">Approved</a>
                                    @else
                                    <a class="btn btn-sm btn-primary" href="{{route('admin_verify',[$list->id])}}" role="button">pending</a>
                                @endif
                                </td>
                                <td>
                                    <a href="{{route('delete.user',$list->id)}}" class=" btn-sm btn-primary">Delete</a>
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
