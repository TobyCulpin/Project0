  /**
   * Sample JavaScript code for youtube.channels.list
   * See instructions for running APIs Explorer code samples locally:
   * https://developers.google.com/explorer-help/guides/code_samples#javascript
   */

  window.authenticate = function() {
	return gapi.auth2.getAuthInstance()
	    .signIn({scope: "https://www.googleapis.com/auth/youtube.readonly"})
	    .then(function() { console.log("Sign-in successful"); },
		  function(err) { console.error("Error signing in", err); });
      }
      window.loadClient = function() {
	gapi.client.setApiKey("AIzaSyCRxgQdZe2gxvAnwvDWz5odo_D6u4EyO2I");
	return gapi.client.load("https://www.googleapis.com/discovery/v1/apis/youtube/v3/rest")
	    .then(function() { console.log("GAPI client loaded for API"); },
		  function(err) { console.error("Error loading GAPI client for API", err); });
      }
      // Make sure the client is loaded and sign-in is complete before calling this method.
      window.execute = function() {
	return gapi.client.youtube.channels.list({
	  "part": "snippet,contentDetails,statistics",
	  "id": "UCfRVM_B5VswMjFS_24cH8PQ"
	})
	    .then(function(response) {
		    // Handle the results here (response.result has the parsed body).
		    console.log("Response", response);
		  },
		  function(err) { console.error("Execute error", err); });
      }
      gapi.load("client:auth2", function() {
	gapi.auth2.init({client_id: "640882107638-b9jgvo238v9aml4lekrl5vjvri17eknd.apps.googleusercontent.com"});
      });