<!--<html>-->
<!--<head>-->
<!--</head>-->
<!--<body>-->
<style>
    * {
        margin: 0;
        padding: 0;
    @include box-sizing(border-box);
    }

    html, body {
        font-family: Raleway, sans-serif;
        background-color: #fff;
    }

    footer {
        width: 100%;
        display: inline-block;
        margin: 2em 0;
        height: 70px;
        background-color: #999;
    }

    .copyright {
        width: 20%;
        float: left;
    }

    p {
        padding-left: 10%;
        color: white;
        font-size: 0.7em;
        line-height: 70px;
        text-transform: capitalize;
        letter-spacing: 1px;
    }

    .social {
        width: 50%;
        float: right;
    }

    a {
        float: left;
        line-height: 70px;
        text-decoration: none;
        color: white;
        text-align: center;
        font-weight: bold;
    }

    a:hover {
        background-color: #222;
    @include transition(all, .3s);
    }

    .linked {
        background-color: darkblue;
        width: 10%;
    }

    .face {
        background-color: darkblue;
        width: 10%;
    }

    .tweet {
        background-color: lightblue;
        width: 10%;
    }

    .support {
        background-color: green;
        font-size: 0.8em;
        width: 50%;
    }

</style>

<footer>
    <div class="copyright">
        <p>Rozetka</p>
    </div>
    <div class="social">
        <a href="#" class="support">Contact Us</a>
        <a href="#" class="face">f</a>
        <a href="#" class="tweet">t</a>
        <a href="#" class="linked">in</a>
    </div>
</footer>
</body>
</html>