var myapp = angular.module('pizzita',["ui.router"]);
myapp.config(function ($stateProvider, $urlRouterProvider){

  $urlRouterProvider.otherwise('/inicio')

  $stateProvider
      .state('inicio', {
          url: '/inicio',
          templateUrl: 'pages/main.php'
		})

			.state('login',{
					url: '/login',
					templateUrl: 'pages/login.php'

					})

      .state('registro',{
          url: '/registro',
          templateUrl: 'pages/registro.php'
      })

      .state('cuenta',{
          url: '/cuenta',
          templateUrl: 'pages/cuenta.php'
      })

      .state ('admin', {
          url: '/admin',
          templateUrl: 'pages/adminMenu.php'
      })

      .state ('admin.pizzas',{
            url: '/npizza',
            templateUrl: 'pages/formPizza.php'



      })

      .state ('pizzas', {
          url: '/pizzas',
          templateUrl: 'pages/pizzas.php'

      })
})
