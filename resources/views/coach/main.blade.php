<!DOCTYPE html>
<html lang="en"> 

<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    {!! HTML::style('coach/stylesheets/screen.css') !!}
    {!! HTML::style('coach/stylesheets/owl.carousel.css') !!} 
    {!! HTML::style('coach/stylesheets/owl.custom.css') !!}
	
</head>

<body>

    <header>
        <div id="header_wrapper">
            <div id="header_logo">

            </div>
        </div>
        <nav id="sticky_nav">
            <div id="background">
            </div>
            <ul id="taxonomy">
                <li id="first"><a href="#" id="a_one">lifecoaching</a></li>
                <li><a href="#" id="a_two">tarieven</a></li>
                <li><a href="#" id="a_three">renate breuer</a></li>
                <li><a href="#" id="a_four">contact</a></li>
                <li><a href="#" id="a_five">client area</a></li>                
            </ul>
            <ul id="hover_effect">
                <li id="number_one"></li>  
                <li></li>
                <li id="number_three"></li>
                <li></li>            
                <li id="number_five"></li>
                <li></li>
                <li id="number_seven"></li>
                <li></li>
                <li id="number_nine"></li>
                <li></li>
            </ul>
        </nav>
    </header>

    <div id="main_wrapper">
        <div id="hero_picture">
            <div id="hero"><a href="#">lifecoaching<br>online</a></div>
            <div id="hero_text">
                <p>Quisque at libero vitae lacus imperdiet <br> porta non a eros.</p>
            </div>
            <div id="hero_action">
                <a href="#">
                    coach mij
                </a>
            </div>
        </div>
        <div id="waarom_lifecoaching">
            <div id="box_line">
            </div>
            <h1>waarom</h1>
            <h2>lifecoaching</h2>
            <p>To give a shape a gradient fill, select it, then click on the Fill button and the inspector will show the color tool. To learn how to work with colors read that chapter first. At the top of the color panel you can choose between a Color, various gradients, Pattern or Noise fills.
            </p>

            <p>The available gradients are Linear, Radial or Circular gradients but each works effectively the same in Sketch.
            </p>
            <p class="third_paragraph">To give a shape a gradient fill, select it, then click on the Fill button and the inspector will show the color tool. To learn how to work with colors read that chapter first. At the top of the color panel you can choose between a Color, various gradients, Pattern or Noise fills.
            </p>

            <p class="fourth_paragraph">The available gradients are Linear, Radial or Circular gradients but each works effectively the same in Sketch.
            </p>
            <a href="#" id="read_more">read more</a>
        </div>

        <div id="soorten_lifecoaching">
            <div id="heading">
                <h1>soorten</h1>
                <h2>lifecoaching</h2>
                <div id="soorten_line">
                </div>
            </div>
            <div id="work">
                <div id="owl-example" class="owl-carousel">
                    <div>
                    <img src="{{asset('img/assertiviteit.svg')}}" class="kinds">
                    <div class="z"><a href="#" id="kind_one"><img src="{{asset('img/discover.svg')}}"></a></div>
                    <div class="y"><a href="#"><img src="{{asset('img/request.svg')}}"></a></div>
                    </div>
                    <div>
                    <img src="{{asset('img/effectief_leiderschap.svg')}}" class="kinds">
                    <div class="z"><a href="#" id="kind_two"><img src="{{asset('img/discover.svg')}}"></a></div>
                    <div class="y"><a href="#"><img src="{{asset('img/request.svg')}}"></a></div>
                    </div>
                    <div>
                    <img src="{{asset('img/personal.svg')}}" class="kinds">
                    <div class="z"><a href="#" id="kind_three"><img src="{{asset('img/discover.svg')}}"></a></div>
                    <div class="y"><a href="#"><img src="{{asset('img/request.svg')}}"></a></div>
                    </div>
                    <div>
                    <img src="{{asset('img/time.svg')}}" class="kinds">
                    <div class="z"><a href="#" id="kind_four"><img src="{{asset('img/discover.svg')}}"></a></div>
                    <div class="y"><a href="#"><img src="{{asset('img/request.svg')}}"></a></div>                   
                    </div>
                    <div>
                    <img src="{{asset('img/loopbaan.svg')}}" class="kinds">
                    <div class="z"><a href="#" id="kind_five"><img src="{{asset('img/discover.svg')}}"></a></div>
                    <div class="y"><a href="#"><img src="{{asset('img/request.svg')}}"></a></div>
                    </div>
                    <div>
                    <img src="{{asset('img/financieel.svg')}}" class="kinds">
                    <div class="z"><a href="#" id="kind_six"><img src="{{asset('img/discover.svg')}}"></a></div>
                    <div class="y"><a href="#"><img src="{{asset('img/request.svg')}}"></a></div>                    
                    </div>
                    <div>
                    <img src="{{asset('img/stress.svg')}}" class="kinds">
                    <div class="z"><a href="#" id="kind_seven"><img src="{{asset('img/discover.svg')}}"></a></div>
                    <div class="y"><a href="#"><img src="{{asset('img/request.svg')}}"></a></div>
                    </div>
                </div>
            </div>
            <div class="uitleg" id="assertiviteit_uitleg">
                <h1 id="anchor_one">Assertiviteitscoaching</h1>
                <p>
                Introverte of verlegen mensen werken vaak onder hun niveau in een wereld die op maat gemaakt lijkt voor extravertere personen. Toch dragen ze beiden andere –en even waardevolle- talenten bij aan een professionele omgeving. 
                </p>
                <a href="#" class="leesmeer">lees meer</a>
                <a href="#" class="icon_request"><img src="{{asset('img/request.svg')}}"></a>
            </div>
            <div class="uitleg" id="effectief_leider">
                <h1 id="anchor_two">Effectief Leiderschap</h1>
                <p>
                Introverte of verlegen mensen werken vaak onder hun niveau in een wereld die op maat gemaakt lijkt voor extravertere personen. Toch dragen ze beiden andere –en even waardevolle- talenten bij aan een professionele omgeving. 
                </p>
                <a href="#" class="leesmeer">lees meer</a>
                <a href="#" class="icon_request"><img src="{{asset('img/request.svg')}}"></a>
            </div>
            <div class="uitleg" id="personal_uileg">
                <h1 id="anchor_three">Personal Coaching</h1>
                <p>
                Introverte of verlegen mensen werken vaak onder hun niveau in een wereld die op maat gemaakt lijkt voor extravertere personen. Toch dragen ze beiden andere –en even waardevolle- talenten bij aan een professionele omgeving. 
                </p>
                <a href="#" class="leesmeer">lees meer</a>
                <a href="#" class="icon_request"><img src="{{asset('img/request.svg')}}"></a>
            </div>
            <div class="uitleg" id="time_uitleg">
                <h1 id="anchor_four">Time Coaching</h1>
                <p>
                Introverte of verlegen mensen werken vaak onder hun niveau in een wereld die op maat gemaakt lijkt voor extravertere personen. Toch dragen ze beiden andere –en even waardevolle- talenten bij aan een professionele omgeving. 
                </p>
                <a href="#" class="leesmeer">lees meer</a>
                <a href="#" class="icon_request"><img src="{{asset('img/request.svg')}}"></a>
            </div>
            <div class="uitleg" id="loopbaan_uitleg">
                <h1 id="anchor_five">Loopbaan Coaching</h1>
                <p>
                Introverte of verlegen mensen werken vaak onder hun niveau in een wereld die op maat gemaakt lijkt voor extravertere personen. Toch dragen ze beiden andere –en even waardevolle- talenten bij aan een professionele omgeving. 
                </p>
                <a href="#" class="leesmeer">lees meer</a>
                <a href="#" class="icon_request"><img src="{{asset('img/request.svg')}}"></a>
            </div>
            <div class="uitleg" id="financieel_uitleg">
                <h1 id="anchor_six">Financiële Coaching</h1>
                <p>
                Introverte of verlegen mensen werken vaak onder hun niveau in een wereld die op maat gemaakt lijkt voor extravertere personen. Toch dragen ze beiden andere –en even waardevolle- talenten bij aan een professionele omgeving. 
                </p>
                <a href="#" class="leesmeer">lees meer</a>
                <a href="#" class="icon_request"><img src="{{asset('img/request.svg')}}"></a>
            </div>
            <div class="uitleg" id="stress_uitleg">
                <h1 id="anchor_seven">Stress Coaching</h1>
                <p>
                Introverte of verlegen mensen werken vaak onder hun niveau in een wereld die op maat gemaakt lijkt voor extravertere personen. Toch dragen ze beiden andere –en even waardevolle- talenten bij aan een professionele omgeving. 
                </p>
                <a href="#" class="leesmeer">lees meer</a>
                <a href="#" class="icon_request"><img src="{{asset('img/request.svg')}}"></a>
            </div>
        </div>

        <div id="werkwijze">
            <div id="header_werkwijze">
                <h1>werkwijze</h1>
                <h2>lifecoaching</h2>
                <div id="werkwijze_line">
                </div>
            </div>
            <div id="page_one">
                <div class="number">
                    <a href="#"><img src="{{asset('img/one.svg')}}"></a>
                </div>
                <div class="icon_how">
                    <a href="#"><img src="{{asset('img/intake.svg')}}"></a>
                </div>
                <h2 class="h2">intake</h2>
                <p class="paragraph">
                Om toch aan de verschillende noden tegemoet te komen, biedt r&b coach.me je de mogelijkheid om te kiezen hoe je intakegesprek zal verlopen. Dit kan zowel online via een intakeformulier als op afspraak bij je thuis.
                </p>
                <div class="icon_go_down">
                    <a href="#" id="link_one">
                        <img src="{{asset('img/go_down.svg')}}" class="scroll_down">                        
                    </a>
                </div>
            </div>
            <div id="page_two">
                <div class="number">
                    <a href="#"><img src="{{asset('img/two.svg')}}"></a>
                </div>
                <div class="icon_how">
                    <a href="#"><img src="{{asset('img/analyse.svg')}}"></a>
                </div>
                <h2 class="h2">trajectbepaling</h2>
                <p class="paragraph">
                Om toch aan de verschillende noden tegemoet te komen, biedt r&b coach.me je de mogelijkheid om te kiezen hoe je intakegesprek zal verlopen. Dit kan zowel online via een intakeformulier als op afspraak bij je thuis.
                </p>
                <div class="icon_go_down">
                    <a href="#" id="link_two">
                        <img src="{{asset('img/go_down.svg')}}" class="scroll_down">                        
                    </a>
                </div>
            </div>
            <div id="page_three">
                <div class="number">
                    <a href="#"><img src="{{asset('img/three.svg')}}"></a>
                </div>
                <div class="icon_how">
                    <a href="#"><img src="{{asset('img/coaching.svg')}}"></a>
                </div>
                <h2 class="h2">coaching sessies</h2>
                <p class="paragraph">
                Om toch aan de verschillende noden tegemoet te komen, biedt r&b coach.me je de mogelijkheid om te kiezen hoe je intakegesprek zal verlopen. Dit kan zowel online via een intakeformulier als op afspraak bij je thuis.
                </p>
                <div class="icon_go_down">
                </div>
            </div>
        </div>

        <div id="tarieven">
            <div id="header_tarieven">
                <h1>tarieven</h1>
                <h2>lifecoaching</h2>
                <div id="tarieven_line">
                </div>
            </div>
            <div id="tarieven_box">
                <div id="box_wrapper">
                    <div id="box_one">
                        <a href="#" class="offer_image"><img src="{{asset('img/videogesprek.png')}}"></a>
                        <h5 class="session">coaching sessie</h5>
                        <h2 class="onehour">1 uur</h2>
                        <h4 class="btw">incl. BTW</h4>
                        <h3 class="beurt">per beurt</h3><strong class="euro">60€</strong>
                        <a href="#" class="boek_button">boek</a>
                    </div>

                    <div id="box_two">
                        <a href="#" class="offer_image"><img src="{{asset('img/emailchat.png')}}"></a>
                        <h5 class="session">coaching sessie</h5>
                        <h2 class="onehour">1 uur</h2>
                        <h1 id="pertwee">(of per twee emails)</h1>
                        <h4 class="btw alternatief">incl. BTW</h4>
                        <h3 class="beurt">per beurt</h3><strong class="euro">60€</strong>
                        <a href="#" class="boek_button">boek</a>
                    </div>

                    <div id="box_three">
                        <a href="#"class="offer_image"><img src="{{asset('img/facetoface.png')}}"></a>
                        <h5 class="session">coaching sessie</h5>
                        <h2 class="onehour">1 uur</h2>
                        <h4 class="btw inclusief">incl. BTW</h4>
                        <h4 class="btw exclusief">excl. verplaatsingskosten</h4>
                        <h3 class="beurt">per beurt</h3><strong class="euro">90€</strong>
                        <a href="#" class="boek_button">boek</a>
                    </div>

                    <div id="box_bedrijven">
                        <h1>Bedrijven</h1>
                        <p>Op aanvraag kunnen ook coaching-trajecten of consultancy worden voorzien voor bedrijven</p>
                    </div>
                </div>
            </div>         
        </div>
        <div id="contact_box">
                {!! Form::open(array('method' => 'POST', 'route' => 'home_send_mail', 'class' => 'form')) !!}

                    @if($errors->has())
                        <div>
                            @foreach ($errors->all() as $error)
                            <li>
                                {!! $error !!}
                            </li>
                            @endforeach
                        </div>
                    @endif
                
                    {!! Form::text('name', '', array('class' => 'text_field', 'id' => 'one_field', 'placeholder' => 'your name')) !!}

                    {!! Form::email('email', '', array('class' => 'text_field', 'placeholder' => 'your e-mail')) !!}

                    {!! Form::text('message', '', array('id' => 'message', 'placeholder' => 'your message')) !!}


                    
                    <div id="sendit">
                    <button type="submit" id="send">send</button>
                    </div>


                {!! Form::close() !!}
        </div>
    </div>

    {!! HTML::script('coach/js/jquery-1.11.2.min.js') !!}
    {!! HTML::script('coach/js/owl.carousel.js') !!}
    {!! HTML::script('coach/js/hoverEffect.js') !!}    
    {!! HTML::script('coach/js/scrollDown.js') !!} 
    {!! HTML::script('coach/js/rotate.js') !!} 
    {!! HTML::script('coach/js/readMore.js') !!} 
    {!! HTML::script('coach/js/discover.js') !!} 

    <script>
        jQuery(document).scroll(function() {
            if (jQuery(this).scrollTop() > 175) {
                jQuery('#sticky_nav').css('position','fixed');
                jQuery('#sticky_nav').css('top','0');
                jQuery('#sticky_nav').css('box-shadow', '-1px 1px 3px 1px rgba(0,0,0,0.50)');      
            } 
            else {
                jQuery('#sticky_nav').css('position','static');
                jQuery('#sticky_nav').css('box-shadow', 'none');           
            }
        });
    </script>

    {!! HTML::script('coach/js/headroom.js') !!} 

    <script>
    // grab an element
    var myElement = document.querySelector("#sticky_nav");
    // construct an instance of Headroom, passing the element
    var headroom  = new Headroom(myElement);
    // initialise
    headroom.init(); 


    </script>


    <script>

        $(document).ready(function() {
         
          $("#owl-example").owlCarousel({
            singleItem: true,
            navigation: true,
            pagination: false,
            navigationText: false,
            paginationSpeed: 2000,
            slideSpeed: 1000,
            autoPlay: 9000,
          });
         
        });

    </script>

</body>

</html>