@include('layouts.landing.header')
<div class="container">
   {{-- sign up --}}
    <section id="about-us" class="landing-page-section">
        <div class="row">
            <div class="col-sm col-md-6 offset-md-3">
                <form class="form-signup">
                    <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="email" class="form-control" id="name" aria-describedby="nameHelp" placeholder="">
                        <small id="nameHelp" class="form-text text-muted">Your name</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="button">Sign up</button>
                </form>
            </div>
        </div>
    </section>
</div>
<script src="/js/landing_page.js"></script>
@include('layouts.landing.footer')