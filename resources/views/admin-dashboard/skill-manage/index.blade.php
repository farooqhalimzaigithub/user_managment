@extends('admin-dashboard.layouts.master')
@section('content')
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