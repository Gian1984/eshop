
<footer class="footer-bs">
    <div class="row">
        <div class="col-md-3 footer-brand animated fadeInLeft">
            <div class="text-center mb-3">
                <img src="{{ asset('/img/DIVE SHOP.png') }}" style="max-height:150px;" alt="logo" class="img-thumbnail">
            </div>
            <p>©Copyright 2021 Gianluca Tiengo, All rights reserved</p>
        </div>
        <div class="col-md-4 footer-nav animated fadeInUp">
            <div class="col-md-6">
                <ul class="list">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contacts</a></li>
                    <li><a href="#">Terms & Condition</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-2 footer-social animated fadeInDown">
            <h4>Follow Us</h4>
            <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
            </ul>
        </div>
        <div class="col-md-3 footer-ns animated fadeInRight">
            <h4>Newsletter</h4>
            <p>Join the our universe and subscribe to our newsletter! </p>
            <p>
                <form action="/newsletter" method="post">
                    @csrf
                    <div class="input-group">
                        <input type="email" class="form-control mt-2" name="newsletter" placeholder="example@example.com" required>
                    </div>
                    <div class="input-group-btn mt-4">
                        <button type="submit" class="btn btn-outline-light">Subscribe</button>
                    </div>
                </form>
            </p>
        </div>
    </div>
</footer>

