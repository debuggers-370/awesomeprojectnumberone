@extends('layouts.app')

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-grey.css">
<script src="https://www.w3schools.com/lib/w3.js"></script>


    <style>
        html {
            margin: 0;
            padding: 0;
        }

        #info1{
            background-color: #607D8B;
        }

        #info3{
            background-color: #607D8B;
        }
        #contacts {
            background-color: #ffffff;
        }
        h1 {
            font-size: 15pt;
            color: #212121;
            text-align: center;
            padding: 18px 0 18px 0;
            margin: 0 0 10px 0;
        }

        h1 span {

            background-color: #ffffff;
            padding: 10px;
            border-radius: 10px;
        }
        p {
            padding: 0;
            margin: 0;
        }
        .img-circle {
            background-color: #ffffff;
            border: 3px solid white;
            border-radius: 10%;
        }
        .section {
            background-color: #ffffff;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 10px;
        }


        .quote {
            font-size: 12pt;
            text-align: right;
            margin-top: 10px;
        }
        table {
            width: 100%;
        }
        table, th, td {
            border: 2px solid #cecece;
            border-collapse: collapse;
            text-align: center;
            table-layout: fixed;
        }
        .selected {
            background-color: #f36f48;
            font-weight: bold;
            color: white;
        }
        li {
            margin-bottom: 15px;
            font-weight: bold;
        }
        progress {
            width: 70%;
            height: 20px;
            color: #3fb6b2;
            background: #efefef;
        }
        progress::-webkit-progress-bar {
            background: #efefef;
        }
        progress::-webkit-progress-value {
            background: #3fb6b2;
        }
        progress::-moz-progress-bar {
            color: #3fb6b2;
            background: #efefef;
        }
        iframe, audio {
            display: block;
            margin: 0 auto;
            border: 3px solid #3fb6b2;
        }
        hr {
            border: 0;
            height: 3px;
            background: gray;
        }
        form {
            text-align: center;
            margin-top: 0;
        }
        .submit {
            background-color: #000000;
            padding: 12px 45px;
            border-radius: 5px;
            cursor: pointer;
            color: #ffffff;
            border: none;
            outline: none;
            margin: 0;
            font-weight: bold;
        }
        .submit:hover {
            background-color: #43a09d;
        }
        textarea {
            height: 100px;
        }
        input, textarea {
            margin-bottom: 10px;
            font-size: 11pt;
            padding: 15px 10px 10px;
            border: 1px solid #cecece;
            background-color: #efefef;
            color: #787575;
            border-radius: 5px;
            width: 70%;
            outline: none;
        }
        .face {
            transform: scale(0.4);
            margin: 0 auto;
            display: block;
            margin-top: -35px;
            margin-bottom: -25px;
        }
        #contacts img {
            height: 50px;
            width: 50px;
            margin-left: 7px;
            margin-right: 7px;
        }
        #contacts a {
            text-decoration: none;
        }
        #contacts img:hover {
            opacity: 0.8;
        }
        #contacts {
            text-align: center;
        }
        .copyright {
            font-size: 8pt;
            text-align: right;
            padding-bottom: 10px;

        }

    </style>

@section('content')
<!-- header end -->

<!-- About us section start -->

<div class="w3-container w3-white">
    <h2 class="w3-myfont w3-center">Meet the team</h2>
    <ul class="w3-ul w3-card-4 w3-round">
        <li class="w3-bar w3-white">
            <img src={{asset('img/avatar1.png')}} class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
            <div class="w3-bar-item">
                <span class="w3-large">Xinyi Jiang</span><br>
            </div>
        </li>

        <li class="w3-bar">
            <img src= {{asset('img/avatar2.png')}} class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
            <div class="w3-bar-item">
                <span class="w3-large">James Martin</span><br>
            </div>
        </li>

        <li class="w3-bar">
            <img src= {{asset('img/avatar3.png')}} class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
            <div class="w3-bar-item">
                <span class="w3-large">Catherine Xiao</span><br>
            </div>
        </li>
        <li class="w3-bar">
            <img src= {{asset('img/avatar4.png')}}  class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
            <div class="w3-bar-item">
                <span class="w3-large">Tony Kang</span><br>
            </div>
        </li>
        <li class="w3-bar">
            <img src= {{asset('img/avatar5.png')}} class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
            <div class="w3-bar-item">
                <span class="w3-large">Quintin Kauchick</span><br>
            </div>
        </li>
        <li class="w3-bar">
            <img src= {{asset('img/avatar6.png')}} class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
            <div class="w3-bar-item">
                <span class="w3-large">Owen Handel</span><br>
            </div>
        </li>
    </ul>
</div>
<!-- About Me section end -->
<!-- dividing part -->
<div class="w3-row-padding">
    <div class="w3-col s3 w3-container">
            <img src={{asset('img/house1.jpg')}} alt="Nature" style="width:100%">
    </div>
    <div class="w3-col s3 w3-container">
            <img src={{asset('img/house2.jpg')}} alt="Fjords" style="width:100%">

    </div>
    <div class="w3-col s3 w3-container">

            <img src={{asset('img/house3.jpg')}} alt="Mountains" style="width:100%">

    </div>
    <div class="w3-col s3 w3-container">

            <img src={{asset('img/house4.jpg')}} alt="Lights" style="width:100%">

    </div>
</div><br>
<!--dividing part end-->
<hr>
<!-- Info section start -->

<div id = "info2" class="w3-container sand w3-xlarge w3-serif w3-panel w3-white w3-round-xlarge" style="padding: 5%">
    <h1 class="w3-xxlarge">What we do</h1>

            <p>At {{ config('app.name', 'Laravel') }}, we strive to bring meaningful insight to your property-based
                business. Our software gives you a clear view of you properties' capital expenditures, and more
                importantly, gives you meaningful feedback about how to plan the future. Whether you just want to
                improve maintenance or build additions, you can know exactly how much it is going to cost, which
                helps you avoid the hassle of unforeseen costs. Don't guess about your property -- {{ config('app.name','Laravel') }}
                .&nbsp;</p>

</div>
<!-- Info section end -->

<!-- Form section start -->


<form action="/action_page.php" class="w3-container w3-card-4 w3-light-grey  w3-margin w3-text-gray w3-round" style="padding: 3%">
    <h2 class="w3-center">Contact Us</h2>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
        <div class="w3-rest">
            <input class="w3-input w3-border" name="first" type="text" placeholder="First Name">
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
        <div class="w3-rest">
            <input class="w3-input w3-border" name="last" type="text" placeholder="Last Name">
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
        <div class="w3-rest">
            <input class="w3-input w3-border" name="email" type="text" placeholder="Email">
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
        <div class="w3-rest">
            <input class="w3-input w3-border" name="phone" type="text" placeholder="Phone">
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
        <div class="w3-rest">
            <input class="w3-input w3-border" name="message" type="text" placeholder="Message">
        </div>
    </div>

    <button class="w3-button w3-block w3-section w3-theme w3-ripple w3-padding">Send</button>

</form>
<!-- Form section end -->
<!-- Contacts section start -->
<div class="section" id="contacts">
    <h1><span>Follow Us</span></h1>
    <div>
        <a href="https://github.com/debuggers-370" target="_blank">
            <img alt="github" src="../../img/GitHub-Mark-32px.png" />
        </a>
    </div>
</div>
<!-- Contacts section end -->

<footer class="w3-container">
    <p class="w3-right w3-text-grey">&copy; 2017 {{ config('app.name', 'Laravel') }}. All rights reserved.</p>
</footer>
<script>
    w3.includeHTML();
</script>

@endsection
