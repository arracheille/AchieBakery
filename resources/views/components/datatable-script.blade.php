<script>
        $(document).ready(function() {
        $('#adminTable').DataTable({
            "searching": true,
            "paging": true,
            "ordering": true,
            "info": true,
            "language": {
                "emptyTable": "Tidak ada data yang tersedia",
                "search": "Cari:",
                "lengthMenu": "Tampilkan _MENU_ entri",
                "info": "Menampilkan _START_ hingga _END_ dari _TOTAL_ entri",
                "paginate": {
                    "first": "Pertama",
                    "last": "Terakhir",
                    "next": "Selanjutnya",
                    "previous": "Sebelumnya"
                }
            }
        });
    });
</script>