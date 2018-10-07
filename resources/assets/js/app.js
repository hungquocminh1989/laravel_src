
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    data: {
        str_test: 'hello world',
        arr_test:[
        	{ id: 0, text: 'Vegetables' },
      		{ id: 1, text: 'Cheese' },
      		{ id: 2, text: 'Whatever else humans are supposed to eat' }
        ]
    },
    methods: {
        func_test() {
            this.str_test = 'changed.'
        }
    },
    computed: {
        comp_test() {
            return this.str_test.split('').reverse().join('')
        },
        convertToUpper: {
            get : function () {
                return this.str_test.toUpperCase();
            },
            set: function (str_test) {
                this.str_test = str_test;
            }
        }
    },
    watch: {
        str_test : function () {
            console.log('Biến [str_test] đã bị thay đổi.');
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
    beforeCreate: function () {
		console.log('01 : beforeCreate() được gọi khi chúng ta khởi tạo vue.js và trước khi thực hiện tiến trình observe Data và init Events.')
	},
    created: function () {
		console.log('02 : created() được gọi khi tiến trình observe Data và init Events hoàn thành.')
	},
    beforeMount: function () {
		console.log('03 : beforeMount() được gọi ngay sau khi tiến trình render function hoàn tất.')
	},
    mounted: function () {
		console.log('04 : mounted() được gọi khi tiến trình replace el hoàn tất.')
	},
    beforeUpdate: function () {
		console.log('05 : beforeUpdate() được gọi khi data có sự thay đổi, và trước khi visualDOM re-rendered.')
	},
    updated: function () {
		console.log('06 : updated() được gọi khi data đã được thay đổi.')
	},
    beforeDestroy: function () {
		console.log('07 : beforeDestroy() được gọi ngay trước khi vue instance được destroy.')
	},
    destroyed: function () {
		console.log('08 : destroyed() được gọi khi vue instance đã được destroy.')
	}
});

//Thiết lập lại giá trị trong computed
app.convertToUpper = "Hoc Lap Trinh Online.";
