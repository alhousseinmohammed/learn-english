@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/flatifycss/dist/css/flatify.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://unpkg.com/@popperjs/core@2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatifycss/dist/js/flatify.min.js" crossorigin="anonymous"></script>
@endpush
<div>
    @stack('styles')


    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
    </div>

    <div class="progress">
        <div class="progress-bar width-75p" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
        </div>
    </div>

    <div class="progress" style="margin-bottom: 0">
        <div class="progress-bar flex-center" role="progressbar" aria-valuenow="0" aria-valuemin="0"
            aria-valuemax="100">
            Loading...
        </div>
    </div>
</div>
