<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Lato", sans-serif;
        }

        body,
        html {
            height: 100%;
            color: #777;
            line-height: 1.8;
            margin: 0;
        }

        /* index view image (Logo. Full height) */
        .bgimg {
            opacity: 1;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 16em 0em 14em;
            background-image: url('https://s3.amazonaws.com/robotechcloud/Industrial-Robots-Teaser.jpg');
        }
    </style>
</head>
<body>
    <div class="bgimg" style="height: 100%;"></div>
</body>
</html>
