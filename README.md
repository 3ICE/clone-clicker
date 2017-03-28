# TIE-23500, Web Programming, Spring 2017
Teachers: Petri Ihantola, Mikko Nurminen


# Web Software Development - Daniel, Aparajita, Arjun, Krishna
## Group ID: `wsd17-DAAK`
This repo created 2017. 02. 23. by Arjun.

Readme written on 2017. 02. 25. by Daniel, updated on 20117. 03. 02. by Daniel.

Project description [Google doc](https://docs.google.com/document/d/1-ewnhsmQUpAdAhg6CiAEs34RXeRC5-dZ1wzEM0eZJ-A/edit)

My Web development repo: https://gitlab.rd.tut.fi/berezvai/web/

Master `seitti2017` repo: https://gitlab.rd.tut.fi/seitti/seitti2017/tree/master

Our OneDrive: [WSD-Time and Work done](https://tutfi-my.sharepoint.com/personal/venkatak_student_tut_fi/_layouts/15/guestaccess.aspx?folderid=0032e99ee17b6441488b2549b4050d193&authkey=ASVs2BtHwdhfQDYyTPuB4xM)

Our game on Heroku: [clone-clicker](https://clone-clicker.herokuapp.com/)

## Members:
* Daniel Berezvai, <daniel.berezvai@student.tut.fi> ```262849```
* Aparajita Chowdhury, <aparajita.chowdhury@student.tut.fi> ```267635```
* Arjun Venkatakrishnan, <arjun.venkatakrishnan@student.tut.fi> ```267930```
* Krishna Bagale, <krishna.bagale@student.tut.fi> ```267634```


## Timeline
We'll aim to hit each deadline of course. Here they are:
* Project Plan by Monday 6.3.2017 midnight
* JavaScript game ready for distribution by Friday 31.3.2017 midnight
* Test your store with other groups’ games by Sunday 16.4.2017 
* Final submission by Sunday 23.4.2017 midnight
* Present our project work to course staff 24. - 28.4.2017


## General description of what we are doing and how we are doing that
(what kinds of views, models are needed), how they relate to each other, and what is the implementation order: Todo


# Our first task is creating this readme.md file
In the project plan our group will at least tell the following:
* students in your group (names, email addresses, student ids) DONE, see above
* name of your group DONE, see above
* what of the listed features we plan to implement: ALL of them. See below.
* for each feature, how you are going to implement it: We promise not to copy paste anything from Google searches. Only look at it for inspiration.
* information on how you plan on working on the project  (will you meet face-to-face regularly, will use some project management tools, etc.) We have weekly meeting scheduled at fixed times, Wednesday 15:00-18:00.


# We plan to implement ALL of the listed features. Namely:
* Aparajita - Register as a player and developer
* Arjun and Daniel - As a developer: add games to their inventory, see list of game sales
* Daniel and Arjun - As a player: buy games, play games, see game high scores and record their score to it
* Aparajita - Authentication: Login, logout and register (both as player or developer).  See documentation about extending the User model https://docs.djangoproject.com/en/1.10/topics/auth/customizing/#extending-the-existing-user-model
* Krishna - Email validation is required. For dealing with email in Django see https://docs.djangoproject.com/en/1.8/topics/email/#email-backends You do not need to configure a real SMTP-server, using Django's Console Backend is enough.
* DAAK - Use Django auth
* Daniel and Arjun - Buy games, payment is handled by a mockup payment service: https://simplepayments.herokuapp.com/
* Krishna - Play games. See also game/service interaction
* Daniel and Arjun - Security restrictions, e.g. player is only allowed to play the games they’ve purchased Also consider how your players will find games (are they in a category, is there a search functionality?)
* Aparajita and Krishna - Add a game (URL) and set price for that game and manage that game (remove, modify)
* Arjun and Daniel - Basic game inventory and sales statistics (how many of the developers' games have been bought and when)
* Daniel and Arjun - Security restrictions, e.g. developers are only allowed to modify/add/etc. their own games, developer can only add games to their own inventory, etc.
* Krishna and Aparajita - Game/service interaction: When player has finished playing a game (or presses submit score), the game sends a postMessage to the parent window containing the current score. This score must be recorded to the player's scores and to the global high score list for that game. See section on Game Developer Information for details.
* Daniel - Messages from service to the game must be implemented as well
* Daniel - Our quality of Work will be high. As well as the Quality of our code (structure of the application, comments)
* Arjun - Purposeful use of framework (Don't-Repeat-Yourself principle, Model-View-Template separation of concerns)
* Aparajita and Krishna - User experience (styling, interaction)
* Arjun - Meaningful testing
* Daniel - Non-functional requirements: This Project plan
* DAAK - Overall documentation, demo, teamwork, and project management as seen from the history of your GitLab project (and possible other sources that you submit in your final report)
* DAAK - Own JavaScript game: Develop a (simple) game in JavaScript that communicates with the service (the game has to use at least these three service features: high score, save, load)
* Arjun - It will be deployed somewhere. Note that games may be possible to deploy as static content as many of them do not require backend - other than the game store (If you'd like to deploy games to heroku as well, it can be in it’s own project in GitLab. If this is the case, please share this project to wsd-agent and link the project from your main repository)
* Daniel - Extra functionality: Save/load and resolution feature
* Arjun - The service supports saving and loading for games with the simple message protocol described in Game Developer Information
* Arjun and Aparajita - 3rd party login. Allow OpenID, Gmail or Facebook login to your system. This is the only feature where you are supposed to use third party Django apps in your service.
* Krishna - RESTful API. Design and Implement some RESTful API to the service E.g. showing available games, high scores, showing sales for game developers (remember authentication)
* Daniel and Krishna - Mobile Friendly Attention is paid to usability on both traditional computers and mobile devices (smart phones/tablets).It works with devices with varying screen width and is usable with touch based devices http://en.wikipedia.org/wiki/Responsive_web_design
* Daniel, Arjun and Aparajita - Social media sharing Enable sharing games in some social media site (Facebook, Twitter, Google+, etc.).Focus on the metadata, so that the shared game is “advertised” well (e.g. instead of just containing a link to the service, the shared items should have a sensible description and an image)
* DAAK - Testing your service with other groups’ games
* Aparajita and Krishna - Use the games other groups’ games, choosing the games from a list when the list becomes available
* DAAK - Give feedback for the game and it’s functioning with your online game store. Make sure your feedback is constructive and professional in tone and in substance.
Feedback will be given using the games list using a mechanism on it, when the list  becomes available later.
High quality of feedback and more than 2 tested programs.
* Some extra features not listed in the project description what you plan to implement


## Implementation Plan
Software Requirements:
* JavaScript(Front-end and Back End)
* Ajax(Back-End)
* HTML, CSS(Front-end)


## Implementation Timetable
A minimum of two features will be implemented per week.


## Project Work Division and Assignment
The idea is that all the team members will be involved in designing and devleloping the entire application. The work division is for making sure responsibility is taken
and things does not go haywire.
* Front-end - Aparajita/Krishna
* Back-end - Daniel/Arjun


## Communication and Meeting
Our first meeting: three people were present in person, Daniel attended via Skype. For the remaining meetings we plan to all meet in person. We'll schedule a time, such as: Every wednesday 16-23
* We have created a facebook group for communication purposes.
* As of now we will be meeting every week and we are planning to have coding nights as well.
* The timings will be decided in the beginning of every week, so that everyone is comfortable with it.


## Risks and Mitigation
(Will be updated once in a while)
* The common ris=k factors would be any of the team members falling sick, in such a case the workload will be divided amongst the remaining members.
* Fall quickly and raise even faster, if we are not finding good results we will immediately change the plan.

We shall keep our project plan updated during the project!


### Appendix 1: Useful command line instructions:
Git global setup (do this once)
```
git config --global user.name "Firstname Lastname"
git config --global user.email "first.last@student.tut.fi"
```

Download this repository (only once)
```
git clone git@gitlab.rd.tut.fi:venkatak/wsd17-DAAK.git
```

Make sure you are in the correct folder (every time)
```
cd wsd17-DAAK
```

Update your local files with all our latest commits (before you make changes)
```
git pull
```

Add all files you modified (after you're finished with a task)
```
git status
git add .
git commit -m "hi"
git push
```

Have fun, web developers!

Daniel