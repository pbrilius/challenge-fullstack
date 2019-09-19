@component('fb-btn')
    <div id="fb-root"></div>
    @push('scripts')
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script>
    @endpush
@endcomponent
