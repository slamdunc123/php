       
       <div id="go-top" class="iconfont icon-cc-top"></div>

       <div class="footer text-center" id="footer">&copy; slamdunc website designs</div>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
       
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" 
        integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" 
        crossorigin="anonymous">
</script>

<!-- burger nav link collapse -->
<script>

$(document).on('click','.navbar-collapse.in',function(e) {
    if( $(e.target).is('.a') ) {
        $(this).collapse('hide');
    }
});
</script>

<!-- back to top -->

<script src="plugins/back-to-top/jquery.goTop.js"></script>
       <script>
            $('.carousel').carousel({
            interval: 10000
            })
</script>

<script>
    $(function () {

$('#go-top').goTop({

  // top offset
  scrollTop: 100,

  // scroll speed in milliseconds
  scrollSpeed: 1000,

  // fade in/out speed in milliseconds
  fadeInSpeed: 1000,
  fadeOutSpeed: 500
  
})

})
</script>




    </body>
</html>