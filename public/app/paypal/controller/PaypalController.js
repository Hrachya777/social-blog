angular.module('ddayApp').controller('PaypalController', 
	[ 	'$scope', '$rootScope', '$state','Restangular',
	function($scope,   $rootScope, $state, Restangular){


		$scope.paypal = function(){
			Restangular.one('user/paypal').get().then(function(data){
				console.log(data)
			})
		}


}]);