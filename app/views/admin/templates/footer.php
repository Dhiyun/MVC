<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/dist/js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js"
    integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp"
    crossorigin="anonymous"></script>
<script src="../assets/custom/dashboard.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script>
    setTimeout(function () {
        document.querySelector('.alert').style.display = 'none';
    }, 5000);

    $('#tableruang').DataTable({
        "language": {
            "emptyTable": "Tidak Ada Data Pada Table Ruang."
        }
    });

    $('#tablejadwal').DataTable({
        "language": {
            "emptyTable": "Tidak Ada Data Pada Table Jadwal."
        }
    });

    new DataTable('#tablejadwal');

    new DataTable('#tableruang');

    $(document).ready(function () {
        $(".toggle").hide();
        $(".flip").click(function () {
            var kodeRuangan = $(this).data("kode");
            $(".toggle[data-kode='" + kodeRuangan + "']").slideToggle("slow");
        });
    });
</script>>