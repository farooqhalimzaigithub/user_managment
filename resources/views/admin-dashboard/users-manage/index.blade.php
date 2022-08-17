@extends('admin-dashboard.layouts.master')
@section('content')
<!--  <div class="row">
          <div class="col-md-6">
            <div class="card">
              <form class="form-horizontal">
                <div class="card-body">
                  <h4 class="card-title">User Info</h4>
                  <div class="row ">
                  <div class="col-lg-6">
                     <label
                      for="skill name"
                      class=" text-end control-label col-form-label">Skill Name</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="col-md-6"
                    />
                  </div>
                  <div class="col-lg-6">
                    <label
                      for="skill name"
                      class=" text-end control-label col-form-label">Skill Name</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="col-md-6"
                    />
                  </div>
                </div>
                   <div class="row ">
                  <div class="col-lg-6">
                     <label
                      for="skill name"
                      class=" text-end control-label col-form-label">Skill Name</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="col-md-6"
                    />
                  </div>
                  <div class="col-lg-6">
                    <label
                      for="skill name"
                      class=" text-end control-label col-form-label">Skill Name</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="col-md-6"
                    />
                  </div>
                </div>
                <div class="border-top">
                  <div class="card-body">
                    <button type="button" class="btn btn-primary">
                      Submit
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          
        </div> -->
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              
                <div class="card-body">
                  <h4 class="card-title">Image </h4>
                </div>
                
             
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title mb-0">Form Elements</h5>
               <form class="form-horizontal" action="{{url('users')}}" method="POST">
                @csrf
                <div class="card-body">
                  <h4 class="card-title">User Info</h4>
                <div class="row ">
                  <div class="col-lg-6">
                     <label
                      for="name"
                      class=" text-end control-label col-form-label"> Name</label>
                    <input
                      type="text" class="form-control"  name="name"/>
                  </div>
                  <div class="col-lg-6">
                    <label
                      for="email"
                      class=" text-end control-label col-form-label">email</label>
                    <input type="email" name="email" class="form-control" />
                  </div>
                </div>
                <div class="row ">
                  <div class="col-lg-6">
                     <label
                      for="password" class=" text-end control-label col-form-label">Passwaord</label>
                    <input
                      type="password" class="form-control" name="password"  />
                  </div>
                   <div class="col-lg-6">
                     <label
                      for="password" class=" text-end control-label col-form-label">Confirm Passwaord</label>
                    <input
                      type="password" class="form-control" name="password_confirmation""  />
                  </div>
                  <div class="col-lg-6">
                    <label
                      for="code"
                      class=" text-end control-label col-form-label">Code</label>
                    <input
                      type="number" class="form-control" name="code"  />
                  </div>
                </div>
                 <hr>
                  <h4 class="card-title">User Profile</h4>
                  <div class="row ">
                  
                  <div class="col-lg-6">
                     <label
                      for="city"
                      class=" text-end control-label col-form-label">City</label>
                    <input type="text" class="form-control" name="city"/>
                  </div>
                  <div class="col-lg-6">
                    <label
                      for="dob"
                      class=" text-end control-label col-form-label">Date of Birth</label>
                    <input type="date" class="form-control" name="dob" />
                  </div>
                </div>
                   <div class="row ">
                 <div class="col-lg-6">
                     <label
                      for="image"
                      class=" text-end control-label col-form-label">Image</label>
                    <input type="file" name="avatar" class="form-control"  />
                  </div>
                  <div class="col-lg-6">
                    <label
                      for="address" class=" text-end control-label col-form-label">Address</label>
                    <input type="text" class="form-control" name="address" />
                  </div>
                </div>
               
                 
                <div class="row ">
                <div class="col-lg-12">
                    <label
                      for="skill name"
                      class=" text-end control-label col-form-label">Skills</label>
                     <select class="select2 form-select shadow-none mt-3" name="skill_id" multiple="multiple" style="height: 36px; width: 100%" >
                      <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                      </optgroup>
                      <optgroup label="Pacific Time Zone">
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                        <option value="OR">Oregon</option>
                        <option value="WA">Washington</option>
                      </optgroup>
                      <optgroup label="Mountain Time Zone">
                        <option value="AZ">Arizona</option>
                        <option value="CO">Colorado</option>
                        <option value="ID">Idaho</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NM" selected>New Mexico</option>
                        <option value="ND">North Dakota</option>
                        <option value="UT">Utah</option>
                        <option value="WY">Wyoming</option>
                      </optgroup>
                      
                    </select>
                  </div>
                </div>
                <div class="border-top">
                  <div class="card-body">
                    <button type="button" class="btn btn-primary">
                      Submit
                    </button>
                  </div>
                </div>
              </form>
              </div>
            </div>
            
          </div>
        </div>

@stop