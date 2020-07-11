@extends('layouts.metronic')

@section('content')
<div class="subheader py-2 py-lg-4 subheader-transparent" id="kt_subheader">
	<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
		<!--begin::Info-->
		<div class="d-flex align-items-center flex-wrap mr-1">
			<!--begin::Page Heading-->
			<div class="d-flex align-items-baseline flex-wrap mr-5">
				<!--begin::Page Title-->
				<h5 class="text-dark font-weight-bold my-1 mr-5">Base Controls</h5>
				<!--end::Page Title-->
				<!--begin::Breadcrumb-->
				<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
					<li class="breadcrumb-item">
						<a href="" class="text-muted">Crud</a>
					</li>
					<li class="breadcrumb-item">
						<a href="" class="text-muted">Forms &amp; Controls</a>
					</li>
					<li class="breadcrumb-item">
						<a href="" class="text-muted">Form Controls</a>
					</li>
					<li class="breadcrumb-item">
						<a href="" class="text-muted">Base Inputs</a>
					</li>
				</ul>
				<!--end::Breadcrumb-->
			</div>
			<!--end::Page Heading-->
		</div>
		<!--end::Info-->
		<!--begin::Toolbar-->
		<div class="d-flex align-items-center">
			<!--begin::Actions-->
			<a href="#" class="btn btn-light font-weight-bold btn-sm">Actions</a>
			<!--end::Actions-->
			<!--begin::Dropdown-->
			<div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
				<a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					{{ Metronic::getSVG('media/svg/icons/Files/File-plus.svg', 'svg-icon-success svg-icon-2x') }}
				</a>
				<div class="dropdown-menu dropdown-menu-md dropdown-menu-right p-0 m-0">
					<!--begin::Navigation-->
					<ul class="navi navi-hover">
						<li class="navi-header font-weight-bold py-4">
							<span class="font-size-lg">Choose Label:</span>
							<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
						</li>
						<li class="navi-separator mb-3 opacity-70"></li>
						<li class="navi-item">
							<a href="#" class="navi-link">
								<span class="navi-text">
									<span class="label label-xl label-inline label-light-success">Customer</span>
								</span>
							</a>
						</li>
						<li class="navi-item">
							<a href="#" class="navi-link">
								<span class="navi-text">
									<span class="label label-xl label-inline label-light-danger">Partner</span>
								</span>
							</a>
						</li>
						<li class="navi-item">
							<a href="#" class="navi-link">
								<span class="navi-text">
									<span class="label label-xl label-inline label-light-warning">Suplier</span>
								</span>
							</a>
						</li>
						<li class="navi-item">
							<a href="#" class="navi-link">
								<span class="navi-text">
									<span class="label label-xl label-inline label-light-primary">Member</span>
								</span>
							</a>
						</li>
						<li class="navi-item">
							<a href="#" class="navi-link">
								<span class="navi-text">
									<span class="label label-xl label-inline label-light-dark">Staff</span>
								</span>
							</a>
						</li>
						<li class="navi-separator mt-3 opacity-70"></li>
						<li class="navi-footer py-4">
							<a class="btn btn-clean font-weight-bold btn-sm" href="#">
							<i class="ki ki-plus icon-sm"></i>Add new</a>
						</li>
					</ul>
					<!--end::Navigation-->
				</div>
			</div>
			<!--end::Dropdown-->
		</div>
		<!--end::Toolbar-->
	</div>
</div>
<!--end::Subheader-->
<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
	<!--begin::Container-->
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<!--begin::Card-->
				<div class="card card-custom gutter-b example example-compact">
					<div class="card-header">
						<h3 class="card-title">Base Controls</h3>
						<div class="card-toolbar">
							<div class="example-tools justify-content-center">
								<span class="example-toggle" data-toggle="tooltip" title="View code"></span>
								<span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
							</div>
						</div>
					</div>
					<!--begin::Form-->
					<form>
						<div class="card-body">
							<div class="form-group mb-8">
								<div class="alert alert-custom alert-default" role="alert">
									<div class="alert-icon">
										{{ Metronic::getSVG('media/svg/icons/Tools/Compass.svg', 'svg-icon-primary svg-icon-xl') }}
									</div>
									<div class="alert-text">The example form below demonstrates common HTML form elements that receive updated styles from Bootstrap with additional classes.</div>
								</div>
							</div>
							<div class="form-group">
								<label>Email address</label>
								<input type="email" class="form-control" placeholder="Enter email" />
								<span class="form-text text-muted">We'll never share your email with anyone else.</span>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" />
							</div>
							<div class="form-group">
								<label>Static:</label>
								<p class="form-control-plaintext text-muted">email@example.com</p>
							</div>
							<div class="form-group">
								<label for="exampleSelect1">Example select</label>
								<select class="form-control" id="exampleSelect1">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleSelect2">Example multiple select</label>
								<select multiple="multiple" class="form-control" id="exampleSelect2">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							<div class="form-group mb-1">
								<label for="exampleTextarea">Example textarea</label>
								<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
							</div>
							<!--begin: Code-->
							<div class="example-code mt-10">
								<div class="example-highlight">
									<pre style="height:400px">
<code class="language-html">
       &lt;div class="card card-custom"&gt;
        &lt;div class="card-header"&gt;
         &lt;h3 class="card-title"&gt;
          Base Controls
         &lt;/h3&gt;
         &lt;div class="card-toolbar"&gt;
          &lt;div class="example-tools justify-content-center"&gt;
           &lt;span class="example-toggle" data-toggle="tooltip" title="View code"&gt;&lt;/span&gt;
           &lt;span class="example-copy" data-toggle="tooltip" title="Copy code"&gt;&lt;/span&gt;
          &lt;/div&gt;
         &lt;/div&gt;
        &lt;/div&gt;
        &lt;!--begin::Form--&gt;
        &lt;form&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group mb-8"&gt;
           &lt;div class="alert alert-custom alert-default" role="alert"&gt;
            &lt;div class="alert-icon"&gt;&lt;i class="flaticon-warning text-primary"&gt;&lt;/i&gt;&lt;/div&gt;
            &lt;div class="alert-text"&gt;
             The example form below demonstrates common HTML form elements that receive updated styles from Bootstrap with additional classes.
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Email address&lt;/label&gt;
           &lt;input type="email" class="form-control"  placeholder="Enter email"/&gt;
           &lt;span class="form-text text-muted"&gt;We'll never share your email with anyone else.&lt;/span&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label for="exampleInputPassword1"&gt;Password&lt;/label&gt;
           &lt;input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"/&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Static:&lt;/label&gt;
           &lt;p class="form-control-plaintext text-muted"&gt;email@example.com&lt;/p&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label for="exampleSelect1"&gt;Example select&lt;/label&gt;
           &lt;select class="form-control" id="exampleSelect1"&gt;
            &lt;option&gt;1&lt;/option&gt;
            &lt;option&gt;2&lt;/option&gt;
            &lt;option&gt;3&lt;/option&gt;
            &lt;option&gt;4&lt;/option&gt;
            &lt;option&gt;5&lt;/option&gt;
           &lt;/select&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label for="exampleSelect2"&gt;Example multiple select&lt;/label&gt;
           &lt;select multiple="" class="form-control" id="exampleSelect2"&gt;
            &lt;option&gt;1&lt;/option&gt;
            &lt;option&gt;2&lt;/option&gt;
            &lt;option&gt;3&lt;/option&gt;
            &lt;option&gt;4&lt;/option&gt;
            &lt;option&gt;5&lt;/option&gt;
           &lt;/select&gt;
          &lt;/div&gt;
          &lt;div class="form-group mb-1"&gt;
           &lt;label for="exampleTextarea"&gt;Example textarea&lt;/label&gt;
           &lt;textarea class="form-control" id="exampleTextarea" rows="3"&gt;&lt;/textarea&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;button type="reset" class="btn btn-primary mr-2"&gt;Submit&lt;/button&gt;
          &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
         &lt;/div&gt;
        &lt;/form&gt;
        &lt;!--end::Form--&gt;
       &lt;/div&gt;
      </code>
</pre>
								</div>
							</div>
							<!--end: Code-->
						</div>
						<div class="card-footer">
							<button type="reset" class="btn btn-primary mr-2">Submit</button>
							<button type="reset" class="btn btn-secondary">Cancel</button>
						</div>
					</form>
					<!--end::Form-->
				</div>
				<!--end::Card-->
				<!--begin::Card-->
				<div class="card card-custom gutter-b example example-compact">
					<div class="card-header">
						<h3 class="card-title">Textual HTML5 Inputs</h3>
						<div class="card-toolbar">
							<div class="example-tools justify-content-center">
								<span class="example-toggle" data-toggle="tooltip" title="View code"></span>
								<span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
							</div>
						</div>
					</div>
					<!--begin::Form-->
					<form>
						<div class="card-body">
							<div class="form-group mb-8">
								<div class="alert alert-custom alert-default" role="alert">
									<div class="alert-icon">
										{{ Metronic::getSVG('media/svg/icons/Tools/Compass.svg', 'svg-icon-primary svg-icon-xl') }}
									</div>
									<div class="alert-text">Here are examples of
									<code>.form-control</code>applied to each textual HTML5 input type:</div>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-2 col-form-label">Text</label>
								<div class="col-10">
									<input class="form-control" type="text" value="Artisanal kale" id="example-text-input" />
								</div>
							</div>
							<div class="form-group row">
								<label for="example-search-input" class="col-2 col-form-label">Search</label>
								<div class="col-10">
									<input class="form-control" type="search" value="How do I shoot web" id="example-search-input" />
								</div>
							</div>
							<div class="form-group row">
								<label for="example-email-input" class="col-2 col-form-label">Email</label>
								<div class="col-10">
									<input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input" />
								</div>
							</div>
							<div class="form-group row">
								<label for="example-url-input" class="col-2 col-form-label">URL</label>
								<div class="col-10">
									<input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input" />
								</div>
							</div>
							<div class="form-group row">
								<label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
								<div class="col-10">
									<input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input" />
								</div>
							</div>
							<div class="form-group row">
								<label for="example-password-input" class="col-2 col-form-label">Password</label>
								<div class="col-10">
									<input class="form-control" type="password" value="hunter2" id="example-password-input" />
								</div>
							</div>
							<div class="form-group row">
								<label for="example-number-input" class="col-2 col-form-label">Number</label>
								<div class="col-10">
									<input class="form-control" type="number" value="42" id="example-number-input" />
								</div>
							</div>
							<div class="form-group row">
								<label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>
								<div class="col-10">
									<input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input" />
								</div>
							</div>
							<div class="form-group row">
								<label for="example-date-input" class="col-2 col-form-label">Date</label>
								<div class="col-10">
									<input class="form-control" type="date" value="2011-08-19" id="example-date-input" />
								</div>
							</div>
							<div class="form-group row">
								<label for="example-month-input" class="col-2 col-form-label">Month</label>
								<div class="col-10">
									<input class="form-control" type="month" value="2011-08" id="example-month-input" />
								</div>
							</div>
							<div class="form-group row">
								<label for="example-week-input" class="col-2 col-form-label">Week</label>
								<div class="col-10">
									<input class="form-control" type="week" value="2011-W33" id="example-week-input" />
								</div>
							</div>
							<div class="form-group row">
								<label for="example-time-input" class="col-2 col-form-label">Time</label>
								<div class="col-10">
									<input class="form-control" type="time" value="13:45:00" id="example-time-input" />
								</div>
							</div>
							<div class="form-group row">
								<label for="example-color-input" class="col-2 col-form-label">Color</label>
								<div class="col-10">
									<input class="form-control" type="color" value="#563d7c" id="example-color-input" />
								</div>
							</div>
							<div class="form-group row">
								<label for="example-email-input" class="col-2 col-form-label">Range</label>
								<div class="col-10">
									<input class="form-control" type="range" />
								</div>
							</div>
							<!--begin: Code-->
							<div class="example-code mt-10">
								<div class="example-highlight">
									<pre style="height:400px">
<code class="language-html">
       &lt;div class="card card-custom"&gt;
        &lt;div class="card-header"&gt;
         &lt;h3 class="card-title"&gt;
          Textual HTML5 Inputs
         &lt;/h3&gt;
        &lt;/div&gt;
        &lt;!--begin::Form--&gt;
        &lt;form&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group mb-8"&gt;
           &lt;div class="alert alert-custom alert-default" role="alert"&gt;
            &lt;div class="alert-icon"&gt;&lt;i class="flaticon-warning text-primary"&gt;&lt;/i&gt;&lt;/div&gt;
            &lt;div class="alert-text"&gt;
             Here are examples of &lt;code&gt;.form-control&lt;/code&gt; applied to each textual HTML5 input type:
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label  class="col-2 col-form-label"&gt;Text&lt;/label&gt;
           &lt;div class="col-10"&gt;
            &lt;input class="form-control" type="text" value="Artisanal kale" id="example-text-input"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label for="example-search-input" class="col-2 col-form-label"&gt;Search&lt;/label&gt;
           &lt;div class="col-10"&gt;
            &lt;input class="form-control" type="search" value="How do I shoot web" id="example-search-input"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label for="example-email-input" class="col-2 col-form-label"&gt;Email&lt;/label&gt;
           &lt;div class="col-10"&gt;
            &lt;input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label for="example-url-input" class="col-2 col-form-label"&gt;URL&lt;/label&gt;
           &lt;div class="col-10"&gt;
            &lt;input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label for="example-tel-input" class="col-2 col-form-label"&gt;Telephone&lt;/label&gt;
           &lt;div class="col-10"&gt;
            &lt;input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label for="example-password-input" class="col-2 col-form-label"&gt;Password&lt;/label&gt;
           &lt;div class="col-10"&gt;
            &lt;input class="form-control" type="password" value="hunter2" id="example-password-input"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label for="example-number-input" class="col-2 col-form-label"&gt;Number&lt;/label&gt;
           &lt;div class="col-10"&gt;
            &lt;input class="form-control" type="number" value="42" id="example-number-input"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label for="example-datetime-local-input" class="col-2 col-form-label"&gt;Date and time&lt;/label&gt;
           &lt;div class="col-10"&gt;
            &lt;input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label for="example-date-input" class="col-2 col-form-label"&gt;Date&lt;/label&gt;
           &lt;div class="col-10"&gt;
            &lt;input class="form-control" type="date" value="2011-08-19" id="example-date-input"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label for="example-month-input" class="col-2 col-form-label"&gt;Month&lt;/label&gt;
           &lt;div class="col-10"&gt;
            &lt;input class="form-control" type="month" value="2011-08" id="example-month-input"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label for="example-week-input" class="col-2 col-form-label"&gt;Week&lt;/label&gt;
           &lt;div class="col-10"&gt;
            &lt;input class="form-control" type="week" value="2011-W33" id="example-week-input"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label for="example-time-input" class="col-2 col-form-label"&gt;Time&lt;/label&gt;
           &lt;div class="col-10"&gt;
            &lt;input class="form-control" type="time" value="13:45:00" id="example-time-input"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label for="example-color-input" class="col-2 col-form-label"&gt;Color&lt;/label&gt;
           &lt;div class="col-10"&gt;
            &lt;input class="form-control" type="color" value="#563d7c" id="example-color-input"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group row"&gt;
           &lt;label for="example-email-input" class="col-2 col-form-label"&gt;Range&lt;/label&gt;
           &lt;div class="col-10"&gt;
            &lt;input class="form-control" type="range"/&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;div class="row"&gt;
           &lt;div class="col-2"&gt;
           &lt;/div&gt;
           &lt;div class="col-10"&gt;
            &lt;button type="reset" class="btn btn-success mr-2"&gt;Submit&lt;/button&gt;
            &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
        &lt;/form&gt;
       &lt;/div&gt;
      </code>
</pre>
								</div>
							</div>
							<!--end: Code-->
						</div>
						<div class="card-footer">
							<div class="row">
								<div class="col-2"></div>
								<div class="col-10">
									<button type="reset" class="btn btn-success mr-2">Submit</button>
									<button type="reset" class="btn btn-secondary">Cancel</button>
								</div>
							</div>
						</div>
					</form>
				</div>
				<!--end::Card-->
				<!--begin::Card-->
				<div class="card card-custom gutter-b example example-compact">
					<div class="card-header">
						<h3 class="card-title">Solid Background Style</h3>
						<div class="card-toolbar">
							<div class="example-tools justify-content-center">
								<span class="example-toggle" data-toggle="tooltip" title="View code"></span>
								<span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
							</div>
						</div>
					</div>
					<!--begin::Form-->
					<form class="form">
						<div class="card-body">
							<div class="form-group form-group-last">
								<div class="alert alert-custom alert-default" role="alert">
									<div class="alert-icon">
										{{ Metronic::getSVG('media/svg/icons/Tools/Compass.svg', 'svg-icon-primary svg-icon-xl') }}
									</div>
									<div class="alert-text">Add the
									<code>.form-controller-solid</code>class on an input to have an input with solid background.</div>
								</div>
							</div>
							<div class="form-group">
								<label>Input</label>
								<input type="email" class="form-control form-control-solid" placeholder="Example input" />
							</div>
							<div class="form-group">
								<label>Select</label>
								<select class="form-control form-control-solid">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleTextarea">Textarea</label>
								<textarea class="form-control form-control-solid" rows="3"></textarea>
							</div>
							<!--begin: Code-->
							<div class="example-code mt-10">
								<div class="example-highlight">
									<pre style="height:400px">
<code class="language-html">
       &lt;div class="card card-custom"&gt;
        &lt;div class="card-header"&gt;
         &lt;h3 class="card-title"&gt;
          Input States
         &lt;/h3&gt;
        &lt;/div&gt;
        &lt;!--begin::Form--&gt;
        &lt;form class="form"&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group form-group-last"&gt;
           &lt;div class="alert alert-custom alert-default" role="alert"&gt;
            &lt;div class="alert-icon"&gt;&lt;i class="flaticon-warning text-primary"&gt;&lt;/i&gt;&lt;/div&gt;
            &lt;div class="alert-text"&gt;
             Add the &lt;code&gt;disabled&lt;/code&gt; or &lt;code&gt;readonly&lt;/code&gt; boolean attribute on an input to prevent user interactions.
             Disabled inputs appear lighter and add a &lt;code&gt;not-allowed&lt;/code&gt; cursor.
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Input&lt;/label&gt;
           &lt;input type="email" class="form-control form-control-solid" placeholder="Example input"/&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Select&lt;/label&gt;
           &lt;select class="form-control form-control-solid"&gt;
            &lt;option&gt;1&lt;/option&gt;
            &lt;option&gt;2&lt;/option&gt;
            &lt;option&gt;3&lt;/option&gt;
            &lt;option&gt;4&lt;/option&gt;
            &lt;option&gt;5&lt;/option&gt;
           &lt;/select&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label for="exampleTextarea"&gt;Textarea&lt;/label&gt;
           &lt;textarea class="form-control form-control-solid" rows="3"&gt;&lt;/textarea&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;button type="reset" class="btn btn-primary mr-2"&gt;Submit&lt;/button&gt;
          &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
         &lt;/div&gt;
        &lt;/form&gt;
        &lt;!--end::Form--&gt;
       &lt;/div&gt;
      </code>
</pre>
								</div>
							</div>
							<!--end: Code-->
						</div>
						<div class="card-footer">
							<button type="reset" class="btn btn-primary mr-2">Submit</button>
							<button type="reset" class="btn btn-secondary">Cancel</button>
						</div>
					</form>
					<!--end::Form-->
				</div>
				<!--end::Card-->
			</div>
			<div class="col-md-6">
				<!--begin::Card-->
				<div class="card card-custom gutter-b example example-compact">
					<div class="card-header">
						<h3 class="card-title">Input States</h3>
						<div class="card-toolbar">
							<div class="example-tools justify-content-center">
								<span class="example-toggle" data-toggle="tooltip" title="View code"></span>
								<span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
							</div>
						</div>
					</div>
					<!--begin::Form-->
					<form class="form">
						<div class="card-body">
							<div class="form-group form-group-last">
								<div class="alert alert-custom alert-default" role="alert">
									<div class="alert-icon">
										{{ Metronic::getSVG('media/svg/icons/Tools/Compass.svg', 'svg-icon-primary svg-icon-xl') }}
									</div>
									<div class="alert-text">Add the
									<code>disabled</code>or
									<code>readonly</code>boolean attribute on an input to prevent user interactions. Disabled inputs appear lighter and add a
									<code>not-allowed</code>cursor.</div>
								</div>
							</div>
							<div class="form-group">
								<label>Disabled Input</label>
								<input type="email" class="form-control" disabled="disabled" placeholder="Disabled input" />
							</div>
							<div class="form-group">
								<label>Disabled select</label>
								<select class="form-control" disabled="disabled">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleTextarea">Disabled textarea</label>
								<textarea class="form-control" disabled="disabled" rows="3"></textarea>
							</div>
							<div class="form-group">
								<label>Readonly Input</label>
								<input type="email" class="form-control" readonly="readonly" placeholder="Readonly input" />
							</div>
							<div class="form-group">
								<label for="exampleTextarea">Readonly textarea</label>
								<textarea class="form-control" readonly="readonly" rows="3"></textarea>
							</div>
							<!--begin: Code-->
							<div class="example-code mt-10">
								<div class="example-highlight">
									<pre style="height:400px">
<code class="language-html">
       &lt;div class="card card-custom"&gt;
        &lt;div class="card-header"&gt;
         &lt;h3 class="card-title"&gt;
          Input States
         &lt;/h3&gt;
        &lt;/div&gt;
        &lt;!--begin::Form--&gt;
        &lt;form class="form"&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group form-group-last"&gt;
           &lt;div class="alert alert-custom alert-default" role="alert"&gt;
            &lt;div class="alert-icon"&gt;&lt;i class="flaticon-warning text-primary"&gt;&lt;/i&gt;&lt;/div&gt;
            &lt;div class="alert-text"&gt;
             Add the &lt;code&gt;disabled&lt;/code&gt; or &lt;code&gt;readonly&lt;/code&gt; boolean attribute on an input to prevent user interactions.
             Disabled inputs appear lighter and add a &lt;code&gt;not-allowed&lt;/code&gt; cursor.
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Disabled Input&lt;/label&gt;
           &lt;input type="email" class="form-control" disabled="disabled" placeholder="Disabled input"/&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Disabled select&lt;/label&gt;
           &lt;select class="form-control" disabled="disabled"&gt;
            &lt;option&gt;1&lt;/option&gt;
            &lt;option&gt;2&lt;/option&gt;
            &lt;option&gt;3&lt;/option&gt;
            &lt;option&gt;4&lt;/option&gt;
            &lt;option&gt;5&lt;/option&gt;
           &lt;/select&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label for="exampleTextarea"&gt;Disabled textarea&lt;/label&gt;
           &lt;textarea class="form-control" disabled="disabled" rows="3"&gt;&lt;/textarea&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Readonly Input&lt;/label&gt;
           &lt;input type="email" class="form-control" readonly placeholder="Readonly input"/&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label for="exampleTextarea"&gt;Readonly textarea&lt;/label&gt;
           &lt;textarea class="form-control" readonly rows="3"&gt;&lt;/textarea&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;button type="reset" class="btn btn-primary mr-2"&gt;Submit&lt;/button&gt;
          &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
         &lt;/div&gt;
        &lt;/form&gt;
        &lt;!--end::Form--&gt;
       &lt;/div&gt;
      </code>
</pre>
								</div>
							</div>
							<!--end: Code-->
						</div>
						<div class="card-footer">
							<button type="reset" class="btn btn-primary mr-2">Submit</button>
							<button type="reset" class="btn btn-secondary">Cancel</button>
						</div>
					</form>
					<!--end::Form-->
				</div>
				<!--end::Card-->
				<!--begin::Card-->
				<div class="card card-custom gutter-b example example-compact">
					<div class="card-header">
						<h3 class="card-title">Input Sizing</h3>
						<div class="card-toolbar">
							<div class="example-tools justify-content-center">
								<span class="example-toggle" data-toggle="tooltip" title="View code"></span>
								<span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
							</div>
						</div>
					</div>
					<!--begin::Form-->
					<form class="form">
						<div class="card-body">
							<div class="form-group form-group-last">
								<div class="alert alert-custom alert-default" role="alert">
									<div class="alert-icon">
										{{ Metronic::getSVG('media/svg/icons/Tools/Compass.svg', 'svg-icon-primary svg-icon-xl') }}
									</div>
									<div class="alert-text">Set heights using classes like
									<code>.form-control-lg</code>, and set widths using grid column classes like
									<code>.col-lg-*</code></div>
								</div>
							</div>
							<div class="form-group">
								<label>Large Input</label>
								<input type="email" class="form-control form-control-lg" placeholder="Large input" />
							</div>
							<div class="form-group">
								<label>Default Input</label>
								<input type="email" class="form-control" placeholder="Large input" />
							</div>
							<div class="form-group">
								<label>Small Input</label>
								<input type="email" class="form-control form-control-sm" placeholder="Large input" />
							</div>
							<div class="form-group">
								<label for="exampleSelectl">Large Select</label>
								<select class="form-control form-control-lg" id="exampleSelectl">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleSelectd">Default Select</label>
								<select class="form-control" id="exampleSelectd">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleSelects">Small Select</label>
								<select class="form-control form-control-sm" id="exampleSelects">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							<!--begin: Code-->
							<div class="example-code mt-10">
								<div class="example-highlight">
									<pre style="height:400px">
<code class="language-html">
       &lt;div class="card card-custom"&gt;
        &lt;div class="card-header"&gt;
         &lt;h3 class="card-title"&gt;
          Input Sizing
         &lt;/h3&gt;
        &lt;/div&gt;
        &lt;!--begin::Form--&gt;
        &lt;form class="form"&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group form-group-last"&gt;
           &lt;div class="alert alert-custom alert-default" role="alert"&gt;
            &lt;div class="alert-icon"&gt;&lt;i class="flaticon-warning text-primary"&gt;&lt;/i&gt;&lt;/div&gt;
            &lt;div class="alert-text"&gt;
             Set heights using classes like &lt;code&gt;.form-control-lg&lt;/code&gt;, and set widths using grid column classes like &lt;code&gt;.col-lg-*&lt;/code&gt;
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Large Input&lt;/label&gt;
           &lt;input type="email" class="form-control form-control-lg"  placeholder="Large input"/&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Default Input&lt;/label&gt;
           &lt;input type="email" class="form-control"  placeholder="Large input"/&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Small Input&lt;/label&gt;
           &lt;input type="email" class="form-control form-control-sm"  placeholder="Large input"/&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label for="exampleSelectl"&gt;Large Select&lt;/label&gt;
           &lt;select class="form-control form-control-lg" id="exampleSelectl"&gt;
            &lt;option&gt;1&lt;/option&gt;
            &lt;option&gt;2&lt;/option&gt;
            &lt;option&gt;3&lt;/option&gt;
            &lt;option&gt;4&lt;/option&gt;
            &lt;option&gt;5&lt;/option&gt;
           &lt;/select&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label for="exampleSelectd"&gt;Default Select&lt;/label&gt;
           &lt;select class="form-control" id="exampleSelectd"&gt;
            &lt;option&gt;1&lt;/option&gt;
            &lt;option&gt;2&lt;/option&gt;
            &lt;option&gt;3&lt;/option&gt;
            &lt;option&gt;4&lt;/option&gt;
            &lt;option&gt;5&lt;/option&gt;
           &lt;/select&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label for="exampleSelects"&gt;Small Select&lt;/label&gt;
           &lt;select class="form-control form-control-sm" id="exampleSelects"&gt;
            &lt;option&gt;1&lt;/option&gt;
            &lt;option&gt;2&lt;/option&gt;
            &lt;option&gt;3&lt;/option&gt;
            &lt;option&gt;4&lt;/option&gt;
            &lt;option&gt;5&lt;/option&gt;
           &lt;/select&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;button type="reset" class="btn btn-success mr-2"&gt;Submit&lt;/button&gt;
          &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
         &lt;/div&gt;
        &lt;/form&gt;
        &lt;!--end::Form--&gt;
       &lt;/div&gt;
      </code>
</pre>
								</div>
							</div>
							<!--end: Code-->
						</div>
						<div class="card-footer">
							<button type="reset" class="btn btn-success mr-2">Submit</button>
							<button type="reset" class="btn btn-secondary">Cancel</button>
						</div>
					</form>
					<!--end::Form-->
				</div>
				<!--end::Card-->
				<!--begin::Card-->
				<div class="card card-custom example example-compact">
					<div class="card-header">
						<h3 class="card-title">Custom Controls</h3>
						<div class="card-toolbar">
							<div class="example-tools justify-content-center">
								<span class="example-toggle" data-toggle="tooltip" title="View code"></span>
								<span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
							</div>
						</div>
					</div>
					<!--begin::Form-->
					<form class="form">
						<div class="card-body">
							<div class="form-group form-group-last">
								<div class="alert alert-custom alert-default" role="alert">
									<div class="alert-icon">
										{{ Metronic::getSVG('media/svg/icons/Tools/Compass.svg', 'svg-icon-primary svg-icon-xl') }}
									</div>
									<div class="alert-text">For even more customization and cross browser consistency, use our completely custom form elements to replace the browser defaults. They’re built on top of semantic and accessible markup, so they’re solid replacements for any default form control.</div>
								</div>
							</div>
							<div class="form-group">
								<label>Custom Range</label>
								<div></div>
								<input type="range" class="custom-range" min="0" max="5" id="customRange2" />
							</div>
							<div class="form-group">
								<label>Custom Select</label>
								<div></div>
								<select class="custom-select form-control">
									<option selected="selected">Open this select menu</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
							</div>
							<div class="form-group">
								<label>File Browser</label>
								<div></div>
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="customFile" />
									<label class="custom-file-label" for="customFile">Choose file</label>
								</div>
							</div>
							<!--begin: Code-->
							<div class="example-code mt-10">
								<div class="example-highlight">
									<pre style="height:400px">
<code class="language-html">
       &lt;div class="card card-custom"&gt;
        &lt;div class="card-header"&gt;
         &lt;h3 class="card-title"&gt;
          Custom Controls
         &lt;/h3&gt;
        &lt;/div&gt;
        &lt;!--begin::Form--&gt;
        &lt;form class="form"&gt;
         &lt;div class="card-body"&gt;
          &lt;div class="form-group form-group-last"&gt;
           &lt;div class="alert alert-custom alert-default" role="alert"&gt;
            &lt;div class="alert-icon"&gt;&lt;i class="flaticon-warning text-primary"&gt;&lt;/i&gt;&lt;/div&gt;
            &lt;div class="alert-text"&gt;
             For even more customization and cross browser consistency, use our completely custom form elements to replace the browser defaults. They’re built on top of semantic and accessible markup, so they’re solid replacements for any default form control.
            &lt;/div&gt;
           &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Custom Range&lt;/label&gt;
           &lt;div&gt;&lt;/div&gt;
           &lt;input type="range" class="custom-range" min="0" max="5" id="customRange2"/&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;Custom Select&lt;/label&gt;
           &lt;div&gt;&lt;/div&gt;
           &lt;select class="custom-select form-control"&gt;
            &lt;option selected&gt;Open this select menu&lt;/option&gt;
            &lt;option value="1"&gt;One&lt;/option&gt;
            &lt;option value="2"&gt;Two&lt;/option&gt;
            &lt;option value="3"&gt;Three&lt;/option&gt;
           &lt;/select&gt;
          &lt;/div&gt;
          &lt;div class="form-group"&gt;
           &lt;label&gt;File Browser&lt;/label&gt;
           &lt;div&gt;&lt;/div&gt;
           &lt;div class="custom-file"&gt;
            &lt;input type="file" class="custom-file-input" id="customFile"/&gt;
            &lt;label class="custom-file-label" for="customFile"&gt;Choose file&lt;/label&gt;
           &lt;/div&gt;
          &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="card-footer"&gt;
          &lt;button type="reset" class="btn btn-primary mr-2"&gt;Submit&lt;/button&gt;
          &lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
         &lt;/div&gt;
        &lt;/form&gt;
        &lt;!--end::Form--&gt;
       &lt;/div&gt;
      </code>
</pre>
								</div>
							</div>
							<!--end: Code-->
						</div>
						<div class="card-footer">
							<button type="reset" class="btn btn-primary mr-2">Submit</button>
							<button type="reset" class="btn btn-secondary">Cancel</button>
						</div>
					</form>
					<!--end::Form-->
				</div>
				<!--end::Card-->
			</div>
		</div>
	</div>
	<!--end::Container-->
</div>
@endsection