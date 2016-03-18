/**
 * Created by yasui on 2016/03/18.
 */
// create the module and name it scotchApp
var blogApp = angular.module('blogApp', ['ngRoute', 'mainCtrl', 'blogService']);

blogApp.config(function ($routeProvider) {
    $routeProvider
        .when('/', {
            templateUrl: '/template/index.html',
            controller: 'mainController'
            //service: 'blogService'
            //['mainCtrl', 'blogService']
        })
        .when('/about', {
            templateUrl: '/template/about.html',
            controller: 'aboutController'
        })
        .when('/contact', {
            templateUrl: '/template/contact.html',
            controller: 'contactController'
        })
});