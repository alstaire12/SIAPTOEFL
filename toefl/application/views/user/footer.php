                <hr>                
                <!-- Footer -->
                <footer>
                    <div class="row">
                        <div class="col-lg-12">
                            <p>Copyright &copy; SIAP TOEFL 2016</p>
                        </div>
                    </div>
                    <!-- /.row -->
                </footer>
            </div></div>
            <!-- /.container -->

            <!-- jQuery -->
            <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function(){
                    $('#fakultas').change(function(){
                        var fakultas = $("#fakultas").val();
                        $.ajax({
                            url:"<?php echo base_url().'registration_test/getFakultas'?>",
                            data: "id_fakultas="+fakultas,
                            cache: false,
                            success: function(msg){
                                $('#jurusan').html(msg);
                            }
                        });
                    });
                });
            </script>

            <script type="text/javascript">
                $(document).ready(function(){
                    $('#jurusan').change(function(){
                        var jurusan = $("#jurusan").val();
                        $.ajax({
                            url:"<?php echo base_url().'registration_test/getProgstud'?>",
                            data: "id_jurusan="+jurusan,
                            cache: false,
                            success: function(msg){
                                $('#prodi').html(msg);
                            }
                        });
                    });
                });
            </script>
        </body>
        </html>