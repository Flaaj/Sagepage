@extends('layouts.app')

@section('content')
    @while (have_posts()) @php the_post() @endphp
        @include('partials.page-header')
        @include('partials.content-page')
    @endwhile
{{-- 
    @fields('repeater_test')
    <h3> @sub('title')</h3>
    <div> @sub('wysiwyg')</div>
    <div>@field('test_field_1')</div>
    @endfields --}}
@endsection
