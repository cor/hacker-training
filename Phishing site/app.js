var firebaseURL = 'http://informatica-d881b.firebaseio.com/';
var app = angular.module('app', ['ngMaterial', 'firebase', 'ngRoute']);

app.config(function($routeProvider) {
	$routeProvider
	.when('/signup', {
		templateUrl: 'signup.html',
		controller: 'signupCtrl'
	})
	.when('/redirect', {
		templateUrl: 'redirect.html',
		controller: 'redirectCtrl'
	})
	.otherwise({
		templateUrl: 'login.html',
		controller: 'loginCtrl'
	});
});

app.controller('loginCtrl', function($scope, $location) {

	alert("Hello world!");

});
