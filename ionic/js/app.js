// Ionic Starter App

// angular.module is a global place for creating, registering and retrieving Angular modules
// 'starter' is the name of this angular module example (also set in a <body> attribute in index.html)
// the 2nd parameter is an array of 'requires'
angular.module('starter', ['ionic', 'firebase'])

.run(function($ionicPlatform) {
  $ionicPlatform.ready(function() {
    if(window.cordova && window.cordova.plugins.Keyboard) {
      // Hide the accessory bar by default (remove this to show the accessory bar above the keyboard
      // for form inputs)
      cordova.plugins.Keyboard.hideKeyboardAccessoryBar(true);

      // Don't remove this line unless you know what you are doing. It stops the viewport
      // from snapping when text inputs are focused. Ionic handles this internally for
      // a much nicer keyboard experience.
      cordova.plugins.Keyboard.disableScroll(true);
    }
    if(window.StatusBar) {
      StatusBar.styleDefault();
    }
  });
})

.factory('Auth', function($firebaseAuth){
    // Initialize Firebase colocar suas configurações aqui
    var config = {
        apiKey: "AIzaSyA9Zxu-eoW0ODxpZisFYxiHskeK4LowZzk",
	    authDomain: "chatdoc-bbbb1.firebaseapp.com",
	    databaseURL: "https://chatdoc-bbbb1.firebaseio.com",
	    projectId: "chatdoc-bbbb1",
	    storageBucket: "chatdoc-bbbb1.appspot.com",
	    messagingSenderId: "1053495518869"

    };
    return firebase.initializeApp(config);
})


.controller('AppCtrl', function($scope, Auth,$firebaseAuth){
  
 
  $scope.LoginFacebook = function(){
    var provider = new firebase.auth.FacebookAuthProvider();
    
    firebase.auth().signInWithPopup(provider).then(function(result) {
      // Usuario logado      
    }).catch(function(error) {
        // An error occurred
        console.log(error);
    });
  };  

  $scope.getUser = function(){       

    var user = firebase.auth().currentUser;
    if (user) {
        // Usuario logado
        $scope.usuario = user;                    
    } else {
        // Usuario deslogado
        $scope.usuario = "";
    }
  };  


  $scope.Logout = function(){   
    firebase.auth().signOut().then(function() {
      console.log("Usuario deslogado");
      $scope.usuario = "";
    }).catch(function (error){
      console.log(error);
    });    
  };  

})