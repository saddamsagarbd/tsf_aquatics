<style>
	@import url(https://fonts.googleapis.com/css2?family=Clicker+Script&family=Jost:wght@200;300;400;500;600;700;800;900&display=swap);
	.section-bg2 {
		background-color: #f3ead8
	}

	.gray-bg {
		background: #f1fbff
	}

	body {
		font-family: "Jost", sans-serif;
		font-weight: normal;
		font-style: normal;
		font-size: 16px
	}

	h1,
	h2,
	h3,
	h4,
	h5,
	h6 {
		font-family: "Jost", sans-serif;
		color: #292621;
		margin-top: 0;
		font-style: normal;
		font-weight: 500;
		text-transform: normal
	}

	p {
		font-family: "Jost", sans-serif;
		color: #301a22;
		font-size: 16px;
		line-height: 30px;
		margin-bottom: 15px;
		font-weight: 400;
		line-height: 1.6
	}

	.f-left {
		float: left
	}

	.f-right {
		float: right
	}

	.fix {
		overflow: hidden
	}

	.clear {
		clear: both
	}

	.mb-5 {
		margin-bottom: 5px
	}

	.mb-20 {
		margin-bottom: 20px
	}

	.mb-30 {
		margin-bottom: 30px
	}

	.mb-35 {
		margin-bottom: 35px
	}

	.mb-40 {
		margin-bottom: 40px
	}

	.mb-50 {
		margin-bottom: 50px
	}

	.ml-5 {
		margin-left: 5px
	}

	.mr-10 {
		margin-right: 10px
	}

	.pt-30 {
		padding-top: 30px
	}

	.pt-50 {
		padding-top: 50px
	}

	.pb-20 {
		padding-bottom: 20px
	}

	.pb-30 {
		padding-bottom: 30px
	}

	.pb-50 {
		padding-bottom: 50px
	}

	.mt-10 {
		margin-top: 10px
	}

	.mt-30 {
		margin-top: 30px
	}

	.mt-40 {
		margin-top: 40px
	}

	a,
	.button {
		-webkit-transition: all .3s ease-out 0s;
		-moz-transition: all .3s ease-out 0s;
		-ms-transition: all .3s ease-out 0s;
		-o-transition: all .3s ease-out 0s;
		transition: all .3s ease-out 0s
	}

	a:focus,
	.button:focus {
		text-decoration: none;
		outline: none
	}

	a {
		color: #635c5c;
		text-decoration: none
	}

	a:hover {
		color: #fff
	}

	a:focus,
	a:hover {
		text-decoration: none
	}

	a,
	button {
		color: #fff;
		outline: medium none
	}

	button:focus,
	input:focus,
	input:focus,
	textarea,
	textarea:focus {
		outline: 0
	}

	input:focus::-moz-placeholder {
		opacity: 0;
		-webkit-transition: .4s;
		-o-transition: .4s;
		transition: .4s;
		outline: 0
	}

	h1 a,
	h2 a,
	h3 a,
	h4 a,
	h5 a,
	h6 a {
		color: inherit
	}

	ul {
		margin: 0;
		padding: 0
	}

	li {
		list-style: none
	}

	hr {
		border-bottom: 1px solid #eceff8;
		border-top: 0 none;
		margin: 30px 0;
		padding: 0
	}

	.breadcrumb>.active {
		color: #888
	}

	#back-top {
		background: #ff2020;
		height: 40px;
		width: 40px;
		right: 31px;
		bottom: 18px;
		position: fixed;
		color: #fff;
		font-size: 20px;
		text-align: center;
		border-radius: 50%;
		line-height: 40px;
		border: 2px solid transparent;
		box-shadow: 0 0 10px 3px rgba(108, 98, 98, .2)
	}

	@media (max-width:575px) {
		#back-top {
			right: 16px
		}
	}

	#back-top a i {
		display: block;
		line-height: 50px
	}

	#back-top .wrapper {
		position: relative
	}

	#back-top .wrapper .arrows-container {
		position: absolute;
		text-align: center;
		bottom: -3px;
		margin: 0 auto;
		display: block;
		right: 7px
	}

	#back-top .wrapper .arrows-container .arrow {
		padding: 7px;
		box-shadow: 2px -2px #fff inset;
		transform: rotate(130deg);
		opacity: 0;
		position: absolute
	}

	#back-top .wrapper .arrows-container .arrow-one {
		animation: arrowMovement 3s ease-in-out infinite
	}

	#back-top .wrapper .arrows-container .arrow-two {
		animation: arrowMovement 3s 1s ease-in-out infinite
	}

	@keyframes arrowMovement {
		0% {
			top: 15px;
			opacity: 0
		}
		70% {
			opacity: 1
		}
		100% {
			top: 0px;
			opacity: 0
		}
	}

	.sticky-bar {
		left: 0;
		margin: auto;
		position: fixed;
		top: 0;
		width: 100%;
		-webkit-box-shadow: 0 10px 15px rgba(25, 25, 25, .1);
		box-shadow: 0 10px 15px rgba(25, 25, 25, .1);
		z-index: 9999;
		-webkit-animation: 300ms ease-in-out 0s normal none 1 running fadeInDown;
		animation: 300ms ease-in-out 0s normal none 1 running fadeInDown;
		-webkit-box-shadow: 0 10px 15px rgba(25, 25, 25, .1)
	}

	.preloader {
		background-color: #f7f7f7;
		width: 100%;
		height: 100%;
		position: fixed;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		z-index: 999999;
		-webkit-transition: .6s;
		-o-transition: .6s;
		transition: .6s;
		margin: 0 auto
	}

	.preloader .preloader-circle {
		width: 100px;
		height: 100px;
		position: relative;
		border-style: solid;
		border-width: 1px;
		border-top-color: #ff2020;
		border-bottom-color: transparent;
		border-left-color: transparent;
		border-right-color: transparent;
		z-index: 10;
		border-radius: 50%;
		-webkit-box-shadow: 0 1px 5px 0 rgba(35, 181, 185, .15);
		box-shadow: 0 1px 5px 0 rgba(35, 181, 185, .15);
		background-color: #fff;
		-webkit-animation: zoom 2000ms infinite ease;
		animation: zoom 2000ms infinite ease;
		-webkit-transition: .6s;
		-o-transition: .6s;
		transition: .6s
	}

	.preloader .preloader-img {
		position: absolute;
		top: 50%;
		z-index: 200;
		left: 0;
		right: 0;
		margin: 0 auto;
		text-align: center;
		display: inline-block;
		-webkit-transform: translateY(-50%);
		-ms-transform: translateY(-50%);
		transform: translateY(-50%);
		padding-top: 6px;
		-webkit-transition: .6s;
		-o-transition: .6s;
		transition: .6s
	}

	.preloader .preloader-img img {
		max-width: 55px
	}

	.preloader .pere-text strong {
		font-weight: 800;
		color: #dca73a;
		text-transform: uppercase
	}

	@keyframes zoom {
		0% {
			-webkit-transform: rotate(0deg);
			transform: rotate(0deg);
			-webkit-transition: all .1s ease-out 0s;
			-moz-transition: all .1s ease-out 0s;
			-ms-transition: all .1s ease-out 0s;
			-o-transition: all .1s ease-out 0s;
			transition: all .1s ease-out 0s
		}
		100% {
			-webkit-transform: rotate(360deg);
			transform: rotate(360deg);
			-webkit-transition: all .1s ease-out 0s;
			-moz-transition: all .1s ease-out 0s;
			-ms-transition: all .1s ease-out 0s;
			-o-transition: all .1s ease-out 0s;
			transition: all .1s ease-out 0s
		}
	}

	@-webkit-keyframes heartbeat {
		to {
			-webkit-transform: scale(1.03);
			transform: scale(1.03)
		}
	}

	@keyframes rotateme {
		from {
			-webkit-transform: rotate(0deg);
			transform: rotate(0deg)
		}
		to {
			-webkit-transform: rotate(360deg);
			transform: rotate(360deg)
		}
	}

	@-webkit-keyframes rotateme {
		from {
			-webkit-transform: rotate(0deg)
		}
		to {
			-webkit-transform: rotate(360deg)
		}
	}

	.slick-initialized .slick-slide {
		outline: 0
	}

	.running {
		animation: nudge 10s linear infinite alternate
	}

	@keyframes nudge {
		0%,
		100% {
			transform: translate(0, 0)
		}
		50% {
			transform: translate(-100px, 0);
			@media (max-width: 575px) {
				transform:translate(-50px, 0) !important
			}
		}
		80% {
			transform: translate(100px, 0);
			@media (max-width: 575px) {
				transform:translate(50px, 0) !important
			}
		}
	}

	.nice-select {
		width: 100%;
		height: 45px;
		background: #fff;
		border-radius: 30px;
		padding: 11px 19px 11px 18px;
		color: #140c40;
		line-height: 20px;
		border: 1px solid #eee1e0;
		margin-bottom: 30px
	}

	@media (max-width:575px) {
		.nice-select {
			padding-left: 25px
		}
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.nice-select {
			padding-left: 25px
		}
	}

	.nice-select .list {
		width: 100%
	}

	.nice-select.open .list {
		width: 100%;
		border-radius: 0;
		border: 0
	}

	.nice-select::after {
		border-bottom: 3px solid #bbb9b5!important;
		border-right: 3px solid #bbb9b5!important;
		height: 9px;
		width: 9px;
		margin-top: -6px;
		right: 29px
	}

	.nice-select:focus {
		border-color: #eee1e0
	}

	.section-padding {
		padding-top: 120px;
		padding-bottom: 120px
	}

	@media only screen and (min-width:768px) and (max-width:991px) {
		.section-padding {
			padding-top: 100px;
			padding-bottom: 100px
		}
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.section-padding {
			padding-top: 70px;
			padding-bottom: 70px
		}
	}

	@media (max-width:575px) {
		.section-padding {
			padding-top: 70px;
			padding-bottom: 70px
		}
	}

	.testimonial-padding {
		padding-top: 80px;
		padding-bottom: 80px
	}

	@media only screen and (min-width:768px) and (max-width:991px) {
		.testimonial-padding {
			padding-top: 80px;
			padding-bottom: 80px
		}
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.testimonial-padding {
			padding-top: 80px;
			padding-bottom: 80px
		}
	}

	@media (max-width:575px) {
		.testimonial-padding {
			padding-top: 70px;
			padding-bottom: 70px
		}
	}

	.footer-padding {
		padding-top: 63px;
		padding-bottom: 60px
	}

	@media only screen and (min-width:768px) and (max-width:991px) {
		.footer-padding {
			padding-top: 60px;
			padding-bottom: 20px
		}
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.footer-padding {
			padding-top: 60px;
			padding-bottom: 20px
		}
	}

	@media (max-width:575px) {
		.footer-padding {
			padding-top: 60px;
			padding-bottom: 0
		}
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.section-tittle {
			margin-bottom: 50px
		}
	}

	@media (max-width:575px) {
		.section-tittle {
			margin-bottom: 50px
		}
	}

	.section-tittle p {
		color: #6a6063;
		font-size: 18px;
		font-weight: 400;
		line-height: 1.5
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.section-tittle p br {
			display: none
		}
	}

	@media (max-width:575px) {
		.section-tittle p br {
			display: none
		}
	}

	.section-tittle p a {
		text-decoration: underline
	}

	.section-tittle>span {
		color: #7ea0ff;
		font-size: 16px;
		font-weight: 400;
		margin-bottom: 10px;
		text-transform: capitalize;
		display: inline-block;
		letter-spacing: .05em
	}

	@media (max-width:575px) {
		.section-tittle>span {
			font-size: 14px;
			padding-left: 0
		}
	}

	.section-tittle h2 {
		font-size: 34px;
		display: block;
		font-weight: 500;
		line-height: 1.4;
		margin-bottom: 22px
	}

	@media only screen and (min-width:1200px) and (max-width:1400px) {
		.section-tittle h2 {
			font-size: 30px
		}
	}

	@media only screen and (min-width:992px) and (max-width:1199px) {
		.section-tittle h2 {
			font-size: 30px
		}
	}

	@media only screen and (min-width:768px) and (max-width:991px) {
		.section-tittle h2 {
			font-size: 30px
		}
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.section-tittle h2 {
			font-size: 30px
		}
	}

	@media (max-width:575px) {
		.section-tittle h2 {
			font-size: 24px
		}
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.section-tittle h2 br {
			display: none
		}
	}

	@media (max-width:575px) {
		.section-tittle h2 br {
			display: none
		}
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.small-tittle {
			margin-bottom: 50px
		}
	}

	@media (max-width:575px) {
		.small-tittle {
			margin-bottom: 50px
		}
	}

	.small-tittle h4 {
		font-size: 16px;
		display: block;
		font-weight: 700;
		line-height: 1.4;
		margin-bottom: 22px
	}

	@media only screen and (min-width:992px) and (max-width:1199px) {
		.small-tittle h4 {
			font-size: 16px
		}
	}

	@media only screen and (min-width:768px) and (max-width:991px) {
		.small-tittle h4 {
			font-size: 16px
		}
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.small-tittle h4 {
			font-size: 16px
		}
	}

	@media (max-width:575px) {
		.small-tittle h4 {
			font-size: 16px
		}
	}

	.small-tittle p {
		color: #301a22;
		font-size: 18px;
		font-weight: 400;
		line-height: 1.5
	}

	.small-tittle p a {
		text-decoration: underline
	}

	.btn {
		background: #ff2020;
		font-family: "Jost", sans-serif;
		text-transform: inherit!important;
		padding: 22px 32px;
		color: #fff!important;
		cursor: pointer;
		display: inline-block;
		font-size: 16px!important;
		font-weight: 500!important;
		border-radius: 35px;
		line-height: 1;
		line-height: 0;
		cursor: pointer;
		-moz-user-select: none;
		transition: color .4s linear;
		position: relative;
		z-index: 1;
		border: 0;
		overflow: hidden
	}

	.btn::before {
		content: "";
		position: absolute;
		left: 0;
		top: 0;
		width: 102%;
		height: 102%;
		background: #cf0f0f;
		z-index: 1;
		border-radius: 0;
		transition: transform .5s;
		transition-timing-function: ease;
		transform-origin: 0 0;
		transition-timing-function: cubic-bezier(.5, 1.6, .4, .7);
		transform: scaleX(0);
		border-radius: 0
	}

	.btn i {
		padding-right: 11px
	}

	.btn:hover {
		color: #fff!important
	}

	.btn:hover::before {
		transform: scaleX(1);
		z-index: -1
	}

	.border-btn {
		border: 1px solid #fff;
		color: #fff;
		background: none;
		text-transform: normal;
		padding: 17px 39px!important;
		-moz-user-select: none;
		cursor: pointer;
		display: inline-block;
		font-size: 16px;
		font-weight: 500;
		letter-spacing: 1px;
		position: relative;
		transition: color .4s linear;
		position: relative;
		overflow: hidden;
		border-radius: 30px;
		z-index: 1
	}

	.border-btn i {
		color: #fff!important;
		font-size: 16px;
		margin-right: 10px;
		color: #ff2020;
		-webkit-transition: all .3s ease-out 0s;
		-moz-transition: all .3s ease-out 0s;
		-ms-transition: all .3s ease-out 0s;
		-o-transition: all .3s ease-out 0s;
		transition: all .3s ease-out 0s
	}

	.border-btn::before {
		border: 1px solid transparent;
		content: "";
		position: absolute;
		left: 0;
		top: 0;
		width: 101%;
		height: 101%;
		background: #fff;
		z-index: -1;
		transition: transform .5s;
		transition-timing-function: ease;
		transform-origin: 0 0;
		transition-timing-function: cubic-bezier(.5, 1.6, .4, .7);
		transform: scaleY(0);
		border-radius: 0
	}

	.border-btn:hover {
		color: #ff2020
	}

	.border-btn:hover::before {
		transform: scaleY(1);
		border: 1px solid transparent
	}

	.border-btn:hover i {
		color: #ff2020!important
	}

	.browse-btn {
		color: #cebd9c!important;
		font-weight: 500;
		font-size: 16px;
		position: relative;
		display: inline-block
	}

	.browse-btn::before {
		position: absolute;
		content: "";
		background: #cebd9c;
		width: 100%;
		height: 2px;
		bottom: -2px
	}

	.browse-btn:hover {
		color: #ff2020;
		letter-spacing: 1px
	}

	.hero-btn {
		padding: 29px 45px
	}

	.submit-btn {
		width: 100%;
		background: #ff2020;
		font-family: "Jost", sans-serif;
		text-transform: inherit!important;
		padding: 25px 43px;
		color: #fff!important;
		cursor: pointer;
		display: inline-block;
		font-size: 16px!important;
		font-weight: 500!important;
		border-radius: 35px;
		line-height: 1;
		line-height: 0;
		cursor: pointer;
		-moz-user-select: none;
		transition: color .4s linear;
		position: relative;
		z-index: 1;
		border: 0;
		overflow: hidden
	}

	.submit-btn::before {
		content: "";
		position: absolute;
		left: 0;
		top: 0;
		width: 101%;
		height: 101%;
		background: #292621;
		z-index: 1;
		border-radius: 5px;
		transition: transform .5s;
		transition-timing-function: ease;
		transform-origin: 0 0;
		transition-timing-function: cubic-bezier(.5, 1.6, .4, .7);
		transform: scaleX(0);
		border-radius: 0
	}

	.submit-btn:hover {
		color: #fff!important
	}

	.submit-btn:hover::before {
		transform: scaleX(1);
		z-index: -1
	}

	.submit-btn i {
		font-size: 20px;
		margin-right: 10px;
		color: #fff;
		-webkit-transition: all .3s ease-out 0s;
		-moz-transition: all .3s ease-out 0s;
		-ms-transition: all .3s ease-out 0s;
		-o-transition: all .3s ease-out 0s;
		transition: all .3s ease-out 0s
	}

	.white-btn {
		background: #fff;
		padding: 25px 36px;
		font-size: 14px;
		font-weight: 500;
		text-transform: capitalize;
		color: #222;
		border-radius: 25px;
		cursor: pointer;
		display: inline-block;
		line-height: 0;
		-moz-user-select: none;
		cursor: pointer;
		transition: color .4s linear;
		position: relative;
		z-index: 1;
		border: 0;
		overflow: hidden
	}

	@media (max-width:575px) {
		.white-btn {
			padding: 25px 18px
		}
	}

	.white-btn::before {
		content: "";
		position: absolute;
		left: 0;
		top: 0;
		width: 101%;
		height: 101%;
		background: #ff2020;
		z-index: 1;
		border-radius: 5px;
		transition: transform .5s;
		transition-timing-function: ease;
		transform-origin: 0 0;
		transition-timing-function: cubic-bezier(.5, 1.6, .4, .7);
		transform: scaleX(0);
		border-radius: 0
	}

	.white-btn:hover {
		color: #fff!important;
		box-shadow: 0 3px 31px 2px rgba(207, 207, 207, .7)
	}

	.white-btn:hover::before {
		transform: scaleX(1);
		z-index: -1
	}

	.btn_1 {
		background: #292621;
		font-weight: 500;
		border: 1px solid #292621;
		text-transform: uppercase;
		color: #fff!important;
		display: inline-block;
		padding: 15px 47px;
		line-height: 16px;
		font-size: 14px
	}

	.btn_1:hover {
		background: none;
		border: 1px solid #292621;
		color: #292621!important
	}

	.btn.focus,
	.btn:focus {
		outline: 0;
		box-shadow: none
	}

	.btn.focus,
	.btn:focus {
		outline: 0;
		box-shadow: none
	}

	.boxed-btn {
		background: #fff;
		color: #ff2020!important;
		display: inline-block;
		padding: 18px 44px;
		font-family: "Jost", sans-serif;
		font-size: 14px;
		font-weight: 400;
		border: 0;
		border: 1px solid #ff2020;
		text-align: center;
		color: #ff2020;
		cursor: pointer
	}

	.boxed-btn:hover {
		background: #ff2020;
		color: #fff!important;
		border: 1px solid #ff2020
	}

	.boxed-btn:focus {
		outline: none
	}

	.boxed-btn2 {
		padding: 4px 20px!important
	}

	.share-btn {
		border-radius: 50%;
		padding: 12px 17px!important
	}

	.share-btn i {
		margin: 0
	}

	.header-area .header-top {
		background: #fff;
		padding: 8px 0;
		border-bottom: 1px solid #edeff2
	}

	@media only screen and (min-width:992px) and (max-width:1199px) {
		.header-area .header-top {
			padding: 8px 0
		}
	}

	@media only screen and (min-width:768px) and (max-width:991px) {
		.header-area .header-top {
			padding: 17px 0
		}
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.header-area .header-top {
			padding: 17px 0
		}
		.header-area .header-top .header-info-left {
			display: none
		}
	}

	.header-area .header-top .header-info-left ul li {
		margin-right: 15px;
		padding-right: 15px;
		display: inline-block
	}

	.header-area .header-top .header-info-left ul li:last-child {
		margin-right: 0;
		padding-right: 0;
		border-right: 0
	}

	.header-area .header-top .header-info-left ul li a {
		color: #292621;
		font-size: 14px
	}

	.header-area .header-top .header-info-left ul li i {
		margin-right: 12px;
		color: #74706b
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.header-area .header-top .header-info-left ul li {
			margin-right: 10px;
			font-size: 13px
		}
	}

	.header-area .header-top .header-info-right ul.order-list li {
		margin-right: 15px;
		padding-right: 15px;
		border-right: 1px solid #edeff2;
		display: inline-block
	}

	.header-area .header-top .header-info-right ul.order-list li:last-child {
		margin-right: 0
	}

	.header-area .header-top .header-info-right ul.order-list li a {
		color: #292621;
		font-size: 14px
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.header-area .header-top .header-info-right ul.order-list li {
			margin-right: 10px;
			font-size: 13px
		}
	}

	.header-area .header-top .header-info-right .header-social li {
		display: inline-block
	}

	.header-area .header-top .header-info-right .header-social li a {
		color: #74706b;
		font-size: 14px;
		padding-left: 14px
	}

	.header-area .header-top .header-info-right .header-social li a i {
		-webkit-transition: all .4s ease-out 0s;
		-moz-transition: all .4s ease-out 0s;
		-ms-transition: all .4s ease-out 0s;
		-o-transition: all .4s ease-out 0s;
		transition: all .4s ease-out 0s;
		transform: rotateY(0deg);
		-webkit-transform: rotateY(0deg);
		-moz-transform: rotateY(0deg);
		-ms-transform: rotateY(0deg);
		-o-transform: rotateY(0deg)
	}

	.header-area .header-top .header-info-right .header-social li a:hover i {
		color: #ff2020;
		transform: rotateY(180deg);
		-webkit-transform: rotateY(180deg);
		-moz-transform: rotateY(180deg);
		-ms-transform: rotateY(180deg);
		-o-transform: rotateY(180deg)
	}

	.header-area .header-mid {
		background: #fff
	}

	@media only screen and (min-width:768px) and (max-width:991px) {
		.header-area .header-mid {
			padding: 15px 0
		}
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.header-area .header-mid {
			padding: 15px 0
		}
	}

	@media (max-width:575px) {
		.header-area .header-mid {
			padding: 15px 0
		}
	}

	.header-area .header-mid .menu-wrapper {
		display: flex;
		align-content: center;
		justify-content: space-between;
		flex-wrap: wrap;
		align-items: center
	}

	.header-area .header-mid .menu-wrapper .main-menu ul li {
		display: inline-block;
		position: relative;
		z-index: 1
	}

	.header-area .header-mid .menu-wrapper .main-menu ul li a {
		font-size: 16px;
		font-family: "Jost", sans-serif;
		color: #141517;
		font-weight: 600;
		padding: 34px 21px;
		display: inline-block;
		text-transform: capitalize;
		display: block;
		-webkit-transition: all .3s ease-out 0s;
		-moz-transition: all .3s ease-out 0s;
		-ms-transition: all .3s ease-out 0s;
		-o-transition: all .3s ease-out 0s;
		transition: all .3s ease-out 0s
	}

	@media only screen and (min-width:992px) and (max-width:1199px) {
		.header-area .header-mid .menu-wrapper .main-menu ul li a {
			padding: 41px 10px
		}
	}

	.header-area .header-mid .menu-wrapper .main-menu ul li a i {
		color: #292621;
		margin-left: 2px;
		font-size: 12px
	}

	.header-area .header-mid .menu-wrapper .main-menu ul li:hover>a {
		color: #ff2020
	}

	.header-area .header-mid .menu-wrapper .main-menu ul li.new {
		position: relative
	}

	.header-area .header-mid .menu-wrapper .main-menu ul li.new::before {
		position: absolute;
		content: "New";
		background: #ff2020;
		color: #fff;
		text-align: center;
		border-radius: 4px;
		font-size: 9px;
		top: 19px;
		right: 17px;
		padding: 1px 4px;
		letter-spacing: 1px;
		font-weight: 500
	}

	.header-area .header-mid .menu-wrapper .main-menu ul li.new::after {
		position: absolute;
		height: 9px;
		width: 6px;
		background: #ff2020;
		content: "";
		right: 32px;
		top: 30px;
		-webkit-transform: rotate(56deg);
		-ms-transform: rotate(56deg);
		transform: rotate(56deg)
	}

	.header-area .header-mid .menu-wrapper .main-menu ul li:hover>ul.submenu {
		visibility: visible;
		opacity: 1;
		top: 100%
	}

	.header-area .header-mid .menu-wrapper .main-menu ul li:hover>ul.submenu::before {
		top: -8px
	}

	.header-area .header-mid .menu-wrapper .main-menu ul ul.submenu {
		position: absolute;
		width: 170px;
		background: #fff;
		left: 0;
		top: 90%;
		visibility: hidden;
		opacity: 0;
		box-shadow: 0 0 10px 3px rgba(0, 0, 0, .05);
		padding: 17px 0;
		border-top: 3px solid #ff2020;
		border-radius: 7px 7px 3px 3px;
		-webkit-transition: all .2s ease-out 0s;
		-moz-transition: all .2s ease-out 0s;
		-ms-transition: all .2s ease-out 0s;
		-o-transition: all .2s ease-out 0s;
		transition: all .2s ease-out 0s
	}

	.header-area .header-mid .menu-wrapper .main-menu ul ul.submenu>li {
		margin-left: 7px;
		display: block
	}

	.header-area .header-mid .menu-wrapper .main-menu ul ul.submenu>li>a {
		padding: 6px 10px!important;
		font-size: 16px;
		color: #292621;
		text-transform: capitalize
	}

	.header-area .header-mid .menu-wrapper .main-menu ul ul.submenu>li>a:hover {
		color: #ff2020;
		background: none;
		letter-spacing: .4px
	}

	.header-area .header-mid .menu-wrapper .main-menu ul ul.submenu::before {
		border-style: solid;
		border-width: 0 6px 6px 6px;
		border-color: transparent transparent red transparent;
		content: "";
		top: -5px;
		left: 13%;
		position: absolute;
		transition: .3s;
		z-index: -1;
		overflow: hidden;
		-webkit-transition: all .3s ease-out 0s;
		-moz-transition: all .3s ease-out 0s;
		-ms-transition: all .3s ease-out 0s;
		-o-transition: all .3s ease-out 0s;
		transition: all .3s ease-out 0s
	}

	@media only screen and (min-width:768px) and (max-width:991px) {
		.header-area .header-mid .menu-wrapper .header-right {
			margin-right: 82px
		}
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.header-area .header-mid .menu-wrapper .header-right {
			margin-right: 73px
		}
	}

	@media (max-width:575px) {
		.header-area .header-mid .menu-wrapper .header-right {
			position: absolute;
			top: 165px;
			z-index: 3;
			right: 14px
		}
	}

	.header-area .header-mid .menu-wrapper .header-right ul {
		display: flex!important;
		justify-content: space-between
	}

	.header-area .header-mid .menu-wrapper .header-right .nav-search {
		display: inline-block
	}

	.header-area .header-mid .menu-wrapper .header-right span {
		color: #292621;
		font-size: 24px;
		cursor: pointer;
		padding: 31px 13px;
		font-weight: 400
	}

	.header-area .header-mid .menu-wrapper .header-right span:hover {
		color: #ff2020;
		top: -10px
	}

	@media only screen and (min-width:768px) and (max-width:991px) {
		.header-area .header-mid .menu-wrapper .header-right span {
			padding: 21px 19px
		}
	}

	@media (max-width:575px) {
		.header-area .header-mid .menu-wrapper .header-right span {
			padding: 6px 9px;
			color: #ff2020
		}
	}

	.header-area .header-mid .menu-wrapper .header-right .cart {
		position: relative
	}

	.header-area .header-mid .menu-wrapper .header-right .cart::after {
		-webkit-transition: all .4s ease-out 0s;
		-moz-transition: all .4s ease-out 0s;
		-ms-transition: all .4s ease-out 0s;
		-o-transition: all .4s ease-out 0s;
		transition: all .4s ease-out 0s;
		position: absolute;
		content: "<?= Cart::count(); ?>";
		background: #ff2020;
		color: #fff;
		text-align: center;
		border-radius: 50%;
		font-size: 12px;
		top: -7px;
		right: 0;
		padding: 1px 7px
	}

	.header-area .header-mid .menu-wrapper .header-right .cart:hover::after {
		top: -9px
	}

	.header-area .header-bottom {
		background: #16161a;
		padding: 11px 0
	}

	.header-area .header-bottom p {
		color: #fff;
		font-size: 16px;
		font-weight: 400;
		margin: 0
	}

	@media only screen and (min-width:768px) and (max-width:991px) {
		.header-sticky.sticky-bar {
			padding: 22px 0
		}
	}

	@media (max-width:575px) {
		.header-sticky.sticky-bar .header-right {
			display: none
		}
	}

	.mobile_menu {
		position: absolute;
		right: 0;
		width: 100%;
		z-index: 99
	}

	#search_input_box {
		position: fixed;
		left: 50%;
		-webkit-transform: translateX(-50%);
		-moz-transform: translateX(-50%);
		-ms-transform: translateX(-50%);
		-o-transform: translateX(-50%);
		transform: translateX(-50%);
		width: 100%;
		max-width: 1296px;
		z-index: 999;
		text-align: center;
		background: #ff2020;
		box-shadow: 0 10px 15px rgba(0, 0, 0, .2)
	}

	#search_input_box ::placeholder {
		color: #fff
	}

	@media only screen and (min-width:1200px) and (max-width:1400px) {
		#search_input_box {
			max-width: 1116px
		}
	}

	@media only screen and (min-width:992px) and (max-width:1199px) {
		#search_input_box {
			max-width: 936px
		}
	}

	@media only screen and (min-width:768px) and (max-width:991px) {
		#search_input_box {
			max-width: 696px
		}
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		#search_input_box {
			max-width: 516px
		}
	}

	@media (max-width:991px) {
		#search_input_box {
			margin-top: 15px
		}
	}

	#search_input_box .search-inner {
		padding: 5px 13px
	}

	#search_input_box .form-control {
		background: transparent;
		border: 0;
		color: #fff;
		font-weight: 400;
		font-size: 15px;
		padding: 0;
		height: 38px
	}

	#search_input_box .form-control:focus {
		box-shadow: none
	}

	#search_input_box .btn {
		width: 0;
		height: 0;
		padding: 0;
		border: 0
	}

	#search_input_box .ti-close {
		color: #fff;
		font-weight: 600;
		cursor: pointer;
		padding: 10px;
		padding-right: 0
	}

	#search_1 {
		padding-top: 4px
	}

	.slider-height {
		min-height: 700px;
		background-repeat: no-repeat;
		background-position: center center;
		background-size: cover
	}

	@media only screen and (min-width:992px) and (max-width:1199px) {
		.slider-height {
			min-height: 700px
		}
	}

	@media only screen and (min-width:768px) and (max-width:991px) {
		.slider-height {
			min-height: 550px
		}
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.slider-height {
			min-height: 500px
		}
	}

	@media (max-width:575px) {
		.slider-height {
			min-height: 410px
		}
	}

	.slider-height2 {
		min-height: 150px;
		background-repeat: no-repeat;
		background-position: center center;
		background-size: cover
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.slider-height2 {
			min-height: 200px
		}
	}

	@media (max-width:575px) {
		.slider-height2 {
			min-height: 200px
		}
	}

	.slider-bg1 {
		background-image: url(https://preview.colorlib.com/theme/capitalshop/assets/img/hero/h1_hero1.jpg)
	}

	.slider-bg2 {
		background-image: url(https://preview.colorlib.com/theme/capitalshop/assets/img/hero/xh1_hero2.jpg.pagespeed.ic.2GNb5Cyk6w.jpg)
	}

	.slider-area {
		background-size: cover;
		background-repeat: no-repeat
	}

	.slider-area .hero-caption {
		text-align: center
	}

	.slider-area .hero-caption span {
		color: #ff2020;
		font-family: "Clicker Script", cursive;
		font-size: 50px;
		line-height: 1.2;
		font-weight: 400;
		margin-bottom: 1px;
		display: block
	}

	@media (max-width:575px) {
		.slider-area .hero-caption span {
			margin-bottom: 30px;
			font-size: 56px
		}
	}

	.slider-area .hero-caption h1 {
		font-size: 55px;
		font-weight: 500;
		color: #292621;
		line-height: 1.3;
		margin-bottom: 2px
	}

	@media only screen and (min-width:992px) and (max-width:1199px) {
		.slider-area .hero-caption h1 {
			font-size: 60px;
			line-height: 1.2
		}
	}

	@media only screen and (min-width:768px) and (max-width:991px) {
		.slider-area .hero-caption h1 {
			font-size: 50px;
			line-height: 1.2
		}
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.slider-area .hero-caption h1 {
			font-size: 38px;
			line-height: 1.2;
			margin-bottom: 20px
		}
	}

	@media (max-width:575px) {
		.slider-area .hero-caption h1 {
			font-size: 28px;
			line-height: 1.2;
			margin-bottom: 20px
		}
	}

	.slider-area .hero-caption p {
		color: #74706b;
		font-size: 18px;
		font-weight: 400;
		margin-bottom: 31px;
		padding: 0 50px
	}

	@media only screen and (min-width:992px) and (max-width:1199px) {
		.slider-area .hero-caption p {
			font-size: 21px
		}
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.slider-area .hero-caption p {
			font-size: 20px;
			margin-bottom: 41px
		}
	}

	@media (max-width:575px) {
		.slider-area .hero-caption p {
			font-size: 15px;
			padding: 0 0;
			line-height: 1.6;
			margin-bottom: 32px
		}
	}

	.slider-area .hero-caption.hero-caption2 h2 {
		color: #292621;
		font-size: 35px;
		font-weight: 500;
		margin-bottom: 12px
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.slider-area .hero-caption.hero-caption2 h2 {
			font-size: 32x
		}
	}

	@media (max-width:575px) {
		.slider-area .hero-caption.hero-caption2 h2 {
			font-size: 32px
		}
	}

	.breadcrumb {
		background: none;
		padding: 0;
		margin: 0
	}

	.breadcrumb a {
		color: #74706b;
		font-size: 14px;
		text-transform: capitalize;
		line-height: 1;
		font-weight: 400
	}

	.breadcrumb .breadcrumb-item+.breadcrumb-item::before {
		display: inline-block;
		color: #74706b;
		content: "|";
		font-size: 14px;
		padding: 0 4px;
		padding-right: 8px
	}

	.slider-active button.slick-arrow {
		-webkit-transition: all .4s ease-out 0s;
		-moz-transition: all .4s ease-out 0s;
		-ms-transition: all .4s ease-out 0s;
		-o-transition: all .4s ease-out 0s;
		transition: all .4s ease-out 0s;
		position: absolute;
		top: 50%;
		left: 0;
		-webkit-transform: translateY(-50%);
		-ms-transform: translateY(-50%);
		transform: translateY(-50%);
		background: none;
		border: 0;
		padding: 0;
		z-index: 2;
		height: 100px;
		width: 50px;
		cursor: pointer;
		background: rgba(41, 38, 33, .2)
	}

	.slider-active button.slick-arrow:hover {
		background: #292621
	}

	.slider-active button.slick-arrow:hover i {
		color: #fff
	}

	.slider-active button.slick-arrow i {
		font-size: 20px;
		line-height: 60px
	}

	.slider-active button.slick-next {
		left: auto;
		right: 0
	}

	.items-product1 .single-items {
		position: relative
	}

	.items-product1 .single-items .items-img {
		overflow: hidden;
		position: relative;
		z-index: 0
	}

	.items-product1 .single-items .items-img::before {
		position: absolute;
		width: 100%;
		height: 40%;
		bottom: 0;
		content: "";
		z-index: 1
	}

	.items-product1 .single-items .items-img img {
		-webkit-transition: all .4s ease-out 0s;
		-moz-transition: all .4s ease-out 0s;
		-ms-transition: all .4s ease-out 0s;
		-o-transition: all .4s ease-out 0s;
		transition: all .4s ease-out 0s;
		width: 100%;
		transform: scale(1)
	}

	.items-product1 .single-items .items-details {
		-webkit-transition: all .4s ease-out 0s;
		-moz-transition: all .4s ease-out 0s;
		-ms-transition: all .4s ease-out 0s;
		-o-transition: all .4s ease-out 0s;
		transition: all .4s ease-out 0s;
		position: absolute;
		left: 25px;
		bottom: 0;
		text-align: center;
		right: 0
	}

	.items-product1 .single-items .items-details h4 a {
		color: #fff;
		font-size: 24px;
		font-weight: 600;
		display: inline-block;
		margin-bottom: 9px
	}

	@media (max-width:575px) {
		.items-product1 .single-items .items-details h4 a {
			font-size: 18px;
			line-height: 1.1
		}
	}

	.items-product1 .single-items .items-details p {
		color: #fff;
		font-size: 16px;
		font-weight: 300
	}

	.items-product1 .single-items .items-details .browse-btn {
		-webkit-transition: all .4s ease-out 0s;
		-moz-transition: all .4s ease-out 0s;
		-ms-transition: all .4s ease-out 0s;
		-o-transition: all .4s ease-out 0s;
		transition: all .4s ease-out 0s;
		opacity: 0;
		visibility: hidden
	}

	.items-product1 .single-items:hover .items-img img {
		transform: scale(1.02)
	}

	.items-product1 .single-items:hover .items-details {
		bottom: 40px
	}

	.items-product1 .single-items:hover .items-details .browse-btn {
		opacity: 1;
		visibility: visible
	}

	.testimonial-area {
		background: #f3ead8;
		position: relative
	}

	.testimonial-area .testimonial-caption .testimonial-top-cap img {
		margin-bottom: 30px;
		width: auto;
		display: inline-block
	}

	.testimonial-area .testimonial-caption .testimonial-top-cap h2 {
		font-size: 34px;
		font-weight: 500;
		color: #292621;
		margin-bottom: 40px
	}

	@media only screen and (min-width:768px) and (max-width:991px) {
		.testimonial-area .testimonial-caption .testimonial-top-cap h2 {
			margin-bottom: 30px
		}
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.testimonial-area .testimonial-caption .testimonial-top-cap h2 {
			margin-bottom: 30px
		}
	}

	@media (max-width:575px) {
		.testimonial-area .testimonial-caption .testimonial-top-cap h2 {
			font-size: 29px;
			margin-bottom: 20px
		}
	}

	.testimonial-area .testimonial-caption .testimonial-top-cap p {
		line-height: 1.5;
		padding: 0 200px;
		margin-bottom: 32px;
		font-size: 22px;
		color: #292621;
		font-weight: 400
	}

	@media only screen and (min-width:992px) and (max-width:1199px) {
		.testimonial-area .testimonial-caption .testimonial-top-cap p {
			font-size: 20px;
			padding: 0 100px
		}
	}

	@media only screen and (min-width:768px) and (max-width:991px) {
		.testimonial-area .testimonial-caption .testimonial-top-cap p {
			font-size: 18px;
			padding: 0;
			padding: 0 80px
		}
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.testimonial-area .testimonial-caption .testimonial-top-cap p {
			font-size: 18px;
			padding: 0 30px;
			margin-bottom: 30px
		}
	}

	@media (max-width:575px) {
		.testimonial-area .testimonial-caption .testimonial-top-cap p {
			font-size: 15px;
			padding: 0;
			margin-bottom: 30px
		}
	}

	.testimonial-area .testimonial-caption .testimonial-founder .founder-text {
		margin-left: 20px;
		text-align: left
	}

	.testimonial-area .testimonial-caption .testimonial-founder .founder-text span {
		font-family: "Jost", sans-serif;
		color: #292621;
		font-size: 14px;
		font-weight: 500;
		text-align: left
	}

	@media (max-width:575px) {
		.testimonial-area .testimonial-caption .testimonial-founder .founder-text span {
			font-size: 26px
		}
	}

	.testimonial-area .testimonial-caption .testimonial-founder .founder-text p {
		color: #74706b;
		font-weight: 500;
		line-height: 1.5
	}

	.h1-testimonial-active button.slick-arrow {
		position: absolute;
		top: 50%;
		left: 0;
		transform: translateY(-50%);
		border: 0;
		padding: 0;
		width: 35px;
		height: 35px;
		border-radius: 50%;
		line-height: 40px;
		cursor: pointer;
		background: none;
		-webkit-transition: all .3s ease-out 0s;
		-moz-transition: all .3s ease-out 0s;
		-ms-transition: all .3s ease-out 0s;
		-o-transition: all .3s ease-out 0s;
		transition: all .3s ease-out 0s;
		z-index: 2
	}

	@media (max-width:575px) {
		.h1-testimonial-active button.slick-arrow {
			display: none
		}
	}

	.h1-testimonial-active button.slick-arrow i {
		color: rgba(41, 38, 33, .3);
		font-size: 24px
	}

	.h1-testimonial-active button.slick-next {
		left: auto;
		right: 0
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.h1-testimonial-active button.slick-next {
			right: -28px
		}
	}

	.slick-initialized .slick-slide {
		outline: 0
	}

	.categories-area {
		padding-top: 70px;
		padding-bottom: 10px
	}

	@media only screen and (min-width:768px) and (max-width:991px) {
		.categories-area {
			padding-top: 70px;
			padding-bottom: 10px
		}
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.categories-area {
			padding-top: 65px;
			padding-bottom: 0
		}
	}

	@media (max-width:575px) {
		.categories-area {
			padding-top: 65px;
			padding-bottom: 0
		}
	}

	.categories-area .col-lg-3:nth-child(4) .single-cat::before {
		background: 0
	}

	.categories-area .single-cat {
		-webkit-transition: all .4s ease-out 0s;
		-moz-transition: all .4s ease-out 0s;
		-ms-transition: all .4s ease-out 0s;
		-o-transition: all .4s ease-out 0s;
		transition: all .4s ease-out 0s;
		z-index: 1;
		position: relative
	}

	.categories-area .single-cat::before {
		position: absolute;
		content: "";
		width: 1px;
		height: 95%;
		background: #edeff2;
		bottom: 0;
		right: -2%;
		top: 1%
	}

	@media only screen and (min-width:992px) and (max-width:1199px) {
		.categories-area .single-cat::before {
			position: unset
		}
	}

	@media only screen and (min-width:768px) and (max-width:991px) {
		.categories-area .single-cat::before {
			position: unset
		}
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.categories-area .single-cat::before {
			position: unset
		}
	}

	@media (max-width:575px) {
		.categories-area .single-cat::before {
			position: unset
		}
	}

	.categories-area .single-cat .cat-icon img {
		margin-bottom: 26px;
		display: inline-block
	}

	.categories-area .single-cat .cat-cap h5 {
		font-size: 20px;
		font-weight: 500;
		margin-bottom: 12px;
		display: block;
		text-transform: capitalize;
		color: #2b2b2b;
		font-family: "Jost", sans-serif
	}

	@media only screen and (min-width:992px) and (max-width:1199px) {
		.categories-area .single-cat .cat-cap h5 {
			font-size: 17px
		}
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.categories-area .single-cat .cat-cap h5 {
			font-size: 17px
		}
	}

	@media (max-width:575px) {
		.categories-area .single-cat .cat-cap h5 {
			font-size: 23px
		}
	}

	.categories-area .single-cat .cat-cap p {
		color: #57667e;
		font-size: 16px;
		-webkit-transition: all .2s ease-out 0s;
		-moz-transition: all .2s ease-out 0s;
		-ms-transition: all .2s ease-out 0s;
		-o-transition: all .2s ease-out 0s;
		transition: all .2s ease-out 0s
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.categories-area .single-cat .cat-cap p {
			font-size: 15px
		}
	}

	.categories-area .single-cat .cat-cap a {
		color: #1c165c;
		font-size: 16px;
		font-weight: 600;
		-webkit-transition: all .2s ease-out 0s;
		-moz-transition: all .2s ease-out 0s;
		-ms-transition: all .2s ease-out 0s;
		-o-transition: all .2s ease-out 0s;
		transition: all .2s ease-out 0s
	}

	.categories-area .single-cat:hover .cat-cap h5 {
		color: #000
	}

	.services-area2 .single-services {
		display: -webkit-box;
		display: -moz-box;
		display: -ms-flexbox;
		display: -webkit-flex;
		display: flex;
		background-color: #ff2020;
		padding: 29px 20px 29px 80px
	}

	@media only screen and (min-width:768px) and (max-width:991px) {
		.services-area2 .single-services {
			-webkit-flex-wrap: wrap;
			-ms-flex-wrap: wrap;
			flex-wrap: wrap;
			padding: 29px 20px 29px 40px
		}
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.services-area2 .single-services {
			-webkit-flex-wrap: wrap;
			-ms-flex-wrap: wrap;
			flex-wrap: wrap;
			padding: 29px 20px 29px 40px;
			margin-bottom: 40px
		}
	}

	@media (max-width:575px) {
		.services-area2 .single-services {
			-webkit-flex-wrap: wrap;
			-ms-flex-wrap: wrap;
			flex-wrap: wrap;
			padding: 29px 20px 29px 20px;
			margin-bottom: 40px
		}
		.services-area2 .single-services img {
			width: 100%
		}
	}

	.services-area2 .single-services .features-caption {
		margin-left: 50px
	}

	@media only screen and (min-width:768px) and (max-width:991px) {
		.services-area2 .single-services .features-caption {
			margin-left: 0
		}
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.services-area2 .single-services .features-caption {
			margin-left: 0
		}
	}

	@media (max-width:575px) {
		.services-area2 .single-services .features-caption {
			margin-left: 0
		}
	}

	@media only screen and (min-width:768px) and (max-width:991px) {
		.services-area2 .single-services .features-caption img {
			margin-bottom: 30px
		}
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.services-area2 .single-services .features-caption img {
			margin-bottom: 30px
		}
	}

	@media (max-width:575px) {
		.services-area2 .single-services .features-caption img {
			margin-bottom: 30px
		}
	}

	.services-area2 .single-services .features-caption h3 {
		color: #fff;
		font-size: 40px;
		line-height: 1.2;
		margin-bottom: 9px;
		font-weight: 400;
		display: block
	}

	@media only screen and (min-width:992px) and (max-width:1199px) {
		.services-area2 .single-services .features-caption h3 {
			font-size: 24px
		}
	}

	@media (max-width:575px) {
		.services-area2 .single-services .features-caption h3 {
			font-size: 24px
		}
	}

	.services-area2 .single-services .features-caption p {
		font-size: 14px;
		line-height: 1.5;
		color: #fff;
		margin-bottom: 30px
	}

	@media only screen and (min-width:992px) and (max-width:1199px) {
		.services-area2 .single-services .features-caption p {
			font-size: 15px
		}
	}

	@media (max-width:575px) {
		.services-area2 .single-services .features-caption p {
			font-size: 15px
		}
	}

	.services-area2 .single-services .features-caption .review .rating {
		display: inline-block
	}

	.services-area2 .single-services .features-caption .review .rating i {
		font-size: 16px;
		color: #fff
	}

	.services-area2 .single-services .features-caption .review p {
		display: inline-block;
		font-size: 13px
	}

	.services-area2 .single-services .features-caption .price {
		display: inline-block
	}

	.services-area2 .single-services .features-caption .price span {
		font-weight: 500;
		color: #fff;
		font-size: 32px;
		margin-bottom: 9px;
		display: block
	}

	.nav-button nav {
		display: flex;
		justify-content: space-between;
		flex-wrap: wrap;
		margin-bottom: 40px;
		padding-bottom: 0;
		position: relative;
		border-bottom: 1px solid #edeff2
	}

	@media (max-width:575px) {
		.nav-button nav {
			border: 0
		}
	}

	.nav-button nav .nav-tabs {
		border: 0
	}

	.nav-button nav .nav-tabs .nav-item {
		display: block
	}

	@media (max-width:575px) {
		.nav-button nav .nav-tabs .nav-item {
			font-size: 18px
		}
	}

	.nav-button nav .nav-tabs .nav-link {
		font-family: "Jost", sans-serif;
		color: #292621;
		font-size: 16px;
		font-weight: 500;
		border: 0;
		padding: 36px 12px;
		padding-top: 0;
		border-bottom: 4px solid transparent;
		margin-right: 15px
	}

	@media (max-width:575px) {
		.nav-button nav .nav-tabs .nav-link {
			border-bottom: 0;
			margin-right: 0;
			padding: 10px 12px
		}
	}

	.nav-button nav .nav-tabs .nav-link:last-child {
		margin-right: 0
	}

	.nav-button nav .nav-tabs .nav-link.active {
		color: #ff2020;
		border-bottom: 4px solid #ff2020;
		background: none
	}

	@media (max-width:575px) {
		.nav-button nav .nav-tabs .nav-link.active {
			border-bottom: 0
		}
	}

	.nav-button nav .nav-tabs .nav-link:hover {
		border-bottom: 4px solid #ff2020
	}

	@media (max-width:575px) {
		.nav-button nav .nav-tabs .nav-link:hover {
			border-bottom: 0
		}
	}

	.nav-button .nav-tittle h2 {
		color: #292621;
		font-size: 34px;
		font-weight: 500;
		line-height: 1.3;
		margin-bottom: 2px
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.nav-button .nav-tittle h2 {
			font-size: 38px;
			line-height: 1.2;
			margin-bottom: 20px
		}
	}

	@media (max-width:575px) {
		.nav-button .nav-tittle h2 {
			font-size: 28px;
			line-height: 1.2;
			margin-bottom: 20px
		}
	}

	.latest-items {
		padding-top: 95px;
		padding-bottom: 100px;
		text-align: center
	}

	@media only screen and (min-width:768px) and (max-width:991px) {
		.latest-items {
			padding-top: 95px;
			padding-bottom: 100px
		}
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.latest-items {
			padding-top: 70px;
			padding-bottom: 70px
		}
	}

	@media (max-width:575px) {
		.latest-items {
			padding-top: 70px;
			padding-bottom: 70px
		}
	}

	.latest-items.latest-items2 {
		padding: 0
	}

	.latest-items:first-child {
		margin-left: 0
	}

	.latest-items:last-child {
		margin-right: 0
	}

	.latest-items .properties {
		margin: 0 12px
	}

	.latest-items .properties .properties-card {
		background-color: #fff
	}

	.latest-items .properties .properties-card .properties-img {
		position: relative;
		overflow: hidden
	}

	.latest-items .properties .properties-card .properties-img img {
		-webkit-transition: all .4s ease-out 0s;
		-moz-transition: all .4s ease-out 0s;
		-ms-transition: all .4s ease-out 0s;
		-o-transition: all .4s ease-out 0s;
		transition: all .4s ease-out 0s;
		width: 100%;
		transform: scale(1)
	}

	.latest-items .properties .properties-card .properties-img .socal_icon {
		-webkit-transition: all .2s ease-out 0s;
		-moz-transition: all .2s ease-out 0s;
		-ms-transition: all .2s ease-out 0s;
		-o-transition: all .2s ease-out 0s;
		transition: all .2s ease-out 0s;
		position: absolute;
		left: 0;
		right: 0;
		margin: 0 auto;
		opacity: 0;
		visibility: hidden;
		bottom: 20px;
		text-align: center
	}

	.latest-items .properties .properties-card .properties-img .socal_icon a {
		-webkit-transition: all .5s ease-out 0s;
		-moz-transition: all .5s ease-out 0s;
		-ms-transition: all .5s ease-out 0s;
		-o-transition: all .5s ease-out 0s;
		transition: all .5s ease-out 0s;
		background: #fff;
		color: #292621;
		width: 64px;
		height: 50px;
		display: inline-block;
		font-size: 24px;
		text-align: center;
		line-height: 54px;
		margin: -3px
	}

	.latest-items .properties .properties-card .properties-img .socal_icon a:hover {
		background: #ff2020;
		color: #fff
	}

	.latest-items .properties .properties-card .properties-caption {
		padding: 14px 20px 2px 0;
		-webkit-transition: all .4s ease-out 0s;
		-moz-transition: all .4s ease-out 0s;
		-ms-transition: all .4s ease-out 0s;
		-o-transition: all .4s ease-out 0s;
		transition: all .4s ease-out 0s
	}

	.latest-items .properties .properties-card .properties-caption h3 a {
		color: #292621;
		font-size: 16px;
		font-weight: 400;
		margin-bottom: 6px
	}

	.latest-items .properties .properties-card .properties-caption .properties-footer {
		-webkit-transition: all .4s ease-out 0s;
		-moz-transition: all .4s ease-out 0s;
		-ms-transition: all .4s ease-out 0s;
		-o-transition: all .4s ease-out 0s;
		transition: all .4s ease-out 0s
	}

	@media (max-width:575px) {
		.latest-items .properties .properties-card .properties-caption .properties-footer {
			padding: 19px 10px 20px 12px
		}
	}

	.latest-items .properties .properties-card .properties-caption .properties-footer .price span {
		color: #74706b;
		cursor: pointer;
		font-weight: 500;
		font-size: 16px
	}

	.latest-items .properties .properties-card .properties-caption .properties-footer .price span span {
		display: inline-block;
		color: #cebd9c;
		text-decoration: line-through;
		margin: 0;
		margin-left: 12px
	}

	.latest-items .properties:hover .properties-caption h3 a {
		color: #ff2020
	}

	.latest-items .properties:hover .properties-caption .properties-footer .price span {
		color: #292621
	}

	.latest-items .properties:hover .properties-img img {
		transform: scale(1.03)
	}

	.latest-items .properties:hover .properties-img .socal_icon {
		opacity: 1;
		visibility: visible
	}

	.latest-items-active button.slick-arrow {
		position: absolute;
		border: 0;
		padding: 0;
		z-index: 2;
		cursor: pointer;
		top: 50%;
		transform: translateY(-50%);
		left: auto;
		background: none
	}

	.latest-items-active button.slick-arrow i {
		font-size: 30px;
		color: rgba(32, 69, 112, .3);
		-webkit-transition: all .2s ease-out 0s;
		-moz-transition: all .2s ease-out 0s;
		-ms-transition: all .2s ease-out 0s;
		-o-transition: all .2s ease-out 0s;
		transition: all .2s ease-out 0s
	}

	.latest-items-active button.slick-arrow i:hover {
		color: #ff2020
	}

	.latest-items-active button.slick-prev {
		left: -40px
	}

	@media only screen and (min-width:1200px) and (max-width:1600px) {
		.latest-items-active button.slick-prev {
			left: -20px
		}
	}

	@media only screen and (min-width:1200px) and (max-width:1400px) {
		.latest-items-active button.slick-prev {
			left: -30px
		}
	}

	@media only screen and (min-width:992px) and (max-width:1199px) {
		.latest-items-active button.slick-prev {
			left: -27px
		}
	}

	@media only screen and (min-width:768px) and (max-width:991px) {
		.latest-items-active button.slick-prev {
			left: -25px
		}
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.latest-items-active button.slick-prev {
			left: -10px
		}
	}

	.latest-items-active button.slick-next {
		right: -40px
	}

	@media only screen and (min-width:1200px) and (max-width:1600px) {
		.latest-items-active button.slick-next {
			right: -20px
		}
	}

	@media only screen and (min-width:1200px) and (max-width:1400px) {
		.latest-items-active button.slick-next {
			right: -30px
		}
	}

	@media only screen and (min-width:992px) and (max-width:1199px) {
		.latest-items-active button.slick-next {
			right: -27px
		}
	}

	@media only screen and (min-width:768px) and (max-width:991px) {
		.latest-items-active button.slick-next {
			right: -20px
		}
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.latest-items-active button.slick-next {
			right: -10px
		}
	}

	.subscribe-area .subscribe-padding {
		padding-bottom: 40px;
		margin-bottom: 60px;
		border-bottom: 1px solid rgba(255, 255, 255, .14)
	}

	.subscribe-area .subscribe-caption span {
		font-family: "Jost", sans-serif;
		text-transform: capitalize;
		font-size: 20px;
		color: #ff2020;
		margin-bottom: 10px;
		display: block
	}

	.subscribe-area .subscribe-caption h3 {
		color: #fff;
		font-family: "Jost", sans-serif;
		font-size: 24px;
		font-weight: 500;
		line-height: 1.3;
		margin-bottom: 12px
	}

	@media (max-width:575px) {
		.subscribe-area .subscribe-caption h3 {
			padding: 0 0;
			font-size: 25px
		}
		.subscribe-area .subscribe-caption h3 {
			padding: 0 0;
			font-size: 25px
		}
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.subscribe-area .subscribe-caption h3 {
			padding: 0 0
		}
	}

	.subscribe-area .subscribe-caption p {
		color: #fff;
		font-size: 15px
	}

	.subscribe-area .subscribe-caption form input {
		width: 74%;
		height: 60px;
		border: 0;
		color: #000;
		background: #fff;
		border: 1px solid rgba(255, 255, 255, .2);
		border-radius: 0;
		padding: 15px 24px;
		font-size: 16px
	}

	.subscribe-area .subscribe-caption form input::placeholder {
		color: #000;
		font-size: 16px
	}

	@media (max-width:575px) {
		.subscribe-area .subscribe-caption form input {
			width: 100%;
			margin-bottom: 20px
		}
	}

	.subscribe-area .subscribe-caption form button.subscribe-btn {
		width: 24%;
		height: 60px;
		border: 0;
		background: #ff2020;
		border-radius: 0;
		padding: 13px 24px;
		color: #fff;
		margin-left: 5px;
		cursor: pointer;
		font-size: 16px;
		font-weight: 500
	}

	@media (max-width:575px) {
		.subscribe-area .subscribe-caption form button.subscribe-btn {
			width: 100%;
			margin-bottom: 20px;
			margin-left: 0
		}
	}

	.footer-wrapper {
		background: #171613
	}

	.footer-wrapper .footer-area .footer-tittle h4 {
		color: #fff;
		font-size: 18px;
		margin-bottom: 30px;
		font-weight: 400
	}

	.footer-wrapper .footer-area .footer-tittle ul li {
		margin-bottom: 8px
	}

	.footer-wrapper .footer-area .footer-tittle ul li a {
		color: #bbb9b5;
		font-weight: 400;
		font-size: 16px;
		text-decoration: underline transparent
	}

	.footer-wrapper .footer-area .footer-tittle ul li a:hover {
		color: #bbb9b5;
		text-decoration: underline;
		letter-spacing: .4px
	}

	.footer-wrapper .footer-area .footer-tittle ul li span {
		color: red
	}

	.footer-wrapper .footer-area .footer-tittle p {
		color: #bbb9b5;
		font-size: 16px
	}

	.footer-wrapper .footer-area .info.error {
		color: #ff2020
	}

	.footer-bottom-area .footer-border {
		border-top: 1px solid rgba(255, 255, 255, .14);
		padding-top: 39px;
		padding-bottom: 1px
	}

	.footer-bottom-area .footer-copy-right p {
		color: #bbb9b5;
		font-weight: 300;
		font-size: 16px;
		line-height: 2
	}

	.footer-bottom-area .footer-copy-right p i {
		color: #ff2020
	}

	.footer-bottom-area .footer-copy-right p a {
		color: #ff2020
	}

	@media only screen and (min-width:768px) and (max-width:991px) {
		.footer-social {
			padding-top: 20px
		}
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.footer-social {
			padding-top: 20px
		}
	}

	@media (max-width:575px) {
		.footer-social {
			padding-top: 20px
		}
	}

	.footer-social a {
		color: #677f8b;
		font-size: 24px;
		display: inline-block;
		text-align: center;
		margin-left: 23px
	}

	.footer-social a i {
		-webkit-transition: all .4s ease-out 0s;
		-moz-transition: all .4s ease-out 0s;
		-ms-transition: all .4s ease-out 0s;
		-o-transition: all .4s ease-out 0s;
		transition: all .4s ease-out 0s;
		display: inline-block;
		transform: rotateY(0deg);
		-webkit-transform: rotateY(0deg);
		-moz-transform: rotateY(0deg);
		-ms-transform: rotateY(0deg);
		-o-transform: rotateY(0deg)
	}

	.footer-social a:hover {
		color: #ff2020
	}

	.footer-social a:hover i {
		transform: rotateY(180deg);
		-webkit-transform: rotateY(180deg);
		-moz-transform: rotateY(180deg);
		-ms-transform: rotateY(180deg);
		-o-transform: rotateY(180deg)
	}

	@media (max-width:575px) {
		.listing-area {
			padding-top: 70px;
			padding-bottom: 70px
		}
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.listing-area {
			padding-top: 70px;
			padding-bottom: 70px
		}
	}

	.listing-area .count span {
		color: #001d38;
		font-size: 18px
	}

	@media (max-width:575px) {
		.listing-area .count span {
			margin-bottom: 30px
		}
	}

	.category-listing {
		border: 1px solid #edeff2;
		padding: 30px 19px 30px 30px
	}

	@media only screen and (min-width:992px) and (max-width:1199px) {
		.category-listing {
			padding: 30px 19px 30px 16px
		}
	}

	@media only screen and (min-width:768px) and (max-width:991px) {
		.category-listing {
			padding: 30px 19px 30px 16px
		}
	}

	.category-listing .single-listing .select-job-items2 .nice-select {
		width: 100%;
		height: 45px;
		background: #fff;
		border-radius: 30px;
		padding: 11px 19px 11px 18px;
		color: #140c40;
		line-height: 20px;
		border: 1px solid #edeff2;
		margin-bottom: 20px
	}

	@media (max-width:575px) {
		.category-listing .single-listing .select-job-items2 .nice-select {
			padding-left: 25px
		}
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.category-listing .single-listing .select-job-items2 .nice-select {
			padding-left: 25px
		}
	}

	.category-listing .single-listing .select-job-items2 .nice-select .list {
		width: 100%
	}

	.category-listing .single-listing .select-job-items2 .nice-select.open .list {
		width: 100%;
		border-radius: 0;
		border: 0
	}

	.category-listing .single-listing .select-job-items2 .nice-select::after {
		border-bottom: 3px solid #232f55;
		border-right: 3px solid #232f55;
		height: 9px;
		width: 9px;
		margin-top: -6px;
		right: 29px
	}

	.category-listing .single-listing .select-job-items2 .nice-select:focus {
		border-color: #eee1e0
	}

	.category-listing .single-listing .select-Categories .container {
		display: block;
		position: relative;
		padding-left: 35px;
		margin-bottom: 12px;
		cursor: pointer;
		font-size: 22px;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
		color: #232f55;
		font-size: 16px
	}

	@media (max-width:575px) {
		.category-listing .single-listing .select-Categories .container {
			font-size: 14px
		}
	}

	.category-listing .single-listing .select-Categories .container input {
		position: absolute;
		opacity: 0;
		cursor: pointer;
		height: 0;
		width: 0
	}

	.category-listing .single-listing .select-Categories .checkmark {
		position: absolute;
		top: 0;
		left: 0;
		height: 22px;
		width: 22px;
		border: 1px solid #edeff2;
		border-radius: 50%
	}

	.category-listing .single-listing .select-Categories .container input:checked~.checkmark {
		background-color: #ff2020;
		border: 2px solid transparent
	}

	.category-listing .single-listing .select-Categories .checkmark:after {
		content: "";
		position: absolute;
		display: none
	}

	.category-listing .single-listing .select-Categories .container input:checked~.checkmark:after {
		display: block
	}

	.category-listing .single-listing .select-Categories .container .checkmark::after {
		left: 6px;
		top: 2px;
		width: 7px;
		height: 12px;
		border: solid #fff;
		border-width: 0 2px 2px 0;
		-webkit-transform: rotate(45deg);
		-ms-transform: rotate(45deg);
		transform: rotate(45deg)
	}

	.range_item p {
		margin-bottom: 0
	}

	.price_value input {
		border: 0;
		text-align: center;
		max-width: 50px;
		background-color: transparent
	}

	.price_value {
		align-items: center
	}

	.irs-to,
	.irs-from,
	.irs-max,
	.irs-min {
		display: none
	}

	.irs-bar {
		height: 2px;
		top: 33px;
		border-top: 1px solid #ff3368;
		border-bottom: 1px solid #ff3368;
		background: #ff3368;
		background: linear-gradient(to top, #ff3368 0%, #ff3368 100%)
	}

	.irs-line {
		height: 2px;
		top: 33px;
		background: linear-gradient(to bottom, #ffeaef -50%, #ffeaef 150%);
		border: 1px solid #edeff2;
		border-radius: 16px;
		-moz-border-radius: 16px
	}

	.irs-slider {
		height: 15px;
		width: 15px;
		border: 1px solid #ff3368;
		background-color: #ff3368;
		background: #fff;
		top: 26px;
		box-shadow: none;
		border-radius: 4px
	}

	.left_widgets {
		margin-bottom: 30px
	}

	.left_widgets:last-child {
		margin-bottom: 0
	}

	.widgets_inner p {
		font-size: 14px;
		text-transform: capitalize;
		color: #000;
		font-weight: 400;
		margin-bottom: 20px
	}

	.widgets_inner input[type="checkbox"],
	.widgets_inner input[type="radio"] {
		margin-right: 15px
	}

	.widgets_inner {
		padding-left: 30px;
		padding-right: 30px;
		padding-top: 0;
		padding-bottom: 15px
	}

	@media (max-width:991px) {
		.widgets_inner {
			padding-left: 15px;
			padding-right: 15px
		}
	}

	.p_filter_widgets .widgets_inner {
		border-bottom: 1px solid #eee
	}

	.p_filter_widgets .widgets_inner:last-child {
		border-bottom: 0
	}

	.p_filter_widgets .list {
		border-top: 1px solid #ddd;
		padding-top: 25px;
		margin-top: 25px
	}

	.p_filter_widgets .list:first-child {
		padding-top: 0;
		margin-top: 0;
		border-top: 0 solid transparent
	}

	.p_filter_widgets .list li {
		margin-bottom: 18px;
		-webkit-transition: .5s;
		transition: .5s
	}

	.p_filter_widgets .list li a {
		font-size: 14px;
		font-weight: normal;
		color: #606060;
		position: relative
	}

	.p_filter_widgets .list li.active a:before,
	.p_filter_widgets .list li:hover a:before {
		background: #ff2020;
		border-color: #ff2020
	}

	.p_filter_widgets .list li:last-child {
		margin-bottom: 0
	}

	.cart_area {
		padding: 50px 0 50px
	}

	@media (max-width:991px) {
		.cart_area {
			padding: 50px 0 40px
		}
	}

	@media only screen and (min-width:992px) and (max-width:1200px) {
		.cart_area {
			padding: 50px 0 50px
		}
	}

	.cart_area .product_count {
		display: inline-block;
		position: relative;
		margin-bottom: 24px;
		overflow: hidden
	}

	.cart_area .product_count input {
		width: 76px;
		border: 1px solid #eee;
		border-radius: 3px;
		padding-left: 10px
	}

	.cart_area .product_count .input-number-increment {
		position: absolute;
		right: 0;
		top: -7px;
		padding: 10px;
		border-left: 1px solid #eee;
		display: inline-block
	}

	.cart_area .product_count .input-number-increment:after {
		position: absolute;
		content: "";
		left: 0;
		bottom: 7px;
		width: 100%;
		height: 1px;
		background-color: #eee
	}

	.cart_area .product_count .input-number-decrement {
		position: absolute;
		right: 0;
		bottom: -9px;
		padding: 10px;
		border-left: 1px solid #eee;
		display: inline-block
	}

	@media (max-width:576px) {
		.cart_area .media {
			display: block
		}
	}

	@media only screen and (min-width:480px) and (max-width:767px) {
		.cart_area .media {
			display: block
		}
	}

	.cart_inner .table {
		margin-bottom: 30px;
		border-bottom: 1px solid #eee
	}

	.cart_inner .table thead tr th {
		border-top: 0;
		font-size: 14px;
		font-weight: 500;
		font-family: "Roboto", sans-serif;
		color: #797979;
		border-bottom: 0!important
	}

	.cart_inner .table tbody tr td {
		padding-top: 30px;
		padding-bottom: 30px;
		vertical-align: middle;
		align-self: center
	}

	.cart_inner .table tbody tr td .media .d-flex {
		padding-right: 30px
	}

	.cart_inner .table tbody tr td .media .d-flex img {
		border: 1px solid #eee;
		border-radius: 3px;
		max-width: 150px
	}

	.cart_inner .table tbody tr td .media .media-body {
		vertical-align: middle;
		align-self: center
	}

	.cart_inner .table tbody tr td .media .media-body p {
		margin-bottom: 0
	}

	.cart_inner .table tbody tr td h5 {
		font-size: 14px;
		color: #2a2a2a;
		font-family: "Roboto", sans-serif;
		margin-bottom: 0
	}

	.cart_inner .table tbody tr td .product_count {
		margin-bottom: 0
	}

	.cart_inner .table tbody tr td .product_count input {
		width: 100px;
		padding-left: 30px;
		height: 50px;
		outline: none;
		box-shadow: none
	}

	.cart_inner .table tbody tr.bottom_button td:last-child {
		width: 60px
	}

	.cart_inner .table tbody tr.bottom_button td .cupon_text {
		margin-left: -446px
	}

	.cart_inner .table tbody tr.bottom_button td .cupon_text input {
		width: 200px;
		padding: 0 15px;
		border-radius: 3px;
		border: 1px solid #eee;
		height: 40px;
		font-size: 14px;
		color: #ccc;
		font-family: "Roboto", sans-serif;
		font-weight: normal;
		margin-right: -3px;
		outline: none;
		box-shadow: none
	}

	.cart_inner .table tbody tr.bottom_button td .cupon_text input.placeholder {
		font-size: 14px;
		color: #ccc;
		font-family: "Roboto", sans-serif;
		font-weight: normal
	}

	.cart_inner .table tbody tr.bottom_button td .cupon_text input:-moz-placeholder {
		font-size: 14px;
		color: #ccc;
		font-family: "Roboto", sans-serif;
		font-weight: normal
	}

	.cart_inner .table tbody tr.bottom_button td .cupon_text input::-moz-placeholder {
		font-size: 14px;
		color: #ccc;
		font-family: "Roboto", sans-serif;
		font-weight: normal
	}

	.cart_inner .table tbody tr.bottom_button td .cupon_text input::-webkit-input-placeholder {
		font-size: 14px;
		color: #ccc;
		font-family: "Roboto", sans-serif;
		font-weight: normal
	}

	.cart_inner .table tbody tr.shipping_area td:nth-child(3) {
		vertical-align: top
	}

	.cart_inner .table tbody tr.shipping_area .shipping_box {
		margin-left: -250px;
		text-align: right
	}

	.cart_inner .table tbody tr.shipping_area .shipping_box .list li {
		margin-bottom: 12px;
		color: #606060
	}

	.cart_inner .table tbody tr.shipping_area .shipping_box .list li input {
		margin-left: 10px
	}

	.cart_inner .table tbody tr.shipping_area .shipping_box .list li:last-child {
		margin-bottom: 0
	}

	.cart_inner .table tbody tr.shipping_area .shipping_box .list li a {
		padding-right: 30px;
		font-size: 14px;
		color: #797979;
		position: relative
	}

	.cart_inner .table tbody tr.shipping_area .shipping_box .list li a:before {
		content: "";
		height: 16px;
		width: 16px;
		border: 1px solid #cdcdcd;
		display: inline-block;
		border-radius: 50%;
		position: absolute;
		right: 0;
		top: 50%;
		transform: translateY(-50%)
	}

	.cart_inner .table tbody tr.shipping_area .shipping_box .list li a:after {
		content: "";
		height: 10px;
		width: 10px;
		border-radius: 50%;
		background: #ff2020;
		display: inline-block;
		position: absolute;
		right: 3px;
		top: 50%;
		transform: translateY(-50%);
		opacity: 0
	}

	.cart_inner .table tbody tr.shipping_area .shipping_box .list li.active a:after {
		opacity: 1
	}

	.cart_inner .table tbody tr.shipping_area .shipping_box h6 {
		font-size: 14px;
		font-weight: normal;
		color: #2a2a2a;
		font-family: "Roboto", sans-serif;
		margin-top: 20px;
		margin-bottom: 20px
	}

	.cart_inner .table tbody tr.shipping_area .shipping_box h6 i {
		color: #797979;
		padding-left: 5px
	}

	.cart_inner .table tbody tr.shipping_area .shipping_box .shipping_select {
		display: block;
		width: 100%;
		background: #f4f4f4;
		border: 1px solid #f4f4f4;
		height: 40px;
		margin-bottom: 20px
	}

	.cart_inner .table tbody tr.shipping_area .shipping_box .shipping_select .list {
		width: 100%;
		border-radius: 0
	}

	.cart_inner .table tbody tr.shipping_area .shipping_box .shipping_select .list li {
		font-size: 14px;
		font-weight: normal;
		color: #797979
	}

	.checkout_area {
		padding: 50px 0 50px
	}

	@media (max-width:991px) {
		.checkout_area {
			padding: 50px 0 40px
		}
	}

	@media only screen and (min-width:992px) and (max-width:1200px) {
		.checkout_area {
			padding: 50px 0 50px
		}
	}

	.checkout_area p {
		font-size: 14px
	}

	.checkout_area .form-control {
		font-size: 14px;
		height: 40px
	}

	.checkout_area .form-control {
		border: 1px solid #eee
	}

	.checkout_area .form-control :focus {
		color: #495057;
		background-color: #fff;
		border: 1px solid #ced4da;
		outline: 0;
		box-shadow: none
	}

	.checkout_area .form-control .form-control input {
		height: 50px
	}

	.post_code {
		display: block;
		width: 100%;
		background: #f4f4f4;
		border: 1px solid #f4f4f4;
		height: 40px;
		margin-bottom: 20px;
		padding: 8px 15px
	}

	.check_title h2 {
		font-size: 14px;
		font-weight: normal;
		font-family: "Roboto", sans-serif;
		background: #f4f4f4;
		line-height: 40px;
		padding-left: 30px;
		margin-bottom: 0
	}

	@media (max-width:991px) {
		.check_title h2 {
			line-height: 17px;
			padding: 12px
		}
	}

	.check_title h2 a {
		color: #ff2020;
		text-decoration: underline
	}

	.returning_customer p {
		margin-top: 15px;
		padding-left: 30px;
		margin-bottom: 25px
	}

	@media (max-width:991px) {
		.returning_customer p {
			padding-left: 0
		}
	}

	.returning_customer .contact_form {
		max-width: 710px;
		margin-left: 15px
	}

	@media (max-width:991px) {
		.returning_customer .contact_form {
			margin-left: -15px
		}
	}

	.returning_customer .contact_form .form-group {
		margin-bottom: 20px
	}

	.returning_customer .contact_form .form-group input {
		border: 1px solid #eee;
		height: 40px;
		border-radius: 3px;
		font-size: 14px;
		font-family: "Roboto", sans-serif;
		color: #797979;
		font-weight: normal
	}

	.returning_customer .contact_form .form-group input.placeholder {
		font-size: 14px;
		font-family: "Roboto", sans-serif;
		color: #797979;
		font-weight: normal
	}

	.returning_customer .contact_form .form-group input:-moz-placeholder {
		font-size: 14px;
		font-family: "Roboto", sans-serif;
		color: #797979;
		font-weight: normal
	}

	.returning_customer .contact_form .form-group input::-moz-placeholder {
		font-size: 14px;
		font-family: "Roboto", sans-serif;
		color: #797979;
		font-weight: normal
	}

	.returning_customer .contact_form .form-group input::-webkit-input-placeholder {
		font-size: 14px;
		font-family: "Roboto", sans-serif;
		color: #797979;
		font-weight: normal
	}

	.returning_customer .contact_form .form-group .creat_account {
		display: inline-block;
		margin-left: 15px
	}

	.returning_customer .contact_form .form-group .creat_account input {
		height: auto;
		margin-right: 10px
	}

	.p_star {
		display: inline-block;
		position: relative
	}

	.p_star input {
		background: #fff
	}

	.p_star input:focus+.placeholder {
		display: none
	}

	.p_star .placeholder {
		position: absolute;
		top: 50%;
		transform: translateY(-50%);
		left: 30px;
		z-index: 1
	}

	.p_star .placeholder::before {
		content: attr(data-placeholder);
		color: #777
	}

	.p_star .placeholder::after {
		content: " *";
		color: #ff6347
	}

	.cupon_area {
		margin-bottom: 40px
	}

	.cupon_area input {
		margin-left: 30px;
		max-width: 730px;
		width: 100%;
		display: block;
		height: 40px;
		border-radius: 3px;
		padding: 0 15px;
		border: 1px solid #eee;
		outline: none;
		box-shadow: none;
		margin-top: 20px;
		margin-bottom: 20px
	}

	@media (max-width:991px) {
		.cupon_area input {
			margin-left: 0
		}
	}

	.billing_details h3 {
		font-size: 18px;
		color: #2a2a2a;
		padding-bottom: 10px;
		margin-bottom: 30px
	}

	.billing_details .contact_form .form-group {
		margin-bottom: 20px
	}

	.billing_details .contact_form .form-group input {
		border-radius: 3px;
		color: #797979
	}

	.billing_details .contact_form .form-group input.placeholder {
		color: #797979
	}

	.billing_details .contact_form .form-group input:-moz-placeholder {
		color: #797979
	}

	.billing_details .contact_form .form-group input::-moz-placeholder {
		color: #797979
	}

	.billing_details .contact_form .form-group input::-webkit-input-placeholder {
		color: #797979
	}

	.billing_details .contact_form .form-group textarea {
		height: 150px;
		border-radius: 0;
		padding: 20px 20px;
		margin-top: 15px
	}

	.billing_details .contact_form .form-group .country_select {
		width: 100%
	}

	.billing_details .contact_form .form-group .country_select span {
		color: #797979
	}

	.billing_details .contact_form .form-group .country_select .list {
		width: 100%;
		border-radius: 0
	}

	.billing_details .contact_form .form-group .country_select .list li {
		font-size: 14px;
		font-family: "Roboto", sans-serif;
		font-weight: normal
	}

	.billing_details .contact_form .form-group .creat_account #f-option3 {
		margin-right: 5px
	}

	.billing_details .contact_form .form-group .creat_account a {
		color: #ff2020
	}

	.order_box {
		background: #f4f4f4;
		padding: 30px
	}

	.order_box h2 {
		border-bottom: 1px solid #ddd;
		font-size: 18px;
		font-weight: 500;
		color: #2a2a2a;
		padding-bottom: 15px
	}

	.order_box .list li a {
		font-size: 14px;
		color: #797979;
		font-weight: normal;
		border-bottom: 1px solid #eee;
		display: block;
		line-height: 42px
	}

	.order_box .list li a span {
		float: right
	}

	.order_box .list li a .middle {
		float: none;
		width: 50px;
		text-align: right;
		display: inline-block;
		margin-left: 30px;
		color: #2a2a2a
	}

	.order_box .list li:nth-child(4) a .middle {
		margin-left: 48px
	}

	.order_box .list_2 li a {
		text-transform: uppercase;
		color: #2a2a2a;
		font-weight: 500
	}

	.order_box .list_2 li a span {
		color: #797979;
		text-transform: capitalize
	}

	.order_box .list_2 li:last-child a span {
		color: #2a2a2a
	}

	.order_box .payment_item h4 {
		font-size: 14px;
		text-transform: uppercase;
		color: #2a2a2a;
		font-weight: 500;
		padding-left: 22px;
		position: relative;
		margin-bottom: 15px;
		margin-top: 15px
	}

	.order_box .payment_item h4:before {
		content: "";
		width: 14px;
		height: 14px;
		border-radius: 50%;
		border: 1px solid #cdcdcd;
		background: #fff;
		display: block;
		position: absolute;
		left: 0;
		top: 50%;
		transform: translateY(-50%)
	}

	.order_box .payment_item h4:after {
		content: "";
		height: 4px;
		width: 4px;
		background: #fff;
		border-radius: 50%;
		display: block;
		position: absolute;
		left: 5px;
		top: 8px
	}

	.order_box .payment_item h4 img {
		padding-left: 60px
	}

	.order_box .payment_item p {
		background: #fff;
		padding: 20px
	}

	.order_box .payment_item.active h4:before {
		background: #ff2020;
		border-color: #ff2020
	}

	.order_box .creat_account {
		margin: 15px 0
	}

	.order_box .creat_account label {
		padding-left: 10px;
		font-size: 12px;
		color: #2a2a2a
	}

	.order_box .creat_account a {
		color: #ff2020
	}

	.radion_btn input[type="radio"] {
		position: absolute;
		visibility: hidden
	}

	.radion_btn {
		position: relative;
		margin-top: 10px;
		margin-bottom: 15px
	}

	.radion_btn img {
		position: absolute;
		right: 40px;
		top: 0
	}

	.radion_btn label {
		display: block;
		position: relative;
		font-weight: 300;
		font-size: 1.35em;
		padding: 0 25px 21px 25px;
		height: 14px;
		z-index: 9;
		cursor: pointer;
		-webkit-transition: all .25s linear;
		font-family: "Roboto", sans-serif;
		font-weight: 500;
		color: #2a2a2a;
		font-size: 13px;
		letter-spacing: .25px;
		text-transform: uppercase
	}

	.radion_btn .check {
		display: block;
		position: absolute;
		border: 1px solid #cdcdcd;
		border-radius: 100%;
		height: 14px;
		width: 14px;
		top: 5px;
		left: 0;
		background: #fff;
		z-index: 5;
		transition: border .25s linear;
		-webkit-transition: border .25s linear
	}

	.radion_btn .check::before {
		display: block;
		position: absolute;
		content: "";
		border-radius: 100%;
		height: 4px;
		width: 4px;
		top: 4px;
		left: 4px;
		margin: auto;
		transition: background .25s linear;
		-webkit-transition: background .25s linear
	}

	.radion_btn input[type="radio"]:checked~.check {
		border: 1px solid #ff2020;
		background: #ff2020
	}

	.radion_btn input[type="radio"]:checked~.check::before {
		background: #fff
	}

	.radion_btn input[type="radio"]:checked~label {
		color: #000
	}

	.cart_area .btn_1 {
		border: 1px solid transparent
	}

	.cart_area .btn_1:hover {
		border: 1px solid #ff2020!important
	}

	.checkout-cap {
		display: -webkit-box;
		display: -moz-box;
		display: -ms-flexbox;
		display: -webkit-flex;
		display: flex;
		-webkit-box-pack: justify;
		-moz-box-pack: justify;
		-ms-flex-pack: justify;
		-webkit-justify-content: space-between;
		justify-content: space-between;
		padding-top: 8px;
		overflow: hidden
	}

	@media (max-width:575px) {
		.checkout-cap {
			display: block
		}
	}

	.checkout-cap input[type="checkbox"]+label {
		display: inline-block;
		margin: .2em;
		cursor: pointer;
		padding: 0;
		margin: 0 0 13px 0
	}

	.checkout-cap input[type="checkbox"] {
		display: none
	}

	.checkout-cap input[type="checkbox"]+label::before {
		content: "\2714";
		border: .1em solid #e4e4e4;
		border-radius: .2em;
		display: inline-block;
		width: 20px;
		height: 20px;
		padding-left: .2em;
		padding-bottom: .3em;
		margin-right: 10px;
		vertical-align: bottom;
		color: transparent;
		transition: .2s
	}

	.checkout-cap input[type="checkbox"]+label:active:before {
		transform: scale(0)
	}

	.checkout-cap input[type="checkbox"]:checked+label:before {
		background-color: #ff2020;
		border-color: #ff2020;
		color: #fff;
		line-height: 18px
	}

	.login-bg {
		height: 100vh;
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center center;
		background-image: url(https://preview.colorlib.com/theme/capitalshop/assets/img/hero/h1_hero.jpg)
	}

	.login-form-area {
		display: -webkit-box;
		display: -moz-box;
		display: -ms-flexbox;
		display: -webkit-flex;
		display: flex;
		-webkit-box-pack: center;
		-moz-box-pack: center;
		-ms-flex-pack: center;
		-webkit-justify-content: center;
		justify-content: center;
		-webkit-box-align: center;
		-moz-box-align: center;
		-ms-flex-align: center;
		-webkit-align-items: center;
		align-items: center;
		min-height: 100vh;
		padding: 15px 0
	}

	.login-form-area .login-form {
		background: #fff;
		padding: 55px 60px 50px 50px;
		box-shadow: 0 10px 30px 0 rgba(13, 12, 13, .2);
		min-width: 700px
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.login-form-area .login-form {
			padding: 40px 20px 20px 26px;
			min-width: 95%
		}
	}

	@media (max-width:575px) {
		.login-form-area .login-form {
			padding: 40px 20px 20px 26px;
			min-width: 95%
		}
	}

	.login-form-area .login-form .login-heading {
		text-align: center
	}

	.login-form-area .login-form .login-heading span {
		color: #140c40;
		font-size: 30px;
		font-weight: 600;
		margin-bottom: 16px;
		display: block;
		text-transform: capitalize
	}

	.login-form-area .login-form .input-box {
		padding-top: 35px;
		padding-bottom: 75px
	}

	@media (max-width:575px) {
		.login-form-area .login-form .input-box {
			padding-top: 28px;
			padding-bottom: 10px
		}
	}

	.login-form-area .login-form .input-box .single-input-fields label {
		display: block;
		font-size: 17px;
		margin-bottom: 6px;
		color: #140c40;
		text-transform: capitalize;
		font-weight: 500;
		text-align: left
	}

	.login-form-area .login-form .input-box .single-input-fields input {
		border: 1px solid #c9c9c9;
		width: 100%;
		height: 50px;
		margin-bottom: 20px;
		padding: 0 25px;
		color: #000
	}

	.login-form-area .login-form .input-box .single-input-fields input::placeholder {
		color: #777;
		font-weight: 300;
		font-size: 13px
	}

	.login-form-area .login-form .login-footer {
		display: -webkit-box;
		display: -moz-box;
		display: -ms-flexbox;
		display: -webkit-flex;
		display: flex;
		-webkit-box-pack: justify;
		-moz-box-pack: justify;
		-ms-flex-pack: justify;
		-webkit-justify-content: space-between;
		justify-content: space-between;
		-webkit-box-align: center;
		-moz-box-align: center;
		-ms-flex-align: center;
		-webkit-align-items: center;
		align-items: center
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.login-form-area .login-form .login-footer {
			display: block;
			text-align: start
		}
	}

	@media (max-width:575px) {
		.login-form-area .login-form .login-footer {
			display: block;
			text-align: start
		}
	}

	.login-form-area .login-form .login-footer p {
		margin: 0
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.login-form-area .login-form .login-footer p {
			margin-bottom: 28px;
			display: block
		}
	}

	@media (max-width:575px) {
		.login-form-area .login-form .login-footer p {
			margin-bottom: 28px;
			display: block
		}
	}

	.login-form-area .login-form .login-footer p a {
		color: #ff2020
	}

	.login-check {
		display: -webkit-box;
		display: -moz-box;
		display: -ms-flexbox;
		display: -webkit-flex;
		display: flex;
		-webkit-box-pack: justify;
		-moz-box-pack: justify;
		-ms-flex-pack: justify;
		-webkit-justify-content: space-between;
		justify-content: space-between;
		padding-top: 8px;
		overflow: hidden
	}

	@media (max-width:575px) {
		.login-check {
			display: block
		}
	}

	.login-check input[type="checkbox"]+label {
		display: inline-block;
		margin: .2em;
		cursor: pointer;
		padding: 0;
		margin: 0 0 13px 0
	}

	.login-check input[type="checkbox"] {
		display: none
	}

	.login-check input[type="checkbox"]+label::before {
		content: "\2714";
		border: .1em solid #e4e4e4;
		border-radius: .2em;
		display: inline-block;
		width: 20px;
		height: 20px;
		padding-left: .2em;
		padding-bottom: .3em;
		margin-right: 10px;
		vertical-align: bottom;
		color: transparent;
		transition: .2s
	}

	.login-check input[type="checkbox"]+label:active:before {
		transform: scale(0)
	}

	.login-check input[type="checkbox"]:checked+label:before {
		background-color: #ff2020;
		border-color: #ff2020;
		color: #fff;
		line-height: 18px
	}

	.login-check a {
		color: #ff2020;
		font-size: 14px;
		font-weight: 400
	}

	.login-check a:hover {
		color: #ff2020
	}

	@media (max-width:575px) {
		.login-check a {
			float: left;
			display: block;
			padding-top: 7px;
			margin-bottom: 10px
		}
	}

	.register-form-area {
		display: -webkit-box;
		display: -moz-box;
		display: -ms-flexbox;
		display: -webkit-flex;
		display: flex;
		-webkit-box-pack: center;
		-moz-box-pack: center;
		-ms-flex-pack: center;
		-webkit-justify-content: center;
		justify-content: center;
		-webkit-box-align: center;
		-moz-box-align: center;
		-ms-flex-align: center;
		-webkit-align-items: center;
		align-items: center;
		min-height: 100vh;
		padding: 15px 0
	}

	.register-form-area .register-form {
		background: #fff;
		padding: 55px 60px 50px 50px;
		box-shadow: 0 10px 30px 0 rgba(13, 12, 13, .2);
		min-width: 700px
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.register-form-area .register-form {
			padding: 40px 20px 20px 26px;
			min-width: 95%
		}
	}

	@media (max-width:575px) {
		.register-form-area .register-form {
			padding: 40px 20px 20px 26px;
			min-width: 95%
		}
	}

	.register-form-area .register-form .register-heading {
		text-align: center
	}

	.register-form-area .register-form .register-heading span {
		color: #140c40;
		font-size: 30px;
		font-weight: 600;
		margin-bottom: 16px;
		display: block;
		text-transform: capitalize
	}

	.register-form-area .register-form .input-box {
		padding-top: 35px;
		padding-bottom: 60px
	}

	@media (max-width:575px) {
		.register-form-area .register-form .input-box {
			padding-top: 28px;
			padding-bottom: 20px
		}
	}

	.register-form-area .register-form .input-box .single-input-fields label {
		display: block;
		font-size: 17px;
		margin-bottom: 6px;
		color: #140c40;
		text-transform: capitalize;
		font-weight: 500;
		text-align: left
	}

	.register-form-area .register-form .input-box .single-input-fields input {
		border: 1px solid #c9c9c9;
		width: 100%;
		height: 50px;
		margin-bottom: 20px;
		padding: 0 25px;
		color: #000
	}

	.register-form-area .register-form .input-box .single-input-fields input::placeholder {
		color: #777;
		font-weight: 300;
		font-size: 13px
	}

	.register-form-area .register-form .register-footer {
		display: -webkit-box;
		display: -moz-box;
		display: -ms-flexbox;
		display: -webkit-flex;
		display: flex;
		-webkit-box-pack: justify;
		-moz-box-pack: justify;
		-ms-flex-pack: justify;
		-webkit-justify-content: space-between;
		justify-content: space-between;
		-webkit-box-align: center;
		-moz-box-align: center;
		-ms-flex-align: center;
		-webkit-align-items: center;
		align-items: center
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.register-form-area .register-form .register-footer {
			display: block;
			text-align: start
		}
	}

	@media (max-width:575px) {
		.register-form-area .register-form .register-footer {
			display: block;
			text-align: start
		}
	}

	.register-form-area .register-form .register-footer p {
		margin: 0
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.register-form-area .register-form .register-footer p {
			margin-bottom: 28px;
			display: block
		}
	}

	@media (max-width:575px) {
		.register-form-area .register-form .register-footer p {
			margin-bottom: 28px;
			display: block
		}
	}

	.register-form-area .register-form .register-footer p a {
		color: #ff2020
	}

	.submit-btn3 {
		background: #ff2020;
		height: 60px;
		padding: 10px 43px;
		border: 0;
		color: #fff;
		text-transform: capitalize;
		cursor: pointer;
		font-size: 16px;
		border-radius: 0
	}

	.home-blog {
		background: #f6f6f6;
		padding-top: 80px;
		padding-bottom: 29px
	}

	@media only screen and (min-width:768px) and (max-width:991px) {
		.home-blog {
			padding-top: 80px;
			padding-bottom: 29px
		}
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.home-blog {
			padding-top: 80px;
			padding-bottom: 29px
		}
	}

	@media (max-width:575px) {
		.home-blog {
			padding-top: 80px;
			padding-bottom: 29px
		}
	}

	.home-blog .single-blogs .blog-img {
		margin-bottom: 25px;
		width: 100%
	}

	.home-blog .single-blogs .blog-img img {
		display: inherit;
		-webkit-transition: all .4s ease-out 0s;
		-moz-transition: all .4s ease-out 0s;
		-ms-transition: all .4s ease-out 0s;
		-o-transition: all .4s ease-out 0s;
		transition: all .4s ease-out 0s;
		width: 100%
	}

	.home-blog .single-blogs .blogs-cap span {
		color: #74706b;
		margin-bottom: 11px;
		display: block
	}

	.home-blog .single-blogs .blogs-cap h5 a {
		font-size: 22px;
		line-height: 1.4;
		margin-bottom: 12px;
		font-weight: 500;
		display: block;
		color: #292621
	}

	@media only screen and (min-width:576px) and (max-width:767px) {
		.home-blog .single-blogs .blogs-cap h5 a {
			font-size: 20px
		}
	}

	.home-blog .single-blogs .blogs-cap h5 a:hover {
		color: #ff2020
	}

	.home-blog .single-blogs .blogs-cap p {
		color: #74706b;
		margin-bottom: 24px
	}

	.home-blog .single-blogs .blogs-cap a.red-btn {
		color: #292621;
		text-decoration: underline;
		font-weight: 600
	}

	.home-blog .single-blogs .blogs-cap a.red-btn:hover {
		letter-spacing: .5px
	}

	.home-blog .single-blogs:hover .blogs-cap h5 a {
		color: #ff2020
	}

	.blog_area a {
		color: "Jost", sans-serif!important;
		text-decoration: none;
		transition: .4s
	}

	.blog_area a:hover,
	.blog_area a :hover {
		background: -webkit-linear-gradient(131deg, #ff2020 0%, #ff2020 99%);
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
		text-decoration: none;
		transition: .4s
	}

	.blog_area {
		padding: 50px 0 50px
	}

	@media (max-width:991px) {
		.blog_area {
			padding: 50px 0 40px
		}
	}

	@media only screen and (min-width:992px) and (max-width:1200px) {
		.blog_area {
			padding: 50px 0 50px
		}
	}

	.blog_item {
		margin-bottom: 50px
	}

	.blog_details {
		padding: 30px 0 20px 10px;
		box-shadow: 0 10px 20px 0 rgba(221, 221, 221, .3)
	}

	@media (min-width:768px) {
		.blog_details {
			padding: 60px 30px 35px 35px
		}
	}

	.blog_details p {
		margin-bottom: 30px
	}

	.blog_details a {
		color: #ff8b23
	}

	.blog_details a:hover {
		color: #ff2020
	}

	.blog_details h2 {
		font-size: 18px;
		font-weight: 600;
		margin-bottom: 8px
	}

	@media (min-width:768px) {
		.blog_details h2 {
			font-size: 24px;
			margin-bottom: 15px
		}
	}

	.blog-info-link li {
		float: left;
		font-size: 14px
	}

	.blog-info-link li a {
		color: #999
	}

	.blog-info-link li i,
	.blog-info-link li span {
		font-size: 13px;
		margin-right: 5px
	}

	.blog-info-link li::after {
		content: "|";
		padding-left: 10px;
		padding-right: 10px
	}

	.blog-info-link li:last-child::after {
		display: none
	}

	.blog-info-link::after {
		content: "";
		display: block;
		clear: both;
		display: table
	}

	.blog_item_img {
		position: relative
	}

	.blog_item_img .blog_item_date {
		position: absolute;
		bottom: -10px;
		left: 10px;
		display: block;
		color: #fff;
		background-color: #ff2020;
		padding: 8px 15px;
		border-radius: 5px
	}

	@media (min-width:768px) {
		.blog_item_img .blog_item_date {
			bottom: -20px;
			left: 40px;
			padding: 13px 30px
		}
	}

	.blog_item_img .blog_item_date h3 {
		font-size: 22px;
		font-weight: 600;
		color: #fff;
		margin-bottom: 0;
		line-height: 1.2
	}

	@media (min-width:768px) {
		.blog_item_img .blog_item_date h3 {
			font-size: 30px
		}
	}

	.blog_item_img .blog_item_date p {
		font-size: 18px;
		margin-bottom: 0;
		color: #fff
	}

	@media (min-width:768px) {
		.blog_item_img .blog_item_date p {
			font-size: 18px
		}
	}

	.blog_right_sidebar .widget_title {
		font-size: 20px;
		margin-bottom: 40px
	}

	.blog_right_sidebar .widget_title::after {
		content: "";
		display: block;
		padding-top: 15px;
		border-bottom: 1px solid #f0e9ff
	}

	.blog_right_sidebar .single_sidebar_widget {
		background: #fbf9ff;
		padding: 30px;
		margin-bottom: 30px
	}

	.blog_right_sidebar .single_sidebar_widget .btn_1 {
		margin-top: 0
	}

	.blog_right_sidebar .search_widget .form-control {
		height: 50px;
		border-color: #f0e9ff;
		font-size: 13px;
		color: #999;
		padding-left: 20px;
		border-radius: 0;
		border-right: 0
	}

	.blog_right_sidebar .search_widget .form-control::placeholder {
		color: #999
	}

	.blog_right_sidebar .search_widget .form-control:focus {
		border-color: #f0e9ff;
		outline: 0;
		box-shadow: none
	}

	.blog_right_sidebar .search_widget .input-group button {
		background: #ff2020;
		border-left: 0;
		border: 1px solid #f0e9ff;
		padding: 12px 15px;
		border-left: 0;
		cursor: pointer
	}

	.blog_right_sidebar .search_widget .input-group button i {
		color: #fff
	}

	.blog_right_sidebar .search_widget .input-group button span {
		font-size: 14px;
		color: #999
	}

	.blog_right_sidebar .newsletter_widget .form-control {
		height: 50px;
		border-color: #f0e9ff;
		font-size: 13px;
		color: #999;
		padding-left: 20px;
		border-radius: 0
	}

	.blog_right_sidebar .newsletter_widget .form-control::placeholder {
		color: #999
	}

	.blog_right_sidebar .newsletter_widget .form-control:focus {
		border-color: #f0e9ff;
		outline: 0;
		box-shadow: none
	}

	.blog_right_sidebar .newsletter_widget .input-group button {
		background: #fff;
		border-left: 0;
		border: 1px solid #f0e9ff;
		padding: 4px 15px;
		border-left: 0
	}

	.blog_right_sidebar .newsletter_widget .input-group button i,
	.blog_right_sidebar .newsletter_widget .input-group button span {
		font-size: 14px;
		color: #fff
	}

	.blog_right_sidebar .post_category_widget .cat-list li {
		border-bottom: 1px solid #f0e9ff;
		transition: all .3s ease 0s;
		padding-bottom: 12px
	}

	.blog_right_sidebar .post_category_widget .cat-list li:last-child {
		border-bottom: 0
	}

	.blog_right_sidebar .post_category_widget .cat-list li a {
		font-size: 14px;
		line-height: 20px;
		color: #888
	}

	.blog_right_sidebar .post_category_widget .cat-list li a p {
		margin-bottom: 0
	}

	.blog_right_sidebar .post_category_widget .cat-list li+li {
		padding-top: 15px
	}

	.blog_right_sidebar .popular_post_widget .post_item .media-body {
		justify-content: center;
		align-self: center;
		padding-left: 20px
	}

	.blog_right_sidebar .popular_post_widget .post_item .media-body h3 {
		font-size: 16px;
		line-height: 20px;
		margin-bottom: 6px;
		transition: all .3s linear
	}

	.blog_right_sidebar .popular_post_widget .post_item .media-body a:hover {
		color: #fff
	}

	.blog_right_sidebar .popular_post_widget .post_item .media-body p {
		font-size: 14px;
		line-height: 21px;
		margin-bottom: 0
	}

	.blog_right_sidebar .popular_post_widget .post_item+.post_item {
		margin-top: 20px
	}

	.blog_right_sidebar .tag_cloud_widget ul li {
		display: inline-block
	}

	.blog_right_sidebar .tag_cloud_widget ul li a {
		display: inline-block;
		border: 1px solid #eee;
		background: #fff;
		padding: 4px 20px;
		margin-bottom: 8px;
		margin-right: 3px;
		transition: all .3s ease 0s;
		color: #888;
		font-size: 13px
	}

	.blog_right_sidebar .tag_cloud_widget ul li a:hover {
		background: #ff2020;
		color: #fff!important;
		-webkit-text-fill-color: #fff;
		text-decoration: none;
		-webkit-transition: .5s;
		transition: .5s
	}

	.blog_right_sidebar .instagram_feeds .instagram_row {
		display: -webkit-box;
		display: -moz-box;
		display: -ms-flexbox;
		display: -webkit-flex;
		display: flex;
		margin-right: -6px;
		margin-left: -6px
	}

	.blog_right_sidebar .instagram_feeds .instagram_row li {
		width: 33.33%;
		float: left;
		padding-right: 6px;
		padding-left: 6px;
		margin-bottom: 15px
	}

	.blog_right_sidebar .br {
		width: 100%;
		height: 1px;
		background: #eee;
		margin: 30px 0
	}

	.blog-pagination {
		margin-top: 80px
	}

	.blog-pagination .page-link {
		font-size: 14px;
		position: relative;
		display: block;
		padding: 0;
		text-align: center;
		margin-left: -1px;
		line-height: 45px;
		width: 45px;
		height: 45px;
		border-radius: 0!important;
		color: #8a8a8a;
		border: 1px solid #f0e9ff;
		margin-right: 10px
	}

	.blog-pagination .page-link i,
	.blog-pagination .page-link span {
		font-size: 13px
	}

	.blog-pagination .page-item.active .page-link {
		background-color: #fbf9ff;
		border-color: #f0e9ff;
		color: #888
	}

	.blog-pagination .page-item:last-child .page-link {
		margin-right: 0
	}

	.single-post-area .blog_details {
		box-shadow: none;
		padding: 0
	}

	.single-post-area .blog_details {
		padding-top: 26px
	}

	.single-post-area .blog_details p {
		margin-bottom: 20px;
		font-size: 15px
	}

	.single-post-area .quote-wrapper {
		background: rgba(130, 139, 178, .1);
		padding: 15px;
		line-height: 1.733;
		color: #888;
		font-style: italic;
		margin-top: 25px;
		margin-bottom: 25px
	}

	@media (min-width:768px) {
		.single-post-area .quote-wrapper {
			padding: 30px
		}
	}

	.single-post-area .quotes {
		background: #fff;
		padding: 15px 15px 15px 20px;
		border-left: 2px solid
	}

	@media (min-width:768px) {
		.single-post-area .quotes {
			padding: 25px 25px 25px 30px
		}
	}

	.single-post-area .arrow {
		position: absolute
	}

	.single-post-area .arrow .lnr {
		font-size: 20px;
		font-weight: 600
	}

	.single-post-area .navigation-top {
		padding-top: 15px;
		border-top: 1px solid #f0e9ff
	}

	.single-post-area .navigation-top p {
		margin-bottom: 0
	}

	.single-post-area .navigation-top .like-info {
		font-size: 14px
	}

	.single-post-area .navigation-top .like-info i,
	.single-post-area .navigation-top .like-info span {
		font-size: 16px;
		margin-right: 5px
	}

	.single-post-area .navigation-top .social-icons li {
		display: inline-block;
		margin-right: 15px
	}

	.single-post-area .navigation-top .social-icons li:last-child {
		margin: 0
	}

	.single-post-area .navigation-top .social-icons li i,
	.single-post-area .navigation-top .social-icons li span {
		font-size: 14px;
		color: #999
	}

	.single-post-area .blog-author {
		padding: 40px 30px;
		background: #fbf9ff;
		margin-top: 50px
	}

	@media (max-width:600px) {
		.single-post-area .blog-author {
			padding: 20px 8px
		}
	}

	.single-post-area .blog-author img {
		width: 90px;
		height: 90px;
		border-radius: 50%;
		margin-right: 30px
	}

	@media (max-width:600px) {
		.single-post-area .blog-author img {
			margin-right: 15px;
			width: 45px;
			height: 45px
		}
	}

	.single-post-area .blog-author a {
		display: inline-block
	}

	.single-post-area .blog-author a:hover {
		color: #ff2020
	}

	.single-post-area .blog-author p {
		margin-bottom: 0;
		font-size: 15px
	}

	.single-post-area .blog-author h4 {
		font-size: 16px
	}

	.single-post-area .navigation-area {
		border-bottom: 1px solid #eee;
		padding-bottom: 30px;
		margin-top: 55px
	}

	.single-post-area .navigation-area p {
		margin-bottom: 0
	}

	.single-post-area .navigation-area h4 {
		font-size: 18px;
		line-height: 25px
	}

	.single-post-area .navigation-area .nav-left {
		text-align: left
	}

	.single-post-area .navigation-area .nav-left .thumb {
		margin-right: 20px;
		background: #000
	}

	.single-post-area .navigation-area .nav-left .thumb img {
		-webkit-transition: all .3s ease-out 0s;
		-moz-transition: all .3s ease-out 0s;
		-ms-transition: all .3s ease-out 0s;
		-o-transition: all .3s ease-out 0s;
		transition: all .3s ease-out 0s
	}

	.single-post-area .navigation-area .nav-left .lnr {
		margin-left: 20px;
		opacity: 0;
		-webkit-transition: all .3s ease-out 0s;
		-moz-transition: all .3s ease-out 0s;
		-ms-transition: all .3s ease-out 0s;
		-o-transition: all .3s ease-out 0s;
		transition: all .3s ease-out 0s
	}

	.single-post-area .navigation-area .nav-left:hover .lnr {
		opacity: 1
	}

	.single-post-area .navigation-area .nav-left:hover .thumb img {
		opacity: .5
	}

	@media (max-width:767px) {
		.single-post-area .navigation-area .nav-left {
			margin-bottom: 30px
		}
	}

	.single-post-area .navigation-area .nav-right {
		text-align: right
	}

	.single-post-area .navigation-area .nav-right .thumb {
		margin-left: 20px;
		background: #000
	}

	.single-post-area .navigation-area .nav-right .thumb img {
		-webkit-transition: all .3s ease-out 0s;
		-moz-transition: all .3s ease-out 0s;
		-ms-transition: all .3s ease-out 0s;
		-o-transition: all .3s ease-out 0s;
		transition: all .3s ease-out 0s
	}

	.single-post-area .navigation-area .nav-right .lnr {
		margin-right: 20px;
		opacity: 0;
		-webkit-transition: all .3s ease-out 0s;
		-moz-transition: all .3s ease-out 0s;
		-ms-transition: all .3s ease-out 0s;
		-o-transition: all .3s ease-out 0s;
		transition: all .3s ease-out 0s
	}

	.single-post-area .navigation-area .nav-right:hover .lnr {
		opacity: 1
	}

	.single-post-area .navigation-area .nav-right:hover .thumb img {
		opacity: .5
	}

	.comments-area {
		background: transparent;
		border-top: 1px solid #eee;
		padding: 45px 0;
		margin-top: 50px
	}

	@media (max-width:414px) {
		.comments-area {
			padding: 50px 8px
		}
	}

	.comments-area h4 {
		margin-bottom: 35px;
		font-size: 18px
	}

	.comments-area h5 {
		font-size: 16px;
		margin-bottom: 0
	}

	.comments-area .comment-list {
		padding-bottom: 48px
	}

	.comments-area .comment-list:last-child {
		padding-bottom: 0
	}

	@media (max-width:413px) {
		.comments-area .comment-list .single-comment h5 {
			font-size: 12px
		}
		.comments-area .comment-list .single-comment .date {
			font-size: 11px
		}
		.comments-area .comment-list .single-comment .comment {
			font-size: 10px
		}
	}

	.comments-area .thumb {
		margin-right: 20px
	}

	.comments-area .thumb img {
		width: 70px;
		border-radius: 50%
	}

	.comments-area .date {
		font-size: 14px;
		color: #999;
		margin-bottom: 0;
		margin-left: 20px
	}

	.comments-area .comment {
		margin-bottom: 10px;
		color: #777;
		font-size: 15px
	}

	.comments-area .btn-reply {
		background-color: transparent;
		color: #888;
		padding: 5px 18px;
		font-size: 14px;
		display: block;
		font-weight: 400
	}

	.comment-form {
		border-top: 1px solid #eee;
		padding-top: 45px;
		margin-top: 50px;
		margin-bottom: 20px
	}

	.comment-form .form-group {
		margin-bottom: 30px
	}

	.comment-form h4 {
		margin-bottom: 40px;
		font-size: 18px;
		line-height: 22px
	}

	.comment-form .name {
		padding-left: 0
	}

	@media (max-width:767px) {
		.comment-form .name {
			padding-right: 0;
			margin-bottom: 1rem
		}
	}

	.comment-form .email {
		padding-right: 0
	}

	@media (max-width:991px) {
		.comment-form .email {
			padding-left: 0
		}
	}

	.comment-form .form-control {
		border: 1px solid #f0e9ff;
		border-radius: 5px;
		height: 48px;
		padding-left: 18px;
		font-size: 13px;
		background: transparent
	}

	.comment-form .form-control:focus {
		outline: 0;
		box-shadow: none
	}

	.comment-form .form-control::placeholder {
		font-weight: 300;
		color: #999
	}

	.comment-form .form-control::placeholder {
		color: #777
	}

	.comment-form textarea {
		padding-top: 18px;
		border-radius: 12px;
		height: 100%!important
	}

	.comment-form ::-webkit-input-placeholder {
		font-size: 13px;
		color: #777
	}

	.comment-form ::-moz-placeholder {
		font-size: 13px;
		color: #777
	}

	.comment-form :-ms-input-placeholder {
		font-size: 13px;
		color: #777
	}

	.comment-form :-moz-placeholder {
		font-size: 13px;
		color: #777
	}

	.media {
		display: -webkit-box;
		display: -moz-box;
		display: -ms-flexbox;
		display: -webkit-flex;
		display: flex
	}

	.img-fluid {
		width: 100%
	}

	.form-group {
		margin-bottom: 1rem
	}

	.dropdown .dropdown-menu {
		-webkit-transition: all .3s;
		-moz-transition: all .3s;
		-ms-transition: all .3s;
		-o-transition: all .3s;
		transition: all .3s
	}

	.contact-info {
		margin-bottom: 25px
	}

	.contact-info__icon {
		margin-right: 20px
	}

	.contact-info__icon i,
	.contact-info__icon span {
		color: #8f9195;
		font-size: 27px
	}

	.contact-info .media-body h3 {
		font-size: 16px;
		margin-bottom: 0;
		font-size: 16px;
		color: #2a2a2a
	}

	.contact-info .media-body h3 a:hover {
		color: #1f2b7b
	}

	.contact-info .media-body p {
		color: #8a8a8a
	}

	.contact-title {
		font-size: 27px;
		font-weight: 600;
		margin-bottom: 20px
	}

	.form-contact label {
		font-size: 14px
	}

	.form-contact .form-group {
		margin-bottom: 30px
	}

	.form-contact .form-control {
		border: 1px solid #e5e6e9;
		border-radius: 0;
		height: 48px;
		padding-left: 18px;
		font-size: 13px;
		background: transparent
	}

	.form-contact .form-control:focus {
		outline: 0;
		box-shadow: none
	}

	.form-contact .form-control::placeholder {
		font-weight: 300;
		color: #999
	}

	.form-contact textarea {
		border-radius: 0;
		height: 100%!important
	}

	.contact-section {
		padding: 50px 0 50px
	}

	@media (max-width:991px) {
		.contact-section {
			padding: 50px 0 40px
		}
	}

	@media only screen and (min-width:992px) and (max-width:1200px) {
		.contact-section {
			padding: 50px 0 50px
		}
	}

	.mfp-bg {
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		z-index: 1042;
		overflow: hidden;
		position: fixed;
		background: #4a3600;
		opacity: .6
	}

	.items-product1 .single-items .items-img::before {
		background: -moz-linear-gradient(top, rgba(41, 38, 33, 0) 0%, #292621 100%);
		background: -webkit-linear-gradient(top, rgba(41, 38, 33, 0) 0%, #292621 100%);
		background: linear-gradient(to bottom, rgba(41, 38, 33, 0) 0%, #292621 100%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00292621', endColorstr='#292621', GradientType=0)
	}

	.sample-text-area {
		background: #fff;
		padding: 100px 0 70px 0
	}

	.text-heading {
		margin-bottom: 30px;
		font-size: 24px
	}

	b,
	sup,
	sub,
	u,
	del {
		color: #1f2b7b
	}

	.typography h1,
	.typography h2,
	.typography h3,
	.typography h4,
	.typography h5,
	.typography h6 {
		color: #828bb2
	}

	.button-area {
		background: #fff
	}

	.button-area .border-top-generic {
		padding: 70px 15px;
		border-top: 1px dotted #eee
	}

	.button-group-area .genric-btn {
		margin-right: 10px;
		margin-top: 10px
	}

	.button-group-area .genric-btn:last-child {
		margin-right: 0
	}

	.genric-btn {
		display: inline-block;
		outline: none;
		line-height: 40px;
		padding: 0 30px;
		font-size: .8em;
		text-align: center;
		text-decoration: none;
		font-weight: 500;
		cursor: pointer;
		-webkit-transition: all .3s ease 0s;
		-moz-transition: all .3s ease 0s;
		-o-transition: all .3s ease 0s;
		transition: all .3s ease 0s
	}

	.genric-btn:focus {
		outline: none
	}

	.genric-btn.e-large {
		padding: 0 40px;
		line-height: 50px
	}

	.genric-btn.large {
		line-height: 45px
	}

	.genric-btn.medium {
		line-height: 30px
	}

	.genric-btn.small {
		line-height: 25px
	}

	.genric-btn.radius {
		border-radius: 3px
	}

	.genric-btn.circle {
		border-radius: 20px
	}

	.genric-btn.arrow {
		display: -webkit-inline-box;
		display: -ms-inline-flexbox;
		display: inline-flex;
		-webkit-box-align: center;
		-ms-flex-align: center;
		-webkit-box-align: center;
		-moz-box-align: center;
		-ms-flex-align: center;
		-webkit-align-items: center;
		align-items: center
	}

	.genric-btn.arrow span {
		margin-left: 10px
	}

	.genric-btn.default {
		color: #415094;
		background: #f9f9ff;
		border: 1px solid transparent
	}

	.genric-btn.default:hover {
		border: 1px solid #f9f9ff;
		background: #fff
	}

	.genric-btn.default-border {
		border: 1px solid #f9f9ff;
		background: #fff
	}

	.genric-btn.default-border:hover {
		color: #415094;
		background: #f9f9ff;
		border: 1px solid transparent
	}

	.genric-btn.primary {
		color: #fff;
		background: #1f2b7b;
		border: 1px solid transparent
	}

	.genric-btn.primary:hover {
		color: #1f2b7b;
		border: 1px solid #1f2b7b;
		background: #fff
	}

	.genric-btn.primary-border {
		color: #1f2b7b;
		border: 1px solid #1f2b7b;
		background: #fff
	}

	.genric-btn.primary-border:hover {
		color: #fff;
		background: #1f2b7b;
		border: 1px solid transparent
	}

	.genric-btn.success {
		color: #fff;
		background: #4cd3e3;
		border: 1px solid transparent
	}

	.genric-btn.success:hover {
		color: #4cd3e3;
		border: 1px solid #4cd3e3;
		background: #fff
	}

	.genric-btn.success-border {
		color: #4cd3e3;
		border: 1px solid #4cd3e3;
		background: #fff
	}

	.genric-btn.success-border:hover {
		color: #fff;
		background: #4cd3e3;
		border: 1px solid transparent
	}

	.genric-btn.info {
		color: #fff;
		background: #38a4ff;
		border: 1px solid transparent
	}

	.genric-btn.info:hover {
		color: #38a4ff;
		border: 1px solid #38a4ff;
		background: #fff
	}

	.genric-btn.info-border {
		color: #38a4ff;
		border: 1px solid #38a4ff;
		background: #fff
	}

	.genric-btn.info-border:hover {
		color: #fff;
		background: #38a4ff;
		border: 1px solid transparent
	}

	.genric-btn.warning {
		color: #fff;
		background: #f4e700;
		border: 1px solid transparent
	}

	.genric-btn.warning:hover {
		color: #f4e700;
		border: 1px solid #f4e700;
		background: #fff
	}

	.genric-btn.warning-border {
		color: #f4e700;
		border: 1px solid #f4e700;
		background: #fff
	}

	.genric-btn.warning-border:hover {
		color: #fff;
		background: #f4e700;
		border: 1px solid transparent
	}

	.genric-btn.danger {
		color: #fff;
		background: #f44a40;
		border: 1px solid transparent
	}

	.genric-btn.danger:hover {
		color: #f44a40;
		border: 1px solid #f44a40;
		background: #fff
	}

	.genric-btn.danger-border {
		color: #f44a40;
		border: 1px solid #f44a40;
		background: #fff
	}

	.genric-btn.danger-border:hover {
		color: #fff;
		background: #f44a40;
		border: 1px solid transparent
	}

	.genric-btn.link {
		color: #415094;
		background: #f9f9ff;
		text-decoration: underline;
		border: 1px solid transparent
	}

	.genric-btn.link:hover {
		color: #415094;
		border: 1px solid #f9f9ff;
		background: #fff
	}

	.genric-btn.link-border {
		color: #415094;
		border: 1px solid #f9f9ff;
		background: #fff;
		text-decoration: underline
	}

	.genric-btn.link-border:hover {
		color: #415094;
		background: #f9f9ff;
		border: 1px solid transparent
	}

	.genric-btn.disable {
		color: #222, .3;
		background: #f9f9ff;
		border: 1px solid transparent;
		cursor: not-allowed
	}

	.generic-blockquote {
		padding: 30px 50px 30px 30px;
		background: #f9f9ff;
		border-left: 2px solid #1f2b7b
	}

	.progress-table-wrap {
		overflow-x: scroll
	}

	.progress-table {
		background: #f9f9ff;
		padding: 15px 0 30px 0;
		min-width: 800px
	}

	.progress-table .serial {
		width: 11.83%;
		padding-left: 30px
	}

	.progress-table .country {
		width: 28.07%
	}

	.progress-table .visit {
		width: 19.74%
	}

	.progress-table .percentage {
		width: 40.36%;
		padding-right: 50px
	}

	.progress-table .table-head {
		display: -webkit-box;
		display: -moz-box;
		display: -ms-flexbox;
		display: -webkit-flex;
		display: flex
	}

	.progress-table .table-head .serial,
	.progress-table .table-head .country,
	.progress-table .table-head .visit,
	.progress-table .table-head .percentage {
		color: #415094;
		line-height: 40px;
		text-transform: uppercase;
		font-weight: 500
	}

	.progress-table .table-row {
		padding: 15px 0;
		border-top: 1px solid #edf3fd;
		display: -webkit-box;
		display: -moz-box;
		display: -ms-flexbox;
		display: -webkit-flex;
		display: flex
	}

	.progress-table .table-row .serial,
	.progress-table .table-row .country,
	.progress-table .table-row .visit,
	.progress-table .table-row .percentage {
		display: -webkit-box;
		display: -moz-box;
		display: -ms-flexbox;
		display: -webkit-flex;
		display: flex;
		align-items: center
	}

	.progress-table .table-row .country img {
		margin-right: 15px
	}

	.progress-table .table-row .percentage .progress {
		width: 80%;
		border-radius: 0;
		background: transparent
	}

	.progress-table .table-row .percentage .progress .progress-bar {
		height: 5px;
		line-height: 5px
	}

	.progress-table .table-row .percentage .progress .progress-bar.color-1 {
		background-color: #6382e6
	}

	.progress-table .table-row .percentage .progress .progress-bar.color-2 {
		background-color: #e66686
	}

	.progress-table .table-row .percentage .progress .progress-bar.color-3 {
		background-color: #f09359
	}

	.progress-table .table-row .percentage .progress .progress-bar.color-4 {
		background-color: #73fbaf
	}

	.progress-table .table-row .percentage .progress .progress-bar.color-5 {
		background-color: #73fbaf
	}

	.progress-table .table-row .percentage .progress .progress-bar.color-6 {
		background-color: #6382e6
	}

	.progress-table .table-row .percentage .progress .progress-bar.color-7 {
		background-color: #a367e7
	}

	.progress-table .table-row .percentage .progress .progress-bar.color-8 {
		background-color: #e66686
	}

	.single-gallery-image {
		margin-top: 30px;
		background-repeat: no-repeat!important;
		background-position: center center!important;
		background-size: cover!important;
		height: 200px
	}

	.unordered-list li {
		position: relative;
		padding-left: 30px;
		line-height: 1.82em!important
	}

	.unordered-list li:before {
		content: "";
		position: absolute;
		width: 14px;
		height: 14px;
		border: 3px solid #1f2b7b;
		background: #fff;
		top: 4px;
		left: 0;
		border-radius: 50%
	}

	.ordered-list {
		margin-left: 30px
	}

	.ordered-list li {
		list-style-type: decimal-leading-zero;
		color: #1f2b7b;
		font-weight: 500;
		line-height: 1.82em!important
	}

	.ordered-list li span {
		font-weight: 300;
		color: #828bb2
	}

	.ordered-list-alpha li {
		margin-left: 30px;
		list-style-type: lower-alpha;
		color: #1f2b7b;
		font-weight: 500;
		line-height: 1.82em!important
	}

	.ordered-list-alpha li span {
		font-weight: 300;
		color: #828bb2
	}

	.ordered-list-roman li {
		margin-left: 30px;
		list-style-type: lower-roman;
		color: #1f2b7b;
		font-weight: 500;
		line-height: 1.82em!important
	}

	.ordered-list-roman li span {
		font-weight: 300;
		color: #828bb2
	}

	.single-input {
		display: block;
		width: 100%;
		line-height: 40px;
		border: none;
		outline: none;
		background: #f9f9ff;
		padding: 0 20px
	}

	.single-input:focus {
		outline: none
	}

	.input-group-icon {
		position: relative
	}

	.input-group-icon .icon {
		position: absolute;
		left: 20px;
		top: 0;
		line-height: 40px;
		z-index: 3
	}

	.input-group-icon .icon i {
		color: #797979
	}

	.input-group-icon .single-input {
		padding-left: 45px
	}

	.single-textarea {
		display: block;
		width: 100%;
		line-height: 40px;
		border: none;
		outline: none;
		background: #f9f9ff;
		padding: 0 20px;
		height: 100px;
		resize: none
	}

	.single-textarea:focus {
		outline: none
	}

	.single-input-primary {
		display: block;
		width: 100%;
		line-height: 40px;
		border: 1px solid transparent;
		outline: none;
		background: #f9f9ff;
		padding: 0 20px
	}

	.single-input-primary:focus {
		outline: none;
		border: 1px solid #1f2b7b
	}

	.single-input-accent {
		display: block;
		width: 100%;
		line-height: 40px;
		border: 1px solid transparent;
		outline: none;
		background: #f9f9ff;
		padding: 0 20px
	}

	.single-input-accent:focus {
		outline: none;
		border: 1px solid #eb6b55
	}

	.single-input-secondary {
		display: block;
		width: 100%;
		line-height: 40px;
		border: 1px solid transparent;
		outline: none;
		background: #f9f9ff;
		padding: 0 20px
	}

	.single-input-secondary:focus {
		outline: none;
		border: 1px solid #f09359
	}

	.default-switch {
		width: 35px;
		height: 17px;
		border-radius: 8.5px;
		background: #f9f9ff;
		position: relative;
		cursor: pointer
	}

	.default-switch input {
		position: absolute;
		left: 0;
		top: 0;
		right: 0;
		bottom: 0;
		width: 100%;
		height: 100%;
		opacity: 0;
		cursor: pointer
	}

	.default-switch input+label {
		position: absolute;
		top: 1px;
		left: 1px;
		width: 15px;
		height: 15px;
		border-radius: 50%;
		background: #1f2b7b;
		-webkit-transition: all .2s;
		-moz-transition: all .2s;
		-o-transition: all .2s;
		transition: all .2s;
		box-shadow: 0 4px 5px 0 rgba(0, 0, 0, .2);
		cursor: pointer
	}

	.default-switch input:checked+label {
		left: 19px
	}

	.primary-switch {
		width: 35px;
		height: 17px;
		border-radius: 8.5px;
		background: #f9f9ff;
		position: relative;
		cursor: pointer
	}

	.primary-switch input {
		position: absolute;
		left: 0;
		top: 0;
		right: 0;
		bottom: 0;
		width: 100%;
		height: 100%;
		opacity: 0
	}

	.primary-switch input+label {
		position: absolute;
		left: 0;
		top: 0;
		right: 0;
		bottom: 0;
		width: 100%;
		height: 100%
	}

	.primary-switch input+label:before {
		content: "";
		position: absolute;
		left: 0;
		top: 0;
		right: 0;
		bottom: 0;
		width: 100%;
		height: 100%;
		background: transparent;
		border-radius: 8.5px;
		cursor: pointer;
		-webkit-transition: all .2s;
		-moz-transition: all .2s;
		-o-transition: all .2s;
		transition: all .2s
	}

	.primary-switch input+label:after {
		content: "";
		position: absolute;
		top: 1px;
		left: 1px;
		width: 15px;
		height: 15px;
		border-radius: 50%;
		background: #fff;
		-webkit-transition: all .2s;
		-moz-transition: all .2s;
		-o-transition: all .2s;
		transition: all .2s;
		box-shadow: 0 4px 5px 0 rgba(0, 0, 0, .2);
		cursor: pointer
	}

	.primary-switch input:checked+label:after {
		left: 19px
	}

	.primary-switch input:checked+label:before {
		background: #1f2b7b
	}

	.confirm-switch {
		width: 35px;
		height: 17px;
		border-radius: 8.5px;
		background: #f9f9ff;
		position: relative;
		cursor: pointer
	}

	.confirm-switch input {
		position: absolute;
		left: 0;
		top: 0;
		right: 0;
		bottom: 0;
		width: 100%;
		height: 100%;
		opacity: 0
	}

	.confirm-switch input+label {
		position: absolute;
		left: 0;
		top: 0;
		right: 0;
		bottom: 0;
		width: 100%;
		height: 100%
	}

	.confirm-switch input+label:before {
		content: "";
		position: absolute;
		left: 0;
		top: 0;
		right: 0;
		bottom: 0;
		width: 100%;
		height: 100%;
		background: transparent;
		border-radius: 8.5px;
		-webkit-transition: all .2s;
		-moz-transition: all .2s;
		-o-transition: all .2s;
		transition: all .2s;
		cursor: pointer
	}

	.confirm-switch input+label:after {
		content: "";
		position: absolute;
		top: 1px;
		left: 1px;
		width: 15px;
		height: 15px;
		border-radius: 50%;
		background: #fff;
		-webkit-transition: all .2s;
		-moz-transition: all .2s;
		-o-transition: all .2s;
		transition: all .2s;
		box-shadow: 0 4px 5px 0 rgba(0, 0, 0, .2);
		cursor: pointer
	}

	.confirm-switch input:checked+label:after {
		left: 19px
	}

	.confirm-switch input:checked+label:before {
		background: #4cd3e3
	}

	.primary-checkbox {
		width: 16px;
		height: 16px;
		border-radius: 3px;
		background: #f9f9ff;
		position: relative;
		cursor: pointer
	}

	.primary-checkbox input {
		position: absolute;
		left: 0;
		top: 0;
		right: 0;
		bottom: 0;
		width: 100%;
		height: 100%;
		opacity: 0
	}

	.primary-checkbox input+label {
		position: absolute;
		left: 0;
		top: 0;
		right: 0;
		bottom: 0;
		width: 100%;
		height: 100%;
		border-radius: 3px;
		cursor: pointer;
		border: 1px solid #f1f1f1
	}

	.primary-checkbox input:checked+label {
		background: url(../img/elements/primary-check.png) no-repeat center center/cover;
		border: none
	}

	.confirm-checkbox {
		width: 16px;
		height: 16px;
		border-radius: 3px;
		background: #f9f9ff;
		position: relative;
		cursor: pointer
	}

	.confirm-checkbox input {
		position: absolute;
		left: 0;
		top: 0;
		right: 0;
		bottom: 0;
		width: 100%;
		height: 100%;
		opacity: 0
	}

	.confirm-checkbox input+label {
		position: absolute;
		left: 0;
		top: 0;
		right: 0;
		bottom: 0;
		width: 100%;
		height: 100%;
		border-radius: 3px;
		cursor: pointer;
		border: 1px solid #f1f1f1
	}

	.confirm-checkbox input:checked+label {
		background: url(../img/elements/success-check.png) no-repeat center center/cover;
		border: none
	}

	.disabled-checkbox {
		width: 16px;
		height: 16px;
		border-radius: 3px;
		background: #f9f9ff;
		position: relative;
		cursor: pointer
	}

	.disabled-checkbox input {
		position: absolute;
		left: 0;
		top: 0;
		right: 0;
		bottom: 0;
		width: 100%;
		height: 100%;
		opacity: 0
	}

	.disabled-checkbox input+label {
		position: absolute;
		left: 0;
		top: 0;
		right: 0;
		bottom: 0;
		width: 100%;
		height: 100%;
		border-radius: 3px;
		cursor: pointer;
		border: 1px solid #f1f1f1
	}

	.disabled-checkbox input:disabled {
		cursor: not-allowed;
		z-index: 3
	}

	.disabled-checkbox input:checked+label {
		background: url(../img/elements/disabled-check.png) no-repeat center center/cover;
		border: none
	}

	.primary-radio {
		width: 16px;
		height: 16px;
		border-radius: 8px;
		background: #f9f9ff;
		position: relative;
		cursor: pointer
	}

	.primary-radio input {
		position: absolute;
		left: 0;
		top: 0;
		right: 0;
		bottom: 0;
		width: 100%;
		height: 100%;
		opacity: 0
	}

	.primary-radio input+label {
		position: absolute;
		left: 0;
		top: 0;
		right: 0;
		bottom: 0;
		width: 100%;
		height: 100%;
		border-radius: 8px;
		cursor: pointer;
		border: 1px solid #f1f1f1
	}

	.primary-radio input:checked+label {
		background: url(../img/elements/primary-radio.png) no-repeat center center/cover;
		border: none
	}

	.confirm-radio {
		width: 16px;
		height: 16px;
		border-radius: 8px;
		background: #f9f9ff;
		position: relative;
		cursor: pointer
	}

	.confirm-radio input {
		position: absolute;
		left: 0;
		top: 0;
		right: 0;
		bottom: 0;
		width: 100%;
		height: 100%;
		opacity: 0
	}

	.confirm-radio input+label {
		position: absolute;
		left: 0;
		top: 0;
		right: 0;
		bottom: 0;
		width: 100%;
		height: 100%;
		border-radius: 8px;
		cursor: pointer;
		border: 1px solid #f1f1f1
	}

	.confirm-radio input:checked+label {
		background: url(../img/elements/success-radio.png) no-repeat center center/cover;
		border: none
	}

	.disabled-radio {
		width: 16px;
		height: 16px;
		border-radius: 8px;
		background: #f9f9ff;
		position: relative;
		cursor: pointer
	}

	.disabled-radio input {
		position: absolute;
		left: 0;
		top: 0;
		right: 0;
		bottom: 0;
		width: 100%;
		height: 100%;
		opacity: 0
	}

	.disabled-radio input+label {
		position: absolute;
		left: 0;
		top: 0;
		right: 0;
		bottom: 0;
		width: 100%;
		height: 100%;
		border-radius: 8px;
		cursor: pointer;
		border: 1px solid #f1f1f1
	}

	.disabled-radio input:disabled {
		cursor: not-allowed;
		z-index: 3
	}

	.disabled-radio input:checked+label {
		background: url(../img/elements/disabled-radio.png) no-repeat center center/cover;
		border: none
	}

	.default-select {
		height: 40px
	}

	.default-select .nice-select {
		border: none;
		border-radius: 0;
		height: 40px;
		background: #f9f9ff;
		padding-left: 20px;
		padding-right: 40px
	}

	.default-select .nice-select .list {
		margin-top: 0;
		border: none;
		border-radius: 0;
		box-shadow: none;
		width: 100%;
		padding: 10px 0 10px 0
	}

	.default-select .nice-select .list .option {
		font-weight: 300;
		-webkit-transition: all .3s ease 0s;
		-moz-transition: all .3s ease 0s;
		-o-transition: all .3s ease 0s;
		transition: all .3s ease 0s;
		line-height: 28px;
		min-height: 28px;
		font-size: 12px;
		padding-left: 20px
	}

	.default-select .nice-select .list .option.selected {
		color: #1f2b7b;
		background: transparent
	}

	.default-select .nice-select .list .option:hover {
		color: #1f2b7b;
		background: transparent
	}

	.default-select .current {
		margin-right: 50px;
		font-weight: 300
	}

	.default-select .nice-select::after {
		right: 20px
	}

	.form-select {
		height: 40px;
		width: 100%
	}

	.form-select .nice-select {
		border: none;
		border-radius: 0;
		height: 40px;
		background: #f9f9ff;
		padding-left: 45px;
		padding-right: 40px;
		width: 100%
	}

	.form-select .nice-select .list {
		margin-top: 0;
		border: none;
		border-radius: 0;
		box-shadow: none;
		width: 100%;
		padding: 10px 0 10px 0
	}

	.form-select .nice-select .list .option {
		font-weight: 300;
		-webkit-transition: all .3s ease 0s;
		-moz-transition: all .3s ease 0s;
		-o-transition: all .3s ease 0s;
		transition: all .3s ease 0s;
		line-height: 28px;
		min-height: 28px;
		font-size: 12px;
		padding-left: 45px
	}

	.form-select .nice-select .list .option.selected {
		color: #1f2b7b;
		background: transparent
	}

	.form-select .nice-select .list .option:hover {
		color: #1f2b7b;
		background: transparent
	}

	.form-select .current {
		margin-right: 50px;
		font-weight: 300
	}

	.form-select .nice-select::after {
		right: 20px
	}

	.mt-10 {
		margin-top: 10px
	}

	.section-top-border {
		padding: 50px 0;
		border-top: 1px dotted #eee
	}

	.mb-30 {
		margin-bottom: 30px
	}

	.mt-30 {
		margin-top: 30px
	}

	.switch-wrap {
		margin-bottom: 10px
	}
</style>