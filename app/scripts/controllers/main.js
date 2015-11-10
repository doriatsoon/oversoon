'use strict';

/**
 * @ngdoc function
 * @name mjolyApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the mjolyApp
 */
angular.module('mjolyApp')
  .controller('MainCtrl', ['$scope', 'angular-storage.store', 'auth', function($scope, store, auth) {

    $scope.login = function() {
      auth.signin({}, function(profile, token) {
        // Success callback
        store.set('profile', profile);
        store.set('token', token);
        //$location.path('/');
      }, function() {
        // Error callback
      });
    };

    $scope.universities = [{
      'university': 'Institut Electronique de Paris',
      'diplome': 'Diplôme d\'ingénieur',
      'years': '2007-2010'
    }, {
      'university': 'Lycée Diderot (Paris)',
      'diplome': 'Classe préparatoire (ATS)',
      'years': '2005-2006'
    }, {
      'university': 'Lycée Gustave Eiffel (GAGNY)',
      'diplome': 'BTS électronique',
      'years': '2003-2005'
    }];

  }]);