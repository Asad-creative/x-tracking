
@extends('welcome')

@section('content')
@component('partials.titles')
Color
@endcomponent

        <!-- NAVIGATION -->
                @include('partials.nav')
            <!-- NAVIGATION-->
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
        
@endsection
