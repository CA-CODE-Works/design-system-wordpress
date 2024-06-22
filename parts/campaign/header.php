<?php
/**
 * Loads Design System <header> tag.
 *
 * @package cagov-design-system
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// if the CAWeb theme is active.
$cagov_design_system_is_caweb_active_theme = cagov_design_system_is_caweb_active_theme();

/* Branding */
$cagov_design_system_logo          = ! empty( get_option( 'header_ca_branding', '' ) ) ? esc_url( get_option( 'header_ca_branding' ) ) : '';
$cagov_design_system_logo_alt_text = ! empty( get_option( 'header_ca_branding_alt_text', '' ) ) ? get_option( 'header_ca_branding_alt_text' ) : cagov_design_system_get_attachment_post_meta( $cagov_design_system_logo, '_wp_attachment_image_alt' );

/* Navigation */
$cagov_design_system_menu_style = get_option( 'ca_default_navigation_menu', 'singlelevel' );
$cagov_design_system_nav_home_link = ! is_front_page() && get_option( 'ca_home_nav_link', true );

cagov_design_system_render_alerts();
?>


<header>
	<!-- Mobile -->
  	<div class="mobile">
		<button class="nav-toggle" aria-expanded="false">
		<svg
			width="2rem"
			viewBox="0 0 936 569"
			fill="none"
			xmlns="http://www.w3.org/2000/svg">
			<path
			d="M907.6 560.88C901.18 561 836.95 560.73 822.42 560.88C811.65 558.41 826.44 536.75 840.85 531.19C855.68 525.46 876.33 537.96 877.64 528.84C875.76 512.95 811.89 508.6 790.72 496.74C780.43 487.28 769.93 450.58 764.99 450.63C760.01 450.96 707.38 524.09 698.75 528.81C688.14 533.5 681.82 535.64 678.48 540.08C675.53 546.61 680.74 567.93 674.03 568.61C639.23 568.89 564.23 568.65 560.08 568.61C550.06 563.5 560.55 546.87 573.47 542.4C595.91 534.65 610.36 545.95 612.38 543.79C618.76 539.82 590.84 463 616.18 423.89C615.36 420.82 609.32 416.79 606.25 415.94C595.23 431.92 547.6 434.52 513.02 427.85C515.29 443.72 540.23 480.86 537.05 499.71C531.45 517.57 499.7 560.7 495.54 560.7C495.54 560.7 426.1 560.68 420.19 560.68C416.47 557.68 425.56 543.56 430.04 539.64C444.7 526.36 466.11 546.77 472.05 523.96C474.3 515.9 464.36 505.01 440.06 487.19C422.88 474.59 403.65 452.73 399.58 453.95C365.73 493.87 329.05 517.48 302.62 528.11C279.16 540.34 257.04 569.04 255.16 568.61C255.16 568.61 150.73 569.02 145.36 568.61C137.19 563.59 159.55 542.54 169.1 538.91C179.16 535.08 200.92 546.49 209.99 540.26C219.49 533.6 220.38 499.35 251.8 467.98C257.99 461.74 254.11 417.62 272.08 384.77C261.33 379.63 243.16 383.33 230.26 389.32C212.54 397.54 208.57 425.18 179.44 431.21C157.36 433.49 140.92 424.24 134.48 424.39C124.05 425.56 76.38 435.02 54.09 435.02C37.89 430.69 -0.440015 398.63 1.75999 392.8C5.21999 386.07 41.58 356.27 48.31 339.41C50.79 333.19 47.24 317.76 50.42 311.86C58.14 297.53 78.46 276.74 84.6 268.33C88.71 263.13 79.59 247.64 96.71 238.13C112.85 231.01 119.46 240.84 123.62 242.54C123.65 236.84 122.49 224.97 138.17 218.33C153.29 214.58 164.63 230.45 165.51 233.79C172.71 228.9 189.85 200.4 214.05 192.21C216.13 191.51 220.64 191.52 222.73 190.85C232.37 184.59 266.33 169.74 276.82 163.85C292.12 155.26 333.39 128.21 351.01 126.02C384.3 121.89 447.73 157.76 462.22 158.53C476.71 159.3 569.4 144.56 606.25 146.31C721.91 148.7 805.06 186.99 834.07 232.04C839 234.12 850.08 237.02 853.39 241.21C858.99 248.31 868.75 259.17 861.76 280.53C878.01 295.65 896.53 343.27 897.6 366.55C897.95 396.58 900.92 427.5 903.8 442.98C908.22 466.71 938.77 483.78 935.61 496.35C913.83 540.95 917.52 561.04 907.6 560.92V560.88Z"
			fill="#1B499B"
			class="testing-animation" />
			<path
			d="M158.39 184.56C141.11 172.25 106.15 147.2 105.62 146.81C98.8 141.83 98.83 141.87 92.06 146.78C75.26 158.99 40.42 184.55 39.08 184.13C39.08 179.49 53.29 135.66 59.08 118.18C60.22 114.75 58.98 113.55 56.77 111.96C38.68 98.91 1.59 71.92 0 70.47C8.87 70.47 55.5 69.42 71.14 69.68C73.25 69.72 74.85 69.58 75.63 67.11C82.72 44.76 89.91 22.44 97.1 0C99.29 1.15 114.04 45.69 120.44 66.05C121.58 69.69 123.39 69.68 126.12 69.68C149.09 69.65 172.05 69.66 195.27 69.66C194.54 72.83 142.55 109.79 139.55 111.95C136.94 113.83 136.75 115.01 137.69 117.86C144.18 137.68 159.41 181.36 158.38 184.55L158.39 184.56Z"
			fill="#1B499B" />
		</svg>
		<svg class="menu-icon" focusable="false" viewBox="0 0 32 32">
			<path d="M3,10 30,10 M3,20 30,20"></path>
		</svg>
		</button>
  	</div>
	<?php if ( ! empty( $cagov_design_system_logo ) ) : ?>
	<!-- Site Logo -->
	<div class="logo">
		<figure>
			<a href="/">
				<img
					src="<?php print esc_url( $cagov_design_system_logo ); ?>"
					alt="<?php print esc_attr( $cagov_design_system_logo_alt_text ); ?>" />
				<span class="sr-only"><?php print get_bloginfo('name'); ?></span>
			</a>
		</figure>
	</div>
	<?php endif; ?>
	<div class="navigation">
				<?php
				if ( has_nav_menu( 'header-menu' ) ) {
					wp_nav_menu(
						array(
							'theme_location'                     => 'header-menu',
							'caweb_nav_type'                     => $cagov_design_system_menu_style,
							'caweb_home_link'                    => $cagov_design_system_nav_home_link,
						)
					);
				} else {
					?>
						<nav>
							<ul class="navlinks">
								<li>
									<a href="#">
										<span class="ca-gov-icon-warning-triangle" aria-hidden="true"></span>
										<strong>There is no Navigation Menu set</strong>
									</a>
								</li>
							</ul>
						</nav>
					<?php
				}
				?>

	</div>
	<!-- BEGIN CAgov Offical  -->
  <div id="ca_gov_sidebar">
    <div class="cagov">
      <button
        aria-describedby="resources"
        class="ca-gov-svg"
        id="caGov"
        tabindex="0"
        title="Resources for California">
        <svg
          width="22vw"
          height="22vw"
          viewBox="0 0 56 56"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
          class="cagov-animated">
          <g>
            <path
              id="icon-cagov_ca"
              d="M32.7346 17.0483C32.8471 16.683 33.1335 15.7055 33.5937 14.1158C33.7062 13.7077 33.9926 12.8812 34.4529 11.6363C34.9131 10.3609 35.2803 9.34056 35.5544 8.5753C34.6573 9.1942 33.8337 9.91308 33.0997 10.718C30.1172 13.923 26.656 17.7982 25.4286 19.8277C25.895 19.7145 26.8309 18.738 29.8012 17.7186C30.7445 17.3654 31.7311 17.1399 32.7346 17.0483ZM32.2068 19.0931C22.8113 19.0931 18.7057 34.0371 12.1945 34.0371C10.7155 34.0371 9.57204 33.3749 8.76402 32.0505C8.23865 31.1767 7.96968 30.1734 7.98771 29.1547C7.9959 26.4386 9.28975 23.001 11.8693 18.8421C14.0724 15.3096 16.3942 12.4649 18.8346 10.3079C20.9416 8.45286 22.7509 7.52536 24.2626 7.52536C24.6389 7.50689 25.014 7.58098 25.3548 7.74111C25.6957 7.90125 25.9918 8.14251 26.2172 8.44368C26.5911 8.94632 26.7845 9.5598 26.7665 10.1854C26.7665 11.4098 26.3574 12.8046 25.5391 14.3699C24.829 15.7084 23.9231 16.934 22.8512 18.0064C22.1454 18.7002 21.59 19.0471 21.185 19.0471C21.0427 19.0383 20.904 18.9984 20.7789 18.9301C20.6537 18.8619 20.5452 18.767 20.4609 18.6523C20.3021 18.4757 20.2146 18.2466 20.2154 18.0094C20.2154 17.5687 20.6 17.0636 21.3691 16.4942C22.3784 15.7644 23.2553 14.8679 23.9619 13.8434C24.9009 12.4455 25.3703 11.267 25.3703 10.3079C25.3959 9.99571 25.3052 9.68512 25.1157 9.43546C25.0158 9.33576 24.8956 9.25871 24.7633 9.20958C24.6309 9.16045 24.4894 9.1404 24.3486 9.15078C23.653 9.15078 22.6671 9.65585 21.3906 10.666C19.6923 12.0448 18.1462 13.6005 16.7788 15.3065C14.8844 17.5315 13.3019 20.0029 12.0749 22.6531C10.9641 25.1529 10.4087 27.2885 10.4087 29.0598C10.3909 29.8387 10.652 30.5984 11.1451 31.2026C11.3701 31.5182 11.6686 31.7746 12.015 31.9495C12.3614 32.1244 12.7453 32.2127 13.1335 32.2066C16.1098 32.0964 19.8226 25.3162 20.9672 23.7397C32.3203 8.09778 33.1948 8.05492 34.9131 6.42951C35.9155 5.47854 36.6816 5.00204 37.2114 5C37.3741 5.00037 37.5347 5.03617 37.682 5.1049C37.8293 5.17364 37.9599 5.27364 38.0644 5.39794C38.2604 5.6171 38.3695 5.90009 38.3713 6.19381C38.2944 6.83637 38.1152 7.46258 37.8404 8.0488C37.2329 9.6079 36.656 11.267 36.1098 13.0261C35.6189 14.5913 35.2916 15.7912 35.1279 16.6259C35.2796 16.6302 35.4313 16.6241 35.5821 16.6075C35.9482 16.5952 36.2551 16.5891 36.5026 16.5891C37.2349 16.5891 37.6011 16.8667 37.6011 17.4217C37.5962 17.6768 37.5138 17.9245 37.3648 18.1319C37.2448 18.3364 37.052 18.4883 36.8248 18.5574C36.6221 18.5914 36.4164 18.6037 36.2111 18.5941C35.6729 18.5773 35.1345 18.6214 34.6063 18.7257C34.4713 19.1237 34.1276 22.4908 33.6152 22.6071C32.035 23.9846 32.1546 19.5461 32.2405 19.0961L32.2068 19.0931Z"
              fill="url(#icon-cagov_wave2)" />

            <path
              id="icon-cagov_dot"
              d="M22.9156 29.317C23.1124 29.3138 23.3078 29.3508 23.4898 29.4255C23.6718 29.5003 23.8366 29.6112 23.9742 29.7516C24.1161 29.8882 24.2283 30.0524 24.3038 30.2341C24.3793 30.4158 24.4165 30.611 24.413 30.8077C24.413 31.2043 24.2551 31.5846 23.974 31.865C23.6929 32.1455 23.3116 32.303 22.9141 32.303C22.5165 32.303 22.1353 32.1455 21.8542 31.865C21.5731 31.5846 21.4152 31.2043 21.4152 30.8077C21.4148 30.6113 21.4533 30.4168 21.5287 30.2353C21.604 30.0539 21.7146 29.8891 21.8541 29.7505C21.9936 29.6119 22.1592 29.5023 22.3414 29.4278C22.5236 29.3534 22.7188 29.3157 22.9156 29.317Z"
              fill="url(#icon-cagov_wave2)" />

            <path
              id="icon-cagov_g"
              d="M32.0656 25.356L31.0162 26.3906C30.7262 26.0616 30.3694 25.7979 29.9695 25.6169C29.5696 25.4359 29.1357 25.3417 28.6965 25.3407C28.3394 25.3312 27.9841 25.3939 27.652 25.5249C27.3198 25.6559 27.0175 25.8525 26.7634 26.1029C26.5116 26.3419 26.3123 26.6304 26.1782 26.9503C26.044 27.2701 25.9779 27.6143 25.984 27.9609C25.9781 28.3185 26.0471 28.6734 26.1866 29.0028C26.3261 29.3323 26.533 29.629 26.7941 29.8741C27.0574 30.1307 27.3695 30.3322 27.712 30.4668C28.0545 30.6014 28.4205 30.6663 28.7886 30.6577C29.244 30.6721 29.6945 30.5598 30.0896 30.3332C30.4679 30.0869 30.7647 29.7343 30.9426 29.32H28.6781V27.9303H32.6149V28.2609C32.6147 28.9448 32.4303 29.6162 32.081 30.2047C31.7554 30.7873 31.2784 31.2716 30.7002 31.6066C30.0917 31.9399 29.4058 32.1067 28.7119 32.0903C27.9531 32.103 27.2039 31.9207 26.5363 31.5607C25.9007 31.2099 25.3765 30.6881 25.0236 30.0547C24.6553 29.4128 24.4637 28.6852 24.4682 27.9456C24.4539 26.9489 24.8216 25.9843 25.4961 25.2488C25.8931 24.8001 26.3851 24.4448 26.9364 24.2087C27.4877 23.9727 28.0847 23.8616 28.6842 23.8836C29.3374 23.8797 29.9845 24.0078 30.5867 24.2601C31.1486 24.5179 31.6495 24.8914 32.0564 25.356H32.0656Z"
              fill="url(#icon-cagov_wave2)" />

            <path
              id="icon-cagov_o"
              d="M37.1899 23.8836C37.7229 23.8769 38.2516 23.9797 38.7431 24.1856C39.2345 24.3915 39.6783 24.6961 40.0466 25.0805C40.4353 25.4611 40.7417 25.9171 40.947 26.4204C41.1523 26.9237 41.2521 27.4636 41.2402 28.0068C41.2511 28.5428 41.1525 29.0754 40.9504 29.5722C40.7484 30.0689 40.4472 30.5195 40.065 30.8964C39.6836 31.2759 39.2307 31.5764 38.7325 31.7806C38.2343 31.9848 37.7005 32.0888 37.1618 32.0865C36.6231 32.0842 36.0903 31.9758 35.5938 31.7673C35.0973 31.5589 34.647 31.2546 34.2688 30.872C33.6993 30.2964 33.313 29.5659 33.1582 28.7721C33.0035 27.9782 33.0872 27.1565 33.399 26.41C33.7107 25.6635 34.2365 25.0255 34.9104 24.576C35.5843 24.1265 36.3762 23.8856 37.1869 23.8836H37.1899ZM37.1684 25.3406C36.8295 25.334 36.4928 25.3975 36.1796 25.5271C35.8664 25.6567 35.5836 25.8496 35.3489 26.0937C35.1038 26.3476 34.9123 26.6481 34.7858 26.9772C34.6593 27.3064 34.6003 27.6576 34.6124 28.0099C34.5954 28.3992 34.6697 28.787 34.8295 29.1426C34.9893 29.4981 35.2302 29.8115 35.533 30.0577C35.9962 30.4448 36.5826 30.6543 37.1869 30.6485C37.5235 30.6532 37.8574 30.5876 38.1671 30.4558C38.4768 30.324 38.7554 30.1289 38.985 29.8832C39.4656 29.3725 39.7332 28.6982 39.7332 27.9976C39.7332 27.2971 39.4656 26.6228 38.985 26.112C38.7525 25.8637 38.4705 25.6668 38.1571 25.5339C37.8437 25.4011 37.5059 25.3352 37.1654 25.3406H37.1684Z"
              fill="url(#icon-cagov_wave2)" />

            <path
              id="icon-cagov_v"
              d="M40.9641 24.0795H42.4983L44.4652 29.6261L46.4719 24.0795H47.9969L45.174 31.8882H43.7349L40.9641 24.0795Z"
              fill="url(#icon-cagov_wave2)" />
          </g>

          <path
            id="icon-cagov_official"
            d="M16.4385 44.7392C16.4385 45.3952 16.3545 45.9912 16.1865 46.5272C16.0265 47.0632 15.7865 47.5312 15.4665 47.9312C15.1465 48.3232 14.7425 48.6272 14.2545 48.8432C13.7745 49.0512 13.2145 49.1552 12.5745 49.1552C11.9265 49.1552 11.3625 49.0472 10.8825 48.8312C10.4025 48.6152 10.0025 48.3112 9.68252 47.9192C9.36252 47.5272 9.12252 47.0632 8.96252 46.5272C8.80252 45.9832 8.72252 45.3832 8.72252 44.7272C8.72252 43.8552 8.86652 43.0912 9.15452 42.4352C9.45052 41.7792 9.88652 41.2672 10.4625 40.8992C11.0465 40.5232 11.7665 40.3352 12.6225 40.3352C13.4465 40.3352 14.1385 40.5152 14.6985 40.8752C15.2665 41.2272 15.6985 41.7312 15.9945 42.3872C16.2905 43.0432 16.4385 43.8272 16.4385 44.7392ZM9.45452 44.7272C9.45452 45.4952 9.56652 46.1632 9.79052 46.7312C10.0145 47.2992 10.3585 47.7432 10.8225 48.0632C11.2865 48.3832 11.8745 48.5432 12.5865 48.5432C13.3065 48.5432 13.8945 48.3872 14.3505 48.0752C14.8145 47.7552 15.1545 47.3112 15.3705 46.7432C15.5945 46.1752 15.7065 45.5072 15.7065 44.7392C15.7065 43.5472 15.4465 42.6192 14.9265 41.9552C14.4145 41.2912 13.6465 40.9592 12.6225 40.9592C11.9025 40.9592 11.3065 41.1152 10.8345 41.4272C10.3705 41.7392 10.0225 42.1792 9.79052 42.7472C9.56652 43.3152 9.45452 43.9752 9.45452 44.7272ZM20.7177 43.2032H19.1937V49.0352H18.5097V43.2032H17.3337V42.8312L18.5097 42.6392V41.9912C18.5097 41.5112 18.5777 41.1152 18.7137 40.8032C18.8577 40.4832 19.0697 40.2472 19.3497 40.0952C19.6377 39.9352 19.9937 39.8552 20.4177 39.8552C20.6417 39.8552 20.8457 39.8752 21.0297 39.9152C21.2137 39.9472 21.3817 39.9872 21.5337 40.0352L21.3657 40.5992C21.2297 40.5512 21.0777 40.5112 20.9097 40.4792C20.7497 40.4472 20.5857 40.4312 20.4177 40.4312C19.9857 40.4312 19.6737 40.5552 19.4817 40.8032C19.2897 41.0432 19.1937 41.4392 19.1937 41.9912V42.6512H20.7177V43.2032ZM24.4257 43.2032H22.9017V49.0352H22.2177V43.2032H21.0417V42.8312L22.2177 42.6392V41.9912C22.2177 41.5112 22.2857 41.1152 22.4217 40.8032C22.5657 40.4832 22.7777 40.2472 23.0577 40.0952C23.3457 39.9352 23.7017 39.8552 24.1257 39.8552C24.3497 39.8552 24.5537 39.8752 24.7377 39.9152C24.9217 39.9472 25.0897 39.9872 25.2417 40.0352L25.0737 40.5992C24.9377 40.5512 24.7857 40.5112 24.6177 40.4792C24.4577 40.4472 24.2937 40.4312 24.1257 40.4312C23.6937 40.4312 23.3817 40.5552 23.1897 40.8032C22.9977 41.0432 22.9017 41.4392 22.9017 41.9912V42.6512H24.4257V43.2032ZM26.3217 42.6512V49.0352H25.6497V42.6512H26.3217ZM25.9857 40.2872C26.1377 40.2872 26.2537 40.3352 26.3337 40.4312C26.4137 40.5192 26.4537 40.6432 26.4537 40.8032C26.4537 40.9712 26.4137 41.1032 26.3337 41.1992C26.2537 41.2872 26.1377 41.3312 25.9857 41.3312C25.8417 41.3312 25.7297 41.2872 25.6497 41.1992C25.5697 41.1032 25.5297 40.9712 25.5297 40.8032C25.5297 40.6432 25.5697 40.5192 25.6497 40.4312C25.7297 40.3352 25.8417 40.2872 25.9857 40.2872ZM30.985 49.1552C30.361 49.1552 29.829 49.0272 29.389 48.7712C28.957 48.5072 28.625 48.1312 28.393 47.6432C28.169 47.1552 28.057 46.5672 28.057 45.8792C28.057 45.1592 28.185 44.5512 28.441 44.0552C28.705 43.5592 29.065 43.1832 29.521 42.9272C29.977 42.6632 30.513 42.5312 31.129 42.5312C31.433 42.5312 31.717 42.5632 31.981 42.6272C32.253 42.6832 32.493 42.7592 32.701 42.8552L32.521 43.4312C32.305 43.3432 32.073 43.2752 31.825 43.2272C31.577 43.1712 31.341 43.1432 31.117 43.1432C30.605 43.1432 30.173 43.2552 29.821 43.4792C29.477 43.6952 29.213 44.0072 29.029 44.4152C28.853 44.8232 28.765 45.3112 28.765 45.8792C28.765 46.4072 28.841 46.8752 28.993 47.2832C29.153 47.6832 29.397 47.9952 29.725 48.2192C30.053 48.4432 30.473 48.5552 30.985 48.5552C31.297 48.5552 31.589 48.5232 31.861 48.4592C32.141 48.3952 32.397 48.3112 32.629 48.2072V48.8312C32.421 48.9192 32.181 48.9952 31.909 49.0592C31.637 49.1232 31.329 49.1552 30.985 49.1552ZM34.8081 42.6512V49.0352H34.1361V42.6512H34.8081ZM34.4721 40.2872C34.6241 40.2872 34.7401 40.3352 34.8201 40.4312C34.9001 40.5192 34.9401 40.6432 34.9401 40.8032C34.9401 40.9712 34.9001 41.1032 34.8201 41.1992C34.7401 41.2872 34.6241 41.3312 34.4721 41.3312C34.3281 41.3312 34.2161 41.2872 34.1361 41.1992C34.0561 41.1032 34.0161 40.9712 34.0161 40.8032C34.0161 40.6432 34.0561 40.5192 34.1361 40.4312C34.2161 40.3352 34.3281 40.2872 34.4721 40.2872ZM39.1811 42.5432C39.9011 42.5432 40.4371 42.7192 40.7891 43.0712C41.1411 43.4232 41.3171 43.9832 41.3171 44.7512V49.0352H40.8011L40.6811 47.9552H40.6451C40.4931 48.1952 40.3171 48.4072 40.1171 48.5912C39.9251 48.7672 39.6891 48.9072 39.4091 49.0112C39.1371 49.1072 38.8011 49.1552 38.4011 49.1552C38.0011 49.1552 37.6531 49.0872 37.3571 48.9512C37.0611 48.8072 36.8331 48.6032 36.6731 48.3392C36.5131 48.0752 36.4331 47.7512 36.4331 47.3672C36.4331 46.7352 36.6931 46.2552 37.2131 45.9272C37.7331 45.5912 38.4891 45.3992 39.4811 45.3512L40.6451 45.3032V44.8472C40.6451 44.2152 40.5171 43.7712 40.2611 43.5152C40.0131 43.2512 39.6411 43.1192 39.1451 43.1192C38.8171 43.1192 38.5011 43.1632 38.1971 43.2512C37.9011 43.3312 37.6011 43.4472 37.2971 43.5992L37.0811 43.0592C37.3771 42.9072 37.7051 42.7832 38.0651 42.6872C38.4251 42.5912 38.7971 42.5432 39.1811 42.5432ZM39.5531 45.8552C38.7451 45.8952 38.1411 46.0392 37.7411 46.2872C37.3411 46.5272 37.1411 46.8912 37.1411 47.3792C37.1411 47.7712 37.2651 48.0712 37.5131 48.2792C37.7611 48.4792 38.0971 48.5792 38.5211 48.5792C39.2011 48.5792 39.7211 48.3912 40.0811 48.0152C40.4491 47.6392 40.6371 47.1112 40.6451 46.4312V45.8072L39.5531 45.8552ZM44.0427 49.0352H43.3587V39.9152H44.0427V49.0352ZM46.0398 48.5792C46.0398 48.3792 46.0838 48.2312 46.1718 48.1352C46.2598 48.0392 46.3838 47.9912 46.5438 47.9912C46.7198 47.9912 46.8518 48.0392 46.9398 48.1352C47.0358 48.2312 47.0838 48.3792 47.0838 48.5792C47.0838 48.7712 47.0358 48.9192 46.9398 49.0232C46.8518 49.1192 46.7198 49.1672 46.5438 49.1672C46.3838 49.1672 46.2598 49.1192 46.1718 49.0232C46.0838 48.9192 46.0398 48.7712 46.0398 48.5792Z"
            fill="url(#icon-cagov_wave1)" />

          <defs>
            <linearGradient id="icon-cagov_wave1" x1="100%" y1="100%">
              <stop offset="0%" stop-color="#20367C" stop-opacity="1">
                <animate
                  attributeName="stop-color"
                  values="#20367C;#F26522;#20367C;#3A62E2;#20367C"
                  dur="10s"
                  repeatCount="indefinite" />
              </stop>
              <stop offset="100%" stop-color="#20367C">
                <animate
                  attributeName="stop-color"
                  values="#20367C;#20367C;#F26522;#20367C;#3A62E2;#20367C"
                  dur="10s"
                  repeatCount="indefinite" />
                <animate
                  attributeName="offset"
                  values=".95;.80;.60;.40;.20;0;.20;.40;.60;.80;.95"
                  dur="10s"
                  repeatCount="indefinite" />
              </stop>

              <linearGradient id="icon-cagov_wave2" x1="100%" y1="100%">
                <stop offset="0%" stop-color="#20367C" stop-opacity="1">
                  <animate
                    attributeName="stop-color"
                    values="#20367C;#20367C;#F26522;#20367C;#3A62E2;#20367C"
                    dur="10s"
                    repeatCount="indefinite" />
                </stop>
                <stop offset="100%" stop-color="#20367C">
                  <animate
                    attributeName="stop-color"
                    values="#20367C;#20367C;#20367C;#F26522;#20367C;#3A62E2;#20367C"
                    dur="10s"
                    repeatCount="indefinite" />
                  <animate
                    attributeName="offset"
                    values=".95;.80;.60;.40;.20;0;.20;.40;.60;.80;.95"
                    dur="10s"
                    repeatCount="indefinite" />
                </stop>
              </linearGradient>
            </linearGradient>
          </defs>
        </svg>
      </button>
    </div>
    <div class="sidebar-container">
      <p>Official website of the State of California</p>
      <p><a href="https://www.ca.gov/">CA.gov</a></p>
      <p id="resources">Resources for California</p>
      <hr />
      <div class="ca-gov-services-container">
        <ul>
          <li>Key services</li>
          <li>
            <a href="https://www.coveredca.com/"
              >Health insurance or Medi-Cal</a
            >
          </li>
          <li>
            <a href="https://www.cdtfa.ca.gov/services/#Register-Renewals"
              >Business licenses</a
            >
          </li>
          <li>
            <a href="https://benefitscal.com/">Food & social assistance</a>
          </li>
          <li><a href="https://calcareers.ca.gov/">Find a CA state job</a></li>
          <li>
            <a
              href="https://www.dmv.ca.gov/portal/vehicle-registration/vehicle-registration-renewal/"
              >Vehicle registration</a
            >
          </li>

          <li id="more_services_toggle" class="pointer-cursor">
            <button>More +</button>
          </li>
        </ul>
      </div>
      <div
        id="more_services_container"
        class="ca-gov-services-container hidden">
        <ul>
          <li>
            <a href="https://myvaccinerecord.cdph.ca.gov/"
              >Digital vaccine record</a
            >
          </li>
          <li>
            <a href="https://www.ca.gov/service/?item=traffic-tickets"
              >Traffic tickets</a
            >
          </li>

          <li>
            <a
              href="https://www.cdph.ca.gov/Programs/CHSI/Pages/Vital-Records-Obtaining-Certified-Copies-of-Birth-Records.aspx"
              >Birth certificates</a
            >
          </li>
          <li>
            <a href="https://www.calottery.com/draw-games">Lottery numbers</a>
          </li>
          <li>
            <a href="https://edd.ca.gov/en/Unemployment/UI_Online"
              >Unemployment</a
            >
          </li>
          <li>
            <a
              href="https://www.ca.gov/services/"
              class="button-style-blue color-white">
              View all CA.gov services
            </a>
          </li>
          <li id="less_services_toggle" class="pointer-cursor">
            <button>Less -</button>
          </li>
        </ul>
      </div>
      <hr />
      <div class="ca-gov-services-container">
        <ul>
          <li>Popular topics</li>
          <li><a href="https://abortion.ca.gov/">Abortion</a></li>
          <li><a href="https://build.ca.gov/">Building California</a></li>
          <li><a href="https://climateaction.ca.gov/">Climate Action</a></li>
          <li><a href="https://www.caloes.ca.gov/gunsafety/">Gun Safety</a></li>
          <li>
            <a href="https://mentalhealth.ca.gov/"
              >Mental health care for all</a
            >
          </li>
          <li>
            <a
              href="https://www.cdph.ca.gov/Programs/CCDPHP/opioids/Pages/landingpage.aspx"
              >Opioids</a
            >
          </li>
        </ul>
      </div>
      <hr />
    </div>
  </div>
  <!-- END CAgov Offical -->
</header>
