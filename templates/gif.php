<div id="backdropgif" style="display:none;">
    <script type="text/javascript">
        window.addEventListener('DOMContentLoaded', function(){
            $.get('https://api.systemexit.co.uk/get/reactions.json', function(response){
                var gif = response[Math.floor(Math.random()*response.length)].url;
                if(gif.indexOf('r9sKluB')>=0||gif.indexOf('Kurome3')>=0)
                    gif = response[Math.floor(Math.random()*response.length)].url;
                var gifloc = $("#backdropgif");
                gifloc.css('backgroundImage', 'url(\''+gif+'\')');
                gifloc.css('width','100%');
                gifloc.css('height','100%');
                gifloc.css('backgroundSize','cover');
                gifloc.css('backgroundRepeat','no-repeat');
                gifloc.css('backgroundPosition','50% 50%');
                $('body').css('padding','0');$('body').css('margin','0');
            });
            $("#backdropgif").ready(function(){$("#backdropgif").fadeIn(200, "linear");});
        });
    </script>
</div>