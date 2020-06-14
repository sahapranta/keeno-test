@extends('layouts.app') @section('content')
<div class="container">
    <section class="top" style="height: 80vh">
        <h1 class="text-center my-5">Keeno -Shopping Simple and Fast.</h1>
        <hr width="200px" style="border:1px solid #747373" />
        <div class="d-flex justify-content-center mb-2">
            <div class="col-md-8">
                <div class="d-flex justify-content-around mt-4">
                    <img src="http://placehold.jp/200x200.png" alt="" />
                    <img src="http://placehold.jp/200x200.png" alt="" />
                    <img src="http://placehold.jp/200x200.png" alt="" />
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <button class="btn btn-secondary btn-lg text-uppercase">
                shop now
            </button>
        </div>
    </section>
    <section class="featured w-100 my-4">
        <h1 class="text-center my-4">Featured Products</h1>
        <div class="my-4">
            <slider :products="products"/>
        </div>
    </section>
    <br>
    <section class="newletter w-100 border-top border-bottom my-4 py-4">
        <div class="row px-4 my-4">
            <div class="col-md-6">
                <h1>Newsletter</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis mollitia maiores obcaecati. Nobis facere, nihil iure temporibus quasi at corporis? Iusto non et hic facere quis itaque deserunt nesciunt dolores.</p>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="form-group d-flex w-100 ml-4">
                    <input type="email" class="form-control mr-3" placeholder="Email Address" />
                    <button class="btn btn-secondary">Subscribe</button>
                </div>
            </div>
        </div>
    </section>
    <section class="product my-4">
        <product-section :categories="{{$categories}}" :products="products"/>
        <div class="w-100 text-center">
            <button class="btn btn-secondary">Shop More</button>
        </div>
    </section>
    <section class="about w-100 border-top border-bottom my-4 py-4">
        <div class="my-4 text-center mx-4 px-4">
            <h1 class="mb-3">About Our Shop</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius, consequatur nihil temporibus, deleniti maiores fuga dolorum delectus culpa vitae consectetur, harum dignissimos inventore? Officia, atque neque incidunt recusandae provident illo! atque neque incidunt recusandae provident illo!</p>
        </div>
    </section>
    <section class="bottom">
        <div class="row">
            <div class="col-md-4">
                <img src="http://placehold.jp/90x90.png" alt="" />
                <address>
                    1717 Harrison St. San Fransisco <br>
                    CA 94103, USA
                </address>
            </div>
            <div class="col-md-8">
                <div class="w-100 d-flex justify-content-between mr-4 px-4">
                    <div>
                        <p class="text-uppercase mb-3">Main Menu</p>
                        <ul class="list-unstyled">
                            <li>Home</li>
                            <li>About</li>
                            <li>Shop</li>
                            <li>Help</li>
                        </ul>
                    </div>
                    <div>
                        <p class="text-uppercase mb-3">Company</p>
                        <ul class="list-unstyled">
                            <li>The Company</li>
                            <li>Careers</li>
                            <li>Press</li>
                        </ul>
                    </div>
                    <div>
                        <p class="text-uppercase mb-3">Discover</p>
                        <ul class="list-unstyled">
                            <li>The Team</li>
                            <li>Our History</li>
                            <li>Brand Moto</li>
                        </ul>
                    </div>
                    <div>
                        <p class="text-uppercase mb-3">Find Us on</p>
                        <ul class="list-unstyled">
                            <li>Facebook</li>
                            <li>Twitter</li>
                            <li>Instagram</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="border-top">
        <p class="mt-2">&copy; Pranta Saha</p>
    </footer>
</div>
@endsection