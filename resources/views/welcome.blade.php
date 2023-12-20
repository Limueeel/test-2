<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cake Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Freestyle+Script&display=swap">

</head>
<body>
<header class="header-with-background">
<div class="header-container">
<div class="logo">
    <h1>THE CAKE <br><span class="highlight">BOUTIQUE</span></h1>
</div>

<div class="top-section">
    <div class="categories">
            <a href="#">SIGNATURE CAKES</a>
            <a href="#">BESPOKE CAKES</a>
            <a href="#">WEDDING CAKES</a>
            <a href="#">CAKESICLES</a>
            <a href="#">CHOCOLATES</a>
            <a href="#">MASTER CLASSES</a>
    </div>

    <div class="search-profile-cart">
    <a href="#">
        <img src="../images/search_icon.png" alt="Search" class="icon" >
    </a>
    <a href="#">
        <img src="../images/profile_icon.png" alt="Profile"   class="icon">
    </a>
    <a href="#">
        <img src="../images/cart_icon.png" alt="Cart"  class="icon">
    </a>

    <div class="index-section">
        <h2>Passion Craft</h2>
        <button>Order Now</button>
    </div>
    <div class="more-dropdown">
        <span>MORE</span>
        <select>
            <option value="item1">Item 1</option>
            <option value="item2">Item 2</option>
        </select>
    </div>
</div>
</div>
</header>

    <main>

        <section class="cake-section">
        <div class="flex-container">
        <a href="cake1.html" class="cake-link">
            <div class="cake-image">
                <img src="../images/cake1.jpg" alt="Cake 1">
                <div class="image-text">Birthday Cake</div>
            </div>
        </a>
    </div>

    <div class="flex-container">
        <a href="cake2.html" class="cake-link">
            <div class="cake-image">
                <img src="../images/cake2.png" alt="Cake 2">
                <div class="image-text">Wedding Cakes</div>
            </div>
        </a>
    </div>

    <div class="flex-container">
        <a href="cake3.html" class="cake-link">
            <div class="cake-image">
                <img src="../images/cake3.jpg" alt="Cake 3">
                <div class="image-text">Christmas Cakes</div>
            </div>
        </a>
    </div>

        </section>

    <section class="about-section">
    <div class="about-us">
        <h2>About the <br>Cake Boutique</h2>
        <p>The Cake Boutique combines craftsmanship and complexity into original cake design where delicious flavor and art are synonymous, bringing
        beauty into the most ordinary days. The Cake Boutique is Dubai’s first and only exclusively-online cake shop. Innovative and advanced beyond
        the cake design industry today, award-winning Cake Artist, Beth’s designs, are one-of-a-kind, featuring digitally sketched illustrations that are
        unique to the Waldorf Astoria DIFC.</p>
    </div>

    <div class="about-images">
    <div class="image-row">
        <img src="../images/sample1.jpg" alt="About Image 1">
        <img src="../images/sample2.jpg" alt="About Image 2">
        <img src="../images/sample3.jpg" alt="About Image 3">
        <img src="../images/sample4.jpg" alt="About Image 4">
    </div>
    <div class="image-row">
        <img src="../images/sample5.jpg" alt="About Image 5">
        <img src="../images/sample6.jpg" alt="About Image 6">
        <img src="../images/sample7.jpg" alt="About Image 7">
        <img src="../images/sample8.jpg" alt="About Image 8">
    </div>
    </div>

    </section>
    </main>

    <footer>
    <section class="newsletter">
        <h3>Newsletter</h3>
        <form action="subscribe.php" method="post" class="subscription-form">
    <div class="form-row">
        <input type="email" name="email" placeholder="Enter your email" required>
    </div>
    <div class="form-row">
        <input type="text" name="firstName" placeholder="First Name">
    </div>
    <div class="form-row">
        <input type="text" name="lastName" placeholder="Last Name">
    </div>
    <div class="form-row">
        <input type="tel" name="phone" placeholder="Phone Number">
    </div>
    <div class="form-row">
        <label for="emailCheckbox">
            <input type="checkbox" id="emailCheckbox" name="emailPermission">
            Email
        </label>
        <label for="smsCheckbox">
            <input type="checkbox" id="smsCheckbox" name="smsPermission">
            SMS
        </label>
        <p> By signing up you agreeing to receive the latest news and exlusive offers from our restaurants <p>
    </div>
    <button type="submit">Subscribe</button>
        </form>
    </section>

    <section class="shortcuts">   
            <a href="#">SIGNATURE CAKES</a>
            <a href="#">BESPOKE CAKES</a>
            <a href="#">WEDDING CAKES</a>
            <a href="#">CAKESICLES</a>
            <a href="#">CHOCOLATES</a>
            <a href="#">MASTER CLASSES</a>  
    </section>

    <div class="footer-middle">
    <p > Payment And Delivery</P>
    <p > Help Center</P>
    <p > FAQs</P>
    <p > Contact Us</P>
    <div class="social-icons">
            <a href="#" target="_blank"><img src="../images/tiktok.png" alt="TikTok"></a>
            <a href="#" target="_blank"><img src="../images/youtube.png" alt="YouTube"></a>
            <a href="#" target="_blank"><img src="../images/facebook.png" alt="Facebook"></a>
            <a href="#" target="_blank"><img src="../images/instagram.png" alt="Instagram"></a>
    </div>
    </div> 
</footer>

</body>
</html>