<!doctype html>
<html {!! get_language_attributes() !!}>
@include('partials.head')

<body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap container" role="document">
        <div class="content">
            <main class="main">
              @yield('content')
              @php $sections = get_field('sections'); @endphp
              @php foreach ($sections as $section): @endphp
                @php $section_name = $section['acf_fc_layout']; @endphp
                @layouts('sections') 
                  @layout($section_name)
                    @include('sections.' . $section_name)
                  @endlayout 
                @endlayouts
              @php endforeach; @endphp
            </main>
            @if (App\display_sidebar())
                <aside class="sidebar">
                    @include('partials.sidebar')
                </aside>
            @endif
        </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
</body>

</html>
