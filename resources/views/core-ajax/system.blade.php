<!-- bootstrap3-dialog -->
<!--https://github.com/nakupanda/bootstrap3-dialog-->
<!--https://nakupanda.github.io/bootstrap3-dialog/-->
<link href="{{ asset('/librarys/bootstrap3-dialog/css/bootstrap-dialog.css') }}" rel="stylesheet"/>
<script src="{{ asset('/librarys/bootstrap3-dialog/js/bootstrap-dialog.js') }}"></script>
<script type="text/javascript">
    function System() {
        this.initialize.apply(this, arguments);
    }
    
    function SystemUpload() {
        this.initialize.apply(this, arguments);
    }
    
    SystemUpload.prototype.initialize = function(data_type) {
        this.ajax_option = {
    		cache: false,
    		method: data_type,
    		headers: {
            	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          	},
    		contentType: false,
            processData: false,
    		statusCode: {
    			401 : function () {
    				//Edit start LIXD-614 TinVNIT 12022016
    				//$('#modal_message').dialog('close');
    				//System.sesstion_err_msg();
    				//Edit end LIXD-614 TinVNIT 12022016
    			}
    		}
    	};
    };
    
    SystemUpload.prototype.connect = function (action_type, ajax_url, ajax_data, loaderDisplay = true) {
    	var aa_this = this;
    	var opt =　this.ajax_option;
    	if(loaderDisplay == true){
			System.loading(true);	
		}
    	opt.type =  action_type;
    	opt.url = "{{url('/')}}" + ajax_url;
    	if (ajax_data) {
    		opt.data = ajax_data;
    	} else if (opt.data) {
    		delete opt.data;
    	}
    	$.ajax(opt)
    		.always(function (data) {
    			System.loading(false);
    			aa_this.always_func(data);
    		})	// alwaysを一番先に実行
    		.done(aa_this.done_func)
    		.fail(aa_this.fail_func);
    };
    
    SystemUpload.prototype.always_func = function (data){
    	//Do Nothing.
    };
    SystemUpload.prototype.done_func = function (data){
    	
    };
    SystemUpload.prototype.fail_func = function (data) {
    	System.message_error(data.responseText);
    };
    
    
    System.prototype.initialize = function(data_type) {
        this.ajax_option = {
    		cache: false,
    		method: data_type,
    		headers: {
            	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          	},
    		statusCode: {
    			401 : function () {
    				//Edit start LIXD-614 TinVNIT 12022016
    				//$('#modal_message').dialog('close');
    				//System.sesstion_err_msg();
    				//Edit end LIXD-614 TinVNIT 12022016
    			}
    		}
    	};
    };
    
    System.prototype.always_func = function (data){
    	//Do Nothing.
    };
    System.prototype.done_func = function (data){
    	//System.message_success('Thuc hien thanh cong');
    };
    System.prototype.fail_func = function (data) {
    	System.message_error(data.responseText);
    };
    
    System.prototype.connect = function (action_type, ajax_url, ajax_data, loaderDisplay = true) {
    	var aa_this = this;
    	var opt =　this.ajax_option;
    	if(loaderDisplay == true){
			System.loading(true);	
		}
    	opt.type =  action_type;
    	opt.url = "{{url('/')}}" + ajax_url;
    	if (ajax_data) {
    		opt.data = ajax_data;
    	} else if (opt.data) {
    		delete opt.data;
    	}
    	$.ajax(opt)
    		.always(function (data) {
    			System.loading(false);
    			aa_this.always_func(data);
    		})	// alwaysを一番先に実行
    		.done(aa_this.done_func)
    		.fail(aa_this.fail_func);
    };
    
    
    
    System.get_form_data = function (form_id, type = false) {
		var sArr = $("#"+form_id).serializeArray();
		if(type == false){
			
			//Trả ra dạng mảng bình thường để ajax
			return sArr;
			
		}else{
			
			//Trả ra dạng FormData ajax có upload file
			var arr = new FormData();
			//console.log(arr);
			$.each(sArr, function(i, field){
				//console.log(field.value);
		        arr.append(field.name, field.value);
		    });	
		    return arr;
		    
		}
		
		return null;
	    
    };
	
	System.show_dialog = function (content,titlte = '',exec_func , ok_func) {
		//http://nakupanda.github.io/bootstrap3-dialog/
		BootstrapDialog.show({
			title: titlte,
			message: content,
			nl2br : false,
			type: BootstrapDialog.TYPE_PRIMARY,
			onshown: function(dialog) {//Chạy hàm sau khi load dialog
                if (exec_func) {
					exec_func();
				}
            },
			closable: true,
            closeByBackdrop: false,
            closeByKeyboard: false,
			buttons: [{
                label: "{{trans('common.popup_button_close')}}",
                action: function(dialog) {
                	dialog.close();
                	if (ok_func) {
						ok_func();
					}
                }
            }]
        });
    };
    
    System.message_success = function (msg,ok_func) {
    	//http://nakupanda.github.io/bootstrap3-dialog/
		BootstrapDialog.show({
            title: "{{trans('common.popup_title_success')}}",
            message: msg,
            nl2br : false,
			type: BootstrapDialog.TYPE_SUCCESS,
			closable: false,
            closeByBackdrop: false,
            closeByKeyboard: false,
            buttons: [{
                label: "{{trans('common.popup_button_close')}}",
                action: function(dialog) {
                	dialog.close();
                	if (ok_func) {
						ok_func();
					}
                }
            }]
        });
    };
    
    System.message_confirm = function (msg, ok_func, cancel_func) {
    	//http://nakupanda.github.io/bootstrap3-dialog/
		BootstrapDialog.show({
            title: "{{trans('common.popup_title_confirm')}}",
            message: msg,
            nl2br : false,
			type: BootstrapDialog.TYPE_WARNING,
			closable: false,
            closeByBackdrop: false,
            closeByKeyboard: false,
            buttons: [{
                label: "{{trans('common.popup_button_ok')}}",
                action: function(dialog) {
                	dialog.close();
                	if (ok_func) {
						ok_func();
					}
                }
            }, {
                label: "{{trans('common.popup_button_close')}}",
                action: function(dialog) {
                	dialog.close();
                	if (cancel_func) {
						cancel_func();
					}
                }
            }]
        });
    };
    
    System.message_error = function (msg,ok_func) {
    	//http://nakupanda.github.io/bootstrap3-dialog/
    	BootstrapDialog.show({
            title: "{{trans('common.popup_title_error')}}",
            message: msg,
            nl2br : false,
			type: BootstrapDialog.TYPE_DANGER,
			closable: false,
            closeByBackdrop: false,
            closeByKeyboard: false,
            buttons: [{
                label: "{{trans('common.popup_button_close')}}",
                action: function(dialog) {
                	dialog.close();
                	if (ok_func) {
						ok_func();
					}
                }
            }]
        });
    };
    
    //Reload Page
    System.reload = function () {
    	System.loading(true);
		location.reload();
    };
    
    /*$(document).on('click', '[type="submit"]', function() {
    	System.message_confirm('Thực Hiện Xử Lý Này ?',
    		function(){
    			return true;
			}
    	);
    	return false;
    });*/
    
    //Lock screen when submit
    $(document).on('submit', 'form', function() {
    	//System.loading(true);
    });
    
    System.loading = function (flag) {
    	if (flag) {
    		$("#loading_screen").show();
    	} else {
    		$("#loading_screen").hide();
    	}
    };
    
</script>
<div id="loading_screen" class="loading_screen">
    <div class="loading_dialog center">
        <!--Preloader-->
        <div class="lds-css">
            <div class="lds-ring" style="width:100%;height:100%">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
</div>

<!-- http://nakupanda.github.io/bootstrap3-dialog/ -->
<div class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body…</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->