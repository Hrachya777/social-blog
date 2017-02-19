angular.module('ddayApp').controller('VideoController', 
	[ 		'$scope', 'routes',
	function($scope, routes){


		$scope.routes = routes;
		console.log(routes)

		$scope.changeName = function()
		{
			alert()	
		}


		$scope.trustSrc = function(src) {
		    return routes.trustAsResourceUrl(src);
		}
  
  		$scope.movie = {src:"http://www.youtube.com/embed/Lx7ycjC8qjE", title:"Egghead.io AngularJS Binding"};
	

}]);