

<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<?php if(session('success')): ?>
		<div class="alert alert-custom alert-success alert-shadow gutter-b col-lg-12 col-xl-12" role="alert">
			<div class="alert-icon">
				<?php echo e(Metronic::getSVG('media/svg/icons/Navigation/Double-check.svg', 'svg-icon-white svg-icon-xl')); ?>

			</div>
			<div class="alert-text"><?php echo e(session('success')); ?></div>
		</div>
		<?php endif; ?>
		<div class="card card-custom gutter-b col-md-12">
			<div class="card-header flex-wrap border-0 pt-6 pb-0">
				<div class="card-title">
					<h3 class="card-label">Customer Groups
				</div>
				<div class="card-toolbar">
					<a href="<?php echo e(route('customer-groups.create')); ?>" class="btn btn-primary font-weight-bolder">
					<?php echo e(Metronic::getSVG('media/svg/icons/Code/Plus.svg', 'svg-icon-md')); ?>New Record</a>
				</div>
			</div>
			<div class="card-body">
				<div class="mb-7">
					<div class="row align-items-center">
						<div class="col-lg-9 col-xl-8">
							<div class="row align-items-center">
								<div>
									<div class="input-icon">
										<input type="text" class="form-control" placeholder="Search..." id="brand_search" />
										<span>
											<i class="flaticon2-search-1 text-muted"></i>
										</span>
									</div>
								</div>
								
							</div>
						</div>
						<div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
							<a href="javascript:;" class="btn btn-light-primary px-6 font-weight-bold btn-search">Search</a>
						</div>
					</div>
				</div>
				<div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
				<form id="form-delete" class="hidden" method="POST" action="<?php echo e(route('customer-groups.destroy', -1)); ?>">
					<?php echo csrf_field(); ?>
					<?php echo method_field('DELETE'); ?>
				</form>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('scripts'); ?>
	
	<script type="text/javascript">
		$(document).ready(function(){
			var datatable = $('#kt_datatable').KTDatatable({
				data: {
					type: 'remote',
					source: {
						read: {
							url: '<?php echo e(route('adminapi.customer.list')); ?>',
							method: 'GET',
							contentType: 'application/json',
							params: {
								fields: ['id', 'name', 'description', 'deleted_at'],
							},
						},
					},
					pageSize: 10,
					serverPaging: true,
					serverFiltering: true,
					serverSorting: true,
				},

				columns: [{
					field: 'id',
					title: 'ID',
					sortable: 'asc',
					width: 40,
					type: 'number',
					selector: false,
					textAlign: 'center',
				}, {
					field: 'name',
					title: 'Name',
				}, {
					field: 'description',
					title: 'Desctiption',
				},
				{
					field: 'deleted_at',
					title: 'Status',
					sortCallback: function(data, sort, column) {
						return $(data).sort(function (a, b) {
							if(sort === 'asc') {
								return a['deleted_at'] === null && b['deleted_at'] === null ? 0 : a['deleted_at'] === null && b['deleted_at'] !== null ? 1 : -1;
							} else {
								return a['deleted_at'] === null && b['deleted_at'] === null ? 0 : a['deleted_at'] === null && b['deleted_at'] !== null ? -1 : 1;
							}
						});
					},
					template: function(row) {
						let myClass = "";
						let myTitle = "";
						if(row.deleted_at) {
							myClass = ' label-light-danger';
							myTitle = "Deleted";
						} else {
							myClass = ' label-light-success';
							myTitle = "Active";
						}
						return '<span class="label font-weight-bold label-lg ' + myClass + ' label-inline">' + myTitle + '</span>';
					},
				}, {
					field: 'Actions',
					title: 'Actions',
					sortable: false,
					width: 125,
					autoHide: false,
					template: function(row) {
						let action = '\
							<a href="javascript:;" data-id="'+row.id+'" class="btn btn-sm btn-clean btn-icon mr-2 edit-btn" title="Edit details">\
								<span class="svg-icon svg-icon-md">\
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
											<rect x="0" y="0" width="24" height="24"/>\
											<path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero"\ transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>\
											<rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>\
										</g>\
									</svg>\
								</span>\
							</a>';
						if(row.deleted_at === null) {
							action += '\
							<a href="javascript:;" data-id="'+row.id+'" class="btn btn-sm btn-clean btn-icon delete-btn" title="Delete">\
								<span class="svg-icon svg-icon-md">\
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
											<rect x="0" y="0" width="24" height="24"/>\
											<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>\
											<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>\
										</g>\
									</svg>\
								</span>\
							</a>\
						';
						}
						return action;
					},
				}],

			});
			datatable.on('datatable-on-layout-updated', function() {
				$(".edit-btn").on('click', function(event) {
					window.location.href = "<?php echo e(url('/customer-groups')); ?>/"+event.currentTarget.dataset.id+"/edit";
				});
				$(".delete-btn").on('click', function(event) {
					let curAction = $("#form-delete").attr("action");
					url = curAction.substring(0, curAction.lastIndexOf("/")+1);
					console.log("url? "+url);
					$("#form-delete").attr("action", url+event.currentTarget.dataset.id);
					$("#form-delete").submit();
				});
			});
			$('#brand_filter_status').on('change', function() {
				datatable.search($(this).val().toLowerCase(), 'status');
			});
			$(".btn-search").on('click', function() {
				datatable.search($("#brand_search").val().toLowerCase(), 'search');
			});
			$('#brand_filter_status').selectpicker();
		});
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.metronic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce-backend\resources\views/admin/customer-groups/index.blade.php ENDPATH**/ ?>