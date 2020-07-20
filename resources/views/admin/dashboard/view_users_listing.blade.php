@include('admin.admin.header')


@include('admin.admin.sidebar')
<div class="content-body">

<div class="content-wrapper" style="min-height: 1416.81px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
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
               
                  <img class="profile-user-img img-fluid img-circle" src="https://previews.123rf.com/images/pandavector/pandavector1901/pandavector190105561/126045782-vector-illustration-of-avatar-and-dummy-sign-collection-of-avatar-and-image-stock-symbol-for-web-.jpg"  alt="User profile picture" style="width:50%;">
                </div>

                <h3 class="profile-username text-center">{{$res->name}}</h3>

                <p class="text-muted text-center">{{$res->role}}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right">{{$res->email}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Phone</b> <a class="float-right">{{$res->phone}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Status</b> <a class="float-right">{{($res->status)?'Active':'InActive'}}</a>
                  </li>

                
                  <li class="list-group-item">
                    <b>Gender</b> 
                    <a class="float-right">{{($res->gender == 1)?'Male': (($res->do_not_call == 2)  ? "Female" : "") }}</a>
                  </li>

                  <li class="list-group-item">
                    <b>Dob</b> <a class="float-right">{{($res->dob)?$res->dob:''}}</a>
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
              <ul class="list-group list-group-unbordered mb-3">

                <li class="list-group-item">
                  <b>Other Email</b> <a class="float-right">{{($res->other_email)?$res->other_email:''}}</a>
                </li>

                <li class="list-group-item">
                  <b>Client Status</b> <a class="float-right">{{($res->client_status)?$res->client_status:''}}</a>
                </li>

                <li class="list-group-item">
                  <b>Base Currency</b> <a class="float-right">{{($res->base_currency)?$res->base_currency:''}}</a>
                </li>

                <li class="list-group-item">
                  <b>Lead Exist</b> <a class="float-right">{{($res->lead_exist)?$res->lead_exist:''}}</a>
                </li>

                <li class="list-group-item">
                  <b>Citizenship</b> <a class="float-right">
                    <?php if(isset($res->citizenship) && !empty($res->citizenship)) {
                      $get_country = getCountryByid($res->citizenship);  
                    ?>
                        {{$get_country->name}}
                    <?php } ?>
                  </a>
                </li>

                <li class="list-group-item">
                  <b>Clinet state</b> <a class="float-right">{{($res->client_state)?$res->client_state:''}}</a>
                </li>

                <li class="list-group-item">
                  <b>Language</b> <a class="float-right">
                    {{($res->language)?$res->language:''}}
                  </a>
                </li>

                <li class="list-group-item">
                  <b>Prtal User Id</b> <a class="float-right">{{($res->portal_user_id)?$res->portal_user_id:''}}</a>
                </li>

                <li class="list-group-item">
                  <b>Crm Id</b> <a class="float-right">{{($res->m_id)?$res->m_id:''}}</a>
                </li>

                <li class="list-group-item">
                  <b>Do Not Call</b> <a class="float-right">{{($res->do_not_call == 1)?'Yes': (($res->do_not_call == 2)  ? "NO" : "") }}</a>
                </li>

                <li class="list-group-item">
                  <b>Do Not Sms</b> <a class="float-right">{{($res->do_not_sms == 1)?'Yes': (($res->do_not_sms == 2)  ? "NO" : "") }}</a>
                </li>

                <li class="list-group-item">
                  <b>Do Not Email</b> <a class="float-right">{{($res->do_not_email == 1)?'Yes': (($res->do_not_email == 2)  ? "NO" : "") }}</a>
                </li>

              </ul>

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