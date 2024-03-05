    <script src=" <?= base_url('particleJS/particles.min.js') ?>"></script>
    <script src=" <?= base_url('particleJS/custom.js') ?>"></script>
    <script src=" <?= base_url('assets/js/jquery.slim.min.js') ?>"></script>
    <script src=" <?= base_url('assets/js/popper.min.js') ?>"></script>
    <script src=" <?= base_url('assets/js/bootstrap.js') ?>"></script>

    <script>
        $(document).ready(function() {
            $('#delete-modal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget); // Button that triggered the modal
                var id = button.data('id'); // Extract info from data-* attributes
                var modal = $(this);
                modal.find('#delete-id').val(id); // Assign the id to the hidden input field
            });
        });
    </script>
    </body>

    </html>