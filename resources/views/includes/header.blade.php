<header>
@section('header_content')
	header
@show
</header>
@component('components/tip_test')
    @slot('msg')
        link so 1
    @endslot
@endcomponent