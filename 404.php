<?php get_header(); ?>
  
    <div id="titleTrigger"></div>    

 <div class="full-height-div bg-primary position-relative" style="min-height: 100vh; overflow: hidden;">
    <div class="table-container" style="min-height: 100vh">  
                <div class="w-100 h-100 div-overlay-bg bg-primary" style="opacity: 1">
                    
            <div class=" bg-primary fade-in position-absolute m-0" data-trigger="titleTrigger" data-scroll-speed="+300" style="background: 
url('<?php bloginfo('template_directory'); ?>/assets/img/banner/404.jpg');  background-repeat: no-repeat;
  background-size: cover; height: 100%; width: 100%; overflow: hidden; opacity: 1; filter: brightness(1) blur(0px); background-position: center;">

        </div>
        </div>
        
        <div class="centre-content">
     <div class="container">
               <div class="col-md-10 col-lg-8 position-relative z-index-100" >
                  
                 <div class="" style="top: 0px; z-index: 0; transform: matrix(1, 0, 0, 1, 0, 0);" data-scroll-speed="-100">
                     <div class="p-1"><h1 class="mr-1 ml-1 text-content display-3" style="z-index: 100">Sorry, We Are Missing A Page</h1>
                         <div class="pb-3 pl-3 pr-3">
                     <p>We are sorry, but we couldnt find what you were looking for</p>
                             <a href="<?php echo get_home_url(); ?>">
                     <button class="btn btn-outline-light">Go To Home Page</button>
                             </a>
                      </div>
                     </div>
                   </div>
                   

            </div>
        </div>
        </div>
     </div>

</div>


<div class=" bg-primary text-light">
<div class="container-fluid">
    <div class='col-md-10  col-lg-10 mx-auto'>
    </div>
</div>
</div>


<?php get_footer(); ?>

