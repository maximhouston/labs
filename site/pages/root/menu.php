				<p><h4>Меню</h4></p>
				<ul>
				  <a href= "https://yandex.ru/covid19/stat"><li>Количество больных короновирусом</li></a>
				  <a href= "https://www.kp.ru/putevoditel/zdorove/koronavirus/profilaktika-koronavirusa-u-cheloveka/"><li>Профилактика короновируса</li></a>
				  <a href= "https://www.rospotrebnadzor.ru/about/info/news_time/news_details.php?ELEMENT_ID=13566"><li>Памятки и рекомендаци</li></a>
					<button id="btn_modal_window">Узнать, что за событие:)</button><hr>
					  <div id="my_modal" class="modal">
						<div class="modal_content">
						  <span class="close_modal_window">×</span>
						  <p>Это таймер до начала нового года!)))))</p>
						</div>
					  </div>
				  <div id="timer"></div>
				  <script  defer src="/script/timer.js"></script>
				  <hr>				  
				</ul>
				<script language="">
				 var modal = document.getElementById("my_modal");
				 var btn = document.getElementById("btn_modal_window");
				 var span = document.getElementsByClassName("close_modal_window")[0];

				 btn.onclick = function () {
					modal.style.display = "block";
				 }

				 span.onclick = function () {
					modal.style.display = "none";
				 }

				 window.onclick = function (event) {
					if (event.target == modal) {
						modal.style.display = "none";
					}
				 }
				</script>