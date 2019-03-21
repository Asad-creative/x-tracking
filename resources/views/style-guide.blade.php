<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
    <h1 class="main">Proteus - Style Guide</h1>

    <section id="ColorPalletes">
   <div class="container">
      <h2 class="category">Color Palletes</h2>
      <hr>
      <h2 class="sectionHeading">Primery Color</h2>
      <div class="container">
         <div class="row">
            <div class="col color-box-holder">
               <div class="color-box primery01"></div>
               <code>
               <span>#20202D</span>
               <span>rgba(32,32,45) <span>
               <span>var = $primery01</span>
               </code>
            </div>
            <div class="col color-box-holder">
               <div class="color-box primery02"></div>
               <code>
               <span>#272B38</span>
               <span>rgba(39,43,56) <span>
               <span>var = $primery02</span>
               </code>
            </div>
            <div class="col color-box-holder">
               <div class="color-box primery03"></div>
               <code>
               <span>#414957</span>
               <span>rgba(65,73,87) <span>
               <span>var = $primery03</span>
               </code>
            </div>
            <div class="col color-box-holder">
               <div class="color-box primery04"></div>
               <code>
               <span>#898D94</span>
               <span>rgba(137,141,148) <span>
               <span>var = $primery04</span>
               </code>
            </div>
            <div class="col color-box-holder">
               <div class="color-box primery05"></div>
               <code>
               <span>#FACF19</span>
               <span>rgba(250,207,25) <span>
               <span>var = $primery05</span>
               </code>
            </div>
            <div class="col color-box-holder">
               <div class="color-box primery06"></div>
               <code>
               <span>#FFFFFF</span>
               <span>rgba(255,255,255) <span>
               <span>var = $primery06</span>
               </code>
            </div>
         </div>
      </div>
      <h2 class="sectionHeading">Secondary Color</h2>
      <div class="row">
         <div class="col color-box-holder">
            <div class="color-box secondary01"></div>
            <code>
            <span>#37A5FF</span>
            <span>rgba(55,165,255) <span>
            <span>var = $secondary01</span>
            </code>
         </div>
         <div class="col color-box-holder">
            <div class="color-box secondary02"></div>
            <code>
            <span>#01C0C8</span>
            <span>rgba(1,192,200) <span>
            <span>var = $secondary02</span>
            </code>
         </div>
         <div class="col color-box-holder">
            <div class="color-box secondary03"></div>
            <code>
            <span>#FD5959</span>
            <span>rgba(253,89,89) <span>
            <span>var = $secondary03</span>
            </code>
         </div>
         <div class="col color-box-holder">
            <div class="color-box secondary04"></div>
            <code>
            <span>#0081AF</span>
            <span>rgba(0,129,175) <span>
            <span>var = $secondary04</span>
            </code>
         </div>
         <div class="col color-box-holder">
            <div class="color-box secondary05"></div>
            <code>
            <span>#3EAEE0</span>
            <span>rgba(62,174,244) <span>
            <span>var = $secondary05</span>
            </code>
         </div>
         <div class="col color-box-holder">
            <div class="color-box secondary06"></div>
            <code>
            <span>#73D390</span>
            <span>rgba(115,211,144) <span>
            <span>var = $secondary06</span>
            </code>
         </div>
         <div class="col color-box-holder">
            <div class="color-box secondary07"></div>
            <code>
            <span>#F0BA06</span>
            <span>rgba(250,207,25)<span>
            <span>var = $secondary07</span>
            </code>
         </div>
      </div>
   </div>
   </div>
</section>

    <section id="Buttons">

        <div class="container">

            <h2 class="category">Buttons</h2>
            <div class="buttonHolder">
                <button type="button" class="btn btn-primary">Normal</button>
                <button type="button" class="btn btn-outline">Button with Outline</button>
                <button type="button" class="btn btn-outline dark">Secondary Button with Outline</button>
            </div>
            <hr />
            <div class="buttonHolder">
                <a href="#" class="btn btn-primary">Normal</a>
                <a href="#" class="btn btn-outline">Button with Outline</a>
                <a href="#" class="btn btn-outline dark">Secondary Button with Outline</a>
            </div>
        </div>
    </section>
    <section id="typography">
        <div class="container">
            <h2 class="category">Typography</h2>

            <h1>Headine - using primary font</h1>
            <h1 class="style1">Headine - Style1 using Secondary font</h1>
            <h1 class="style2">Headine - Style2 using Secondary font</h1>
            <h1 class="style3">Headine - Style3 using Secondary font</h1>

            <p>Paragraph styling - Typography is the art and technique of arranging type to make written language legible, readable, and appealing when displayed. The arrangement of type involves selecting typefaces, point sizes, line lengths, line-spacing, and letter-spacing, and adjusting the space between pairs of letters. </p>

            <p class="category">Typography is the art and technique of arranging type to make written language legible,</p>
            <p class="title">Typography is the art and technique of arranging type to make written language legible,</p>
            <p class="subTitle">Typography is the art and technique of arranging type to make written language legible,</p>
            <p class="subHead">Typography is the art and technique of arranging type to make written language legible,
                <label>Typography is the art and technique of arranging type to make written language legible,</label>
            </p>
            <label>Typography is the art and technique of arranging type to make written language legible,</label>

        </div>
    </section>


    <section id="forms">
        <div class="container">
            <h2 class="category">Form Elements</h2>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>

<br>

<select class="custom-select">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>

<br>

<form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Example multiple select</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>


        
        </div>
    </section>



</body>

</html>