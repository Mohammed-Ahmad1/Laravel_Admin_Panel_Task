<footer class="pc-footer">
    <div class="footer-wrapper px-6 py-3">
        <div class="grid grid-cols-12 items-center">
            <div class="col-span-12 md:col-span-6 text-muted">
                © {{ date('Y') }} Your Company. All rights reserved.
            </div>

            <div class="col-span-12 md:col-span-6 text-end">
                <a href="#" class="text-muted me-3">Privacy Policy</a>
                <a href="#" class="text-muted">Terms & Conditions</a>
            </div>
        </div>
    </div>
</footer>
<script src="{{ asset('assets/js/plugins/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>

<script>
    feather.replace();
</script>

@yield('script')
