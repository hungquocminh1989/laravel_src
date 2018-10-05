<footer>
@section('header_footer')
	footer
@show
</footer>
@component('components/tip_test')
    @slot('msg')
        link so 2
    @endslot
@endcomponent