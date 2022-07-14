window.addEventListener('DOMContentLoaded', () => {
    $('a[is-modal="true"]').on('click', function (e) {
        e.preventDefault();

        $('#contentModal').load(this.href, function () {
            $('#modalGenerico').modal({ keyboard: true }, 'show');
        });

        return false;
    });
});