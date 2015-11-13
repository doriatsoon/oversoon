'use strict';

/**
 * @ngdoc overview
 * @name mjolyApp
 * @description
 * # mjolyApp
 *
 * Main module of the application.
 */
angular
  .module('mjolyApp', [
    'ngAnimate',
    'ngAria',
    'ngCookies',
    'ngResource',
    'ngRoute',
    'ngSanitize',
    'ngTouch',
    'auth0',
    'angular-storage',
    'angular-jwt'
  ])
  .config(function($routeProvider, $httpProvider) {
    // authProvider.init({
    //   domain: 'free',
    //   clientID: '77ib09vb6rlk8s'
    // });

    $routeProvider
      .when('/', {
        templateUrl: 'views/main.html',
        controller: 'MainCtrl',
        controllerAs: 'main'
      })
      .otherwise({
        redirectTo: '/'
      });
  });
