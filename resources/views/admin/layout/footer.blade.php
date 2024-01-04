<!-- partial:partials/_footer.html -->
<footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Kelompok 6 - 2 TI F @ Project BPF 2023 <i class="mdi mdi-heart text-danger"></i></span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"></span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('template/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('template/assets/vendors/jquery-bar-rating/jquery.barrating.min.js')}}"></script>
    <script src="{{asset('template/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('template/assets/vendors/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('template/assets/vendors/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('template/assets/vendors/flot/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('template/assets/vendors/flot/jquery.flot.fillbetween.js')}}"></script>
    <script src="{{asset('template/assets/vendors/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('template/assets/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('template/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('template/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('template/assets/js/misc.js')}}"></script>
    <script src="{{asset('template/assets/js/settings.js')}}"></script>
    <script src="{{asset('template/assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('template/assets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
    <script src="https://kit.fontawesome.com/098ceb860a.js" crossorigin="anonymous"></script>

    <!-- datatable -->
    

    <script>
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function() {
            myInput.focus()
        })
    </script>