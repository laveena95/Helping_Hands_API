@extends('layouts.team')
@section('title','My Details')

@section('content')
<section class="wrapper">
    <h3><i class="fa fa-building"></i> <b>Organization/Team</b> <i class="fa fa-angle-right"></i> <i class="fa fa-plus"></i> <b>@yield ('title')</b></h3>
    <!-- BASIC FORM ELELEMNTS -->
    <div class="row mt">
        <div class="col-lg-12">
        <div class="form-panel">
        <br>
          @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
          @endif
            <h4 class="mb"><i class="fa fa-pencil-square-o"></i> <span> </span> <b>Organization/Team Details</b></h4>
            <form class="form-horizontal style-form" method="POST" action="/users" autocomplete="off">
            {{csrf_field()}}
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-building"></i><span> </span>Name</label>
                <div class="col-sm-6">
                    <input type="text" name="name" class="form-control round-form">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-map-marker"></i><span> </span> Address</label>
                <div class="col-sm-3">
                    <textarea name="lane" class="form-control round-form" placeholder="Your lane with no"></textarea>
                </div>
                <div class="col-md-2">
                    <select class="form-control" name="city">
                        <option selected disabled>City</option>
                        <option value='1'>Student</option>
                        <option value="2">Coordinator</option>
                        <option value="3">Recruiter</option>
                        <option value='4'>Admin</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="form-control" name="state">
                        <option selected disabled>State/Province</option>
                        <option value='1'>Student</option>
                        <option value="2">Coordinator</option>
                        <option value="3">Recruiter</option>
                        <option value='4'>Admin</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="form-control" name="country">
                        <option selected disabled>Country</option>
                        <option value='1'>Student</option>
                        <option value="2">Coordinator</option>
                        <option value="3">Recruiter</option>
                        <option value='4'>Admin</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                  <label class="control-label col-md-3"><i class="fa fa-clock-o"></i> <span> </span> Active From</label>
                  <div class="col-md-4">
                  <input type="date" name="startup" class="form-control round-form">
                  </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><b><i class="fa fa-code"></i></b><span> </span> Service Area(s)</label>
                <div class="col-md-3">
                    <select multiple class="form-control" name="city">
                        <option selected disabled>Select from City</option>
                        <option value='1'>Student</option>
                        <option value="2">Coordinator</option>
                        <option value="3">Recruiter</option>
                        <option value='4'>Admin</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select multiple class="form-control" name="state">
                        <option selected disabled>Select from State/ Province</option>
                        <option value='1'>Student</option>
                        <option value="2">Coordinator</option>
                        <option value="3">Recruiter</option>
                        <option value='4'>Admin</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select multiple class="form-control" name="country">
                        <option selected disabled>Select from Country</option>
                        <option value='1'>Student</option>
                        <option value="2">Coordinator</option>
                        <option value="3">Recruiter</option>
                        <option value='4'>Admin</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-trophy"></i><span> </span> Recent Services </label>
                <div class="col-sm-8">
                <textarea class="form-control round-form" id="focusedInput" type="text" name="achievement" placeholder="Mention only your last/popular 3 activities"></textarea>
                </div>
            </div>      
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-phone"></i><span> </span> Contact No</label>
                <div class="col-sm-4">
                    <input type="text" name="phone" class="form-control round-form" placeholder="Phone">
                </div>
                <div class="col-sm-4">
                    <input type="text" name="mobile" class="form-control round-form" placeholder="Mobile">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-envelope"></i><span> </span> Email</label>
                <div class="col-sm-8">
                    <input type="email" name="email" class="form-control round-form" placeholder="mail@example.com">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-desktop"></i><span> </span> Official Website (if any)</label>
                <div class="col-sm-8">
                    <input type="text" name="website" class="form-control round-form" placeholder="www.example.com">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label"><i class="fa fa-file"></i><span> </span> Certified copy of your registered team/organization</label>
                <div class="col-sm-8">
                    <input type="file" class="form-control round-form" name="proof" required="">
                </div>
            </div>
           
            <div class="form-send">
                <button type="submit" class="btn btn-large btn-danger" style="margin-left: 60%;">SUBMIT</button>
            </div>

              </form>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
           
            </form>
        </div>
        </div>
        <!-- col-lg-12-->
    </div>
    <!-- /row -->
  
</section> 
@endsection