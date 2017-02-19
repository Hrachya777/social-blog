ddayApp.config(function( $stateProvider , $urlRouterProvider ){
    $stateProvider
        .state('news', {
          url: '/news',
          templateUrl: '/app/news/view/index.html',
        })

        .state('video', {
          url: '/user/video',
          templateUrl: '/app/video/view/index.html',
          controller: 'VideoController',
          resolve : {
            routes: function(Restangular){
              return Restangular.one('user/video').get();
            },
            deps: ['$ocLazyLoad', function($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'ddayApp',
                    files: [
                       '/app/video/controller/VideoController.js',
                    ]
                });
            }]

          }
        })

        .state('fotoalboms', {
          url: '/fotoalboms',
          templateUrl: '/app/fotoalboms/view/index.html',  
        })

        .state('show_biznes', {
          url: '/show-biznes',
          templateUrl: '/app/show_biznes/view/index.html',
        })

        .state('interesting_facts', {
          url: '/interesting-facts',
          templateUrl: '/app/interesting_facts/view/index.html',
        })


        .state('paypal', {
          url: '/user/paypal',
          templateUrl: '/app/paypal/view/index.html',
          controller: 'PaypalController',
           resolve : {
            deps: ['$ocLazyLoad', function($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'ddayApp',
                    files: [
                       '/app/paypal/controller/PaypalController.js',
                    ]
                });
            }]

          }
        })
       
       $urlRouterProvider.otherwise('news');
});