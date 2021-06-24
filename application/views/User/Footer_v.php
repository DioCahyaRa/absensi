                <footer class="footer">
                    <div class="footer-block buttons">
                        <!-- <iframe class="footer-github-btn" src="https://ghbtns.com/github-btn.html?user=modularcode&repo=modular-admin-html&type=star&count=true" frameborder="0" scrolling="0" width="140px" height="20px"></iframe> -->
                    </div>
                    <div class="footer-block author">
                        <ul>
                            <!-- <li> created by <a href="https://github.com/modularcode">ModularCode</a>
                            </li>
                            <li>
                                <a href="https://github.com/modularcode/modular-admin-html#get-in-touch">get in touch</a>
                            </li> -->
                        </ul>
                    </div>
                </footer>


            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
        <script src="<?= base_url('Assets/modular-admin/dist/')?>js/vendor.js"></script>
        <script src="<?= base_url('Assets/modular-admin/dist/')?>js/app.js"></script>

        <!-- DataTables -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.6.0/dt-1.10.25/b-1.7.1/b-html5-1.7.1/b-print-1.7.1/date-1.1.0/fh-3.1.9/r-2.2.9/sp-1.3.0/sl-1.3.3/datatables.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    

        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            } );

            // $('#myTable').DataTable( {
            //     buttons: [
            //         'copy', 'excel', 'pdf'
            //     ]
            // } );
        </script>

        <!-- Tutup DataTables -->
    </body>
</html>