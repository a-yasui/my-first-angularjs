/**
 * Created by yasui on 2016/03/18.
 */
angular.module('blogService', [])

    .factory('Blog', function($http) {

        return {
            // get all the comments
            get : function() {
                return $http.get('/api/index');
            },

            // save a comment (pass in comment data)
            save : function(blogData) {
                return $http({
                    method: 'POST',
                    url: '/api/create',
                    headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                    data: $.param(blogData)
                });
            },

            // destroy a comment
            destroy : function(id) {
                return $http.delete('/api/delete/' + id);
            }
        }

    });