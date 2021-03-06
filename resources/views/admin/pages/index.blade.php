@extends('layouts.main')

@section('title', 'Home')

@section('content')


<div id="page-content">
    <!-- Breadcrumb -->
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Account</a></li>
            <li class="active">Profile</li>
        </ol>
    </div>
    <!-- end Breadcrumb -->

    <div class="container">
        <div class="row">
            <!-- sidebar -->
            <div class="col-md-3 col-sm-2">
                @include('layouts.partials.aside')
            </div><!-- /.col-md-3 -->
            <!-- end Sidebar -->
            <!-- My Properties -->
            <div class="col-md-9 col-sm-10">
                <section id="profile">
                    <header>
                        <h1>Profile</h1>
                    </header>
                    <div class="account-profile">
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <img alt="" class="image" src="assets/img/agent-01.jpg">
                            </div>
                            <div class="col-md-9 col-sm-9">
                                <form role="form" id="form-account-profile" method="post" action="{{ route('update.profile') }}">
                                    <div class="checkbox switch" id="agent-switch" data-agent-state="is-agent">
                                        <!-- <label>
                                            I am an agent<input type="checkbox">
                                        </label> -->
                                    </div>
                                    <!-- <section id="agency">
                                        <h3>My Agency</h3>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4">
                                                <label for="account-agency">Select your agency:</label>
                                            </div>
                                            <div class="col-md-8 col-sm-8">
                                                <div class="form-group">
                                                    <select name="account-agency" id="account-agency">
                                                        <option value="">Agency</option>
                                                        <option value="1">Estate+</option>
                                                        <option value="2">Northfolk Eastate</option>
                                                        <option value="3">Maximum Properties</option>
                                                        <option value="4">Edd's Homes</option>
                                                        <option value="5">Will & Scotch</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </section> -->
                                    <section id="contact">
                                            @csrf
                                            <h3>Contact</h3>
                                            <dl class="contact-fields">
                                             <dt><label for="email">Email:</label></dt>
                                                <dd>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="email"
                                                            name="email" value="{{$user->email}}" readonly>
                                                    </div><!-- /.form-group -->
                                                </dd>
                                                <dt><label for="name">Your Name:</label></dt>
                                                <dd>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="name"
                                                            name="name" required
                                                            value="{{$user->getName()}}">
                                                    </div><!-- /.form-group -->
                                                </dd>
                                                <dt><label for="form-account-skype">Address:</label></dt>
                                                <dd>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="form-account-skype"
                                                            name="address" value="{{$user->address}}">
                                                    </div><!-- /.form-group -->
                                                </dd>
                                                <dt><label for="form-account-phone">Mobile Phone:</label></dt>
                                                <dd>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="form-account-phone"
                                                            name="mobilephone" value="{{$user->mobilephone}}">
                                                    </div><!-- /.form-group -->
                                                </dd>
                                                <dt><label for="form-account-phone">Home Phone (optional):</label></dt>
                                                <dd>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="form-account-phone"
                                                            name="homephone" value="{{$user->homephone}}">
                                                    </div><!-- /.form-group -->
                                                </dd>
                                            </dl>
                                            <div class="form-group clearfix">
                                            <button type="submit" class="btn btn-default"
                                                        id="form-account-profile">Update Profile</button>
                                                </div><!-- /.form-group --> 
                                    </section>
                                    <!-- <section id="about-me">
                                        <h3>About Me</h3>
                                        <div class="form-group">
                                            <textarea class="form-control" id="form-contact-agent-message" rows="5"
                                                name="form-contact-agent-message">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus.
Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum.</textarea>
                                        </div>
                                    </section> -->
                                    <!-- <section id="social">
                                        <h3>My Social Network</h3>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                                                <input type="text" class="form-control" id="account-social-twitter"
                                                    name="account-social-twitter">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                                                <input type="text" class="form-control" id="account-social-facebook"
                                                    name="account-social-facebook">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-pinterest"></i></span>
                                                <input type="text" class="form-control" id="account-social-pinterest"
                                                    name="account-social-pinterest">
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <button type="submit" class="btn pull-right btn-default"
                                                id="account-submit">Save Changes</button>
                                        </div>
                                    </section> -->
                                </form><!-- /#form-contact -->
                                <br>
                                <section id="change-password">
                                    <header>
                                        <h2>Change Your Password</h2>
                                    </header>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <form role="form" id="form-account-password" method="post" action="{{ route('update.password') }}">
                                            @csrf
                                                <div class="form-group">
                                                    <label for="form-account-password-current">Current Password</label>
                                                    <input type="password" class="form-control"
                                                        id="password"
                                                        name="current_password">
                                                </div><!-- /.form-group -->
                                                <div class="form-group">
                                                    <label for="form-account-password-new">New Password</label>
                                                    <input type="password" class="form-control"
                                                        id="new_password" name="new_password">
                                                </div><!-- /.form-group -->
                                                <div class="form-group">
                                                    <label for="form-account-password-confirm-new">Confirm New
                                                        Password</label>
                                                    <input type="password" class="form-control"
                                                        id="new_confirm_password"
                                                        name="new_confirm_password">
                                                </div><!-- /.form-group -->
                                                <div class="form-group clearfix">
                                                    <button type="submit" class="btn btn-default"
                                                        id="form-account-password-submit">Change Password</button>
                                                </div><!-- /.form-group -->
                                            </form><!-- /#form-account-password -->
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <strong>Hint:</strong>
                                            <p>Fill your current password then fill your new password and confirm it.
                                            </p>
                                        </div>
                                    </div>
                                </section>
                                <br>
                            </div><!-- /.col-md-9 -->
                        </div><!-- /.row -->
                    </div><!-- /.account-profile -->
                </section><!-- /#profile -->
            </div><!-- /.col-md-9 -->
            <!-- end My Properties -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->

@endsection