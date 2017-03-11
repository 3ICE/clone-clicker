<!DOCTYPE html>
<html>
<head>
  <title>DAAK's Clone Clicker</title>
  <meta charset="utf-8"/>
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script>
  /* global $, alert */

  $(document).ready( function() {
    "use strict";

    // These variable track the state of this "game"
    var helpers = [];
    var upgrades = [];
    var points = 0;
	var enemy_health = 100;

    // Simulates "game over" when a score would be sent
    $("#submit_score").click( function () {
      var msg = {
        "messageType": "SCORE",
        "score": parseFloat($("#score").text())
      };
      window.parent.postMessage(msg, "*");
    });

    // Sends this game's state to the service.
    // The format of the game state is decided
    // by the game
    $("#save").click( function () {
      var msg = {
        "messageType": "SAVE",
        "gameState": {
          "helpers": helpers,
          "upgrades": upgrades,
          "score": parseFloat($("#score").text())
        }
      };
      window.parent.postMessage(msg, "*");
    });

    // Sends a request to the service for a
    // state to be sent, if there is one.
    $("#load").click( function () {
      var msg = {
        "messageType": "LOAD_REQUEST",
      };
      window.parent.postMessage(msg, "*");
    });

    // Listen incoming messages, if the messageType
    // is LOAD then the game state will be loaded.
    // Note that no checking is done, whether the
    // gameState in the incoming message contains
    // correct information.
    //
    // Also handles any errors that the service
    // wants to send (displays them as an alert).
    window.addEventListener("message", function(evt) {
      if(evt.data.messageType === "LOAD") {
        helpers = evt.data.gameState.helpers;
        upgrades = evt.data.gameState.upgardes;
        points = evt.data.gameState.score;
        $("#score").text(points);
        updateItems();
      } else if (evt.data.messageType === "ERROR") {
        alert(evt.data.info);
      }
    });

    // This is part of the mechanics of the "game"
    // it does not relate to the messaging with the
    // service.
    //
    // Adds an item to the players inventory
    $("#add_item").click( function () {
      helpers.push("A rock");
      $("#new_item").val("");
      updateItems();
    });

    $("#add_points").click(function () {
      var damage_done = 1 + upgrades.length + helpers.length;
	  points += damage_done;
	  enemy_health -= damage_done;
      $("#score").text(points);
	  $("#health").width(enemy_health * 10);
    });

    // This is part of the mechanics of the "game"
    // it does not relate to the messaging with the
    // service.
    //
    // "Redraws" the inventory of the player. Used
    // when items are added or the game is loaded
    function updateItems() {
      $("#item_list").html("");
      for (var i = helpers.length - 1; i >= 0; i--) {
        $("#item_list").append("<li>" + helpers[i] + "</li>");
      }
    }

    // Request the service to set the resolution of the
    // iframe correspondingly
    var message =  {
      messageType: "SETTING",
      options: {
      	"width": 700, //Integer
        "height": 300 //Integer
        }
    };
    window.parent.postMessage(message, "*");

  });
  </script>
</head>
<body>

  <button id="add_item">Hire Helper!</button>
  <button id="add_points">Attack</button>
  <button id="add_upgrades">Add Upgrades</button>

  <h3>Equipment</h3>
  <ul id="item_list"></ul>
  <div><span  id="score">0</span> Points</div>
  <div><span  id="health" style = "width:1000px; background-color:red; color:black; display:block">100 Hit-Points</span> </div>

  <button id="submit_score">Submit score</button><br>

  <button id="save">Save</button>
  <button id="load">Load</button>
</body>
</html>
