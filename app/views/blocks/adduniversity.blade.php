<div id="adduniversity">
	<button class="btn btn-default btn-sm backtouniversities"
		onlick="this.preventDefault()">
		<i class="fa fa-reply fa-fw"></i> 
		Back
	</button>
	<form id="add_univ_form"
	action="http://localhost/GenericsATS/public/api/admin/university/add">
		<hr>
		<div class="row">
			<div class="form-group col-md-8">
				<label><strong>Name of School</strong></label>
				<input id="add_univ_name" type="text" class="form-control"
				name="name" />
			</div>
			<div class="form-group col-md-4">
				<label><strong>Abbreviation</strong></label>
				<input id="add_univ_abb" type="text" class="form-control" 
				name="abbreviation"/>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-6">
				<label><strong>Email</strong></label>
				<input id="add_univ_email" type="email" 
				class="form-control" name="email" />
			</div>
			<div class="form-group col-md-6">
				<label><strong>Contact #</strong></label>
				<input id="add_univ_contact" type="text"
				class="form-control" name="contact"/>
			</div>
		</div>
		<div class="form-group">
			<label><strong>Website</strong></label>
			<input id="add_univ_website" type="text" class="form-control" 
			name="website"/>
		</div>
		<div class="form-group">
			<label><strong>Address</strong></label>
			<input id="add_univ_address" type="text" class="form-control"
			name="address"/>
		</div>
		<div class="form-group">
			<label><strong>Description</strong></label>
			<textarea id="add_univ_desc" class="form-control" rows="5" 
			name="description">
			</textarea>
		</div>
		<div class="form-group">
			<button id="add_univ_save" class="btn btn-primary">
				<i class="fa fa-save fa-fw"></i>
					Save
			</button>
			<button type="reset" class="btn btn-default">
				<i class="fa fa-refresh fa-fw"></i>
					Reset
			</button>
		</div>
	</form>
</div>