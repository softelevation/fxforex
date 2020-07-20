@include('admin.admin.header')
@include('admin.admin.sidebar')
<?php 
    if(@$res->id){
        $assinged_client =  get_assigned_client(@$res->id);
    }
?>
    <div class="content-body">
        <div class="content-wrapper">

            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Add Agent</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active">Add Agent</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
 
            <div class="content">
                <div class="row">
                    <div class="card col-12">
                        <div class="card-header">Add New Agent</div>
        
                        <div class="card-body">
                            <form method="POST" id="agent_form">
                                @csrf
                                @method('PUT')
                                <div class="form-row">
                                    <div class="col-lg-6 m-b-30">
                                        <h6>First Name</h6>
                                        <input type="text" class="form-control error-class" placeholder="First name" name="first_name" value="<?php echo (isset($res->first_name) && $res->first_name)?$res->first_name:''; ?>" >
                                    </div>
                                 
                                    <div class="col-lg-6 m-b-30">
                                        <h6>Last Name</h6>
                                        <input type="text" class="form-control error-class" placeholder="First name" name="last_name"  value="<?php echo (isset($res->last_name) && $res->last_name)?$res->last_name:''; ?>">
                                    </div>
                                 
                                    <div class="col-lg-6 m-b-30">
                                        <h6>Phone</h6>
                                        <input type="number" class="form-control error-class" placeholder="Phone" name="phone" value="<?php echo (isset($res->phone) && $res->phone)?$res->phone:''; ?>">
                                    </div>

                                    <div class="col-lg-6 m-b-30">
                                        <h6>Email</h6>
                                        <input type="email" class="form-control error-class" placeholder="Email" name="email" value="<?php echo (isset($res->email) && $res->email)?$res->email:''; ?>">
                                    </div>

                                    <div class="col-lg-6 m-b-30">
                                        <h6>Select Clients</h6>
                                        <select name="client_id[]" multiple="multiple"  class="form-control error-class js-example-placeholder-single js-states" id="select_client" >
                                            
                                            <?php 
                                             foreach(get_agent() as $key=>$val){ ?>
                                                <option value="{{$val->id}}" 
                                                    <?php if(@$assinged_client)
                                                    foreach($assinged_client as $re){
                                                            echo ($re->id == $val->id)?'selected':'';
                                                        }
                                                    ?>
                                                >
                                                    {{$val->name}} {{$val->second_name}} ({{$val->email}})
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                </div>


                                <div class="form-group login-row row mb-0">
                                    <div class="col-md-8 offset-md-2">
                                        <button type="button" onClick="submitForm();" class="btn button btn-hover btn-flat">
                                            {{ __('Submit') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@include('admin.admin.footer')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#select_client').select2({
            placeholder: "Select Client",
            multiple: true,
            tags: true,
            tokenSeparators: [',', ' '],
            allowClear: true
        });
    });

    function submitForm(){
        var check = true;
        $('.error-class').each(function(){
            if($(this).val() == ""){
                $(this).css('border-color','red');
                check =false;
                return false;
            }
        });
        if(check){
            $('#agent_form').submit();
        }
    }
</script>