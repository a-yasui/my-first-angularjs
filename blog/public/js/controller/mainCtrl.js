/**
 * Created by yasui on 2016/03/18.
 */
angular.module('mainCtrl', [])

    // inject the Comment service into our controller
    .controller('mainController', function ($scope, $http, Blog) {
        // object to hold all the data for the new comment form
        $scope.blogData = {};

        // loading variable to show the spinning loading icon
        $scope.loading = true;

        // get all the comments first and bind it to the $scope.comments object
        // use the function we created in our service
        // GET ALL BLOGS ==============
        Blog.get()
            .success(function (data) {
                $scope.blogs = data;
                $scope.loading = false;
            });

        // function to handle submitting the form
        // SAVE A COMMENT ================
        $scope.submitComment = function () {
            $scope.loading = true;

            // save the comment. pass in comment data from the form
            // use the function we created in our service
            Blog.save($scope.blogData)
                .success(function (data) {

                    // if successful, we'll need to refresh the comment list
                    Blog.get()
                        .success(function (getData) {
                            $scope.blogs = getData;
                            $scope.loading = false;
                        });

                })
                .error(function (data) {
                    console.log(data);
                });
        };

        // function to handle deleting a comment
        // DELETE A COMMENT ====================================================
        $scope.deleteBlog = function (id) {
            $scope.loading = true;

            // use the function we created in our service
            Blog.destroy(id)
                .success(function (data) {

                    // if successful, we'll need to refresh the comment list
                    Blog.get()
                        .success(function (getData) {
                            $scope.blogs = getData;
                            $scope.loading = false;
                        });

                });
        };

    })
    .controller('aboutController', function ($scope, $http) {
        $scope.data = {};
    })
    .controller('contactController', function ($scope, $http) {
        $scope.data = {};
    });
