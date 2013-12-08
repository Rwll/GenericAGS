@extends('layouts.admin-master')

@section('content')
	<ul class="nav nav-tabs">
        <li class="active">
            <a href="#universitiesTab" data-toggle="tab">Universities</a>
        </li>
        <li>
        	<a href="#facultiesTab" data-toggle="tab">Faculties</a>
        </li>
    </ul>
    <div class="tab-content">
    	<div class="tab-pane panel active panel-default" id="universitiesTab">
    		<div class="panel-body">
    			<div id="viewuniversities">
	    			<button class="btn btn-default btn-sm" 
	    				id="adduniversitybtn">
	    				<i class="fa fa-plus fa-fw"></i> 
	    				Add University
	    			</button>
	    			<button class="btn btn-info btn-sm">
	    				<i class="fa fa-refresh fa-fw"></i> 
	    				Refresh
	    			</button>
	    			<hr>
	    			<table class="table table-striped table-bordered" 
	    				id="universities">
	    				<thead>
	    					<tr>
	    						<th class="col-md-1">#</th>
	    						<th class="col-md-8">School</th>
	    						<th class="col-md-3">Actions</th>
	    					</tr>
	    				</thead>
	    				<tbody>
	    					@foreach($universities as $university)
	    					<tr>
	    						<td>{{ $university->id }}</td>
	    						<td>{{ $university->abbreviation }} - 
	    							{{ $university->name }}</td>
	    						<td>
	    							<button class="btn btn-default btn-xs
	    								universityeditbtn" 
	    								value="{{ $university->id }}">
	    								<i class="fa fa-edit fa-fw"></i>
	    								 Edit
	    							</button>
	    							@if($university->enabled)
	    							<button class="btn btn-danger btn-xs">
	    								<i class="fa fa-ban fa-fw"></i>
	    								 Disable
	    							</button>
	    							@else
	    							<button class="btn btn-success btn-xs">
	    								<i class="fa fa-check fa-fw"></i>
	    								 Enable
	    							</button>
	    							@endif
	    						</td>
	    					</tr>
	    					@endforeach    					
	    				</tbody>
	    			</table>
    			</div><!-- ./viewuniversities -->
    			<div id="adduniversity">
    				<button class="btn btn-default btn-sm backtouniversities">
	    				<i class="fa fa-reply fa-fw"></i> 
	    				Back
	    			</button>
	    			<hr>
    				<form>
	    				<div class="row">
		    				<div class="form-group col-md-8">
		    					<label><strong>Name of School</strong></label>
		    					<input type="text" class="form-control" />
		    				</div>
		    				<div class="form-group col-md-4">
		    					<label><strong>Abbreviation</strong></label>
		    					<input type="text" class="form-control" />
		    				</div>
	    				</div>
	    				<div class="row">
		    				<div class="form-group col-md-6">
		    					<label><strong>Email</strong></label>
		    					<input type="email" class="form-control" />
		    				</div>
		    				<div class="form-group col-md-6">
		    					<label><strong>Contact #</strong></label>
		    					<input type="text" class="form-control" />
		    				</div>
	    				</div>
	    				<div class="form-group">
	    					<label><strong>Address</strong></label>
	    					<input type="text" class="form-control" />
	    				</div>
	    				<div class="form-group">
	    					<label><strong>Description</strong></label>
	    					<textarea class="form-control" rows="5"></textarea>
	    				</div>
	    				<div class="form-group">
	    					<button type="submit" class="btn btn-primary">
	    						<i class="fa fa-save fa-fw"></i>
	    							Submit
	    					</button>
	    					<button type="reset" class="btn btn-default">
	    						<i class="fa fa-refresh fa-fw"></i>
	    							Reset
	    					</button>
	    					<button type="submit" class="btn btn-default">
	    						<i class="fa fa-ban fa-fw"></i>
	    							Cancel
	    					</button>
	    				</div>
	    			</form>
    			</div>
    			@include('blocks.edituniversity')
    		</div>
    	</div>
    	<div class="tab-pane panel panel-default" id="facultiesTab">
    		<div class="panel-body">
    			<form>
    				<div class="row">
	    				<div class="form-group col-md-6">
	    					<label><strong>Username</strong></label>
	    					<input type="text" class="form-control" />
	    				</div>
	    				<div class="form-group col-md-6">
	    					<label><strong>Email</strong></label>
	    					<input type="email" class="form-control" />
	    				</div>
    				</div>
    				<div class="row">
	    				<div class="form-group col-md-6">
	    					<label><strong>Password</strong></label>
	    					<input type="password" class="form-control" />
	    				</div>
	    				<div class="form-group col-md-6">
	    					<label><strong>Repeat Password</strong></label>
	    					<input type="password" class="form-control" />
	    				</div>
    				</div>
    				<div class="row">
	    				<div class="form-group col-md-6">
	    					<label><strong>Frst Name</strong></label>
	    					<input type="text" class="form-control" />
	    				</div>
	    				<div class="form-group col-md-6">
	    					<label><strong>Last Name</strong></label>
	    					<input type="text" class="form-control" />
	    				</div>
    				</div>
    				<div class="row">
	    				<div class="form-group col-md-6">
	    					<label><strong>Contact #</strong></label>
	    					<input type="text" class="form-control" />
	    				</div>
    				</div>
    				<div class="form-group">
    					<button type="submit" class="btn btn-primary">
    						<i class="fa fa-save fa-fw"></i>
    							Submit
    					</button>
    					<button type="reset" class="btn btn-default">
    						<i class="fa fa-refresh fa-fw"></i>
    							Reset
    					</button>
    					<button type="submit" class="btn btn-default">
    						<i class="fa fa-ban fa-fw"></i>
    							Cancel
    					</button>
    				</div>
    			</form>
    		</div>
    	</div>
    </div>
@stop

    			<!--  -->
					<!-- faculty list -->
    			<!-- <button class="btn btn-default btn-sm">
    				<i class="fa fa-plus fa-fw"></i> 
    				Add Faculty
    			</button>
    			<hr>
    			<table class="table table-hover table-bordered">
    				<thead>
    					<tr>
    						<th class="col-md-1">#</th>
    						<th class="col-md-6">Name</th>
    						<th class="col-md-2">School</th>
    						<th class="col-md-3">Actions</th>
    					</tr>
    				</thead>
    				<tbody>
    					<tr>
    						<td>1</td>
    						<td>Rene Dimakulangan</td>
    						<td>UMAK</td>
    						<td>
    							<button class="btn btn-default btn-xs">
    								<i class="fa fa-edit fa-fw"></i>
    								 Edit
    							</button>
    							<button class="btn btn-danger btn-xs">
    								<i class="fa fa-ban fa-fw"></i>
    								 Disable
    							</button>
    						</td>
    					</tr>
    					<tr>
    						<td>2</td>
    						<td>Ronie May Pasobra</td>
    						<td>UMAK</td>
    						<td>
    							<button class="btn btn-default btn-xs">
    								<i class="fa fa-edit fa-fw"></i>
    								 Edit
    							</button>
    							<button class="btn btn-success btn-xs">
    								<i class="fa fa-check fa-fw"></i>
    								 Enable
    							</button>
    						</td>
    					</tr>
    					
    				</tbody>
    			</table> -->


