
<div class="col-md-8" style="border-style: outset;height: 450px;">
   	<div style="margin: 0 auto;max-width: 1000px;width: 100%;">
        <div class="camera_wrap camera_azure_skin" id="camera_random">
<?php
	$slides = array(
            '<div data-thumb="image/images/slides/thumbs/bridge.jpg" data-src="image/images/slides/bridge.jpg">
                <div class="camera_caption fadeFromBottom">
                    Camera is a responsive/adaptive slideshow. <em>Try to resize the browser window</em>
                </div>
            </div>',
            '<div data-thumb="image/images/slides/thumbs/leaf.jpg" data-src="image/images/slides/leaf.jpg">
                <div class="camera_caption fadeFromBottom">
                    It uses a light version of jQuery mobile, <em>navigate the slides by swiping with your fingers</em>
                </div>
            </div>',
            '<div data-thumb="image/images/slides/thumbs/road.jpg" data-src="image/images/slides/road.jpg">
                <div class="camera_caption fadeFromBottom">
                    <em>It\'s completely free</em> (even if a donation is appreciated)
                </div>
            </div>',
            '<div data-thumb="image/images/slides/thumbs/sea.jpg" data-src="image/images/slides/sea.jpg">
                <div class="camera_caption fadeFromBottom">
                    Camera slideshow provides many options <em>to customize your project</em> as more as possible
                </div>
            </div>',
            '<div data-thumb="image/images/slides/thumbs/shelter.jpg" data-src="image/images/slides/shelter.jpg">
                <div class="camera_caption fadeFromBottom">
                    It supports captions, HTML elements and videos and <em>it\'s validated in HTML5</em> (<a href="http://validator.w3.org/check?uri=http%3A%2F%2Fwww.pixedelic.com%2Fplugins%2Fcamera%2F&amp;charset=%28detect+automatically%29&amp;doctype=Inline&amp;group=0&amp;user-agent=W3C_Validator%2F1.2" target="_blank">have a look</a>)
                </div>
            </div>',
            '<div data-thumb="image/images/slides/thumbs/tree.jpg" data-src="image/images/slides/tree.jpg">
                <div class="camera_caption fadeFromBottom">
                    Different color skins and layouts available, <em>fullscreen ready too</em>
                </div>
            </div>'
);
shuffle($slides);
foreach ($slides as $slides) {
    echo "$slides\n";
}
?>
        </div><!-- #camera_random -->

    </div><!-- .fluid_container -->
    
    <div style="clear:both; display:block; height:100px"></div>
</div>