@include('admin.common.header')

<div class="my-account-page">
    <div class="container">
        <div class="row">
          @include('../client_view.leftsidebar')
            <div class="col-md-9">
                <div class="ContentPanel">
                    <div class="account_steps">                       
                        <div class="account_steps_tab span4 current"> <span class="step_n">1</span> <span
                                class="step_name">Personal<br>
                                Details</span> </div>
                        <!-- <div class="account_steps_tab span4"> <span class="step_n">3</span> <span
                                class="step_name">Make<br>
                                Deposit</span> </div> -->
                        <hr class="hr_wide_top">
                    </div>

                    <h3>Personal Details</h3>

                    <form class="content-panel-form">
                        <div class="form-group">
                            <label><span class="req_a"> * </span> Date of Birth:</label>
                            <select class="form-control " id="date">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>

                            <select class="form-control" id="month">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                            <select class="form-control" id="year">
                                <option>1970</option>
                                <option>1971</option>
                                <option>1972</option>
                                <option>1973</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label><span class="req_a"> * </span> Address:</label>
                            <input type="text" class="form-control" id="address" placeholder="Furutavag 21A">

                        </div>

                        <div class="form-group">
                            <label><span class="req_a"> * </span> City:</label>
                            <input type="text" class="form-control" id="city" placeholder="Vaxjo">

                        </div>

                        <div class="form-group">
                            <label><span class="req_a"> * </span> Postal / Zip Code:</label>
                            <input type="text" class="form-control" id="zip" placeholder="35254">
                        </div>

                        <div class="form-group">
                            <label><span class="req_a"> * </span> Account Currency:</label>
                            <select class="form-control" id="ddlCurrency">
                                <option>EUR</option>
                                <option>GBP</option>
                            </select>

                        </div>
                       
                        <div class="form-group">
                            <label><span class="req_a"> * </span> Deposite Amount:</label>
                            <input type="number" onChange="checkValue(this);" min="200" value="200" class="form-control" id="deposite" placeholder="Deposite Amount">
                        </div>

                        <a class="form-button" href="#">Continue </a>
                        </a>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>



@include('admin.common.footer')

<script>
  function checkValue(res){
    if(res.value < 200){
      res.value = 200;
    }
  }
</script>
