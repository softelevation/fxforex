@include('admin.admin.header')


@include('admin.admin.sidebar')
<?php //dd($res->id);?>
<div class="content-body">

    <div class="content-wrapper" style="min-height: 1416.81px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Agent</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Agent Profile</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="row  align-items-center justify-content-center">
                    <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">

                                    <!-- Profile Image -->
                                    <div class="card card-primary card-outline">
                                        <div class="card-body box-profile">
                                            <div class="text-center">

                                                <img class="profile-user-img img-fluid img-circle"
                                                    src="https://previews.123rf.com/images/pandavector/pandavector1901/pandavector190105561/126045782-vector-illustration-of-avatar-and-dummy-sign-collection-of-avatar-and-image-stock-symbol-for-web-.jpg"
                                                    alt="User profile picture" style="width:50%;">
                                            </div>

                                           
                                             <h3 class="profile-username text-center">{{$res->first_name}} {{$res->last_name}}</h3>
                                           
                                            <p class="text-muted text-center">{{$res->role}}</p>

                                            <ul class="list-group list-group-unbordered mb-3">
                                                <li class="list-group-item">
                                                    <b>Email</b> <a class="float-right">{{$res->email}}</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>Phone</b> <a class="float-right">{{$res->phone}}</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <b>Status</b> <a
                                                        class="float-right">
                                                       <strong> {{($res->status)?'Active':'InActive'}} </strong> 
                                                        </a>
                                                </li>

                                                </li>

                                            </ul>

                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->


                                </div>
                                <!-- /.col -->
                                <div class="col-md-8">
                                    <div class="col-md-12">

                                        <!-- Profile Image -->
                                        <div class="card card-primary card-outline">
                                            <div class="card-body box-profile">
                                            <b>Assigned Clients List</b> <br /> <br />

                                            <table id="example2" class="table table-bordered table-hover dataTable dtr-inline"
                                                role="grid" aria-describedby="example2_info">
                                                <thead>
                                                    <tr role="row">
                                                      
                                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                            colspan="1" aria-label="Browser: activate to sort column ascending">
                                                            Name</th>
                                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Platform(s): activate to sort column ascending">
                                                            Email</th>
                                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                            colspan="1"
                                                            aria-label="Engine version: activate to sort column ascending">
                                                            Phone</th>
                                                    </tr>
                                                </thead>
                                                <tbody>    
                                                    <?php if(@$res->id) foreach(get_assigned_client(@$res->id) as $val) { 
                                                            if($val != null){
                                                        ?>                                               
                                                        <tr role="row">
                                                            <td class="amount">
                                                            <a href="/view_listing/{{$val->id}}">
                                                                {{$val->name}} {{$val->second_name}}
                                                            </a>
                                                            </td>
                                                            <td class="amount">{{$val->email}}</td>
                                                            <td class="amount">{{$val->phone}}</td>
                                                        </tr>
                                                     
                                                    <?php } } ?>
                                                </tbody>

                                            </table>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->

                                    </div>

                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </section>

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->


        </section>
        <!-- /.content -->
    </div>

    @include('admin.admin.footer')

    <style>
    div.container-fluid {
        margin-top: 0px;
    }
    </style>