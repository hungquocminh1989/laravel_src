<style>
	.container{
		
	}
	.text-red{
        color: red;
        background-color : yellow;
    }
    .text-blue{
    	color: blue;
    }
    .bg-color{
    	background-color : gray;
    }
    .border-bottom{
        border-bottom: 1px solid orange;
        padding-bottom: 10px;
    }
</style>

<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" v-bind:class="{'text-red':var_isRed}">Example Component 1</div>
                    <div class="panel-heading" :class="var_colorRed">Example Component 2</div>
                    <div class="panel-heading" :class="comp_classObject">Example Component 3</div>
                    <div class="panel-heading" :class="[var_colorBlue,var_bgColorBlue,{'border-bottom' : var_border}]">Example Component 4</div>
                    <div class="panel-heading" v-bind:style="[{color: var_colorValue1, borderBottom : var_borderValue1, paddingBottom: var_paddingValue1}]">Example Component 5</div>
                    <div class="panel-heading" :style="[var_colorValue, var_borderValue, var_paddingValue]">Example Component 6</div>
                    <div class="panel-heading" v-show="method_showlabel">Example Component 7</div>

                    <div class="panel-body">
                    	{{ var_message }}
                    	<br>
                        {{ comp_test }}
                    </div>
                    <div><button @click="method_sayHello">Change text</button></div>
                    <div><button @click="method_changecolor">Change color</button></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                var_message: 'This is my first component using binding data',
                var_arr_test:[
		        	{ id: 0, text: 'Vegetables' },
		      		{ id: 1, text: 'Cheese' },
		      		{ id: 2, text: 'Whatever else humans are supposed to eat' }
		        ],
		        var_isRed: false,
		        var_colorRed: 'text-red',
		        var_colorBlue: 'text-blue',
		        var_bgColorBlue: 'bg-color',
		        var_border: 'border-bottom',
		        var_colorValue1: false,
		        var_borderValue1: '1px solid orange',
		        var_paddingValue1: '10px',
		        var_colorValue: {
	                color : 'red'
	            },
	            var_borderValue: {
	                //sanke_case
	                'border-bottom' : '1px solid orange'
	            },
	            var_paddingValue: {
	                //camelCase
	                paddingBottom: '10px'
	            }
            }
        },
        methods:{
        	method_sayHello() {
                this.var_message = 'aaaaaaaaa'
            },
            method_changecolor() {
                if (this.var_isRed == true) {
                    this.var_isRed = false;
                } else {
                    this.var_isRed = true;
                }
            },
            method_showlabel(){
            	return true;
            }
        },
        computed: {
	        comp_test() {
	            return this.var_message.split('').reverse().join('')
	        },
	        comp_classObject : function () {
                return { 'text-red' : this.var_isRed}
            }
	    },
	    watch: {
	        var_message : function () {
	            console.log('Biến [var_message] đã bị thay đổi');
	        }
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
			console.log('04 : mounted() được gọi khi tiến trình replace el hoàn tất.')
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
