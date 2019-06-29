<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CSS Grid Example</title>
        
        
    </head>
    <body>
        <header>
            <div class="top-nav container">
                <div class="logo">
                    CSS Grid Example
                </div>
                <ul>
                  <li>
                    <a href="#">Shop</a>
                    <a href="#">About</a>
                    <a href="#">Blog</a>
                    <a href="#">Cart</a>
                  </li>
                </ul>
            </div>{{-- end top-nav --}}

            <div class="hero container">
              <div class="hero-copy">
                <h1>CSS Grid Example</h1>
                <p>A Practical example of using CSS Grid for a typical website layout.</p>
                <div class="hero-buttons">
                  <a href="#" class="button button-white">Button 1</a>
                  <a href="#" class="button button-white">Button 2</a>
                </div>{{-- end hero-copy --}}
                <div class="hero-image">
                  <img src="img/macbook-pro-laravel.png" alt="hero image">
                </div>
              </div>
            </div>{{-- end hero --}}
        </header>
        <div class="featured-section">
          <div class="container">
            <h1 class="text-center">CSS Grid Example</h1>
            <p class="section-description">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore vitae nisi, consequuntur illum dolores cumque pariatur quis provident deleniti nesciunt officia est reprehenderit sunt aliquid possimus temporibus enim eum hic lorem.
            </p>
          </div>
        </div>
    </body>
</html>
