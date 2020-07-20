@include('admin.admin.header')
@include('admin.admin.sidebar')


<div class="content-body">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">    
          <div class="col-sm-6">
            <h1>Edit Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section> 

      @if(Session::has('Success'))
        <p class="alert alert-info">{{ Session::get('Success') }}</p>
      @endif
    
        <div class="forms-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="accordion table-data">
                            <div class="card rounded-0">
                              
                                <div id="basic-form" class="collapse show">
                                    <div class="card-body">
                                        <form>
                                            <div class="form-row">
                                                <div class="col-lg-6 m-b-30">
                                                    <label>First Name</label>
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                                    value="<?php echo (isset($res->name) && !empty($res->name)?$res->name:'')?>">
                                                </div>

                                                <div class="col-lg-6 m-b-30">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control" id="second_name" name="second_name" placeholder="Second Name" value="<?php echo (isset($res->second_name) && !empty($res->second_name)?$res->second_name:'')?>">
                                                </div>

                                                <div class="col-lg-6 m-b-30">
                                                    <label>Phone</label>
                                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="phone"
                                                    value="<?php echo (isset($res->phone) && !empty($res->name)?$res->phone:'')?>">
                                                </div>

                                                <div class="col-lg-6 m-b-30">
                                                    <label>Email address</label>
                                                    <input disabled type="text" class="form-control" id="email" name="email" placeholder="Email"
                                                    value="<?php echo (isset($res->email) && !empty($res->email)?$res->email:'')?>">
                                                </div>

                                                <div class="col-lg-6 m-b-30">
                                                    <label>Other Email Address</label>
                                                    <input type="text" class="form-control" id="other_email" name="other_email" placeholder="Other Email Address"
                                                    value="<?php echo (isset($res->other_email) && !empty($res->other_email)?$res->other_email:'')?>">
                                                </div>

                                                <div class="col-lg-6 m-b-30">
                                                    <label>Dob</label>
                                                    <input type="date" class="form-control" id="dob" name="dob" placeholder="Dob"
                                                    value="<?php echo (isset($res->dob) && !empty($res->dob)?$res->dob:'')?>">
                                                </div>

                                                <div class="col-lg-6 m-b-30">
                                                    <label>Select Gender</label>
                                                    <select class="form-control " name="gender">
                                                          <option value="0">Select Gerder</option>        
                                                          <option value="1" <?php echo (@$res->gender == 1) ?'selected':''; ?>>Male</option>
                                                          <option value="2" <?php echo (@$res->gender == 2) ?'selected':''; ?>>Female</option>
                                                    </select>
                                                </div>
                                
                                                <div class="col-lg-6 m-b-30">
                                                    <label>Select Country</label>
                                                    <select class="form-control " name="citizenship">
                                                       <option value="">Select Country</option>
                                                        <?php foreach(getCountry() as $key=>$val) {?>
                                                            <option value="<?php echo $val->code; ?>" <?php echo (@$val->code == @$res->citizenship) ?'selected':''; ?> ><?php echo $val->name; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>

                                                <div class="col-lg-6 m-b-30">
                                                    <label>Don Not Call</label>
                                                    <select class="form-control " name="do_not_call">
                                                        <option value="0">Do Not Call</option>        
                                                        <option value="1" <?php echo (@$res->do_not_call == 1) ?'selected':''; ?>>YES</option>
                                                        <option value="2" <?php echo (@$res->do_not_call == 2) ?'selected':''; ?>>NO</option>
                                                    </select>
                                                </div>

                                                <div class="col-lg-6 m-b-30">
                                                    <label>Do Not Sms</label>
                                                    <select class="form-control " name="do_not_sms">
                                                        <option value="0">Do Not Sms</option>        
                                                        <option value="1" <?php echo (@$res->do_not_sms == 1) ?'selected':''; ?>>YES</option>
                                                        <option value="2" <?php echo (@$res->do_not_sms == 2) ?'selected':''; ?>>NO</option>
                                                    </select>
                                                </div>

                                                <div class="col-lg-6 m-b-30">
                                                    <label>Do Not Email</label>
                                                    <select class="form-control " name="do_not_email">
                                                        <option value="0">Do Not Email</option>        
                                                        <option value="1" <?php echo (@$res->do_not_email == 1) ?'selected':''; ?>>YES</option>
                                                        <option value="2" <?php echo (@$res->do_not_email == 2) ?'selected':''; ?>>NO</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <input type="hidden" value="{{$res->id}}" name="update_users"> 
                                            <div class="box-footer">
                                              <button type="submit" class="btn button btn-hover btn-flat">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@include('admin.admin.footer')
 