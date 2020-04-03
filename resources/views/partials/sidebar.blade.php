<div id="mySidenav" class="sidenav  close ">
    <a href="javascript:void(0)" class="closebtn" onclick="mainControlSlide()" title="close">
        <div class="hamburger is-active">
            <span class="line white"></span>
            <span class="line white"></span>
            <span class="line white"></span>
        </div>
    </a>
    <div class="p60 ">
        <a href="" title="home">{{config('app.name')}}</a>
       
            <a title="" href="#" class="">Requisiciones</a>
        

       
            <a title="" href="#" class="">Ordenes de compra</a>
        
      
            <a title="" href="#" class="moreInfoOption">Reportes <span class="glyphicon glyphicon-menu-down"></span></a>
            <div id="moreinfoNav" style="display: none;">
                <a title="" href="" class="minium">Reporte 1</a>
                <a title="" href="" class="minium">Reporte 2</a>
                <a title="" href="" class="minium">Reporte 3</a>

            </div>



        <hr>
       
            <a title="" href="" class="medi"><b>Usuario:</b> <span class="phoneMenu"></span></a>
            <a title="" href="" class="medi"><b>Nombre:</b> <span class="phoneMenu"></span></a>
       


        <a title="" href="" class="medi"><b>Perfil:</b> <span class="phoneMenu"</span></a>
        <br>
        <br>
        <a title="" href="" class="medi"><b>Log Out:</b> <span class="glyphicon glyphicon-remove"></span></a>


    </div>
    {{--<div class="img-luxury">--}}
        {{--<img src="{{asset('img/lenguaje-white.png')}}" alt="World Lenguage" width="20" class="mundo" title="World Lenguage">--}}
        {{--@if ($lenguaje==1)--}}
            {{--<div class="lenguajesdiv" id="lenguajesdiv">--}}
                {{--<a class=" minium" title="Lenguage"  >@yield('lenguaje','English')<i class="fas fa-angle-down"></i></a>--}}
                {{--<div class="languajes" id="languajes">--}}
                    {{--<ul>--}}
                        {{--<li>--}}
                            {{--<a class="minium" href="@yield('link','#')">English</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a class="minium" href="@yield('link','#')">Español</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--@else--}}
            {{--<a class=" minium" title="Lenguage"  >@yield('lenguaje','English')</a>--}}
        {{--@endif--}}

    {{--</div>--}}
</div>


<script>
    function mainControlSlide(){
        if($("#mySidenav").hasClass('open')){
            closeNav();
        }else if($("#mySidenav").hasClass('close')){
            openNav();

        }else{
            closeNav();
        }
    }

    function openNav() {
        document.getElementById("mySidenav").style.width = "390px";
        $("#mySidenav").removeClass("close");
        $("#mySidenav").addClass("open");


    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        $("#mySidenav").removeClass("open");
        $("#mySidenav").addClass("close");
    }
</script>
