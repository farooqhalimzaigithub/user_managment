@extends('admin-dashboard.layouts.master')
@section('content')
   <div class="row">
            <div class="col-md-12">
              <div class="card">
                <form class="form-horizontal">
                  <div class="card-body">
                    <h4 class="card-title">Skills Info</h4>
                    <div class="form-group row">
                      <label
                        for="skill name"
                        class="col-sm-3 text-end control-label col-form-label">Skill Name</label>
                       <div class="col-sm-9">
                        <input type="text" class="form-control" id="skill name" placeholder="Skill Name" />
                       </div>
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

          <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Basic Datatable</h5>
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                      <thead>
                        <tr>
                        	<th>S.NO</th>
                          <th>skill Name</th>
                          <th>Action</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                       
                      
                        
                        <tr>
                          <td>Donna Snider</td>
                          <td>Customer Support</td>
                          <td>New York</td>
                          
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                        	<th>S.NO</th>
                          <th>skill Name</th>
                          <th>Action</th>
                         
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
@stop