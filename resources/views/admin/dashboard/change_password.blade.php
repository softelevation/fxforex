@include('admin.admin.header')
@include('admin.admin.sidebar')

    <div class="content-body">
        <div class="content-wrapper">

            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Change Password</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active">Change Password</li>
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
                        <div class="card-header">Change Your Password</div>
        
                        <div class="card-body">
                            <form method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label for="old_password" class="col-md-2 col-form-label">{{ __('Current password') }}</label>
                                    <div class="col-md-6">
                                        <input id="old_password" name="old_password" type="password" class="form-control" required autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="new_password" class="col-md-2 col-form-label">{{ __('New password') }}</label>
                                    <div class="col-md-6">
                                        <input id="new_password" name="new_password" type="password" class="form-control" required autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password_confirm" class="col-md-2 col-form-label">{{ __('Confirm password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password_confirm" name="password_confirm" type="password" class="form-control" required
                                            autofocus>
                                    </div>
                                </div>
                                <div class="form-group login-row row mb-0">
                                    <div class="col-md-8 offset-md-2">
                                        <button type="submit" class="btn button btn-hover btn-flat">
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
 