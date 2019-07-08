<?php?>
 <!-- footer -->
 <div id="plant-foot-img"></div>
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <h3 class="foot-head">Shop</h3>
                    <a class="foot-link" href="https://aftermathlab.com/shop/"> All</a><br>
                    <a class="foot-link" href="https://aftermathlab.com/product-category/lab-supply/"> Laboratory
                        Supply</a><br>
                    <a class="foot-link" href="https://aftermathlab.com/product-category/cartridges/">
                        Cartridges</a><br>
                    <a class="foot-link" href="http://aftermathlab.com/product-category/terpenes/"> Terpenes</a><br>
                    <a class="foot-link" href="http://aftermathlab.com/product-category/equipment/"> Equipment</a><br>
                </div>
                <div class="col-lg-3">
                    <h3 class="foot-head">Explore</h3>
                    <a class="foot-link" href="https://aftermathlab.com/about/">About</a><br>
                    <a class="foot-link" href="https://aftermathlab.com/blog/">Blog</a><br>
                    <!-- <a class="foot-link" href="#">Shipping Policy</a><br> -->
                    <a class="foot-link" href="http://aftermathlab.com/return-policy/">Returns</a><br>
                    <a class="foot-link" href="http://aftermathlab.com/privacy-policy/">Privacy Policy</a><br>
                    <a class="foot-link" href="http://aftermathlab.com/terms-and-conditions/">Terms of Use</a><br>
                </div>
                <div class="col-lg-3">
                    <h3 class="foot-head">Contact</h3>
                    Email: <br>
                    <a class="foot-link" href="mailto:info@aftermathlab.com">info@aftermathlab.com</a>
                </div>
                <div class="col-lg-4">
                    <h3 class="foot-head">Sign Up For Our Newsletter!</h3>
                    <form name="submit-to-google-sheet" id="email-form" class=>
                        <input name="email" type="email" placeholder="EMAIL ADDRESS" id="email-input">
                        <button id="submit-btn" type="submit">></button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 text-center" id="copy">Copyright © 2019 Aftermath Lab. All Rights Reserved</div>
                <div class="col-md-2"></div>
                <div class="col-md-1">
                    <a href="#">
                        <img src="http://v2.aftermathlab.com/wp-content/uploads/2019/06/back-to-top-button.png"
                            height="40" width="40">
                    </a>
                </div>
            </div>
        </div>

    </div>

    <!-- Email Modal -->
    <div class="modal fade" id="email-modal" tabindex="-1" role="dialog" aria-labelledby="email-modal-label"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="email-modal-label">Email Added</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    You have been added to the Aftermath Labs email list!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {

            $('#email-modal').modal('hide');

            const scriptURL = 'https://script.google.com/macros/s/AKfycbyAsEsTGykyZh_jD6Doyeok_XfA7ihi9x6oHHEggE4qRAmMGoyF/exec'
            const form = document.forms['submit-to-google-sheet']

            form.addEventListener('submit', e => {
                e.preventDefault()
                fetch(scriptURL, { method: 'POST', body: new FormData(form) })
                    .then(response => {
                        console.log('Success!', response)
                        $('#email-input').val('');
                        $('#email-modal').modal('show');
                    })
                    .catch(error => {
                        console.error('Error!', error.message);
                        alert('Oh no... something went wrong! Please try again later!')
                    })
            })
        });

    </script>


</body>

</html>
