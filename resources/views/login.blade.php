<!doctype html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/bootstrap/login-form-09/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Feb 2024 05:37:58 GMT -->

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="{{ asset('login/preview.colorlib.com/theme/bootstrap/login-form-09/fonts/icomoon/style.css') }}">
    <link rel="stylesheet"
        href="{{ asset('login/preview.colorlib.com/theme/bootstrap/login-form-09/css/owl.carousel.min.css') }}">

    <link rel="stylesheet"
        href="{{ asset('login/preview.colorlib.com/theme/bootstrap/login-form-09/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('login/preview.colorlib.com/theme/bootstrap/login-form-09/css/style.css') }}">
    <title>Login #9</title>
    <script nonce="48d98b6f-55b6-4663-897d-ee061a2e7133">
        try {
            (function(w, d) {
                ! function(j, k, l, m) {
                    j[l] = j[l] || {};
                    j[l].executed = [];
                    j.zaraz = {
                        deferred: [],
                        listeners: []
                    };
                    j.zaraz.q = [];
                    j.zaraz._f = function(n) {
                        return async function() {
                            var o = Array.prototype.slice.call(arguments);
                            j.zaraz.q.push({
                                m: n,
                                a: o
                            })
                        }
                    };
                    for (const p of ["track", "set", "debug"]) j.zaraz[p] = j.zaraz._f(p);
                    j.zaraz.init = () => {
                        var q = k.getElementsByTagName(m)[0],
                            r = k.createElement(m),
                            s = k.getElementsByTagName("title")[0];
                        s && (j[l].t = k.getElementsByTagName("title")[0].text);
                        j[l].x = Math.random();
                        j[l].w = j.screen.width;
                        j[l].h = j.screen.height;
                        j[l].j = j.innerHeight;
                        j[l].e = j.innerWidth;
                        j[l].l = j.location.href;
                        j[l].r = k.referrer;
                        j[l].k = j.screen.colorDepth;
                        j[l].n = k.characterSet;
                        j[l].o = (new Date).getTimezoneOffset();
                        if (j.dataLayer)
                            for (const w of Object.entries(Object.entries(dataLayer).reduce(((x, y) => ({
                                    ...x[1],
                                    ...y[1]
                                })), {}))) zaraz.set(w[0], w[1], {
                                scope: "page"
                            });
                        j[l].q = [];
                        for (; j.zaraz.q.length;) {
                            const z = j.zaraz.q.shift();
                            j[l].q.push(z)
                        }
                        r.defer = !0;
                        for (const A of [localStorage, sessionStorage]) Object.keys(A || {}).filter((C => C
                            .startsWith("_zaraz_"))).forEach((B => {
                            try {
                                j[l]["z_" + B.slice(7)] = JSON.parse(A.getItem(B))
                            } catch {
                                j[l]["z_" + B.slice(7)] = A.getItem(B)
                            }
                        }));
                        r.referrerPolicy = "origin";
                        r.src = "../../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(j[
                            l])));
                        q.parentNode.insertBefore(r, q)
                    };
                    ["complete", "interactive"].includes(k.readyState) ? zaraz.init() : j.addEventListener(
                        "DOMContentLoaded", zaraz.init)
                }(w, d, "zarazData", "script");
            })(window, document)
        } catch (e) {
            throw fetch("/cdn-cgi/zaraz/t"), e;
        };
    </script>
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="form-block">
                                <div class="mb-4">
                                    <h3 class="text-white">Lanjutkan untuk masuk</h3>
                                    <p class="mb-4" style="color: white;">Silahkan mengisi data email dan password.
                                    </p>
                                </div>
                                <form action="{{ route('auth.login.user') }}" method="POST">
                                    @csrf
                                    <div class="form-group first">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control text-white" id="email"
                                            name="email" value="{{ old('email') }}">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group last mb-4">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control text-white" id="password"
                                            name="password">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <button type="submit"
                                        class="btn btn-pill text-white btn-block btn-primary">Masuk</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="{{ asset('login/preview.colorlib.com/theme/bootstrap/login-form-09/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('login/preview.colorlib.com/theme/bootstrap/login-form-09/js/popper.min.js') }}"></script>
    <script src="{{ asset('login/preview.colorlib.com/theme/bootstrap/login-form-09/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('login/preview.colorlib.com/theme/bootstrap/login-form-09/js/main.js') }}"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
        integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
        data-cf-beacon='{"rayId":"857c2934fc358588","b":1,"version":"2024.2.0","token":"cd0b4b3a733644fc843ef0b185f98241"}'
        crossorigin="anonymous"></script>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const emailInput = document.getElementById('email');
        emailInput.addEventListener('input', function() {
            localStorage.setItem('email', emailInput.value);
        });

        const storedEmail = localStorage.getItem('email');
        if (storedEmail) {
            emailInput.value = storedEmail;
        }
    });
</script>

<!-- Mirrored from preview.colorlib.com/theme/bootstrap/login-form-09/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Feb 2024 05:38:01 GMT -->

</html>
