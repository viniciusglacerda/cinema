
<script>
    let btn_play = document.getElementById('btn_trailer');

    btn_play.addEventListener('click', function(){
        let content = document.createElement('iframe');

        content.setAttribute("src", "<?php echo $result[0]['link']; ?>");
        content.id = "frame";
        content.style.position = "fixed";
        content.style.top = "6vw";
        content.style.left = "10vw";
        content.style.width = "80vw";
        content.style.height = "40vw";
        document.body.appendChild(content);

        let btn = document.createElement('div');
        btn.id = "close_btn";
        btn.style.position = "fixed";
        btn.style.top  = "3vw";
        btn.style.right = "10vw";
        btn.style.width = "2vw";
        btn.style.height = "2vw";
        btn.style.border = "solid #b30000 1px"
        btn.style.backgroundColor = "#b30000";
        btn.style.padding = "2px";
        btn.style.cursor = "pointer";
        btn.innerHTML = " X";
        document.body.appendChild(btn);

        document.getElementById('opacity').style.opacity = "0.3";
        document.getElementById('opacity').style.pointerEvents = "none";

        let btn_close = document.getElementById('close_btn');
        let frame = document.getElementById('frame');

        btn_close.addEventListener('click', function(){
            if (btn_close.parentNode) {
                btn_close.parentNode.removeChild(btn_close);
                frame.parentNode.removeChild(frame);
                document.getElementById('opacity').style.opacity = "1";
                document.getElementById('opacity').style.pointerEvents = "visible"; 
            }
        });
    });
</script>