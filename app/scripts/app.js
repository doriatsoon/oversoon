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
    'ngTouch',
    'auth0',
    'angular-storage',
    'angular-jwt'
  ])
  .config(function($routeProvider, authProvider) {
    authProvider.init({
      domain: 'YOUR_NAMESPACE',
      clientID: 'YOUR_CLIENT_ID'
    });
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
