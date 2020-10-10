<!DOCTYPE html>
<html>
    <head>
        <title>Black Box Media - On Demand TV</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
    </head>
    <body>
        
        <!-- Header -->
        <div class="header" style="background-image: url({{asset('images/web.png')}});">
            <div class="navbar">
                <button class="button login vertical-center" data-toggle="modal" data-target="#loginModal">LOGIN</button>
            </div>

            <div class="mainBox">
                <div class="center">
                    <h3 class="white-bold-text" style="font-size: 22px;">$40/Month over 285 HD channels + All Sports Packages + Unlimited PPV.</h3>
                    <h5 class="white-bold-text" > NO FEES | NO CONTRACT | NO CREDIT CHECKS</h5>
                    <br>
                    <button class="subscribe" data-toggle="modal" data-target="#exampleModalCenter">SUBSCRIBE</button>
                </div>
            </div>
        </div>

        <!-- Ribbon -->
        <div class="ribbon">
            <div class="row">
                <div>
                    <img style="width: 65%;" src="https://www.hulu.com//static/hitch/s3/2020-05/DPlus_Logo_0_1_2.png?Rj7zClAjpZ72iHJxfWDi4fkv3FcnDaB5" role="presentation">
                </div>
                <div>
                    
                </div>
                <div style="position: relative;">
                    <button class="vertical-center subscribe-2" style="right: 0px;" data-toggle="modal" data-target="#exampleModalCenter">SUBSCRIBE</button>
                </div>
            </div>
        </div>

        <!-- Promo -->
        <div>
            <img style="width: 100%;" src="images/tvweb.jpg"/>
        </div>


        <!-- Plans -->
        <div class="plans-main">
            <div class="plans-internal">
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th style=" text-align:center;">
                                <div>
                                    <div class="plan-head__card-title">Xfinity</div>
                                </div>
                            </th>

                            <th style=" text-align: center; background:#f5f6f7;">
                                <div>
                                    <div style="margin: 6px;">
                                        <span class="plan-head__card-badge">MOST POPULAR</span>
                                    </div>
                                    <div class="plan-head__card-title">BlACKBOX Media</div>
                                    <div class="plan-head__card-eyebrow">Most Popular</div>
                                    <div>
                                        <button class="buy-button" aria-label="Get Hulu plan" data-toggle="modal" data-target="#exampleModalCenter">TRY FOR $40</button>
                                    </div>
                                </div>
                            </th>

                            <th style=" text-align:center;">
                                <div>
                                    <div class="plan-head__card-title">AT&T</div>
                                </div>
                            </th>
                        </tr>
                      </thead>
                    <tbody>
                      <tr>
                        <td style=" text-align: left; ">Monthly Price</td>
                        <td>$39.99/mo</td>
                        <td style=" background:#f5f6f7;">$40/mo</td>
                        <td>$49.99/mo</td>
                      </tr>
                      <tr>
                        <td style=" text-align: left; ">Channels</td>
                        <td>10</td>
                        <td style=" background:#f5f6f7;" >255+</td>
                        <td>160</td>
                      </tr>
                      <tr>
                        <td style=" text-align: left; ">Pay Per View</td>
                        <td><span class="plan-feature__bullet_default">—</span></td>
                        <td style=" background:#f5f6f7;"><img src="https://www.hulu.com/static/hitch/static/icons/Pricing_Checkmark_black.svg"></td>
                        <td><span class="plan-feature__bullet_default">—</span></td>
                      </tr>
                      <tr>
                        <td style=" text-align: left; ">No Contracts</td>
                        <td><span class="plan-feature__bullet_default">—</span></td>
                        <td style=" background:#f5f6f7;"><img src="https://www.hulu.com/static/hitch/static/icons/Pricing_Checkmark_black.svg"></td>
                        <td><span class="plan-feature__bullet_default">—</span></td>
                      </tr>
                      <tr>
                        <td style=" text-align: left; ">Unlimited Movies</td>
                        <td><span class="plan-feature__bullet_default">—</span></td>
                        <td style=" background:#f5f6f7;"><img src="https://www.hulu.com/static/hitch/static/icons/Pricing_Checkmark_black.svg"></td>
                        <td><span class="plan-feature__bullet_default">—</span></td>
                      </tr>
                      
                    </tbody>
                  </table>
            </div>
        </div>


        <!-- footer -->
        <div class="myfooter">
            <div class="myfooter-internal">

                <div style=" text-align: left; letter-spacing: 15px;">
                    <a href="//www.facebook.com/hulu" target="_blank" rel="noopener noreferrer nofollow" aria-label="Hulu Facebook" title="Hulu Facebook">
                        <img src="https://www.hulu.com/static/hitch/static/icons/facebook.svg" role="presentation">
                    </a>
                    <a href="//twitter.com/hulu" target="_blank" rel="noopener noreferrer nofollow" aria-label="Hulu Twitter" title="Hulu Twitter">
                        <img src="https://www.hulu.com/static/hitch/static/icons/twitter.svg" role="presentation">
                    </a>
                    <a href="//www.youtube.com/channel/UCE5mQnNl8Q4H2qcv4ikaXeA" target="_blank" rel="noopener noreferrer nofollow" aria-label="Hulu Youtube" title="Hulu Youtube">
                        <img src="https://www.hulu.com/static/hitch/static/icons/youtube.svg" role="presentation">
                    </a>
                    <a href="//www.instagram.com/hulu" target="_blank" rel="noopener noreferrer nofollow" aria-label="Hulu Instagram" title="Hulu Instagram">
                        <img src="https://www.hulu.com/static/hitch/static/icons/instagram.svg" role="presentation">
                    </a>
                </div>

                <br><br>
                <div style="text-align: left;">
                    Contact Us : contact@blackboxmedia.com
                </div>

                <br>
                <div style="text-align: left;">
                    Call Us : +123456789
                </div>
                
            </div>
        </div>



        
        <!-- Register Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">SignUp</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
                <form class="card"  method="POST" action="{{ url('register') }}">
                    @csrf

                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" name="name" style="font-size: unset!important;" class="form-control form-control-lg" required placeholder="Username">
                                @if ($errors->has('name'))
                                <div class="alert alert-danger error-message">{{ $errors->first('name') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" style="font-size: unset!important;" class="form-control form-control-lg"  required placeholder="Email">
                                @if ($errors->has('email'))
                                    <div class="alert alert-danger error-message">{{ $errors->first('email') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" style="font-size: unset!important;" class="form-control form-control-lg" required placeholder="Password">
                                @if ($errors->has('password'))
                                    <div class="alert alert-danger error-message">{{ $errors->first('password') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <input type="password" name="password_confirmation" style="font-size: unset!important;" class="form-control form-control-lg" required name="confirmPassword" placeholder="Confirm Password">
                                @if ($errors->has('password'))
                                    <div class="alert alert-danger error-message">{{ $errors->first('password') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="registerForm" class="btn btn-primary">Confirm</button>
                        </div>
                </form>
            </div>
        </div>
        </div>









        <!-- Login Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

                @if ($errors->has('invalid'))
                    <div class="alert alert-danger">{{ $errors->first('invalid') }}</div>
                @endif

                @if ($errors->has('email'))
                    @foreach ($errors->get('email') as $message)
                        <div class="alert alert-danger error-message">{{ $message }}</div>
                    @endforeach
                @endif

                <form class="card"  method="post" action="{{ url('login') }}">
                    @csrf
                    <div class="modal-body">
                            
                            <div class="form-group">
                                <input type="email" name="email" style="font-size: unset!important;" class="form-control form-control-lg"  required placeholder="Email">
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" style="font-size: unset!important;" class="form-control form-control-lg" required placeholder="Password">
                            </div>

                            <div class="form-group" hidden>
                                <select required class="form-control" name="role">
                                        <option value="user">User</option>
                                </select>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="loginForm" class="btn btn-primary">Confirm</button>
                        </div>
                </form>
            </div>
        </div>
        </div>



    </body>
</html>