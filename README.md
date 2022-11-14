# popgtn.github.io

I'm currently relearning HTML and CSS. This website I'm build my own personal website for practice by applying things I learned in class to my website for practice
www.joshuamc.ca


## Template for New Page

````
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Joshua Mckenna's Website | This is a website about Joshua Mckenna</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="/components/navbar.js" type="text/javascript" defer></script>
    <script src="/components/footer.js" type="text/javascript" defer></script>
    <link rel="stylesheet" href="/CSS/MainStyleSheet.css">
    <link rel="stylesheet" href="/CSS/Articles-StyleSheet.css">
    <style>
        /* Header/Logo Title */
        .header {
            font-family: Pixeltext, sans-serif;
            margin: auto;

            background-size: contain;
            padding: 60px;
            text-align: center;
            justify-content: center;
            color: white;
            background: rgba(137, 108, 88, 0) url("/photos/headerbackgroundimage.jpg") repeat center;
            font-size: 30px;
            padding-top: 5%;
            padding-bottom: 10%;
        }

        div.header > div {
        }

        /*Header title*/
        div.header div > * {
            margin: 0 !important;
        }
        @media screen and (min-width: 2560px) {
            .header {
                background-size: 100% 100%;
            }
        }
    </style>
</head>
<body>
<navbar-component></navbar-component>
<main>
<section class="header">
    <div>
        <h2>Joshua Mckenna's Website</h2>
        <p>Welcome to my Website</p>
    </div>
</section>
    <div class="row">
        <aside class="main side">
            <h2>Aside Section 1</h2>
            <p>Some text..</p>
        </aside>
        <section class="main middle">
            <h2>Main Section</h2>
            <p>Some text..</p>
        </section>
        <aside class="main side">
            <h2>Aside Section 2</h2>
            <p>Some text..</p>
        </aside>
    </div>
</main>
<footer-component></footer-component>
</body>
</html>
````