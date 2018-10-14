<style>
	
</style>
<link href="{{ asset('librarys/bootstrap3-dialog/css/bootstrap-dialog.css') }}" rel="stylesheet">
<script src="{{ asset('librarys/bootstrap3-dialog/js/bootstrap-dialog.js') }}"></script>
<template>
    <div>
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
    </div>
</template>

<script>
    export default {
        data() {
            return {
                
            }
        },
        methods:{
        	testabc(){
        		console.log('show dialog');
        		BootstrapDialog.show({
		            title: 'Cảnh Báo',
		            message: 'aaa',
		            nl2br : false,
					type: BootstrapDialog.TYPE_DANGER,
					closable: false,
		            closeByBackdrop: false,
		            closeByKeyboard: false,
		            buttons: [{
		                label: 'Đóng'
		            }]
		        });
        	}
        },
        computed: {
	        
	    },
	    watch: {
	        
	    },
	    /*
		|--------------------------------------------------------------------------
		| Instance Lifecycle Hook.
		|--------------------------------------------------------------------------
		|
		| Instance lifecycle hook là một vòng đời hoạt động của vue.js, khi vue.js chạy đến một thời điểm nào đó trên vòng đời hoạt động 
		| thì sẽ có các scope event được gọi kèm theo đó (tương tự như magic methods trong PHP), 
		| các scope event này đã được định tên sẵn và bạn không thể thay đổi name của nó mà chỉ có thể override nó thôi. 
		|
		*/
		beforeCreate() {
			console.log('01 : beforeCreate() được gọi khi chúng ta khởi tạo vue.js và trước khi thực hiện tiến trình observe Data và init Events.')
		},
	    created() {
			console.log('02 : created() được gọi khi tiến trình observe Data và init Events hoàn thành.')
		},
	    beforeMount() {
			console.log('03 : beforeMount() được gọi ngay sau khi tiến trình render function hoàn tất.')
		},
	    mounted() {
			console.log('04 : mounted() được gọi khi tiến trình replace el hoàn tất.');
			this.testabc();
		},
	    beforeUpdate() {
			console.log('05 : beforeUpdate() được gọi khi data có sự thay đổi, và trước khi visualDOM re-rendered.')
		},
	    updated() {
			console.log('06 : updated() được gọi khi data đã được thay đổi.')
		},
	    beforeDestroy() {
			console.log('07 : beforeDestroy() được gọi ngay trước khi vue instance được destroy.')
		},
	    destroyed() {
			console.log('08 : destroyed() được gọi khi vue instance đã được destroy.')
		}
    }
</script>
