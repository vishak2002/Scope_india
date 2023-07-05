@extends('layout')
@section('content')

 <!-- Header Start -->
 <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Change Password</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">student dashboard</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

               <div class="col-lg-5 m-auto">
                    <div class="card border-0">
                        <div class="card-header bg-light text-center p-4">
                            <h1 class="m-0">change password</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Existing password" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4" placeholder="New Password" required="required" />
                                </div>
                                <div>
                                    <button class="btn btn-dark btn-block border-0 py-3" type="submit">Save</button>
                                    <!-- <button class="btn btn-dark btn-block border-0 py-3" type="submit">Forgot Password</button> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                                @endsection