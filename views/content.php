<div class="menu">
    <ul>
        <a href="#">
            <li>I. Home</li>
        </a>
        <a href="#">
            <li>II. About</li>
        </a>
        <a href="#">
            <li>III. Services</li>
        </a>
        <a href="#">
            <li>IV. Blog</li>
        </a>
        <a href="#">
            <li>VI. Contact</li>
        </a>
    </ul>
</div>
<div class="menu-toggle"> <a href="#"><i class="fa fa-angle-double-down"></i> v </a> </div>
<div class="about">blah blah blah</div>
<!-- SCRIPT ******************************** -->
<script type="text/javascript">
$(document).ready(function() {
    $(".menu-toggle a").click(function() {
        $(".menu").slideToggle(700);
    }); 
});
</script>
