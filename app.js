// register firebase as a module
var app = angular.module('chatAppIB', ['firebase']);

app.controller('ChatController', function($scope, $firebaseArray) {
    // download the message array into a local object
    var ref = firebase.database().ref().child('messages');

    $scope.messages = $firebaseArray(ref);

    // function when 'kirim' button clicked
    $scope.send = function() {
        // adding 
        $scope.messages.$add({
            user: $scope.userText,
            message: $scope.messageText,
            date: Date.now()
        })
    }

})