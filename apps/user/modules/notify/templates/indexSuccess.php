<?php use_helper('Validation', 'Javascript') ?>
<div class="contentBox">
<div class="example">
                    <button class="button primary" id="notify_btn_1">Notify</button>
                    <button class="button success" id="notify_btn_2">Notify many</button>
                    <script>
                        $(function(){
                        	  $.Notify({
                        		 caption: "Try it"
                        		 content: "Metro UI CSS is awesome!!!",
                        		 timeout: 1000 // 10 seconds
                        		 });
                        	 not.close();
                        });
                    </script>
                </div>
</div>