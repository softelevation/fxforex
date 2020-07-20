@include('admin.admin.header')


@include('admin.admin.sidebar')
<div class="content-body">

<div class="content-wrapper" style="min-height: 1200.88px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Client Listing</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Client Listing</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Client Listing</h3>
                    </div>
                    @if($message = Session::get('success'))
                      <div class="alert alert-success alert-block">
                          <button type="button" class="close" data-dismiss="alert">×</button>
                          <strong>{{ $message }}</strong>
                      </div>
                    @endif
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 col-md-6"></div>
                                <div class="col-sm-12 col-md-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example2" class="table table-bordered table-hover dataTable dtr-inline"
                                        role="grid" aria-describedby="example2_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example2"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Rendering engine: activate to sort column descending">
                                                    #</th>
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
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Platform(s): activate to sort column ascending">
                                                    Client Id</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1"
                                                    aria-label="CSS grade: activate to sort column ascending">Created On
                                                </th>

                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1"
                                                    aria-label="CSS grade: activate to sort column ascending">Status
                                                </th>
                                                
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                    colspan="1"
                                                    aria-label="CSS grade: activate to sort column ascending">Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php $no = 1; foreach($res as $key=>$val) { ?>
                                            <tr role="row">

                                                <td class="amount">{{$no}}</td>
                                                <td class="value">
                                                    <a href="{{ url('view_listing/' . $val->id )}}"> 
                                                        {{$val->name}} {{$val->second_name}}
                                                    </a>
                                                </td>
                                                <td class="details">{{$val->email}}</td>
                                                <td class="amount">{{$val->phone}}</td>
                                                <td class="amount">{{($val->m_id)?$val->m_id:'...'}}</td>
                                                <td class="amount">{{ date("Y-m-d",strtotime($val->created_at)) }}</td>
                                                <td class=" " >
                                                  <?php if ($val->status == '1') { ?> 
                                                      <a class="btn btn-success"  onclick="confirmModal(<?php echo $val->id; ?>,0);">Active</a>
                                                  <?php } else { ?>
                                                      <a class="btn btn-danger"   onclick="confirmModal(<?php echo $val->id; ?>,1);">InActive</a> 
                                                  <?php } ?>
                                              </td>
                                            <td class=" last">                                             
                                                <a class="fa fa-pencil" href="{{ url('users_listing/' . $val->id )}}"> Edit</a> &nbsp;                                               
                                                 <a class="fa fa-eye" href="{{ url('view_listing/' . $val->id )}}"> View</a>
                                            </td>
                                            </tr>
                                          <?php $no++; } ?>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>


@include('admin.admin.footer')

<link rel="stylesheet" href="{{ asset('assets/adminpanel/assets/plugins/sweetalert/sweetalert.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="{{ asset('assets/adminpanel/assets/plugins/sweetalert/sweetalert.min.js') }}"></script>

<script>
     function confirmModal(id,status){
        swal({
            title: "Are you sure?",
            text: "Are you shure want to change the status.",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#dc3545",
            confirmButtonText: "Submit",
            cancelButtonText: "No, cancel please!",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm){
            if (isConfirm) {
                submitForm(id,status); 
            } else {
                swal("Cancelled", "Your Request Is Cancelled.. :)", "error");
            }
        });
    }

    function submitForm(id,status){
        window.location.href =  'listactive/'+id+'/'+status;
    }
</script>