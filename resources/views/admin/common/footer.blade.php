<section class="footer-main-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Award-winning broker</h2>
                <div class="d-flex awards-wrapper">
                    <div class="awards-images">
                        <img src="assets/images/award1.png" alt="">
                    </div>
                    <div class="awards-images">
                        <img src="assets/images/award2.png" alt="Certified FMD">
                    </div>
                    <div class="awards-images">
                        <img src="assets/images/award3.png" alt="A to Z Approved">
                    </div>
                    <div class="awards-images">
                        <img src="assets/images/award4.png" alt="Best Educational Broker">
                    </div>
                </div>
                <div class="d-flex bottom-social-box">
                    <div><a href="javascript:void(0);"><i
                                class="fab fa-facebook-f"></i></a></div>
                    <div><a href="javascript:void(0);"><i
                                class="fab fa-instagram"></i></a></div>
                    <div><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="footer-bottom-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>Copyright © <?php echo date('Y'); ?> <a href="javascript:void(0);">Trading Website</a>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.slim.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>


</body>

</html>
      
     
      