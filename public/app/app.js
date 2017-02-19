
var dependencies = [ 
    'ngSanitize',
    'ui.router',
    'restangular',
    'angularFileUpload',
    'oc.lazyLoad',
    'ngProgress'
];

var ddayApp = angular.module('ddayApp', dependencies);


// callburnApp.config(function(RestangularProvider){
//     RestangularProvider.addResponseInterceptor(function(data, operation, what, url, response, deferred) {
//       var extractedData = [];
//       if (operation === "getList") {
//         extractedData.resource = data.resource;
//         extractedData.status   = data.status;
//       }
//       else if (operation === 'get' ) {
//         extractedData.resource = data.resource;
//         extractedData.status = data.status;
//       }
//       else if (operation === 'remove' ) {
//         extractedData.resource = data.resource;
//         extractedData.status = data.status;
//       }
//       else if (operation === 'post' ) {
//         extractedData.message  = data.message;
//         extractedData.status   = data.status;
//         extractedData.resource = data.resource
//       }
//       else if (operation === 'put' ) {
//         extractedData.message = data.message;
//         extractedData.status  = data.status;
//       }
//       else{
//         extractedData = data.data;
//       }
//       return extractedData;
//     });
// });
// callburnApp.run(function(Restangular , $state){
//     Restangular.addResponseInterceptor(function (resp) {
//         if( resp.resource.error.no == -10){
//             $state.go('login');
//         }
//         return resp;
//     });
// });

// callburnApp.controller('HeaderController', ['$rootScope', 'Restangular', '$state', function($rootScope, Restangular, $state){
//     $rootScope.logout = function(){
//       Restangular.one('users/logout').get().then(function(data){
//         $state.go('login');
//       }, function(response){
//       });
//     }
// }]);