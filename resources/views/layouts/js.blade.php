<script>
    $('.btn-delete').click(function(ev) {
        ev.preventDefault();
        var _href = $(this).attr('href');
        $('form#form-delete').attr('action', _href);
        if (confirm('Bạn có chắc chắn muốn xóa ?')) {
            $('form#form-delete').submit();
        }
    });
</script>