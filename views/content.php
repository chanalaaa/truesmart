<div class="row">
    <div class="content-block">
        <div class="small-12   columns">
         <div class="menu-toggle"> <a href="#"><i class="fa fa-angle-double-down"></i> v </a> </div>
            <div class="menu">
                <ul>
                    <li><a href="#">I. Home</a></li>
                    <li><a href="#">II. About</a></li>
                    <li><a href="#">III. Services</a></li>
                    <li><a href="#">IV. Blog</a></li>
                    <li><a href="#">VI. Contact</a></li>
                </ul>
            </div>
           
        </div>
    </div>
    </div>
    <div class="row">
    <div class="content-block">
        <div class="small-12 columns">
        <div class="menu-toggle"> <a href="#"><i class="fa fa-angle-double-down"></i> v </a> </div>
            <div class="menu">
                <ul class="">
                    <li><a href="#">I. Home</a></li>
                    <li><a href="#">II. About</a></li>
                    <li><a href="#">III. Services</a></li>
                    <li><a href="#">IV. Blog</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="about">blah blah blah</div>
<!-- SCRIPT ******************************** -->
<script type="text/javascript">
$(document).ready(function() {
    $(".menu-toggle a").click(function() {
        $(this).parent().parent().children(".menu").slideToggle(700);
    });
});
</script>
