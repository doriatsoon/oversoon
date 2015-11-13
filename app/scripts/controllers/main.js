'use strict';

/**
 * @ngdoc function
 * @name mjolyApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the mjolyApp
 */
angular.module('mjolyApp')
  .controller('MainCtrl', ['$scope', '$http', 'auth', function($scope, $http, auth) {

    // $http({
    //   method: 'GET',
    //   url: 'http://www.linkedin.com/uas/oauth2/authorization',
    //   data: {
    //     client_id: '77ib09vb6rlk8s',
    //     response_type: 'code',
    //     redirect_uri: 'http://oversoon.free.fr',
    //     scope: 'r_basicprofile'
    //   },
    //   headers: {
    //     'Access-Control-Allow-Origin': '*',
    //     'Access-Control-Allow-Methods': 'GET, POST, PUT, DELETE, OPTIONS',
    //     'Access-Control-Allow-Headers': 'Content-Type, X-Requested-With',
    //     'X-Random-Shit': '123123123'
    //   }
    // 
    // 
    // }).then(function successCallback(response) {
    //   console.log('success', response);
    // }, function errorCallback(response) {
    //   console.log('error', response);
    // });

    // $scope.login = function() {
    //   auth.signin({}, function(profile, token) {
    //     // Success callback
    //     store.set('profile', profile);
    //     store.set('token', token);
    //     //$location.path('/');
    //   }, function() {
    //     // Error callback
    //   });
    // };

    $scope.publications = [{
      "title": "Git et ses commandes",
      "summary": "Git peut être un outil très puissant si toutefois on sait le manipuler! Voici un article sur git et ses commandes.",
      "link": "https://oversoon.wordpress.com/2015/09/18/git-et-ses-commandes/"
    }, {
      "title": "CLEAN CODE & CODE REVIEW",
      "summary": "Ce que beaucoup de personnes ont du mal à comprendre, c’est qu’un code propre, c’est un logiciel fiable, robuste et évolutif. Beaucoup de développeurs introduisent du legacy code dans les logiciels bien souvent pour des raisons qui finalement, ne sont pas justifiées. Souvent on entend : « j’ai pas le temps… », ou encore « je le ferai plus tard », sachant très bien que c’est faux...",
      "link": "https://oversoon.wordpress.com/2014/02/20/clean-code-code-review/"
    }, {
      "title": "PAIR TESTING",
      "summary": "Mais où finissent les anomalies mineurs, triviales ? En général, elles terminent au fond d’un tiroir fermé à clefs. Personne ne peut (veut) ouvrir ce tiroir. En conséquence de cela, on a un produit qui au cours du temps perd de sa valeur en terme de qualité...",
      "link": "https://oversoon.wordpress.com/2014/02/04/pair-testing/"
    }];


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

    $scope.skills = [{
      "title": "Java/JEE",
      "level": "90%",
      "label": "Expert"
    }, {
      "title": "AngularJS",
      "level": "85%",
      "label": "Avancé"
    }, {
      "title": "Spring / Hibernate",
      "level": "75%",
      "label": "Compétent"
    }, {
      "title": "Méthodes agiles",
      "level": "90%",
      "label": "Expert",
      "more": "Scrum, Kanban, Lean"
    }, {
      "title": "Maven",
      "level": "85%",
      "label": "Avancé"
    }, {
      "title": "Tomcat / JBoss",
      "level": "70%",
      "label": "Compétent"
    }, {
      "title": "GIT",
      "level": "85%",
      "label": "Avancé"
    }, {
      "title": "Craftmanship",
      "level": "85%",
      "label": "Avancé",
      "more": "Pratiques orientées qualité: TDD, BDD, DDD, refactoring, etc."
    }, {
      "title": "DevOps",
      "level": "70%",
      "label": "Compétent",
      "more": "Déploiement continue avec Jenkins, Docker"
    }, {
      "title": "HTML5, JS, SCSS",
      "level": "90%",
      "label": "Expert"
    }];

    jQuery(document).ready(function($) {
      /*======= Skillset *=======*/

      $('.level-bar-inner').css('width', '0');

      $(window).on('load', function() {

        $('.level-bar-inner').each(function() {

          var itemWidth = $(this).data('level');

          $(this).animate({
            width: itemWidth
          }, 800);

        });

      });
    });

  }]);
