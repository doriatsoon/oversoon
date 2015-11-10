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
    'ngCookies',
    'ngResource',
    'ngRoute',
    'ngSanitize',
    'ngTouch'
  ])
  .config(function($routeProvider) {
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
