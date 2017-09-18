<center><h2><?= $title ?></h2></center>
<hr>
 <div class="jumbotron">
<!-- The Gallery as lightbox dialog, should be a child element of the document body -->
<center>
<div id="links">
    <a href="<?php echo base_url(); ?>assets/images/photog/1.jpg" >
        <img class="img-thumbnail"  width="304" height="236" style="border:none;" src="<?php echo base_url(); ?>assets/images/photog/1.jpg" >
    </a>
    <a href="<?php echo base_url(); ?>assets/images/photog/2.jpg" >
        <img class="img-thumbnail"  width="304" height="236" style="border:none;" src="<?php echo base_url(); ?>assets/images/photog/2.jpg" >
    </a>
    <a href="<?php echo base_url(); ?>assets/images/photog/3.jpg" >
        <img class="img-thumbnail"  width="304" height="236" style="border:none;" src="<?php echo base_url(); ?>assets/images/photog/3.jpg" >
    </a> 
    <a href="<?php echo base_url(); ?>assets/images/photog/4.jpg" >
        <img class="img-thumbnail"  width="304" height="236" style="border:none;" src="<?php echo base_url(); ?>assets/images/photog/4.jpg" >
    </a>
    <a href="<?php echo base_url(); ?>assets/images/photog/5.jpg" >
        <img class="img-thumbnail"  width="304" height="236" style="border:none;" src="<?php echo base_url(); ?>assets/images/photog/5.jpg" >
    </a>
    <a href="<?php echo base_url(); ?>assets/images/photog/6.jpg" >
        <img class="img-thumbnail"  width="304" height="236" style="border:none;" src="<?php echo base_url(); ?>assets/images/photog/6.jpg" >
    </a>
    <a href="<?php echo base_url(); ?>assets/images/photog/7.jpg" >
        <img class="img-thumbnail"  width="304" height="236" style="border:none;" src="<?php echo base_url(); ?>assets/images/photog/7.jpg" >
    </a>
    <a href="<?php echo base_url(); ?>assets/images/photog/11.jpg" >
        <img class="img-thumbnail"  width="304" height="236" style="border:none;" src="<?php echo base_url(); ?>assets/images/photog/11.jpg" >
    </a>
    <a href="<?php echo base_url(); ?>assets/images/photog/9.jpg" >
        <img class="img-thumbnail"  width="304" height="236" style="border:none;" src="<?php echo base_url(); ?>assets/images/photog/9.jpg" >
    </a>
    <a href="<?php echo base_url(); ?>assets/images/photog/10.jpg" >
        <img class="img-thumbnail"  width="304" height="236" style="border:none;" src="<?php echo base_url(); ?>assets/images/photog/10.jpg" >
    </a>
    <a href="<?php echo base_url(); ?>assets/images/photog/8.jpg" >
        <img class="img-thumbnail"  width="304" height="236" style="border:none;" src="<?php echo base_url(); ?>assets/images/photog/8.jpg" >
    </a>
</div>
<div id="blueimp-gallery" class="blueimp-gallery">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
</center>
</div>

<script>
document.getElementById('links').onclick = function (event) {
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};
</script>