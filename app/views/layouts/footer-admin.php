            <footer class="footer text-center"> 2021 © Future Body Project - FBP <a
                    href="https://www.instagram.com/gdamerda">gdamerta</a>
            </footer>
            </div>
            </div>
            <!-- Bootstrap -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
                crossorigin="anonymous">
            </script>

            <script src="<?= baseurl ?>/assets/admin-assets/plugins/bower_components/jquery/dist/jquery.min.js">
            </script>
            <!-- Bootstrap tether Core JavaScript -->
            <script src="<?= baseurl ?>/assets/admin-assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
            <script src="<?= baseurl ?>/assets/admin-assets/js/app-style-switcher.js"></script>
            <script
                src="<?= baseurl ?>/assets/admin-assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js">
            </script>
            <!--Wave Effects -->
            <script src="<?= baseurl ?>/assets/admin-assets/js/waves.js"></script>
            <!--Menu sidebar -->
            <script src="<?= baseurl ?>/assets/admin-assets/js/sidebarmenu.js"></script>
            <!--Custom JavaScript -->
            <script src="<?= baseurl ?>/assets/admin-assets/js/custom.js"></script>
            <!--This page JavaScript -->
            <!--chartis chart-->
            <script src="<?= baseurl ?>/assets/admin-assets/plugins/bower_components/chartist/dist/chartist.min.js">
            </script>
            <script
                src="<?= baseurl ?>/assets/admin-assets/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js">
            </script>
            <script src="<?= baseurl ?>/assets/admin-assets/js/pages/dashboards/dashboard1.js"></script>
            <script type="text/javascript" charset="utf8"
                src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js">
            </script>
            <script
                src="https://cdn.tiny.cloud/1/wfamq9s40whphjl3re6vllkajgeybqx47s168t69u3x1s15x/tinymce/5/tinymce.min.js"
                referrerpolicy="origin"></script>
            <script>
tinymce.init({
    selector: '#descriptions',
    plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
    toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
    toolbar_mode: 'floating',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
});
            </script>

            <script>
tinymce.init({
    selector: '#descriptions2',
    plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
    toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
    toolbar_mode: 'floating',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
});
            </script>
            <script>
$(document).ready(function() {
    $('#packagesTable').DataTable();
});
            </script>
            <script>
$(document).ready(function() {
    $('#beforeTable').DataTable();
});
            </script>
            <script>
$(document).ready(function() {
    $('#afterTable').DataTable();
});
            </script>
            </body>

            </html>