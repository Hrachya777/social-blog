<!DOCTYPE html>
<html lang="en" ng-app='ddayApp' ng-controller="MainController">
	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="/bower_components/ngprogress/ngProgress.css">
		<link rel="stylesheet" type="text/css" href="/assets/user/css/main.css">

	</head>
	<body>


		<header>
			<ul>
				<li>
					<a ui-sref="news">News</a>
				</li>
				<li>
					<a ui-sref="video">Video</a>
				</li>
				<li>
					<a ui-sref="fotoalboms">Foto alboms</a>
				</li>
				<li>
					<a ui-sref="show_biznes">Show Biznes</a>
				</li>
				<li>
					<a ui-sref="interesting_facts">Interesting facts</a>
				</li>
				<li>
					<a ui-sref="paypal">Paypal</a>
				</li>
			</ul>
		</header>


		<div class="container">
			<div class="container_right" ui-view></div>
		</div>

		<script src="/assets/admin/plugins/js/jquery.js" type="text/javascript"></script>
		<script src="/assets/admin/plugins/js/jquery-ui.js" type="text/javascript"></script>


	<!-- 	// <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js" type="text/javascript"></script> -->
		<script src="/bower_components/angular/angular.js" type="text/javascript"></script>

		<script src="/bower_components/lodash/lodash.min.js" type="text/javascript"></script>
		<script src="/bower_components/restangular/dist/restangular.js" type="text/javascript"></script>
		<script src="/bower_components/angular-ui-router/release/angular-ui-router.min.js" type="text/javascript"></script>
		<script src="/bower_components/angular-file-upload/dist/angular-file-upload.min.js" type="text/javascript"></script>
		<script src="/bower_components/oclazyload/dist/ocLazyLoad.min.js" type="text/javascript"></script>
		<script src="/bower_components/angular-sanitize/angular-sanitize.min.js" type="text/javascript"></script>
		<script src="/bower_components/ngprogress/build/ngprogress.js"></script>

		<script src="/app/app.js"></script>
		<script src="/app/routes.app.js"></script>
		<script src="/app/MainController.js"></script>

<!-- 		// <script src="/app/app.js" type="text/javascript"></script>
		// <script src="/app/routes.app.js" type="text/javascript"></script> -->

<!-- 		// <script src="/app/MainController.js" type="text/javascript"></script> -->

	</body>
</html>