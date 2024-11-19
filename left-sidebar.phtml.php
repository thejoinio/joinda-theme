<?php if ($wo['loggedin'] == true) { ?>
<div class="left-sidebar">
	<ul>
		<li class="left-user-detail">
			<a href="<?php echo $wo['user']['url']; ?>" data-ajax="?link1=timeline&u=<?php echo $wo['user']['username'];?>">
				<img src="<?php echo $wo['user']['avatar'];?>" alt="<?php echo $wo['user']['name'];?> Profile Picture">
				<?php echo $wo['user']['name'];?>
				<?php if($wo['user']['verified'] == 1) { ?>
            <span class="verified-color">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="feather feather-check-circle" title="<?php echo ($wo['story']['page_id'] > 0 ? $wo['lang']['verified_page'] : $wo['lang']['verified_user']);?>" data-toggle="tooltip">
                  <path d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z" />
               </svg>
            </span>
            <?php } ?>
			<?php if ($wo['config']['pro'] == 1) { ?>
				
<svg xmlns="http://www.w3.org/2000/svg" style="width: 30px;height: 30px;" xmlns:xlink="http://www.w3.org/1999/xlink" width="41" height="16" viewBox="0 0 41 16">
  <defs>
    <linearGradient id="linear-gradient33512" x1="-0.221" y1="0.5" x2="1.061" y2="0.5" gradientUnits="objectBoundingBox">
      <stop offset="0" stop-color="#925e02"/>
      <stop offset="0.06" stop-color="#925e02"/>
      <stop offset="0.292" stop-color="#c5a13b"/>
      <stop offset="0.496" stop-color="#e5cc60"/>
      <stop offset="0.6" stop-color="#f2dc6e"/>
      <stop offset="0.666" stop-color="#ecd465"/>
      <stop offset="0.773" stop-color="#ddbd4e"/>
      <stop offset="0.906" stop-color="#c49727"/>
      <stop offset="1" stop-color="#b07908"/>
    </linearGradient>
  </defs>
  <g id="Pro_Member" data-name="Pro Member" transform="translate(-778 -546)">
    <rect id="Rectangle_1957" data-name="Rectangle 1957" width="41" height="16" rx="3" transform="translate(778 546)" fill="url(#linear-gradient33512)"/>
    <text id="PRO" transform="translate(786 558)" fill="#1e1f20" font-size="12" font-family="Helvetica-Bold, Helvetica" font-weight="700"><tspan x="0" y="0">PRO</tspan></text>
  </g>
</svg>
			<?php } ?>
			</a>
		</li>
		<li class="wow_side_post_fltr">
			<a href="<?php echo $wo['config']['site_url']; ?>" data-ajax="?index.php?link1=home">
			<svg width="466" height="736" viewBox="0 0 466 736" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M232.97 348.17C296.593 348.17 348.17 296.593 348.17 232.97C348.17 169.347 296.593 117.77 232.97 117.77C169.347 117.77 117.77 169.347 117.77 232.97C117.77 296.593 169.347 348.17 232.97 348.17Z" stroke="#805BE2" stroke-width="10" stroke-miterlimit="10"/>
				<path d="M378.89 419.85H87.04V445.45H378.89V419.85Z" fill="#805BE2"/>
				<path d="M378.89 506.9H87.04V532.5H378.89V506.9Z" fill="#805BE2"/>
				<path d="M236.15 119.18L234.25 337.93" stroke="#805BE2" stroke-width="10" stroke-miterlimit="10"/>
				<path d="M302.09 235.53C302.09 295.05 235.53 343.3 235.53 343.3C235.53 343.3 168.97 295.05 168.97 235.53C168.97 176.01 235.53 127.76 235.53 127.76C235.53 127.76 302.09 176.01 302.09 235.53Z" stroke="#805BE2" stroke-width="10" stroke-miterlimit="10"/>
				<path d="M117.76 232.97H348.17" stroke="#805BE2" stroke-width="10" stroke-miterlimit="10"/>
				<path d="M148.49 163.85C148.49 163.85 225.3 209.93 325.14 163.85" stroke="#805BE2" stroke-width="10" stroke-miterlimit="10"/>
				<path d="M148.49 312.33C148.49 312.33 220.16 251.4 320 309" stroke="#805BE2" stroke-width="10" stroke-miterlimit="10"/>
				<path d="M150.67 588.82H309.77L230.22 736L150.67 588.82Z" fill="#805BE2"/>
				<path d="M418.58 0H47.35C21.2 0 0 21.2 0 47.35V602.9C0 629.05 21.2 650.25 47.35 650.25H167.27L150.67 619.53H82.25C65.1 619.53 51.21 605.63 51.21 588.49V87.37C51.21 70.22 65.11 56.33 82.25 56.33H378.57C395.72 56.33 409.61 70.23 409.61 87.37V588.5C409.61 605.65 395.71 619.54 378.57 619.54H309.77L293.17 650.26H418.59C444.74 650.26 465.94 629.06 465.94 602.91V47.35C465.94 21.2 444.74 0 418.58 0ZM378.89 35.84C373.23 35.84 368.65 31.26 368.65 25.6C368.65 19.94 373.23 15.36 378.89 15.36C384.55 15.36 389.13 19.94 389.13 25.6C389.13 31.26 384.55 35.84 378.89 35.84Z" fill="url(#paint0_linear_1118_175)"/>
				<defs>
				<linearGradient id="paint0_linear_1118_175" x1="-146.382" y1="325.131" x2="729.068" y2="325.131" gradientUnits="userSpaceOnUse">
				<stop stop-color="#8200FF"/>
				<stop offset="0.3142" stop-color="#8100FD"/>
				<stop offset="0.4274" stop-color="#7E00F6"/>
				<stop offset="0.5081" stop-color="#7800EB"/>
				<stop offset="0.5734" stop-color="#6F00DA"/>
				<stop offset="0.6292" stop-color="#6400C4"/>
				<stop offset="0.6787" stop-color="#5600A8"/>
				<stop offset="0.7235" stop-color="#450088"/>
				<stop offset="0.7647" stop-color="#320062"/>
				<stop offset="0.803" stop-color="#1C0037"/>
				<stop offset="0.837" stop-color="#050009"/>
				<stop offset="0.8432"/>
				</linearGradient>
				</defs>
			</svg>

			<?php echo $wo['lang']['news_feed'];?>
			</a>
			<?php if ($wo['page'] == 'home') { ?>
			<?php if ($wo['config']['order_posts_by'] == 0) { ?>
			<svg role="button" xmlns="http://www.w3.org/2000/svg" id="dropdownNewsfeedOptions" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M7,10L12,15L17,10H7Z" opacity="0.7"/></svg>
			<?php } ?>
			<?php } ?>
		</li>
		<?php if ($wo['page'] == 'home') { ?>
			<?php if ($wo['config']['order_posts_by'] == 0) { ?>
					<div class="newsFeedDropdown">
					<li class="order_all <?php echo ($wo['user']['order_posts_by'] == 0) ? 'active' : ''; ?>">
							<a href="javascript:void(0);" onclick="Wo_StorePosts(0);">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M2 14H8V20H2M16 8H10V10H16M2 10H8V4H2M10 4V6H22V4M10 20H16V18H10M10 16H22V14H10"></path></svg>
								<div>
									<b><?php echo $wo['lang']['all'] ?></b>
									<!-- <p><?php echo $wo['lang']['all_tx'] ?></p> -->
								</div>
							</a>
						</li>
						<li class="order_people <?php echo ($wo['user']['order_posts_by'] == 1) ? 'active' : ''; ?>">
							<a href="javascript:void(0);" onclick="Wo_StorePosts(1);">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M16 17V19H2V17S2 13 9 13 16 17 16 17M12.5 7.5A3.5 3.5 0 1 0 9 11A3.5 3.5 0 0 0 12.5 7.5M15.94 13A5.32 5.32 0 0 1 18 17V19H22V17S22 13.37 15.94 13M15 4A3.39 3.39 0 0 0 13.07 4.59A5 5 0 0 1 13.07 10.41A3.39 3.39 0 0 0 15 11A3.5 3.5 0 0 0 15 4Z"></path></svg>
								<div>
									<b><?php echo $wo['lang']['people_i_follow'] ?></b>
									<!-- <p><?php echo $wo['lang']['people_i_follow_tx'] ?></p> -->
								</div>
							</a>
						</li>
				</div>
			<?php } ?>
			<?php } ?>
		<?php if ($wo['config']['website_mode'] != 'askfm' && $wo['config']['website_mode'] != 'instagram') { ?>
		<li>
			<a href="<?php echo Wo_SeoLink('index.php?link1=albums'); ?>" data-ajax="?link1=albums">
			<svg width="546" height="483" viewBox="0 0 546 483" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M502.45 0.459961H43.03C19.26 0.459961 0 19.73 0 43.49V439.97C0 463.74 19.27 483 43.03 483H502.45C526.22 483 545.48 463.73 545.48 439.97V43.49C545.48 19.73 526.21 0.459961 502.45 0.459961ZM451.07 42.42C470.77 42.42 486.74 58.39 486.74 78.09C486.74 97.79 470.77 113.76 451.07 113.76C431.37 113.76 415.4 97.79 415.4 78.09C415.4 58.39 431.37 42.42 451.07 42.42ZM325.91 428.45H64.68C48.77 428.45 37.97 415.85 44.04 404.4L181.02 146.09C187.09 134.64 203.5 134.64 209.57 146.09L346.55 404.4C352.63 415.86 341.82 428.45 325.91 428.45ZM478.58 428.45C478.58 428.45 364.09 428.45 359.32 428.45C359.32 428.45 373.64 419.38 368.74 403.78C367.2 398.89 302.7 291.05 302.7 291.05L352.73 195.97C360.36 181.46 382.15 181.46 389.78 195.97L497.11 399.97C503.99 413.05 493.98 428.45 478.58 428.45Z" fill="url(#paint0_linear_1118_254)"/>
				<defs>
				<linearGradient id="paint0_linear_1118_254" x1="-37.265" y1="68.8534" x2="532.042" y2="386.334" gradientUnits="userSpaceOnUse">
				<stop offset="0.1555" stop-color="#8200FF"/>
				<stop offset="0.267" stop-color="#832AF6"/>
				<stop offset="0.4549" stop-color="#866CE8"/>
				<stop offset="0.6256" stop-color="#88A0DD"/>
				<stop offset="0.773" stop-color="#89C6D5"/>
				<stop offset="0.8914" stop-color="#8ADDD0"/>
				<stop offset="0.9659" stop-color="#8AE5CE"/>
				</linearGradient>
				</defs>
			
			</svg>

 			<?php echo $wo['lang']['albums'];?>
			</a>
		</li>
		<?php } ?>
		<li>
			<a href="<?php echo Wo_SeoLink('index.php?link1=saved-posts');?>" data-ajax="?link1=saved-posts">
			<svg width="405" height="570" viewBox="0 0 405 570" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M374.78 564.52L212.42 411.9C205.58 405.47 194.9 405.52 188.12 412.02L29.86 563.82C18.64 574.58 0 566.63 0 551.09V17.64C0 7.90001 7.90001 0 17.64 0H386.86C396.6 0 404.5 7.90001 404.5 17.64V551.66C404.51 567.12 386.04 575.11 374.78 564.52Z" fill="url(#paint0_linear_1118_221)"/>
				<defs>
				<linearGradient id="paint0_linear_1118_221" x1="-24.6405" y1="500.622" x2="523.896" y2="-21.4527" gradientUnits="userSpaceOnUse">
				<stop stop-color="#8AE5CE"/>
				<stop offset="0.0297" stop-color="#8AE5CE"/>
				<stop offset="0.3832" stop-color="#8AE5CE"/>
				<stop offset="0.4954" stop-color="#87E4CD"/>
				<stop offset="0.5651" stop-color="#7FE2C8"/>
				<stop offset="0.6232" stop-color="#70DFC1"/>
				<stop offset="0.675" stop-color="#5CDAB7"/>
				<stop offset="0.7221" stop-color="#41D3AA"/>
				<stop offset="0.7523" stop-color="#2CCE9F"/>
				</linearGradient>
				</defs>
			</svg>

				<?php echo $wo['lang']['saved_posts'];?>
			</a>
		</li>
		<h3><?php echo $wo['lang']['community'];?></h3>
		<?php if ($wo['config']['events'] == 1) { ?>
		<div class="wow_side_post_fltr-events">
		<li class="wow_side_post_fltr" style="padding-right: 7px;">
			<a href="<?php echo Wo_SeoLink('index.php?link1=events'); ?>" data-ajax="?link1=events">
			<svg width="583" height="639" viewBox="0 0 583 639" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M431.95 213.63L387.99 182.8L450.5 59.6802L526.43 112.94L431.95 213.63Z" fill="url(#paint0_linear_1118_285)"/>
				<path d="M576.36 126.43C559 152.12 508.71 148.48 464.04 118.29C419.36 88.1001 397.21 42.8101 414.57 17.1201C431.93 -8.56991 482.22 -4.9299 526.89 25.2601C571.57 55.4401 593.72 100.74 576.36 126.43Z" fill="url(#paint1_linear_1118_285)"/>
				<path d="M455.59 294.71C433.7 327.1 280 223.26 301.88 190.86C323.76 158.47 375.91 155.46 418.36 184.13C460.8 212.81 477.47 262.32 455.59 294.71Z" fill="url(#paint2_linear_1118_285)"/>
				<path d="M301.04 366.27L293.05 360.67L371.53 248.77L379.53 254.37L301.04 366.27Z" fill="url(#paint3_linear_1118_285)"/>
				<path d="M470.13 305.89L469.83 569.03C469.83 581.83 459.09 592.21 445.84 592.21H67.42C54.17 592.21 43.43 581.83 43.43 569.03V214.77C43.43 201.97 54.17 191.59 67.42 191.59H268.48V141.99H28.68C12.84 141.99 0 154.4 0 169.71V610.29C0 625.6 12.84 638.01 28.68 638.01H484.58C500.42 638.01 513.26 625.6 513.26 610.29V305.89H470.13Z" fill="url(#paint4_linear_1118_285)"/>
				<path d="M267.41 305.89H10.2299L8.62988 327.45H267.41V305.89Z" fill="url(#paint5_linear_1118_285)"/>
				<defs>
				<linearGradient id="paint0_linear_1118_285" x1="401.441" y1="113.526" x2="521.119" y2="183.107" gradientUnits="userSpaceOnUse">
				<stop stop-color="#8AE5CE"/>
				<stop offset="0.0146" stop-color="#81D6C1"/>
				<stop offset="0.0593" stop-color="#6AAD9C"/>
				<stop offset="0.1095" stop-color="#55877B"/>
				<stop offset="0.1641" stop-color="#43675E"/>
				<stop offset="0.2244" stop-color="#334B46"/>
				<stop offset="0.2925" stop-color="#273532"/>
				<stop offset="0.3721" stop-color="#1E2423"/>
				<stop offset="0.4705" stop-color="#171919"/>
				<stop offset="0.6085" stop-color="#131213"/>
				<stop offset="0.9916" stop-color="#121011"/>
				</linearGradient>
				<linearGradient id="paint1_linear_1118_285" x1="408.654" y1="71.7724" x2="582.274" y2="71.7724" gradientUnits="userSpaceOnUse">
				<stop stop-color="#8AE5CE"/>
				<stop offset="0.0146" stop-color="#81D6C1"/>
				<stop offset="0.0593" stop-color="#6AAD9C"/>
				<stop offset="0.1095" stop-color="#55877B"/>
				<stop offset="0.1641" stop-color="#43675E"/>
				<stop offset="0.2244" stop-color="#334B46"/>
				<stop offset="0.2925" stop-color="#273532"/>
				<stop offset="0.3721" stop-color="#1E2423"/>
				<stop offset="0.4705" stop-color="#171919"/>
				<stop offset="0.6085" stop-color="#131213"/>
				<stop offset="0.9916" stop-color="#121011"/>
				</linearGradient>
				<linearGradient id="paint2_linear_1118_285" x1="299.755" y1="232.674" x2="465.219" y2="232.674" gradientUnits="userSpaceOnUse">
				<stop stop-color="#8AE5CE"/>
				<stop offset="0.0146" stop-color="#81D6C1"/>
				<stop offset="0.0593" stop-color="#6AAD9C"/>
				<stop offset="0.1095" stop-color="#55877B"/>
				<stop offset="0.1641" stop-color="#43675E"/>
				<stop offset="0.2244" stop-color="#334B46"/>
				<stop offset="0.2925" stop-color="#273532"/>
				<stop offset="0.3721" stop-color="#1E2423"/>
				<stop offset="0.4705" stop-color="#171919"/>
				<stop offset="0.6085" stop-color="#131213"/>
				<stop offset="0.9916" stop-color="#121011"/>
				</linearGradient>
				<linearGradient id="paint3_linear_1118_285" x1="293.047" y1="307.519" x2="379.528" y2="307.519" gradientUnits="userSpaceOnUse">
				<stop stop-color="#8AE5CE"/>
				<stop offset="0.0146" stop-color="#81D6C1"/>
				<stop offset="0.0593" stop-color="#6AAD9C"/>
				<stop offset="0.1095" stop-color="#55877B"/>
				<stop offset="0.1641" stop-color="#43675E"/>
				<stop offset="0.2244" stop-color="#334B46"/>
				<stop offset="0.2925" stop-color="#273532"/>
				<stop offset="0.3721" stop-color="#1E2423"/>
				<stop offset="0.4705" stop-color="#171919"/>
				<stop offset="0.6085" stop-color="#131213"/>
				<stop offset="0.9916" stop-color="#121011"/>
				</linearGradient>
				<linearGradient id="paint4_linear_1118_285" x1="10.9908" y1="351.403" x2="504.626" y2="491.989" gradientUnits="userSpaceOnUse">
				<stop stop-color="#8AE5CE"/>
				<stop offset="0.0146" stop-color="#81D6C1"/>
				<stop offset="0.0593" stop-color="#6AAD9C"/>
				<stop offset="0.1095" stop-color="#55877B"/>
				<stop offset="0.1641" stop-color="#43675E"/>
				<stop offset="0.2244" stop-color="#334B46"/>
				<stop offset="0.2925" stop-color="#273532"/>
				<stop offset="0.3721" stop-color="#1E2423"/>
				<stop offset="0.4705" stop-color="#171919"/>
				<stop offset="0.6085" stop-color="#131213"/>
				<stop offset="0.9916" stop-color="#121011"/>
				</linearGradient>
				<linearGradient id="paint5_linear_1118_285" x1="22.4089" y1="316.671" x2="281.197" y2="316.671" gradientUnits="userSpaceOnUse">
				<stop stop-color="#8AE5CE"/>
				<stop offset="1" stop-color="#121011"/>
				</linearGradient>
				</defs>
			</svg>

				<?php echo $wo['lang']['events'] ?>
			</a>
			<svg role="button" xmlns="http://www.w3.org/2000/svg" id="dropdownEventsOptions" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M7,10L12,15L17,10H7Z" opacity="0.7"/></svg>
		</li>
					<div class="eventsDropdown">
								<li class="<?php echo ($wo['active'] == "1" ? "active" : "")?>"><a style="background: none!important;" href="<?php echo Wo_SeoLink('index.php?link1=events'); ?>" data-ajax="?link1=events"><?php echo $wo['lang']['browse_events'] ?></a></li>
								<li class="<?php echo ($wo['active'] == "2" ? "active" : "")?>"><a style="background: none!important;" href="<?php echo Wo_SeoLink('index.php?link1=events-going'); ?>" data-ajax="?link1=events-going"><?php echo $wo['lang']['event_going']; ?>	</a></li>
								<li class="<?php echo ($wo['active'] == "3" ? "active" : "")?>"><a style="background: none!important;" href="<?php echo Wo_SeoLink('index.php?link1=events-invited'); ?>" data-ajax="?link1=events-invited"><?php echo $wo['lang']['event_invited']; ?></a></li>
								<li class="<?php echo ($wo['active'] == "4" ? "active" : "")?>"><a style="background: none!important;" href="<?php echo Wo_SeoLink('index.php?link1=events-interested'); ?>" data-ajax="?link1=events-interested"><?php echo $wo['lang']['event_intersted']; ?></a></li>
								<li class="<?php echo ($wo['active'] == "5" ? "active" : "")?>"><a style="background: none!important;" href="<?php echo Wo_SeoLink('index.php?link1=events-past'); ?>" data-ajax="?link1=events-past"><?php echo $wo['lang']['events_past']; ?></a></li>
								<?php if ($wo['config']['can_use_events']) { ?>
								<li class="<?php echo ($wo['active'] == "7" ? "active" : "")?>"><a href="<?php echo Wo_SeoLink('index.php?link1=my-events'); ?>" data-ajax="?link1=my-events"><?php echo $wo['lang']['my_events']; ?></a></li>
								<?php } ?>
				</div>
		</div>
		<?php } ?>
		<?php if ($wo['config']['forum'] == 1) { ?>
			<div class="wow_side_post_fltr-forum">
				<li class="wow_side_post_fltr wow_side_post_fltr-forum" style="padding-right: 7px;">
					<a href="<?php echo Wo_SeoLink('index.php?link1=forum'); ?>" data-ajax="?link1=forum">
					<svg width="511" height="595" viewBox="0 0 511 595" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M209.01 453.71V439.68H186.07V512.36C186.07 541.67 165.67 565.97 140.2 565.97H193.06C203 552.34 209.01 534.78 209.01 515.59V453.71Z" fill="#03131D"/>
						<path d="M488.06 439.68V453.71V512.36C488.06 541.67 467.66 565.97 442.19 565.97V594.03H442.84C480.49 594.03 511 558.91 511 515.58V439.67H488.06V439.68Z" fill="#03131D"/>
						<path d="M438.37 565.97H430.72V594.03H438.37V565.97Z" fill="#03131D"/>
						<path d="M442.19 565.97H438.37V594.03H442.19V565.97Z" fill="#03131D"/>
						<path d="M430.72 343.03H405.55V453.71H430.72V343.03Z" fill="#03131D"/>
						<path d="M430.72 453.71H405.55V458.39H430.72V453.71Z" fill="#999999"/>
						<path d="M405.55 565.97H400.14H193.06C180.56 583.12 161.82 594.03 140.84 594.03H419.25V565.97H405.55Z" fill="#03131D"/>
						<path d="M193.06 565.97H140.2H136.38V594.03H140.85C161.82 594.03 180.56 583.11 193.06 565.97Z" fill="#03131D"/>
						<path d="M430.73 565.97H419.26V594.03H430.73V565.97Z" fill="#03131D"/>
						<path d="M67.5698 0V104.58H90.9398V32.74H405.55V217.53H430.72V0H67.5698Z" fill="#03131D"/>
						<path d="M67.5698 510.63C67.5698 556.69 96.2698 594.03 131.68 594.03H136.38V565.97H134.32C110.36 565.97 90.9398 540.71 90.9398 509.54V225.9H67.5698V510.63Z" fill="#03131D"/>
						<path d="M511 449.71H188.88H186.07" stroke="#03131D" stroke-width="20" stroke-miterlimit="10"/>
						<path d="M293.47 221.72H489.25V342.85H331.21L293.47 384.87V221.72Z" stroke="url(#paint0_linear_1118_307)" stroke-width="18" stroke-miterlimit="10"/>
						<path d="M372.71 263.67H335.42V296.3H372.71V263.67Z" fill="#5E44A1"/>
						<path d="M451.95 263.67H414.66V296.3H451.95V263.67Z" fill="#03131D"/>
						<path d="M209.8 104.58H9V228.82H171.09L209.8 271.92V104.58Z" stroke="url(#paint1_linear_1118_307)" stroke-width="18" stroke-miterlimit="10"/>
						<path d="M128.525 181.081L166.775 181.081L166.775 147.611L128.525 147.611L128.525 181.081Z" fill="#03131D"/>
						<path d="M47.2432 181.081L85.4932 181.081L85.4932 147.611L47.2432 147.611L47.2432 181.081Z" fill="#03131D"/>
						<defs>
						<linearGradient id="paint0_linear_1118_307" x1="284.466" y1="310.535" x2="498.246" y2="310.535" gradientUnits="userSpaceOnUse">
						<stop stop-color="#805BE2"/>
						<stop offset="0.1382" stop-color="#6F4FC1"/>
						<stop offset="0.5582" stop-color="#3D2E63"/>
						<stop offset="0.8519" stop-color="#1E1828"/>
						<stop offset="0.9916" stop-color="#121011"/>
						</linearGradient>
						<linearGradient id="paint1_linear_1118_307" x1="0.000100469" y1="195.493" x2="218.8" y2="195.493" gradientUnits="userSpaceOnUse">
						<stop stop-color="#805BE2"/>
						<stop offset="0.1382" stop-color="#6F4FC1"/>
						<stop offset="0.5582" stop-color="#3D2E63"/>
						<stop offset="0.8519" stop-color="#1E1828"/>
						<stop offset="0.9916" stop-color="#121011"/>
						</linearGradient>
						</defs>
					</svg>

						<?php echo $wo['lang']['forum'];?>
					</a>
					<svg role="button" xmlns="http://www.w3.org/2000/svg" id="dropdownForumsOptions" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M7,10L12,15L17,10H7Z" opacity="0.7"/></svg>
				</li>
				<div class="forumDropdown">
					<li><a style="background: none!important;" href="<?php echo Wo_SeoLink('index.php?link1=forum-members');?>" data-ajax="?link1=forum-members"><?php echo $wo['lang']['members'] ?></a></li>
					<li><a style="background: none!important;" href="<?php echo Wo_SeoLink('index.php?link1=forum-search');?>" data-ajax="?link1=forum-search"><?php echo $wo['lang']['search'] ?></a></li>
					<li><a style="background: none!important;" href="<?php echo Wo_SeoLink('index.php?link1=mythreads');?>" data-ajax="?link1=mythreads"><?php echo $wo['lang']['my_threads'] ?></a></li>
					<li><a style="background: none!important;" href="<?php echo Wo_SeoLink('index.php?link1=mymessages');?>" data-ajax="?link1=mymessages"><?php echo $wo['lang']['my_messages'] ?></a></li>
				</div>
		</div>
		<?php } ?>
		<?php if ($wo['config']['groups'] == 1) { 
			$my_groups_text = $wo['lang']['my_groups'];
			$my_groups_page = 'groups';
			if (!$wo['config']['can_use_groups']) {
				$my_groups_text = $wo['lang']['joined_groups'];
			  $my_groups_page = 'joined_groups';
			}
			?>
						<div class="wow_side_post_fltr-groups">
				<li class="wow_side_post_fltr wow_side_post_fltr-groups" style="padding-right: 7px;">
					<a href="<?php echo Wo_SeoLink('index.php?link1='.$my_groups_page); ?>" data-ajax="?link1=<?php echo $my_groups_page; ?>">
					<svg width="553" height="417" viewBox="0 0 553 417" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M276.5 121.84C310.803 121.84 338.61 94.5652 338.61 60.92C338.61 27.2748 310.803 0 276.5 0C242.198 0 214.39 27.2748 214.39 60.92C214.39 94.5652 242.198 121.84 276.5 121.84Z" fill="#03131D"/>
						<path d="M436.09 150.82C466.206 150.82 490.62 126.737 490.62 97.03C490.62 67.3226 466.206 43.24 436.09 43.24C405.974 43.24 381.56 67.3226 381.56 97.03C381.56 126.737 405.974 150.82 436.09 150.82Z" fill="#03131D"/>
						<path d="M111.5 150.82C141.616 150.82 166.03 126.737 166.03 97.03C166.03 67.3226 141.616 43.24 111.5 43.24C81.3841 43.24 56.9702 67.3226 56.9702 97.03C56.9702 126.737 81.3841 150.82 111.5 150.82Z" fill="#03131D"/>
						<path d="M474.34 199.42H405.84C399.72 199.42 393.83 200.39 388.3 202.15C393.64 212.55 396.71 224.32 396.71 236.83V326.77C396.71 330.35 396.19 333.89 395.17 337.33C393.04 344.5 388.55 357.13 380.7 368.59C382.99 369.17 385.35 369.49 387.74 369.49H493.71C500.67 369.49 507.49 367.03 512.49 362.26C522.86 352.38 528.22 337.98 530.38 330.85C531.15 328.29 531.55 325.65 531.55 322.97V255.88C531.56 224.69 505.94 199.42 474.34 199.42Z" fill="#03131D"/>
						<path d="M156.28 326.18V236.83C156.28 224.49 159.28 212.87 164.49 202.58C158.61 200.57 152.32 199.42 145.75 199.42H77.2498C45.6498 199.42 20.0298 224.69 20.0298 255.87V322.52C20.0298 325.43 20.4798 328.32 21.4198 331.08C23.7698 337.97 29.3198 351.3 39.8398 361.77C44.9098 366.82 51.9398 369.48 59.1398 369.48H165.11C167.97 369.48 170.8 369.04 173.49 368.22C165.25 356.69 160.44 344.68 158.09 337.65C156.88 333.95 156.28 330.08 156.28 326.18Z" fill="#03131D"/>
						<path d="M372.6 209.98C361.5 190.25 340.11 176.88 315.51 176.88H237.49C212.59 176.88 190.97 190.59 179.99 210.72C175.1 219.69 172.31 229.93 172.31 240.81V316.3C172.31 319.6 172.82 322.87 173.9 325.99C176.18 332.63 181.14 344.55 189.94 355.26C191.48 357.13 193.1 358.98 194.88 360.75C200.66 366.47 208.66 369.48 216.87 369.48H337.58C345.5 369.48 353.27 366.69 358.97 361.29C360.63 359.71 362.16 358.02 363.6 356.28C372.4 345.65 377.24 332.66 379.35 325.71C380.23 322.81 380.69 319.82 380.69 316.79V240.81C380.69 229.63 377.75 219.12 372.6 209.98Z" fill="#03131D"/>
						<path d="M553 393.06H0V416.64H553V393.06Z" fill="#03131D"/>
					</svg>

						<?php echo $my_groups_text;?>
					</a>
					<svg role="button" xmlns="http://www.w3.org/2000/svg" id="dropdownGroupsOptions" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M7,10L12,15L17,10H7Z" opacity="0.7"/></svg>
				</li>
				<div class="groupsDropdown">
					<?php if ($wo['config']['can_use_groups']) { ?>
						<li><a style="background: none!important;" href="<?php echo Wo_SeoLink('index.php?link1=groups'); ?>" data-ajax="?link1=groups"><?php echo $wo['lang']['my_groups']; ?></a></li>
					<?php } ?>
					<li><a style="background: none!important;" href="<?php echo Wo_SeoLink('index.php?link1=suggested-groups'); ?>" data-ajax="?link1=suggested-groups"><?php echo $wo['lang']['suggested_groups'] ?></a></li>
					<li><a style="background: none!important;" href="<?php echo Wo_SeoLink('index.php?link1=joined_groups'); ?>" data-ajax="?link1=joined_groups"><?php echo $wo['lang']['joined_groups'] ?></a></li>
				</div>
		</div>
		<?php } ?>
		<?php if ($wo['config']['pages'] == 1) { 
			$my_pages_text = $wo['lang']['my_pages'];
			$my_pages_page = 'pages';
			if (!$wo['config']['can_use_pages']) {
				$my_pages_text = $wo['lang']['liked_pages'];
			  $my_pages_page = 'liked-pages';
			}
		?>
		<div class="wow_side_post_fltr-pages">
			<li class="wow_side_post_fltr" style="padding-right: 7px;">
				<a href="<?php echo Wo_SeoLink('index.php?link1='.$my_pages_page); ?>" data-ajax="?link1=<?php echo $my_pages_page; ?>">
				<svg width="351" height="500" viewBox="0 0 351 500" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M350.81 500H0V0H279.83L350.81 70.11V500Z" fill="url(#paint0_linear_1118_165)"/>
					<path d="M279.83 0L282.02 71.94L350.81 70.11L279.83 0Z" fill="#805BE2"/>
					<path d="M314.51 282.26H40.3198V427.42H314.51V282.26Z" fill="#8279DD"/>
					<defs>
					<linearGradient id="paint0_linear_1118_165" x1="-15.608" y1="10.8735" x2="333.531" y2="512.035" gradientUnits="userSpaceOnUse">
					<stop offset="0.0666" stop-color="#8AE5CE"/>
					<stop offset="0.8406" stop-color="#8200FF"/>
					</linearGradient>
					</defs>
				</svg>

					<?php echo $my_pages_text;?>
				</a>
				<svg role="button" xmlns="http://www.w3.org/2000/svg" id="dropdownPagesOptions" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M7,10L12,15L17,10H7Z" opacity="0.7"/></svg>
			</li>
			<div class="pagesDropdown">
				<?php if ($wo['config']['can_use_pages']) { ?>
					<li class="<?php echo ($wo['active'] == "1" ? "active" : "")?>"><a style="background: none!important;" href="<?php echo Wo_SeoLink('index.php?link1=pages'); ?>" data-ajax="?link1=pages"><?php echo $wo['lang']['my_pages'] ?></a></li>
				<?php } ?>
				<li class="<?php echo ($wo['active'] == "2" ? "active" : "")?>"><a style="background: none!important;" href="<?php echo Wo_SeoLink('index.php?link1=suggested-pages'); ?>" data-ajax="?link1=suggested-pages"><?php echo $wo['lang']['suggested_pages']; ?>	</a></li>
				<li class="<?php echo ($wo['active'] == "3" ? "active" : "")?>"><a style="background: none!important;" href="<?php echo Wo_SeoLink('index.php?link1=liked-pages'); ?>" data-ajax="?link1=liked-pages"><?php echo $wo['lang']['liked_pages']; ?></a></li>
			</div>
		</div>
		<?php } ?>
		<?php if ($wo['config']['poke_system'] == 1) { ?>
		<li>
			<a href="<?php echo Wo_SeoLink('index.php?link1=poke');?>"  data-ajax="?link1=poke">
			<svg width="379" height="545" viewBox="0 0 379 545" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M58.7002 127.51V400.7C58.7002 450.25 86.5302 495.15 129.24 512.93C153.71 523.12 182.92 529.96 214.16 526.19C274.28 518.93 319.15 462.59 319.15 397.07V299.37C319.15 280.16 304.77 264.59 287.04 264.59H178L174.26 126.49C174.23 125.45 174.16 124.41 174.05 123.39C171.59 100.86 147.58 89.27 129.54 100.79L118.24 108C116.46 109.14 114.24 109.09 112.5 107.88L103.88 101.86C85.7902 89.23 60.7602 101.12 58.8202 124.34C58.7402 125.39 58.7002 126.44 58.7002 127.51Z" stroke="#798693" stroke-width="35" stroke-miterlimit="10"/>
				<path d="M120.05 114.38V277.6" stroke="#798693" stroke-width="35" stroke-miterlimit="10"/>
				<path d="M319.14 329.07C319.14 329.07 414.16 347.54 319.14 423.28" stroke="#798693" stroke-width="35" stroke-miterlimit="10"/>
				<path d="M31.9701 183.34C17.1601 164.87 8.31006 141.42 8.31006 115.9C8.31006 56.3 56.6201 7.98999 116.22 7.98999C175.82 7.98999 224.13 56.3 224.13 115.9C224.13 140.54 215.87 163.25 201.97 181.41" stroke="#798693" stroke-width="16" stroke-miterlimit="10"/>
			</svg>

				<?php echo $wo['lang']['pokes'];?>
			</a>
		</li>
		<?php } ?>
		<div class="expandmore-results">
		<h3><?php echo $wo['lang']['market'];?></h3>
		<?php if ($wo['config']['classified'] == 1) { ?>
		<li>
			<a href="<?php echo Wo_SeoLink('index.php?link1=products'); ?>" data-ajax="?link1=products">
			<svg width="648" height="600" viewBox="0 0 648 600" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M114.45 391.27L111.81 490.87C111.81 490.87 111.81 519.33 145.01 519.33H401.38" stroke="url(#paint0_linear_1118_136)" stroke-width="18" stroke-miterlimit="10"/>
				<path d="M401.38 590.46C421.025 590.46 436.95 574.535 436.95 554.89C436.95 535.245 421.025 519.32 401.38 519.32C381.735 519.32 365.81 535.245 365.81 554.89C365.81 574.535 381.735 590.46 401.38 590.46Z" stroke="black" stroke-width="18" stroke-miterlimit="10"/>
				<path d="M187.96 590.46C207.605 590.46 223.53 574.535 223.53 554.89C223.53 535.245 207.605 519.32 187.96 519.32C168.315 519.32 152.39 535.245 152.39 554.89C152.39 574.535 168.315 590.46 187.96 590.46Z" stroke="#805BE2" stroke-width="18" stroke-miterlimit="10"/>
				<path d="M257.92 19.51C323.36 19.51 376.47 72.25 377.1 137.54H396.61C395.97 61.47 334.13 0 257.92 0C181.71 0 119.87 61.47 119.23 137.54H138.74C139.37 72.24 192.47 19.51 257.92 19.51Z" fill="url(#paint1_linear_1118_136)"/>
				<path d="M396.64 138.72C396.64 166.6 388.39 192.54 374.23 214.28C388.09 228.3 407.84 237.13 429.84 237.13C471.75 237.13 505.72 205.28 505.72 165.99C505.72 155.87 503.43 146.25 499.36 137.53H396.61C396.61 137.93 396.64 138.32 396.64 138.72Z" fill="url(#paint2_linear_1118_136)"/>
				<path d="M613.02 137.54H515.29C518.27 146.49 519.95 156.04 519.95 166C519.95 215.77 479.61 256.11 429.84 256.11C403.99 256.11 380.74 245.16 364.31 227.72C338.86 258.11 300.66 277.45 257.92 277.45C181.31 277.45 119.2 215.34 119.2 138.73C119.2 138.33 119.23 137.94 119.23 137.54H78.8901L107.35 474.27H534.19L648 164.53C648 149.62 632.34 137.54 613.02 137.54Z" fill="url(#paint3_linear_1118_136)"/>
				<path d="M344.39 137.54H138.73C138.73 137.94 138.7 138.33 138.7 138.73C138.7 204.57 192.07 257.94 257.91 257.94C296.32 257.94 330.46 239.76 352.26 211.56C344.36 198.19 339.72 182.66 339.72 166C339.73 156.04 341.41 146.49 344.39 137.54Z" fill="url(#paint4_linear_1118_136)"/>
				<path d="M361.77 197.25C371.54 179.96 377.14 160 377.14 138.72C377.14 138.32 377.11 137.93 377.11 137.53H360.32C356.25 146.25 353.96 155.86 353.96 165.99C353.96 177.23 356.8 187.82 361.77 197.25Z" fill="url(#paint5_linear_1118_136)"/>
				<path d="M429.84 75.88C390.03 75.88 356.31 101.73 344.39 137.53H360.32C372.03 112.41 398.74 94.85 429.85 94.85C460.96 94.85 487.66 112.42 499.38 137.53H515.31C503.37 101.73 469.65 75.88 429.84 75.88Z" fill="url(#paint6_linear_1118_136)"/>
				<path d="M93.11 151.76C93.11 151.76 88.37 66.39 3 90.11" stroke="#805BE2" stroke-width="20" stroke-miterlimit="10"/>
				<defs>
				<linearGradient id="paint0_linear_1118_136" x1="102.815" y1="459.675" x2="401.382" y2="459.675" gradientUnits="userSpaceOnUse">
				<stop offset="0.3573" stop-color="#805BE2"/>
				<stop offset="0.5191" stop-color="#6247AA"/>
				<stop offset="0.846" stop-color="#29203D"/>
				<stop offset="0.9916" stop-color="#121011"/>
				</linearGradient>
				<linearGradient id="paint1_linear_1118_136" x1="148.092" y1="68.7684" x2="425.477" y2="68.7684" gradientUnits="userSpaceOnUse">
				<stop offset="0.1555" stop-color="#8200FF"/>
				<stop offset="0.2495" stop-color="#8313FB"/>
				<stop offset="0.4403" stop-color="#8444F0"/>
				<stop offset="0.7077" stop-color="#8793E0"/>
				<stop offset="0.9659" stop-color="#8AE5CE"/>
				</linearGradient>
				<linearGradient id="paint2_linear_1118_136" x1="440.471" y1="157.57" x2="435.92" y2="459.128" gradientUnits="userSpaceOnUse">
				<stop offset="0.3573" stop-color="#805BE2"/>
				<stop offset="0.5191" stop-color="#6247AA"/>
				<stop offset="0.846" stop-color="#29203D"/>
				<stop offset="0.9916" stop-color="#121011"/>
				</linearGradient>
				<linearGradient id="paint3_linear_1118_136" x1="364.188" y1="58.089" x2="358.493" y2="767.212" gradientUnits="userSpaceOnUse">
				<stop offset="0.0689" stop-color="#805BE2"/>
				<stop offset="0.3671" stop-color="#805BE2"/>
				<stop offset="0.5086" stop-color="#6247AA"/>
				<stop offset="0.7945" stop-color="#29203D"/>
				<stop offset="0.9218" stop-color="#121011"/>
				</linearGradient>
				<linearGradient id="paint4_linear_1118_136" x1="245.372" y1="133.626" x2="246.235" y2="453.197" gradientUnits="userSpaceOnUse">
				<stop offset="0.3573" stop-color="#805BE2"/>
				<stop offset="0.5191" stop-color="#6247AA"/>
				<stop offset="0.846" stop-color="#29203D"/>
				<stop offset="0.9916" stop-color="#121011"/>
				</linearGradient>
				<linearGradient id="paint5_linear_1118_136" x1="364.414" y1="168.19" x2="360.601" y2="218.183" gradientUnits="userSpaceOnUse">
				<stop stop-color="#805BE2"/>
				<stop offset="0.2529" stop-color="#6247AA"/>
				<stop offset="0.764" stop-color="#29203D"/>
				<stop offset="0.9916" stop-color="#121011"/>
				</linearGradient>
				<linearGradient id="paint6_linear_1118_136" x1="344.387" y1="106.71" x2="515.29" y2="106.71" gradientUnits="userSpaceOnUse">
				<stop offset="0.1555" stop-color="#8200FF"/>
				<stop offset="0.2467" stop-color="#8312FB"/>
				<stop offset="0.4296" stop-color="#8441F1"/>
				<stop offset="0.6876" stop-color="#878CE1"/>
				<stop offset="0.9659" stop-color="#8AE5CE"/>
				</linearGradient>
				</defs>
			</svg>

				<?php echo $wo['lang']['market'];?>
			</a>
		</li>
		<?php } ?>
		<?php if ($wo['loggedin'] == true && $wo['config']['can_use_market']) { ?>
			<div class="wow_side_post_fltr-products">
				<li class="wow_side_post_fltr wow_side_post_fltr-products" style="padding-right: 7px;">
					<a href="<?php echo Wo_SeoLink('index.php?link1=my-products');?>" data-ajax="?link1=my-products">
					<svg width="417" height="437" viewBox="0 0 417 437" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M23.07 107.96L214.24 0L396.98 107.97L210.41 206.59L23.07 107.96Z" fill="url(#paint0_linear_1118_170)"/>
						<path d="M0.769989 126.11L192.59 227.49L189.52 436.13L0 329.79L0.769989 126.11Z" fill="url(#paint1_linear_1118_170)"/>
						<path d="M417 126.11L224.51 226.35L221.89 436.13L416.42 329.79L417 126.11Z" fill="url(#paint2_linear_1118_170)"/>
						<defs>
						<linearGradient id="paint0_linear_1118_170" x1="23.0661" y1="103.294" x2="396.982" y2="103.294" gradientUnits="userSpaceOnUse">
						<stop offset="0.0335" stop-color="#5E92B5"/>
						<stop offset="0.1343" stop-color="#49728E"/>
						<stop offset="0.2546" stop-color="#345165"/>
						<stop offset="0.3644" stop-color="#253948"/>
						<stop offset="0.4592" stop-color="#1B2A36"/>
						<stop offset="0.5279" stop-color="#182530"/>
						<stop offset="0.784" stop-color="#18242E"/>
						<stop offset="0.8867" stop-color="#161F27"/>
						<stop offset="0.9616" stop-color="#14171B"/>
						<stop offset="1" stop-color="#121011"/>
						</linearGradient>
						<linearGradient id="paint1_linear_1118_170" x1="0" y1="281.119" x2="192.59" y2="281.119" gradientUnits="userSpaceOnUse">
						<stop offset="0.0335" stop-color="#5E92B5"/>
						<stop offset="0.1343" stop-color="#49728E"/>
						<stop offset="0.2546" stop-color="#345165"/>
						<stop offset="0.3644" stop-color="#253948"/>
						<stop offset="0.4592" stop-color="#1B2A36"/>
						<stop offset="0.5279" stop-color="#182530"/>
						<stop offset="0.784" stop-color="#18242E"/>
						<stop offset="0.8867" stop-color="#161F27"/>
						<stop offset="0.9616" stop-color="#14171B"/>
						<stop offset="1" stop-color="#121011"/>
						</linearGradient>
						<linearGradient id="paint2_linear_1118_170" x1="221.89" y1="281.119" x2="417" y2="281.119" gradientUnits="userSpaceOnUse">
						<stop stop-color="#5E92B5"/>
						<stop offset="0.0166" stop-color="#5686A6"/>
						<stop offset="0.0577" stop-color="#466C87"/>
						<stop offset="0.1044" stop-color="#37566B"/>
						<stop offset="0.1572" stop-color="#2C4455"/>
						<stop offset="0.2187" stop-color="#233644"/>
						<stop offset="0.2949" stop-color="#1D2C39"/>
						<stop offset="0.4017" stop-color="#192732"/>
						<stop offset="0.6983" stop-color="#182530"/>
						<stop offset="0.8619" stop-color="#18242E"/>
						<stop offset="0.9276" stop-color="#161F27"/>
						<stop offset="0.9755" stop-color="#14171B"/>
						<stop offset="1" stop-color="#121011"/>
						</linearGradient>
						</defs>
					</svg>
						<?php echo $wo['lang']['my_products'];?>
					</a>
					<svg role="button" xmlns="http://www.w3.org/2000/svg" id="dropdownProductsOptions" width="20" height="20" 
					viewBox="0 0 24 24"><path fill="currentColor" d="M7,10L12,15L17,10H7Z" opacity="0.7"/></svg>
				</li>
				<div class="productsDropdown">
					<li><a href="<?php echo Wo_SeoLink('index.php?link1=purchased'); ?>" data-ajax="?link1=purchased"><?php echo $wo['lang']['purchased'] ?></a></li>
					<?php if ($wo['have_products'] > 0) { ?>
						<li><a href="<?php echo Wo_SeoLink('index.php?link1=orders'); ?>" data-ajax="?link1=orders"><?php echo $wo['lang']['my_events']; ?></a></li>
					<?php } ?>
					<li><a href="<?php echo Wo_SeoLink('index.php?link1=products'); ?>" data-ajax="?link1=products"><?php echo $wo['lang']['market'] ?></a></li>
				</div>
		</div>
		<?php } ?>
		<h3><?php echo $wo['lang']['more'];?></h3>
		<?php if ($wo['config']['blogs'] == 1) { ?>
		<li>
			<a href="<?php echo Wo_SeoLink('index.php?link1=blogs'); ?>" data-ajax="?link1=blogs">
			<svg width="473" height="425" viewBox="0 0 473 425" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M405.7 126.61L452.42 126.68V404.67H20V126.68L64.85 126.61" stroke="url(#paint0_linear_1118_263)" stroke-width="40" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M346.73 284.55H122.26C120.75 284.55 119.53 283.33 119.53 281.82V12.73C119.53 11.22 120.75 10 122.26 10H346.73C348.24 10 349.46 11.22 349.46 12.73V281.82C349.46 283.33 348.24 284.55 346.73 284.55Z" fill="white" stroke="url(#paint1_linear_1118_263)" stroke-width="20" stroke-miterlimit="10"/>
				<path d="M157.28 54.62C162.969 54.62 167.58 50.0086 167.58 44.32C167.58 38.6315 162.969 34.02 157.28 34.02C151.591 34.02 146.98 38.6315 146.98 44.32C146.98 50.0086 151.591 54.62 157.28 54.62Z" fill="#8200FE"/>
				<path d="M191.59 54.62C197.279 54.62 201.89 50.0086 201.89 44.32C201.89 38.6315 197.279 34.02 191.59 34.02C185.901 34.02 181.29 38.6315 181.29 44.32C181.29 50.0086 185.901 54.62 191.59 54.62Z" fill="#8200FE"/>
				<path d="M225.91 54.62C231.598 54.62 236.21 50.0086 236.21 44.32C236.21 38.6315 231.598 34.02 225.91 34.02C220.221 34.02 215.61 38.6315 215.61 44.32C215.61 50.0086 220.221 54.62 225.91 54.62Z" fill="#8200FE"/>
				<path d="M322.01 75.21H146.98V82.07H322.01V75.21Z" fill="#8200FE"/>
				<path d="M322.01 116.39H146.98V123.25H322.01V116.39Z" fill="#8200FE"/>
				<path d="M322.01 157.57H146.98V164.43H322.01V157.57Z" fill="#8200FE"/>
				<path d="M322.01 191.89H146.98V250.23H322.01V191.89Z" fill="#8200FE"/>
				<path d="M21.7202 340.16V398.6H457.57V340.16H21.7202ZM302.55 376.57C302.55 379.7 300.01 382.24 296.88 382.24H160.22C157.09 382.24 154.55 379.7 154.55 376.57V374.46C154.55 371.33 157.09 368.79 160.22 368.79H296.87C300 368.79 302.54 371.33 302.54 374.46V376.57H302.55Z" fill="url(#paint2_linear_1118_263)"/>
				<defs>
				<linearGradient id="paint0_linear_1118_263" x1="1.7138e-06" y1="265.636" x2="472.417" y2="265.636" gradientUnits="userSpaceOnUse">
				<stop offset="0.1555" stop-color="#8200FF"/>
				<stop offset="0.4779" stop-color="#8100FD"/>
				<stop offset="0.5941" stop-color="#7D01F6"/>
				<stop offset="0.6769" stop-color="#7602EA"/>
				<stop offset="0.7439" stop-color="#6D03DA"/>
				<stop offset="0.8012" stop-color="#6105C4"/>
				<stop offset="0.852" stop-color="#5107A8"/>
				<stop offset="0.898" stop-color="#3F0A88"/>
				<stop offset="0.9402" stop-color="#2A0D62"/>
				<stop offset="0.9778" stop-color="#131139"/>
				<stop offset="1" stop-color="#03131D"/>
				</linearGradient>
				<linearGradient id="paint1_linear_1118_263" x1="109.524" y1="147.275" x2="359.461" y2="147.275" gradientUnits="userSpaceOnUse">
				<stop offset="0.3827" stop-color="#805BE2"/>
				<stop offset="0.4461" stop-color="#7B58DA"/>
				<stop offset="0.5455" stop-color="#6D50C3"/>
				<stop offset="0.6685" stop-color="#55429F"/>
				<stop offset="0.8104" stop-color="#35306C"/>
				<stop offset="0.9663" stop-color="#0C182C"/>
				<stop offset="1" stop-color="#89D7D0"/>
				</linearGradient>
				<linearGradient id="paint2_linear_1118_263" x1="21.7162" y1="369.382" x2="457.565" y2="369.382" gradientUnits="userSpaceOnUse">
				<stop stop-color="#8200FF"/>
				<stop offset="0.3688" stop-color="#8100FD"/>
				<stop offset="0.5016" stop-color="#7D01F6"/>
				<stop offset="0.5964" stop-color="#7602EA"/>
				<stop offset="0.673" stop-color="#6D03DA"/>
				<stop offset="0.7386" stop-color="#6105C4"/>
				<stop offset="0.7967" stop-color="#5107A8"/>
				<stop offset="0.8492" stop-color="#3F0A88"/>
				<stop offset="0.8975" stop-color="#2A0D62"/>
				<stop offset="0.9405" stop-color="#131139"/>
				<stop offset="0.9659" stop-color="#03131D"/>
				</linearGradient>
				</defs>
			</svg>

				<?php echo $wo['lang']['blog'] ?>
			</a>
		</li>
		<?php } ?>
		<?php if ($wo['config']['find_friends'] == 1) { ?>
		<li>
			<a href="<?php echo Wo_SeoLink('index.php?link1=friends-nearby'); ?>" data-ajax="?link1=friends-nearby">
			<svg width="504" height="471" viewBox="0 0 504 471" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M235 405.88C286.78 405.88 333.36 384.41 365.76 350.2C367.89 347.95 369.94 345.63 371.95 343.27C347.73 283.46 295.11 242 234.04 242C173.51 242 121.26 282.73 96.7598 341.69C98.7498 344.09 100.78 346.45 102.9 348.73C135.33 383.79 182.49 405.88 235 405.88Z" fill="url(#paint0_linear_1118_301)"/>
				<path d="M235 0.25C105.21 0.25 0 105.46 0 235.25C0 306.56 31.8 370.4 81.95 413.49C123.07 448.83 176.52 470.25 235 470.25C292.58 470.25 345.3 449.51 386.16 415.13C437.4 372.02 470 307.46 470 235.25C470 105.47 364.78 0.25 235 0.25ZM380.02 367.79C344.1 407.07 292.43 431.72 235 431.72C176.75 431.72 124.45 406.35 88.47 366.09C57.42 331.34 38.52 285.51 38.52 235.25C38.52 126.74 126.48 38.78 234.99 38.78C343.5 38.78 431.46 126.74 431.46 235.25C431.47 286.33 411.97 332.85 380.02 367.79Z" fill="url(#paint1_linear_1118_301)"/>
				<path d="M234.04 218.88C260.638 218.88 282.2 197.318 282.2 170.72C282.2 144.122 260.638 122.56 234.04 122.56C207.442 122.56 185.88 144.122 185.88 170.72C185.88 197.318 207.442 218.88 234.04 218.88Z" fill="url(#paint2_linear_1118_301)"/>
				<path d="M504 361.14L465.97 334.72C453.76 366.54 434.84 395.01 410.93 418.44L449.97 444.27L504 361.14Z" fill="url(#paint3_linear_1118_301)"/>
				<defs>
				<linearGradient id="paint0_linear_1118_301" x1="234.272" y1="215.363" x2="234.44" y2="494.792" gradientUnits="userSpaceOnUse">
				<stop offset="0.1555" stop-color="#8200FF"/>
				<stop offset="0.2413" stop-color="#832AF6"/>
				<stop offset="0.3858" stop-color="#866CE8"/>
				<stop offset="0.517" stop-color="#88A0DD"/>
				<stop offset="0.6304" stop-color="#89C6D5"/>
				<stop offset="0.7214" stop-color="#8ADDD0"/>
				<stop offset="0.7788" stop-color="#8AE5CE"/>
				</linearGradient>
				<linearGradient id="paint1_linear_1118_301" x1="234.932" y1="-717.301" x2="235.041" y2="841.893" gradientUnits="userSpaceOnUse">
				<stop offset="0.5775" stop-color="#8200FF"/>
				<stop offset="0.6011" stop-color="#832AF6"/>
				<stop offset="0.6408" stop-color="#866CE8"/>
				<stop offset="0.6769" stop-color="#88A0DD"/>
				<stop offset="0.708" stop-color="#89C6D5"/>
				<stop offset="0.733" stop-color="#8ADDD0"/>
				<stop offset="0.7488" stop-color="#8AE5CE"/>
				</linearGradient>
				<linearGradient id="paint2_linear_1118_301" x1="234.003" y1="167.789" x2="235.042" y2="262.321" gradientUnits="userSpaceOnUse">
				<stop offset="0.1555" stop-color="#8200FF"/>
				<stop offset="0.267" stop-color="#832AF6"/>
				<stop offset="0.4549" stop-color="#866CE8"/>
				<stop offset="0.6256" stop-color="#88A0DD"/>
				<stop offset="0.773" stop-color="#89C6D5"/>
				<stop offset="0.8914" stop-color="#8ADDD0"/>
				<stop offset="0.9659" stop-color="#8AE5CE"/>
				</linearGradient>
				<linearGradient id="paint3_linear_1118_301" x1="453.657" y1="326.559" x2="460.636" y2="442.454" gradientUnits="userSpaceOnUse">
				<stop stop-color="#8200FF"/>
				<stop offset="0.1043" stop-color="#8431F4"/>
				<stop offset="0.2206" stop-color="#8560EA"/>
				<stop offset="0.3408" stop-color="#8789E2"/>
				<stop offset="0.463" stop-color="#88AADB"/>
				<stop offset="0.5878" stop-color="#89C4D5"/>
				<stop offset="0.7161" stop-color="#89D7D1"/>
				<stop offset="0.8503" stop-color="#8AE1CF"/>
				<stop offset="1" stop-color="#8AE5CE"/>
				</linearGradient>
				</defs>
			</svg>

				<?php echo $wo['lang']['find_friends'];?>
			</a>
		</li>
		<?php } ?>
		<li>
			<a href="<?php echo Wo_SeoLink('index.php?link1=search?query=');?>" data-ajax="?link1=search">
			<svg width="502" height="475" viewBox="0 0 502 475" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M502 411.39L398.8 322.59C417.58 290.79 428.37 253.72 428.37 214.12C428.37 96.0401 332.65 0.310059 214.56 0.310059C96.47 0.310059 0.75 96.0301 0.75 214.12C0.75 279 29.68 337.08 75.31 376.29C112.73 408.45 161.35 427.93 214.56 427.93C262.9 427.93 307.47 411.85 343.28 384.8L447.63 474.59L502 411.39ZM81.24 333.17C53 301.56 35.8 259.85 35.8 214.12C35.8 115.4 115.83 35.36 214.56 35.36C313.29 35.36 393.32 115.39 393.32 214.12C393.32 260.59 375.58 302.92 346.5 334.71C313.82 370.45 266.81 392.88 214.56 392.88C161.56 392.88 113.98 369.8 81.24 333.17Z" fill="#03131D"/>
				<path d="M236.19 250.32L197.11 175L337.07 150.18L236.19 250.32Z" fill="#182530"/>
				<path d="M197.11 175L96.23 275.14L236.19 250.32" fill="#798693"/>
			</svg>

				<?php echo ($wo['config']['website_mode'] == 'instagram') ? $wo['lang']['search'] : $wo['lang']['explore'];?>
			</a>
		</li>
		<?php if ($wo['config']['website_mode'] == 'instagram') { ?>
			<li>
				<a href="<?php echo Wo_SeoLink('index.php?link1=explore');?>" data-ajax="?link1=explore">
				<svg width="502" height="475" viewBox="0 0 502 475" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M502 411.39L398.8 322.59C417.58 290.79 428.37 253.72 428.37 214.12C428.37 96.0401 332.65 0.310059 214.56 0.310059C96.47 0.310059 0.75 96.0301 0.75 214.12C0.75 279 29.68 337.08 75.31 376.29C112.73 408.45 161.35 427.93 214.56 427.93C262.9 427.93 307.47 411.85 343.28 384.8L447.63 474.59L502 411.39ZM81.24 333.17C53 301.56 35.8 259.85 35.8 214.12C35.8 115.4 115.83 35.36 214.56 35.36C313.29 35.36 393.32 115.39 393.32 214.12C393.32 260.59 375.58 302.92 346.5 334.71C313.82 370.45 266.81 392.88 214.56 392.88C161.56 392.88 113.98 369.8 81.24 333.17Z" fill="#03131D"/>
					<path d="M236.19 250.32L197.11 175L337.07 150.18L236.19 250.32Z" fill="#182530"/>
					<path d="M197.11 175L96.23 275.14L236.19 250.32" fill="#798693"/>
				</svg>

					<?php echo $wo['lang']['explore'];?>
				</a>
			</li>
		<?php } ?>
		<?php if ($wo['config']['popular_posts'] == 1) { ?>
		<li>
			<a href="<?php echo $wo['config']['site_url']; ?>/most_liked" data-ajax="?link1=most_liked">
			<svg width="569" height="487" viewBox="0 0 569 487" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M499.69 0H69.31C31.03 0 0 31.03 0 69.31V333.74V486.03L69.31 403.05H499.69C537.97 403.05 569 372.02 569 333.74V69.31C569 31.03 537.97 0 499.69 0ZM344.92 260.75L286 231.16L228.22 262.93L238.15 197.74L190.08 152.6L255.15 141.9L283.23 82.24L313.51 140.82L378.93 149.08L332.58 195.98L344.92 260.75Z" fill="#798693"/>
			</svg>

				<?php echo TextForMode('popular_posts');?>
			</a>
		</li>
		<?php } ?>
		<?php if ($wo['config']['games'] == 1 && $wo['config']['can_use_games']) { ?>
		<li>
			<a href="<?php echo Wo_SeoLink('index.php?link1=new-game'); ?>" data-ajax="?link1=new-game">
		
					<svg 
						style="width: 20px; height: 50px;" viewBox="256 439 590 305" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M775.19 439H327.13C287.85 439 256 470.84 256 510.13V672.81C256 712.09 287.84 743.94 327.13 743.94H775.2C814.48 743.94 846.33 712.1 846.33 672.81V510.13C846.32 470.84 814.48 439 775.19 439ZM449.52 604.94H396.53V657.93H373.49V604.94H320.5V581.9H373.49V528.91H396.53V581.9H449.52V604.94ZM672.03 611.2C665.16 617.9 654.16 617.76 647.46 610.9C640.76 604.03 640.9 593.03 647.76 586.33C654.63 579.63 665.63 579.77 672.33 586.63C679.04 593.5 678.9 604.5 672.03 611.2ZM720.56 660.95C713.69 667.65 702.69 667.51 695.99 660.65C689.29 653.78 689.43 642.78 696.29 636.08C703.16 629.38 714.16 629.52 720.86 636.38C727.56 643.25 727.43 654.25 720.56 660.95ZM721.78 562.68C714.91 569.38 703.91 569.24 697.21 562.38C690.51 555.51 690.65 544.51 697.51 537.81C704.38 531.11 715.38 531.25 722.08 538.11C728.78 544.98 728.65 555.98 721.78 562.68ZM770.3 612.42C763.43 619.12 752.43 618.98 745.73 612.12C739.03 605.25 739.17 594.25 746.03 587.55C752.9 580.85 763.9 580.99 770.6 587.85C777.31 594.72 777.17 605.72 770.3 612.42Z" fill="url(#paint0_linear_1118_105)"/>
						<defs>
						<linearGradient id="paint0_linear_1118_105" x1="256" y1="591.467" x2="1021.8" y2="591.467" gradientUnits="userSpaceOnUse">
						<stop stop-color="#805BE1"/>
						<stop offset="0.3347" stop-color="#805BE2"/>
						<stop offset="0.4044" stop-color="#7D59DC"/>
						<stop offset="0.4974" stop-color="#7453CB"/>
						<stop offset="0.6036" stop-color="#6549AF"/>
						<stop offset="0.7196" stop-color="#513B88"/>
						<stop offset="0.8435" stop-color="#372957"/>
						<stop offset="0.9723" stop-color="#17131B"/>
						<stop offset="0.9916" stop-color="#121011"/>
						</linearGradient>
						</defs>
					</svg>



				<?php echo $wo['lang']['games'];?>
			</a>
		</li>
		<?php } ?>
		<?php if ($wo['config']['movies'] == 1 && $wo['config']['can_use_movies']) { ?>
		<li>
			<a href="<?php echo Wo_SeoLink('index.php?link1=movies'); ?>" data-ajax="?link1=movies">
				

				<svg width="496" height="359" viewBox="0 0 496 359" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M460.4 1H35.37C16.39 1 1 16.39 1 35.37V323.48C1 342.46 16.39 357.85 35.37 357.85H460.4C479.38 357.85 494.77 342.46 494.77 323.48V35.37C494.78 16.39 479.39 1 460.4 1ZM88.04 329.31H29.55V270.82H88.04V329.31ZM88.04 248.89H29.55V190.4H88.04V248.89ZM88.04 168.46H29.55V109.97H88.04V168.46ZM88.04 88.04H29.55V29.55H88.04V88.04ZM307.26 181.91L213.46 228.81C209.85 230.62 205.6 227.99 205.6 223.95V130.15C205.6 126.11 209.85 123.49 213.46 125.29L307.26 172.19C311.26 174.19 311.26 179.91 307.26 181.91ZM468.69 329.31H410.2V270.82H468.69V329.31ZM468.69 248.89H410.2V190.4H468.69V248.89ZM468.69 168.46H410.2V109.97H468.69V168.46ZM468.69 88.04H410.2V29.55H468.69V88.04Z" fill="url(#paint0_linear_1118_163)" stroke="url(#paint1_linear_1118_163)" stroke-miterlimit="10"/>
					<defs>
					<linearGradient id="paint0_linear_1118_163" x1="1" y1="179.428" x2="494.776" y2="179.428" gradientUnits="userSpaceOnUse">
					<stop offset="0.0447" stop-color="#8AE5CE"/>
					<stop offset="0.3573" stop-color="#8AE5CE"/>
					<stop offset="0.9972" stop-color="#8AE5CE"/>
					</linearGradient>
					<linearGradient id="paint1_linear_1118_163" x1="0.5" y1="179.428" x2="495.276" y2="179.428" gradientUnits="userSpaceOnUse">
					<stop offset="0.0447" stop-color="#8AE5CE"/>
					<stop offset="0.3489" stop-color="#8AE5CE"/>
					<stop offset="1" stop-color="#8AE5CE"/>
					</linearGradient>
					</defs>
				</svg>
				<?php echo $wo['lang']['movies'];?>
			</a>
		</li>
		<?php } ?>
		<?php if ($wo['config']['job_system'] == 1) { ?>
		<li>
			<a href="<?php echo Wo_SeoLink('index.php?link1=jobs'); ?>" data-ajax="?link1=jobs">
			<svg width="642" height="553" viewBox="0 0 642 553" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M542.51 221.22L639.02 124.71C639.8 123.93 640.67 123.27 641.54 122.64V68.7201H403.14C396.89 29.8501 363.25 0.11006 322.6 5.96012e-05C281.8 -0.10994 247.92 29.6701 241.64 68.7201H0.190186V120.08C2.84019 121.08 5.34018 122.59 7.47018 124.72L103.98 221.23C107.83 225.08 113.06 227.25 118.51 227.25H280.73C269.38 227.25 260.19 236.45 260.19 247.79C260.19 259.13 269.39 268.33 280.73 268.33H101.15C95.7002 268.33 90.4802 266.17 86.6202 262.31L0.180176 175.87V553H641.53V180.62L559.85 262.3C556 266.15 550.77 268.32 545.32 268.32H365.77C377.12 268.32 386.31 259.12 386.31 247.78C386.31 236.44 377.11 227.24 365.77 227.24H527.99C533.44 227.24 538.66 225.07 542.51 221.22ZM322.55 22.9101C350.53 22.9801 373.88 42.5501 379.82 68.7201H264.97C270.94 42.4301 294.47 22.8301 322.55 22.9101Z" fill="url(#paint0_linear_1118_118)"/>
				<defs>
				<linearGradient id="paint0_linear_1118_118" x1="313.436" y1="-179.672" x2="330.033" y2="916.329" gradientUnits="userSpaceOnUse">
				<stop offset="0.00541831" stop-color="#8AE5CE"/>
				<stop offset="0.057" stop-color="#83D9C3"/>
				<stop offset="0.1512" stop-color="#70B8A6"/>
				<stop offset="0.2775" stop-color="#528276"/>
				<stop offset="0.4293" stop-color="#293936"/>
				<stop offset="0.5097" stop-color="#121011"/>
				</linearGradient>
				</defs>
			</svg>

				<?php echo $wo['lang']['jobs'];?>
			</a>
		</li>
		<?php } ?>
		<?php if ($wo['config']['offer_system'] == 1) { ?>
		<li>
			<a href="<?php echo Wo_SeoLink('index.php?link1=offers'); ?>" data-ajax="?link1=offers">
			<svg width="637" height="644" viewBox="0 0 637 644" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M318.5 0.690002C142.6 0.690002 0 144.7 0 322.35C0 353.14 4.37 382.88 12.37 411.07L190.48 284.01L252.11 377.98L436.57 246.39L394.33 182L533.06 200.88L499.63 342.57L461.12 283.21L239.64 441.22L178.67 348.26L28.53 455.36C78.65 566.61 189.59 644 318.5 644C494.4 644 637 499.99 637 322.35C637 144.71 494.4 0.690002 318.5 0.690002Z" fill="url(#paint0_linear_1118_191)"/>
				<defs>
				<linearGradient id="paint0_linear_1118_191" x1="0" y1="322.347" x2="637" y2="322.347" gradientUnits="userSpaceOnUse">
				<stop offset="0.0335" stop-color="#5E92B5"/>
				<stop offset="0.1343" stop-color="#49728E"/>
				<stop offset="0.2546" stop-color="#345165"/>
				<stop offset="0.3644" stop-color="#253948"/>
				<stop offset="0.4592" stop-color="#1B2A36"/>
				<stop offset="0.5279" stop-color="#182530"/>
				<stop offset="0.784" stop-color="#18242E"/>
				<stop offset="0.8867" stop-color="#161F27"/>
				<stop offset="0.9616" stop-color="#14171B"/>
				<stop offset="1" stop-color="#121011"/>
				</linearGradient>
				</defs>
			</svg>

				<?php echo $wo['lang']['offers'];?>
			</a>
		</li>
		<?php } ?>
		<?php if ($wo['config']['memories_system'] == 1) { ?>
		<li>
			<a href="<?php echo Wo_SeoLink('index.php?link1=memories'); ?>" data-ajax="?link1=memories">
			<svg width="497" height="497" viewBox="0 0 497 497" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M246.35 97.71C182.99 97.71 131.63 149.07 131.63 212.43C131.63 275.79 182.99 327.15 246.35 327.15C309.71 327.15 361.07 275.79 361.07 212.43C361.07 149.07 309.71 97.71 246.35 97.71ZM310.8 210.15C310.8 211.54 309.67 212.66 308.28 212.66L247.47 212.44C246.09 212.44 244.97 211.31 244.97 209.93V124.03C244.97 122.64 246.09 121.52 247.48 121.52H252.59C253.98 121.52 255.1 122.64 255.1 124.03V200.03C255.1 201.42 256.22 202.54 257.61 202.54H308.29C309.68 202.54 310.8 203.66 310.8 205.05V210.15Z" fill="#798693"/>
				<path d="M248.89 0C111.86 0 0.780029 111.08 0.780029 248.11C0.780029 385.14 111.86 496.22 248.89 496.22C385.92 496.22 497 385.14 497 248.11C497 111.08 385.92 0 248.89 0ZM246.35 348.91C170.98 348.91 109.87 287.81 109.87 212.43C109.87 137.05 170.97 75.95 246.35 75.95C321.73 75.95 382.83 137.05 382.83 212.43C382.83 287.81 321.73 348.91 246.35 348.91Z" fill="#798693"/>
			</svg>

				<?php echo $wo['lang']['memories'];?>
			</a>
		</li>
		<?php } ?>
		<?php if ($wo['config']['common_things'] == 1) { ?>
		<li>
			<a href="<?php echo Wo_SeoLink('index.php?link1=common_things'); ?>" data-ajax="?link1=common_things">
			<svg width="438" height="438" viewBox="0 0 438 438" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M219.25 0.25C98.44 0.25 0.5 98.19 0.5 219C0.5 339.81 98.44 437.75 219.25 437.75C340.06 437.75 438 339.81 438 219C438 98.19 340.06 0.25 219.25 0.25ZM219.25 399.47C119.58 399.47 38.78 318.67 38.78 219C38.78 119.33 119.58 38.53 219.25 38.53C318.92 38.53 399.72 119.33 399.72 219C399.72 318.67 318.92 399.47 219.25 399.47Z" fill="#182530"/>
				<path d="M213.43 265.33C198.76 279.04 177.62 286.7 154.66 283.97C123.03 280.21 97.72 256.08 94.22 226.46C89.55 186.94 122.53 153.49 163.87 153.49C183.23 153.49 200.75 160.82 213.43 172.68" stroke="#182530" stroke-width="20" stroke-miterlimit="10"/>
				<path d="M353.61 265.33C338.94 279.04 317.8 286.7 294.84 283.97C263.21 280.21 237.9 256.08 234.4 226.46C229.73 186.94 262.71 153.49 304.05 153.49C323.41 153.49 340.93 160.82 353.61 172.68" stroke="#182530" stroke-width="20" stroke-miterlimit="10"/>
			</svg>

			<?php echo $wo['lang']['common_things'];?>
			</a>
		</li>
		<?php } ?>
		<?php if ($wo['config']['funding_system'] == 1) { ?>

		<li>
			<a href="<?php echo Wo_SeoLink('index.php?link1=funding'); ?>" data-ajax="?link1=funding">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="28" height="22.458" viewBox="0 0 28 22.458">
					<defs>
						<linearGradient id="linear-gradient21" x1="0.5" y1="1.232" x2="0.5" gradientUnits="objectBoundingBox">
						<stop offset="0" stop-color="#d6ff7f"/>
						<stop offset="1" stop-color="#00b3cc"/>
						</linearGradient>
					</defs>
					<path id="Union_53" data-name="Union 53" d="M10034.216,7296.432v-11.562a8.7,8.7,0,0,1,4.142,1.777h2.7a5.6,5.6,0,0,1,5.6,5.6h-8.7v1.244h9.946v-1.244a6.857,6.857,0,0,0-1.108-3.73h3.594a6.264,6.264,0,0,1,3.321.956,6.342,6.342,0,0,1,2.3,2.587,16.372,16.372,0,0,1-13.08,6.4A17.928,17.928,0,0,1,10034.216,7296.432Zm-4.972.785a1.231,1.231,0,0,1-1.244-1.244v-11.19a1.232,1.232,0,0,1,1.244-1.242h2.485a1.241,1.241,0,0,1,1.231,1.093l.013.149v11.19a1.231,1.231,0,0,1-1.244,1.244Zm11.718-16.117a5.1,5.1,0,1,1,5.1,5.1A5.1,5.1,0,0,1,10040.962,7281.1Zm3.315,2.04h1.275v1.02h1.02v-1.02h.51a1.275,1.275,0,1,0,0-2.549h-2.04a.238.238,0,0,1-.179-.076.245.245,0,0,1-.076-.179.259.259,0,0,1,.255-.255h2.807v-1.02h-1.276v-1.022h-1.02v1.022h-.511a1.274,1.274,0,1,0,0,2.549h2.04a.24.24,0,0,1,.179.076.245.245,0,0,1,.076.179.26.26,0,0,1-.255.255h-2.8Z" transform="translate(-10028 -7276)" fill="url(#linear-gradient21)"/>
				</svg>
				<?php echo $wo['lang']['funding'];?>
			</a>
		</li>
		<?php } ?>
		<?php if ($wo['config']['website_mode'] == 'linkedin') { ?>
			<li>
				<a href="<?php echo Wo_SeoLink('index.php?link1=open_to_work_posts'); ?>" data-ajax="?link1=open_to_work_posts">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: #673AB7;"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg><img src="<?php echo $wo['config']['theme_url'];?>/img/sidebar/work.svg"> <?php echo $wo['lang']['open_to_work_posts'];?>
				</a>
			</li>
		<?php } ?>
		</div>
		<div class="expandMore-btn">
			<span><?php echo $wo['lang']['expandmore'];?></span>
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="39" height="39" viewBox="0 0 39 39">
			<defs>
				<filter id="Ellipse_329" x="0" y="0" width="39" height="39" filterUnits="userSpaceOnUse">
				<feOffset dy="1" input="SourceAlpha"/>
				<feGaussianBlur stdDeviation="0.5" result="blur"/>
				<feFlood flood-opacity="0.161"/>
				<feComposite operator="in" in2="blur"/>
				<feComposite in="SourceGraphic"/>
				</filter>
				<linearGradient id="linear-gradient" x1="0.622" y1="0.043" x2="0.618" y2="1" gradientUnits="objectBoundingBox">
				<stop offset="0" stop-color="#f13848"/>
				<stop offset="1" stop-color="#9c070d"/>
				</linearGradient>
			</defs>
			<g id="Right_Scroll" data-name="Right Scroll" transform="translate(343.76 -1270.271) rotate(90)">
				<g transform="matrix(0, -1, 1, 0, 1270.27, 343.76)" filter="url(#Ellipse_329)">
				<g id="Ellipse_329-2" data-name="Ellipse 329" transform="translate(37.5 0.5) rotate(90)" fill="#fff" stroke="#e2e4e6" stroke-width="0.5">
					<circle cx="18" cy="18" r="18" stroke="none"/>
					<circle cx="18" cy="18" r="17.75" fill="none"/>
				</g>
				</g>
				<path id="Path_6628" data-name="Path 6628" d="M3536.56,7287.718l-4.347-4.346,1.144-1.152,6.309,6.309-6.309,6.309-1.144-1.15,4.347-4.347H3523v-1.622Z" transform="translate(-2242.364 -6964.06)" fill="url(#linear-gradient)"/>
			</g>
			</svg>
		</div>
	</ul>
</div>
<?php } ?>
<?php if ($wo['config']['pro'] == 1) { ?>
		<div class="featured-users">
			<li class="list-group-item sidebar-title-back left-sidebarpro" contenteditable="false">
				<div>
				<svg width="24" height="24" viewBox="0 0 538 533" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M537.54 268.77C537.54 120.33 417.21 0 268.77 0C120.33 0 0 120.33 0 268.77C0 400.46 94.74 509.96 219.77 533C218.8 530.24 218.25 527.29 218.25 524.2V323.5C218.25 322.67 218.3 321.86 218.37 321.05H186.21C173.11 321.05 165.15 307.72 172.13 297.49L255.05 175.99C261.58 166.43 276.68 166.43 283.2 175.99L366.12 297.49C373.1 307.72 365.14 321.05 352.04 321.05H319.9C319.97 321.86 320.02 322.67 320.02 323.5V524.2C320.02 527.24 319.49 530.14 318.55 532.87C443.19 509.5 537.54 400.19 537.54 268.77Z" fill="url(#paint0_linear_1118_237)"/>
					<defs>
					<linearGradient id="paint0_linear_1118_237" x1="270.474" y1="67.5247" x2="265.92" y2="605.043" gradientUnits="userSpaceOnUse">
					<stop offset="0.103" stop-color="#805BE2"/>
					<stop offset="0.1907" stop-color="#7B58D8"/>
					<stop offset="0.3386" stop-color="#6D4EBE"/>
					<stop offset="0.5286" stop-color="#563F93"/>
					<stop offset="0.7532" stop-color="#372958"/>
					<stop offset="0.9916" stop-color="#121011"/>
					</linearGradient>
					</defs>
				</svg>

					<span><?php echo $wo['lang']['pro_members']; ?></span>
				</div>
				<?php if ($wo['user']['is_pro'] == 1) { ?>
						<a class="pro-me-here pull-right" href="<?php echo Wo_SeoLink('index.php?link1=go-pro');?>" data-ajax="?link1=go-pro"><?php echo $wo['lang']['update'];?></a>
					<?php } ?>
			</li>
			<?php if ($wo['user']['is_pro'] == 1) { ?>
						<div class="isPro-txt">
							<a class="pro-me-here" href="<?php echo Wo_SeoLink('index.php?link1=go-pro');?>" data-ajax="?link1=go-pro"><?php echo $wo['lang']['upgrade_to_pro'];?></a> <span><?php echo $wo['lang']['upgrade_to_pro_txt'];?></span>
						</div>
					<?php } ?>
			<ul class="list-inline wo_pro_users left-wo_pro_users">
			<?php 
			$users = Wo_FeaturedUsers(6);
			?>
			<?php 
			foreach ($users as $wo['user-list']) {
              echo Wo_LoadPage('home/user-list');
			}
			?>
			</ul>
		</div>
		<?php } ?>


<?php if ($wo['config']['order_posts_by'] == 0) { ?>
<script>
function Wo_StorePosts(type) {
  if (type > 1) {
     return false;
  }
  if (type == 0) {
	$('.order_all').addClass('active');
	$('.order_people').removeClass('active');
  } else {
	$('.order_all').removeClass('active');
	$('.order_people').addClass('active');
  }
  $('#posts-laoded').html('<div class="wo_loading_post"><div class="lightui1-shimmer"> <div class="_2iwr"></div> <div class="_2iws"></div> <div class="_2iwt"></div> <div class="_2iwu"></div> <div class="_2iwv"></div> <div class="_2iww"></div> <div class="_2iwx"></div> <div class="_2iwy"></div> <div class="_2iwz"></div> <div class="_2iw-"></div> <div class="_2iw_"></div> <div class="_2ix0"></div> </div></div><div class="wo_loading_post"><div class="lightui1-shimmer"> <div class="_2iwr"></div> <div class="_2iws"></div> <div class="_2iwt"></div> <div class="_2iwu"></div> <div class="_2iwv"></div> <div class="_2iww"></div> <div class="_2iwx"></div> <div class="_2iwy"></div> <div class="_2iwz"></div> <div class="_2iw-"></div> <div class="_2iw_"></div> <div class="_2ix0"></div> </div></div>');
  $.get(Wo_Ajax_Requests_File() + '?f=update_order_by', {type:type}, function (data) {
    if (data.status == 200) {
      loadposts();
    }
  });
}
</script>
<?php } ?>
<script>

	$('#dropdownNewsfeedOptions, .newsFeedDropdown>li').click(() => {
		$('.newsFeedDropdown').slideToggle();
		$('#dropdownNewsfeedOptions').toggleClass('opened');
	})
	$('#dropdownEventsOptions').click(() => {
		$('.eventsDropdown').slideToggle();
		$('#dropdownEventsOptions').toggleClass('opened');
		$('.wow_side_post_fltr-events').toggleClass('active');

		// hide others
		$('.productsDropdown, .forumDropdown, .groupsDropdown, .pagesDropdown').slideUp();
		$('#dropdownProductsOptions, #dropdownForumsOptions, #dropdownGroupsOptions, #dropdownPagesOptions').removeClass('opened');
		$('.wow_side_post_fltr-products, .wow_side_post_fltr-forum, .wow_side_post_fltr-groups, .wow_side_post_fltr-pages').removeClass('active');
	})
	$('#dropdownProductsOptions').click(() => {
		$('.productsDropdown').slideToggle();
		$('#dropdownProductsOptions').toggleClass('opened');
		$('.wow_side_post_fltr-products').toggleClass('active');

		// hide others
		$('.eventsDropdown, .forumDropdown, .groupsDropdown, .pagesDropdown').slideUp();
		$('#dropdownEventsOptions, #dropdownForumsOptions, #dropdownGroupsOptions, #dropdownPagesOptions').removeClass('opened');
		$('.wow_side_post_fltr-events, .wow_side_post_fltr-forum, .wow_side_post_fltr-groups, .wow_side_post_fltr-pages').removeClass('active');
	})
	$('#dropdownForumsOptions').click(() => {
		$('.forumDropdown').slideToggle();
		$('#dropdownForumsOptions').toggleClass('opened');
		$('.wow_side_post_fltr-forum').toggleClass('active');
		
		// hide others
		$('.eventsDropdown, .productsDropdown, .groupsDropdown, .pagesDropdown').slideUp();
		$('#dropdownEventsOptions, #dropdownProductsOptions, #dropdownGroupsOptions, #dropdownPagesOptions').removeClass('opened');
		$('.wow_side_post_fltr-events, .wow_side_post_fltr-products, .wow_side_post_fltr-groups, .wow_side_post_fltr-pages').removeClass('active');
	}) 

	$('#dropdownGroupsOptions').click(() => { 
		$('.groupsDropdown').slideToggle();
		$('#dropdownGroupsOptions').toggleClass('opened');
		$('.wow_side_post_fltr-groups').toggleClass('active');

		// hide others
		$('.eventsDropdown, .productsDropdown, .forumDropdown, .pagesDropdown').slideUp();
		$('#dropdownEventsOptions, #dropdownProductsOptions, #dropdownForumsOptions, #dropdownPagesOptions').removeClass('opened');
		$('.wow_side_post_fltr-events, .wow_side_post_fltr-products, .wow_side_post_fltr-forum, .wow_side_post_fltr-pages').removeClass('active');
	})

	$('#dropdownPagesOptions').click(() => { 
		$('.pagesDropdown').slideToggle();
		$('#dropdownPagesOptions').toggleClass('opened');
		$('.wow_side_post_fltr-pages').toggleClass('active');

		// hide others
		$('.eventsDropdown, .productsDropdown, .forumDropdown, .groupsDropdown').slideUp();
		$('#dropdownEventsOptions, #dropdownProductsOptions, #dropdownForumsOptions, #dropdownGroupsOptions').removeClass('opened');
		$('.wow_side_post_fltr-events, .wow_side_post_fltr-products, .wow_side_post_fltr-forum, .wow_side_post_fltr-groups').removeClass('active');
	})


	$('.expandMore-btn').click(() => {
		$('.expandmore-results').slideToggle();
		$('.expandMore-btn').toggleClass('expanded');
	})
</script>
