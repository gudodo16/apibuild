<style>
td,th{
	text-align: center;
}
</style>
<div class="form-group m-form__group row">
	<div class="m-demo__preview m-demo__preview--btn"> 
		<a  class="btn btn-outline-primary btn-sm 	m-btn m-btn--icon" id="approve">
			<span><i class="fa flaticon-list-2"></i><span><?= __('อนุมัติการใช้งาน') ?></span>
		</span>
	</a>
	<a  class="btn btn-outline-danger m-btn btn-sm  m-btn--icon" id="notapprove">
		<span><i class="fa flaticon-profile-1"></i><span><?= __('ไม่อนุมัติการใช้งสน') ?></span>
	</span>
</a>
</div>

</div>
<table class="table table-bordered m-table m-table--border-brand m-table--head-bg-brand" id="example" style="width:100%">
	<thead>
		<tr>
			<th>ชื่อ</th>
			<th>อีเมลล์</th>
			<th>เบอร์โทรศัพย์</th>
			<th>รหัสผู้ใช้งาน</th>
			<th>สถานะ</th>
			<th>ดูข้อมูล</th>
		</tr>
	</thead>
</table>

<!-- modal -->
<div class="modal fade" id="m_modal_view" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">
					<?= __("ดูข้อมูล")?>	
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">
						&times;
					</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="form-group m-form__group row">
					<label for="example-search-input" class="col-2 col-form-label">
						<?= __("Name") ?>
					</label>
					<div class="col-10">
						<input class="form-control m-input" type="text" id="name" disabled="disabled">
					</div>
				</div>
				<div class="form-group m-form__group row">
					<label for="example-search-input" class="col-2 col-form-label" >
						<?= __("Email") ?>
					</label>
					<div class="col-10">
						<input class="form-control m-input" type="email" id="email" disabled="disabled">
					</div>
				</div>
				<div class="form-group m-form__group row">
					<label for="example-search-input" class="col-2 col-form-label" >
						<?= __("Phone") ?>
					</label>
					<div class="col-10">
						<input class="form-control m-input" type="email" id="phone" disabled="disabled">
					</div>
				</div>
				<div class="form-group m-form__group row">
					<label for="example-search-input" class="col-2 col-form-label" >
						<?= __("Username") ?>
					</label>
					<div class="col-10">
						<input class="form-control m-input" type="email" id="username" disabled="disabled">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">
					<?= __("ปิด")?>	
				</button>
			</div>
		</div>
	</div>
</div>
<form target="_blank" method="GET" id="save_edit">
	<div class="modal fade" id="m_modal_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">


		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">
						<?= __("แก้ไขข้อมูล")?>	
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">
							&times;
						</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group m-form__group row">
						<label for="example-search-input" class="col-2 col-form-label">
							<?= __("Name") ?>
						</label>
						<?= $this->Form->control('id',['class'=>'form-control m-input','type'=>'hidden','id'=>'id','label'=>false]) ?>
						<div class="col-10">
							<?= $this->Form->control('name',['class'=>'form-control m-input','type'=>'text','id'=>'namee','label'=>false]) ?>

						</div>
					</div>
					<div class="form-group m-form__group row">
						<label for="example-search-input" class="col-2 col-form-label" >
							<?= __("Email") ?>
						</label>
						<div class="col-10">
							<?= $this->Form->control('email',['class'=>'form-control m-input','type'=>'email','id'=>'emaile','label'=>false]) ?>

						</div>

					</div>
					<div class="form-group m-form__group row">
						<label for="example-search-input" class="col-2 col-form-label" >
							<?= __("Phone") ?>
						</label>
						<div class="col-10">
							<?= $this->Form->control('phone',['class'=>'form-control m-input','type'=>'text','id'=>'phonee','label'=>false]) ?>

						</div>
					</div>
					<div class="form-group m-form__group row">
						<label for="example-search-input" class="col-2 col-form-label" >
							<?= __("Username") ?>
						</label>
						<div class="col-10">
							<?= $this->Form->control('username',['class'=>'form-control m-input','type'=>'text','id'=>'usernamee','label'=>false]) ?>
						</div>
					</div>
					



				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">
						<?= __("ปิด")?>	
					</button>
					<button type="button" class="btn btn-primary" onclick="save_edit()">
						<?= __("บันทึกข้อมูล")?>	
					</button>
				</div>
			</div>
		</div>
	</div>
</form>
<!-- endmodal -->
<script type="text/javascript">

$(document).ready(function() {
	var table =  $('#example').DataTable( {
		deferRender: true,
		"ajax": {
			"url": "/users/autoload.json",
			"dataSrc": ""
		},
		"deferRender": true,
		"columns": [
		{ "data": "name" },
		{ "data": "email" },
		{ "data": "phone" },
		{ "data": "username" },
		{ "data": "status" },
		{ "defaultContent": "<button id='btn_view' class='btn btn-outline-primary s-btn s-btn--outline-2x '><i class='m-nav__link-icon flaticon-chat-1'></i> ดูข้อมูล </button>&ensp;<button  id='btn_edit' class='btn btn-outline-warning s-btn s-btn--custom-2x '><i class='m-nav__link-icon flaticon-edit'></i> แก้ไข </button>" }
		],

		dom: 'Bfrtip',
		buttons: [
		'excel','print',
		],
	} );
	$('#example tbody').on( 'click', 'tr', function () {
		$(this).toggleClass('selected');
	} );

	//  approve user
	$('#approve').click( function () {

		var postdata=table.rows('.selected').data();
		var check="0"
		for (i = 0; i < postdata.length; i++) {
			var id = postdata[i].id;
			$.post('/Users/approve', {id:id}, function(data) {
			});
		}
		alert("อนุมัติการใช้งานแล้ว");
		reload_table();

	} );
		//  not approve user
		$('#notapprove').click( function () {

			var postdata=table.rows('.selected').data();
			var check="0"
			for (i = 0; i < postdata.length; i++) {
			var id = postdata[i].id;
			$.post('/Users/notapprove', {id:id}, function(data) {
			});
		}
		alert("ยกเลิกการใช้งานแล้ว");
		reload_table();
	} );

    //  view
    $('#example tbody').on( 'click', '#btn_view', function () {

    	$('#m_modal_view').modal('show'); 
    	var datatable = table.row( $(this).parents('tr') ).data();
    	var id =datatable.id;
    	$.post('/Users/view', {id: id}, function(data) {
    		$("#name").val(data['name']);
    		$("#email").val(data['email']);
    		$("#phone").val(data['phone']);
    		$("#username").val(data['username']);
    	});
    });
    //  edit
    $('#example tbody').on( 'click', '#btn_edit', function () {
    	var datatable = table.row( $(this).parents('tr')).data();
    	var id =datatable.id;
    	$('#m_modal_edit').modal('show'); 
    	$.post('/Users/view', {id:id}, function(data) {
    		$("#id").val(data['id']);
    		$("#namee").val(data['name']);
    		$("#emaile").val(data['email']);
    		$("#phonee").val(data['phone']);
    		$("#usernamee").val(data['username']);
    	});
    } );
} );

//  reload 
function reload_table(){
	$('#example').DataTable().ajax.reload()
}

//  save 
function save_edit() {
	var table = $('#example').DataTable();
	data_edit = $("#save_edit").serializeArray();
	$.post('/Users/edit', {data_edit: data_edit}, function(data) {

		if (data=="1") {
			$('#m_modal_edit').modal('toggle');
			table.ajax.reload();
		}
	});	
}
</script>
