<div class="color-bg"></div>

@section('footerJs')
<!-- footerJs -->
<script>
    $(document).ready(function() {
        let url = window.location.pathname;
        urlRegExp = new RegExp(url.replace(/\/$/, '') + "$");
        $('.side_link a').each(function() {
            if (urlRegExp.test(this.href.replace(/\/$/, ''))) {
                $(this).parent().addClass('active');
                $(this).parent().parent().css('display', 'block');
                $(this).parent().parent().prev().addClass('toggled');
                $(this).parent().parent().parent().addClass('active open');
            }
        });

        $('.side_link_parent a').each(function() {
            if (urlRegExp.test(this.href.replace(/\/$/, ''))) {
                $(this).addClass('toggled');
                $(this).parent().addClass('active open');
            }
        });
        $('nav ul.pagination').addClass('justify-content-end');
    });
</script>
<!-- end footerJS -->
@endsection